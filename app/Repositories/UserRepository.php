<?php

namespace App\Repositories;

use App\Entities\User;

class UserRepository
{
    private $entity;

    public function __construct(User $entity)
    {
        $this->entity = $entity;
    }
}