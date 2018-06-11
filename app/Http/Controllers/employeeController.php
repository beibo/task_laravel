<?php

namespace App\Http\Controllers;
use DB;
use Storage;
use App\Employee;
use Illuminate\Http\Request;
use Mapper;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */



    public function index()
    {
        //
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    //   $validatedData = $request->validate([
    //     'frist_name' => 'required|unique',
    //     'last_name' => 'required',
    //     'image'=>'required',
    // ]);
    if($request->hasfile("image")){
    $path=$request->image->store('public');

    }

    $emp=new Employee;
       $emp->frist_name=$request->input('frist_name');
       $emp->last_name=$request->input("last_name");
       $emp->image=$path;
       $emp->user_id=$request->input("user_id");
       $emp->status=$request->input('status');
       $emp->job=$request->input('job');
       $lat=$request->input('lat');
       $lng=$request->input('lng');
          $emp->location= \DB::raw("GeomFromText('POINT($lng $lat)')");
      $emp->save();

      $emp=DB::table('employees')->get();
       return view('admin.index',compact('emp'));



        //
    }
    public function addLocation(){

    //  Mapper::map(53.381128999999990000, -1.470085000000040000, ['eventAfterLoad' => 'console.log("after load");']);


      return view("map");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if($request->hasfile("image")){
        $path=$request->image->store('public');

        }

        DB::table('employees')->where('id', $id)->update(['frist_name' =>$request->input('frist_name'),'last_name' =>$request->input('last_name'),'image' =>$path,
        'job' =>$request->input('job'),"status"=>$request->input('status')]);



       $emp=DB::table('employees')->get();
        return view('admin.index',compact('emp'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
