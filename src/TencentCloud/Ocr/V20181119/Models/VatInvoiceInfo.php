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
 * Return values for a VAT invoice
 *
 * @method string getCheckCode() Obtain Check code
 * @method void setCheckCode(string $CheckCode) Set Check code
 * @method string getFormType() Obtain Form type
 * @method void setFormType(string $FormType) Set Form type
 * @method string getTravelTax() Obtain Vehicle and vessel tax
 * @method void setTravelTax(string $TravelTax) Set Vehicle and vessel tax
 * @method string getBuyerAddrTel() Obtain Buyer's address and phone number
 * @method void setBuyerAddrTel(string $BuyerAddrTel) Set Buyer's address and phone number
 * @method string getBuyerBankAccount() Obtain Buyer's bank account number
 * @method void setBuyerBankAccount(string $BuyerBankAccount) Set Buyer's bank account number
 * @method string getCompanySealContent() Obtain Company seal content
 * @method void setCompanySealContent(string $CompanySealContent) Set Company seal content
 * @method string getTaxSealContent() Obtain Tax authority seal content
 * @method void setTaxSealContent(string $TaxSealContent) Set Tax authority seal content
 * @method string getServiceName() Obtain Service type
 * @method void setServiceName(string $ServiceName) Set Service type
 * @method string getCity() Obtain City
 * @method void setCity(string $City) Set City
 * @method integer getQRCodeMark() Obtain Whether there is a QR code (0: No, 1: Yes)
 * @method void setQRCodeMark(integer $QRCodeMark) Set Whether there is a QR code (0: No, 1: Yes)
 * @method integer getAgentMark() Obtain Whether there is an agent (0: No, 1: Yes)
 * @method void setAgentMark(integer $AgentMark) Set Whether there is an agent (0: No, 1: Yes)
 * @method integer getTransitMark() Obtain Whether there is a toll (0: No, 1: Yes)
 * @method void setTransitMark(integer $TransitMark) Set Whether there is a toll (0: No, 1: Yes)
 * @method integer getOilMark() Obtain Whether there is refined oil (0: No, 1: Yes)
 * @method void setOilMark(integer $OilMark) Set Whether there is refined oil (0: No, 1: Yes)
 * @method string getTitle() Obtain Invoice title
 * @method void setTitle(string $Title) Set Invoice title
 * @method string getKind() Obtain Invoice type
 * @method void setKind(string $Kind) Set Invoice type
 * @method string getCode() Obtain Invoice code
 * @method void setCode(string $Code) Set Invoice code
 * @method string getNumber() Obtain Invoice number
 * @method void setNumber(string $Number) Set Invoice number
 * @method string getNumberConfirm() Obtain Machine-printed invoice number
 * @method void setNumberConfirm(string $NumberConfirm) Set Machine-printed invoice number
 * @method string getDate() Obtain Date of issue
 * @method void setDate(string $Date) Set Date of issue
 * @method string getTotal() Obtain Total amount (in figures)
 * @method void setTotal(string $Total) Set Total amount (in figures)
 * @method string getTotalCn() Obtain Total amount (in words)
 * @method void setTotalCn(string $TotalCn) Set Total amount (in words)
 * @method string getPretaxAmount() Obtain Amount before tax
 * @method void setPretaxAmount(string $PretaxAmount) Set Amount before tax
 * @method string getTax() Obtain Tax
 * @method void setTax(string $Tax) Set Tax
 * @method string getMachineCode() Obtain Machine No.
 * @method void setMachineCode(string $MachineCode) Set Machine No.
 * @method string getCiphertext() Obtain Ciphertext
 * @method void setCiphertext(string $Ciphertext) Set Ciphertext
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
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
 * @method integer getCompanySealMark() Obtain Whether there is a company seal (0: No, 1: Yes)
 * @method void setCompanySealMark(integer $CompanySealMark) Set Whether there is a company seal (0: No, 1: Yes)
 * @method string getIssuer() Obtain Issuer
 * @method void setIssuer(string $Issuer) Set Issuer
 * @method string getReviewer() Obtain Reviewer
 * @method void setReviewer(string $Reviewer) Set Reviewer
 * @method string getProvince() Obtain Province
 * @method void setProvince(string $Province) Set Province
 * @method array getVatInvoiceItemInfos() Obtain Information about VAT invoice items
 * @method void setVatInvoiceItemInfos(array $VatInvoiceItemInfos) Set Information about VAT invoice items
 * @method string getCodeConfirm() Obtain Machine-printed invoice code
 * @method void setCodeConfirm(string $CodeConfirm) Set Machine-printed invoice code
 * @method string getReceiptor() Obtain Payee
 * @method void setReceiptor(string $Receiptor) Set Payee
 * @method integer getElectronicFullMark() Obtain 
 * @method void setElectronicFullMark(integer $ElectronicFullMark) Set 
 * @method string getElectronicFullNumber() Obtain 
 * @method void setElectronicFullNumber(string $ElectronicFullNumber) Set 
 * @method string getFormName() Obtain 
 * @method void setFormName(string $FormName) Set 
 */
class VatInvoiceInfo extends AbstractModel
{
    /**
     * @var string Check code
     */
    public $CheckCode;

    /**
     * @var string Form type
     */
    public $FormType;

    /**
     * @var string Vehicle and vessel tax
     */
    public $TravelTax;

    /**
     * @var string Buyer's address and phone number
     */
    public $BuyerAddrTel;

    /**
     * @var string Buyer's bank account number
     */
    public $BuyerBankAccount;

    /**
     * @var string Company seal content
     */
    public $CompanySealContent;

    /**
     * @var string Tax authority seal content
     */
    public $TaxSealContent;

    /**
     * @var string Service type
     */
    public $ServiceName;

    /**
     * @var string City
     */
    public $City;

    /**
     * @var integer Whether there is a QR code (0: No, 1: Yes)
     */
    public $QRCodeMark;

    /**
     * @var integer Whether there is an agent (0: No, 1: Yes)
     */
    public $AgentMark;

    /**
     * @var integer Whether there is a toll (0: No, 1: Yes)
     */
    public $TransitMark;

    /**
     * @var integer Whether there is refined oil (0: No, 1: Yes)
     */
    public $OilMark;

    /**
     * @var string Invoice title
     */
    public $Title;

    /**
     * @var string Invoice type
     */
    public $Kind;

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
     * @var string Total amount (in figures)
     */
    public $Total;

    /**
     * @var string Total amount (in words)
     */
    public $TotalCn;

    /**
     * @var string Amount before tax
     */
    public $PretaxAmount;

    /**
     * @var string Tax
     */
    public $Tax;

    /**
     * @var string Machine No.
     */
    public $MachineCode;

    /**
     * @var string Ciphertext
     */
    public $Ciphertext;

    /**
     * @var string Remarks
     */
    public $Remark;

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
     * @var integer Whether there is a company seal (0: No, 1: Yes)
     */
    public $CompanySealMark;

    /**
     * @var string Issuer
     */
    public $Issuer;

    /**
     * @var string Reviewer
     */
    public $Reviewer;

    /**
     * @var string Province
     */
    public $Province;

    /**
     * @var array Information about VAT invoice items
     */
    public $VatInvoiceItemInfos;

    /**
     * @var string Machine-printed invoice code
     */
    public $CodeConfirm;

    /**
     * @var string Payee
     */
    public $Receiptor;

    /**
     * @var integer 
     */
    public $ElectronicFullMark;

    /**
     * @var string 
     */
    public $ElectronicFullNumber;

    /**
     * @var string 
     */
    public $FormName;

    /**
     * @param string $CheckCode Check code
     * @param string $FormType Form type
     * @param string $TravelTax Vehicle and vessel tax
     * @param string $BuyerAddrTel Buyer's address and phone number
     * @param string $BuyerBankAccount Buyer's bank account number
     * @param string $CompanySealContent Company seal content
     * @param string $TaxSealContent Tax authority seal content
     * @param string $ServiceName Service type
     * @param string $City City
     * @param integer $QRCodeMark Whether there is a QR code (0: No, 1: Yes)
     * @param integer $AgentMark Whether there is an agent (0: No, 1: Yes)
     * @param integer $TransitMark Whether there is a toll (0: No, 1: Yes)
     * @param integer $OilMark Whether there is refined oil (0: No, 1: Yes)
     * @param string $Title Invoice title
     * @param string $Kind Invoice type
     * @param string $Code Invoice code
     * @param string $Number Invoice number
     * @param string $NumberConfirm Machine-printed invoice number
     * @param string $Date Date of issue
     * @param string $Total Total amount (in figures)
     * @param string $TotalCn Total amount (in words)
     * @param string $PretaxAmount Amount before tax
     * @param string $Tax Tax
     * @param string $MachineCode Machine No.
     * @param string $Ciphertext Ciphertext
     * @param string $Remark Remarks
     * @param string $Seller Seller's name
     * @param string $SellerTaxID Seller's taxpayer identification number
     * @param string $SellerAddrTel Seller's address and phone number
     * @param string $SellerBankAccount Seller's bank account number
     * @param string $Buyer Buyer's name
     * @param string $BuyerTaxID Buyer's taxpayer identification number
     * @param integer $CompanySealMark Whether there is a company seal (0: No, 1: Yes)
     * @param string $Issuer Issuer
     * @param string $Reviewer Reviewer
     * @param string $Province Province
     * @param array $VatInvoiceItemInfos Information about VAT invoice items
     * @param string $CodeConfirm Machine-printed invoice code
     * @param string $Receiptor Payee
     * @param integer $ElectronicFullMark 
     * @param string $ElectronicFullNumber 
     * @param string $FormName 
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
        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("FormType",$param) and $param["FormType"] !== null) {
            $this->FormType = $param["FormType"];
        }

        if (array_key_exists("TravelTax",$param) and $param["TravelTax"] !== null) {
            $this->TravelTax = $param["TravelTax"];
        }

        if (array_key_exists("BuyerAddrTel",$param) and $param["BuyerAddrTel"] !== null) {
            $this->BuyerAddrTel = $param["BuyerAddrTel"];
        }

        if (array_key_exists("BuyerBankAccount",$param) and $param["BuyerBankAccount"] !== null) {
            $this->BuyerBankAccount = $param["BuyerBankAccount"];
        }

        if (array_key_exists("CompanySealContent",$param) and $param["CompanySealContent"] !== null) {
            $this->CompanySealContent = $param["CompanySealContent"];
        }

        if (array_key_exists("TaxSealContent",$param) and $param["TaxSealContent"] !== null) {
            $this->TaxSealContent = $param["TaxSealContent"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }

        if (array_key_exists("AgentMark",$param) and $param["AgentMark"] !== null) {
            $this->AgentMark = $param["AgentMark"];
        }

        if (array_key_exists("TransitMark",$param) and $param["TransitMark"] !== null) {
            $this->TransitMark = $param["TransitMark"];
        }

        if (array_key_exists("OilMark",$param) and $param["OilMark"] !== null) {
            $this->OilMark = $param["OilMark"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
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

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TotalCn",$param) and $param["TotalCn"] !== null) {
            $this->TotalCn = $param["TotalCn"];
        }

        if (array_key_exists("PretaxAmount",$param) and $param["PretaxAmount"] !== null) {
            $this->PretaxAmount = $param["PretaxAmount"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("MachineCode",$param) and $param["MachineCode"] !== null) {
            $this->MachineCode = $param["MachineCode"];
        }

        if (array_key_exists("Ciphertext",$param) and $param["Ciphertext"] !== null) {
            $this->Ciphertext = $param["Ciphertext"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
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

        if (array_key_exists("CompanySealMark",$param) and $param["CompanySealMark"] !== null) {
            $this->CompanySealMark = $param["CompanySealMark"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Reviewer",$param) and $param["Reviewer"] !== null) {
            $this->Reviewer = $param["Reviewer"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("VatInvoiceItemInfos",$param) and $param["VatInvoiceItemInfos"] !== null) {
            $this->VatInvoiceItemInfos = [];
            foreach ($param["VatInvoiceItemInfos"] as $key => $value){
                $obj = new VatInvoiceItemInfo();
                $obj->deserialize($value);
                array_push($this->VatInvoiceItemInfos, $obj);
            }
        }

        if (array_key_exists("CodeConfirm",$param) and $param["CodeConfirm"] !== null) {
            $this->CodeConfirm = $param["CodeConfirm"];
        }

        if (array_key_exists("Receiptor",$param) and $param["Receiptor"] !== null) {
            $this->Receiptor = $param["Receiptor"];
        }

        if (array_key_exists("ElectronicFullMark",$param) and $param["ElectronicFullMark"] !== null) {
            $this->ElectronicFullMark = $param["ElectronicFullMark"];
        }

        if (array_key_exists("ElectronicFullNumber",$param) and $param["ElectronicFullNumber"] !== null) {
            $this->ElectronicFullNumber = $param["ElectronicFullNumber"];
        }

        if (array_key_exists("FormName",$param) and $param["FormName"] !== null) {
            $this->FormName = $param["FormName"];
        }
    }
}
