<?php

namespace Tests\Feature;

use Tests\TestCase;

class TableTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testTableCount()
    {
        $this->assertDatabaseCount('tables', 15);
    }

    public function testApiTables()
    {
        $response = $this->get('/api/tables');
        $response->assertStatus(200)->assertJsonCount(15);;
    }
}
