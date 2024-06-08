<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Service;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;
use Illuminate\support\facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $total_services=Service::all()->count();
        $total_items=Item::all()->count();
        $total_customer=Customer::all()->count();
        $total_reservation=Reservation::all()->count();


        return view('backend/dashboard/index', compact( 'total_services', 'total_items','total_customer','total_reservation'));
    }

    public function login(){

        return view('frontend/login/login');
    }




public function signup (Request $request){

    $request->validate([
        'fullname' => 'required',
        'email' => 'required|email',
        'password'=>'required|min:6|confirmed',

    ]);

    $data=[
        'name'=>$request->fullname,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
    ];

    user::insert($data);
    return redirect()->back()->with('success', 'User registered successfully!');


}


public function signin(Request $request){

    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6'
    ]);

    // Find user
    $user = User::where('email', $request->email)->first();

    if ($user && Hash::check($request->password, $user->password)) {
        // Authentication successful
        Auth::login($user);

        if ($user->role == 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role == 'user') {
            return redirect()->route('frontend.index');
        } else {
            return redirect()->back()->with('error', 'Check Email, Password!');
        }
    }

    // Authentication failed
    $request->session()->flash('error', 'Invalid email or password');
    return redirect()->back();
}


public function logout(){
    if(Auth::check()){
        Auth::logout();
        return redirect()->route('login');
    }
    return redirect()->route('login');
}


}
