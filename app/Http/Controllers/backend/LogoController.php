<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Logo;


class LogoController extends Controller
{
    public function view()
    {
         $allData = Logo::all();
        return view('backend.logo.view-logo', compact('allData'));
    }
  
    public function add(){
        return view('backend.logo.add-logo');
      }
  
      public function store(Request $request){
          $data = new Logo();
          $data->name = $request->name;
          $data->save();
          return redirect()->route('logo.view')->with('success','Data inserted successfully');  
        }
  
        public function edit($id){
          $editdata = Logo::find($id);
          return view('backend.logo.edit-logo',compact('editdata'));
        }
  
        public function update(Request $request,$id){
         $data = Logo::find($id);
         $data->name = $request->name;
         $data->save();
         return redirect()->route('logo.view')->with('success','Data updated successfully');
  
     }
  
  
     public function delete($id){
        $data = Logo::find($id);
        $data->delete(); 
        return redirect()->route('logo.view')->with('success','Data deleted successfully');
     }
}
