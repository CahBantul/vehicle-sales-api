<?php 

declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;

class AuthRepository 
{
  protected $user;

  public function __construct(User $user)
  {
    $this->user = $user;
  }

  public function register($arr){
    $user = User::create([
      'name' => $arr['name'],
      'email' => $arr['email'],
      'password' => $arr['password'],
    ]);

    return $user;
  }
}