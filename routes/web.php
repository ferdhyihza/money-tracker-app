<?php

use App\Http\Controllers\AccountController;
use App\Livewire\Accounts\AccountCreate;
use App\Livewire\Accounts\AccountList;
use App\Livewire\Dashboard;
use App\Livewire\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/profile', Profile::class)->name('profile.index');
Route::get('/accounts', AccountList::class)->name('accounts.index');
Route::get('/accounts/create', AccountCreate::class)->name('accounts.create');
