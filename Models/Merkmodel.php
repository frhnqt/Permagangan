<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Productmodel;

class Merkmodel extends Model
{
    use HasFactory;

    protected $table = "tbl_merk";
    
    protected $fillable = ['namamerk'];

    public $timestamps = false;

    public function product() {
        return $this->hasMany(Productmodel::class,'merkid','id');
    }
}
