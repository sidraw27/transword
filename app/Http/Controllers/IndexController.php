<?php

namespace App\Http\Controllers;

use App\Factories\LangFactory;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function vocabulary(string $lang, string $word)
    {
        try {
            $lang = LangFactory::getLang($lang);

            $displayName = $lang->getDisplayName();
        } catch (\Exception $e) {
            return response($e->getMessage(), 404);
        }

        return view('index');
    }
}