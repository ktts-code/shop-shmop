<?php

use Illuminate\Routing\Controller;

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






//ADMIN Routes
Route::name('admin.')
        ->prefix('admin')
        ->namespace('Admin')
        ->group(  function()
    {
      Route::get("/categories/create", 'CategoryController@create')->name('create');
      Route::post("/categories", 'CategoryController@store')->name('store');
    }
);




// {{-- 1.создать форму для категории
// 2. -> action method -> POST/categories -> store()
// 3. form -> data($reauest)
// 4. Model -> create()  --}}

http://localhost:3000/public/admin/categories/create