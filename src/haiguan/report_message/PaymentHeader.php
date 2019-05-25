<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/24
 * Time: 14:15
 */

namespace haiguan\report_message;


use haiguan\Tool;

class PaymentHeader
{
    /**
     * @var string 系统唯一序号：企业系统生成36位唯一序号（英文字母大写）。
     */
    public $guid;
    /**
     * @var integer 报送类型：企业报送类型。1-新增 2-变更 3-删除。默认为1。
     */
    private $appType = 1;
    /**
     * @var string 报送时间：企业报送时间。格式:YYYYMMDDhhmmss。
     */
    private $appTime;
    /**
     * @var integer 业务状态：业务状态:1-暂存,2-申报,默认为2。
     */
    private $appStatus = 2;
    /**
     * @var string 支付企业代码：支付企业的海关注册登记编号。
     */
    private $payCode;
    /**
     * @var string 支付企业名称：支付企业在海关注册登记的名称。
     */
    private $payName;
    /**
     * @var string 支付交易编号：支付企业唯一的支付流水号。
     */
    private $payTransactionId;
    /**
     * @var string 订单编号：交易平台的订单编号，同一交易平台的订单编号应唯一。订单编号长度不能超过60位。
     */
    private $orderNo;
    /**
     * @var string 电商平台代码：电商平台的海关注册登记编号；电商平台未在海关注册登记，由电商企业发送订单的，以中国电子口岸发布的电商平台标识编号为准。
     */
    private $ebpCode;
    /**
     * @var string 电商平台名称：电商平台的海关注册登记名称；电商平台未在海关注册登记，由电商企业发送订单的，以中国电子口岸发布的电商平台名称为准。
     */
    private $ebpName;
    /**
     * @var int 支付人证件类型: 1-身份证,2-其它。限定为身份证，填写“1”。
     */
    private $payerIdType = 1;
    /**
     * @var string 支付人证件号码
     */
    private $payerIdNumber;
    /**
     * @var string 支付人姓名
     */
    private $payerName;
    /**
     * @var string 支付人电话
     */
    private $telephone;
    /**
     * @var string 支付金额：支付金额。
     */
    private $amountPaid;
    /**
     * @var string 支付币制 : 限定为人民币，填写“142”。
     */
    private $currency = 142;
    /**
     * @var string 支付时间 : 支付时间，格式:YYYYMMDDhhmmss。
     */
    private $payTime;
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

        $xml .= '<ceb:PaymentHead>' . PHP_EOL;
        $xml .= '<ceb:guid>' . $this->guid . '</ceb:guid>' . PHP_EOL;
        $xml .= '<ceb:appType>' . $this->appType . '</ceb:appType>' . PHP_EOL;
        $xml .= '<ceb:appTime>' . $this->appTime . '</ceb:appTime>' . PHP_EOL;
        $xml .= '<ceb:appStatus>' . $this->appStatus . '</ceb:appStatus>' . PHP_EOL;
        $xml .= '<ceb:payCode>' . $this->payCode . '</ceb:payCode>' . PHP_EOL;
        $xml .= '<ceb:payName>' . $this->payName . '</ceb:payName>' . PHP_EOL;
        $xml .= '<ceb:payTransactionId>' . $this->payTransactionId . '</ceb:payTransactionId>' . PHP_EOL;
        $xml .= '<ceb:orderNo>' . $this->orderNo . '</ceb:orderNo>' . PHP_EOL;
        $xml .= '<ceb:ebpCode>' . $this->ebpCode . '</ceb:ebpCode>' . PHP_EOL;
        $xml .= '<ceb:ebpName>' . $this->ebpName . '</ceb:ebpName>' . PHP_EOL;
        $xml .= '<ceb:payerIdType>' . $this->payerIdType . '</ceb:payerIdType>' . PHP_EOL;
        $xml .= '<ceb:payerIdNumber>' . $this->payerIdNumber . '</ceb:payerIdNumber>' . PHP_EOL;
        $xml .= '<ceb:payerName>' . $this->payerName . '</ceb:payerName>' . PHP_EOL;
        $xml .= '<ceb:telephone>' . $this->telephone . '</ceb:telephone>' . PHP_EOL;
        $xml .= '<ceb:amountPaid>' . $this->amountPaid . '</ceb:amountPaid>' . PHP_EOL;
        $xml .= '<ceb:currency>' . $this->currency . '</ceb:currency>' . PHP_EOL;
        $xml .= '<ceb:payTime>' . $this->payTime . '</ceb:payTime>' . PHP_EOL;
        $xml .= '<ceb:note>' . $this->note . '</ceb:note>' . PHP_EOL;
        $xml .= '</ceb:PaymentHead>' . PHP_EOL;

        return $xml;
    }
}