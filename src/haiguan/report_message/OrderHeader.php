<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/22
 * Time: 17:43
 */

namespace haiguan\report_message;

use haiguan\Tool;

class OrderHeader
{


    /**
     * @$guid 企业系统生成36位唯一序号（英文字母大写）
     */
    public $guid;
    /**
     * @$appType 企业报送类型。1-新增 2-变更 3-删除。默认为1。
     */
    public $appType = 1;
    /**
     * @$appTime 企业报送时间。格式:YYYYMMDDhhmmss
     */
    public $appTime;
    /**
     * @$appStatus 业务状态:1-暂存,2-申报,默认为2。
     */
    public $appStatus = 2;
    /**
     * @$orderType 电子订单类型：I进口
     */
    public $orderType = "I";
    /**
     * @$orderNo 交易平台的订单编号，同一交易平台的订单编号应唯一。订单编号长度不能超过60位。
     */
    public $orderNo = "00000000";
    /**
     * @$ebpCode 电商平台的海关注册登记编号；电商平台未在海关注册登记，由电商企业发送订单的，以中国电子口岸发布的电商平台标识编号为准。
     */
    public $ebpCode = "00000000";
    /**
     * @$ebpName 电商平台的海关注册登记名称；电商平台未在海关注册登记，由电商企业发送订单的，以中国电子口岸发布的电商平台名称为准。
     */
    public $ebpName = "00000000";
    /**
     * @$ebcCode 电商企业的海关注册登记编号。
     */
    public $ebcCode = "00000000";
    /**
     * @$ebcName 电商企业的海关注册登记名称。
     */
    public $ebcName = "00000000";
    /**
     * @$goodsValue 商品实际成交价，含非现金抵扣金额。
     */
    public $goodsValue = 0;
    /**
     * @$freight 不包含在商品价格中的运杂费，无则填写"0"。
     */
    public $freight = 0;
    /**
     * @$discount 使用积分、虚拟货币、代金券等非现金支付金额，无则填写"0"。
     */
    public $discount = 0;
    /**
     * @$taxTotal 企业预先代扣的税款金额，无则填写“0”
     */
    public $taxTotal = 0;
    /**
     * @$acturalPaid 商品价格+运杂费+代扣税款-非现金抵扣金额，与支付凭证的支付金额一致。
     */
    public $acturalPaid = 0;
    /**
     * @$currency 限定为人民币，填写“142”
     */
    public $currency = 142;
    /**
     * @$buyerRegNo 订购人的交易平台注册号。
     */
    public $buyerRegNo = "00000000";
    /**
     * @$buyerName 订购人的真实姓名。
     */
    public $buyerName = "name";
    /**
     * @$buyerIdType 1-身份证,2-其它。限定为身份证，填写“1”。
     */
    public $buyerIdType = 1;
    /**
     * @$buyerIdNumber 订购人的身份证件号码。
     */
    public $buyerIdNumber = "000000000000000000";
    /**
     * @$payCode （非必填） 支付企业的海关注册登记编号。
     */
    public $payCode = "";
    /**
     * @$payName （非必填） 支付企业在海关注册登记的企业名称。
     */
    public $payName = "";
    /**
     * @$payTransactionId （非必填） 支付企业唯一的支付流水号。
     */
    public $payTransactionId = "";
    /**
     * @$batchNumbers （非必填） 商品批次号。
     */
    public $batchNumbers = "";
    /**
     * @$consignee 收货人姓名，必须与电子运单的收货人姓名一致。
     */
    public $consignee = "consignee";
    /**
     * @$consigneeTelephone 收货人联系电话，必须与电子运单的收货人电话一致。
     */
    public $consigneeTelephone = "00000000000";
    /**
     * @$consigneeAddress 收货地址，必须与电子运单的收货地址一致。
     */
    public $consigneeAddress = "address";
    /**
     * @$consigneeDistrict （非必填） 参照国家统计局公布的国家行政区划标准填制。
     */
    public $consigneeDistrict = "";
    /**
     * @$note
     */
    public $note = "";

    public function __construct()
    {
        $this->guid = Tool::guid();
        $this->appTime = date("YmdHis");
    }


    public function ToXml()
    {
        $xml = '';
        $xml .= '<ceb:OrderHead>' . PHP_EOL;
        $xml .= '<ceb:guid>' . $this->guid . '</ceb:guid>' . PHP_EOL;
        $xml .= '<ceb:appType>' . $this->appType . '</ceb:appType>' . PHP_EOL;
        $xml .= '<ceb:appTime>' . $this->appTime . '</ceb:appTime>' . PHP_EOL;
        $xml .= '<ceb:appStatus>' . $this->appStatus . '</ceb:appStatus>' . PHP_EOL;
        $xml .= '<ceb:orderType>' . $this->orderType . '</ceb:orderType>' . PHP_EOL;
        $xml .= '<ceb:orderNo>' . $this->orderNo . '</ceb:orderNo>' . PHP_EOL;
        $xml .= '<ceb:ebpCode>' . $this->ebpCode . '</ceb:ebpCode>' . PHP_EOL;
        $xml .= '<ceb:ebpName>' . $this->ebpName . '</ceb:ebpName>' . PHP_EOL;
        $xml .= '<ceb:ebcCode>' . $this->ebcCode . '</ceb:ebcCode>' . PHP_EOL;
        $xml .= '<ceb:ebcName>' . $this->ebcName . '</ceb:ebcName>' . PHP_EOL;
        $xml .= '<ceb:goodsValue>' . $this->goodsValue . '</ceb:goodsValue>' . PHP_EOL;
        $xml .= '<ceb:freight>' . $this->freight . '</ceb:freight>' . PHP_EOL;
        $xml .= '<ceb:discount>' . $this->discount . '</ceb:discount>' . PHP_EOL;
        $xml .= '<ceb:taxTotal>' . $this->taxTotal . '</ceb:taxTotal>' . PHP_EOL;
        $xml .= '<ceb:acturalPaid>' . $this->acturalPaid . '</ceb:acturalPaid>' . PHP_EOL;
        $xml .= '<ceb:currency>' . $this->currency . '</ceb:currency>' . PHP_EOL;
        $xml .= '<ceb:buyerRegNo>' . $this->buyerRegNo . '</ceb:buyerRegNo>' . PHP_EOL;
        $xml .= '<ceb:buyerName>' . $this->buyerName . '</ceb:buyerName>' . PHP_EOL;
        $xml .= '<ceb:buyerIdType>' . $this->buyerIdType . '</ceb:buyerIdType>' . PHP_EOL;
        $xml .= '<ceb:buyerIdNumber>' . $this->buyerIdNumber . '</ceb:buyerIdNumber>' . PHP_EOL;
        $xml .= '<ceb:payCode>' . $this->payCode . '</ceb:payCode>' . PHP_EOL;
        $xml .= '<ceb:payName>' . $this->payName . '</ceb:payName>' . PHP_EOL;
        $xml .= '<ceb:payTransactionId>' . $this->payTransactionId . '</ceb:payTransactionId>' . PHP_EOL;
        $xml .= '<ceb:batchNumbers>' . $this->batchNumbers . '</ceb:batchNumbers>' . PHP_EOL;
        $xml .= '<ceb:consignee>' . $this->consignee . '</ceb:consignee>' . PHP_EOL;
        $xml .= '<ceb:consigneeTelephone>' . $this->consigneeTelephone . '</ceb:consigneeTelephone>' . PHP_EOL;
        $xml .= '<ceb:consigneeAddress>' . $this->consigneeAddress . '</ceb:consigneeAddress>' . PHP_EOL;
        if(!empty($consigneeDistrict)){
            $xml .= '<ceb:consigneeDistrict>' . $this->consigneeDistrict . '</ceb:consigneeDistrict>' . PHP_EOL;
        }
        $xml .= '<ceb:note>' . $this->note . '</ceb:note>' . PHP_EOL;
        $xml .= '</ceb:OrderHead>' . PHP_EOL;

        return $xml;
    }

}