<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;




Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

//middleware
Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware(['auth','admin']);






//Register User
Route::post('/register', [AdminController::class, 'signup'])->name('user.register');
//Login User
Route::view('/login', 'frontend.login.login')->name('login');
Route::post('/login', [AdminController::class, 'signin'])->name('user.login');
//logout
Route::get('/logout',[AdminController::class, 'logout'])->name('userlogout');




//setting
Route::get('setting/detail', [SettingController::class, 'index'])->name('setting.index');

Route::POST('setting/update', [SettingController::class, 'update'])->name('setting.update');


//services
Route::get('service/display', [ServiceController::class, 'index'])->name('service.index');
Route::view('admin/service', 'backend/dashboard/services/create')->name('service');
Route::get('service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('service/store', [ServiceController::class, 'store'])->name('service.store');
Route::get('service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
Route::post('service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
Route::get('service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.delete');



//Items
Route::get('item/show', [ItemController::class, 'index'])->name('item.index');
Route::view('admin/item', 'backend/dashboard/items/create')->name('item');
Route::get('item/create', [ItemController::class, 'create'])->name('item.create');
Route::post('item/store', [ItemController::class, 'store'])->name('item.store');
Route::get('item/edit/{id}', [ItemController::class, 'edit'])->name('item.edit');
Route::post('item/update/{id}', [ItemController::class, 'update'])->name('item.update');
Route::get('item/delete/{id}', [ItemController::class, 'destroy'])->name('item.delete');



//Customers
Route::get('customer/index', [CustomerController::class, 'index'])->name('customer.index');
Route::view('admin/customer', 'backend/dashboard/customer/create')->name('customer');
Route::get('customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('customer/store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('customer/edits/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::get('customer/delete/{id}', [CustomerController::class, 'destroy'])->name('customer.delete');

//Blogs
Route::get('blog/view', [BlogController::class, 'index'])->name('blog.index');
Route::view('admin/blog', 'backend/dashboard/blog/create')->name('blog');
Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::get('blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');


// Linking all file here
Route::get('/services', [FrontendController::class, 'service'])->name('frontend.service');
Route::get('/service-details', [FrontendController::class, 'servicedetails']);
Route::get('/about-us', [FrontendController::class, 'about']);
Route::get('/gallery', [FrontendController::class, 'gallery']);
Route::get('/blog', [FrontendController::class, 'blog']);
Route::get('/contact-us', [FrontendController::class, 'contact']);
Route::get('/register', [FrontendController::class, 'register'])->name('register');
Route::get('/login', [FrontendController::class, 'login'])->name('login');

//order
Route::get('order', [ReservationController::class, 'index'])->name('order.index');
Route::view('admin/order', 'backend/dashboard/order')->name('order');
Route::get('order/create', [ReservationController::class, 'create'])->name('order.create');
Route::post('order/store', [ReservationController::class, 'store'])->name('order.store');
Route::get('order/delete/{id}', [ReservationController::class, 'destroy'])->name('order.delete');

