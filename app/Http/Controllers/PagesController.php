<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
    # code..
    return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function sport(){
        $sports = array(
            "title"=> "Cambodia Sport",
            "football" => [
                "club" => "Boeng Ket",
                "Player" => "Chanvothanaka",
                "Price" => "20 millions dollars",
                "Location" => "Phnom Penh"
            ],
            "VoleyBall" =>[
                "Club" => "Visakha",
                "Player" => "Duk",
                "Price" => "100 millions dollars",
                "Location" => "Phom Penh"
            ]
        );
        return view('pages.sport')->with($sports);
    }
    
}
