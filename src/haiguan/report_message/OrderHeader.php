<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/22
 * Time: 17:43
 */

namespace haiguan\report_message;

use haiguan\Tool;

class Order
{

    public $guid;

    public function __construct()
    {
        $this->guid = Tool::guid();
    }


    public function GetOrderHeaderMessage()
    {
        return '<ceb:OrderHead>
            <ceb:guid>' . $this->guid . '</ceb:guid>
            <ceb:appType>1</ceb:appType>
            <ceb:appTime>20160308112701</ceb:appTime>
            <ceb:appStatus>2</ceb:appStatus>
            <ceb:orderType>I</ceb:orderType>
            <ceb:orderNo>order20160321116421002</ceb:orderNo>
            <ceb:ebpCode>1105910159</ceb:ebpCode>
            <ceb:ebpName>东方物通科技(北京)有限公司</ceb:ebpName>
            <ceb:ebcCode>1105910159</ceb:ebcCode>
            <ceb:ebcName>东方物通科技(北京)有限公司</ceb:ebcName>
            <ceb:goodsValue>14000</ceb:goodsValue>
            <ceb:freight>5000</ceb:freight>
            <ceb:discount>0</ceb:discount>
            <ceb:taxTotal>50</ceb:taxTotal>
            <ceb:acturalPaid>19050</ceb:acturalPaid>
            <ceb:currency>142</ceb:currency>
            <ceb:buyerRegNo>ID20160001</ceb:buyerRegNo>
            <ceb:buyerName>aa</ceb:buyerName>
            <ceb:buyerIdType>1</ceb:buyerIdType>
            <ceb:buyerIdNumber>130681136250023332</ceb:buyerIdNumber>
            <ceb:payCode>1105910159</ceb:payCode>
            <ceb:payName>东方物通科技(北京)有限公司</ceb:payName>
            <ceb:payTransactionId>20160001634226001</ceb:payTransactionId>
            <ceb:batchNumbers>20160317</ceb:batchNumbers>
            <ceb:consignee>焦洪宇</ceb:consignee>
            <ceb:consigneeTelephone>13522652231</ceb:consigneeTelephone>
            <ceb:consigneeAddress>北京市海淀区</ceb:consigneeAddress>
            <ceb:consigneeDistrict>072750</ceb:consigneeDistrict>
            <ceb:note>test</ceb:note>
        </ceb:OrderHead>';
    }

}