<?php

namespace App\Factories;

use App\Factories\Lang\AbstractLang;

class LangFactory
{
    /**
     * @param string $lang
     * @return AbstractLang
     * @throws \Exception
     */
    public static function getLang(string $lang): AbstractLang
    {
        $lang = ucfirst(strtolower($lang));

        try {
            $reflection = new \ReflectionClass("App\Factories\Lang\\{$lang}Lang");
        } catch (\ReflectionException $e) {
            throw new \Exception('UnKnown Language');
        }

        /** @var AbstractLang $object */
        $object = $reflection->newInstanceArgs();

        return $object;
    }

}