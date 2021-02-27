<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Page;


class BlogController extends Controller
{
    public function index(){
        $pages=Page::get();
        $first_post = Post::orderBy('id','asc')->first();
        $posts = Post::orderBy('id','desc')->paginate(3);
        return view('blog.index',['posts'=>$posts,'first_post'=>$first_post,'pages'=>$pages]);
    }
    public function post($slug){
        $pages=Page::get();
        $post = Post::where('slug',$slug)->first();
        $post->views = $post->views + 1;
        $data= ['post'=>$post,'pages'=>$pages];
        $post->save();
        return view('blog.post',$data);
    }
    public function getPosts(){
        $posts = Post::paginate(3);
        if (request()->ajax()) {
            return view('front.posts',['posts' => $posts])->render();
        }
        return View('front.posts', ['posts' => $posts]);
    }
}
