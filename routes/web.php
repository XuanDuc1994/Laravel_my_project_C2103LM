<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatrgoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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
Route::get('',[CategoryController ::class,'home'])-> name('home');
Route::get('/product',[ProductController ::class,'product'])-> name('product');
Route::get('/demo',[demoController ::class,'demo'])-> name('demo');
Route::get('/create',[AdminController ::class,'create'])-> name('create');
Route::group(['prefix'=>'admin'],function()
{
Route::get('',[AdminController ::class,'dashboard'])-> name('admin');
Route::get('create',[AdminController ::class,'create'])-> name('admin.create');
Route::post('store',[AdminController ::class,'store'])-> name('admin.store');

});
Route::group(['prefix'=>'admin'],function()
{
Route::get('',[ProductController ::class,'dashboard'])-> name('product');
Route::get('product',[ProductController ::class,'create'])-> name('product.create');
Route::post('add',[ProductController ::class,'add'])-> name('product.add');

});