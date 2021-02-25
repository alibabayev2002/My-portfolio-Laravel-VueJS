<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Post;


class CategoriesController extends Controller
{
    public function index(){
        // dd(Category::get()[0->count());
        $data = ['categories'=>Category::get()];
        return view('admin.categories',$data);
    }
    public function deleteCategory(Request $request){
        $id = $request->id;
        $posts = Post::where('category_id',$id)->update(['category_id'=>1]);
        Category::where('id',$id)->delete();
        return true;
        // return $request->id;
        // return $posts[1]->title;
        // foreach ($posts as $key => $post) {
        //     DB::table('posts')->insert
        // }
    }
    public function addCategory(Request $request){
        $category = New Category();
        $category->name=$request->name;
        $category->slug= Str::of($request->name)->slug('-');
        $category->save();
        $data = ['id'=>$category->id];
        return $data;
        // DB::table('categories')->insert(['name'=>$request->name,'slug'=>Str::of($request->name)->slug('-')]);
    }
    public function editCategory(Request $request){
        $category = Category::where('id',$request->id)->first();
        $category->name=$request->name;
        $category->save();
        // DB::table('categories')->where('id',$request->id)->update(['name'=>$request->name]);
        return true;
    }
}
