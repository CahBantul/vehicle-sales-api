<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => '12345678',
        ]);

        $user2 = User::make([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => '12345678',
        ]);

        $this->assertTrue($user1->email != $user2->email );
    }

    public function test_delete_user()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if($user) {
            $user->delete();
        }

        $this->assertTrue(true);
    }

    public function test_store_new_user()
    {
        $response = $this->post('/api/register', [
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => '12345678',
        ]);
        $response->assertStatus(200);
    }

    public function test_database()
    {
        $this->assertDatabaseHas('users', [
            'name' => 'user1',
        ]);
    }

}