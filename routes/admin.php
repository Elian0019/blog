<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\homeController;

Route::get('',[homeController::class, 'index']);
?>