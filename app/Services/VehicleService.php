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
}