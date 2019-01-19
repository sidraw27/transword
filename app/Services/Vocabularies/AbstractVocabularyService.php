<?php

namespace App\Services\Vocabularies;

abstract class AbstractVocabularyService
{
    abstract public function getPageData(string $word);
}