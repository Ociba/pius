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
Route::get('/create-department',[DepartmentController::Class,'validateDepartment']);
Route::get('/get-employee',[EmployeeController::Class, 'getEmployee'])->name('Employee');
Route::post('/create-employee',[EmployeeController::Class,'validateEmployee']);
Route::get('/get-asset',[AssetController::Class, 'getAsset'])->name('Asset');
Route::get('/create-asset',[AssetController::class,'validateAsset']);
Route::get('/given-out/{id}',[AssetController::class,'updateItemQuantity']);
Route::get('/distribute_asset/{id}',[AssetController::class,'giveOutAsset']);
Route::get('/get-store',[StoreController::Class, 'getStore'])->name('Store');
Route::get('/get-pricing',[PriceController::Class, 'getPrice'])->name('Price');
Route::get('/get-transaction',[TransactionController::Class, 'getTransaction'])->name('Transaction');
Route::get('/get-done-transaction',[TransactionController::Class, 'getDoneTransaction'])->name('Done Transaction');
Route::get('/get-lost-transaction',[TransactionController::Class, 'getLostTransaction'])->name('Lost Transaction');
Route::get('/done/{id}',[TransactionController::Class,'UpdateTransactionToDone']);
Route::get('/lost/{id}',[TransactionController::Class,'UpdateTransactionToLost']);
Route::get('/create-transaction',[TransactionController::Class,'validateTransaction']);
Route::get('/print-transaction/{id}',[TransactionController::Class, 'printTransaction'])->name('Print Transaction');
Route::get('/print-copy-now/{id}',[TransactionController::Class,'printTransactionCopy']);
Route::get('/get-withdraw',[WithdrawController::Class, 'getWithdraw'])->name('Withdraw');
Route::get('/withdraw-amount',[WithdrawController::Class, 'validateWithdraw']);
Route::get('/get-expenditure',[ExpenditureController::Class, 'getExpenditure'])->name('Expenditure');
Route::get('/create-expenditure',[ExpenditureController::Class, 'validateExpenditure']);
Route::get('/get-receipt',[ReceiptController::Class, 'getReceipt'])->name('Receipts');
Route::post('/create-receipt',[ReceiptController::Class, 'validateReceipt']);
Route::get('/rename-receipt/{id}',[ReceiptController::Class,'renameReciept']);
Route::get('/update-receipt/{id}',[ReceiptController::Class,'updatesReceipt']);
Route::get('/remove-receipt/{id}',[ReceiptController::Class,'deleteReceipt']);
Route::get('/get-profile',[ProfileController::Class, 'getProfile'])->name('Profile');
Route::get('/get-calendar',[CalendarController::Class, 'getCalendar'])->name('Profile');
Route::get('/get-chat',[ChatController::Class, 'getChat'])->name('Chat');
