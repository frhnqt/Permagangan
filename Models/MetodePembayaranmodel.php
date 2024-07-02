<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pesanansayamodel;

class MetodePembayaranmodel extends Model
{
    use HasFactory;
    protected $table = "tbl_metodepembayaran";
    protected $fillable = ['namabank', 'no_rek'];
}
