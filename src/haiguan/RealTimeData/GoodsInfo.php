<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/28
 * Time: 14:09
 */

namespace haiguan\RealTimeData;


class GoodsInfo
{
    public $gname;
    public $itemLink;

    public function __construct($gname, $itemLink)
    {
        $this->gname = $gname;
        $this->itemLink = $itemLink;
    }
}