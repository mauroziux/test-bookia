<?php

use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Factory green restaurant
         */
        factory(\App\Models\Table::class,4)->create([
            'minimum_capacity' => 2,
            'maximum_capacity' => 4,
            'active' => true,
            'restaurant_id' => 1,
            'dining_area_id' => 1,
        ]);

        factory(\App\Models\Table::class,2)->create([
            'minimum_capacity' => 3,
            'maximum_capacity' => 5,
            'active' => false,
            'restaurant_id' => 1,
            'dining_area_id' => 1,
        ]);

        factory(\App\Models\Table::class,5)->create([
            'minimum_capacity' => 3,
            'maximum_capacity' => 5,
            'active' => true,
            'restaurant_id' => 1,
            'dining_area_id' => 2,
        ]);

        /**
         * factory blue restaurant
         */
        factory(\App\Models\Table::class,2)->create([
            'minimum_capacity' => 1,
            'maximum_capacity' => 2,
            'active' => true,
            'restaurant_id' => 2,
            'dining_area_id' => 1,
        ]);

        factory(\App\Models\Table::class,2)->create([
            'minimum_capacity' => 3,
            'maximum_capacity' => 5,
            'active' => true,
            'restaurant_id' => 2,
            'dining_area_id' => 3,
        ]);
    }
}
