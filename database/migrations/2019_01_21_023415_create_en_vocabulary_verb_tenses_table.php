<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnVocabularyVerbTensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('en_vocabulary_verb_tenses', function (Blueprint $table) {
            $table->increments('id');

            $table->string('word');
            $table->string('past_tense')->nullable();
            $table->string('present_participle')->nullable();
            $table->string('past_participle')->nullable();
            // index
            $table->foreign('word')->references('word')->on('en_vocabularies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('en_vocabulary_verb_tenses');
    }
}
