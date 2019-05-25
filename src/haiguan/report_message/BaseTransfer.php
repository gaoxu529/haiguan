<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/23
 * Time: 17:50
 */

namespace haiguan\report_message;

/**
 * Class BaseTransfer 基础报文传输实体节点
 * @package haiguan\report_message
 */
class BaseTransfer
{
    /**
     * @$copCode  传输企业代码：报文传输的企业代码（需要与接入客户端的企业身份一致）
     */
    private $copCode = "00000000";
    /**
     * @$copName  传输企业名称：报文传输的企业名称
     */
    private $copName = "00000000";
    /**
     * @$dxpMode  报文传输模式 ：默认为DXP；指中国电子口岸数据交换平台。
     */
    private $dxpMode = "DXP";
    /**
     * @$dxpId  报文传输编号：向中国电子口岸数据中心申请数据交换平台的用户编号
     */
    private $dxpId = "00000000";
    /**
     * @$note  （非必填）备注
     */
    private $note;

    public function __construct()
    {
    }

    public function ToXml()
    {
        $xml = '';
        $xml .= '<ceb:BaseTransfer>' . PHP_EOL;
        $xml .= '<ceb:copCode>' . $this->copCode . '</ceb:copCode>' . PHP_EOL;
        $xml .= '<ceb:copName>' . $this->copName . '</ceb:copName>' . PHP_EOL;
        $xml .= '<ceb:dxpMode>' . $this->dxpMode . '</ceb:dxpMode>' . PHP_EOL;
        $xml .= '<ceb:dxpId>' . $this->dxpId . '</ceb:dxpId>' . PHP_EOL;
        $xml .= '<ceb:note>' . $this->note . '</ceb:note>' . PHP_EOL;
        $xml .= '</ceb:BaseTransfer>' . PHP_EOL;

        return $xml;
    }

}