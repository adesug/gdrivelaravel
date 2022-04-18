<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\UploadFileOneMore;

class uploadFileOneMoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showdata = uploadFileOneMore::all();
        return view('uploadFileOneMore',compact('showdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ini_set('max_execution_time', 300);

        $data = $request->file("thing_1")->store("", "google");
        $details = Storage::disk('google')->getMetadata($data);
        $value = array_values($details);
        $getvalue = $value[2];
        $url1 = Storage::disk('google')->url($getvalue);

        $data = $request->file("thing_2")->store("", "google");
        $details = Storage::disk('google')->getMetadata($data);
        $value = array_values($details);
        $getvalue = $value[2];
        $url2 = Storage::disk('google')->url($getvalue);

        $data = $request->file("thing_3")->store("", "google");
        $details = Storage::disk('google')->getMetadata($data);
        $value = array_values($details);
        $getvalue = $value[2];
        $url3 = Storage::disk('google')->url($getvalue);

        $data = $request->file("thing_4")->store("", "google");
        $details = Storage::disk('google')->getMetadata($data);
        $value = array_values($details);
        $getvalue = $value[2];
        $url4 = Storage::disk('google')->url($getvalue);

        $data = $request->file("thing_5")->store("", "google");
        $details = Storage::disk('google')->getMetadata($data);
        $value = array_values($details);
        $getvalue = $value[2];
        $url5 = Storage::disk('google')->url($getvalue);

        $data = $request->file("thing_6")->store("", "google");
        $details = Storage::disk('google')->getMetadata($data);
        $value = array_values($details);
        $getvalue = $value[2];
        $url6 = Storage::disk('google')->url($getvalue);

        $data = $request->file("thing_7")->store("", "google");
        $details = Storage::disk('google')->getMetadata($data);
        $value = array_values($details);
        $getvalue = $value[2];
        $url7 = Storage::disk('google')->url($getvalue);

        $data = $request->file("thing_8")->store("", "google");
        $details = Storage::disk('google')->getMetadata($data);
        $value = array_values($details);
        $getvalue = $value[2];
        $url8 = Storage::disk('google')->url($getvalue);

        $data = $request->file("thing_9")->store("", "google");
        $details = Storage::disk('google')->getMetadata($data);
        $value = array_values($details);
        $getvalue = $value[2];
        $url9 = Storage::disk('google')->url($getvalue);

        $data = $request->file("thing_10")->store("", "google");
        $details = Storage::disk('google')->getMetadata($data);
        $value = array_values($details);
        $getvalue = $value[2];
        $url10 = Storage::disk('google')->url($getvalue);
        uploadFileOneMore::create([
            'name_1' => $request->name_1,
            'name_2' => $request->name_2,
            'name_3' => $request->name_3,
            'name_4' => $request->name_4,
            'name_5' => $request->name_5,
            'name_6' => $request->name_6,
            'name_7' => $request->name_7,
            'name_8' => $request->name_8,
            'name_9' => $request->name_9,
            'name_10' => $request->name_10,
            'link_1' => $url1,
            'link_2' => $url2,
            'link_3' => $url3,
            'link_4' => $url4,
            'link_5' => $url5,
            'link_6' => $url6,
            'link_7' => $url7,
            'link_8' => $url8,
            'link_9' => $url9,
            'link_10' => $url10,

        ]);
        return redirect()->route('tes');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
