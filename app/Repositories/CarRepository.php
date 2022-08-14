<?php 

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Car;

class CarRepository 
{
  protected $car;

  public function __construct(Car $car)
  {
    $this->car = $car;
  }

  public function getAll()
  {
    $cars = Car::all();
    return $cars;
  }

  public function findById($id)
  {
    $car = Car::find($id);
    return $car;
  }
}