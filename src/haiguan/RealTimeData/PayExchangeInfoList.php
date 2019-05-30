<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/28
 * Time: 14:09
 */

namespace haiguan\RealTimeData;


class PayExchangeInfoList
{
    public $orderNo;
    public $goodsInfo;
    public $recpAccount;
    public $recpCode;
    public $recpName;

    public function __construct($orderNo, $recpAccount, $recpCode, $recpName,$good_info_array)
    {
        $this->orderNo = $orderNo;
        $this->recpAccount = $recpAccount;
        $this->recpCode = $recpCode;
        $this->recpName = $recpName;
        $this->goodsInfo = $good_info_array;
    }

    public function getPayExchangeInfoHeadStr()
    {
        return json_encode($this);
    }
}