<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cnt = 170;
        $cars = [];
        for ($i = 0; $i< $cnt; $i++) {
            $cars[$i] = [
                'MakeId' => 440 + $i,
                'MakeName' => 'ASTON MARTIN',
                'VehicleTypeId' => 2,
                'VehicleTypeName' => 'Passenger Car'
            ];
        }
        return response()->json([
            'Count' => $cnt,
            'Message' => 'Response returned successfully',
            'SearchCriteria' => 'Vehicle Type: car',
            'Results' => $cars,
        ]);
    }
}
