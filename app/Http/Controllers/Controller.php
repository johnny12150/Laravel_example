<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//for  function  cookie
use Illuminate\Support\Facades\Cookie;

use App\Data; //使用自己建立的 Data class (Model)
//request
use Illuminate\Http\Request;

use App\Http\Requests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public  function showMainPage() {
        return view("mainpage");
    }

    public  function  read() {
        return view('test.plugin' , ['data' => Data::read()]);
    }

    public  function  cookie() {
        Cookie::queue('test', 'Hello, Laramist', 10);
        return view('test.remember');
    }

    public  function  get_cookie(Request $request) {
        Cookie::queue('test', 'Hello, Laramist', 10);
        $cookies = $request->cookie();
        return view('test.remember', ['cookie_test' => $cookies]);
    }

    public function get_json() {
        // using php to handle json file and return the data with view
        $url = 'http://172.16.100.20:8182/iiif/2/galaxy.png/info.json';
        $content = file_get_contents($url);
        $json_array = json_decode($content, true); //second parameter (true) will return array instead of obj
        $json_obj = json_decode($content);
        //choose to return the json_data with obj or array
        return view('test.echoJson', ['json_data' => $json_obj]);
    }

    public function new_json() {
        // using php to handle json file and return the data with view
        $url = 'http://172.16.100.20:8182/iiif/2/galaxy.png/info.json';
        $content = file_get_contents($url);
        $json_obj = json_decode($content);
        //$json_array = json_decode($content, true); //second parameter (true) will return array instead of obj

        //$json = json_decode($content, true);

        //add new attribute with array
        //array_push($json_array, 'test123');

        //define new attribute as a empty array to push new attribute
        //$json_array['test']=[];

        //array_push($json_array['test'], 'test777');

        //$new_json = json_encode($json_array);

        //add new attribute with obj
        $json_obj->test01 = '001 TEST';
        //$new_json = json_encode($json_obj);

        //使用obj方法後轉成array再加要得array
        $toArray = (array)$json_obj;
        array_push($toArray, 'test123');
        $toArray['haha']=['a'=>'a1', 'b'=> 'b1'];
        //array裡面再包兩個
        $temp =[array('a'=>'a', 'b'=> 'b'), array('a'=>'c', 'b'=> 'd')];

        $toArray['haha01']=[];
        array_push($toArray['haha01'], 'test777');
        array_push($toArray['haha01'], 'test888');
        //array_push($toArray['haha'], $temp);

        array_push($toArray, $temp);
        $new_json = json_encode($toArray);

        //return view('test.infoJson', ['json_data' => $new_json]);
        return $new_json;
    }

    public function api_test() {
        $msg = 'connected !';
        return $msg;
    }

    public function api_insert(Request $request) {
        $data_model = new Data();
        $data_model->insert($request);

        // Data::read($request);

    }

    public function manifest() {
        //data that comes from the iiif manifest editor (through request and send)
        $id = Request::input('id','');
        $manifest = Request::input('manifest');
        $annotations_str = Request::input('annotation');
        $annotations = json_decode($annotations_str);
        $user = Request::input('user');
        $deletArray = json_decode(Request::input('deletArray'));
        $updateArray = json_decode(Request::input('updateArray'));
        $TextArray = json_decode(Request::input('getUpdateText'));

        Data::manifest_save();
    }
}
