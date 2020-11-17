<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/admin', [AdminController::class, 'index']);
// Route::get('/admin/addCategory', [CategoryController::class, 'categoryCreate']);

// Route::get('/index', 'HomeController@index');

Route::group(['prefix' => 'admin'], function (){
    //Route::get('/', 'Backend\DashboardController@index')->name('admin.dashboard');

Route::get('/', 'backend\AdminController@index');
Route::get('/addCategory', 'backend\CategoryController@categoryCreate');
Route::get('/addContent', 'backend\ContentController@contentCreate');
Route::get('/viewCategory', 'backend\CategoryController@getAllCategories');
Route::get('/viewContent', 'backend\ContentController@getAllContents');

Route::post('/categoryStore', 'backend\CategoryController@categoryStore')->name('categoryStore');
Route::post('/contentStore', 'backend\ContentController@contentStore')->name('contentStore');

});
