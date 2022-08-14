<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
      return $this->motorService->getAll();
    }

    public function count()
    {
        return $this->motorService->count();
    }

    public function stock()
    {
        return $this->motorService->stock();
    }

    public function sold()
    {
        return $this->motorService->sold();
    }
    
    public function show($id)
    {
        return $this->motorService->findCarById($id);
    }
}