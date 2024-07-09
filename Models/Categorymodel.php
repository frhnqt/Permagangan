<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Productmodel;

class Categorymodel extends Model
{
    use HasFactory;
    protected $table = "tbl_category";
    protected $fillable = ['namacategory'];
    public function product() {
        return $this->hasMany(Productmodel::class,'categoryid','id');
    }
}
