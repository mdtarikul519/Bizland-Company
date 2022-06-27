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
 
Route::get('/', [App\Http\Controllers\Frontend\ForntendController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('users')->group(function () {
    Route::get('/view', 'App\Http\Controllers\backend\userController@view')->name('user.view');
    Route::get('/add', 'App\Http\Controllers\backend\userController@add')->name('user.add');
    Route::post('/store', 'App\Http\Controllers\backend\userController@store')->name('user.store');
    Route::get('/edit/{id}', 'App\Http\Controllers\backend\userController@edit')->name('user.edit');
    Route::post('/update/{id}', 'App\Http\Controllers\backend\userController@update')->name('user.update');
    Route::get('/delete/{id}', 'App\Http\Controllers\backend\userController@delete')->name('user.delete');
});


Route::prefix('profiles')->group(function () {
    Route::get('/view', 'App\Http\Controllers\backend\ProfileController@view')->name('profiles.view');
    Route::get('/edit', 'App\Http\Controllers\backend\ProfileController@edit')->name('profiles.edit');
    Route::post('/update', 'App\Http\Controllers\backend\ProfileController@update')->name('profiles.update');
    Route::get('/passowrd/view', 'App\Http\Controllers\backend\ProfileController@passwordView')->name('profiles.passowrd.view');
    Route::post('/passowrd/update', 'App\Http\Controllers\backend\ProfileController@passwordUpdate')->name('profiles.passowrd.update');
});

Route::prefix('logo')->group(function () {
    Route::get('/view', 'App\Http\Controllers\backend\LogoController@view')->name('logo.view');
    Route::get('/add', 'App\Http\Controllers\backend\LogoController@add')->name('logo.add');
    Route::post('/store', 'App\Http\Controllers\backend\LogoController@store')->name('logo.store');
    Route::get('/edit/{id}', 'App\Http\Controllers\backend\LogoController@edit')->name('logo.edit');
    Route::post('/update/{id}', 'App\Http\Controllers\backend\LogoController@update')->name('logo.update');
    Route::get('/delete/{id}', 'App\Http\Controllers\backend\LogoController@delete')->name('logo.delete');
});

Route::prefix('slider')->group(function () {
    Route::get('/view', 'App\Http\Controllers\backend\SliderController@view')->name('slider.view');
    Route::get('/add', 'App\Http\Controllers\backend\SliderController@add')->name('slider.add');
    Route::post('/store', 'App\Http\Controllers\backend\SliderController@store')->name('slider.store');
    Route::get('/edit/{id}', 'App\Http\Controllers\backend\SliderController@edit')->name('slider.edit');
    Route::post('/update/{id}', 'App\Http\Controllers\backend\SliderController@update')->name('slider.update');
    Route::get('/delete/{id}', 'App\Http\Controllers\backend\SliderController@delete')->name('slider.delete');
});



Route::prefix('about')->group(function () {
    Route::get('/view', 'App\Http\Controllers\backend\AboutController@view')->name('about.view');
    Route::get('/add', 'App\Http\Controllers\backend\AboutController@add')->name('about.add');
    Route::post('/store', 'App\Http\Controllers\backend\AboutController@store')->name('about.store');
    Route::get('/edit/{id}', 'App\Http\Controllers\backend\AboutController@edit')->name('about.edit');
    Route::post('/update/{id}', 'App\Http\Controllers\backend\AboutController@update')->name('about.update');
    Route::get('/delete/{id}', 'App\Http\Controllers\backend\AboutController@delete')->name('about.delete');
});


Route::prefix('icon')->group(function () {
    Route::get('/view', 'App\Http\Controllers\backend\IconController@view')->name('icon.view');
    Route::get('/add', 'App\Http\Controllers\backend\IconController@add')->name('icon.add');
    Route::post('/store', 'App\Http\Controllers\backend\IconController@store')->name('icon.store');
    Route::get('/edit/{id}', 'App\Http\Controllers\backend\IconController@edit')->name('icon.edit');
    Route::post('/update/{id}', 'App\Http\Controllers\backend\IconController@update')->name('icon.update');
    Route::get('/delete/{id}', 'App\Http\Controllers\backend\IconController@delete')->name('icon.delete');
});
