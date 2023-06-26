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
 * Non-tax revenue
 *
 * @method string getTitle() Obtain Invoice title
 * @method void setTitle(string $Title) Set Invoice title
 * @method string getNumber() Obtain Invoice number
 * @method void setNumber(string $Number) Set Invoice number
 * @method string getCode() Obtain Invoice code
 * @method void setCode(string $Code) Set Invoice code
 * @method string getCheckCode() Obtain Check code
 * @method void setCheckCode(string $CheckCode) Set Check code
 * @method string getDate() Obtain Date of issue
 * @method void setDate(string $Date) Set Date of issue
 * @method string getTotal() Obtain Total amount (in figures)
 * @method void setTotal(string $Total) Set Total amount (in figures)
 * @method string getTotalCn() Obtain Total amount (in words)
 * @method void setTotalCn(string $TotalCn) Set Total amount (in words)
 * @method string getBuyer() Obtain Payer's name
 * @method void setBuyer(string $Buyer) Set Payer's name
 * @method string getBuyerTaxID() Obtain Payer's taxpayer identification number
 * @method void setBuyerTaxID(string $BuyerTaxID) Set Payer's taxpayer identification number
 * @method string getSeller() Obtain Payee's name
 * @method void setSeller(string $Seller) Set Payee's name
 * @method string getSellerCompany() Obtain Payee's company name
 * @method void setSellerCompany(string $SellerCompany) Set Payee's company name
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getCurrencyCode() Obtain Currency
 * @method void setCurrencyCode(string $CurrencyCode) Set Currency
 * @method string getReviewer() Obtain Reviewer
 * @method void setReviewer(string $Reviewer) Set Reviewer
 * @method integer getQRCodeMark() Obtain Whether there is a QR code (0: No, 1: Yes)
 * @method void setQRCodeMark(integer $QRCodeMark) Set Whether there is a QR code (0: No, 1: Yes)
 * @method string getOtherInfo() Obtain Other information
 * @method void setOtherInfo(string $OtherInfo) Set Other information
 * @method string getPaymentCode() Obtain Payment code
 * @method void setPaymentCode(string $PaymentCode) Set Payment code
 * @method string getReceiveUnitCode() Obtain Collecting organization's code
 * @method void setReceiveUnitCode(string $ReceiveUnitCode) Set Collecting organization's code
 * @method string getReceiver() Obtain Collecting organization's name
 * @method void setReceiver(string $Receiver) Set Collecting organization's name
 * @method string getOperator() Obtain Operator
 * @method void setOperator(string $Operator) Set Operator
 * @method string getPayerAccount() Obtain Payer's account
 * @method void setPayerAccount(string $PayerAccount) Set Payer's account
 * @method string getPayerBank() Obtain Payer's account opening bank
 * @method void setPayerBank(string $PayerBank) Set Payer's account opening bank
 * @method string getReceiverAccount() Obtain Payee's account
 * @method void setReceiverAccount(string $ReceiverAccount) Set Payee's account
 * @method string getReceiverBank() Obtain Payee's account opening bank
 * @method void setReceiverBank(string $ReceiverBank) Set Payee's account opening bank
 * @method array getNonTaxItems() Obtain Items
 * @method void setNonTaxItems(array $NonTaxItems) Set Items
 */
class NonTaxIncomeBill extends AbstractModel
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
     * @var string Invoice code
     */
    public $Code;

    /**
     * @var string Check code
     */
    public $CheckCode;

    /**
     * @var string Date of issue
     */
    public $Date;

    /**
     * @var string Total amount (in figures)
     */
    public $Total;

    /**
     * @var string Total amount (in words)
     */
    public $TotalCn;

    /**
     * @var string Payer's name
     */
    public $Buyer;

    /**
     * @var string Payer's taxpayer identification number
     */
    public $BuyerTaxID;

    /**
     * @var string Payee's name
     */
    public $Seller;

    /**
     * @var string Payee's company name
     */
    public $SellerCompany;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Currency
     */
    public $CurrencyCode;

    /**
     * @var string Reviewer
     */
    public $Reviewer;

    /**
     * @var integer Whether there is a QR code (0: No, 1: Yes)
     */
    public $QRCodeMark;

    /**
     * @var string Other information
     */
    public $OtherInfo;

    /**
     * @var string Payment code
     */
    public $PaymentCode;

    /**
     * @var string Collecting organization's code
     */
    public $ReceiveUnitCode;

    /**
     * @var string Collecting organization's name
     */
    public $Receiver;

    /**
     * @var string Operator
     */
    public $Operator;

    /**
     * @var string Payer's account
     */
    public $PayerAccount;

    /**
     * @var string Payer's account opening bank
     */
    public $PayerBank;

    /**
     * @var string Payee's account
     */
    public $ReceiverAccount;

    /**
     * @var string Payee's account opening bank
     */
    public $ReceiverBank;

    /**
     * @var array Items
     */
    public $NonTaxItems;

    /**
     * @param string $Title Invoice title
     * @param string $Number Invoice number
     * @param string $Code Invoice code
     * @param string $CheckCode Check code
     * @param string $Date Date of issue
     * @param string $Total Total amount (in figures)
     * @param string $TotalCn Total amount (in words)
     * @param string $Buyer Payer's name
     * @param string $BuyerTaxID Payer's taxpayer identification number
     * @param string $Seller Payee's name
     * @param string $SellerCompany Payee's company name
     * @param string $Remark Remarks
     * @param string $CurrencyCode Currency
     * @param string $Reviewer Reviewer
     * @param integer $QRCodeMark Whether there is a QR code (0: No, 1: Yes)
     * @param string $OtherInfo Other information
     * @param string $PaymentCode Payment code
     * @param string $ReceiveUnitCode Collecting organization's code
     * @param string $Receiver Collecting organization's name
     * @param string $Operator Operator
     * @param string $PayerAccount Payer's account
     * @param string $PayerBank Payer's account opening bank
     * @param string $ReceiverAccount Payee's account
     * @param string $ReceiverBank Payee's account opening bank
     * @param array $NonTaxItems Items
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

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TotalCn",$param) and $param["TotalCn"] !== null) {
            $this->TotalCn = $param["TotalCn"];
        }

        if (array_key_exists("Buyer",$param) and $param["Buyer"] !== null) {
            $this->Buyer = $param["Buyer"];
        }

        if (array_key_exists("BuyerTaxID",$param) and $param["BuyerTaxID"] !== null) {
            $this->BuyerTaxID = $param["BuyerTaxID"];
        }

        if (array_key_exists("Seller",$param) and $param["Seller"] !== null) {
            $this->Seller = $param["Seller"];
        }

        if (array_key_exists("SellerCompany",$param) and $param["SellerCompany"] !== null) {
            $this->SellerCompany = $param["SellerCompany"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CurrencyCode",$param) and $param["CurrencyCode"] !== null) {
            $this->CurrencyCode = $param["CurrencyCode"];
        }

        if (array_key_exists("Reviewer",$param) and $param["Reviewer"] !== null) {
            $this->Reviewer = $param["Reviewer"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }

        if (array_key_exists("OtherInfo",$param) and $param["OtherInfo"] !== null) {
            $this->OtherInfo = $param["OtherInfo"];
        }

        if (array_key_exists("PaymentCode",$param) and $param["PaymentCode"] !== null) {
            $this->PaymentCode = $param["PaymentCode"];
        }

        if (array_key_exists("ReceiveUnitCode",$param) and $param["ReceiveUnitCode"] !== null) {
            $this->ReceiveUnitCode = $param["ReceiveUnitCode"];
        }

        if (array_key_exists("Receiver",$param) and $param["Receiver"] !== null) {
            $this->Receiver = $param["Receiver"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("PayerAccount",$param) and $param["PayerAccount"] !== null) {
            $this->PayerAccount = $param["PayerAccount"];
        }

        if (array_key_exists("PayerBank",$param) and $param["PayerBank"] !== null) {
            $this->PayerBank = $param["PayerBank"];
        }

        if (array_key_exists("ReceiverAccount",$param) and $param["ReceiverAccount"] !== null) {
            $this->ReceiverAccount = $param["ReceiverAccount"];
        }

        if (array_key_exists("ReceiverBank",$param) and $param["ReceiverBank"] !== null) {
            $this->ReceiverBank = $param["ReceiverBank"];
        }

        if (array_key_exists("NonTaxItems",$param) and $param["NonTaxItems"] !== null) {
            $this->NonTaxItems = [];
            foreach ($param["NonTaxItems"] as $key => $value){
                $obj = new NonTaxItem();
                $obj->deserialize($value);
                array_push($this->NonTaxItems, $obj);
            }
        }
    }
}
