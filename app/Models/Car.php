<?php

declare(strict_types= 1);

namespace App\Models;

use App\Models\BaseModelVehicle;

class Car extends BaseModelVehicle
{
    protected $collection = "cars";

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $fillable = ["engine", "type", "capacity"];
        $this->mergeFillable($fillable);
    }
}