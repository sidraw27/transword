<?php

class PartOfSpeechSeeder extends AbstractSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enPartOfSpeech = [
            'noun' => [
                'alias' => 'n.',
                'name'  => '名詞',
            ],
            'pronoun' => [
                'alias' => 'pron.',
                'name'  => '代名詞',
            ],
            'verb' => [
                'alias' => 'v.',
                'name'  => '動詞',
            ],
            'adjective' => [
                'alias' => 'adj.',
                'name'  => '形容詞',
            ],
            'adverb' => [
                'alias' => 'adv.',
                'name'  => '副詞',
            ],
            'preposition' => [
                'alias' => 'prep.',
                'name'  => '介係詞',
            ],
            'conjunction' => [
                'alias' => 'conj.',
                'name'  => '連接詞',
            ],
            'interjection' => [
                'alias' => 'int.',
                'name'  => '感嘆詞',
            ],
        ];

        foreach ($enPartOfSpeech as $type => $item) {
            DB::table('en_part_of_speech')->insert([
                'type'  => $type,
                'alias' => $item['alias'],
                'name'  => $item['name'],
            ]);
        }
    }
}
