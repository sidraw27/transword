<?php

namespace App\Repositories;

use App\Entities\EnVocabulary;
use App\Traits\CacheTrait;

class EnVocabularyRepository
{
    use CacheTrait;

    private $entity;

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
