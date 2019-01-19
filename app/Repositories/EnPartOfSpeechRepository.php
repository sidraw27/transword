<?php

namespace App\Repositories;

use App\Entities\EnPartOfSpeech;

class EnPartOfSpeechRepository extends AbstractRepository
{
    private $entity;

    /**
     * EnPartOfSpeechRepository constructor.
     * @param EnPartOfSpeech | \Illuminate\Database\Eloquent\Builder $entity
     */
    public function __construct(EnPartOfSpeech $entity)
    {
        $this->entity = $entity;
        $this->setPrefix('EnPartOfSpeech:');
    }
}
