<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;
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

Route::get('/', [RegistrationController::class, 'index']);

Route::post('/register', [RegistrationController::class, 'register']);

Route::get('/customer', [CustomerController::class, 'index'])->name('customer.create');

Route::post('/customer', [CustomerController::class, 'store']);

Route::get('/customer/view', [CustomerController::class, 'view']);

Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');

Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');

Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');

// Route::get('/about', 'App\Http\Controllers\DemoController@about');

// //LARAVEL 8-  Route::get('/about', 'DemoController@about');

// Route::get('/courses', SingleActionController::class);

// Route::resource('/photo', PhotoController::class);




// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/demo', function(){
//     return view('demo') ;
// });

// Route::get('/demo/{name}/{id?}', function($name, $id = null){
//     echo $name . " ";
//     echo $id;
// });


//You want to pass data on view - compact - put variables into an array
// Route::get('/demo/{name}/{id?}', function($name, $id = null){
//     $data = compact('name', 'id');
//     //print_r($data);
//     return view('demo')->with($data);
// });

// Route::post('/test', function(){
//     echo "Testing the route!!";
// });

// Route::any('/test', function(){
//     echo "Testing the route!!";
// });
// Route::put('users/{id}', function($id){
   
// });

// Route::patch('', function(){
    
// });

// Route::delete('users/{id}', function($id){
   
// });
