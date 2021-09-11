<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pegawai;
use Session;
use Yajra\Datatables\Datatables;
use DB;

class pegawaiController extends Controller
{
    //
    public function index()
    {
        $data = pegawai::all();
        return view('list-pegawai',compact('data'));
    }

    public function indexpegawai()
    {
        return view('index1');
    }

    public function getdata1(){
        $data = DB::table('pegawai')->get();

        return Datatables::of($data)
        ->addIndexColumn()
        ->make(true);
    }
    public function indexemployee()
    {
        return view('index');
    }
    public function getdata($param)
    {
        $tanggal = explode(' - ', $param);
        $tanggal[0] = date('Y-m-d H:i:s', strtotime($tanggal[0]));
        $tanggal[1] = date('Y-m-d H:i:s', strtotime($tanggal[1]));

        $data = DB::table('employee')->whereBetween('join_date',[ $tanggal[0],$tanggal[1]])->get();

        return Datatables::of($data)
        ->addIndexColumn()
        ->make(true);
    }
    public function create()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        pegawai::create([
            'nama' => $request->nama,
            'alamat'=> $request->alamat,
        ]);

        return redirect('pegawai')->with('success','Berhasil tambah pegawai :)');
    }
    
    public function edit($id){
        $data = pegawai::findOrFail($id);
       
        return view('edit',compact('data'));
    }

    public function update(Request $request){
        $id = $request->id;

        $data = pegawai::findOrFail($id);

        $data->update([
            'nama'      =>  $request->nama,
            'alamat'    =>  $request->alamat,
        ]);

        return redirect('pegawai')->with('success','Berhasil update pegawai :)');
    }

    public function destroy($id){
        $data = pegawai::findOrFail($id);

        $data->delete();

        return redirect('pegawai')->with('success','Berhasil delete pegawai :)');
    }
}
