<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/24
 * Time: 14:15
 */

namespace haiguan\report_message;


use haiguan\Tool;

class LogisticsHeader
{
    /**
     * @var string 系统唯一序号：企业系统生成36位唯一序号（英文字母大写）。
     */
    public $guid;
    /**
     * @var string 报送类型
     */
    private $appType;
    /**
     * @var string 报送时间
     */
    private $appTime;
    /**
     * @var string 业务状态
     */
    private $appStatus;
    /**
     * @var string 物流企业代码
     */
    private $logisticsCode;
    /**
     * @var string 物流企业名称
     */
    private $logisticsName;
    /**
     * @var string 物流运单编号
     */
    private $logisticsNo;
    /**
     * @var string 提运单号
     */
    private $billNo;
    /**
     * @var string 运费
     */
    private $freight;
    /**
     * @var string 保价费
     */
    private $insuredFee;
    /**
     * @var string 币制
     */
    private $currency;
    /**
     * @var string 毛重
     */
    private $weight;
    /**
     * @var string 件数
     */
    private $packNo;
    /**
     * @var string 主要货物信息
     */
    private $goodsInfo;
    /**
     * @var string 收货人姓名
     */
    private $consignee;
    /**
     * @var string 收货地址
     */
    private $consigneeAddress;
    /**
     * @var string 收货人电话
     */
    private $consigneeTelephone;
    /**
     * @var string 备注
     */
    private $note;


    public function __construct()
    {
        $this->guid = Tool::guid();
    }

    public function ToXml()
    {

        $xml = "";
        $xml .= '<ceb:guid>' . $this->guid . '</ceb:guid>' . PHP_EOL;
        $xml .= '<ceb:appType>' . $this->appType . '</ceb:appType>' . PHP_EOL;
        $xml .= '<ceb:appTime>' . $this->appTime . '</ceb:appTime>' . PHP_EOL;
        $xml .= '<ceb:appStatus>' . $this->appStatus . '</ceb:appStatus>' . PHP_EOL;
        $xml .= '<ceb:logisticsCode>' . $this->logisticsCode . '</ceb:logisticsCode>' . PHP_EOL;
        $xml .= '<ceb:logisticsName>' . $this->logisticsName . '</ceb:logisticsName>' . PHP_EOL;
        $xml .= '<ceb:logisticsNo>' . $this->logisticsNo . '</ceb:logisticsNo>' . PHP_EOL;
        $xml .= '<ceb:billNo>' . $this->billNo . '</ceb:billNo>' . PHP_EOL;
        $xml .= '<ceb:freight>' . $this->freight . '</ceb:freight>' . PHP_EOL;
        $xml .= '<ceb:insuredFee>' . $this->insuredFee . '</ceb:insuredFee>' . PHP_EOL;
        $xml .= '<ceb:currency>' . $this->currency . '</ceb:currency>' . PHP_EOL;
        $xml .= '<ceb:weight>' . $this->weight . '</ceb:weight>' . PHP_EOL;
        $xml .= '<ceb:packNo>' . $this->packNo . '</ceb:packNo>' . PHP_EOL;
        $xml .= '<ceb:goodsInfo>' . $this->goodsInfo . '</ceb:goodsInfo>' . PHP_EOL;
        $xml .= '<ceb:consignee>' . $this->consignee . '</ceb:consignee>' . PHP_EOL;
        $xml .= '<ceb:consigneeAddress>' . $this->consigneeAddress . '</ceb:consigneeAddress>' . PHP_EOL;
        $xml .= '<ceb:consigneeTelephone>' . $this->consigneeTelephone . '</ceb:consigneeTelephone>' . PHP_EOL;
        $xml .= '<ceb:note>' . $this->note . '</ceb:note>' . PHP_EOL;

        return $xml;
    }
}