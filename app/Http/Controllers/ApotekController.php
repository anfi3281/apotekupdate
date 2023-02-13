<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApotekController extends Controller
{
    public function index(){
        $data = DB::table('tabel_obat')->get();

        return view('index', ['data'  =>  $data, 'form'  =>  1]);
    }

    public function edit($kode){
        $data = DB::table('tabel_obat')->get();
        $data2 = DB::table('tabel_obat')->where('kode', $kode)->get();

        return view('index', ['data'  =>  $data, 'data2'  =>  $data2, 'form'  =>  2]);
    }

    public function hapus($kode){
        DB::table('tabel_obat')->where('kode', $kode)->delete();

        return redirect('/');
    }

    public function tambah(){

    }

    public function perbarui(){

    }

    public function kelola(Request $request){
        if(isset($request->ubah)){
            DB::table('tabel_obat')->where('kode', $request->kodesimpan)->update([
                'kode' => $request->kode,
                'nama' => $request->nama,
                'jenis' => $request->jenis,
                'kategori' => $request->kategori,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'jumlah' => $request->jumlah
            ]);
            return redirect('/');
        } else if(isset($request->input)){
            DB::table('tabel_obat')->insert([
                'kode' => $request->kode,
                'nama' => $request->nama,
                'jenis' => $request->jenis,
                'kategori' => $request->kategori,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'jumlah' => $request->jumlah
            ]);

            return redirect('/');
        }
    }

    public function update($id){

    }
}
