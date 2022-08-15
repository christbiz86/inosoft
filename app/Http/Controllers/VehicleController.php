<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{

    protected $arrayField = array();

    public function setArrayVehicle(){
        $this->arrayField = array(
            'warna'     => 'required|string|',
            'harga'     => 'required|integer',
            'stok'      => 'required|integer'
        );
    }

    public function getArrayVehicle(){
        return $this->arrayField;
    }

}
