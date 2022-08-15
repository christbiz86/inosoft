<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'jumlah', 'vehicle_id', 'vehicle_type'
    ];

}
