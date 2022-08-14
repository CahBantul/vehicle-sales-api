<?php 

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Motor;

class MotorRepository 
{
  protected $motor;

  public function __construct(Motor $motor)
  {
    $this->motor = $motor;
  }

  public function getAll()
  {
    $motors = Motor::all();
    return $motors;
  }

  public function findById($id)
  {
    $motor = Motor::find($id);
    return $motor;
  }
}