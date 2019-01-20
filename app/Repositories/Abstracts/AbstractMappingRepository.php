<?php

namespace App\Repositories\Abstracts;

abstract class AbstractMappingRepository extends AbstractRepository
{
    public function getByLeftId(int $id)
    {
        return $this->entity
            ->where('left_id', $id)
            ->get();
    }
}