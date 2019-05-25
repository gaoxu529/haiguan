<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/22
 * Time: 17:43
 */

namespace haiguan\report_message;

class Order
{
    public function __construct()
    {

    }

    public function ToXml($OrderHead, $OrderList_Array, $BaseTransfer)
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