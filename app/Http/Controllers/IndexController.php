<?php

namespace App\Http\Controllers;

use App\Factories\LangFactory;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        return view('translate');
    }

    public function vocabulary(string $lang, string $word)
    {
        try {
            $lang = LangFactory::getLang($lang);

        } catch (\Exception $e) {
            return response($e->getMessage(), 404);
        }

        $locale  = $lang->getLocaleName();
        $service = $lang->getService();

        $service->getPageData($word);

        return view('translate');
    }
}