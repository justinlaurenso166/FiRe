<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\pemadamSwasta;
Use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    //
    public function register(){
        return view('register/index');
    }
    public function home(){
        return view('index');
    }

    public function report(){
        $pemadam = DB::table('pemadam_swasta')->where('id',1)->get();
        $kebakaran = Laporan::all();

        return view('/report/report_fire',[
            'pemadam' => $pemadam,
            'kebakaran' => $kebakaran
        ]);
    }
}
