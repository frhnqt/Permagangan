<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MetodePembayaranmodel;
use App\Models\Productmodel;

class PesananModel extends Model
{
    protected $table = 'tbl_pesanan'; // Sesuaikan dengan nama tabel yang digunakan

    protected $fillable = [
        'tanggal_pesanan',
        'kodepesanan',
        'invoice',
        'metodepembayaranid',
        'totalbelanja',
        'status'
    ];

    // Relasi ke tabel metode pembayaran
    public function metodepembayaran()
    {
        return $this->belongsTo(MetodePembayaranmodel::class, 'metodepembayaranid', 'id');
    }

    // Relasi ke produk dalam pesanan
    public function products()
    {
        return $this->hasMany(Productmodel::class, 'productid', 'id');
    }
}
