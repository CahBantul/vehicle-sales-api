<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaseModelVehicle;

class VehicleController extends Controller
{    
    public function index() {
        $okok = BaseModelVehicle::all();
        return $okok;
    }
}