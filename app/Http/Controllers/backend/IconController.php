<?php

namespace App\Http\Controllers\backend;

use Auth;
use App\Models\Icon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IconController extends Controller

    {
        public function view()
        {
            $allData = Icon::all();
            return view('backend.icon.view-icon', compact('allData'));
        }
      
        public function add()
        {
            return view('backend.icon.add-icon');
        }
      
    public function store(Request $request){
            $data = new Icon();
            $data->icon = $request->icon;
            $data->name = $request->name;
            $data->number = $request->number;
            $data->save();
            return redirect()->route('icon.view')->with('success','Data inserted successfully');
        }
      
    public function edit($id){
            $editdata = Icon::find($id);
            return view('backend.icon.edit-icon',compact('editdata'));
           }
      
     public function update(Request $request, $id){
          $data = About::find($id);
          $data->short_title = $request->short_title;
          $data->long_title = $request->long_title;
          $data->description = $request->description;
          $data->updated_by = Auth::user()->id;
      if($request->file('image')) {
          $file = $request->file('image');
          @unlink(public_path('upload/about_images/'.$data->image));
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('upload/about_images'), $filename);
          $data['image']= $filename;
       }
       $data->icon = $request->icon;
     $data->save();
     return redirect()->route('about.view')->with('success','Data updated successfully');
    
         }
      
      
        public function delete($id)
        {
            $slider = Slider::find($id);
          if (file_exists('upload/slider_images/' . $slider->image) AND ! empty($slider->image)) {
              unlink('upload/slider_images/' . $slider->image);
           } 
           $slider->delete(); 
            return redirect()->route('slider.view')->with('success','Data deleted successfully');
         }
        }