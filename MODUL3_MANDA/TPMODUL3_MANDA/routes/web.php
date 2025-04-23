<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// ==================1==================

Route::get ('/Dashboard', [DashboardController::class, 'index']);
// Tambahkan route GET ke /dashboard yang memanggil method index() dari DashboardController