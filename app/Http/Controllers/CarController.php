<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends VehicleController
{

    /**
     * Store Car.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'mesin'     => 'required|string',
            'penumpang' => 'required|string',
            'tipe'      => 'required|string',
            $this->getArrayVehicle(),
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $car = Car::create([
            'mesin'     => $request->mesin,
            'penumpang' => $request->penumpang,
            'tipe'      => $request->tipe,
            $this->getArrayVehicle(),
        ]);
        return response()->json([
            "success" => true,
            "message" => "Car input successfully.",
            "data" => $car
        ]);
    }

}
