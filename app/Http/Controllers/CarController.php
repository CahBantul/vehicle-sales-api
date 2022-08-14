<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
      return $this->carService->getAll();
    }

    public function count()
    {
        return $this->carService->count();
    }

    public function stock()
    {
        return $this->carService->stock();
    }

    public function sold()
    {
        return $this->carService->sold();
    }
    
    public function show($id)
    {
        return $this->carService->findCarById($id);
    }
}