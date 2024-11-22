<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mobilController extends Controller
{
    public function index()
    {
    $mobil = DB::table('mobil')->get();
    
    return view('index',['mobil' => $mobil]);
    }

    public function tambah(){
        return view('tambah');
    }

    public function store(Request $request){
        DB::table('mobil')->insert([
            'nama_mobil' => $request->nama,
            'harga_mobil' => $request->harga,
            'tahun_mobil' => $request->tahun,
            'warna_mobil' => $request->warna,
        ]);
        return redirect('/mobil');
    }

    public function edit($id){
        $mobil = DB::table('mobil')->where('id',$id)->get();
        return view('edit',['mobil' => $mobil]);
    }

    public function update(Request $request){
        DB::table('mobil')->where('id',$request->id)->update([
            'nama_mobil' => $request->nama,
            'harga_mobil' => $request->harga,
            'tahun_mobil' => $request->tahun,
            'warna_mobil' => $request->warna,
        ]);
        return redirect('/mobil');
    }

    public function hapus($id){
	    DB::table('mobil')->where('id',$id)->delete();
	    return redirect('/mobil')->with('status','Data mobil berhasil dihapus');
    }
}
