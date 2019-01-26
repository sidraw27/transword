<?php

namespace App\Entities;

use App\Enum\EnTableMapping;
use Illuminate\Database\Eloquent\Model;

class EnVocabularyAdjectiveComparative extends Model
{
    protected $table = EnTableMapping::ADJECTIVE_COMPARATIVE;

    public $timestamps = false;
}