<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class admin extends Controller
{   
    public function login(){
        if (session()->exists(['name'],['pass'])) {
            return redirect('/list_admin');
        }else{
            return view('admin.login');
        }

    }
    public function check(Request $request){
        $name= $request->name;
        $pass=$request->pass;
        $data=DB::table('admin')->where(['name'=>$name],['pass'=>$pass])->first();
        if($data){
            if ($data->name==$name && $data->pass==$pass) {
                $request->session()->put(['name'=>$name],['pass'=>$pass]);
                return redirect('/list_admin');
            } else {
                return view('admin.login');
            }
            
        }else{
            return view('admin.login');
        }
        
    }
    public function logout(){
        session()->forget(['name', 'status']);
        return view('admin.login');

    }
    public function list_admin(){
        if (session()->exists(['name'],['pass'])) {
            $data=DB::table('food')->get();
            return view('admin.list',['data'=>$data]);
        }else{
            return view('admin.login');
        }
        
    }
    public function view_admin(Request $request){
        $id=$request->id;
        if (session()->exists(['name'],['pass'])) {
            $data=DB::table('food')->where('id',$id)->first();
            return view('admin.view',['data'=>$data]);
           
        }else{
            return view('admin.login');
        }
        
    }
    public function add_admin(){
        if (session()->exists(['name'],['pass'])) {
            return view('admin.add');
           
        }else{
            return view('admin.login');
        }
    }
    public function create_admin(Request $request){
        $name=$request->name;
        $price=$request->price;
        $weight=$request->weight;
        $image=$request->image;
        if (session()->exists(['name'],['pass'])) {
            DB::table('food')->insert([
                'name'=> $name,
                'price'=>$price,
                'weight'=>$weight,
                'image'=>$image
            ]);
            return redirect('/list_admin');
           
        }else{
            return view('admin.login');
        }

    }
    public function edit_admin(Request $request){
        $id=$request->id;
        if (session()->exists(['name'],['pass'])) {
            $data=DB::table('food')->where('id',$id)->first();
            return view('admin.edit',['data'=>$data]);
           
        }else{
            return view('admin.login');
        }
    }
    public function update_admin(Request $request){
        $id=$request->id;
        $name=$request->name;
        $price=$request->price;
        $weight=$request->weight;
        $image=$request->image;
        DB::table('food')->where('id',$id)->update([
                'name'=> $name,
                'price'=>$price,
                'weight'=>$weight,
                'image'=>$image
        ]);
        return redirect('/list_admin');
    

    }
    public function delete_admin(Request $request){
        
            $id=$request->id;
            DB::table('food')->where('id',$id)->delete();
            return redirect('/list_admin');
        
    }
   
}
