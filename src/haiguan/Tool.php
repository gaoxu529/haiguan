<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/22
 * Time: 18:00
 */

namespace haiguan;

class Tool
{
    public static function guid() {
        if (function_exists('com_create_guid')) {
            return com_create_guid();
        } else {
            mt_srand((double)microtime()*10000);
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);
//            $uuid   = chr(123)
//                .substr($charid, 0, 8).$hyphen
//                .substr($charid, 8, 4).$hyphen
//                .substr($charid,12, 4).$hyphen
//                .substr($charid,16, 4).$hyphen
//                .substr($charid,20,12)
//                .chr(125);

            $uuid   = ""
                .substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid,12, 4).$hyphen
                .substr($charid,16, 4).$hyphen
                .substr($charid,20,12)
                ."";
            return $uuid;
        }
    }
}