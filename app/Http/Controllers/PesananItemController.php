<?php

namespace App\Http\Controllers;

use App\Models\PesananItem;
use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PesananItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pesananitem = PesananItem::join('produk', 'produk_id','=', 'produk.id')
        ->join('pesanan', 'pesanan_id', '=', 'pesanan.id')
        // ->select('pesanan_items.*', 'jenis_produk.nama AS jenis')
        // ->select('produk.*', 'produk.nama AS jenis')
        ->get();
        return view('admin2.pesanan_item.index', compact('pesananitem'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PesananItem $pesananItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PesananItem $pesananItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PesananItem $pesananItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PesananItem $pesananItem)
    {
        //
    }
}
