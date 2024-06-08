<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use File;
class BlogController extends Controller
{
    public function index(){
        $allData = Blog::all();

        return view('backend/dashboard/blog/index',compact('allData'));


    }

    public function create(){

        return view('backend/dashboard/blog/create');


    }

    public function store(Request $request){

        $data = new Blog;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->date = $request->date;
        $data->blog_img = $request->blog_img;

        if($request->hasFile('blog_img')){
            $file = $request->file('blog_img');
            $file_extension = $file->getClientOriginalExtension();
            $random_no = Str::random(12);
            $file_name = $random_no.'.'.$file_extension;
            $destination_path = public_path().'/backend/blog_img';
            $request->file('blog_img')->move($destination_path, $file_name);
            $data->blog_img =$file_name;

        }
        $data->save();
        return redirect()->back();

    }

    public function edit($id){
        $editdata = Blog::find($id);
        return view('backend/dashboard/blog/edit',compact('editdata'));
    }

    public function update(Request $request,$id){
        $data = Blog::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->date = $request->date;
        $data->blog_img = $request->blog_img;

        if($request->hasFile('blog_img')){
            $file = $request->file('blog_img');
            $file_extension = $file->getClientOriginalExtension();
            $random_no = Str::random(12);
            $file_name = $random_no.'.'.$file_extension;
            $destination_path = public_path().'/backend/blog_img';
            $request->file('blog_img')->move($destination_path, $file_name);
            if(File::exists('backend/blog_img/'.$data->blog_img)){
                File::delete('backend/blog_img/'.$data->blog_img);

            }
            $data->blog_img =$file_name;
        }
        $data->save();
        return redirect()->route('blog.index')->with('success','data update successfully');

    }

    public function destroy($id){
        $data = Blog::find($id);

            if(File::exists('backend/blog_img/'.$data->blog_img)){
                File::delete('backend/blog_img/'.$data->blog_img);

            }
            $data->delete();
            return redirect()->route('blog.index')->with('success','Data Deleted Successfully');


        }
    }



