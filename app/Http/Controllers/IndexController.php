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

    public function vocabulary(string $lang, string $word)
    {
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