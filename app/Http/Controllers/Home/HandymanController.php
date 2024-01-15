<?php

namespace App\Http\Controllers\Home;



class HandymanController extends HomeController
{
    public function index(){
        return view("index.handyman");
    }

    public function handyman($handyman){

        if(view()->exists("index.handyman.$handyman")){
            return view("index.handyman.$handyman", [
                'service' => $handyman
            ]);
        }
        return view("index.handyman", [
            'handyman' => $handyman
        ]);
    }

}
