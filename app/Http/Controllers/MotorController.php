<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Exception;
use App\Services\MotorService;


class MotorController extends Controller
{    
    protected $motorService;

    public function __construct(MotorService $motorService)
    {
      $this->motorService = $motorService;
    }
  
    public function index()
    {
      try {
        $motors = $this->motorService->getAll();
        
        if(!$motors) {
            return $this->successResponse(null, "Failed to load Data");
        }

        return $this->successResponse($motors, "Success");
      } catch (Exception $err) {
        return $this->errorResponse($err->getMessage(), $err->getCode());
      }
    }

    public function stock()
    {
      try {
        $stock = $this->motorService->stock();
        
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
        $sold = $this->motorService->sold();
        
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
        $motor = $this->motorService->findCarById($id);
        
        if(!$motor) {
          return $this->successResponse(null, "Failed to load Data");
      }
      
      return $this->successResponse($motor, "Success");
      } catch (Exception $err) {
        return $this->errorResponse($err->getMessage(), $err->getCode());
      }
    }
}