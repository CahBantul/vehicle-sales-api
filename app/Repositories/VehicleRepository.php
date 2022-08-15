<?php 

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Car;
use App\Models\Motor;

class VehicleRepository 
{
  protected $car;
  protected $motor;

  public function __construct(Car $car, Motor $motor)
  {
    $this->car = $car;
    $this->motor = $motor;
  }

  public function getAll()
  {
    $cars = Car::all();
    $motors = Motor::all();
    $vehicle = $cars->merge($motors);
    return $vehicle;
  }
}