<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use App\DirectoryUpload;
use Illuminate\Support\Facades\Storage;


class uploadController extends Controller
{
    public function index(){
        $showdata = Upload::all();
        return view('upload',compact('showdata'));
    }
    public function create(Request $request){
        $data = $request ->file("thing")->store("","google");
        $details = Storage::disk('google')->getMetadata($data);
        $value = array_values($details);
        $getvalue = $value[2];
        $url = Storage::disk('google')->url($getvalue);
        Upload::create([
            'name'=> $request->name,
            'link'=>$url,
        ]);
        return redirect('/');
    }

    public function directory(Request $request){
        $showdata = DirectoryUpload::all();

        return view('createdirectory',compact('showdata'));
    }

    public function adddirectory(Request $request){
        $data = $request->input('name');
        dd($data);
    }

    public function createDirectory(Request $request){
        $name = $request->input('name');
        $data =Storage::disk("google")->makeDirectory($name);
        $dirs = Storage::disk("google")->directories();
        $array = $dirs;
        $getDirectory = $array[count($array)-1];
        DirectoryUpload::create([
            'name' => $request->name,
            'directory_id' =>$getDirectory
        ]);
        return redirect('/directory');
    }
    public function showAllDirectory(){
        $dirs = Storage::disk("google")->directories();
        dd($dirs);
    }
    public function uploadByDirectory(Request $request){

        $showdata = DirectoryUpload::all();

        // $data = $request->input("name");
        // $dta1 = $request->input("directory");
        

        return view('uploadbydirectory',compact('showdata'));
    }
    public function uploadfilebyDirectory(Request $request){
        $directory = $request->input("directory");
        $data = $request ->file("thing")->store($directory,"google");
        // $data = $request ->file("thing")->store("1sJwRJmnPVgC2flYFG4XdOnuwAnyUYwJJ","google");
        $details = Storage::disk('google')->getMetadata($data);
        // dd($details);
        // dd($directory);
        return redirect('/upload');
    }

    public function active($id){
        $id= DirectoryUpload::findOrFail($id);
        $id->delete();

        // $data->update([
        //     'directory_id' => "jjjj"
        // ]);
        return redirect('/directory');
    }
}
