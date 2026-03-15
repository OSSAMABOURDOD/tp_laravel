<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
// Une seule ligne génère les 5 routes CRUD
Route::apiResource('products', ProductController::class);
// Équivaut à :
// GET /api/products → index() (liste)
// POST /api/products → store() (créer)
// GET /api/products/{id} → show() (détail)
// PUT /api/products/{id} → update() (modifier)
// DELETE /api/products/{id} → destroy() (supprimer)

Route::apiResource('todos', TodoController::class);