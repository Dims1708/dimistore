<?php

use Illuminate\Support\Facades\Route;

// memanggil controller
use App\Http\Controllers\Login\RegisterController as Register_C;
use App\Http\Controllers\Login\LoginController as Login_C;
use App\Http\Controllers\Produk\ProdukController as Produk_C;

Route::get('/',[Register_C::class,'view_register']);
Route::post('/',[Register_C::class,'get_register'])->name('send_register');
Route::get('/login',[Login_C::class,'view_login']);
Route::post('/login',[Login_C::class,'get_login'])->name('send_login');
Route::get('/produk',[Produk_C::class,'view_produk']);


// // Route::get('/', function () {
// //     return view('app');
// // });
// // Route::get('/login', function () {
// //     return view('login');
// });
// Route::get('/produk', function () {
//     return view('produk');
// });
Route::get('/mobilelegends', function () {
    return view('mobilelegends');
});
Route::get('/freefire', function () {
    return view('freefire');
});
Route::get('/pubg', function () {
    return view('pubg');
});
Route::get('/coc', function () {
    return view('coc');
});
Route::get('/pointblank', function () {
    return view('pointblank');
});
Route::get('/hok', function () {
    return view('hok');
});
Route::get('/dana', function () {
    return view('dana');
});
Route::get('/ovo', function () {
    return view('ovo');
});
Route::get('/shopeepay', function () {
    return view('shopeepay');
});
Route::get('/gopay', function () {
    return view('gopay');
});
Route::get('/axis', function () {
    return view('axis');
});
Route::get('/im3', function () {
    return view('im3');
});
Route::get('/three', function () {
    return view('three');
});
Route::get('/telkomsel', function () {
    return view('telkomsel');
});
Route::get('/xl', function () {
    return view('xl');
});
Route::get('/byu', function () {
    return view('byu');
});
Route::get('/smartfren', function () {
    return view('smartfren');
});
Route::get('/pln', function () {
    return view('pln');
});