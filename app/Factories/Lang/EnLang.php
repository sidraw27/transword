<?php

namespace App\Factories\Lang;

use App\Repositories\EnVocabularyRepository;

class EnLang implements AbstractLang
{
    public function getDisplayName()
    {
        return '英文';
    }

    public function getRepository()
    {
        return \App::make(EnVocabularyRepository::class);
    }
}