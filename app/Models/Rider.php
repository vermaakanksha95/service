<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
   

    protected $fillable = [
        
        'name',
        'phone_no',
        'email',
        'vehicle_type',
        'license_expiry',
        'is_verified',
        'is_available'
    ];
}
