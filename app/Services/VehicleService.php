<?php 

declare(strict_types=1);

namespace App\Services;

use App\Repositories\VehicleRepository;

class VehicleService 
{
  protected $vehicleRepository;

  public function __construct(VehicleRepository $vehicleRepository)
  {
    $this->vehicleRepository = $vehicleRepository;
  }

  public function getAll()
  {
    return $this->vehicleRepository->getAll();
  }

  public function count()
  {
    $vehicles = $this->getAll();
    return count($vehicles);
  }

  public function stock()
  {
    $vehicles = $this->getAll();
    $stockVehicle = $vehicles->filter(function($value, $key){
      if (isset($value->isSoldOut) && $value->isSoldOut == false) {
        return $value;
      }
    });
    return $stockVehicle;
  }
}