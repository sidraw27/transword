<?php

namespace App\Factories\Lang;

use App\Repositories\EnVocabularyRepository;
use App\Services\Vocabularies\AbstractVocabularyService;
use App\Services\Vocabularies\EnServices;

class EnLang implements AbstractLang
{
    public function getLocaleName()
    {
        return 'EN';
    }

    public function getRepository()
    {
        return \App::make(EnVocabularyRepository::class);
    }

    public function getService(): AbstractVocabularyService
    {
        return \App::make(EnServices::class);
    }
}