<?php

namespace Tests\Unit;

use Tests\TestCase;

class MotorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_get_all_motor()
    {
      
        $response = $this->get('/api/motor');
        $response->assertStatus(200);
    }

    public function test_get_all_motor_stock()
    {
      
        $response = $this->get('/api/motor/stock');
        $response->
        assertStatus(200);
    }
    public function test_get_all_motor_sold()
    {
      
        $response = $this->get('/api/motor/sold');
        $response->assertStatus(200);
    }

}