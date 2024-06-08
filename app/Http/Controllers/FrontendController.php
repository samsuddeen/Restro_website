<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Item;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Customer;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $setting = Setting::findOrFail(1);
        $services = Service::all();
        $item = Item::all();
        $customer = Customer::all();
        return view('frontend.index',compact('setting','services','item','customer'));
    }

    public function service(){
        $setting = Setting::findOrFail(1);
        $services = Service::all();
        $item = Item::all();
        return view('frontend.service',compact('setting','services','item'));

    }

    public function servicedetails(){
        $setting = Setting::findOrFail(1);
        $services = Service::all();
        $item = Item::all();
        return view('frontend.service-detail',compact('setting','services','item'));

    }

    public function about(){
        $setting = Setting::findOrFail(1);
        $services = Service::all();
        $item = Item::all();
        return view('frontend.about',compact('setting','services','item'));

    }
    public function gallery(){
        $setting = Setting::findOrFail(1);
        $services = Service::all();
        $item = Item::all();
        return view('frontend.gallery',compact('setting','services','item'));
    }
    public function blog(){
        $setting = Setting::findOrFail(1);
        $services = Service::all();
        $item = Item::all();
        $blogs = Blog::all();
        return view('frontend.blog',compact('setting','services','item','blogs'));

    }
    public function contact(){
        $setting = Setting::findOrFail(1);
        $services = Service::all();
        $item = Item::all();
        return view('frontend.contact',compact('setting','services','item'));

    }
    public function register(){
        $setting = Setting::findOrFail(1);
        return view('frontend.login.register',compact('setting'));

    }
    public function login(){
        $setting = Setting::findOrFail(1);
        return view('frontend.login.login',compact('setting'));

    }
}


