<?php

namespace App\Services\Vocabularies;

abstract class AbstractVocabularyService
{
    /**
     * @param string $word
     * @param string $locale
     * @return mixed
     */
    abstract public function getPageData(string $word, string $locale);
}