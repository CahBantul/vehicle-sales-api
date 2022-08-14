<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Exception;
use App\Services\CarService;


class CarController extends Controller
{    
    protected $carService;

    public function __construct(CarService $carService)
    {
      $this->carService = $carService;
    }
  
    public function index()
    {
      try {
        $cars = $this->carService->getAll();
        
        if(!$cars) {
            return $this->successResponse(null, "Failed to load Data");
        }

        return $this->successResponse($cars, "Success");
      } catch (Exception $err) {
        return $this->errorResponse($err->getMessage(), $err->getCode());
      }
    }

    public function stock()
    {
      try {
        $stock = $this->carService->stock();
        
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
        $sold = $this->carService->sold();
        
        if(!$sold) {
            return $this->successResponse(null, "Failed to load Data");
        }

        return $this->successResponse($sold, "Success");
      } catch (Exception $err) {
        return $this->errorResponse($err->getMessage(), $err->getCode());
      }
    }
    
    public function show($id)
    {
      try {
        $car = $this->carService->findCarById($id);
        
        if(!$car) {
            return $this->successResponse(null, "Failed to load Data");
        }

        return $this->successResponse($car, "Success");
      } catch (Exception $err) {
        return $this->errorResponse($err->getMessage(), $err->getCode());
      }
    }
}