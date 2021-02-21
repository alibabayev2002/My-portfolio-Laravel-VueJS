<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Auth;


class PostController extends Controller
{
    public function index(){
        $data = ['posts'=>Post::with('category')->get(),'categories'=>Category::get()];
        return view('admin.posts',$data);
    }
    public function post(Request $request){

        $id = $request->id;
        if($id > 0){
            $post = Post::where('id',$id)->first();
        }else{
            $post = New Post();
        }
        $post->title=$request->title;
        $post->content=$request->content;
        $post->slug=Str::of($request->title)->slug('-');
        $post->status= $request->status == "on" ?  true : false;
        $post->category_id=$request->category_id;
        $post->user_id= Auth::user()->id;
        if ($request->hasFile('img')) {
            $imageName = Str::of($request->title)->slug('-').".".$request->img->getClientOriginalExtension();
            $request->img->move(public_path('uploads'),$imageName);
            $post->img=$imageName;
        }
        $post->save();
        return back();
    }

    public function deletePost(Request $request){
        Post::where('id',$request->id)->delete();
        return true;
    }
}
