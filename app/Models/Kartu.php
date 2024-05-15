<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    use HasFactory;
    protected $table = 'kartu';
    protected $fillable = [
        'kode',
        'nama',
        'diskon',
        'iuran'
    ];

    public function pelanggan(){
        return $this->hasMany(Pelanggan::class);
    }
}
