<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/projects', [ProjectController::class, 'index'])->name("projects.index");
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name("projects.show");
Route::get('/projects/create', [ProjectController::class, 'create'])->name("projects.create");
Route::post('/projects', [ProjectController::class, 'store'])->name("projects.store");
Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name("projects.edit");
Route::put('/projects/{id}', [ProjectController::class, 'update'])->name("projects.update");
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name("projects.destroy");
Route::get('/projects/{id}/delete', [ProjectController::class, 'destroy'])->name("projects.delete");
Route::get('/projects/{id}/restore', [ProjectController::class, 'restore'])->name("projects.restore");
Route::get('/projects/{id}/force-delete', [ProjectController::class, 'forceDelete'])->name("projects.force-delete");
Route::get('/projects/{id}/image', [ProjectController::class, 'image'])->name("projects.image");
Route::get('/projects/{id}/link', [ProjectController::class, 'link'])->name("projects.link");
Route::get('/projects/{id}/created-at', [ProjectController::class, 'createdAt'])->name("projects.created-at");
Route::get('/projects/{id}/updated-at', [ProjectController::class, 'updatedAt'])->name("projects.updated-at");
Route::get('/projects/{id}/description', [ProjectController::class, 'description'])->name("projects.description");
Route::get('/projects/{id}/title', [ProjectController::class, 'title'])->name("projects.title");
Route::get('/projects/{id}/image-url', [ProjectController::class, 'imageUrl'])->name("projects.image-url");

