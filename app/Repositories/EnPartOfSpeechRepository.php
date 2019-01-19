<?php

namespace App\Repositories;

use App\Entities\EnPartOfSpeech;
use App\Traits\CacheTrait;

class EnPartOfSpeechRepository
{
    use CacheTrait;

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
