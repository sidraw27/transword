<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnVocabulary extends Model
{
    // You should always use soft delete to protect your data
    use SoftDeletes;

    public $timestamps = false;

    public function zhMapping()
    {
        return $this->hasManyThrough(
            ZhVocabulary::class,
            EnZhMapping::class,
            'en_id',
            'id',
            'id',
            'zh_id'
        );
    }
}