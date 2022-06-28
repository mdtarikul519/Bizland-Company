<?php

namespace App\Http\Controllers\backend;

use App\Models\Icon;
use App\Models\About;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
      
    public function store(Request $request)
    {
        $data = new Icon();
        $data->icon = $request->icon;
        $data->name = $request->name;
        $data->number = $request->number;
        $data->save();
        return redirect()->route('icon.view')->with('success', 'Data inserted successfully');
    }
      
    public function edit($id)
    {
        $editdata = Icon::find($id);
        return view('backend.icon.edit-icon', compact('editdata'));
    }
      
    public function update(Request $request, $id)
    {
        $data = Icon::find($id);
        $data->icon = $request->icon;
        $data->name = $request->name;
        $data->number = $request->number;
        $data->save();
        return redirect()->route('icon.view')->with('success', 'Data inserted successfully');
    }
   
      
    public function delete($id)
    {
        $icon = Icon::find($id);
        $icon->delete();
        return redirect()->route('icon.view')->with('success', 'Data deleted successfully');
    }
}