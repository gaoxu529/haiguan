<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/22
 * Time: 17:43
 */

namespace haiguan\report_message;

class OrderList
{
    /**
     * @$gnum  从1开始的递增序号。
     */
    public $gnum = 0;
    /**
     * @$gnum  （非必填）电商企业自定义的商品货号（SKU）。
     */
    public $itemNo = "00000000";
    /**
     * @$gnum  交易平台销售商品的中文名称。。
     */
    public $itemName = "00000000";
    /**
     * @$gnum  （非必填）交易平台销售商品的描述信息。。
     */
    public $itemDescribe = "";
    /**
     * @$gnum  （非必填）国际通用的商品条形码，一般由前缀部分、制造厂商代码、商品代码和校验码组成。。
     */
    public $barCode;
    /**
     * @$gnum  填写海关标准的参数代码，参照《JGS-20 海关业务代码集》- 计量单位代码。。
     */
    public $unit = "001";
    /**
     * @$gnum  商品实际数量。。
     */
    public $qty = 0;
    /**
     * @$gnum  商品单价。赠品单价填写为“0”。
     */
    public $price = 0;
    /**
     * @$gnum  商品总价，等于单价乘以数量。
     */
    public $totalPrice = 0;
    /**
     * @$gnum  限定为人民币，填写“142”。
     */
    public $currency = 142;
    /**
     * @$gnum  原产国：填写海关标准的参数代码，参照《JGS-20 海关业务代码集》-国家（地区）代码表。
     */
    public $country = "101";
    /**
     * @$gnum  备注：（非必填）促销活动，商品单价偏离市场价格的，可以在此说明。
     */
    public $note = "";

    public function __construct()
    {

    }

    public function ToXml()
    {
        $xml = '';
        $xml .= '<ceb:OrderList>' . PHP_EOL;
        $xml .= '	<ceb:gnum>' . $this->gnum . '</ceb:gnum>' . PHP_EOL;
        $xml .= '	<ceb:itemNo>' . $this->itemNo . '</ceb:itemNo>' . PHP_EOL;
        $xml .= '	<ceb:itemName>' . $this->itemName . '</ceb:itemName>' . PHP_EOL;
        $xml .= '	<ceb:itemDescribe>' . $this->itemDescribe . '</ceb:itemDescribe>' . PHP_EOL;
        $xml .= '	<ceb:barCode>' . $this->barCode . '</ceb:barCode>' . PHP_EOL;
        $xml .= '	<ceb:unit>' . $this->unit . '</ceb:unit>' . PHP_EOL;
        $xml .= '	<ceb:qty>' . $this->qty . '</ceb:qty>' . PHP_EOL;
        $xml .= '	<ceb:price>' . $this->price . '</ceb:price>' . PHP_EOL;
        $xml .= '	<ceb:totalPrice>' . $this->totalPrice . '</ceb:totalPrice>' . PHP_EOL;
        $xml .= '	<ceb:currency>' . $this->currency . '</ceb:currency>' . PHP_EOL;
        $xml .= '	<ceb:country>' . $this->country . '</ceb:country>' . PHP_EOL;
        $xml .= '	<ceb:note>' . $this->note . '</ceb:note>' . PHP_EOL;
        $xml .= '</ceb:OrderList>' . PHP_EOL;


        return $xml;
    }

}