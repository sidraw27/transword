<?php

namespace App\Services\Vocabularies;

use App\Elasticsearch\SentenceEs;
use App\Repositories\EnPartOfSpeechRepository;
use App\Repositories\EnVocabularyRepository;

class EnService extends AbstractVocabularyService
{
    private $enVocabularyRepo;
    private $partOfSpeechRepo;
    private $sentenceEs;

    public function __construct(EnVocabularyRepository $enVocabularyRepo, EnPartOfSpeechRepository $enPartOfSpeechRepo,
                                SentenceEs $sentenceEs)
    {
        $this->enVocabularyRepo = $enVocabularyRepo;
        $this->partOfSpeechRepo = $enPartOfSpeechRepo;
        $this->sentenceEs       = $sentenceEs;
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

        $partOfSpeechChange = $this->enVocabularyRepo->getPartOfSpeechChange($vocabulary['word']);

        $sampleSentences = [];
        $sentenceEs = $this->sentenceEs->searchByword($word);

        foreach ($sentenceEs['hits'] as $sentence) {
            $sampleSentences[] = $sentence['_source'];
        }

        foreach ($enVocabularies as $enVocabulary) {
            if (is_null($enVocabulary->part_of_speech)) continue;

            $partOfSpeech = $this->partOfSpeechRepo->getByType($enVocabulary->part_of_speech);
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

        return compact('vocabulary', 'transVocabularies', 'sampleSentences', 'partOfSpeechChange');
    }
}