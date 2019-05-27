<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/22
 * Time: 17:51
 */
require_once "./vendor/autoload.php";

use haiguan\report_message\Order;
use haiguan\report_message\OrderHeader;
use haiguan\report_message\OrderList;
use haiguan\report_message\BaseTransfer;
use haiguan\Tool;

echo Tool::guid();

$order = new Order();
$orderHeader = new OrderHeader();
$baseTransfer = new BaseTransfer();

$orderListArray = Array();
$orderListArray[] = new OrderList();
$orderListArray[] = new OrderList();
$orderListArray[] = new OrderList();

$xml = $order->ToXml($orderHeader,$orderListArray,$baseTransfer);
echo $xml;