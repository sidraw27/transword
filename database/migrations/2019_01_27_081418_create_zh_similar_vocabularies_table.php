<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZhSimilarVocabulariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zh_similar_vocabularies', function (Blueprint $table) {
            $table->string('word', 50);
            $table->string('group_hash');
            // index
            $table->primary('word');
            $table->foreign('word')->references('word')->on('zh_vocabularies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zh_similar_vocabularies');
    }
}
