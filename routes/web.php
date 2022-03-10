<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\HomeController;

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

// Clear Application caches

Route::get('/clear', function () {
    Artisan::call('optimize:clear');
    echo "View cache cleared! <br>";
    echo "Route cache cleared! <br>";
    echo "Configuration cache cleared! <br>";
    echo "Application cache cleared! <br>";
    echo "Cached events cleared! <br>";
    echo "Compiled services and packages files removed! <br>";
    echo "Caches cleared successfully! <br>";
});

Route::get('/admin/dashboard', [\App\Http\Controllers\Admin\HomeController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::resources([
        'branches' => \App\Http\Controllers\Admin\BranchController::class,
    ]);
});
