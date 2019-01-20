<?php

namespace App\Services\Vocabularies;

use App\Repositories\EnPartOfSpeechRepository;
use App\Repositories\EnVocabularyRepository;

class EnService extends AbstractVocabularyService
{
    private $enVocabularyRepo;
    private $partOfSpeechRepo;

    public function __construct(EnVocabularyRepository $enVocabularyRepo, EnPartOfSpeechRepository $enPartOfSpeechRepo)
    {
        $this->enVocabularyRepo = $enVocabularyRepo;
        $this->partOfSpeechRepo = $enPartOfSpeechRepo;
    }

    /**
     * @param string $word
     * @param string $locale
     * @return array
     * @throws \Exception
     */
    public function getPageData(string $word, string $locale)
    {

        $enVocabulary = $this->enVocabularyRepo->getByWord($word);
        $vocabulary   = [
            'word' => $enVocabulary->word
        ];

        try {
            $zhVocabularies = $this->enVocabularyRepo->getTransVocabularies($enVocabulary->id, 'zh');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

        if ( ! is_null($enVocabulary->part_of_speech)) {
            $vocabulary['partOfSpeech'] = $this->partOfSpeechRepo->getByType($enVocabulary->part_of_speech);
        }

        $transVocabularies = [];
        foreach ($zhVocabularies as $zhVocabulary) {
            $transVocabularies[] = [
                'word' => $zhVocabulary['tw_word'] ?? ''
            ];
        }

        return compact('vocabulary', 'transVocabularies');
    }
}