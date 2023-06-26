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
 * Motor vehicle sales invoice
 *
 * @method string getTitle() Obtain Invoice title
 * @method void setTitle(string $Title) Set Invoice title
 * @method string getCode() Obtain Invoice code
 * @method void setCode(string $Code) Set Invoice code
 * @method string getNumber() Obtain Invoice number
 * @method void setNumber(string $Number) Set Invoice number
 * @method string getDate() Obtain Date of issue
 * @method void setDate(string $Date) Set Date of issue
 * @method string getPretaxAmount() Obtain Amount before tax
 * @method void setPretaxAmount(string $PretaxAmount) Set Amount before tax
 * @method string getTotal() Obtain Total amount (in figures)
 * @method void setTotal(string $Total) Set Total amount (in figures)
 * @method string getTotalCn() Obtain Total amount (in words)
 * @method void setTotalCn(string $TotalCn) Set Total amount (in words)
 * @method string getSeller() Obtain Seller's name
 * @method void setSeller(string $Seller) Set Seller's name
 * @method string getSellerTaxID() Obtain Seller's company code
 * @method void setSellerTaxID(string $SellerTaxID) Set Seller's company code
 * @method string getSellerTel() Obtain Seller's phone number
 * @method void setSellerTel(string $SellerTel) Set Seller's phone number
 * @method string getSellerAddress() Obtain Seller's address
 * @method void setSellerAddress(string $SellerAddress) Set Seller's address
 * @method string getSellerBank() Obtain Seller's account opening bank
 * @method void setSellerBank(string $SellerBank) Set Seller's account opening bank
 * @method string getSellerBankAccount() Obtain Seller's bank account number
 * @method void setSellerBankAccount(string $SellerBankAccount) Set Seller's bank account number
 * @method string getBuyer() Obtain Buyer's name
 * @method void setBuyer(string $Buyer) Set Buyer's name
 * @method string getBuyerTaxID() Obtain Buyer's taxpayer identification number
 * @method void setBuyerTaxID(string $BuyerTaxID) Set Buyer's taxpayer identification number
 * @method string getBuyerID() Obtain Buyer's ID number/organization code
 * @method void setBuyerID(string $BuyerID) Set Buyer's ID number/organization code
 * @method string getTaxAuthorities() Obtain Tax authority
 * @method void setTaxAuthorities(string $TaxAuthorities) Set Tax authority
 * @method string getTaxAuthoritiesCode() Obtain Code of the tax authority
 * @method void setTaxAuthoritiesCode(string $TaxAuthoritiesCode) Set Code of the tax authority
 * @method string getVIN() Obtain VIN
 * @method void setVIN(string $VIN) Set VIN
 * @method string getVehicleModel() Obtain Vehicle model
 * @method void setVehicleModel(string $VehicleModel) Set Vehicle model
 * @method string getVehicleEngineCode() Obtain Engine No.
 * @method void setVehicleEngineCode(string $VehicleEngineCode) Set Engine No.
 * @method string getCertificateNumber() Obtain No. of the certificate of conformity
 * @method void setCertificateNumber(string $CertificateNumber) Set No. of the certificate of conformity
 * @method string getInspectionNumber() Obtain Inspection No.
 * @method void setInspectionNumber(string $InspectionNumber) Set Inspection No.
 * @method string getMachineID() Obtain Machine No.
 * @method void setMachineID(string $MachineID) Set Machine No.
 * @method string getVehicleType() Obtain Vehicle type
 * @method void setVehicleType(string $VehicleType) Set Vehicle type
 * @method string getKind() Obtain Invoice type
 * @method void setKind(string $Kind) Set Invoice type
 * @method string getProvince() Obtain Province
 * @method void setProvince(string $Province) Set Province
 * @method string getCity() Obtain City
 * @method void setCity(string $City) Set City
 * @method string getTax() Obtain Tax
 * @method void setTax(string $Tax) Set Tax
 * @method string getTaxRate() Obtain Tax rate
 * @method void setTaxRate(string $TaxRate) Set Tax rate
 * @method integer getCompanySealMark() Obtain Whether there is a company seal (0: No, 1: Yes)
 * @method void setCompanySealMark(integer $CompanySealMark) Set Whether there is a company seal (0: No, 1: Yes)
 * @method string getTonnage() Obtain Tonnage
 * @method void setTonnage(string $Tonnage) Set Tonnage
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getFormType() Obtain Form type
 * @method void setFormType(string $FormType) Set Form type
 * @method string getFormName() Obtain Form name
 * @method void setFormName(string $FormName) Set Form name
 * @method string getIssuer() Obtain Issuer
 * @method void setIssuer(string $Issuer) Set Issuer
 * @method string getTaxNum() Obtain Tax payment voucher number
 * @method void setTaxNum(string $TaxNum) Set Tax payment voucher number
 * @method string getMaxPeopleNum() Obtain Passenger capacity
 * @method void setMaxPeopleNum(string $MaxPeopleNum) Set Passenger capacity
 * @method string getOrigin() Obtain Origin
 * @method void setOrigin(string $Origin) Set Origin
 * @method string getMachineCode() Obtain Machine-printed invoice code
 * @method void setMachineCode(string $MachineCode) Set Machine-printed invoice code
 * @method string getMachineNumber() Obtain Machine-printed invoice number
 * @method void setMachineNumber(string $MachineNumber) Set Machine-printed invoice number
 * @method integer getQRCodeMark() Obtain Whether there is a QR code (0: No, 1: Yes)
 * @method void setQRCodeMark(integer $QRCodeMark) Set Whether there is a QR code (0: No, 1: Yes)
 */
class MotorVehicleSaleInvoice extends AbstractModel
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
     * @var string Date of issue
     */
    public $Date;

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
     * @var string Seller's name
     */
    public $Seller;

    /**
     * @var string Seller's company code
     */
    public $SellerTaxID;

    /**
     * @var string Seller's phone number
     */
    public $SellerTel;

    /**
     * @var string Seller's address
     */
    public $SellerAddress;

    /**
     * @var string Seller's account opening bank
     */
    public $SellerBank;

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
     * @var string Buyer's ID number/organization code
     */
    public $BuyerID;

    /**
     * @var string Tax authority
     */
    public $TaxAuthorities;

    /**
     * @var string Code of the tax authority
     */
    public $TaxAuthoritiesCode;

    /**
     * @var string VIN
     */
    public $VIN;

    /**
     * @var string Vehicle model
     */
    public $VehicleModel;

    /**
     * @var string Engine No.
     */
    public $VehicleEngineCode;

    /**
     * @var string No. of the certificate of conformity
     */
    public $CertificateNumber;

    /**
     * @var string Inspection No.
     */
    public $InspectionNumber;

    /**
     * @var string Machine No.
     */
    public $MachineID;

    /**
     * @var string Vehicle type
     */
    public $VehicleType;

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
     * @var string Tax
     */
    public $Tax;

    /**
     * @var string Tax rate
     */
    public $TaxRate;

    /**
     * @var integer Whether there is a company seal (0: No, 1: Yes)
     */
    public $CompanySealMark;

    /**
     * @var string Tonnage
     */
    public $Tonnage;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Form type
     */
    public $FormType;

    /**
     * @var string Form name
     */
    public $FormName;

    /**
     * @var string Issuer
     */
    public $Issuer;

    /**
     * @var string Tax payment voucher number
     */
    public $TaxNum;

    /**
     * @var string Passenger capacity
     */
    public $MaxPeopleNum;

    /**
     * @var string Origin
     */
    public $Origin;

    /**
     * @var string Machine-printed invoice code
     */
    public $MachineCode;

    /**
     * @var string Machine-printed invoice number
     */
    public $MachineNumber;

    /**
     * @var integer Whether there is a QR code (0: No, 1: Yes)
     */
    public $QRCodeMark;

    /**
     * @param string $Title Invoice title
     * @param string $Code Invoice code
     * @param string $Number Invoice number
     * @param string $Date Date of issue
     * @param string $PretaxAmount Amount before tax
     * @param string $Total Total amount (in figures)
     * @param string $TotalCn Total amount (in words)
     * @param string $Seller Seller's name
     * @param string $SellerTaxID Seller's company code
     * @param string $SellerTel Seller's phone number
     * @param string $SellerAddress Seller's address
     * @param string $SellerBank Seller's account opening bank
     * @param string $SellerBankAccount Seller's bank account number
     * @param string $Buyer Buyer's name
     * @param string $BuyerTaxID Buyer's taxpayer identification number
     * @param string $BuyerID Buyer's ID number/organization code
     * @param string $TaxAuthorities Tax authority
     * @param string $TaxAuthoritiesCode Code of the tax authority
     * @param string $VIN VIN
     * @param string $VehicleModel Vehicle model
     * @param string $VehicleEngineCode Engine No.
     * @param string $CertificateNumber No. of the certificate of conformity
     * @param string $InspectionNumber Inspection No.
     * @param string $MachineID Machine No.
     * @param string $VehicleType Vehicle type
     * @param string $Kind Invoice type
     * @param string $Province Province
     * @param string $City City
     * @param string $Tax Tax
     * @param string $TaxRate Tax rate
     * @param integer $CompanySealMark Whether there is a company seal (0: No, 1: Yes)
     * @param string $Tonnage Tonnage
     * @param string $Remark Remarks
     * @param string $FormType Form type
     * @param string $FormName Form name
     * @param string $Issuer Issuer
     * @param string $TaxNum Tax payment voucher number
     * @param string $MaxPeopleNum Passenger capacity
     * @param string $Origin Origin
     * @param string $MachineCode Machine-printed invoice code
     * @param string $MachineNumber Machine-printed invoice number
     * @param integer $QRCodeMark Whether there is a QR code (0: No, 1: Yes)
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

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
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

        if (array_key_exists("Seller",$param) and $param["Seller"] !== null) {
            $this->Seller = $param["Seller"];
        }

        if (array_key_exists("SellerTaxID",$param) and $param["SellerTaxID"] !== null) {
            $this->SellerTaxID = $param["SellerTaxID"];
        }

        if (array_key_exists("SellerTel",$param) and $param["SellerTel"] !== null) {
            $this->SellerTel = $param["SellerTel"];
        }

        if (array_key_exists("SellerAddress",$param) and $param["SellerAddress"] !== null) {
            $this->SellerAddress = $param["SellerAddress"];
        }

        if (array_key_exists("SellerBank",$param) and $param["SellerBank"] !== null) {
            $this->SellerBank = $param["SellerBank"];
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

        if (array_key_exists("BuyerID",$param) and $param["BuyerID"] !== null) {
            $this->BuyerID = $param["BuyerID"];
        }

        if (array_key_exists("TaxAuthorities",$param) and $param["TaxAuthorities"] !== null) {
            $this->TaxAuthorities = $param["TaxAuthorities"];
        }

        if (array_key_exists("TaxAuthoritiesCode",$param) and $param["TaxAuthoritiesCode"] !== null) {
            $this->TaxAuthoritiesCode = $param["TaxAuthoritiesCode"];
        }

        if (array_key_exists("VIN",$param) and $param["VIN"] !== null) {
            $this->VIN = $param["VIN"];
        }

        if (array_key_exists("VehicleModel",$param) and $param["VehicleModel"] !== null) {
            $this->VehicleModel = $param["VehicleModel"];
        }

        if (array_key_exists("VehicleEngineCode",$param) and $param["VehicleEngineCode"] !== null) {
            $this->VehicleEngineCode = $param["VehicleEngineCode"];
        }

        if (array_key_exists("CertificateNumber",$param) and $param["CertificateNumber"] !== null) {
            $this->CertificateNumber = $param["CertificateNumber"];
        }

        if (array_key_exists("InspectionNumber",$param) and $param["InspectionNumber"] !== null) {
            $this->InspectionNumber = $param["InspectionNumber"];
        }

        if (array_key_exists("MachineID",$param) and $param["MachineID"] !== null) {
            $this->MachineID = $param["MachineID"];
        }

        if (array_key_exists("VehicleType",$param) and $param["VehicleType"] !== null) {
            $this->VehicleType = $param["VehicleType"];
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

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("CompanySealMark",$param) and $param["CompanySealMark"] !== null) {
            $this->CompanySealMark = $param["CompanySealMark"];
        }

        if (array_key_exists("Tonnage",$param) and $param["Tonnage"] !== null) {
            $this->Tonnage = $param["Tonnage"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("FormType",$param) and $param["FormType"] !== null) {
            $this->FormType = $param["FormType"];
        }

        if (array_key_exists("FormName",$param) and $param["FormName"] !== null) {
            $this->FormName = $param["FormName"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("TaxNum",$param) and $param["TaxNum"] !== null) {
            $this->TaxNum = $param["TaxNum"];
        }

        if (array_key_exists("MaxPeopleNum",$param) and $param["MaxPeopleNum"] !== null) {
            $this->MaxPeopleNum = $param["MaxPeopleNum"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("MachineCode",$param) and $param["MachineCode"] !== null) {
            $this->MachineCode = $param["MachineCode"];
        }

        if (array_key_exists("MachineNumber",$param) and $param["MachineNumber"] !== null) {
            $this->MachineNumber = $param["MachineNumber"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }
    }
}
