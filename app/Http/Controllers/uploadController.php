<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
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
        return redirect('testing');
    }
}
