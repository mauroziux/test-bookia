<?php

namespace Tests\Feature;

use Tests\TestCase;

class RestaurantTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDatabaseRestaurant()
    {
        $this->assertDatabaseHas('restaurants', ['name' => 'green restaurant']);
        $this->assertDatabaseHas('restaurants', ['name' => 'blue restaurant']);
    }

    public function testApiRestaurants()
    {
        $response = $this->get('/api/restaurants');
        $response->assertStatus(200)->assertJsonCount(2);;
    }
}
