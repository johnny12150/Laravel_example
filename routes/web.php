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
Route::get('/test' , function (){
    // 測試annotator plugin的使用
    return view(test.plugin);
});
Route::get('/search', 'Controller@read');

?>