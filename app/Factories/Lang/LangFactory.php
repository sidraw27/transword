<?php

namespace App\Factories;

use App\Factories\Lang\AbstractLang;
use App\Factories\Lang\EnLang;
use App\Factories\Lang\ZhLang;

class LangFactory
{
    /**
     * @param string $lang
     * @return AbstractLang
     * @throws \Exception
     */
    public static function getLang(string $lang): AbstractLang
    {
        switch ($lang) {
            case 'zh':
                return new ZhLang();
                break;
            case 'en':
                return new EnLang();
                break;
            default:
                throw new \Exception('UnKnown Language');
        }
    }

}