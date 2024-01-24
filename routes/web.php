<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerOldZone;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ZoneController;

use App\Models\Activite;

Route::get('/', function () {
    return view('index');
});


// projets
Route::get('liste-projets', [ProjetController::class, 'index'])->name('projets.liste');
Route::get('create-projets', [ProjetController::class, 'create'])->name('projets.create');
Route::post('create-projets', [ProjetController::class, 'store'])->name('projets.store');
Route::get('liste-projets/{projet}/edit', [ProjetController::class, 'edit'])->name('projets.edit');
Route::put('liste-projets/{projet}/update', [ProjetController::class, 'update'])->name('projets.update');
Route::delete('liste-projets/{projet}/delete', [ProjetController::class, 'delete'])->name('projets.delete');


//Activites
Route::get('liste-activites', [ActiviteController::class, 'index'])->name('activite.liste');
Route::get('create-activites', [ActiviteController::class, 'create'])->name('activite.create');
Route::post('create-activites', [ActiviteController::class, 'store'])->name('activite.store');
Route::get('liste-activites/{activite}/edit', [ActiviteController::class, 'edit'])->name('activite.edit');
Route::put('liste-activites/{activite}/update', [ActiviteController::class, 'update'])->name('activite.update');
Route::delete('liste-activites/{activite}/delete', [ActiviteController::class, 'delete'])->name('activite.delete');


// zones
//Route::get('liste-zones', [ControllerOldZone::class, 'index'])->name('zone.liste');
//Route::get('create-zones', [ControllerOldZone::class, 'create'])->name('zone.create');
//Route::post('create-zones', [ControllerOldZone::class, 'store'])->name('zone.store');
//Route::get('liste-zones/{zone}/edit', [ControllerOldZone::class, 'edit'])->name('zone.edit');
//Route::put('liste-zones/{zone}/update', [ControllerOldZone::class, 'update'])->name('zone.update');
//Route::delete('liste-zones/{zone}/delete', [ControllerOldZone::class, 'delete'])->name('zone.delete');


Route::resource('zones', ZoneController::class);



