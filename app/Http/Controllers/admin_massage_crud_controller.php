<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class admin_massage_crud_controller extends Controller
{
    public function massage_list_admin(){
        if (session()->exists(['name'],['pass'])) {
            $data=DB::table('massage')->get();
        return view('admin_massage_check.list',['data'=>$data]);
        }else{
            return view('admin.login');
        }
        
    }
    public function massage_view_admin(Request $request){
        $id=$request->id;
        if (session()->exists(['name'],['pass'])) {
            $data=DB::table('massage')->where('id',$id)->first();
            return view('admin_massage_check.view',['data'=>$data]);
           
        }else{
            return view('admin.login');
        }

    }
    public function massage_delete_admin(Request $request){
        $id=$request->id;
        if (session()->exists(['name'],['pass'])) {
            DB::table('massage')->where('id',$id)->delete();
            return redirect('/massage_list_admin');
           
        }else{
            return view('admin.login');
        }

    }
}
