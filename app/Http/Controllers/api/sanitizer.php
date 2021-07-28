<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\sanitizer as ModelsSanitizer;
use Illuminate\Http\Request;

class sanitizer extends Controller
{
    public function create_data(Request $request)
    {
        $sanitizers = ModelsSanitizer::create([
            'volume' => $request->volume,
        ]);
        if(!$sanitizers){
            return response()->json(['message' => 'error'], 500);
        }
        return response()->json(['message' => 'successful'], 200);
    }
}
