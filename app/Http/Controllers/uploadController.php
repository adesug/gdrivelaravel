<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use App\DirectoryUpload;
use Illuminate\Support\Facades\Storage;


class uploadController extends Controller
{
    public function index()
    {
        $showdata = Upload::all();
        $directory = DirectoryUpload::all();

        $getDirectoryId = DirectoryUpload::where('status', '=', 'Aktif')->get();
        // dd($getDirectoryId[1]);
        // $d = $getDirectoryId[0]["directory_id"];
        // dd($d);
        // echo json_encode($d);

        return view('upload', compact('showdata', 'directory'));
    }
    public function create(Request $request)
    {
        // $getDirectoryId = DirectoryUpload::where('status','=','Aktif')->get()->keyBy('directory_id');
        $getDirectoryId = DirectoryUpload::where('status', '=', 'Aktif')->get();
        // dd($getDirectoryId[1]);
        $d = $getDirectoryId[0]["directory_id"];
        // dd($d);
        // $directory = $request->input("directory");
        // dd($directory);
        $data = $request->file("thing")->store($d, "google");

        $details = Storage::disk('google')->getMetadata($data);
        $value = array_values($details);
        $getvalue = $value[2];
        $url = Storage::disk('google')->url($getvalue);
        Upload::create([
            'name' => $request->name,
            'link' => $url,
        ]);
        return redirect('/');
    }

    public function directory(Request $request)
    {
        $showdata = DirectoryUpload::all();

        return view('createdirectory', compact('showdata'));
    }

    public function adddirectory(Request $request)
    {
        $data = $request->input('name');
        dd($data);
    }

    public function createDirectory(Request $request)
    {
        $name = $request->input('name');
        $dir_before = Storage::disk("google")->directories();
        $data = Storage::disk("google")->makeDirectory($name);
        $dir = Storage::disk("google")->directories();
        $data_dir_before = collect($dir_before);
        $data_dir = collect($dir);

        $getDirectory = $data_dir->diff($data_dir_before)->first();

        $directory = DirectoryUpload::create([
            'name' => $request->name,
            'directory_id' => empty($getDirectory) ? null : $getDirectory
        ]);
        dd($directory);
        return redirect('/directory');
    }
    public function showAllDirectory()
    {
        $dirs = Storage::disk("google")->directories();
        dd($dirs);
    }
    public function uploadByDirectory(Request $request)
    {

        $showdata = DirectoryUpload::all();

        // $data = $request->input("name");
        // $dta1 = $request->input("directory");


        return view('uploadbydirectory', compact('showdata'));
    }
    public function uploadfilebyDirectory(Request $request)
    {
        $nim = random_int(100000, 999999);

        $directory = $request->input("directory");
        $file = $request->file('thing');
        $ext = $file->getClientOriginalExtension();
        $file_name = $nim . '.' . $ext;
        $data = $request->file('thing')->storeAs($directory, $file_name, 'google');
        $details = Storage::disk('google')->getMetadata($data);

        return redirect('/upload');
    }

    public function active($id)
    {
        $id = DirectoryUpload::findOrFail($id);
        $id->delete();

        // $data->update([
        //     'directory_id' => "jjjj"
        // ]);
        return redirect('/directory');
    }
}
