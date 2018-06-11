<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Employee;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $emp=DB::select('select * from employees');

        return view('admin.index',compact('emp'));
    }

public function delete($id){
  $emp= Employee::find($id);
        $emp->delete();
        return back();


}
public function edit($id){
  $emp= Employee::find($id);
  $uid=DB::select('select * from users' );
  $data=[$emp,$uid];


  return view('admin.edit',compact('data'));
}
    public function addEmployee(){
        $uid=DB::select('select * from users' );

      return view('admin.addEmployee',compact('uid'));
    }
}
