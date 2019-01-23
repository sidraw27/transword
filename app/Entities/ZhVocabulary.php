<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ZhVocabulary extends Model
{
    public $timestamps = false;

    public function enMapping()
    {
        return $this->hasManyThrough(
            EnVocabulary::class,
            EnZhMapping::class,
            'zh_id',
            'id',
            'id',
            'en_id'
        );
    }
}