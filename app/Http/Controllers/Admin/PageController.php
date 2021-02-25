<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Font;

class PageController extends Controller
{
    public function index(){

        $data = ['pages'=>Page::get(),'fonts'=>Font::get()];
        return view('admin.pages',$data);
    }
    public function addPage(Request $request){
        $page = new Page();
        $page->name=$request->name;
        $page->route_name=$request->route;
        $page->icon = "null";
        $page->save();
        $id = $page->id;
        $data = ['id'=>$id,'route'=>$request->route];
        return $data;
    }
    public function editPage(Request $request){
        $page = Page::where('id',$request->id)->first();
        $page->status = !$page->status;
        $page->save();
        return true;
    }
    public function deletePage(Request $request){
        Font::where('page_id',$request->id)->delete();
        Page::where('id',$request->id)->delete();
        return true;
    }
    public function selectFont(Request $request){
        Page::where('id',$request->id)->update(['icon'=>$request->font]);
        return "seee";
    }
}
