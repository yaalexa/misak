<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\EducationalLevelController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\TypeMaterialController;
use App\Http\Controllers\RolsController;


Route::post('register', [UserController::class, 'register']);
// verificar logeo verificar existencia de los usuarios
Route::post('login', [UserController::class, 'login']);

Route::group( ['middleware' => ["auth:sanctum"]], function(){
    //rutas
    Route::get('userprofile', [UserController::class, 'userProfile']);
    Route::get('logout', [UserController::class, 'logout']);
});

//de esta forma nos genera todas las rutas
Route::resource('blog',App\Http\Controllers\BlogController::class)->middleware('login');
Route::resource('author',App\Http\Controllers\AuthorController::class)->middleware('login');
Route::resource('areas',App\Http\Controllers\AreasController::class)->middleware('login');
Route::resource('editorial',App\Http\Controllers\EditorialController::class)->middleware('login');
Route::resource('educational_level',App\Http\Controllers\EducationalLevelController::class)->middleware('login');
Route::resource('material',App\Http\Controllers\MaterialController::class)->middleware('login');
Route::resource('type_material',App\Http\Controllers\TypeMaterialController::class)->middleware('login');
Route::resource('user',App\Http\Controllers\UserController::class)->middleware('login');
Route::resource('rols',App\Http\Controllers\RolsController::class)->middleware('login');



//crud de material
Route::get('/material',[App\Http\Controllers\MaterialController::class,'index']);
Route::put('/material/{id}',[App\Http\Controllers\MaterialController::class,'update']);
Route::delete('/material/{id}',[App\Http\Controllers\MaterialController::class,'delete']);
Route::post('/material',[App\Http\Controllers\MaterialController::class,'store']);

//Route::resource('typematerial',App\Http\Controllers\TypeMaterialController::class);
//Crud de author
Route::get('/author',[AuthorController::class,'index']);// muestra todos los registros
Route::post('/author',[AuthorController::class,'store']);//crea un registro
Route::put('/author/{id}',[AuthorController::class,'update']);//actualiza un registro
Route::delete('/author/{id}',[AuthorController::class,'destroy']);//elimina un registro

//crud de usarios
Route::get('/user',[App\Http\Controllers\UserController::class,'index']);
Route::put('/user/{id}',[App\Http\Controllers\UserController::class,'update']);
Route::delete('/user/{id}',[App\Http\Controllers\UserController::class,'delete']);
Route::post('/user',[App\Http\Controllers\UserController::class,'store']);

//Crud de educational level
Route::get('/educational_level',[App\Http\Controllers\EducationalLevelController::class,'index']);
Route::put('/educational_level/{id}',[App\Http\Controllers\EducationalLevelController::class,'update']);
Route::delete('/educational_level/{id}',[App\Http\Controllers\EducationalLevelController::class,'delete']);
Route::post('/educational_level',[App\Http\Controllers\EducationalLevelController::class,'store']);

//Crud de areas
Route::get('/areas',[App\Http\Controllers\AreasController::class,'index']);
Route::put('/areas/{id}',[App\Http\Controllers\AreasController::class,'update']);
Route::delete('/areas/{id}',[App\Http\Controllers\AreasController::class,'delete']);
Route::post('/areas',[App\Http\Controllers\AreasController::class,'store']);

//Crud de editorial
Route::get('/editorial',[App\Http\Controllers\EditorialController::class,'index']);
Route::put('/editorial/{id}',[App\Http\Controllers\EditorialController::class,'update']);
Route::delete('/editorial/{id}',[App\Http\Controllers\EditorialController::class,'delete']);
Route::post('/editorial',[App\Http\Controllers\EditorialController::class,'store']);

//Crud Type material
Route::get('/type_material',[App\Http\Controllers\TypeMaterialController::class,'index']);
Route::put('/type_material/{id}',[App\Http\Controllers\TypeMaterialController::class,'update']);
Route::delete('/type_material/{id}',[App\Http\Controllers\TypeMaterialController::class,'delete']);
Route::post('/type_material',[App\Http\Controllers\TypeMaterialController::class,'store']);

//Crud de rol
Route::get('/rols',[App\Http\Controllers\RolsController::class,'index']);
Route::put('/rols/{id}',[App\Http\Controllers\RolsController::class,'update']);
Route::delete('/rols/{id}',[App\Http\Controllers\RolsController::class,'delete']);
Route::post('/rols',[App\Http\Controllers\RolsController::class,'store']);


