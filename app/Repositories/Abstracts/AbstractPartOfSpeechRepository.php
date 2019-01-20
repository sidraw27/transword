<?php

namespace App\Repositories\Abstracts;

abstract class AbstractPartOfSpeechRepository extends AbstractRepository
{
    public function getByType(string $type)
    {
        return $this->entity
            ->where('type', $type)
            ->first();
    }
}