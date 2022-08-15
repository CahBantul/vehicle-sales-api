<?php

namespace Tests\Unit;

use App\Repositories\AuthRepository;
use App\Services\AuthService;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Support\Facades\Validator;
use Mockery;

class AuthServiceTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic unit test example.
     *
     * @return void
     */
   
    public function testStore()
    {
        $input = ['name' => 'abc',
        'email' => 'email@gmail.com',
        'password' => '12345678',];
    
    //    $user = User::create($input);
    //    dd($user);
    //    $this->assertNotNull($user->email);
    $userRepoSpy = Mockery::spy(AuthRepository::class);
    $userRepository = new AuthService($userRepoSpy);

    $request = Mockery::mock("stdClass");
    $request->shouldReceive("all")->andReturn($input);

    $data = $userRepository->register($request);
    $this->assertEquals(User::class, $data);
        $this->assertNotNull($data->email);
    
    }
}