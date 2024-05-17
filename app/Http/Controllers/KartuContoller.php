<?php

namespace App\Http\Controllers;
use App\Models\Kartu;
use Illuminate\Http\Request;

class KartuContoller extends Controller
{
    //menggunakan elequin orm
    public function index(){
        $kartu = Kartu::all();
        return view('admin2.kartu.index', compact('kartu'));
    }


    public function store(Request $request){
        $kartu = new Kartu;
        $kartu->kode = $request->kode;
        $kartu->nama = $request->nama;
        $kartu->diskon = $request->diskon;
        $kartu->iuran = $request->iuran;
        $kartu->save();

        return redirect('/admin/kartu')->with('status', 'Data berhasil ditambahkan');
    }
}
