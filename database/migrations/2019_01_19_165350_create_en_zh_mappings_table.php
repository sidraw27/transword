<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnZhMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('en_zh_mapping', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('en_id');
            $table->unsignedInteger('zh_id');
            // index
            $table->unique(['en_id', 'zh_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('en_zh_mappings');
    }
}
