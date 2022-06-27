<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function view()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        // dd(Auth::user());
        return view('backend.user.view-profile', compact('user'));
    }
    public function edit()
    {
        $id = Auth::user()->id;
        $editdata = User::find($id);
        return view('backend.user.edit-profile', compact('editdata'));
    }
    public function update(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->gender = $request->gender;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/user_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->route('profiles.view')->with('success', 'profile updated successfully');
    }
    public function passwordView()
    {
        return view('backend.user.edit-password');
    }
    public function passwordUpdate(Request $request)
    {
        //   dd(Auth::user()->id);
        if (Auth::attempt(['id'=>Auth::user()->id,'password'=> $request->current_password])) {
            $user = User::find(Auth::user()->id);
            $user->password = bcrypt($request->new_password);
            $user->save();
            return redirect()->route('profiles.view')->with('success', 'password changed successfully');
        } else {
            return redirect()->back()->with('error', 'sorry! your current password does not match');
        }
    }
}