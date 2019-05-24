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
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<ceb:CEB311Message guid="' . $OrderHead->guid . '" version="1.0"  xmlns:ceb="http://www.chinaport.gov.cn/ceb" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">' . PHP_EOL;
        $xml .= '<ceb:Order>' . PHP_EOL;
        $xml .= $OrderHead->ToXml();
        foreach ($OrderList_Array as $item) {
            $xml .= $item->ToXml();
        }
        $xml .= '</ceb:Order>' . PHP_EOL;
        $xml .= $BaseTransfer->ToXml();
        $xml .= '</ceb:CEB311Message>' . PHP_EOL;

        return $xml;
    }
}