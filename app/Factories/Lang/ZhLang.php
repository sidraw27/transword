<?php

namespace App\Factories\Lang;

use App\Repositories\ZhVocabularyRepository;
use App\Services\Vocabularies\AbstractVocabularyService;
use App\Services\Vocabularies\ZhService;

class ZhLang implements AbstractLang
{
    public function getRepository()
    {
        return \App::make(ZhVocabularyRepository::class);
    }

    public function getService(): AbstractVocabularyService
    {
        return \App::make(ZhService::class);
    }
}