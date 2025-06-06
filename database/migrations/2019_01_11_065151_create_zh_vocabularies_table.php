<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZhVocabulariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zh_vocabularies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('word', 50);
            $table->string('cn_word', 50)->nullable();
            $table->string('hk_word', 50)->nullable();
            $table->string('sg_word', 50)->nullable();
            $table->string('pinyin')->nullable();
            $table->string('zhuyin')->nullable();
            // index
            $table->unique([
                'word',
                'cn_word',
                'hk_word',
                'sg_word',
            ], 'unique_word');
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
