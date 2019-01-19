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
                'cn_word' => '证书',
                'tw_word' => '證書',
                'hk_word' => '證書',
                'sg_word' => '證書',
                'pinyin'  => 'zhengshu',
            ]
        ];

        foreach ($words as $word) {
            $entity->create($word);
        }
    }
}
