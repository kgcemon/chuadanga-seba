<?php

namespace App\Http\Controllers;

use App\Models\SebaCategory;
use Illuminate\Http\Request;

class SebaCategoryController extends Controller
{

    public function index(){
      $category =  SebaCategory::all();
      return Response()->json(["status"=> "success", "data"=>$category],200);
    }
}
