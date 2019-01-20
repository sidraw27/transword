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

            $table->unsignedInteger('left_id');
            $table->unsignedInteger('right_id');
            // index
            $table->unique(['left_id', 'right_id']);
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
