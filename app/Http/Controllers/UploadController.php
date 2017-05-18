<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\ProductsPhoto;
use Illuminate\Support\Facades\DB;
class UploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        return view('uploadPhotos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadRequest $request)
    {
        $albumName = $_POST['albumName'];
        $Username = $_POST['username'];
        $id = DB::table('users')->select('id')->where('name',$Username)->get();
        foreach ($request->photos as $photo) {
            $filename = $photo->store("/photos/$Username/$albumName");
            ProductsPhoto::create([
              'photo_path'=>'/storage/'.$filename,
              'album_name'=>$albumName,
              'grid'=>'2',
              'uid'=>json_decode($id,true)[0]['id']

            ]);
        }
        return 'Upload Successful!';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      foreach ($variable as $key => $value) {
        # code...
      }
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
