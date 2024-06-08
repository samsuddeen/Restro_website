<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use File;

class CustomerController extends Controller
{
    public function index(){
        $allData = Customer::all();

        return view('backend/dashboard/customer/index',compact('allData'));


    }

    public function create(){

        return view('backend/dashboard/customer/create');


    }

    public function store(Request $request){

        $data = new Customer;
        $data->customer_name = $request->customer_name;
        $data->customer_title = $request->customer_title;
        $data->description = $request->description;
        $data->profile = $request->profile;
        if($request->hasFile('profile')){
            $file = $request->file('profile');
            $file_extension = $file->getClientOriginalExtension();
            $random_no = Str::random(12);
            $file_name = $random_no.'.'.$file_extension;
            $destination_path = public_path().'/backend/customerimg';
            $request->file('profile')->move($destination_path, $file_name);
            $data->profile =$file_name;

        }
        $data->save();
        return redirect()->back();

    }

    public function edit($id){
        $editdata = Customer::find($id);
        return view('backend/dashboard/customer/edit',compact('editdata'));
    }

    public function update(Request $request,$id){
        $data = Customer::find($id);
        $data->customer_name = $request->customer_name;
        $data->customer_title = $request->customer_title;
        $data->description = $request->description;
        $data->profile = $request->profile;

        if($request->hasFile('profile')){
            $file = $request->file('profile');
            $file_extension = $file->getClientOriginalExtension();
            $random_no = Str::random(12);
            $file_name = $random_no.'.'.$file_extension;
            $destination_path = public_path().'/backend/customerimg';
            $request->file('profile')->move($destination_path, $file_name);
            if(File::exists('backend/customerimg/'.$data->profile)){
                File::delete('backend/customerimg/'.$data->profile);

            }
            $data->profile =$file_name;
        }
        $data->save();
        return redirect()->route('customer.index')->with('success','data update successfully');

    }

    public function destroy($id){
        $data = Customer::find($id);

            if(File::exists('backend/customerimg/'.$data->profile)){
                File::delete('backend/customerimg/'.$data->profile);

            }
            $data->delete();
            return redirect()->route('customer.index')->with('success','Data Deleted Successfully');


        }
    }





