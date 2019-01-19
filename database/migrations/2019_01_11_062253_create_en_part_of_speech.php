<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnPartOfSpeech extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('en_part_of_speech', function (Blueprint $table) {
            $table->string('type');
            $table->string('alias');
            $table->string('name');

            $table->timestamps();
            // index
            $table->unique('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('en_part_of_speech');
    }
}
