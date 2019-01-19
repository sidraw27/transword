<?php

namespace App\Factories\Lang;

use App\Repositories\ZhVocabularyRepository;
use App\Services\Vocabularies\AbstractVocabularyService;

class ZhLang implements AbstractLang
{
    public function getLocaleName()
    {
        return '中文';
    }

    public function getRepository()
    {
        return \App::make(ZhVocabularyRepository::class);
    }

    public function getService(): AbstractVocabularyService
    {
        // TODO: Implement getService() method.
    }
}