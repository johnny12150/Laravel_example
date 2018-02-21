<?php
/**
 * Created by PhpStorm.
 * User: asdc
 * Date: 2018/2/14
 * Time: 上午 09:37
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Data extends Model
{
    //set the table that are goona to connect
    protected $table = 'b';
    public static function read()
    {
        //取所有資料
        $data = self::get();
        // same as DB::table('b')->get();
        //取得特定欄位資料
//        $data = self::select('name')->first();
       return $data;
    }
}