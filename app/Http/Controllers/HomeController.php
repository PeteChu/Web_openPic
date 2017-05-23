<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function album()
    {
      return view('album');
    }


    public function welcome(){
      $id = DB::table('users')->select('id')->where('name','quickplay')->get();
      $id = json_decode($id,true);
      $id = $id[0]['id'];
      $album = DB::table('products_photos')->select('album_name')->distinct('album_name')->where('uid',$id)->get();
      $album = json_decode($album,true);
      $path_photo = array();
      for($i = 0;$i<count($album);$i++){
       $path = DB::table('products_photos')->select('photo_path')->where('album_name',$album[$i]['album_name'])->get();
       $path = json_decode($path,true);
         $path_photo[0][$i] = $album[$i]['album_name'];
        for($k = 0;$k<count($path);$k++)
          $path_photo[$album[$i]['album_name']][$k] = "/".$path[$k]['photo_path'];

      }
      return view('welcome',compact('path_photo'));
    }

    public function play($name,$no){
      $id = Auth::user();
      $id = $id->id;
      $path = DB::table('products_photos')->select('photo_path','grid')->where('album_name',$name)->where('uid',$id)->get();
      if(count($path)==0){
        $id = DB::table('users')->select('id')->where('name','quickplay')->get();
        $id = json_decode($id,true);
        $id = $id[0]['id'];
        $path = DB::table('products_photos')->select('photo_path','grid')->where('album_name',$name)->where('uid',$id)->get();
      }
      $path = json_decode($path,true);
      $len = count($path);
      for ($i = 0;$i<$len;$i++ ) {
        $path[$i]['photo_path'] = '/'.$path[$i]['photo_path'];
      }
      $path[$len] = $name;

      return view('play',compact('path'),compact('no'));
    }
}
