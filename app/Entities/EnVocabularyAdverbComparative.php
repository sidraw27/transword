<?php

namespace App\Entities;

use App\Enum\EnTableMapping;
use Illuminate\Database\Eloquent\Model;

class EnVocabularyAdverbComparative extends Model
{
    protected $table = EnTableMapping::ADVERB_COMPARATIVE;

    public $timestamps = false;
}