<?php

namespace App\Repositories;

use App\Entities\ZhVocabulary;
use App\Repositories\Abstracts\AbstractVocabularyRepository;

class ZhVocabularyRepository extends AbstractVocabularyRepository
{
    /**
     * CnVocabularyRepository constructor.
     * @param ZhVocabulary | \Illuminate\Database\Eloquent\Builder $entity
     */
    public function __construct(ZhVocabulary $entity)
    {
        $this->entity = $entity;
        $this->setPrefix('CnVocabulary:');
    }

    public function getByWord(string $word, string $column = 'word')
    {
        return $this->entity
            ->where($column, $word)
            ->get();
    }
}
