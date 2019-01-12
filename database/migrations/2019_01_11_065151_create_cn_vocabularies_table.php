<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCnVocabulariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cn_vocabularies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('cn_word');
            $table->string('tw_word');
            $table->string('hk_word');
            $table->string('sg_word');
            $table->string('pinyin');

            $table->timestamps();
            $table->softDeletes();
            // index
            $table->unique('cn_word');
            $table->unique('tw_word');
            $table->unique('hk_word');
            $table->unique('sg_word');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cn_vocabularies');
    }
}
