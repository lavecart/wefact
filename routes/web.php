<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::redirect('/', '/home');
Auth::routes(['register' => false]);
Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::resource('users', 'Admin\UsersController');
    
    Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
    Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('product', 'ProductController@index')->name('product.index');

    Route::resource('incoming', 'IncomingController');

    Route::get('/user-edit', 'ClientController@editUserProfile')->name('client-user-edit');

    Route::get('invoice/index', 'InvoiceController@index')->name('invoice.index');
    Route::get('invoice/create', 'InvoiceController@create')->name('invoice.create');
    Route::get('/invoice/show/{invoice}', 'InvoiceController@show')->name('invoice.show');

    Route::get('debtors', 'DebtorsController@index')->name('debtors.index');
    Route::get('debtors/add', 'DebtorsController@create')->name('debtors.create');

    Route::get('creditors', 'CreditorsController@index')->name('creditors.index');
    Route::get('creditors/create', 'CreditorsController@create')->name('creditors.create');

    Route::post('incoming/create', 'IncomingController@create')->name('incoming.create');
});
