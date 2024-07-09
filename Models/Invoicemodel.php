<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PesananModel;
use App\Models\CartModel;
use App\Models\MetodePembayaranModel;

class Invoicemodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_invoice'; // Sesuaikan dengan nama tabel yang digunakan

    protected $fillable = [
        'kodepesanan',
        'invoice',
        'metodepembayaranid',
        'totalbelanja',
        'status'
    ];
    public function Invoice() {
        return $this->hasMany(Pesananmodel::class, 'invoiceid', 'id');
    }
    public function metodepembayaran() {
        return $this->hasMany(MetodePembayaranmodel::class, 'metodepembayaranid', 'id');
    }
    public function cart() {
        return $this->belongsTo(Cartmodel::class, 'cartid', 'cart');
    }
}
