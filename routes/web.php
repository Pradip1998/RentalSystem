<?php
use Illuminate\Support\Facades\route;
use app\Http\Controllers\ProductController;

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


Route::get('/new-forget', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('firstpage');
});


Route::middleware(['auth'])->group(function(){
    
Route::get('/profile', function () {
    return view('userprofile');
});
    
});

Route::get('/product', function () {
    return view('product');
});
Route::get('/register', function () {
    return view('newregister');
});
Route::get('detail/{id}', function ($id) {
    return view('detail');
});

Route::get('/home', function () {
    return view('home');
});






Route::middleware(['auth'])->group(function(){        
Route::get('/cart', function () {
    return view('cart');
});

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'ProductController@store');
Route::get('/index', 'ProductController@index');
Route::get('/search', 'ProductController@show');
Route::get('/detail/{id}', 'DetailController@show');


Route::middleware(['auth'])->group(function(){
Route::match(['get', 'post'], '/addtocart/{id}','DetailController@store');
Route::match(['get', 'post'], '/removecart/{id}','DetailController@destroy');
Route::get('/cart', 'DetailController@index');
Route::get('/order', 'CartController@index');
Route::get('/success', 'CartController@store');

});





