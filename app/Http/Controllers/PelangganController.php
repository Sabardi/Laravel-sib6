<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kartu;
use App\Models\Pelanggan;
class PelangganController extends Controller
{
    //
    public function index(){
        $pelanggan = Pelanggan::all();
        return view('admin2.pelanggan.index', compact('pelanggan'));
    }

    public function create(){
        $kartu = Kartu::all();
        $gender = ['L', 'P'];
        return view('admin2.pelanggan.create', compact('kartu', 'gender'));
    }

    public function store(Request $request){
        $pelanggan = new Pelanggan;
        $pelanggan->kode = $request->kode;
        $pelanggan->nama = $request->nama;
        $pelanggan->jk = $request->jk;
        $pelanggan->tmp_lahir = $request->tmp_lahir;
        $pelanggan->tgl_lahir = $request->tgl_lahir;
        $pelanggan->email = $request->email;
        $pelanggan->kartu_id = $request->kartu_id;
        $pelanggan->save();

        return redirect('/admin/pelanggan')->with('status', 'Data berhasil ditambahkan');
    }
}
