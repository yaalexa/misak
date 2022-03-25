<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AuthorController;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//de esta forma nos genera todas las rutas
Route::resource('blog',App\Http\Controllers\BlogController::class);
Route::resource('author',App\Http\Controllers\AuthorController::class);
Route::resource('areas',App\Http\Controllers\AreasController::class);
Route::resource('editorial',App\Http\Controllers\EditorialController::class);
//Route::resource('typematerial',App\Http\Controllers\TypeMaterialController::class);
/*Route::get('/author',[AuthorController::class,'index']);// muestra todos los registros
Route::post('/author',[AuthorController::class,'store']);//crea un registro
Route::put('/author/{id}',[AuthorController::class,'update']);//actualiza un registro
Route::delete('/author/{id}',[AuthorController::class,'destroy']);//elimina un registro*/
