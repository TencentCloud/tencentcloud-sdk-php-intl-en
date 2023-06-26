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
 * General machine-printed invoice
 *
 * @method string getTitle() Obtain Invoice title
 * @method void setTitle(string $Title) Set Invoice title
 * @method integer getQRCodeMark() Obtain Whether there is a QR code (0: No, 1: Yes)
 * @method void setQRCodeMark(integer $QRCodeMark) Set Whether there is a QR code (0: No, 1: Yes)
 * @method string getCode() Obtain Invoice code
 * @method void setCode(string $Code) Set Invoice code
 * @method string getNumber() Obtain Invoice number
 * @method void setNumber(string $Number) Set Invoice number
 * @method string getDate() Obtain Date of issue
 * @method void setDate(string $Date) Set Date of issue
 * @method string getTime() Obtain Time
 * @method void setTime(string $Time) Set Time
 * @method string getCheckCode() Obtain Check code
 * @method void setCheckCode(string $CheckCode) Set Check code
 * @method string getCiphertext() Obtain Ciphertext
 * @method void setCiphertext(string $Ciphertext) Set Ciphertext
 * @method string getCategory() Obtain Category
 * @method void setCategory(string $Category) Set Category
 * @method string getPretaxAmount() Obtain Amount before tax
 * @method void setPretaxAmount(string $PretaxAmount) Set Amount before tax
 * @method string getTotal() Obtain Total amount (in figures)
 * @method void setTotal(string $Total) Set Total amount (in figures)
 * @method string getTotalCn() Obtain Total amount (in words)
 * @method void setTotalCn(string $TotalCn) Set Total amount (in words)
 * @method string getTax() Obtain Tax
 * @method void setTax(string $Tax) Set Tax
 * @method string getIndustryClass() Obtain Industry
 * @method void setIndustryClass(string $IndustryClass) Set Industry
 * @method string getSeller() Obtain Seller's name
 * @method void setSeller(string $Seller) Set Seller's name
 * @method string getSellerTaxID() Obtain Seller's taxpayer identification number
 * @method void setSellerTaxID(string $SellerTaxID) Set Seller's taxpayer identification number
 * @method string getSellerAddrTel() Obtain Seller's address and phone number
 * @method void setSellerAddrTel(string $SellerAddrTel) Set Seller's address and phone number
 * @method string getSellerBankAccount() Obtain Seller's bank account number
 * @method void setSellerBankAccount(string $SellerBankAccount) Set Seller's bank account number
 * @method string getBuyer() Obtain Buyer's name
 * @method void setBuyer(string $Buyer) Set Buyer's name
 * @method string getBuyerTaxID() Obtain Buyer's taxpayer identification number
 * @method void setBuyerTaxID(string $BuyerTaxID) Set Buyer's taxpayer identification number
 * @method string getBuyerAddrTel() Obtain Buyer's address and phone number
 * @method void setBuyerAddrTel(string $BuyerAddrTel) Set Buyer's address and phone number
 * @method string getBuyerBankAccount() Obtain Buyer's bank account number
 * @method void setBuyerBankAccount(string $BuyerBankAccount) Set Buyer's bank account number
 * @method string getKind() Obtain Invoice type
 * @method void setKind(string $Kind) Set Invoice type
 * @method string getProvince() Obtain Province
 * @method void setProvince(string $Province) Set Province
 * @method string getCity() Obtain City
 * @method void setCity(string $City) Set City
 * @method integer getCompanySealMark() Obtain Whether there is a company seal (0: No, 1: Yes)
 * @method void setCompanySealMark(integer $CompanySealMark) Set Whether there is a company seal (0: No, 1: Yes)
 * @method integer getElectronicMark() Obtain Whether it is a general machine-printed invoice issued by Zhejiang or Guangdong province (0: No, 1: Yes)
 * @method void setElectronicMark(integer $ElectronicMark) Set Whether it is a general machine-printed invoice issued by Zhejiang or Guangdong province (0: No, 1: Yes)
 * @method string getIssuer() Obtain Issuer
 * @method void setIssuer(string $Issuer) Set Issuer
 * @method string getReceiptor() Obtain Payee
 * @method void setReceiptor(string $Receiptor) Set Payee
 * @method string getReviewer() Obtain Reviewer
 * @method void setReviewer(string $Reviewer) Set Reviewer
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getPaymentInfo() Obtain Operator's payment information
 * @method void setPaymentInfo(string $PaymentInfo) Set Operator's payment information
 * @method string getTicketPickupUser() Obtain Operator-assigned invoice pickup user
 * @method void setTicketPickupUser(string $TicketPickupUser) Set Operator-assigned invoice pickup user
 * @method string getMerchantNumber() Obtain Operator's merchant number
 * @method void setMerchantNumber(string $MerchantNumber) Set Operator's merchant number
 * @method string getOrderNumber() Obtain Operator's order number
 * @method void setOrderNumber(string $OrderNumber) Set Operator's order number
 * @method array getGeneralMachineItems() Obtain Items
 * @method void setGeneralMachineItems(array $GeneralMachineItems) Set Items
 */
class MachinePrintedInvoice extends AbstractModel
{
    /**
     * @var string Invoice title
     */
    public $Title;

    /**
     * @var integer Whether there is a QR code (0: No, 1: Yes)
     */
    public $QRCodeMark;

    /**
     * @var string Invoice code
     */
    public $Code;

    /**
     * @var string Invoice number
     */
    public $Number;

    /**
     * @var string Date of issue
     */
    public $Date;

    /**
     * @var string Time
     */
    public $Time;

    /**
     * @var string Check code
     */
    public $CheckCode;

    /**
     * @var string Ciphertext
     */
    public $Ciphertext;

    /**
     * @var string Category
     */
    public $Category;

    /**
     * @var string Amount before tax
     */
    public $PretaxAmount;

    /**
     * @var string Total amount (in figures)
     */
    public $Total;

    /**
     * @var string Total amount (in words)
     */
    public $TotalCn;

    /**
     * @var string Tax
     */
    public $Tax;

    /**
     * @var string Industry
     */
    public $IndustryClass;

    /**
     * @var string Seller's name
     */
    public $Seller;

    /**
     * @var string Seller's taxpayer identification number
     */
    public $SellerTaxID;

    /**
     * @var string Seller's address and phone number
     */
    public $SellerAddrTel;

    /**
     * @var string Seller's bank account number
     */
    public $SellerBankAccount;

    /**
     * @var string Buyer's name
     */
    public $Buyer;

    /**
     * @var string Buyer's taxpayer identification number
     */
    public $BuyerTaxID;

    /**
     * @var string Buyer's address and phone number
     */
    public $BuyerAddrTel;

    /**
     * @var string Buyer's bank account number
     */
    public $BuyerBankAccount;

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
     * @var integer Whether it is a general machine-printed invoice issued by Zhejiang or Guangdong province (0: No, 1: Yes)
     */
    public $ElectronicMark;

    /**
     * @var string Issuer
     */
    public $Issuer;

    /**
     * @var string Payee
     */
    public $Receiptor;

    /**
     * @var string Reviewer
     */
    public $Reviewer;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Operator's payment information
     */
    public $PaymentInfo;

    /**
     * @var string Operator-assigned invoice pickup user
     */
    public $TicketPickupUser;

    /**
     * @var string Operator's merchant number
     */
    public $MerchantNumber;

    /**
     * @var string Operator's order number
     */
    public $OrderNumber;

    /**
     * @var array Items
     */
    public $GeneralMachineItems;

    /**
     * @param string $Title Invoice title
     * @param integer $QRCodeMark Whether there is a QR code (0: No, 1: Yes)
     * @param string $Code Invoice code
     * @param string $Number Invoice number
     * @param string $Date Date of issue
     * @param string $Time Time
     * @param string $CheckCode Check code
     * @param string $Ciphertext Ciphertext
     * @param string $Category Category
     * @param string $PretaxAmount Amount before tax
     * @param string $Total Total amount (in figures)
     * @param string $TotalCn Total amount (in words)
     * @param string $Tax Tax
     * @param string $IndustryClass Industry
     * @param string $Seller Seller's name
     * @param string $SellerTaxID Seller's taxpayer identification number
     * @param string $SellerAddrTel Seller's address and phone number
     * @param string $SellerBankAccount Seller's bank account number
     * @param string $Buyer Buyer's name
     * @param string $BuyerTaxID Buyer's taxpayer identification number
     * @param string $BuyerAddrTel Buyer's address and phone number
     * @param string $BuyerBankAccount Buyer's bank account number
     * @param string $Kind Invoice type
     * @param string $Province Province
     * @param string $City City
     * @param integer $CompanySealMark Whether there is a company seal (0: No, 1: Yes)
     * @param integer $ElectronicMark Whether it is a general machine-printed invoice issued by Zhejiang or Guangdong province (0: No, 1: Yes)
     * @param string $Issuer Issuer
     * @param string $Receiptor Payee
     * @param string $Reviewer Reviewer
     * @param string $Remark Remarks
     * @param string $PaymentInfo Operator's payment information
     * @param string $TicketPickupUser Operator-assigned invoice pickup user
     * @param string $MerchantNumber Operator's merchant number
     * @param string $OrderNumber Operator's order number
     * @param array $GeneralMachineItems Items
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

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("Ciphertext",$param) and $param["Ciphertext"] !== null) {
            $this->Ciphertext = $param["Ciphertext"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("PretaxAmount",$param) and $param["PretaxAmount"] !== null) {
            $this->PretaxAmount = $param["PretaxAmount"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TotalCn",$param) and $param["TotalCn"] !== null) {
            $this->TotalCn = $param["TotalCn"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("IndustryClass",$param) and $param["IndustryClass"] !== null) {
            $this->IndustryClass = $param["IndustryClass"];
        }

        if (array_key_exists("Seller",$param) and $param["Seller"] !== null) {
            $this->Seller = $param["Seller"];
        }

        if (array_key_exists("SellerTaxID",$param) and $param["SellerTaxID"] !== null) {
            $this->SellerTaxID = $param["SellerTaxID"];
        }

        if (array_key_exists("SellerAddrTel",$param) and $param["SellerAddrTel"] !== null) {
            $this->SellerAddrTel = $param["SellerAddrTel"];
        }

        if (array_key_exists("SellerBankAccount",$param) and $param["SellerBankAccount"] !== null) {
            $this->SellerBankAccount = $param["SellerBankAccount"];
        }

        if (array_key_exists("Buyer",$param) and $param["Buyer"] !== null) {
            $this->Buyer = $param["Buyer"];
        }

        if (array_key_exists("BuyerTaxID",$param) and $param["BuyerTaxID"] !== null) {
            $this->BuyerTaxID = $param["BuyerTaxID"];
        }

        if (array_key_exists("BuyerAddrTel",$param) and $param["BuyerAddrTel"] !== null) {
            $this->BuyerAddrTel = $param["BuyerAddrTel"];
        }

        if (array_key_exists("BuyerBankAccount",$param) and $param["BuyerBankAccount"] !== null) {
            $this->BuyerBankAccount = $param["BuyerBankAccount"];
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

        if (array_key_exists("ElectronicMark",$param) and $param["ElectronicMark"] !== null) {
            $this->ElectronicMark = $param["ElectronicMark"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Receiptor",$param) and $param["Receiptor"] !== null) {
            $this->Receiptor = $param["Receiptor"];
        }

        if (array_key_exists("Reviewer",$param) and $param["Reviewer"] !== null) {
            $this->Reviewer = $param["Reviewer"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PaymentInfo",$param) and $param["PaymentInfo"] !== null) {
            $this->PaymentInfo = $param["PaymentInfo"];
        }

        if (array_key_exists("TicketPickupUser",$param) and $param["TicketPickupUser"] !== null) {
            $this->TicketPickupUser = $param["TicketPickupUser"];
        }

        if (array_key_exists("MerchantNumber",$param) and $param["MerchantNumber"] !== null) {
            $this->MerchantNumber = $param["MerchantNumber"];
        }

        if (array_key_exists("OrderNumber",$param) and $param["OrderNumber"] !== null) {
            $this->OrderNumber = $param["OrderNumber"];
        }

        if (array_key_exists("GeneralMachineItems",$param) and $param["GeneralMachineItems"] !== null) {
            $this->GeneralMachineItems = [];
            foreach ($param["GeneralMachineItems"] as $key => $value){
                $obj = new GeneralMachineItem();
                $obj->deserialize($value);
                array_push($this->GeneralMachineItems, $obj);
            }
        }
    }
}
