<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    //

    public function index(){
       
        $user_id = \Auth::user()->id;
       $data = Post::where('user_id', $user_id)->get();

       //return response($data);
       return view('site.index')->with('posts',$data);
    }
    public function post(){
        return view('site.post');
    }
    public function addpost(Request $request){
        if ($request->isMethod('post')) {
            
            $path = Storage::put('public/photos', new File($request->imagefile));
            $file_name = 'photos/'.basename($path);
            
            $data = new Post;

            $data->user_id = \Auth::user()->id;
            $data->title = $request->title;
            $data->content = $request->content;
            $data->image = $file_name;
            $data->status = 1;
            $data->save();

        }

        return view('site.newstory');
    }
    public function author(){
        return view('site.author');
    }
}
