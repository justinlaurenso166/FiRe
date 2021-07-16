<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserAuth extends Controller
{
    //
    function saveRegister(Request $req){
        $user = new Users();
        $cek = DB::table('user')->where('username',$req->username)->count();

        if($cek > 0){
            return redirect('/register')->with(['errors'=>'Nomor telepon sudah pernah terdaftar !']);
        }
        else{
            $user->username = $req->username;
            $user->name = $req->name;

            $hash = Hash::make($req->password);

            $user->password = $hash;
            $user->address = $req->address;
            $user->save();
            return redirect('/register')->with(['success'=>'Registrasi berhasil']);
        }
    }

    function login(Request $req){
        $username = $req->username;
        $password = $req->password;

        $cek = Users::select("id","username","name","password","address")->where("username",$username)->get();

        $count = DB::table("user")->where("username",$username)->count();

        if($count > 0){
            if(Hash::check($password, $cek[0]->password)){
                $req->session()->put('id',$cek[0]->id);
                $req->session()->put('username',$cek[0]->username);
                $req->session()->put('name',$cek[0]->name);
                $req->session()->put('address',$cek[0]->address);

                return redirect('/home/citizen');
            }
            else{
                return redirect('/signin')->with(['wrong_pass'=>'Password salah !']);
            }
        }
        else{
            return redirect('/signin')->with(['user_notfound'=>'User tidak ditemukan !']);
        }
    }
}
