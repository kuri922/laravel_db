<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;
use Input;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }


    public function result(Request $request){
        $name = $request->input('name');
        $address = $request->input('address');
        $age = $request->input('age');
            return view('hello.result',compact('name', 'age','address'));
      
     }
    public function store(Request $request){
        
         $post = new Post();
         $post=$request->input('name');
         $post=$request->input('address');
         $post=$request->input('age');
         $post->save();
         return redirect()->action('postController@result');     

    }
}