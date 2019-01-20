<?php

namespace App\Repositories\Abstracts;

abstract class AbstractVocabularyRepository extends AbstractRepository
{
    public function getByWord(string $word)
    {
        return $this->entity->where('word', $word)->first();
    }
}