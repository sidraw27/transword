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
                'cn_word' => '摆动',
                'tw_word' => '擺動',
                'hk_word' => '擺動',
                'sg_word' => '擺動',
                'pinyin'  => 'Bǎidòng',
            ],
            [
                'cn_word' => '挥舞',
                'tw_word' => '揮舞',
                'hk_word' => '揮舞',
                'sg_word' => '揮舞',
                'pinyin'  => 'Huīwǔ',
            ],
            [
                'cn_word' => '搖蕩',
                'tw_word' => '搖蕩',
                'hk_word' => '搖蕩',
                'sg_word' => '搖蕩',
                'pinyin'  => 'Yáodàng',
            ],
            [
                'cn_word' => '轻松地走',
                'tw_word' => '輕鬆地走',
                'hk_word' => '輕鬆地走',
                'sg_word' => '輕鬆地走',
                'pinyin'  => 'Qīngsōng de zǒu',
            ]
        ];

        foreach ($words as $word) {
            $entity->create($word);
        }
    }
}
