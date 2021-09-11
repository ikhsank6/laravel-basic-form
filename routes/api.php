<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/getEmployee',function(){
    
    try{
        $data = DB::table('employee')->get();
        return response()->json([
            'response'=>[
                'status' => true,
                'message' => 'success',
                'data'  => $data,
            ]
        ],200);
    }catch(Exception $e){
        return response()->json([
            'response'=>[
                'status' => false,
                'message' => 'failed',
                'data'  => [],
            ]
        ],200);
    }
});


