<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use File;

class ItemController extends Controller
{

 public function index(){
        $allData = Item::all();

        return view('backend/dashboard/items/index',compact('allData'));


    }

    public function create(){

        return view('backend.dashboard.items.create');


    }

    public function store(Request $request){

        $data = new Item;
        $data->Item_name = $request->Item_name;
        $data->price = $request->price;
        $data->discount_price = $request->discount_price;
        $data->item_img = $request->item_img;
        $data->icon = $request->icon;
        $data->discount_percent = $request->discount_percent;


        if($request->hasFile('item_img')){
            $file = $request->file('item_img');
            $file_extension = $file->getClientOriginalExtension();
            $random_no = Str::random(12);
            $file_name = $random_no.'.'.$file_extension;
            $destination_path = public_path().'/backend/itemimg';
            $request->file('item_img')->move($destination_path, $file_name);

            $data->item_img =$file_name;

        }

        if($request->hasFile('icon')){
            $file = $request->file('icon');
            $file_extension = $file->getClientOriginalExtension();
            $random_no = Str::random(12);
            $file_name = $random_no.'.'.$file_extension;
            $destination_path = public_path().'/backend/icon';
            $request->file('icon')->move($destination_path, $file_name);
            $data->icon =$file_name;

        }

        $data->save();
        return redirect()->back();


    }

    public function edit($id){
        $editdata = Item::find($id);
        return view('backend/dashboard/items/edit',compact('editdata'));
    }

    public function update(Request $request,$id){
        $data = Item::find($id);
        $data->Item_name = $request->Item_name;
        $data->price = $request->price;
        $data->discount_price = $request->discount_price;
        $data->item_img = $request->item_img;
        $data->icon = $request->icon;
        $data->discount_percent = $request->discount_percent;


        if($request->hasFile('item_img')){
            $file = $request->file('item_img');
            $file_extension = $file->getClientOriginalExtension();
            $random_no = Str::random(12);
            $file_name = $random_no.'.'.$file_extension;
            $destination_path = public_path().'/backend/itemimg';
            $request->file('item_img')->move($destination_path, $file_name);
            if(File::exists('backend/itemimg/'.$data->item_img)){
                File::delete('backend/itemimg/'.$data->item_img);

            }
            $data->item_img =$file_name;

        }

        if($request->hasFile('icon')){
            $file = $request->file('icon');
            $file_extension = $file->getClientOriginalExtension();
            $random_no = Str::random(12);
            $file_name = $random_no.'.'.$file_extension;
            $destination_path = public_path().'/backend/icon';
            $request->file('icon')->move($destination_path, $file_name);
            if(File::exists('backend/icon/'.$data->icon)){
                File::delete('backend/icon/'.$data->icon);

            }
            $data->icon =$file_name;

        }

        $data->save();
        return redirect()->route('item.index')->with('success','data update successfully');

    }

    public function destroy($id){
        $data = Item::find($id);

        if(File::exists('backend/itemimg/'.$data->item_img)){
            File::delete('backend/itemimg/'.$data->item_img);

        }

            if(File::exists('backend/icon/'.$data->icon)){
                File::delete('backend/icon/'.$data->icon);

            }
            $data->delete();
            return redirect()->route('item.index')->with('success','Data Deleted Successfully');


        }
    }




