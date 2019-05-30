<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/29
 * Time: 19:12
 */

namespace haiguan\report_message;


class Inventory
{
    public function __construct()
    {

    }

    public function ToXml($inventoryHead, Array $inventoryList_array, $BaseTransfer)
    {
        $xml = '';

        $xml .= '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<ceb:CEB621Message guid="' . $inventoryHead->guid . '" version="1.0"  xmlns:ceb="http://www.chinaport.gov.cn/ceb" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">' . PHP_EOL;
        $xml .= '    <ceb:Inventory>' . PHP_EOL;
        $xml .= $inventoryHead->ToXml() . PHP_EOL;
        foreach ($inventoryList_array as $item) {
            $xml .= $item->ToXml();
        }
        $xml .= '    </ceb:Inventory>' . PHP_EOL;
        $xml .= $BaseTransfer->ToXml();
        $xml .= '</ceb:CEB621Message>' . PHP_EOL;

        return $xml;
    }
}