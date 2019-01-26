<?php

namespace App\Entities;

use App\Enum\EnTableMapping;
use Illuminate\Database\Eloquent\Model;

class EnVocabularyNounCountable extends Model
{
    protected $table = EnTableMapping::NOUN_COUNTABLE;

    public $timestamps = false;
}