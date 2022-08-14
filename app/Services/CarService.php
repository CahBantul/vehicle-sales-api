<?php 

declare(strict_types=1);

namespace App\Services;

use App\Repositories\CarRepository;

class CarService 
{
  protected $carRepository;

  public function __construct(CarRepository $carRepository)
  {
    $this->carRepository = $carRepository;
  }

  public function getAll()
  {
    return $this->carRepository->getAll();
  }

  public function count()
  {
    $cars = $this->getAll();
    return count($cars);
  }

  public function stock()
  {
    $cars = $this->getAll();
    $stockVehicle = $cars->filter(function($value){
      if (isset($value->isSoldOut) && $value->isSoldOut == false) {
        return $value;
      }
    });
    return $stockVehicle;
  }

  public function findCarById($id)
  {
    $car = $this->carRepository->findById($id);
    return $car;
  }
}