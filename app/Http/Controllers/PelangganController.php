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
}
