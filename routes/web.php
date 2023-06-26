<?php

use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ReferenceController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SiteController;
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

Route::prefix('{language}')->where(['language' => '[a-zA-Z]{2}'])->middleware('language')->group(function () {
    Route::get('/', [SiteController::class, 'index']);
});
Route::get('/', function () { return redirect(app()->getLocale());});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('admin.dashboard');

Route::middleware(['auth'])->group(function (){
    Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function (){
        Route::resource('role', RoleController::class);
        Route::resource('permission', PermissionController::class);
        Route::resource('user', UserController::class);
        Route::get('reference/type', [ReferenceController::class, 'referencesType'])->name('reference.type');
        Route::resource('reference', ReferenceController::class);
        Route::resource('settings', SettingsController::class);
        Route::resource('partners', PartnerController::class);
        Route::resource('news', NewsController::class);
        Route::post('news/upload', [NewsController::class, 'upload'])->name('news.image-upload');
        Route::post('reference/upload', [ReferenceController::class, 'upload'])->name('reference.image-upload');
    });
});


require __DIR__.'/auth.php';
