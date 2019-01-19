<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ZhVocabulary extends Model
{
    // You should always use soft delete to protect your data
    use SoftDeletes;

    public $timestamps = true;
}