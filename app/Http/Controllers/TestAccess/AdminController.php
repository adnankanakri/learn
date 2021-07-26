<?php

namespace App\Http\Controllers\TestAccess;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        $data = [];
        $data["id"] = 25;
        $data["name"] = "adnan kanakri";
        return view("welcome_create", $data);
        //->with(["name"=>"adnan Kanakri","age"=>"23"])
    }

    public function showTest()
    {
//        $ar=[];
//        $ar["name"] = "adnan kanakri";
//        $ar['age'] = 23;
        $ar = new \stdClass();
        $ar -> name="adnan kanakri";
        $ar -> age=23;
        $test="adnan kanakri";
        $adnan =["adnan","yasser","kanakri"];
        $adnan =[];

        return view("controller",Compact("adnan"));
        //return view("controller",Compact("test"));
        //return view("controller",Compact("ar"));
    }


}
