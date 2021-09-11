<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class uploadFile extends Controller {

    public function index()
    {
        $data['data'] = DB::table('document_file')->get();
        return view('index-upload',$data);
    }

    public function store(Request $request){
        $status = true;
        $destination = public_path() .'/uploads/document';

        try{
            $file = $request->file('file');
            $file_name = uniqid().$file->getClientOriginalName();
            $file->move($destination, $file_name);

            DB::table('document_file')->insert([
                'file_name'     =>  $file_name,
                'created_at'    => date('Y-m-d H:i:s'),
            ]);

            return response()->json(['status'=>$status]);
        }catch(Exception $e){
            $status = false;
            return response()->json(['status'=>$status]);
        }
        
    }
}