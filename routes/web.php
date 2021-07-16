<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\UserAuth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[indexController::class,'register']);

Route::get('/home',[indexController::class,'home']);

Route::get('/report_fire',[indexController::class,'report']);

Route::get('/offline', function () {    
    return view('modules/laravelpwa/offline');
});

Route::get('/register',function(){
    return view('register/register');
});

Route::post('/saveRegister',[UserAuth::class,'saveRegister']);

Route::post('/login',[UserAuth::class,'login']);

Route::get('/signin',function(){
    return view('register/signin');
});

Route::get('/logout',function(){
    if(session()->has('id')){
        session()->flush();
    }
    return redirect('/');
});

Route::get('/home/swasta',function(){
    return view('home/pemadam_swasta');
});

Route::get('/home/kota',function(){
    return view('home/pemadam_kota');
});

Route::get('/home/citizen',function(){
    return view('home/citizen');
});

Route::get('/feeds',function(){
    return view('feeds_news/feeds');
});

Route::get('/news',function(){
    return view('feeds_news/news');
});

Route::get('/donation',function(){
    return view('/donation/donation-list');
});


Route::get('/donation-detail',function(){
    return view('/donation/donation-detail');
});

Route::get('/confirm',function(){
    return view('donation/confirm-donation');
});

Route::get('/pilih-dompet',function(){
    return view('donation/pilih-dompet');
});

Route::get('/success-donation',function(){
    return view('donation/success');
}); 

Route::get('/profile',function(){
    return view('/profile/profile');
});

Route::get('/edit-profile',function(){
    return view('/profile/edit-profile');
});

Route::get('/address_list',function(){
    return view('/add_address/address-list');
});

Route::get('/add_address',function(){
    return view('/add_address/add_address');
});

Route::get('/add_address/detail',function(){
    return view('add_address/address-map');
});

Route::get('/add_address/save',function(){
    return view('add_address/find-address');
});


Route::get('/e-wallet',function(){
    return view('wallet/e-wallet');
});

Route::get('/daftar-pemadam',function(){
    return view('pemadam/daftar-pemadam');
});

Route::get('/profile-pemadam',function(){
    return view('pemadam/profile-pemadam');
});