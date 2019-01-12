<?php

namespace App\Repositories;

use App\Entities\CnVocabulary;
use App\Traits\CacheTrait;

class CnVocabularyRepository
{
    use CacheTrait;

    private $entity;

    /**
     * CnVocabularyRepository constructor.
     * @param CnVocabulary | \Illuminate\Database\Eloquent\Builder $entity
     */
    public function __construct(CnVocabulary $entity)
    {
        $this->entity = $entity;
        $this->setPrefix('CnVocabulary:');
    }
}
