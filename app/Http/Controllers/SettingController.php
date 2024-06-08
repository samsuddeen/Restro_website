<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::whereId(1)->first();
        return view('backend.dashboard.settings',compact('setting'));
    }


    public function update(Request $request){

        // $request->validate([
        //     'heading_text' => 'required',
        //     'email' => 'email|required',
        //     'logo' => 'required',
        //     'slideimage' => 'required',
        // ]);

        $setting = Setting::findOrFail(1);
        $setting->heading_text = $request->heading_text;
        $setting->address = $request->address;
        $setting->footer_bio = $request->footer_bio;
        $setting->story_bio = $request->story_bio;
        $setting->opening_hour = $request->opening_hour;
        $setting->small_text = $request->small_text;
        $setting->email = $request->email;
        $setting->mobile = $request->mobile;
        $setting->button_text = $request->button_text;
        $setting->logo = $request->logo;
        $setting->bglogo = $request->bglogo;
        $setting->slideimage = $request->slideimage;

        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $file_extension = $file->getClientOriginalExtension();
            $random_no = Str::random(12);
            $file_name = $random_no.'.'.$file_extension;
            $destination_path = public_path().'/backend/logo';
            $request->file('logo')->move($destination_path, $file_name);
            $setting->logo =$file_name;

        }

        if($request->hasFile('bglogo')){
            $file = $request->file('bglogo');
            $file_extension = $file->getClientOriginalExtension();
            $random_no = Str::random(12);
            $file_name = $random_no.'.'.$file_extension;
            $destination_path = public_path().'/backend/logo';
            $request->file('bglogo')->move($destination_path, $file_name);
            $setting->bglogo =$file_name;

        }

        if($request->hasFile('slideimage')){
            $file = $request->file('slideimage');
            $file_extension = $file->getClientOriginalExtension();
            $random_no = Str::random(12);
            $file_name = $random_no.'.'.$file_extension;
            $destination_path = public_path().'/backend/logo';
            $request->file('slideimage')->move($destination_path, $file_name);
            $setting->slideimage =$file_name;

        }

        $setting->save();
        return redirect()->back();


    }
}
