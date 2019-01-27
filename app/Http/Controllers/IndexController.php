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
        return view('index');
    }

    public function vocabulary(string $word)
    {
        if (preg_match( '/^[a-zA-Z]$/', $word, $ma)) {
            $lang = 'en';
        } elseif (preg_match('/^\p{Han}/u', $word)) {
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

        try {
            $pageData = $service->getPageData($word, $this->locale);
        } catch (\Exception $e) {
            return redirect()->route('index');
        }

        return view('translate', compact('lang', 'pageData'));
    }
}