<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Merkmodel;
use App\Models\Categorymodel;
use App\Models\Cartmodel;

class Productmodel extends Model
{
    use HasFactory;
    protected $table = "tbl_product";
    protected $fillable = ['kodeproduct','namaproduct','stok','merkid','categoryid','harga','deskripsi','gambar'];
    public function merk() {
    return $this->belongsTo(Merkmodel::class, 'merkid', 'id');
    }
    public function category() {
    return $this->belongsTo(Categorymodel::class, 'categoryid', 'id');
    }
    public function product() {
        return $this->hasMany(Cartmodel::class, 'productid', 'id');
    }
    public function products()
    {
        return $this->belongsTo(Pesananmodel::class, 'productid', 'id');

    }
}
