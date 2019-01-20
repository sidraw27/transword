<?php

namespace App\Repositories\Abstracts;

use App\Traits\CacheTrait;

abstract class AbstractRepository
{
    use CacheTrait;

    /**
     * @var  \Illuminate\Database\Eloquent\Builder $entity
     */
    protected $entity;

    public function getByField(string $field, $value, array $columns = ['*'], bool $isTheOnly = false)
    {
        $key = md5(
            'Field:' . $field .
            '.Value:' . $value .
            '.isTheOnly:' . (string) $isTheOnly .
            '.Columns:' . implode(',', $columns)
        );

        return $this->cache($key, function () use ($field, $value, $isTheOnly, $columns) {
            $result = $this->entity
                ->where($field, $value)
                ->get($columns);

            return $isTheOnly ? $result->first() : $result;
        });
    }

    public function getByValues(string $field, array $values, array $columns = ['*'])
    {
        $key = md5(
            'Field:' . $field .
            '.Values:' . implode(',', $values) .
            '.Columns:' . implode(',', $columns)
        );

        return $this->cache($key, function () use ($field, $values, $columns) {
            return $this->entity
                ->whereIn($field, $values)
                ->get($columns);
        });
    }

    public function getById(int $id, array $columns = ['*'])
    {
        $key = md5('Id:' . $id . '.Columns:' . implode(',', $columns));

        return $this->cache($key, function () use ($id, $columns) {
            return $this->entity
                ->where('id', $id)
                ->get($columns)
                ->first();
        });
    }

    public function getTotal()
    {
        return $this->entity->count(['id']);
    }
}