<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VehicleService;


class VehicleController extends Controller
{    
    protected $vehicleService;

    public function __construct(VehicleService $vehicleService)
    {
      $this->vehicleService = $vehicleService;
    }
  
    public function index()
    {
      return $this->vehicleService->getAll();
    }
}