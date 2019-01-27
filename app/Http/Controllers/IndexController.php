<?php

namespace App\Http\Controllers;

use App\Factories\LangFactory;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    private $locale;

    public function __construct()
    {
        $this->locale = \App::getLocale();
    }

    public function index()
    {
        $searchWord = \Request::get('search', null);

        if ( ! is_null($searchWord)) {
            return redirect()->route('vocabulary', ['word' => trim($searchWord)]);
        }

        return view('index');
    }

    public function vocabulary(string $word)
    {
        if (preg_match( '/^[a-zA-Z]{1,30}$/', $word)) {
            $lang = 'en';
        } elseif (preg_match('/^\p{Han}{1,30}$/u', $word)) {
            $lang = 'zh';
        } else {
            return redirect()->route('index');
        }

        $lang = strtolower($lang);

        try {
            $langFactory = LangFactory::getLang($lang);

        } catch (\Exception $e) {
            return response($e->getMessage(), 404);
        }

        $service = $langFactory->getService();

        $pageData = $service->getPageData($word, $this->locale);

        return view('translate', compact('lang', 'pageData'));
    }
}