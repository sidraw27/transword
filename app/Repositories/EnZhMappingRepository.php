<?php

namespace App\Repositories;

use App\Entities\EnZhMapping;
use App\Repositories\Abstracts\AbstractMappingRepository;
use App\Traits\CacheTrait;

class EnZhMappingRepository extends AbstractMappingRepository
{
    use CacheTrait;

    private $entity;

    /**
     * EnZhMappingRepository constructor.
     * @param EnZhMapping | \Illuminate\Database\Eloquent\Builder $entity
     */
    public function __construct(EnZhMapping $entity)
    {
        $this->entity = $entity;
        $this->setPrefix('EnZhMapping:');
    }
}
