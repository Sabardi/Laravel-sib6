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
}
