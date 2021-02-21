<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Skill;

class SkillController extends Controller
{
    public function index(){
        $data = ['skills'=>Skill::get()];
        return view('admin.skills',$data);
    }
    public function addSkill(Request $request){
        Skill::insert(['name'=>$request->name,'level'=>$request->level]);
        return true;
    }
    public function deleteSkill(Request $request)
    {
        Skill::where('id',$request->id)->delete();
        return true;
    }
}
