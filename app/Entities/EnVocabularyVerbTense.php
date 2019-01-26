<?php

namespace App\Entities;

use App\Enum\EnTableMapping;
use Illuminate\Database\Eloquent\Model;

class EnVocabularyVerbTense extends Model
{
    protected $table = EnTableMapping::VERB_TENSES;

    public $timestamps = false;
}