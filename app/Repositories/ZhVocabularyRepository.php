<?php

namespace App\Repositories;

use App\Entities\ZhVocabulary;

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
}
