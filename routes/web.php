<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
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
    // dump("FILE NAME: ||" . $firstFileName ."||". $url);
    // $files = Storage::disk("google")->allfiles();
    // dump($files);
    // $firstFileName = $files[3];
    // dump($firstFileName);
    // $url = Storage::disk("google")->url($firstFileName);
    // dump($url);
});
Route::post('/upload', function (Request $request) {
    // dd($request->all());
    $data = $request ->file("thing")->store("","google");
    $details = Storage::disk('google')->getMetadata($data);
    
    dump($details);
    $array = array($details);
    $firstFileName = $array[0];
    dump($array);
    dump($firstFileName);
    $url = Storage::disk('google')->url($firstFileName);
    dump($url);

    // dd($request->file("thing")->store("", "google"));
    // // dump($data);
    // $url = Storage::disk('google')->url($details);
    // dump($url);
    // $files = Storage::disk("google")->files();
    // dump($files);
    // $details = Storage::disk('google')->getMetadata($firstFileName);
    // dump($details)
    // $url = Storage::disk('google')->url($data);
    // dump(url);
    // $firstFileName = $files->$data;
    // dump($firstFileName);


});

Route::get('/data','dataController@index')->name('index');
Route::get('/tambahData','dataController@create')->name('tambah');
