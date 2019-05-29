<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/28
 * Time: 14:08
 */

namespace haiguan;


class PayExchangeInfoHead
{
    /**
     * @var string guid 系统唯一序号 企业系统生成36位唯一序号（英文字母大写）
     */
    private $guid;
    /**
     * @var string 原始请求:跨境电商平台企业向支付企业发送的原始信息
     */
    private $initalRequest;
    /**
     * @var string 原始响应:支付企业向跨境电商平台企业反馈的原始信息
     */
    private $initalResponse;
    /**
     * @var string 电商平台代码:电商平台的海关注册登记编号
     */
    private $ebpCode;
    /**
     * @var string 支付企业代码:支付企业的海关注册登记编号
     */
    private $payCode;
    /**
     * @var string 交易流水号:交易唯一编号（可在央行认可的机构验证）
     */
    private $payTransactionId;
    /**
     * @var string 交易金额:实际交易金额
     */
    private $totalAmount;
    /**
     * @var string 币制:实际交易币制
     */
    private $currency = 142;
    /**
     * @var string 验核机构:1-银联 2-网联 3-其他
     */
    private $verDept;
    /**
     * @var string 支付类型:用户支付的类型。1-APP 2-PC 3-扫码 4-其他
     */
    private $payType;
    /**
     * @var string 交易成功时间:交易支付时间。
     */
    private $tradingTime;
    /**
     * @var string 备注
     */
    private $note;

    public function __construct($ebpCode, $payCode, $payTransactionId, $totalAmount, $payType, $tradingTime, $initalRequest, $initalResponse)
    {
        $this->guid = Tool::guid();
        $this->verDept = 1;
        $this->currency = 142;

        $this->ebpCode = $ebpCode;
        $this->payCode = $payCode;
        $this->payTransactionId = $payTransactionId;
        $this->totalAmount = $totalAmount;
        $this->payType = $payType;
        $this->tradingTime = $tradingTime;
        $this->initalRequest = $initalRequest;
        $this->initalResponse = $initalResponse;

        $this->note = "";
    }

    public function getPayExchangeInfoHeadStr()
    {
        return json_encode($this);
    }
}