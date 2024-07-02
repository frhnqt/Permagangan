<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customermodel extends Model
{
    use HasFactory;
    protected $table = "tbl_customer";
    protected $fillable = ['kodecustomer','namacustomer','email','no_telp','alamat'];
}
