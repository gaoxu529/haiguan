<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/29
 * Time: 19:16
 */

namespace haiguan\report_message;


class InventoryList
{
    public $gnum;
    public $itemRecordNo;
    public $itemNo;
    public $itemName;
    public $gcode;
    public $gname;
    public $gmodel;
    public $barCode;
    public $country;
    public $currency;
    public $qty;
    public $qty1;
    public $qty2;
    public $unit;
    public $unit1;
    public $unit2;
    public $price;
    public $totalPrice;
    public $note;


    public function ToXml()
    {

        $xml = '';
        $xml .= '<ceb:InventoryList>' . PHP_EOL;
        $xml .= '<ceb:gnum>' . $this->gnum . '<ceb:gnum>' . PHP_EOL;
        $xml .= '<ceb:itemRecordNo>' . $this->itemRecordNo . '<ceb:itemRecordNo>' . PHP_EOL;
        $xml .= '<ceb:itemNo>' . $this->itemNo . '<ceb:itemNo>' . PHP_EOL;
        $xml .= '<ceb:itemName>' . $this->itemName . '<ceb:itemName>' . PHP_EOL;
        $xml .= '<ceb:gcode>' . $this->gcode . '<ceb:gcode>' . PHP_EOL;
        $xml .= '<ceb:gname>' . $this->gname . '<ceb:gname>' . PHP_EOL;
        $xml .= '<ceb:gmodel>' . $this->gmodel . '<ceb:gmodel>' . PHP_EOL;
        $xml .= '<ceb:barCode>' . $this->barCode . '<ceb:barCode>' . PHP_EOL;
        $xml .= '<ceb:country>' . $this->country . '<ceb:country>' . PHP_EOL;
        $xml .= '<ceb:currency>' . $this->currency . '<ceb:currency>' . PHP_EOL;
        $xml .= '<ceb:qty>' . $this->qty . '<ceb:qty>' . PHP_EOL;
        $xml .= '<ceb:qty1>' . $this->qty1 . '<ceb:qty1>' . PHP_EOL;
        $xml .= '<ceb:qty2>' . $this->qty2 . '<ceb:qty2>' . PHP_EOL;
        $xml .= '<ceb:unit>' . $this->unit . '<ceb:unit>' . PHP_EOL;
        $xml .= '<ceb:unit1>' . $this->unit1 . '<ceb:unit1>' . PHP_EOL;
        $xml .= '<ceb:unit2>' . $this->unit2 . '<ceb:unit2>' . PHP_EOL;
        $xml .= '<ceb:price>' . $this->price . '<ceb:price>' . PHP_EOL;
        $xml .= '<ceb:totalPrice>' . $this->totalPrice . '<ceb:totalPrice>' . PHP_EOL;
        $xml .= '<ceb:note>' . $this->note . '<ceb:note>' . PHP_EOL;

        $xml .= '</ceb:InventoryList>' . PHP_EOL;

        return $xml;
    }

}