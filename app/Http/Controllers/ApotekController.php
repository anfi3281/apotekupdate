<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApotekController extends Controller
{
    public function index(){
        $data = DB::table('tabel_obat')->get();

        return view('index', ['data' => $data]);
    }

    public function edit($kode){
        $data = DB::table('tabel_obat')->get();
        $data2 = DB::table('tabel_obat')->where('kode', $kode)->get();

        return view('index', ['data' => $data, 'data2' => $data2]);
    }

    public function hapus($kode){

    }

    public function tambah(){

    }

    public function perbarui(){

    }

    public function kelola(Request $request){
        if(isset($request->ubah)){

        }
    }

    public function update($id){

    }
}
