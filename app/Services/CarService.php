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
    $stockCar = $cars->filter(function($car){
      if (isset($car->isSoldOut) && $car->isSoldOut == false) {
        return $car;
      }
    });
    return $stockCar;
  }

  public function findCarById($id)
  {
    $car = $this->carRepository->findById($id);
    return $car;
  }

  public function sold()
  {
    $cars = $this->getAll();
    $carSold = $cars->filter(function($car){
      if (isset($car->isSoldOut) && $car->isSoldOut == true) {
        return $car;
      }
    });
    return $carSold;
  }
}