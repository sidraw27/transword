<?php

class ZhVocabularySeeder extends AbstractSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var \Illuminate\Database\Eloquent\Builder $entity */
        $entity = \App::make(\App\Entities\ZhVocabulary::class);

        $words = [
            [
                'word'    => '擺動',
                'cn_word' => '摆动',
                'hk_word' => '擺動',
                'sg_word' => '擺動',
                'pinyin'  => 'Bǎidòng',
            ],
            [
                'word'    => '揮舞',
                'cn_word' => '挥舞',
                'hk_word' => '揮舞',
                'sg_word' => '揮舞',
                'pinyin'  => 'Huīwǔ',
            ],
            [
                'word'    => '搖蕩',
                'cn_word' => '搖蕩',
                'hk_word' => '搖蕩',
                'sg_word' => '搖蕩',
                'pinyin'  => 'Yáodàng',
            ],
            [
                'word'    => '輕鬆地走',
                'cn_word' => '轻松地走',
                'hk_word' => '輕鬆地走',
                'sg_word' => '輕鬆地走',
                'pinyin'  => 'Qīngsōng de zǒu',
            ]
        ];

        foreach ($words as $word) {
            $entity->create($word);
        }

        /** @var \Illuminate\Database\Eloquent\Builder $entity */
        $entity = \App::make(\App\Entities\ZhSimilarVocabulary::class);
        $entity->create([
            'word' => '揮舞',
            'group_hash' => md5('揮舞' . '擺動')
        ]);
        $entity->create([
            'word' => '擺動',
            'group_hash' => md5('揮舞' . '擺動')
        ]);
    }
}
