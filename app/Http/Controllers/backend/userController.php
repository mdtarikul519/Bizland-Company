<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    public function view(){
    $data['allData'] = User::all();
    return view('backend.user.view-user',$data);
    }

    public function add(){
      return view('backend.user.add-user');
    }

    public function store(Request $request){
        $data = new User();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password =bcrypt($request->password);
        $data->save();
        return redirect()->route('user.view')->with('success','Data inserted successfully');  
      }

      public function edit($id){
        $editdata = User::find($id);
        return view('backend.user.edit-user',compact('editdata'));
      }

      public function update(Request $request,$id){
        $data = User::find($id);
       $data->usertype = $request->usertype;
       $data->name = $request->name;
       $data->email = $request->email;
       $data->save();
       return redirect()->route('user.view')->with('success','Data updated successfully');

   }


   public function delete($id){
    $user = User::find($id);
    if (file_exists('public/upload/user_images/' . $user->image) AND ! empty($user->image)) {
        unlink('public/upload/user_images/' . $user->image);
     } 
     $user->delete(); 
      return redirect()->route('user.view')->with('success','Data deleted successfully');
   }
}
