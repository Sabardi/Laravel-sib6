<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPoroduk extends Model
{
    use HasFactory;
    // pemanggilan nama tabel yg digunakan
    protected $table = 'jenis_produk';

    // panggilan kolom yang ada di tabel (sesuai dengan ada di database)
    protected $fillable = ['nama'];

    public function produk(){
        return $this->hasMany(Produk::class);
    }
}
