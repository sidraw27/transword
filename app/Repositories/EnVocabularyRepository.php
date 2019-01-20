<?php

namespace App\Repositories;

use App\Entities\EnVocabulary;
use App\Repositories\Abstracts\AbstractVocabularyRepository;

class EnVocabularyRepository extends AbstractVocabularyRepository
{
    /**
     * EnVocabularyRepository constructor.
     * @param EnVocabulary | \Illuminate\Database\Eloquent\Builder $entity
     */
    public function __construct(EnVocabulary $entity)
    {
        $this->entity = $entity;
        $this->setPrefix('EnVocabulary:');
    }

    /**
     * @param int $id
     * @param string $lang
     * @return mixed
     * @throws \Exception
     */
    public function getTransVocabularies(int $id, string $lang = 'zh')
    {
        $result = $this->entity->find($id);

        switch ($lang) {
            case 'zh':
                return $result->zhMapping()->get();
            default:
                throw new \Exception('Unknown Lang');
        }
    }
}
