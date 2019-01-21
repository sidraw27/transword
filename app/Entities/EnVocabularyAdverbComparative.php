<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnVocabularyAdverbComparative extends Model
{
    // You should always use soft delete to protect your data
    use SoftDeletes;

    protected $table = 'en_vocabulary_adverb_comparative';

    public $timestamps = false;
}