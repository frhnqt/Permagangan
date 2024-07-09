<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MetodePembayaranmodel;
use App\Models\PesananModel;

class Cekoutmodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_cekout';

    protected $fillable = [
        'name',
        'state',
        'state_address',
        'city',
        'postcode',
        'no_telp',
        'email',
        'metodepembayaranid'
    ];
    public function metodepembayaran()
    {
        return $this->belongsTo(MetodePembayaranmodel::class, 'metodepembayaranid', 'id');
    }
    public function totalbelanja()
    {
        return $this->belongsTo(PesananModel::class, 'totalbelanjaid', 'id');
    }
}
