<?php

namespace App\Http\Controllers;

use App\Models\Request;
use App\Http\Controllers\Review;
use App\Http\Requests\MainRequest;
use App\Models\Sneaker;

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

}