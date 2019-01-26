<?php

namespace App\Factories\Lang;

use App\Repositories\EnVocabularyRepository;
use App\Services\Vocabularies\AbstractVocabularyService;
use App\Services\Vocabularies\EnService;

class EnLang implements AbstractLang
{
    public function getDisplayName():string
    {
        return 'English';
    }

    public function getRepository()
    {
        return \App::make(EnVocabularyRepository::class);
    }

    public function getService(): AbstractVocabularyService
    {
        return \App::make(EnService::class);
    }
}