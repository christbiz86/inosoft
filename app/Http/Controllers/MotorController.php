<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Motor;

class MotorController extends VehicleController {

    /**
     * Store Motor.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'mesin'     => 'required|string',
            'suspensi'  => 'required|string',
            'transmisi' => 'required|string',
            $this->getArrayVehicle(),
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $motor = Motor::create([
            'mesin'     => $request->mesin,
            'suspensi'  => $request->suspensi,
            'transmisi' => $request->transmisi,
            $this->getArrayVehicle(),
        ]);
        return response()->json([
            "success" => true,
            "message" => "Motor input successfully.",
            "data" =>  $motor
        ]);
    }

}
