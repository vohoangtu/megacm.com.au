<?php

namespace App\Http\Controllers\Home;


use App\Models\News;
use App\Models\ProductBrand;
use Illuminate\Support\Str;

class RenovationController extends HomeController
{
    public function index(){
        return view("index.renovation");
    }

    public function renovation($renovation){

        if(view()->exists("index.renovation.$renovation")){
            return view("index.renovation.$renovation", [
                'service' => $renovation
            ]);
        }
        return view("index.renovation", [
            'renovation' => $renovation
        ]);
    }

}
