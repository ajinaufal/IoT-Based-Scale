<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\scales;
use Illuminate\Http\Request;

class scale extends Controller
{
    public function scale(Request $request)
    {
        $value = ($request->weight) / (pow((($request->height)/100), 2));
        if ($value < 17.0) {
            $status = 'Terlalu Kurus';
        }elseif ($value >= 17.0 and $value <= 18.4) {
            $status = 'Kurus';
        }elseif ($value >= 18.5 and $value <= 25.0) {
            $status = 'Normal';
        }elseif ($value >= 25.1 and $value <= 27.0) {
            $status = 'Gemuk';
        }elseif ($value > 27.1) {
            $status = 'Terlalu Gemuk';
        }
        $create_data = scales::create([
            'code_tools' => $request->code_tools,
            'weight'     => $request->code_tools,
            'height'     => ($request->height),
            'status'     => $status,
        ]);
        
        $code = $request->code_tools;

        if (!$create_data) {
            return response()->json(['message' => 'error'], 500);
        }
        return response()->json(['message' => 'successful'], 200);
    }
}
