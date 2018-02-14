<?php
/**
 * Created by PhpStorm.
 * User: asdc
 * Date: 2018/2/14
 * Time: 上午 09:37
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    //set the table that are goona to connect
    protected $table = 'b';
    public static function read()
    {
        $data = self::get();
        // same as DB::table('b')->get();
       return $data;
    }
}