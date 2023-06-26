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
 * Used car sales invoice
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
 * @method string getTotal() Obtain Total amount (in figures)
 * @method void setTotal(string $Total) Set Total amount (in figures)
 * @method string getTotalCn() Obtain Total amount (in words)
 * @method void setTotalCn(string $TotalCn) Set Total amount (in words)
 * @method string getSeller() Obtain Seller's name
 * @method void setSeller(string $Seller) Set Seller's name
 * @method string getSellerTel() Obtain Seller's phone number
 * @method void setSellerTel(string $SellerTel) Set Seller's phone number
 * @method string getSellerTaxID() Obtain Seller's company code/personal ID card number
 * @method void setSellerTaxID(string $SellerTaxID) Set Seller's company code/personal ID card number
 * @method string getSellerAddress() Obtain Seller's address
 * @method void setSellerAddress(string $SellerAddress) Set Seller's address
 * @method string getBuyer() Obtain Buyer's name
 * @method void setBuyer(string $Buyer) Set Buyer's name
 * @method string getBuyerID() Obtain Buyer's company code/personal ID card number
 * @method void setBuyerID(string $BuyerID) Set Buyer's company code/personal ID card number
 * @method string getBuyerAddress() Obtain Buyer's address
 * @method void setBuyerAddress(string $BuyerAddress) Set Buyer's address
 * @method string getBuyerTel() Obtain Buyer's phone number
 * @method void setBuyerTel(string $BuyerTel) Set Buyer's phone number
 * @method string getCompanyName() Obtain Company (used car market) name
 * @method void setCompanyName(string $CompanyName) Set Company (used car market) name
 * @method string getCompanyTaxID() Obtain Company's taxpayer identification number
 * @method void setCompanyTaxID(string $CompanyTaxID) Set Company's taxpayer identification number
 * @method string getCompanyBankAccount() Obtain Company's account opening bank and account number
 * @method void setCompanyBankAccount(string $CompanyBankAccount) Set Company's account opening bank and account number
 * @method string getCompanyTel() Obtain Company's phone number
 * @method void setCompanyTel(string $CompanyTel) Set Company's phone number
 * @method string getCompanyAddress() Obtain Company's address
 * @method void setCompanyAddress(string $CompanyAddress) Set Company's address
 * @method string getTransferAdministrationName() Obtain Name of the transfer-to department of motor vehicles
 * @method void setTransferAdministrationName(string $TransferAdministrationName) Set Name of the transfer-to department of motor vehicles
 * @method string getLicensePlate() Obtain License plate number
 * @method void setLicensePlate(string $LicensePlate) Set License plate number
 * @method string getRegistrationNumber() Obtain Registration certificate No.
 * @method void setRegistrationNumber(string $RegistrationNumber) Set Registration certificate No.
 * @method string getVIN() Obtain VIN
 * @method void setVIN(string $VIN) Set VIN
 * @method string getVehicleModel() Obtain Vehicle model
 * @method void setVehicleModel(string $VehicleModel) Set Vehicle model
 * @method string getKind() Obtain Invoice type
 * @method void setKind(string $Kind) Set Invoice type
 * @method string getProvince() Obtain Province
 * @method void setProvince(string $Province) Set Province
 * @method string getCity() Obtain City
 * @method void setCity(string $City) Set City
 * @method string getVehicleType() Obtain Vehicle type
 * @method void setVehicleType(string $VehicleType) Set Vehicle type
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getFormType() Obtain Form type
 * @method void setFormType(string $FormType) Set Form type
 * @method string getFormName() Obtain Form name
 * @method void setFormName(string $FormName) Set Form name
 * @method integer getCompanySealMark() Obtain Whether there is a company seal (0: No, 1: Yes)
 * @method void setCompanySealMark(integer $CompanySealMark) Set Whether there is a company seal (0: No, 1: Yes)
 */
class UsedCarPurchaseInvoice extends AbstractModel
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
     * @var string Seller's phone number
     */
    public $SellerTel;

    /**
     * @var string Seller's company code/personal ID card number
     */
    public $SellerTaxID;

    /**
     * @var string Seller's address
     */
    public $SellerAddress;

    /**
     * @var string Buyer's name
     */
    public $Buyer;

    /**
     * @var string Buyer's company code/personal ID card number
     */
    public $BuyerID;

    /**
     * @var string Buyer's address
     */
    public $BuyerAddress;

    /**
     * @var string Buyer's phone number
     */
    public $BuyerTel;

    /**
     * @var string Company (used car market) name
     */
    public $CompanyName;

    /**
     * @var string Company's taxpayer identification number
     */
    public $CompanyTaxID;

    /**
     * @var string Company's account opening bank and account number
     */
    public $CompanyBankAccount;

    /**
     * @var string Company's phone number
     */
    public $CompanyTel;

    /**
     * @var string Company's address
     */
    public $CompanyAddress;

    /**
     * @var string Name of the transfer-to department of motor vehicles
     */
    public $TransferAdministrationName;

    /**
     * @var string License plate number
     */
    public $LicensePlate;

    /**
     * @var string Registration certificate No.
     */
    public $RegistrationNumber;

    /**
     * @var string VIN
     */
    public $VIN;

    /**
     * @var string Vehicle model
     */
    public $VehicleModel;

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
     * @var string Vehicle type
     */
    public $VehicleType;

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
     * @var integer Whether there is a company seal (0: No, 1: Yes)
     */
    public $CompanySealMark;

    /**
     * @param string $Title Invoice title
     * @param integer $QRCodeMark Whether there is a QR code (0: No, 1: Yes)
     * @param string $Code Invoice code
     * @param string $Number Invoice number
     * @param string $Date Date of issue
     * @param string $Total Total amount (in figures)
     * @param string $TotalCn Total amount (in words)
     * @param string $Seller Seller's name
     * @param string $SellerTel Seller's phone number
     * @param string $SellerTaxID Seller's company code/personal ID card number
     * @param string $SellerAddress Seller's address
     * @param string $Buyer Buyer's name
     * @param string $BuyerID Buyer's company code/personal ID card number
     * @param string $BuyerAddress Buyer's address
     * @param string $BuyerTel Buyer's phone number
     * @param string $CompanyName Company (used car market) name
     * @param string $CompanyTaxID Company's taxpayer identification number
     * @param string $CompanyBankAccount Company's account opening bank and account number
     * @param string $CompanyTel Company's phone number
     * @param string $CompanyAddress Company's address
     * @param string $TransferAdministrationName Name of the transfer-to department of motor vehicles
     * @param string $LicensePlate License plate number
     * @param string $RegistrationNumber Registration certificate No.
     * @param string $VIN VIN
     * @param string $VehicleModel Vehicle model
     * @param string $Kind Invoice type
     * @param string $Province Province
     * @param string $City City
     * @param string $VehicleType Vehicle type
     * @param string $Remark Remarks
     * @param string $FormType Form type
     * @param string $FormName Form name
     * @param integer $CompanySealMark Whether there is a company seal (0: No, 1: Yes)
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

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TotalCn",$param) and $param["TotalCn"] !== null) {
            $this->TotalCn = $param["TotalCn"];
        }

        if (array_key_exists("Seller",$param) and $param["Seller"] !== null) {
            $this->Seller = $param["Seller"];
        }

        if (array_key_exists("SellerTel",$param) and $param["SellerTel"] !== null) {
            $this->SellerTel = $param["SellerTel"];
        }

        if (array_key_exists("SellerTaxID",$param) and $param["SellerTaxID"] !== null) {
            $this->SellerTaxID = $param["SellerTaxID"];
        }

        if (array_key_exists("SellerAddress",$param) and $param["SellerAddress"] !== null) {
            $this->SellerAddress = $param["SellerAddress"];
        }

        if (array_key_exists("Buyer",$param) and $param["Buyer"] !== null) {
            $this->Buyer = $param["Buyer"];
        }

        if (array_key_exists("BuyerID",$param) and $param["BuyerID"] !== null) {
            $this->BuyerID = $param["BuyerID"];
        }

        if (array_key_exists("BuyerAddress",$param) and $param["BuyerAddress"] !== null) {
            $this->BuyerAddress = $param["BuyerAddress"];
        }

        if (array_key_exists("BuyerTel",$param) and $param["BuyerTel"] !== null) {
            $this->BuyerTel = $param["BuyerTel"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("CompanyTaxID",$param) and $param["CompanyTaxID"] !== null) {
            $this->CompanyTaxID = $param["CompanyTaxID"];
        }

        if (array_key_exists("CompanyBankAccount",$param) and $param["CompanyBankAccount"] !== null) {
            $this->CompanyBankAccount = $param["CompanyBankAccount"];
        }

        if (array_key_exists("CompanyTel",$param) and $param["CompanyTel"] !== null) {
            $this->CompanyTel = $param["CompanyTel"];
        }

        if (array_key_exists("CompanyAddress",$param) and $param["CompanyAddress"] !== null) {
            $this->CompanyAddress = $param["CompanyAddress"];
        }

        if (array_key_exists("TransferAdministrationName",$param) and $param["TransferAdministrationName"] !== null) {
            $this->TransferAdministrationName = $param["TransferAdministrationName"];
        }

        if (array_key_exists("LicensePlate",$param) and $param["LicensePlate"] !== null) {
            $this->LicensePlate = $param["LicensePlate"];
        }

        if (array_key_exists("RegistrationNumber",$param) and $param["RegistrationNumber"] !== null) {
            $this->RegistrationNumber = $param["RegistrationNumber"];
        }

        if (array_key_exists("VIN",$param) and $param["VIN"] !== null) {
            $this->VIN = $param["VIN"];
        }

        if (array_key_exists("VehicleModel",$param) and $param["VehicleModel"] !== null) {
            $this->VehicleModel = $param["VehicleModel"];
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

        if (array_key_exists("VehicleType",$param) and $param["VehicleType"] !== null) {
            $this->VehicleType = $param["VehicleType"];
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

        if (array_key_exists("CompanySealMark",$param) and $param["CompanySealMark"] !== null) {
            $this->CompanySealMark = $param["CompanySealMark"];
        }
    }
}
