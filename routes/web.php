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

Route::get('/', function () {
    return view('upload');
    // $files = Storage::disk("google")->allfiles();
    // dump($files);
    // $firstFileName = $files[4];
    // $array = array($firstFileName);
    // dump("FILE NAME: " . $firstFileName);
    // dump($array);
    // $details = Storage::disk('google')->getMetadata($firstFileName);
    // dump($details);
    // $url = Storage::disk('google')->url($firstFileName);
    // dump("Download URL (Session based): ");
    // dump($url);
});
Route::post('/upload', function (Request $request) {
    // $data = $request ->file("thing")->store("","google");
    // $details = Storage::disk('google')->getMetadata($data);
    // $value = array_values($details);
    // $getvalue = $value[2];
    // $url = Storage::disk('google')->url($getvalue);
    // dump($url);
});

Route::get('/data','dataController@index')->name('index');
Route::get('/tambahData','dataController@create')->name('tambah');
Route::get('/testing', 'uploadController@index')->name('testing');
Route::post('/uploadfile','uploadController@create')->name('uploadfile');
