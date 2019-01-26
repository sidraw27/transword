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

        $partOfSpeechChange = $this->enVocabularyRepo->getPartOfSpeechChange($vocabulary['word'])->toArray();
        $tmpChange = [];
        foreach ($partOfSpeechChange as $key => $change) {
            if (is_null($change)) continue;
            switch ($key) {
                case 'past_tense':
                    $tmpChange['動詞']['過去式'] = $change;
                    break;
                case 'present_participle':
                    $tmpChange['動詞']['現在完成式'] = $change;
                    break;
                case 'past_participle':
                    $tmpChange['動詞']['過去完成式'] = $change;
                    break;
                case 'countable_word':
                    $tmpChange['名詞']['名詞複數'] = $change;
                    break;
                case 'adjective_comparative':
                    $tmpChange['形容詞']['比較級'] = $change;
                    break;
                case 'adjective_superlative':
                    $tmpChange['形容詞']['最高級'] = $change;
                    break;
                case 'adverb_comparative':
                    $tmpChange['副詞']['比較級'] = $change;
                    break;
                case 'adverb_superlative':
                    $tmpChange['副詞']['最高級'] = $change;
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