<?php

namespace App\Repositories;

use App\Entities\EnVocabulary;

class EnVocabularyRepository extends AbstractVocabularyRepository
{
    /**
     * EnVocabularyRepository constructor.
     * @param EnVocabulary | \Illuminate\Database\Eloquent\Builder $entity
     */
    public function __construct(EnVocabulary $entity)
    {
        $this->entity = $entity;
        $this->setPrefix('EnVocabulary:');
    }
}
