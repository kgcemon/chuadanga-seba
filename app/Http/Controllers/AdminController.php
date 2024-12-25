<?php

namespace App\Http\Controllers;

use App\services\JWTToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function page()
    {
        return view('pages.auth.login-page');
    }


    function login(Request $request){
        $count=DB::table("admin")->where('email','=',$request->input('email'))
            ->where('password','=',$request->input('password'))
            ->select('id')->first();

        if($count!==null){
            // User Login-> JWT Token Issue
            $token=JWTToken::CreateToken($request->input('email'),$count->id);
            return response()->json([
                'status' => 'success',
                'message' => 'User Login Successful',
            ],200)->cookie('token',$token,time()+60*24*30);
        }
        else{
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorized'
            ],200);

        }

    }

}
