<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    public function index(){
        $posts = DB::table('posts')->get();
        return view('blog.index',['posts'=>$posts]);
    }
}
