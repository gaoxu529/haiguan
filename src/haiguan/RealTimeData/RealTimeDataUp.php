<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/28
 * Time: 14:08
 */

namespace haiguan\RealTimeData;


class RealTimeDataUp
{
    /**
     * @Property $sessionID 海关发起请求时，平台接收的会话ID
     */
    public $sessionID;
    /**
     * @PayExchangeInfoHead PayExchangeInfoHead 支付原始数据表头
     */
    public $payExchangeInfoHead;
    /**
     * @Property certNo 支付原始数据表体
     */
    public $payExchangeInfoList;
    /**
     * @Property certNo 返回时的系统时间
     */
    public $serviceTime;
    /**
     * @Property certNo 证书编号
     */
    public $certNo;
    /**
     * @Property certNo 签名结果值
     */
    public $signValue;


    public function getPayExInfoStr()
    {
        $result = '"sessionID":"' . $this->sessionID . '"';
        $result .= '||';
        $result .= '"payExchangeInfoHead":' . $this->payExchangeInfoHead->getPayExchangeInfoHeadStr();
        $result .= '||';
        $result .= '"payExchangeInfoList":"' . $this->sessionID . '"';
        $result .= '||';
        $result .= '"serviceTime":' . time();

        return $result;
    }

}