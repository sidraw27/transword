<?php

namespace App\Factories\Lang;

use App\Services\Vocabularies\AbstractVocabularyService;

interface AbstractLang
{
    public function getRepository();

    public function getService(): AbstractVocabularyService;
}