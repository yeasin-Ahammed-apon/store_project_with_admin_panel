<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class fornt extends Controller
{
    public function list(){
        $data=DB::table('food')->get();
        return view('fornt.list',['data'=>$data]);
    }
    public function view($id){
        $data=DB::table('food')->where('id',$id)->first();

        return view('fornt.view',['data'=>$data]);
    }
    public function contact(){
        return view('fornt.contact');
    }
    public function massage(Request $request){
        $email=$request->email;
        $massage=$request->massage;
        DB::table('massage')->insert([
            'email' => $email,
            'massage' => $massage
            ]);
            session()->put('key', 'send sucessfully');
            return view('fornt.contact');
    }

    public function cart(){
        return view('fornt.cart');
    }
    
}
