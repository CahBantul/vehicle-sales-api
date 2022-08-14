<?php 

declare(strict_types=1);

namespace App\Services;

use App\Repositories\MotorRepository;

class MotorService 
{
  protected $motorRepository;

  public function __construct(MotorRepository $motorRepository)
  {
    $this->motorRepository = $motorRepository;
  }

  public function getAll()
  {
    return $this->motorRepository->getAll();
  }

  public function count()
  {
    $motors = $this->getAll();
    return count($motors);
  }

  public function stock()
  {
    $motors = $this->getAll();
    $stockMotor = $motors->filter(function($motor){
      if (isset($motor->isSoldOut) && $motor->isSoldOut == false) {
        return $motor;
      }
    });
    return $stockMotor;
  }

  public function findCarById($id)
  {
    $motor = $this->motorRepository->findById($id);
    return $motor;
  }

  public function sold()
  {
    $motors = $this->getAll();
    $motorSold = $motors->filter(function($motor){
      if (isset($motor->isSoldOut) && $motor->isSoldOut == true) {
        return $motor;
      }
    });
    return $motorSold;
  }
}