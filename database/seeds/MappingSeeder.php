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
            2 => 1,
        ];

        foreach ($mapping as $enId => $zhId) {
            $entity->create([
                'left_id' => $enId,
                'right_id' => $zhId
            ]);
        }
    }
}
