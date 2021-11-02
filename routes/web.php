<?php

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Home\Homepage;
use App\Http\Livewire\Home\ShopDashboard;
use App\Http\Livewire\Payment\CheckOut;
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

Route::get('/', Homepage::class)->name('index');

Route::get('/Admin/dashboard', Dashboard::class)
    ->name('admin.dashboard');

Route::get('/Product', ShopDashboard::class)
    ->name('product.list');

Route::get('/Product/Checkout', CheckOut::class)
    ->name('product.checkout');
