<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/24
 * Time: 14:15
 */

namespace haiguan\report_message;


class Logistics
{

    public function __construct()
    {

    }

    public function ToXml($LogisticsHead, $BaseTransfer)
    {
        $xml = '';
        $xml .= '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<ceb:CEB511Message guid="4CDE1CFD-EDED-46B1-946C-B8022E42FC94" version="1.0"  xmlns:ceb="http://www.chinaport.gov.cn/ceb" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">' . PHP_EOL;
        $xml .= '    <ceb:Logistics>' . PHP_EOL;
        $xml .= $LogisticsHead->ToXml();
        $xml .= '    </ceb:Logistics>' . PHP_EOL;
        $xml .= $BaseTransfer->ToXml();
        $xml .= '</ceb:CEB511Message>' . PHP_EOL;

        return $xml;
    }
}