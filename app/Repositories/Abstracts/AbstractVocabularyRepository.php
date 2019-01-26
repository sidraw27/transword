<?php

namespace App\Repositories\Abstracts;

abstract class AbstractVocabularyRepository extends AbstractRepository
{
    abstract public function getByWord(string $word);

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
            case 'en':
                return $result->enMapping()->get();
            case 'zh':
                return $result->zhMapping()->get();
            default:
                throw new \Exception('Unknown Lang');
        }
    }
}