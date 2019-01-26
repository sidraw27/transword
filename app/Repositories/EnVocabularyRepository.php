<?php

namespace App\Repositories;

use App\Entities\EnVocabulary;
use App\Enum\EnTableMapping;
use App\Repositories\Abstracts\AbstractVocabularyRepository;

class EnVocabularyRepository extends AbstractVocabularyRepository
{
    /**
     * EnVocabularyRepository constructor.
     * @param EnVocabulary | \Illuminate\Database\Eloquent\Builder $entity
     */
    public function __construct(EnVocabulary $entity) {
        $this->entity = $entity;
        $this->setPrefix('EnVocabulary:');
    }

    public function getByWord(string $word)
    {
        return $this->entity
            ->where('word', $word)
            ->get();
    }

    public function getPartOfSpeechChange(string $word)
    {
        return $this->entity
            ->where(EnTableMapping::TABLE . '.word', $word)
            ->leftJoin(EnTableMapping::VERB_TENSES,
                EnTableMapping::VERB_TENSES . '.word', '=', EnTableMapping::TABLE . '.word')
            ->leftJoin(EnTableMapping::NOUN_COUNTABLE,
                EnTableMapping::NOUN_COUNTABLE . '.word', '=', EnTableMapping::TABLE . '.word')
            ->leftJoin(EnTableMapping::ADJECTIVE_COMPARATIVE,
                EnTableMapping::ADJECTIVE_COMPARATIVE . '.word', '=', EnTableMapping::TABLE . '.word')
            ->leftJoin(EnTableMapping::ADVERB_COMPARATIVE,
                EnTableMapping::ADVERB_COMPARATIVE . '.word', '=', EnTableMapping::TABLE . '.word')
            ->first([
                EnTableMapping::TABLE . '.word',
                EnTableMapping::VERB_TENSES . '.past_tense',
                EnTableMapping::VERB_TENSES . '.present_participle',
                EnTableMapping::VERB_TENSES . '.past_participle',
                EnTableMapping::NOUN_COUNTABLE . '.countable_word',
                EnTableMapping::ADJECTIVE_COMPARATIVE . '.comparative AS adjective_comparative',
                EnTableMapping::ADJECTIVE_COMPARATIVE . '.superlative AS adjective_superlative',
                EnTableMapping::ADVERB_COMPARATIVE . '.comparative AS adverb_comparative',
                EnTableMapping::ADVERB_COMPARATIVE . '.superlative AS adverb_superlative',
            ]);
    }
}
