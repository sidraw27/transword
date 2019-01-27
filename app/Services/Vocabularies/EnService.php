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

        if ($enVocabularies->isEmpty()) {
            return [];
        }

        $transVocabularies = [];

        $vocabulary   = [
            'word' => $enVocabularies->first()->word
        ];

        $partOfSpeechChange = $this->enVocabularyRepo->getPartOfSpeechChange($vocabulary['word'])->toArray();
        $tmpChange = [];
        foreach ($partOfSpeechChange as $key => $change) {
            if (is_null($change)) continue;
            switch ($key) {
                case 'past_tense':
                    $tmpChange['v'][] = [
                        'type'   => trans('part_of_speech.past_tense'),
                        'change' => $change
                    ];
                    break;
                case 'present_participle':
                    $tmpChange['v'][] = [
                        'type'   => trans('part_of_speech.present_participle'),
                        'change' => $change
                    ];
                    break;
                case 'past_participle':
                    $tmpChange['v'][] = [
                        'type'   => trans('part_of_speech.past_participle'),
                        'change' => $change
                    ];
                    break;
                case 'countable_word':
                    $tmpChange['n'][] = [
                        'type'   => trans('part_of_speech.countable_word'),
                        'change' => $change
                    ];
                    break;
                case 'adjective_comparative':
                    $tmpChange['adj'][] = [
                        'type'   => trans('part_of_speech.adjective_comparative'),
                        'change' => $change
                    ];
                    break;
                case 'adjective_superlative':
                    $tmpChange['adj'][] = [
                        'type'   => trans('part_of_speech.adjective_superlative'),
                        'change' => $change
                    ];
                    break;
                case 'adverb_comparative':
                    $tmpChange['adv'][] = [
                        'type'   => trans('part_of_speech.adverb_comparative'),
                        'change' => $change
                    ];
                    break;
                case 'adverb_superlative':
                    $tmpChange['adv'][] = [
                        'type'   => trans('part_of_speech.adverb_superlative'),
                        'change' => $change
                    ];
                    break;
                default:
                    break;
            }
        }
        $partOfSpeechChange = $tmpChange;

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
                        'word' => $zhVocabulary['word'] ?? ''
                    ];
                }
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }

        return compact('vocabulary', 'transVocabularies', 'sampleSentences', 'partOfSpeechChange');
    }
}