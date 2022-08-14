<?php 

declare(strict_types=1);

namespace App\Repositories;

use App\Models\BaseModelVehicle;

class VehicleRepository 
{
  protected $vehicles;

  public function __construct(BaseModelVehicle $vehicles)
  {
    $this->vehicles = $vehicles;
  }

  public function getAll()
  {
    $vehicles = BaseModelVehicle::all();
    return $vehicles;
  }
}