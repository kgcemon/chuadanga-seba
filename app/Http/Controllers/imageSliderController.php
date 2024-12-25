<?php

namespace App\Http\Controllers;

use App\Models\ImageSlider;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class imageSliderController extends Controller
{
    public function index()
    {
        $imageSliderData = ImageSlider::all();

        return response()->json([
            'status' => 'success',
            'data'   => $imageSliderData
        ], 200);
    }


    function store(Request $request){

       return ImageSlider::create($request->input());
    }
}
