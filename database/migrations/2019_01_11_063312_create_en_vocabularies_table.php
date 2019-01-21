<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnVocabulariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('en_vocabularies', function (Blueprint $table) {
            /** @var Blueprint $table */
            $table->increments('id');

            $table->string('word');
            $table->string('part_of_speech');
            $table->string('kk_phonetic')->nullable();
            $table->string('dj_phonetic')->nullable();
            // index
            $table->unique(['word', 'part_of_speech']);
            $table->foreign('part_of_speech')->references('type')->on('en_part_of_speech');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('en_vocabularies');
    }
}
