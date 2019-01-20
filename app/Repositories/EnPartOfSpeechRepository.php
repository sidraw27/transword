<?php

namespace App\Repositories;

use App\Entities\EnPartOfSpeech;
use App\Repositories\Abstracts\AbstractPartOfSpeechRepository;

class EnPartOfSpeechRepository extends AbstractPartOfSpeechRepository
{
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
