<?php

use App\Http\Controllers\AccountController;
use App\Livewire\Account;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/accounts', Account::class)->name('accounts.index');
