<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Page;
use App\Models\Font;
use App\Models\Category;
use App\Models\Post;

class AdminController extends Controller
{
    public function showLogin(){
        return view('admin.login');
    }
    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            // return "oldu";
            return redirect()->route('admin.home');
            // return Auth::user()->username;
        }else{
            // return back();
            // return "olmade";
        }
        return "salam";
    }
    public function dashboard(){
        $data = ['posts'=>count(Post::get()),'categories'=>count(Category::get())];
        return view('admin.dashboard',$data);
    }
    public function logout(){
        Auth::logout();
        return back();
    }
}
