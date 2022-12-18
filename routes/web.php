<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\RouteCompiler;
use App\Http\Controllers\AuthController;

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
Route::get('/admin',[AdminController::class,'dashboard']);



Route::get('/Home',[AdminController::class,'content']);
Route::get('/baby',[AdminController::class,'baby']);
Route::get('/women',[AdminController::class,'women']);
Route::get('/food',[AdminController::class,'Food']);
//
Route::get('/dash',[AdminController::class,'dashboard']);
Route::post('/dash_create',[AdminController::class,'dash_create'])->name('create');


Route::get('/child',[AdminController::class,'child']);

//makeup form create
Route::post('/create',[AdminController::class,'create'])->name('list.create');
//makeup end form create 



Route::get('/update',[AdminController::class,'update'])->name('list.update');

Route::get('/makeup',[AdminController::class,'makeup'])->name('makeup');
Route::post('/makeup-a',[AdminController::class,'makeupb'])->name('makeup-a');

Route::get('/table',[AdminController::class,'table'])->name('form-table');

Route::get('/makeup-delete/{id}',[AdminController::class,'delete'])->name('makeup-delete');

//food table read
Route::get('food-table',[AdminController::class,'Food_Table'])->name('food-table');

Route::get('food-table_delete/{id}',[AdminController::class,'fooddelete'])->name('food-delete');
//end table delete
//food update
Route::get('foodupdatepage/{id}',[AdminController::class,'edit'])->name('editpage');

Route::put('foodupdateall/{id}',[AdminController::class,'updateall'])->name('foodupdateall');
//start regester page
Route::get('regester',[AdminController::class,'regester'])->name('regester');//end regester page
//start regester form page
Route::get('regester-form',[AdminController::class,'regester_form'])->name('regester-form');
//end regester form page
//Start regester form create
Route::post('regester-formcreate',[AdminController::class,'regester_formcreate'])->name('regester-formcreate');
//end regester form create

//start customer sidebar page
Route::get('customer',[AdminController::class,'customer'])->name('customer');
//end customer sidebar page
//start customer form page
Route::get('customer-form',[AdminController::class,'customer_form'])->name('customer-form');
//end customer form page
//start customer create form page
Route::post('customer-formcreate',[AdminController::class,'customer_formcreate'])->name('customer-formcreate');
//end create form
Route::get('customer-delete/{id}',[AdminController::class,'customer_delete'])->name('customer-delete');

Route::get('customer-edit/{id}',[AdminController::class,'customer_edit'])->name('customer.edit');
Route::put('/customer-update/{id}',[AdminController::class,'updates'])->name('update.customer');



Route::get('/regForm',[AuthController::class,'regForm'])->name('regForm');
 Route::post('/regFormSubmit',[AuthController::class,'regFormSubmit'])->name('regFormSubmit');

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/loginsubmit',[AuthController::class,'loginsubmit'])->name('loginsubmit');







//start payment page
Route::get('payment',[AdminController::class,'payment'])->name('payment');
Route::get('payment-form',[AdminController::class,'payment_form'])->name('payment-form');
Route::post('payment-formcreate',[AdminController::class,'payment_formcreate'])->name('payment-formcreate');
//end payment page