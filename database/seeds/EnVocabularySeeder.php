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
                'word'           => 'swing',
                'part_of_speech' => 'noun',
                'kk_phonetic'    => 'swɪŋ',
                'dj_phonetic'    => 'swɪŋ'
            ],
            [
                'word'           => 'swing',
                'part_of_speech' => 'transitiveVerb',
                'kk_phonetic'    => 'swɪŋ',
                'dj_phonetic'    => 'swɪŋ'
            ],
            [
                'word'           => 'swing',
                'part_of_speech' => 'intransitiveVerb',
                'kk_phonetic'    => 'swɪŋ',
                'dj_phonetic'    => 'swɪŋ'
            ],
            [
                'word'           => 'sway',
                'part_of_speech' => 'intransitiveVerb',
                'kk_phonetic'    => 'swei',
                'dj_phonetic'    => 'swei'
            ],
        ];

        foreach ($words as $word) {
            $entity->create($word);
        }
    }
}
