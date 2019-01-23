<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class EnVocabulary extends Model
{
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