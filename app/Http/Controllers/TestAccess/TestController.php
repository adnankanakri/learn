<?php


namespace App\Http\Controllers\TestAccess;


use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->except("");
    }


    public function test(): string
    {
        return "admin from Controller";
    }

    public function delete(): string
    {
        return "deleteq from controller";
    }

    public function set(): string
    {
        return "set from controller";
    }

    public function get(): string
    {
        return "get from controller";
    }








}
