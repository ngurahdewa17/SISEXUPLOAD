<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataPopController;
use App\Http\Controllers\AlamatPopController;
use App\Http\Controllers\DataPowerController;
use App\Http\Controllers\DataProjekController;
use App\Http\Controllers\DataRouterController;
  
Route::get('users', [UserController::class, 'index'])->name('index');
Route::get('users-export', [UserController::class, 'export'])->name('users.export');
Route::post('users-import', [UserController::class, 'import'])->name('users.import');

Route::get('datapop', [DataPopController::class, 'index'])->name('datapop.index');
Route::get('datapop-export', [DataPopController::class, 'export'])->name('datapop.export');
Route::post('datapop-import', [DataPopController::class, 'import'])->name('datapop.import');

Route::get('alamatpop', [AlamatPopController::class, 'index'])->name('alamatpop.index');
Route::get('alamatpop-export', [AlamatPopController::class, 'export'])->name('alamatpop.export');
Route::post('alamatpop-import', [AlamatPopController::class, 'import'])->name('alamatpop.import');

Route::get('datapower', [DataPowerController::class, 'index'])->name('datapower.index');
Route::get('datapower-export', [DataPowerController::class, 'export'])->name('datapower.export');
Route::post('datapower-import', [DataPowerController::class, 'import'])->name('datapower.import');

Route::get('dataprojek', [DataProjekController::class, 'index'])->name('dataprojek.index');
Route::get('dataprojek-export', [DataProjekController::class, 'export'])->name('dataprojek.export');
Route::post('dataprojek-import', [DataProjekController::class, 'import'])->name('dataprojek.import');

Route::get('datarouter', [DataRouterController::class, 'index'])->name('datarouter.index');
Route::get('datarouter-export', [DataRouterController::class, 'export'])->name('datarouter.export');
Route::post('datarouter-import', [DataRouterController::class, 'import'])->name('datarouter.import');