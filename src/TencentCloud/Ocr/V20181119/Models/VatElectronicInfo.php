<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Return values for an electronic invoice
 *
 * @method string getTitle() Obtain Invoice title
 * @method void setTitle(string $Title) Set Invoice title
 * @method string getNumber() Obtain Invoice number
 * @method void setNumber(string $Number) Set Invoice number
 * @method string getDate() Obtain Date of issue
 * @method void setDate(string $Date) Set Date of issue
 * @method string getPretaxAmount() Obtain Amount before tax
 * @method void setPretaxAmount(string $PretaxAmount) Set Amount before tax
 * @method string getTax() Obtain Tax
 * @method void setTax(string $Tax) Set Tax
 * @method string getTotal() Obtain Total amount (in figures)
 * @method void setTotal(string $Total) Set Total amount (in figures)
 * @method string getTotalCn() Obtain Total amount (in words)
 * @method void setTotalCn(string $TotalCn) Set Total amount (in words)
 * @method string getSeller() Obtain Seller's name
 * @method void setSeller(string $Seller) Set Seller's name
 * @method string getSellerTaxID() Obtain Seller's taxpayer identification number
 * @method void setSellerTaxID(string $SellerTaxID) Set Seller's taxpayer identification number
 * @method string getBuyer() Obtain Buyer's name
 * @method void setBuyer(string $Buyer) Set Buyer's name
 * @method string getBuyerTaxID() Obtain Buyer's taxpayer identification number
 * @method void setBuyerTaxID(string $BuyerTaxID) Set Buyer's taxpayer identification number
 * @method string getIssuer() Obtain Issuer
 * @method void setIssuer(string $Issuer) Set Issuer
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getSubTotal() Obtain Subtotal amount
 * @method void setSubTotal(string $SubTotal) Set Subtotal amount
 * @method string getSubTax() Obtain Subtotal tax
 * @method void setSubTax(string $SubTax) Set Subtotal tax
 * @method array getVatElectronicItems() Obtain Detailed items of an electronic invoice
 * @method void setVatElectronicItems(array $VatElectronicItems) Set Detailed items of an electronic invoice
 */
class VatElectronicInfo extends AbstractModel
{
    /**
     * @var string Invoice title
     */
    public $Title;

    /**
     * @var string Invoice number
     */
    public $Number;

    /**
     * @var string Date of issue
     */
    public $Date;

    /**
     * @var string Amount before tax
     */
    public $PretaxAmount;

    /**
     * @var string Tax
     */
    public $Tax;

    /**
     * @var string Total amount (in figures)
     */
    public $Total;

    /**
     * @var string Total amount (in words)
     */
    public $TotalCn;

    /**
     * @var string Seller's name
     */
    public $Seller;

    /**
     * @var string Seller's taxpayer identification number
     */
    public $SellerTaxID;

    /**
     * @var string Buyer's name
     */
    public $Buyer;

    /**
     * @var string Buyer's taxpayer identification number
     */
    public $BuyerTaxID;

    /**
     * @var string Issuer
     */
    public $Issuer;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Subtotal amount
     */
    public $SubTotal;

    /**
     * @var string Subtotal tax
     */
    public $SubTax;

    /**
     * @var array Detailed items of an electronic invoice
     */
    public $VatElectronicItems;

    /**
     * @param string $Title Invoice title
     * @param string $Number Invoice number
     * @param string $Date Date of issue
     * @param string $PretaxAmount Amount before tax
     * @param string $Tax Tax
     * @param string $Total Total amount (in figures)
     * @param string $TotalCn Total amount (in words)
     * @param string $Seller Seller's name
     * @param string $SellerTaxID Seller's taxpayer identification number
     * @param string $Buyer Buyer's name
     * @param string $BuyerTaxID Buyer's taxpayer identification number
     * @param string $Issuer Issuer
     * @param string $Remark Remarks
     * @param string $SubTotal Subtotal amount
     * @param string $SubTax Subtotal tax
     * @param array $VatElectronicItems Detailed items of an electronic invoice
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("PretaxAmount",$param) and $param["PretaxAmount"] !== null) {
            $this->PretaxAmount = $param["PretaxAmount"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TotalCn",$param) and $param["TotalCn"] !== null) {
            $this->TotalCn = $param["TotalCn"];
        }

        if (array_key_exists("Seller",$param) and $param["Seller"] !== null) {
            $this->Seller = $param["Seller"];
        }

        if (array_key_exists("SellerTaxID",$param) and $param["SellerTaxID"] !== null) {
            $this->SellerTaxID = $param["SellerTaxID"];
        }

        if (array_key_exists("Buyer",$param) and $param["Buyer"] !== null) {
            $this->Buyer = $param["Buyer"];
        }

        if (array_key_exists("BuyerTaxID",$param) and $param["BuyerTaxID"] !== null) {
            $this->BuyerTaxID = $param["BuyerTaxID"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SubTotal",$param) and $param["SubTotal"] !== null) {
            $this->SubTotal = $param["SubTotal"];
        }

        if (array_key_exists("SubTax",$param) and $param["SubTax"] !== null) {
            $this->SubTax = $param["SubTax"];
        }

        if (array_key_exists("VatElectronicItems",$param) and $param["VatElectronicItems"] !== null) {
            $this->VatElectronicItems = [];
            foreach ($param["VatElectronicItems"] as $key => $value){
                $obj = new VatElectronicItemInfo();
                $obj->deserialize($value);
                array_push($this->VatElectronicItems, $obj);
            }
        }
    }
}
