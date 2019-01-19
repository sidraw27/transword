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

            $table->string('tw_word', 50);
            $table->string('cn_word', 50)->nullable();
            $table->string('hk_word', 50)->nullable();
            $table->string('sg_word', 50)->nullable();
            $table->string('pinyin')->nullable();

            $table->timestamps();
            $table->softDeletes();
            // index
            $table->unique([
                'cn_word',
                'tw_word',
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
