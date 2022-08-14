<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Exception;
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
      try {
        $vehicles = $this->vehicleService->getAll();
        
        if(!$vehicles) {
          return $this->successResponse(null, "Failed to load Data");
      }
      
      return $this->successResponse($vehicles, "Success");
      } catch (Exception $err) {
        return $this->errorResponse($err->getMessage(), $err->getCode());
      }
 
    }

    public function stock()
    {
      try {
        $stock = $this->vehicleService->stock();
        
        if(!$stock) {
          return $this->successResponse(null, "Failed to load Data");
      }
      
      return $this->successResponse($stock, "Success");
      } catch (Exception $err) {
        return $this->errorResponse($err->getMessage(), $err->getCode());
      }
    }

    public function sold()
    {
      try {
        $sold = $this->vehicleService->sold();
        
        if(!$sold) {
          return $this->successResponse(null, "Failed to load Data");
      }
      
      return $this->successResponse($sold, "Success");
      } catch (Exception $err) {
        return $this->errorResponse($err->getMessage(), $err->getCode());
      }
    }
}