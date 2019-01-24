<?php

class SentenceSeeder extends AbstractSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var \App\Elasticsearch\SentenceEs $sentenceEs */
        $sentenceEs = \App::make(\App\Elasticsearch\SentenceEs::class);

        $sentenceEs->index([
            'en' => 'The swing of the ship made many people seasick.',
            'zh' => '船的搖擺使許多人暈船。'
        ]);
    }
}
