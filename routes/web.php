<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    $products=App\Product::where(function($query){
        
        $min_price=Input::has('min_price') ? Input::get('min_price'):null;
        $max_price=Input::has('max_price') ? Input::get('max_price'):null;

        if(isset($min_price) && isset($max_price))
        {
            $query->where('price','>=',$min_price)->where('price','<=',$max_price);
        }
    })->get();

    return view('welcome',compact('products'));
})->name('home_page');

Route::resource('ajaxproducts','ProductAjaxController');
