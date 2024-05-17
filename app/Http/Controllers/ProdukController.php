<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPoroduk;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $produk = Produk::join('jenis_produk', 'jenis_produk_id','=', 'jenis_produk.id')
        ->select('produk.*', 'jenis_produk.nama AS jenis')
        ->get();

        return view('admin2.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $jenis_produk = DB::table('jenis_produk')->get();
        return view('admin2.produk.create', compact('jenis_produk'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // //tambah data produk
        DB::table('produk')->insert([
            'kode'=>$request->kode,
            'nama'=>$request->nama,
            'harga_jual'=>$request->harga_jual,
            'harga_beli'=>$request->harga_beli,
            'stok'=>$request->stok,
            'min_stok'=>$request->min_stok,
            'jenis_produk_id'=>$request->jenis_produk_id,
        ]);
        return redirect('admin/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $produk = Produk::join('jenis_produk', 'jenis_produk_id','=', 'jenis_produk.id')
        ->select('produk.*', 'jenis_produk.nama AS jenis')
        ->where('produk.id', $id)
        ->get();

        return view('admin2.produk.show', compact('produk'));
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
