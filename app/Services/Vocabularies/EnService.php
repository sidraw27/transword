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

        $enVocabularies = $this->enVocabularyRepo->getByWord($word);
        $transVocabularies = [];
        $vocabulary   = [
            'word' => $enVocabularies->first()->word
        ];

        foreach ($enVocabularies as $enVocabulary) {
            if ( ! is_null($enVocabulary->part_of_speech)) {
                $partOfSpeech = $this->partOfSpeechRepo->getByType($enVocabulary->part_of_speech);
            }
            $alias = $partOfSpeech->alias ?? '-';

            try {
                $zhVocabularies = $this->enVocabularyRepo->getTransVocabularies($enVocabulary->id, 'zh');

                foreach ($zhVocabularies as $zhVocabulary) {
                    $transVocabularies[$alias][] = [
                        'word' => $zhVocabulary['tw_word'] ?? ''
                    ];
                }
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }

        return compact('vocabulary', 'transVocabularies');
    }
}