<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use DB;
class searchController extends Controller
{
    //
//     public function executeSearch(){
//       $keywords=Input::get(keywords);
//       $users=User::all();
//       $searchuser=new \Illuminate\Database\Eloquent\Collection();
//       foreach($users as $u){
//
//         if(Str::contains(Str::lower($u->user_name),str::lower($keywords))){
//           $searchuser->add($u);
//         }//if
//         return view::make("searchedUser")->with("searchUser",$searchuser);
//       }//for
//     }//fun
//
//     public function getSearchResults(Request $request) {
//       $data = $request->get('data');
//
//   $employee = Employee::where('first_name', 'like', "%{$data}%"))
//                    ->orWhere('last_name', 'like', "%{$data}%"))
//                    ->get();
//
//   return Response::json([
//       'data' => $employee
//   ]);
// }
public function searchContent(){

  $searchKey=\Request::get('title');
  $employees=   DB::table('employees')->where('frist_name', 'like', "%".$searchKey."%")->orWhere('last_name', 'like', "%".$searchKey."%")->get();

              return view('searchContent',compact('employees'));




}
}
