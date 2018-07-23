<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/go', 'Controller@showMainPage')->name('main');
Route::get('/hi' , function (){
    // 測試一：取得users資料表的全部資料
    $hi = DB::table('b')->get();
    return $hi;
});

//Route::get('/test' , function (){
//    // 測試annotator plugin的使用
//    return view('test.plugin');
//});

//for routing to test
Route::group(['prefix' => 'test'], function (){

});

//work
Route::get('/search', 'Controller@read');

//broken
Route::get('/cookie', 'Controller@cookie');

//broken
Route::get('/get', 'Controller@get_cookie');

//console log json file
Route::get('/info.json', 'Controller@new_json');

//js and php read json file
Route::group(['prefix' => 'json'], function (){
    Route::get('/js', function () {
        return view('test.showJson');
    });
    Route::get('/php', 'Controller@get_json');
});

//api for iiif manifest editor
Route::group(['prefix' => 'api'], function (){
Route::get('/mongo', function () {
    return view('test.showJson');
});
//for js api.blade.php
Route::post('/test', 'Controller@api_test');
//for test in url using browser
Route::get('/test', 'Controller@api_test');

Route::get('/show', function () {
        return view('test.api');
    });

Route::post('/add', 'Controller@api_insert');
Route::get('/add', 'Controller@api_insert');

Route::get('/try', function () {
    return view('test.pass_data');
});


});

?>