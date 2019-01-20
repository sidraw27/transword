<?php

class MappingSeeder extends AbstractSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var \Illuminate\Database\Eloquent\Builder $entity */
        $entity = \App::make(\App\Entities\EnZhMapping::class);

        $mapping = [
            [1, 1],
            [1, 2]
        ];

        foreach ($mapping as $item) {
            $entity->create([
                'en_id' => $item[0],
                'zh_id' => $item[1]
            ]);
        }
    }
}
