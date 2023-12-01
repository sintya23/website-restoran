<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';
    protected $fillable = ['id', 'waktu', 'status', 'pelanggan', 'meja',];

    public function detailPemesanans() {
        return $this->hasMany(DetailPemesanan::class, 'pemesanan_id');
    }
}