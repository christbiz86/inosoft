<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $fillable = [
        'mesin', 'suspensi', 'transmisi', 'tahun', 'warna', 'harga'
    ];

}
