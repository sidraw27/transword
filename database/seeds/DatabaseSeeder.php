<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PartOfSpeechSeeder::class);
         $this->call(EnVocabularySeeder::class);
         $this->call(ZhVocabularySeeder::class);
    }
}
