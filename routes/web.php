<?php

use App\Http\Controllers\ImagesController;
use App\Http\Controllers\KennelController;
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
// ну вот мы и выгрузились

Route::get('/', [ImagesController::class, 'index']);

Route::get('/office', [ImagesController::class, 'office']);
Route::get('/kennel', [KennelController::class, 'index']);

Route::get('/create', [ImagesController::class, 'create']);


Route::post('/store', [ImagesController::class, 'store']);

Route::get('/show/{id}', [ImagesController::class, 'show']);

Route::get('/edit/{id}', [ImagesController::class, 'edit']);

Route::post('/update/{id}',  [ImagesController::class, 'update']);

Route::get('/delete/{id}',  [ImagesController::class, 'delete']);







/*Route::get('/delete/{id}', function ($id){

     //достать прошлую картинку
     $imageOld = DB::table('image')
     ->select('*')
     ->where('id', $id)
     ->first();
 
     //удалить файл из public/uploads прошлую
     Storage::delete($imageOld->name);  //подключить use Illuminate\Support\Facades\Storage;

     //удаить из базы
     $deleted = DB::table('image')
     ->where('id',$id)
     ->delete();

     return redirect('/');  

});
*/