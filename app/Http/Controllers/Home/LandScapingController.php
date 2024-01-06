<?php

namespace App\Http\Controllers\Home;


use App\Models\News;
use App\Models\ProductBrand;
use Illuminate\Support\Str;

class LandScapingController extends HomeController
{
    public function index(){
        return view("index.landscaping");
    }

    public function lanscaping($lanscaping){

        if(view()->exists("index.lanscaping.$lanscaping")){
            return view("index.lanscaping.$lanscaping", [
                'service' => $lanscaping
            ]);
        }
        return view("index.lanscaping", [
            'lanscaping' => $lanscaping
        ]);
    }

}
