<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPoroduk;

// digunakan jika menggunakan query builder
use Illuminate\Support\Facades\DB;

class JenisProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // variable ini mendeklarasikan table yang di ambil dari mode
        $jenis = DB::table('jenis_produk')->get();
        return view('admin2.jenis.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $jenis_produk = DB::table('jenis_produk')->get();
        return view('admin2.jenis.create', compact('jenis_produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('jenis_produk')->insert([
            'nama' => $request->nama,
        ]);
        return redirect('admin/jenis');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
