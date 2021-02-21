<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Skill;
use App\Models\Config;
use App\Models\Message;

use Illuminate\Http\Request;


class MainController extends Controller
{
    private $data;

    public function __construct()
    {
        $this->data['pages']=Page::get();
    }

    public function index(){
        return view('front.home',$this->data);
    }
    public function about(){
        $this->data['configs'] = Config::first();
        return view('front.about',$this->data);
    }
    public function projects(){
        return view('front.projects',$this->data);
    }
    public function skills(){
        $this->data['skills'] = Skill::get();
        return view('front.skills',$this->data);
    }
    public function contact(){
        $this->data['configs'] = Config::first();
        return view('front.contact',$this->data);
    }
    public function sendMessage(Request $request){
        Message::insert(['email'=>$request->email,'message'=>$request->message]);
        return back();
        // $this->data['configs'] = Config::first();
        // return view('front.contact',$this->data);
    }
}
