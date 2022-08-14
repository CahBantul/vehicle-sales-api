<?php

declare(strict_types= 1);

namespace App\Models;

use App\Models\BaseModelVehicle;

class Motor extends BaseModelVehicle
{
    protected $collection = "motors";

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $fillable = ["engine", "suspension", "transmission"];
        $this->mergeFillable($fillable);
    }
}