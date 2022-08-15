<?php

namespace Tests\Unit;

use Tests\TestCase;

class CarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_get_all_car()
    {
      
        $response = $this->get('/api/car');
        $response->assertStatus(200);
    }

    public function test_get_all_car_stock()
    {
      
        $response = $this->get('/api/car/stock');
        $response->
        assertStatus(200);
    }
    public function test_get_all_car_sold()
    {
      
        $response = $this->get('/api/car/sold');
        $response->assertStatus(200);
    }

}