<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnVocabulary extends Model
{
    // You should always use soft delete to protect your data
    use SoftDeletes;

    public $timestamps = true;

    public function zhMapping()
    {
        return $this->hasManyThrough(
            ZhVocabulary::class,
            EnZhMapping::class,
            'left_id',
            'id',
            'id',
            'right_id'
        );
    }
}