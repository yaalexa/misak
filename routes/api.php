<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MaterialController;
//use App\Http\Controllers\AuthorController;

Route::post('register', [UserController::class, 'register']);
// verificar logeo verificar existencia de los usuarios
Route::post('login', [UserController::class, 'login']);

Route::group( ['middleware' => ["auth:sanctum"]], function(){
    //rutas
    Route::get('userprofile', [UserController::class, 'userProfile']);
    Route::get('logout', [UserController::class, 'logout']);
});



//de esta forma nos genera todas las rutas
Route::resource('blog',App\Http\Controllers\BlogController::class);
Route::resource('author',App\Http\Controllers\AuthorController::class);
Route::resource('areas',App\Http\Controllers\AreasController::class);
Route::resource('editorial',App\Http\Controllers\EditorialController::class);
Route::resource('educational_level',App\Http\Controllers\EducationalLevelController::class);
Route::get('/material',[App\Http\Controllers\MaterialController::class,'index']);
Route::put('/material/{id}',[App\Http\Controllers\MaterialController::class,'update']);
Route::delete('/material/{id}',[App\Http\Controllers\MaterialController::class,'delete']);
Route::post('/material',[App\Http\Controllers\MaterialController::class,'store']);
//Route::resource('typematerial',App\Http\Controllers\TypeMaterialController::class);
/*Route::get('/author',[AuthorController::class,'index']);// muestra todos los registros
Route::post('/author',[AuthorController::class,'store']);//crea un registro
Route::put('/author/{id}',[AuthorController::class,'update']);//actualiza un registro
Route::delete('/author/{id}',[AuthorController::class,'destroy']);//elimina un registro*/
