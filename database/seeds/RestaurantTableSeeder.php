<?php

use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Restaurant::class)->create([
            'name' => 'green restaurant',
        ]);

        factory(\App\Models\Restaurant::class)->create([
            'name' => 'blue restaurant',
        ]);
    }
}
