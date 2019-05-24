<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/24
 * Time: 14:15
 */

namespace haiguan\report_message;


class Payment
{

    public function __construct()
    {

    }

    public function ToXml($PaymentHead, $BaseTransfer)
    {
        $xml = '';
        $xml .= '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<ceb:CEB411Message guid="' . $PaymentHead->guid . '" version="1.0"  xmlns:ceb="http://www.chinaport.gov.cn/ceb" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">' . PHP_EOL;
        $xml .= '    <ceb:Payment>' . PHP_EOL;
        $xml .= $PaymentHead->ToXml();
        $xml .= '    </ceb:Payment>' . PHP_EOL;
        $xml .= $BaseTransfer->ToXml();
        $xml .= '</ceb:CEB411Message>' . PHP_EOL;
        return $xml;
    }
}