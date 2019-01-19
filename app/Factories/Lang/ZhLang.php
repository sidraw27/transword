<?php

namespace App\Factories\Lang;

use App\Repositories\ZhVocabularyRepository;

class ZhLang implements AbstractLang
{
    public function getDisplayName()
    {
        return '中文';
    }

    public function getRepository()
    {
        return \App::make(ZhVocabularyRepository::class);
    }
}