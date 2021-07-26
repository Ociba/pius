<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\ExpenditureController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ChatController;

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
})->name('Welcome To Tech Company');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/logout',[AuthenticationController::Class, 'logoutUser']);
Route::get('/get-department',[DepartmentController::Class,'getDepartment'])->name('Department');
Route::get('/get-employee',[EmployeeController::Class, 'getEmployee'])->name('Employee');
Route::get('/get-asset',[AssetController::Class, 'getAsset'])->name('Asset');
Route::get('/get-store',[StoreController::Class, 'getStore'])->name('Store');
Route::get('/get-pricing',[PriceController::Class, 'getPrice'])->name('Price');
Route::get('/get-transaction',[TransactionController::Class, 'getTransaction'])->name('Transaction');
Route::get('/get-withdraw',[WithdrawController::Class, 'getWithdraw'])->name('Withdraw');
Route::get('/get-expenditure',[ExpenditureController::Class, 'getExpenditure'])->name('Expenditure');
Route::get('/get-receipt',[ReceiptController::Class, 'getReceipt'])->name('Receipts');
Route::get('/get-profile',[ProfileController::Class, 'getProfile'])->name('Profile');
Route::get('/get-calendar',[CalendarController::Class, 'getCalendar'])->name('Profile');
Route::get('/get-chat',[ChatController::Class, 'getChat'])->name('Chat');
