<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Page;
use App\Models\Font;
use App\Models\Category;
use App\Models\Post;
use App\Models\Message;

class AdminController extends Controller
{
    public function showLogin(){
        return view('admin.login');
    }
    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect()->route('admin.home');
        }
        return redirect()->route('login',['test'=>'salam']);
    }
    public function dashboard(){
        $data = ['posts'=>count(Post::get()),'categories'=>count(Category::get())];
        return view('admin.dashboard',$data);
    }
    public function messages(){
        $data = ['messages'=>Message::get()];
        return view('admin.messages',$data);
    }
    public function logout(){
        Auth::logout();
        return back();
    }
}
