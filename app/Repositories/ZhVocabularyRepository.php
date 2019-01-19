<?php

namespace App\Repositories;

use App\Entities\ZhVocabulary;
use App\Traits\CacheTrait;

class ZhVocabularyRepository
{
    use CacheTrait;

    private $entity;

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
