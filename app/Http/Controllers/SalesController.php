<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SalesController extends Controller
{

    /**
     * Store Sales.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'jumlah'        => 'required|integer',
            'vehicle_id'    => 'required|string',
            'vehicle_type'  => 'required|string'
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $sales = Sales::create([
            'jumlah'        => $request->jumlah,
            'vehicle_id'    => $request->vehicle_id,
            'vehicle_type'  => $request->vehicle_type
        ]);
        return response()->json([
            "success" => true,
            "message" => "Sales input successfully.",
            "data" =>  $sales
        ]);
    }

}
