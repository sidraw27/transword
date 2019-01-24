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
            'subject' => [
                'alias' => 's.',
                'name'  => '主詞'
            ],
            'noun' => [
                'alias' => 'n.',
                'name'  => '名詞',
            ],
            'countableNoun' => [
                'alias' => 'n.[C]',
                'name'  => '名詞',
            ],
            'uncountableNoun' => [
                'alias' => 'n.[U]',
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
            'article' => [
                'alias' => 'a.',
                'name'  => '冠詞'
            ],
            'plural' => [
                'alias' => 'pl.',
                'name'  =>'複數'
            ]
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
