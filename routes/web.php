<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\first;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/table', function () {
    return view('pie');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category',[first::class,"showcate"]);
Route::post('/insertcategory',[first::class,"insertcate"]);
Route::get('/pie',[first::class,'chart']);
Route::get('/addcategory',[first::class,'category']);
Route::get('/editcategory/{id}',[first::class,'editcate']);
Route::post('/updatecategory',[first::class,'updatecate']);
Route::get('/delecategory/{id}',[first::class,'delecate']);
Route::get('/addproduct',[first::class,'product']);
Route::get('/assets',[first::class,'showpro']);
Route::post('/insertpro',[first::class,'insertpro']);
Route::get('/editpro/{id}',[first::class,'editpro']);
Route::post('/updatepro',[first::class,'updatepro']);
Route::get('/delepro/{id}',[first::class,'delepro']);
Route::get('/imge/{id}',[first::class,'imgLoad']);
Route::post('/uploadd',[first::class,'uploadd']);
Route::get('/showimg/{id}',[first::class,'showimg']);
Route::get('/bar',[first::class,'bar']);
