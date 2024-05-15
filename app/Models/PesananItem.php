<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananItem extends Model
{
    use HasFactory;
    protected $table = 'pesanan_items';
    protected $fillable = [
        'produk_id',
        'pesanan_id',
        'qty',
        'harga',
    ];
}
