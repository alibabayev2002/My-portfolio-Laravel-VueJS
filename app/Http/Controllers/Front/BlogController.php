<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;


class BlogController extends Controller
{
    public function index(){
        $posts = DB::table('posts')->get();
        return view('blog.index',['posts'=>$posts]);
    }
    public function post($slug){
        // return $slug;
        $post = Post::where('slug',$slug)->first();
        // return $post->title;
        $data= ['post'=>$post];
        return view('blog.post',$data);
        // $posts = DB::table('posts')->get();
        // return view('blog.index',['posts'=>$posts]);
    }
}
