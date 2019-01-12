<?php

use \Illuminate\Database\Seeder;

abstract class AbstractSeeder extends Seeder
{
    protected $faker;
    protected $twFaker;

    public function __construct()
    {
        $this->faker   = Faker\Factory::create();
        $this->twFaker = Faker\Factory::create('zh_TW');
    }
}