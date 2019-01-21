<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnVocabularyAdverbComparativeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('en_vocabulary_adverb_comparative', function (Blueprint $table) {
            $table->increments('id');

            $table->string('word');
            $table->string('comparative');
            $table->string('superlative');
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
        Schema::dropIfExists('en_vocabulary_adverb_comparative');
    }
}
