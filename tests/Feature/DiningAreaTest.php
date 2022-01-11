<?php

namespace Tests\Feature;

use Tests\TestCase;

class DiningAreaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDatabaseDiningArea()
    {
        $this->assertDatabaseHas('dining_areas', ['name' => 'Indoor']);
        $this->assertDatabaseHas('dining_areas', ['name' => 'Outdoor']);
        $this->assertDatabaseHas('dining_areas', ['name' => 'Outdoor Terrace']);
    }

    public function testApiDiningArea()
    {
        $response = $this->get('/api/dining-areas');
        $response->assertStatus(200)->assertJsonCount(3);
    }
}
