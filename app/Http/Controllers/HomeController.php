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

    public function play($name,$no){
      $id = Auth::user();
      $id = $id->id;
      $path = DB::table('products_photos')->select('photo_path','grid')->where('album_name',$name)->where('uid',$id)->get();
      $path = json_decode($path,true);
      $len = count($path);
      for ($i = 0;$i<$len;$i++ ) {
        $path[$i]['photo_path'] = '/'.$path[$i]['photo_path'];
      }
      $path[$len] = $name;

      return view('play',compact('path'),compact('no'));
    }
}
