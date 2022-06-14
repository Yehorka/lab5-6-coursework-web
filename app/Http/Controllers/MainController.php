<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Review;
use Illuminate\Http\Request;
use App\Models\Sneaker;
use App\Models\Dish;
use App\Models\Chef;
use App\Models\Client;
use App\Models\Number;

class MainController extends Controller
{


    public static function landing(){
        return view('landing');
    }

    public static function about(){
        return view('about-us');
    }

    public static function contact(){
        return view('contact');
    }

    public static function shop(){
        $params = Sneaker::all();
        return view('shop', ['sneakers' => $params]);
    }

    public static function sneaker($id){
        $params = Sneaker::where('id', $id)->first();;
        return view('sneaker', ['sneaker' => $params]);
    }

    public function call_me(Request $request){
        $phone = $request->input('tel');
        if(preg_match('/^[0-9]{10}+$/', $phone)) {
        $number = Number::firstOrCreate(array('phone' => $phone));
        return view('contact', ['phone' => Number::where('phone', $phone)->first()]);}
        else {return view('landing');}
    }

    public function lab6($id1, $id2){
        if ((isset(Dish::find($id1)->chefs)) and (isset(Chef::find($id2)->dishes))) {
            $chef = Dish::find($id1)->chefs;
            $dish = Chef::find($id2)->dishes;
            $my_dish = Dish::where('client', 1)->get();
            $my_client = Client::whereIn('id', Dish::where('name', 'Hamburger')->get(['client']))->get();
        }
        return view('lab6', ['dishes' => $dish, 'chefs' => $chef, 'my_dishes' => $my_dish, 'my_clients' => $my_client]);
    }

}