<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemadamSwasta extends Model
{
    use HasFactory;
    protected $table = "pemadam_swasta";
    protected $fillable = ['id','nama','alamat','lat','lng'];
    public $timestamps = false;
}
