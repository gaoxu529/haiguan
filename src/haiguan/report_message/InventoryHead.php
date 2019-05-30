<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/29
 * Time: 19:16
 */

namespace haiguan\report_message;


use haiguan\Tool;

class InventoryHead
{
    /**
     * @var string 系统唯一序号
     */
    public $guid;
    /**
     * @var string 报送类型
     */
    public $appType;
    /**
     * @var string 报送时间
     */
    public $appTime;
    /**
     * @var string 业务状态
     */
    public $appStatus;
    /**
     * @var string 订单编号
     */
    public $orderNo;
    /**
     * @var string 电商平台代码
     */
    public $ebpCode;
    /**
     * @var string 电商平台名称
     */
    public $ebpName;
    /**
     * @var string 电商企业代码
     */
    public $ebcCode;
    /**
     * @var string 电商企业名称
     */
    public $ebcName;
    /**
     * @var string 物流运单编号
     */
    public $logisticsNo;
    /**
     * @var string 物流企业代码
     */
    public $logisticsCode;
    /**
     * @var string 物流企业名称
     */
    public $logisticsName;
    /**
     * @var string 企业内部编号
     */
    public $copNo;
    /**
     * @var string 预录入编号
     */
    public $preNo;
    /**
     * @var string    担保企业编号
     */
    public $assureCode;
    /**
     * @var string 账册编号
     */
    public $emsNo;
    /**
     * @var string 清单编号
     */
    public $invtNo;
    /**
     * @var string 进出口标记
     */
    public $ieFlag;
    /**
     * @var string 申报日期
     */
    public $declTime;
    /**
     * @var string 申报海关代码
     */
    public $customsCode;
    /**
     * @var string 口岸海关代码
     */
    public $portCode;
    /**
     * @var string 进口日期
     */
    public $ieDate;
    /**
     * @var string 订购人证件类型
     */
    public $buyerIdType;
    /**
     * @var string 订购人证件号码
     */
    public $buyerIdNumber;
    /**
     * @var string 订购人姓名
     */
    public $buyerName;
    /**
     * @var string 订购人电话
     */
    public $buyerTelephone;
    /**
     * @var string    收件地址
     */
    public $consigneeAddress;
    /**
     * @var string   申报企业代码
     */
    public $agentCode;
    /**
     * @var string   申报企业名称
     */
    public $agentName;
    /**
     * @var string   区内企业代码
     */
    public $areaCode;
    /**
     * @var string   区内企业名称
     */
    public $areaName;
    /**
     * @var string    贸易方式
     */
    public $tradeMode;
    /**
     * @var string   运输方式
     */
    public $trafMode;
    /**
     * @var string   运输工具编号
     */
    public $trafNo;
    /**
     * @var string    航班航次号
     */
    public $voyageNo;
    /**
     * @var string     提运单号
     */
    public $billNo;
    /**
     * @var string   监管场所代码
     */
    public $loctNo;
    /**
     * @var string    许可证件号
     */
    public $licenseNo;
    /**
     * @var string    起运国（地区）
     */
    public $country;
    /**
     * @var string     运费
     */
    public $freight;
    /**
     * @var string   保费
     */
    public $insuredFee;
    /**
     * @var string     币制
     */
    public $currency;
    /**
     * @var string    包装种类代码
     */
    public $wrapType;
    /**
     * @var string   件数
     */
    public $packNo;
    /**
     * @var string    毛重（公斤）
     */
    public $grossWeight;
    /**
     * @var string   净重（公斤）
     */
    public $netWeight;
    /**
     * @var string     备注
     */
    public $note;

    public function __construct()
    {
        $this->guid = Tool::guid();
    }

    public function ToXml()
    {
        $xml = '';


        $xml .= '<ceb:InventoryHead>' . PHP_EOL;
        $xml .= '	<ceb:guid>' . $this->guid . '</ceb:guid>' . PHP_EOL;
        $xml .= '	<ceb:appType>' . $this->appType . '</ceb:appType>' . PHP_EOL;
        $xml .= '	<ceb:appTime>' . $this->appTime . '</ceb:appTime>' . PHP_EOL;
        $xml .= '	<ceb:appStatus>' . $this->appStatus . '</ceb:appStatus>' . PHP_EOL;
        $xml .= '	<ceb:orderNo>' . $this->orderNo . '</ceb:orderNo>' . PHP_EOL;
		$xml .= '	<ceb:ebpCode>' . $this->ebpCode . '</ceb:ebpCode>' . PHP_EOL;
		$xml .= '	<ceb:ebpName>' . $this->ebpName . '</ceb:ebpName>' . PHP_EOL;
		$xml .= '	<ceb:ebcCode>' . $this->ebcCode . '</ceb:ebcCode>' . PHP_EOL;
		$xml .= '	<ceb:ebcName>' . $this->ebcName . '</ceb:ebcName>' . PHP_EOL;
		$xml .= '	<ceb:logisticsNo>' . $this->logisticsNo . '</ceb:logisticsNo>' . PHP_EOL;
		$xml .= '	<ceb:logisticsCode>' . $this->logisticsCode . '</ceb:logisticsCode>' . PHP_EOL;
		$xml .= '	<ceb:logisticsName>' . $this->logisticsName . '</ceb:logisticsName>' . PHP_EOL;
		$xml .= '	<ceb:copNo>' . $this->copNo . '</ceb:copNo>' . PHP_EOL;
		$xml .= '	<ceb:preNo>' . $this->preNo . '</ceb:preNo>' . PHP_EOL;
		$xml .= '	<ceb:assureCode>' . $this->assureCode . '</ceb:assureCode>' . PHP_EOL;
		$xml .= '	<ceb:emsNo>' . $this->emsNo . '</ceb:emsNo>' . PHP_EOL;
		$xml .= '	<ceb:invtNo>' . $this->invtNo . '</ceb:invtNo>' . PHP_EOL;
		$xml .= '	<ceb:ieFlag>' . $this->ieFlag . '</ceb:ieFlag>' . PHP_EOL;
		$xml .= '	<ceb:declTime>' . $this->declTime . '</ceb:declTime>' . PHP_EOL;
		$xml .= '	<ceb:customsCode>' . $this->customsCode . '</ceb:customsCode>' . PHP_EOL;
		$xml .= '	<ceb:portCode>' . $this->portCode . '</ceb:portCode>' . PHP_EOL;
		$xml .= '	<ceb:ieDate>' . $this->ieDate . '</ceb:ieDate>' . PHP_EOL;
		$xml .= '	<ceb:buyerIdType>' . $this->buyerIdType . '</ceb:buyerIdType>' . PHP_EOL;
		$xml .= '	<ceb:buyerIdNumber>' . $this->buyerIdNumber . '</ceb:buyerIdNumber>' . PHP_EOL;
		$xml .= '	<ceb:buyerName>' . $this->buyerName . '</ceb:buyerName>' . PHP_EOL;
		$xml .= '	<ceb:buyerTelephone>' . $this->buyerTelephone . '</ceb:buyerTelephone>' . PHP_EOL;
		$xml .= '	<ceb:consigneeAddress>' . $this->consigneeAddress . '</ceb:consigneeAddress>' . PHP_EOL;
		$xml .= '	<ceb:agentCode>' . $this->agentCode . '</ceb:agentCode>' . PHP_EOL;
		$xml .= '	<ceb:agentName>' . $this->agentName . '</ceb:agentName>' . PHP_EOL;
		$xml .= '	<ceb:areaCode>' . $this->areaCode . '</ceb:areaCode>' . PHP_EOL;
		$xml .= '	<ceb:areaName>' . $this->areaName . '</ceb:areaName>' . PHP_EOL;
		$xml .= '	<ceb:tradeMode>' . $this->tradeMode . '</ceb:tradeMode>' . PHP_EOL;
		$xml .= '	<ceb:trafMode>' . $this->trafMode . '</ceb:trafMode>' . PHP_EOL;
		$xml .= '	<ceb:trafNo>' . $this->trafNo . '</ceb:trafNo>' . PHP_EOL;
		$xml .= '	<ceb:voyageNo>' . $this->voyageNo . '</ceb:voyageNo>' . PHP_EOL;
		$xml .= '	<ceb:billNo>' . $this->billNo . '</ceb:billNo>' . PHP_EOL;
		$xml .= '	<ceb:loctNo>' . $this->loctNo . '</ceb:loctNo>' . PHP_EOL;
		$xml .= '	<ceb:licenseNo>' . $this->licenseNo . '</ceb:licenseNo>' . PHP_EOL;
		$xml .= '	<ceb:country>' . $this->country . '</ceb:country>' . PHP_EOL;
		$xml .= '	<ceb:freight>' . $this->freight . '</ceb:freight>' . PHP_EOL;
		$xml .= '	<ceb:insuredFee>' . $this->insuredFee . '</ceb:insuredFee>' . PHP_EOL;
		$xml .= '	<ceb:currency>' . $this->currency . '</ceb:currency>' . PHP_EOL;
		$xml .= '	<ceb:wrapType>' . $this->wrapType . '</ceb:wrapType>' . PHP_EOL;
		$xml .= '	<ceb:packNo>' . $this->packNo . '</ceb:packNo>' . PHP_EOL;
		$xml .= '	<ceb:grossWeight>' . $this->grossWeight . '</ceb:grossWeight>' . PHP_EOL;
		$xml .= '	<ceb:netWeight>' . $this->netWeight . '</ceb:netWeight>' . PHP_EOL;
		$xml .= '	<ceb:note>' . $this->note . '</ceb:note>' . PHP_EOL;
		$xml .= '</ceb:InventoryHead>' . PHP_EOL;

        return $xml;
    }
}