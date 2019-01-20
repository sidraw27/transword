<?php

class EnVocabularySeeder extends AbstractSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var \Illuminate\Database\Eloquent\Builder $entity */
        $entity = \App::make(\App\Entities\EnVocabulary::class);

        $words = [
            [
                'word'           => 'credential',
                'part_of_speech' => 'noun',
                'kk_phonetic'    => 'krɪˋdɛnʃəl',
                'dj_phonetic'    => null
            ]
        ];

        foreach ($words as $word) {
            $entity->create($word);
        }
    }
}
