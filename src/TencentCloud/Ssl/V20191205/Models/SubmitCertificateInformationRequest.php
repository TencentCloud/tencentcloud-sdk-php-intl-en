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
 * SubmitCertificateInformation request structure.
 *
 * @method string getCertificateId() Obtain Certificate ID.
 * @method void setCertificateId(string $CertificateId) Set Certificate ID.
 * @method string getCsrType() Obtain CSR generation mode. Online: generated online; parse: uploaded manually.
 * @method void setCsrType(string $CsrType) Set CSR generation mode. Online: generated online; parse: uploaded manually.
 * @method string getCsrContent() Obtain Uploaded CSR content.
 * @method void setCsrContent(string $CsrContent) Set Uploaded CSR content.
 * @method string getCertificateDomain() Obtain Domain name bound with the certificate.
 * @method void setCertificateDomain(string $CertificateDomain) Set Domain name bound with the certificate.
 * @method array getDomainList() Obtain Uploaded domain name array (can be uploaded for a multi-domain certificate).
 * @method void setDomainList(array $DomainList) Set Uploaded domain name array (can be uploaded for a multi-domain certificate).
 * @method string getKeyPassword() Obtain Password of the private key.
 * @method void setKeyPassword(string $KeyPassword) Set Password of the private key.
 * @method string getOrganizationName() Obtain Organization name.
 * @method void setOrganizationName(string $OrganizationName) Set Organization name.
 * @method string getOrganizationDivision() Obtain Division name.
 * @method void setOrganizationDivision(string $OrganizationDivision) Set Division name.
 * @method string getOrganizationAddress() Obtain Detailed address of the organization.
 * @method void setOrganizationAddress(string $OrganizationAddress) Set Detailed address of the organization.
 * @method string getOrganizationCountry() Obtain Country where the organization is located. For example, CN (China).
 * @method void setOrganizationCountry(string $OrganizationCountry) Set Country where the organization is located. For example, CN (China).
 * @method string getOrganizationCity() Obtain City where the organization is located.
 * @method void setOrganizationCity(string $OrganizationCity) Set City where the organization is located.
 * @method string getOrganizationRegion() Obtain Province where the organization is located.
 * @method void setOrganizationRegion(string $OrganizationRegion) Set Province where the organization is located.
 * @method string getPostalCode() Obtain Postal code of the organization.
 * @method void setPostalCode(string $PostalCode) Set Postal code of the organization.
 * @method string getPhoneAreaCode() Obtain Area code of the fixed-line phone number of the organization.
 * @method void setPhoneAreaCode(string $PhoneAreaCode) Set Area code of the fixed-line phone number of the organization.
 * @method string getPhoneNumber() Obtain Fixed-line phone number of the organization.
 * @method void setPhoneNumber(string $PhoneNumber) Set Fixed-line phone number of the organization.
 * @method string getVerifyType() Obtain Certificate verification method.
 * @method void setVerifyType(string $VerifyType) Set Certificate verification method.
 * @method string getAdminFirstName() Obtain Last name of the admin.
 * @method void setAdminFirstName(string $AdminFirstName) Set Last name of the admin.
 * @method string getAdminLastName() Obtain First name of the admin.
 * @method void setAdminLastName(string $AdminLastName) Set First name of the admin.
 * @method string getAdminPhoneNum() Obtain Mobile number of the admin.
 * @method void setAdminPhoneNum(string $AdminPhoneNum) Set Mobile number of the admin.
 * @method string getAdminEmail() Obtain Email of the admin.
 * @method void setAdminEmail(string $AdminEmail) Set Email of the admin.
 * @method string getAdminPosition() Obtain Position of the admin.
 * @method void setAdminPosition(string $AdminPosition) Set Position of the admin.
 * @method string getContactFirstName() Obtain Last name of the contact.
 * @method void setContactFirstName(string $ContactFirstName) Set Last name of the contact.
 * @method string getContactLastName() Obtain First name of the contact.
 * @method void setContactLastName(string $ContactLastName) Set First name of the contact.
 * @method string getContactEmail() Obtain Email of the contact.
 * @method void setContactEmail(string $ContactEmail) Set Email of the contact.
 * @method string getContactNumber() Obtain Mobile number of the contact.
 * @method void setContactNumber(string $ContactNumber) Set Mobile number of the contact.
 * @method string getContactPosition() Obtain Position of the contact.
 * @method void setContactPosition(string $ContactPosition) Set Position of the contact.
 */
class SubmitCertificateInformationRequest extends AbstractModel
{
    /**
     * @var string Certificate ID.
     */
    public $CertificateId;

    /**
     * @var string CSR generation mode. Online: generated online; parse: uploaded manually.
     */
    public $CsrType;

    /**
     * @var string Uploaded CSR content.
     */
    public $CsrContent;

    /**
     * @var string Domain name bound with the certificate.
     */
    public $CertificateDomain;

    /**
     * @var array Uploaded domain name array (can be uploaded for a multi-domain certificate).
     */
    public $DomainList;

    /**
     * @var string Password of the private key.
     */
    public $KeyPassword;

    /**
     * @var string Organization name.
     */
    public $OrganizationName;

    /**
     * @var string Division name.
     */
    public $OrganizationDivision;

    /**
     * @var string Detailed address of the organization.
     */
    public $OrganizationAddress;

    /**
     * @var string Country where the organization is located. For example, CN (China).
     */
    public $OrganizationCountry;

    /**
     * @var string City where the organization is located.
     */
    public $OrganizationCity;

    /**
     * @var string Province where the organization is located.
     */
    public $OrganizationRegion;

    /**
     * @var string Postal code of the organization.
     */
    public $PostalCode;

    /**
     * @var string Area code of the fixed-line phone number of the organization.
     */
    public $PhoneAreaCode;

    /**
     * @var string Fixed-line phone number of the organization.
     */
    public $PhoneNumber;

    /**
     * @var string Certificate verification method.
     */
    public $VerifyType;

    /**
     * @var string Last name of the admin.
     */
    public $AdminFirstName;

    /**
     * @var string First name of the admin.
     */
    public $AdminLastName;

    /**
     * @var string Mobile number of the admin.
     */
    public $AdminPhoneNum;

    /**
     * @var string Email of the admin.
     */
    public $AdminEmail;

    /**
     * @var string Position of the admin.
     */
    public $AdminPosition;

    /**
     * @var string Last name of the contact.
     */
    public $ContactFirstName;

    /**
     * @var string First name of the contact.
     */
    public $ContactLastName;

    /**
     * @var string Email of the contact.
     */
    public $ContactEmail;

    /**
     * @var string Mobile number of the contact.
     */
    public $ContactNumber;

    /**
     * @var string Position of the contact.
     */
    public $ContactPosition;

    /**
     * @param string $CertificateId Certificate ID.
     * @param string $CsrType CSR generation mode. Online: generated online; parse: uploaded manually.
     * @param string $CsrContent Uploaded CSR content.
     * @param string $CertificateDomain Domain name bound with the certificate.
     * @param array $DomainList Uploaded domain name array (can be uploaded for a multi-domain certificate).
     * @param string $KeyPassword Password of the private key.
     * @param string $OrganizationName Organization name.
     * @param string $OrganizationDivision Division name.
     * @param string $OrganizationAddress Detailed address of the organization.
     * @param string $OrganizationCountry Country where the organization is located. For example, CN (China).
     * @param string $OrganizationCity City where the organization is located.
     * @param string $OrganizationRegion Province where the organization is located.
     * @param string $PostalCode Postal code of the organization.
     * @param string $PhoneAreaCode Area code of the fixed-line phone number of the organization.
     * @param string $PhoneNumber Fixed-line phone number of the organization.
     * @param string $VerifyType Certificate verification method.
     * @param string $AdminFirstName Last name of the admin.
     * @param string $AdminLastName First name of the admin.
     * @param string $AdminPhoneNum Mobile number of the admin.
     * @param string $AdminEmail Email of the admin.
     * @param string $AdminPosition Position of the admin.
     * @param string $ContactFirstName Last name of the contact.
     * @param string $ContactLastName First name of the contact.
     * @param string $ContactEmail Email of the contact.
     * @param string $ContactNumber Mobile number of the contact.
     * @param string $ContactPosition Position of the contact.
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
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

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
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

        if (array_key_exists("ContactEmail",$param) and $param["ContactEmail"] !== null) {
            $this->ContactEmail = $param["ContactEmail"];
        }

        if (array_key_exists("ContactNumber",$param) and $param["ContactNumber"] !== null) {
            $this->ContactNumber = $param["ContactNumber"];
        }

        if (array_key_exists("ContactPosition",$param) and $param["ContactPosition"] !== null) {
            $this->ContactPosition = $param["ContactPosition"];
        }
    }
}
