<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pesananmodel;
use App\Models\Cekoutmodel;
use App\Models\Invoicemodel;

class MetodePembayaranmodel extends Model
{
    use HasFactory;
    protected $table = "tbl_metodepembayaran";
    protected $fillable = ['namabank', 'no_rek'];
    public function pesanan() {
        return $this->hasMany(Pesananmodel::class, 'metodepembayaranid', 'id');
    }
    public function cekout() {
        return $this->hasMany(Cekoutmodel::class, 'metodepembayaranid', 'id');
    }
    public function invoice() {
        return $this->hasMany(Invoicemodel::class, 'metodepembayaranid', 'id');
    }
    
}
