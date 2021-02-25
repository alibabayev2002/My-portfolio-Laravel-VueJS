<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Font;
use App\Models\Page;


class FontController extends Controller
{
    public function index(){
        $data = ['fonts'=>Font::with('page')->get(),'pages'=>Page::with('fonts')->get()];

        return view('admin.fonts',$data);
    }
    public function addFont(Request $request){
        $font = new Font();
        $font->name=$request->name;
        $font->page_id=$request->id;
        $font->save();
        $data = ['id'=>$font->id,'page_id'=>$request->id,'page_name'=>Page::where('id',$request->id)->first()->name];
        return $data;
    }
    public function deleteFont(Request $request){
        Font::where('id',$request->id)->delete();
        return true;
    }
}
