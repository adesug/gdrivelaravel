<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DirectoryUpload;
use Illuminate\Support\Facades\Storage;


class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DirectoryUpload::all();
        return view('directory.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('directory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $post = DirectoryUpload::create([
            'name' => $request->name,
        ]);
        $name = $request->input('name');
        Storage::disk("google")->makeDirectory($name);


        if ($post) {
            return redirect()
                ->route('folder.index')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = DirectoryUpload::findOrFail($id);
        return view('directory.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:155',
        ]);

        $post = DirectoryUpload::findOrFail($id);
        $dirs = Storage::disk("google")->directories();
        $array = $dirs;
        $getDirectory = $array[count($array)-1];
        $post->update([
            'name' => $request->name,
            'directory_id' => $getDirectory
        ]);

        if ($post) {
            return redirect()
                ->route('folder.index')
                ->with([
                    'success' => 'Post has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = DirectoryUpload::findOrFail($id);
        $id->delete();
        return redirect()->route('folder.index')->with('success', 'Data has been deleted!');

    }
}
