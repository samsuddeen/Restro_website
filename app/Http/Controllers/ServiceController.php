<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use File;

class ServiceController extends Controller
{
    public function index(){
        $allData = Service::all();

        return view('backend.dashboard.services.index',compact('allData'));


    }

    public function create(){

        return view('backend.dashboard.services.create');


    }

    public function store(Request $request){

        $data = new Service;
        $data->title = $request->title;
        $data->description = $request->description;
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $file_extension = $file->getClientOriginalExtension();
            $random_no = Str::random(12);
            $file_name = $random_no.'.'.$file_extension;
            $destination_path = public_path().'/backend/servicelogo';
            $request->file('logo')->move($destination_path, $file_name);
            $data->logo =$file_name;

        }
        $data->save();
        return redirect()->back();

    }

    public function edit($id){
        $editdata = Service::find($id);
        return view('backend.dashboard.services.edit',compact('editdata'));
    }

    public function update(Request $request,$id){
        $data = Service::find($id);
        $data->title = $request->title;
        $data->description = $request->description;

        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $file_extension = $file->getClientOriginalExtension();
            $random_no = Str::random(12);
            $file_name = $random_no.'.'.$file_extension;
            $destination_path = public_path().'/backend/servicelogo';
            $request->file('logo')->move($destination_path, $file_name);
            if(File::exists('backend/servicelogo/'.$data->logo)){
                File::delete('backend/servicelogo/'.$data->logo);

            }
            $data->logo =$file_name;
        }
        $data->save();
        return redirect()->route('service.index')->with('success','data update successfully');

    }

    public function destroy($id){
        $data = Service::find($id);

            if(File::exists('backend/servicelogo/'.$data->logo)){
                File::delete('backend/servicelogo/'.$data->logo);

            }
            $data->delete();
            return redirect()->route('service.index')->with('success','Data Deleted Successfully');


        }
    }



