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

//echo Tool::guid();
//
//$order = new Order();
//$orderHeader = new OrderHeader();
//$baseTransfer = new BaseTransfer();
//
//$orderListArray = Array();
//$orderListArray[] = new OrderList();
//$orderListArray[] = new OrderList();
//$orderListArray[] = new OrderList();
//
//$xml = $order->ToXml($orderHeader,$orderListArray,$baseTransfer);
//echo $xml;

$inventoryHead = new \haiguan\report_message\InventoryHead();
$inventoryListArray = [];
$inventoryList1 = new \haiguan\report_message\InventoryList();
$inventoryList2 = new \haiguan\report_message\InventoryList();

$inventoryListArray[] = $inventoryList1;
$inventoryListArray[] = $inventoryList2;

$baseTransfer = new BaseTransfer();

$inventory = new \haiguan\report_message\Inventory();

$xml = $inventory->ToXml($inventoryHead,$inventoryListArray,$baseTransfer);

echo $xml;

