<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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

Route::get('/', 'uploadController@index')->name('testing');
Route::get('/testing', 'uploadController@index')->name('testing');
Route::post('/uploadfile','uploadController@create')->name('uploadfile');

Route::get('/array', function () {
    $files = Storage::disk("google")->allfiles();
    // dump($files);
    $firstFileName = $files[4];
    $array = array($firstFileName);
    // dump("FILE NAME: " . $firstFileName);
    // dump($array);
    dump("MISAL KIE DETAIL DATA");
    $details = Storage::disk('google')->getMetadata($firstFileName);
    dump($details);
    dump("Kan neng detail kue tipene array sedangkan dewek pan njukut value path");
    dump("method Array Value kue nggo ngerubah aray details ndue value");
    dump("hasile");
    $value = array_values($details);
    dump($value);
    dump("kan west ndue value masing masing tinggal jukut bae value");
    dump("nah gari jukut bae value ne misal jukut value sing no2");
    $getvalue = $value[2];
    dump($getvalue);
});

Route::get('/directory', 'uploadController@directory')->name('directory');
Route::get('/show', 'uploadController@showAllDirectory')->name('showdirectory');
Route::get('/make','uploadController@createDirectory')->name('createdirectory');

Route::get('/create','uploadController@adddirectory');

Route::get('/upload','uploadController@uploadByDirectory')->name('upload');

Route::post('/uploadbyfolder','uploadController@uploadfilebyDirectory')->name('uploadbyfolder');

Route::post('/active/{$id}','uploadController@active')->name('active');

Route::resource('/folder', 'DirectoryController');

Route::resource('/posts', 'PostController');
// Route::get('/posts/create','PostController@create');

//uploadFileOneMore

route::get('/UploadFileMore','uploadFileOneMoreController@index')->name('tes');
route::post('/UploadFileMore','uploadFileOneMoreController@store');
