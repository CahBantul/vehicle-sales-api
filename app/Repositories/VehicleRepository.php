<?php 

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Car;

class VehicleRepository 
{
  protected $car;

  public function __construct(Car $car)
  {
    $this->car = $car;
  }

  public function getAll()
  {
    $car = Car::all();
    return $car;
  }
}