<?php

use Illuminate\Database\Seeder;

class DiningAreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\DiningArea::class)->create([
            'name' => 'Indoor',
        ]);

        factory(\App\Models\DiningArea::class)->create([
            'name' => 'Outdoor',
        ]);

        factory(\App\Models\DiningArea::class)->create([
            'name' => 'Outdoor Terrace ',
        ]);
    }
}
