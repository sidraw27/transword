<?php

namespace App\Repositories;

use App\Entities\ZhSimilarVocabulary;
use App\Traits\CacheTrait;

class ZhSimilarVocabularyRepository
{
    use CacheTrait;

    private $entity;

    /**
     * ZhSimilarVocabulariesRepository constructor.
     * @param ZhSimilarVocabulary | \Illuminate\Database\Eloquent\Builder $entity
     */
    public function __construct(ZhSimilarVocabulary $entity)
    {
        $this->entity = $entity;
        $this->setPrefix('ZhSimilarVocabularies:');
    }
}
