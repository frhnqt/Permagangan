<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Productmodel;
use App\Models\Pesananmodel;
use App\Models\Invoicemodel;

class Cartmodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_cart';

    protected $fillable = [
        'namaproduct',
        'harga',
        'quantity',
        'totalbelanja'
    ];
    public function product()
    {
        return $this->belongsTo(Productmodel::class, 'productid', 'id');
    }
    public function pesanan()
    {
        return $this->hasMany(Pesananmodel::class, 'cartid', 'id');
    }
    public function invoice()
    {
        return $this->hasMany(Invoicemodel::class, 'cartid', 'id');
    }
}
