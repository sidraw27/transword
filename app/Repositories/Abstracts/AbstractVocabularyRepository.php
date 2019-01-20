<?php

namespace App\Repositories\Abstracts;

abstract class AbstractVocabularyRepository extends AbstractRepository
{
    public function getByWord(string $word, string $column = 'word')
    {
        return $this->entity
            ->where($column, $word)
            ->get();
    }

    /**
     * @param int $id
     * @param string $lang
     * @return mixed
     * @throws \Exception
     */
    public function getTransVocabularies(int $id, string $lang)
    {
        $result = $this->entity->find($id);

        switch ($lang) {
            case 'en':
                return $result->enMapping()->get();
            case 'zh':
                return $result->zhMapping()->get();
            default:
                throw new \Exception('Unknown Lang');
        }
    }
}