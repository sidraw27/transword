<?php

namespace App\Repositories;

use App\Entities\User;

class UserRepository
{
    private $entity;

    public function __construct(User $entity)
    {
        $this->entity = $entity;
        $this->setPrefix('User:');
    }

    public function getById(string $id, array $columns)
    {
        $key = $id;

        return $this->cache($key, function() use ($id, $columns) {
            $result = $this->entity
                ->where('id', $id)
                ->get($columns);

            return $result->isNotEmpty() ? $result->first()->toArray() : [];
        });
    }
}