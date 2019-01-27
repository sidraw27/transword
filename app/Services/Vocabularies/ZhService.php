<?php

namespace App\Services\Vocabularies;

use App\Repositories\ZhVocabularyRepository;

class ZhService extends AbstractVocabularyService
{
    private $zhVocabularyRepo;

    public function __construct(ZhVocabularyRepository $zhVocabularyRepo)
    {
        $this->zhVocabularyRepo = $zhVocabularyRepo;
    }

    /**
     * @param string $word
     * @param string $locale
     * @return array
     * @throws \Exception
     */
    public function getPageData(string $word, string $locale)
    {
        $zhVocabulary = $this->zhVocabularyRepo->getByWord($word)->first();
        $vocabulary   = [
            'word' => $zhVocabulary['word'] ?? ''
        ];

        try {
            $enVocabularies = $this->zhVocabularyRepo->getTransVocabularies($zhVocabulary->id, 'en');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

        $transVocabularies = [];
        foreach ($enVocabularies as $enVocabulary) {
            $transVocabularies[] = [
                'word' => $enVocabulary['word'] ?? ''
            ];
        }

        return compact('vocabulary', 'transVocabularies');
    }
}