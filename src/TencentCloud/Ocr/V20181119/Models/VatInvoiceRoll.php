<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * General VAT invoice (roll)
 *
 * @method string getTitle() Obtain Invoice title
 * @method void setTitle(string $Title) Set Invoice title
 * @method string getCode() Obtain Invoice code
 * @method void setCode(string $Code) Set Invoice code
 * @method string getNumber() Obtain Invoice number
 * @method void setNumber(string $Number) Set Invoice number
 * @method string getNumberConfirm() Obtain Machine-printed invoice number
 * @method void setNumberConfirm(string $NumberConfirm) Set Machine-printed invoice number
 * @method string getDate() Obtain Date of issue
 * @method void setDate(string $Date) Set Date of issue
 * @method string getCheckCode() Obtain Check code
 * @method void setCheckCode(string $CheckCode) Set Check code
 * @method string getSeller() Obtain Seller's name
 * @method void setSeller(string $Seller) Set Seller's name
 * @method string getSellerTaxID() Obtain Seller's taxpayer identification number
 * @method void setSellerTaxID(string $SellerTaxID) Set Seller's taxpayer identification number
 * @method string getBuyer() Obtain Buyer's name
 * @method void setBuyer(string $Buyer) Set Buyer's name
 * @method string getBuyerTaxID() Obtain Buyer's taxpayer identification number
 * @method void setBuyerTaxID(string $BuyerTaxID) Set Buyer's taxpayer identification number
 * @method string getCategory() Obtain Category
 * @method void setCategory(string $Category) Set Category
 * @method string getTotal() Obtain Total amount (in figures)
 * @method void setTotal(string $Total) Set Total amount (in figures)
 * @method string getTotalCn() Obtain Total amount (in words)
 * @method void setTotalCn(string $TotalCn) Set Total amount (in words)
 * @method string getKind() Obtain Invoice type
 * @method void setKind(string $Kind) Set Invoice type
 * @method string getProvince() Obtain Province
 * @method void setProvince(string $Province) Set Province
 * @method string getCity() Obtain City
 * @method void setCity(string $City) Set City
 * @method integer getCompanySealMark() Obtain Whether there is a company seal (0: No, 1: Yes)
 * @method void setCompanySealMark(integer $CompanySealMark) Set Whether there is a company seal (0: No, 1: Yes)
 * @method integer getQRCodeMark() Obtain Whether there is a QR code (0: No, 1: Yes)
 * @method void setQRCodeMark(integer $QRCodeMark) Set Whether there is a QR code (0: No, 1: Yes)
 * @method string getServiceName() Obtain Service type
 * @method void setServiceName(string $ServiceName) Set Service type
 * @method string getCompanySealContent() Obtain Company seal content
 * @method void setCompanySealContent(string $CompanySealContent) Set Company seal content
 * @method string getTaxSealContent() Obtain Tax authority seal content
 * @method void setTaxSealContent(string $TaxSealContent) Set Tax authority seal content
 * @method array getVatRollItems() Obtain Items
 * @method void setVatRollItems(array $VatRollItems) Set Items
 */
class VatInvoiceRoll extends AbstractModel
{
    /**
     * @var string Invoice title
     */
    public $Title;

    /**
     * @var string Invoice code
     */
    public $Code;

    /**
     * @var string Invoice number
     */
    public $Number;

    /**
     * @var string Machine-printed invoice number
     */
    public $NumberConfirm;

    /**
     * @var string Date of issue
     */
    public $Date;

    /**
     * @var string Check code
     */
    public $CheckCode;

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
     * @var string Category
     */
    public $Category;

    /**
     * @var string Total amount (in figures)
     */
    public $Total;

    /**
     * @var string Total amount (in words)
     */
    public $TotalCn;

    /**
     * @var string Invoice type
     */
    public $Kind;

    /**
     * @var string Province
     */
    public $Province;

    /**
     * @var string City
     */
    public $City;

    /**
     * @var integer Whether there is a company seal (0: No, 1: Yes)
     */
    public $CompanySealMark;

    /**
     * @var integer Whether there is a QR code (0: No, 1: Yes)
     */
    public $QRCodeMark;

    /**
     * @var string Service type
     */
    public $ServiceName;

    /**
     * @var string Company seal content
     */
    public $CompanySealContent;

    /**
     * @var string Tax authority seal content
     */
    public $TaxSealContent;

    /**
     * @var array Items
     */
    public $VatRollItems;

    /**
     * @param string $Title Invoice title
     * @param string $Code Invoice code
     * @param string $Number Invoice number
     * @param string $NumberConfirm Machine-printed invoice number
     * @param string $Date Date of issue
     * @param string $CheckCode Check code
     * @param string $Seller Seller's name
     * @param string $SellerTaxID Seller's taxpayer identification number
     * @param string $Buyer Buyer's name
     * @param string $BuyerTaxID Buyer's taxpayer identification number
     * @param string $Category Category
     * @param string $Total Total amount (in figures)
     * @param string $TotalCn Total amount (in words)
     * @param string $Kind Invoice type
     * @param string $Province Province
     * @param string $City City
     * @param integer $CompanySealMark Whether there is a company seal (0: No, 1: Yes)
     * @param integer $QRCodeMark Whether there is a QR code (0: No, 1: Yes)
     * @param string $ServiceName Service type
     * @param string $CompanySealContent Company seal content
     * @param string $TaxSealContent Tax authority seal content
     * @param array $VatRollItems Items
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

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("NumberConfirm",$param) and $param["NumberConfirm"] !== null) {
            $this->NumberConfirm = $param["NumberConfirm"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
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

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TotalCn",$param) and $param["TotalCn"] !== null) {
            $this->TotalCn = $param["TotalCn"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("CompanySealMark",$param) and $param["CompanySealMark"] !== null) {
            $this->CompanySealMark = $param["CompanySealMark"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("CompanySealContent",$param) and $param["CompanySealContent"] !== null) {
            $this->CompanySealContent = $param["CompanySealContent"];
        }

        if (array_key_exists("TaxSealContent",$param) and $param["TaxSealContent"] !== null) {
            $this->TaxSealContent = $param["TaxSealContent"];
        }

        if (array_key_exists("VatRollItems",$param) and $param["VatRollItems"] !== null) {
            $this->VatRollItems = [];
            foreach ($param["VatRollItems"] as $key => $value){
                $obj = new VatRollItem();
                $obj->deserialize($value);
                array_push($this->VatRollItems, $obj);
            }
        }
    }
}
