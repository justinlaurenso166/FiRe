<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = "laporan_kebakaran";
    protected $fillable = ['id','lokasi','lat','lng'];

    public $timestamps = false;
}
