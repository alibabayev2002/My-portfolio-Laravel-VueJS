<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Skill;
use Illuminate\Http\Request;


class MainController extends Controller
{
    private $data;

    public function __construct()
    {
        $this->data['pages']=Page::get();
        // return with('pages',Page::get());
    }

    public function index(){
        return view('front.home',$this->data);
    }
    public function about(){
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
        return view('front.contact',$this->data);
    }
}
