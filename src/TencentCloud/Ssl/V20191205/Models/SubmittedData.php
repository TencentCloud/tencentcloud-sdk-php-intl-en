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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Content of the `SubmittedData` parameter returned by `DescribeCertificates`
 *
 * @method string getCsrType() Obtain CSR type. `online`: CSR generated online; `parse`: CSR pasted
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCsrType(string $CsrType) Set CSR type. `online`: CSR generated online; `parse`: CSR pasted
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCsrContent() Obtain CSR content
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCsrContent(string $CsrContent) Set CSR content
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCertificateDomain() Obtain Domain name information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateDomain(string $CertificateDomain) Set Domain name information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getDomainList() Obtain DNS information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDomainList(array $DomainList) Set DNS information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getKeyPassword() Obtain Password of the private key
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKeyPassword(string $KeyPassword) Set Password of the private key
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOrganizationName() Obtain Enterprise or unit name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrganizationName(string $OrganizationName) Set Enterprise or unit name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOrganizationDivision() Obtain Division
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrganizationDivision(string $OrganizationDivision) Set Division
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOrganizationAddress() Obtain Address
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrganizationAddress(string $OrganizationAddress) Set Address
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOrganizationCountry() Obtain Country
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrganizationCountry(string $OrganizationCountry) Set Country
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOrganizationCity() Obtain City
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrganizationCity(string $OrganizationCity) Set City
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOrganizationRegion() Obtain Province
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrganizationRegion(string $OrganizationRegion) Set Province
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPostalCode() Obtain Postal code
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPostalCode(string $PostalCode) Set Postal code
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPhoneAreaCode() Obtain Area code of the fixed-line phone number
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneAreaCode(string $PhoneAreaCode) Set Area code of the fixed-line phone number
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPhoneNumber() Obtain Fixed-line phone number
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneNumber(string $PhoneNumber) Set Fixed-line phone number
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAdminFirstName() Obtain First name of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAdminFirstName(string $AdminFirstName) Set First name of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAdminLastName() Obtain Last name of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAdminLastName(string $AdminLastName) Set Last name of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAdminPhoneNum() Obtain Phone number of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAdminPhoneNum(string $AdminPhoneNum) Set Phone number of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAdminEmail() Obtain Email of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAdminEmail(string $AdminEmail) Set Email of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAdminPosition() Obtain Position of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAdminPosition(string $AdminPosition) Set Position of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getContactFirstName() Obtain First name of the contact
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setContactFirstName(string $ContactFirstName) Set First name of the contact
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getContactLastName() Obtain Last name of the contact
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setContactLastName(string $ContactLastName) Set Last name of the contact
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getContactNumber() Obtain Phone number of the contact
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setContactNumber(string $ContactNumber) Set Phone number of the contact
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getContactEmail() Obtain Email of the contact
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setContactEmail(string $ContactEmail) Set Email of the contact
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getContactPosition() Obtain Position of the contact
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setContactPosition(string $ContactPosition) Set Position of the contact
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVerifyType() Obtain Validation type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVerifyType(string $VerifyType) Set Validation type
Note: this field may return null, indicating that no valid values can be obtained.
 */
class SubmittedData extends AbstractModel
{
    /**
     * @var string CSR type. `online`: CSR generated online; `parse`: CSR pasted
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CsrType;

    /**
     * @var string CSR content
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CsrContent;

    /**
     * @var string Domain name information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertificateDomain;

    /**
     * @var array DNS information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DomainList;

    /**
     * @var string Password of the private key
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $KeyPassword;

    /**
     * @var string Enterprise or unit name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrganizationName;

    /**
     * @var string Division
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrganizationDivision;

    /**
     * @var string Address
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrganizationAddress;

    /**
     * @var string Country
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrganizationCountry;

    /**
     * @var string City
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrganizationCity;

    /**
     * @var string Province
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrganizationRegion;

    /**
     * @var string Postal code
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PostalCode;

    /**
     * @var string Area code of the fixed-line phone number
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PhoneAreaCode;

    /**
     * @var string Fixed-line phone number
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PhoneNumber;

    /**
     * @var string First name of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AdminFirstName;

    /**
     * @var string Last name of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AdminLastName;

    /**
     * @var string Phone number of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AdminPhoneNum;

    /**
     * @var string Email of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AdminEmail;

    /**
     * @var string Position of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AdminPosition;

    /**
     * @var string First name of the contact
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ContactFirstName;

    /**
     * @var string Last name of the contact
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ContactLastName;

    /**
     * @var string Phone number of the contact
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ContactNumber;

    /**
     * @var string Email of the contact
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ContactEmail;

    /**
     * @var string Position of the contact
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ContactPosition;

    /**
     * @var string Validation type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VerifyType;

    /**
     * @param string $CsrType CSR type. `online`: CSR generated online; `parse`: CSR pasted
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CsrContent CSR content
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertificateDomain Domain name information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $DomainList DNS information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $KeyPassword Password of the private key
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OrganizationName Enterprise or unit name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OrganizationDivision Division
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OrganizationAddress Address
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OrganizationCountry Country
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OrganizationCity City
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OrganizationRegion Province
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PostalCode Postal code
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PhoneAreaCode Area code of the fixed-line phone number
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PhoneNumber Fixed-line phone number
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AdminFirstName First name of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AdminLastName Last name of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AdminPhoneNum Phone number of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AdminEmail Email of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AdminPosition Position of the administrator
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ContactFirstName First name of the contact
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ContactLastName Last name of the contact
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ContactNumber Phone number of the contact
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ContactEmail Email of the contact
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ContactPosition Position of the contact
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VerifyType Validation type
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CsrType",$param) and $param["CsrType"] !== null) {
            $this->CsrType = $param["CsrType"];
        }

        if (array_key_exists("CsrContent",$param) and $param["CsrContent"] !== null) {
            $this->CsrContent = $param["CsrContent"];
        }

        if (array_key_exists("CertificateDomain",$param) and $param["CertificateDomain"] !== null) {
            $this->CertificateDomain = $param["CertificateDomain"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }

        if (array_key_exists("KeyPassword",$param) and $param["KeyPassword"] !== null) {
            $this->KeyPassword = $param["KeyPassword"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("OrganizationDivision",$param) and $param["OrganizationDivision"] !== null) {
            $this->OrganizationDivision = $param["OrganizationDivision"];
        }

        if (array_key_exists("OrganizationAddress",$param) and $param["OrganizationAddress"] !== null) {
            $this->OrganizationAddress = $param["OrganizationAddress"];
        }

        if (array_key_exists("OrganizationCountry",$param) and $param["OrganizationCountry"] !== null) {
            $this->OrganizationCountry = $param["OrganizationCountry"];
        }

        if (array_key_exists("OrganizationCity",$param) and $param["OrganizationCity"] !== null) {
            $this->OrganizationCity = $param["OrganizationCity"];
        }

        if (array_key_exists("OrganizationRegion",$param) and $param["OrganizationRegion"] !== null) {
            $this->OrganizationRegion = $param["OrganizationRegion"];
        }

        if (array_key_exists("PostalCode",$param) and $param["PostalCode"] !== null) {
            $this->PostalCode = $param["PostalCode"];
        }

        if (array_key_exists("PhoneAreaCode",$param) and $param["PhoneAreaCode"] !== null) {
            $this->PhoneAreaCode = $param["PhoneAreaCode"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("AdminFirstName",$param) and $param["AdminFirstName"] !== null) {
            $this->AdminFirstName = $param["AdminFirstName"];
        }

        if (array_key_exists("AdminLastName",$param) and $param["AdminLastName"] !== null) {
            $this->AdminLastName = $param["AdminLastName"];
        }

        if (array_key_exists("AdminPhoneNum",$param) and $param["AdminPhoneNum"] !== null) {
            $this->AdminPhoneNum = $param["AdminPhoneNum"];
        }

        if (array_key_exists("AdminEmail",$param) and $param["AdminEmail"] !== null) {
            $this->AdminEmail = $param["AdminEmail"];
        }

        if (array_key_exists("AdminPosition",$param) and $param["AdminPosition"] !== null) {
            $this->AdminPosition = $param["AdminPosition"];
        }

        if (array_key_exists("ContactFirstName",$param) and $param["ContactFirstName"] !== null) {
            $this->ContactFirstName = $param["ContactFirstName"];
        }

        if (array_key_exists("ContactLastName",$param) and $param["ContactLastName"] !== null) {
            $this->ContactLastName = $param["ContactLastName"];
        }

        if (array_key_exists("ContactNumber",$param) and $param["ContactNumber"] !== null) {
            $this->ContactNumber = $param["ContactNumber"];
        }

        if (array_key_exists("ContactEmail",$param) and $param["ContactEmail"] !== null) {
            $this->ContactEmail = $param["ContactEmail"];
        }

        if (array_key_exists("ContactPosition",$param) and $param["ContactPosition"] !== null) {
            $this->ContactPosition = $param["ContactPosition"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }
    }
}
