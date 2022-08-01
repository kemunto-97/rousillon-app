<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ReviewsController;

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

Route::get('/', function () { return view('welcome');});

//categories
Route::get('/category', [CategoriesController::class, 'create']);
Route::get('/categories', [CategoriesController::class, 'index']);
Route::post('/addcategory', [CategoriesController::class, 'save']);

//customers
Route::get('/customer', [CustomersController::class, 'create']);
Route::get('/customers', [CustomersController::class, 'index']);
Route::post('/addcustomer', [CustomersController::class, 'save']);

//expenses
Route::get('/expense', [ExpensesController::class, 'create']);
Route::get('/expenses', [ExpensesController::class, 'index']);
Route::post('/addexpense', [ExpensesController::class, 'save']);

//invoices
Route::get('/invoice', [InvoiceController::class, 'create']);
Route::get('/invoices', [InvoiceController::class, 'index']);
Route::post('/addinvoice', [InvoiceController::class, 'save']);

//menus
Route::get('/menu', [MenuController::class, 'create']);
Route::get('/menus', [MenuController::class, 'index']);
Route::post('/addmenu', [MenuController::class, 'save']);

//orders
Route::get('/order', [OrdersController::class, 'create']);
Route::get('/orders', [OrdersController::class, 'index']);
Route::post('/addorders', [OrdersController::class, 'save']);

//payments
Route::get('/payment', [PaymentsController::class, 'create']);
Route::get('/payments', [PaymentsController::class, 'index']);
Route::post('/addpayment', [PaymentsController::class, 'save']);

//reviews
Route::get('/review', [ReviewsController::class, 'create']);
Route::get('/reviews', [ReviewsController::class, 'index']);
Route::post('/addreview', [ReviewsController::class, 'save']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
