<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reportmodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_reports';
    protected $fillable = [
        'bulanan', 'tahunan'
    ];
}
