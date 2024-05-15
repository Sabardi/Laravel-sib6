<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $fillable = [
        'kode',
        'nama',
        'jk',
        'tmp_lahir',
        'tgl_lahir',
        'email',
        'kartu_id',
    ];
    public function kartu(){
        return $this->belongsTo(Kartu::class);
    }
}
