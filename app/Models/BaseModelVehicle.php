<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class BaseModelVehicle extends Model
{
    use HasFactory;
    
    protected $connection = "mongodb"; 
    protected $fillable = ["year", "price", "color", "isSoldOut", "sold_at"];
}