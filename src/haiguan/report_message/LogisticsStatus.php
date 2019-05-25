<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/24
 * Time: 14:15
 */

namespace haiguan\report_message;


use haiguan\Tool;

class LogisticsStatus
{

    /**
     * 系统唯一序号
     */
    public $guid;
    /**
     * @var  string 报送类型
     */
    private $appType;
    /**
     * @var  string 报送时间
     */
    private $appTime;
    /**
     * @var  string 业务状态
     */
    private $appStatus;
    /**
     * @var  string 物流企业代码
     */
    private $logisticsCode;
    /**
     * @var  string 物流企业名称
     */
    private $logisticsName;
    /**
     * @var  string 物流运单编号
     */
    private $logisticsNo;
    /**
     * @var  string 物流运单状态
     */
    private $logisticsStatus;
    /**
     * @var  string 物流状态时间
     */
    private $logisticsTime;
    /**
     * @var  string 备注
     */
    private $note;


    public function __construct()
    {
        $this->guid = Tool::guid();
    }

    private function GetXml()
    {
        $xml = '';
        $xml .= '<ceb:LogisticsStatus>' . PHP_EOL;
        $xml .= '<ceb:guid>HBGC1CFD-EDED-46B1-946C-B8022E42FC94</ceb:guid>' . PHP_EOL;
        $xml .= '<ceb:appType>1</ceb:appType>' . PHP_EOL;
        $xml .= '<ceb:appTime>20150315153555</ceb:appTime>' . PHP_EOL;
        $xml .= '<ceb:appStatus>2</ceb:appStatus>' . PHP_EOL;
        $xml .= '<ceb:logisticsCode>1101180326</ceb:logisticsCode>' . PHP_EOL;
        $xml .= '<ceb:logisticsName>测试物流企业</ceb:logisticsName>' . PHP_EOL;
        $xml .= '<ceb:logisticsNo>L201603081138007</ceb:logisticsNo>' . PHP_EOL;
        $xml .= '<ceb:logisticsStatus>R</ceb:logisticsStatus>' . PHP_EOL;
        $xml .= '<ceb:logisticsTime>20150308164611</ceb:logisticsTime>' . PHP_EOL;
        $xml .= '<ceb:note></ceb:note>' . PHP_EOL;
        $xml .= '</ceb:LogisticsStatus>' . PHP_EOL;
        return $xml;
    }


    public function ToXml($BaseTransfer)
    {
        $xml = '';

        $xml .= '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<ceb:CEB513Message guid="' . $this->guid . '" version="1.0"  xmlns:ceb="http://www.chinaport.gov.cn/ceb" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">' . PHP_EOL;
        $xml .= $this->GetXml();
        $xml .= $BaseTransfer->ToXml();
        $xml .= '</ceb:CEB513Message>' . PHP_EOL;


        return $xml;
    }
}