<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\about;

class AboutController extends Controller
{
    public function view()
    {
        $allData = About::all();
        return view('backend.about.view-about', compact('allData'));
    }
  
    public function add()
    {
        return view('backend.about.add-about');
    }
  
    public function store(Request $request)
    {
        $data = new about();
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->description = $request->description;
        $data->description = $request->description;
        $data->created_by = Auth::user()->id;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/about_images'), $filename);
            $data['image']= $filename;
        }
        $data->icon = $request->icon;
        $data->save();
        return redirect()->route('about.view')->with('success', 'Data inserted successfully');
    }
  
    public function edit($id)
    {
        $editdata = About::find($id);
        return view('backend.about.edit-about', compact('editdata'));
    }
  
    public function update(Request $request, $id)
    {
        $data = About::find($id);
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->description = $request->description;
        $data->updated_by = Auth::user()->id;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/about_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/about_images'), $filename);
            $data['image']= $filename;
        }
        $data->icon = $request->icon;
        $data->save();
        return redirect()->route('about.view')->with('success', 'Data updated successfully');
    }
  
  
    public function delete($id)
    {
        $slider = Slider::find($id);
        if (file_exists('upload/slider_images/' . $slider->image) and ! empty($slider->image)) {
            unlink('upload/slider_images/' . $slider->image);
        }
        $slider->delete();
        return redirect()->route('slider.view')->with('success', 'Data deleted successfully');
    }
}
