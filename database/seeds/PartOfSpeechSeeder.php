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
            'transitiveVerb' => [
                'alias' => 'vt.',
                'name'  => '及物動詞',
            ],
            'intransitiveVerb' => [
                'alias' => 'vi.',
                'name'  => '不及物動詞',
            ],
            'auxiliaryVerb' => [
                'alias' => 'aux.',
                'name'  => '助動詞',
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
            'phrase' => [
                'alias' => 'ph.',
                'name'  => '片語',
            ],
        ];

        $entity = \App::make(\App\Entities\EnPartOfSpeech::class);

        foreach ($enPartOfSpeech as $type => $item) {
            $data = [
                'type'  => $type,
                'alias' => $item['alias'],
                'name'  => $item['name'],
            ];

            $entity->create($data);
        }
    }
}
