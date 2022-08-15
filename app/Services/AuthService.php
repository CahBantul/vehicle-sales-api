<?php 

declare(strict_types=1);

namespace App\Services;

use App\Repositories\AuthRepository;
use Illuminate\Support\Facades\Validator;

class AuthService 
{
  protected $authRepository;

  public function __construct(AuthRepository $authRepository)
  {
    $this->authRepository = $authRepository;
  }

  public function register($arr)
  {
    $validator = Validator::make($arr->all(), [
      'name' => 'required|string',
      'email' => 'required|email|unique:users',
      'password' => 'required|string|min:6|max:50'
    ]);

    //Send failed response if request is not valid
    if ($validator->fails()) {
      return response()->json(['error' => $validator->errors()], 200);
    }

    $data = [
      'name' => $arr['name'],
      'email' => $arr['email'],
      'password' => bcrypt($arr['password'])
    ];

    return $this->authRepository->register($data);
  }  
}