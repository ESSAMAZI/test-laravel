<?php

namespace App\Http\Controllers;

use App\Models\grades;
use App\Models\_school;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    // public function index(Request $request,$id){
    //     //return view('welcome');
    //     return $id;
    // }
    // public function heloo (){
    //  //return view('index');
    // // $x=15;
    // // $users=['essam','ali','walid','hassan'];
    // //     return view('databform',compact('x','users'));
    //     return view('databform');
    // }
    public function selectData (){
        
           //$students = DB::table('students')->orderBy('id','ASC')->limit(10)->get();
        $students =Students:: orderBy('id','ASC')->limit(10)->with('grade')->get();
           ///if($students->name == 'ali')
          return view('databform',compact('students'));
           //return $students;

           //getSchool
           //return _school::with('student')->get();
       }

    public function Insert_Data_ADD(Request $request){
       // $students = DB::table('students')->insert([
        $students = Students::insert([
            'name' => $request->student_name,
            'email' =>$request->student_email,
         
        ]);
        return redirect()->back();
    }
    public function delete_Data(Request $request,$id){
        $students = Students::where('id','=',$id)->delete();
          return redirect()->back();
    }
    public function update_page(Request $request,$id){
        //$students = DB::table('students')->where('id','=',$id)->first();
        $students =Students::where('id','=',$id)->first();
        return view('update',compact("students"));

    }
    public function update(Request $request,$id){
        $students =Students::where('id','=',$id)->update([
            'name'  => $request->name,
            'email' => $request->email
        ]);
        
     return redirect()->back();
    }
}
