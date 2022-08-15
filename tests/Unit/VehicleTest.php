<?php

namespace Tests\Unit;

use Tests\TestCase;

class VehicleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_get_all_vehicle()
    {
      
        $response = $this->get('/api/vehicle');
        $response->assertStatus(200);
    }

    public function test_get_all_vehicle_stock()
    {
      
        $response = $this->get('/api/vehicle/stock');
        $response->
        assertStatus(200);
    }
    public function test_get_all_vehicle_sold()
    {
      
        $response = $this->get('/api/vehicle/sold');
        $response->assertStatus(200);
    }

}