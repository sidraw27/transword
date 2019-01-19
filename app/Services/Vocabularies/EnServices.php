<?php

namespace App\Services\Vocabularies;

use App\Repositories\EnVocabularyRepository;

class EnServices extends AbstractVocabularyService
{
    private $enVocabularyRepo;

    public function __construct(EnVocabularyRepository $enVocabularyRepo)
    {
        $this->enVocabularyRepo = $enVocabularyRepo;
    }

    public function getPageData(string $word)
    {
        $data = $this->enVocabularyRepo->getByWord($word);
    }
}