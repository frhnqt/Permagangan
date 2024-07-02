<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminmodel extends Model
{
    use HasFactory;
    protected $table = "tbl_admin";
    protected $fillable = ['kodeadmin', 'namaadmin', 'email', 'alamat', 'no_telp'];
}
