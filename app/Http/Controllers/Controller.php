<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Data; //使用自己建立的 Data class (Model)

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public  function showMainPage() {
        return view("mainpage");
    }

    public  function  read() {
        return view('test.plugin' , ['data' => Data::read()]);
    }
}
