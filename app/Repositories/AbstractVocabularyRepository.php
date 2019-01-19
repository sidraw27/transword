<?php

namespace App\Repositories;

abstract class AbstractVocabularyRepository extends AbstractRepository
{
    public function getByWord(string $word)
    {
        return $this->entity->where('word', $word)->get();
    }
}