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

  public function register($name, $email, $password){
    $user = User::create([
      'name' => $name,
      'email' => $email,
      'password' => bcrypt($password),
    ]);

    return $user;
  }
}