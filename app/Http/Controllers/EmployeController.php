<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employe;


class EmployeController extends Controller
{
//    add Employee

  function add_employe(Request $req){
  $data=new employe();
  $data->name=$req->input('name');
  $data->age=$req->input('age');
  $data->salary=$req->input('salary');
  $data->city=$req->input('city');
  
  if($req->hasFile('profile')){
    $file=$req->file('profile');
    $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('employe'), $filename);
  }
 $data->profile = $filename;

  $result=$data->save();
if($result){
    return redirect('view');
}
  }

  //view Employe Data 

  function view(){
    $data=employe::all();
    return view('view',['employes'=>$data]);
  }

  //show data in edit

  public function show(Request $req){
    $data=employe::find($req->id);
    return view('show',['employe'=>$data]);
  }

  //edit 

   function edit_employe(Request $req){
  $data=employe::find($req->id);
  $data->name=$req->input('name');
  $data->age=$req->input('age');
  $data->salary=$req->input('salary');
  $data->city=$req->input('city');
  
  if($req->hasFile('profile')){
    $file=$req->file('profile');
    $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('employe'), $filename);
         $data->profile = $filename;
  }


  $result=$data->save();
if($result){
    return redirect('view');
}
  }

  //delete

  function delete(Request $req){
    $data=employe::find($req->id);
    $result=$data->delete();
    if($result){
        return redirect('view');
    }

  }
}
