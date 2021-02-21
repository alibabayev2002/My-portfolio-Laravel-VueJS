<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Config;

class ConfigController extends Controller
{
    public function index(){
        $data = ['configs'=>Config::first()];
        return view('admin.configs',$data);
    }
    public function save(Request $request){
        $configs = Config::get();
        if(count($configs)>0){
            Config::where('id','>','0')->update(['full_name'=>$request->full_name,'address'=>$request->address,'github'=>$request->github,'whatsapp'=>$request->whatsapp,'instagram'=>$request->instagram,'email'=>$request->email,'about'=>$request->about]);
        }else{
            Config::insert(['full_name'=>$request->full_name,'address'=>$request->address,'github'=>$request->github,'whatsapp'=>$request->whatsapp,'instagram'=>$request->instagram,'email'=>$request->email,'about'=>$request->about]);

        }
        return back();
    }
}
