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
 * @method string getCertificateId() Obtain Paid certificate id of materials to be submitted.
 * @method void setCertificateId(string $CertificateId) Set Paid certificate id of materials to be submitted.
 * @method string getCsrType() Obtain This field is required. Generation method of CSR, valid values are:
online: tencent cloud generates the CSR and private key based on the submitted parameter information and stores them encryptedly.
parse: generate the CSR and private key by itself, and apply for a certificate by uploading the CSR.
 * @method void setCsrType(string $CsrType) Set This field is required. Generation method of CSR, valid values are:
online: tencent cloud generates the CSR and private key based on the submitted parameter information and stores them encryptedly.
parse: generate the CSR and private key by itself, and apply for a certificate by uploading the CSR.
 * @method string getCsrContent() Obtain The content of the uploaded csr.
If CsrType is parse, this field is required.
 * @method void setCsrContent(string $CsrContent) Set The content of the uploaded csr.
If CsrType is parse, this field is required.
 * @method string getCertificateDomain() Obtain The common name bound to the certificate. if a CSR is uploaded, the domain name must be consistent with the common name resolved from the CSR.
 * @method void setCertificateDomain(string $CertificateDomain) Set The common name bound to the certificate. if a CSR is uploaded, the domain name must be consistent with the common name resolved from the CSR.
 * @method array getDomainList() Obtain Other domain names bound to the certificate. not required for single domain and wildcard domain certificates. required for multiple domain names and multiple wildcard domain names.
 * @method void setDomainList(array $DomainList) Set Other domain names bound to the certificate. not required for single domain and wildcard domain certificates. required for multiple domain names and multiple wildcard domain names.
 * @method string getKeyPassword() Obtain Private key password, which is currently only used for the password when generating jks and pfx format certificates; other formats of private key certificates are not encrypted.	
 * @method void setKeyPassword(string $KeyPassword) Set Private key password, which is currently only used for the password when generating jks and pfx format certificates; other formats of private key certificates are not encrypted.	
 * @method string getOrganizationName() Obtain This field is required. Company name.
 * @method void setOrganizationName(string $OrganizationName) Set This field is required. Company name.
 * @method string getOrganizationDivision() Obtain This field is required.  Department name.
 * @method void setOrganizationDivision(string $OrganizationDivision) Set This field is required.  Department name.
 * @method string getOrganizationAddress() Obtain This field is required. Company's detailed address.
 * @method void setOrganizationAddress(string $OrganizationAddress) Set This field is required. Company's detailed address.
 * @method string getOrganizationCountry() Obtain This field is required.Country name such as CN.
 * @method void setOrganizationCountry(string $OrganizationCountry) Set This field is required.Country name such as CN.
 * @method string getOrganizationCity() Obtain This field is required, which specifies the city where the company is located.
 * @method void setOrganizationCity(string $OrganizationCity) Set This field is required, which specifies the city where the company is located.
 * @method string getOrganizationRegion() Obtain This field is required, specifying the province where the company is located.
 * @method void setOrganizationRegion(string $OrganizationRegion) Set This field is required, specifying the province where the company is located.
 * @method string getPostalCode() Obtain Postal code of the organization
 * @method void setPostalCode(string $PostalCode) Set Postal code of the organization
 * @method string getPhoneAreaCode() Obtain This field is required, the company's fixed-line phone area code.
 * @method void setPhoneAreaCode(string $PhoneAreaCode) Set This field is required, the company's fixed-line phone area code.
 * @method string getPhoneNumber() Obtain This field is required, the company's landline number.
 * @method void setPhoneNumber(string $PhoneNumber) Set This field is required, the company's landline number.
 * @method string getVerifyType() Obtain Certificate validation method. Validation types: DNS_AUTO = Automatic DNS validation (only supported for domains resolved by Tencent Cloud DNS with a normal resolution status), DNS = Manual DNS validation, FILE = File validation.
 * @method void setVerifyType(string $VerifyType) Set Certificate validation method. Validation types: DNS_AUTO = Automatic DNS validation (only supported for domains resolved by Tencent Cloud DNS with a normal resolution status), DNS = Manual DNS validation, FILE = File validation.
 * @method string getAdminFirstName() Obtain This field is required, manager name.
 * @method void setAdminFirstName(string $AdminFirstName) Set This field is required, manager name.
 * @method string getAdminLastName() Obtain This field is required, the manager's surname.
 * @method void setAdminLastName(string $AdminLastName) Set This field is required, the manager's surname.
 * @method string getAdminPhoneNum() Obtain This field is required, the manager's mobile phone number.
 * @method void setAdminPhoneNum(string $AdminPhoneNum) Set This field is required, the manager's mobile phone number.
 * @method string getAdminEmail() Obtain This field is required, the manager's email address.
 * @method void setAdminEmail(string $AdminEmail) Set This field is required, the manager's email address.
 * @method string getAdminPosition() Obtain This field is required, the manager position.
 * @method void setAdminPosition(string $AdminPosition) Set This field is required, the manager position.
 * @method string getContactFirstName() Obtain This field is required, the contact person name.
 * @method void setContactFirstName(string $ContactFirstName) Set This field is required, the contact person name.
 * @method string getContactLastName() Obtain This field is required, the contact person's surname.
 * @method void setContactLastName(string $ContactLastName) Set This field is required, the contact person's surname.
 * @method string getContactEmail() Obtain This field is required, the contact person's email address.
 * @method void setContactEmail(string $ContactEmail) Set This field is required, the contact person's email address.
 * @method string getContactNumber() Obtain This field is required, the contact person's mobile phone number.
 * @method void setContactNumber(string $ContactNumber) Set This field is required, the contact person's mobile phone number.
 * @method string getContactPosition() Obtain This field is required, the contact person position.
 * @method void setContactPosition(string $ContactPosition) Set This field is required, the contact person position.
 * @method boolean getIsDV() Obtain Indicates whether it is a dv certificate. default value is false.
 * @method void setIsDV(boolean $IsDV) Set Indicates whether it is a dv certificate. default value is false.
 */
class SubmitCertificateInformationRequest extends AbstractModel
{
    /**
     * @var string Paid certificate id of materials to be submitted.
     */
    public $CertificateId;

    /**
     * @var string This field is required. Generation method of CSR, valid values are:
online: tencent cloud generates the CSR and private key based on the submitted parameter information and stores them encryptedly.
parse: generate the CSR and private key by itself, and apply for a certificate by uploading the CSR.
     */
    public $CsrType;

    /**
     * @var string The content of the uploaded csr.
If CsrType is parse, this field is required.
     */
    public $CsrContent;

    /**
     * @var string The common name bound to the certificate. if a CSR is uploaded, the domain name must be consistent with the common name resolved from the CSR.
     */
    public $CertificateDomain;

    /**
     * @var array Other domain names bound to the certificate. not required for single domain and wildcard domain certificates. required for multiple domain names and multiple wildcard domain names.
     */
    public $DomainList;

    /**
     * @var string Private key password, which is currently only used for the password when generating jks and pfx format certificates; other formats of private key certificates are not encrypted.	
     */
    public $KeyPassword;

    /**
     * @var string This field is required. Company name.
     */
    public $OrganizationName;

    /**
     * @var string This field is required.  Department name.
     */
    public $OrganizationDivision;

    /**
     * @var string This field is required. Company's detailed address.
     */
    public $OrganizationAddress;

    /**
     * @var string This field is required.Country name such as CN.
     */
    public $OrganizationCountry;

    /**
     * @var string This field is required, which specifies the city where the company is located.
     */
    public $OrganizationCity;

    /**
     * @var string This field is required, specifying the province where the company is located.
     */
    public $OrganizationRegion;

    /**
     * @var string Postal code of the organization
     */
    public $PostalCode;

    /**
     * @var string This field is required, the company's fixed-line phone area code.
     */
    public $PhoneAreaCode;

    /**
     * @var string This field is required, the company's landline number.
     */
    public $PhoneNumber;

    /**
     * @var string Certificate validation method. Validation types: DNS_AUTO = Automatic DNS validation (only supported for domains resolved by Tencent Cloud DNS with a normal resolution status), DNS = Manual DNS validation, FILE = File validation.
     */
    public $VerifyType;

    /**
     * @var string This field is required, manager name.
     */
    public $AdminFirstName;

    /**
     * @var string This field is required, the manager's surname.
     */
    public $AdminLastName;

    /**
     * @var string This field is required, the manager's mobile phone number.
     */
    public $AdminPhoneNum;

    /**
     * @var string This field is required, the manager's email address.
     */
    public $AdminEmail;

    /**
     * @var string This field is required, the manager position.
     */
    public $AdminPosition;

    /**
     * @var string This field is required, the contact person name.
     */
    public $ContactFirstName;

    /**
     * @var string This field is required, the contact person's surname.
     */
    public $ContactLastName;

    /**
     * @var string This field is required, the contact person's email address.
     */
    public $ContactEmail;

    /**
     * @var string This field is required, the contact person's mobile phone number.
     */
    public $ContactNumber;

    /**
     * @var string This field is required, the contact person position.
     */
    public $ContactPosition;

    /**
     * @var boolean Indicates whether it is a dv certificate. default value is false.
     */
    public $IsDV;

    /**
     * @param string $CertificateId Paid certificate id of materials to be submitted.
     * @param string $CsrType This field is required. Generation method of CSR, valid values are:
online: tencent cloud generates the CSR and private key based on the submitted parameter information and stores them encryptedly.
parse: generate the CSR and private key by itself, and apply for a certificate by uploading the CSR.
     * @param string $CsrContent The content of the uploaded csr.
If CsrType is parse, this field is required.
     * @param string $CertificateDomain The common name bound to the certificate. if a CSR is uploaded, the domain name must be consistent with the common name resolved from the CSR.
     * @param array $DomainList Other domain names bound to the certificate. not required for single domain and wildcard domain certificates. required for multiple domain names and multiple wildcard domain names.
     * @param string $KeyPassword Private key password, which is currently only used for the password when generating jks and pfx format certificates; other formats of private key certificates are not encrypted.	
     * @param string $OrganizationName This field is required. Company name.
     * @param string $OrganizationDivision This field is required.  Department name.
     * @param string $OrganizationAddress This field is required. Company's detailed address.
     * @param string $OrganizationCountry This field is required.Country name such as CN.
     * @param string $OrganizationCity This field is required, which specifies the city where the company is located.
     * @param string $OrganizationRegion This field is required, specifying the province where the company is located.
     * @param string $PostalCode Postal code of the organization
     * @param string $PhoneAreaCode This field is required, the company's fixed-line phone area code.
     * @param string $PhoneNumber This field is required, the company's landline number.
     * @param string $VerifyType Certificate validation method. Validation types: DNS_AUTO = Automatic DNS validation (only supported for domains resolved by Tencent Cloud DNS with a normal resolution status), DNS = Manual DNS validation, FILE = File validation.
     * @param string $AdminFirstName This field is required, manager name.
     * @param string $AdminLastName This field is required, the manager's surname.
     * @param string $AdminPhoneNum This field is required, the manager's mobile phone number.
     * @param string $AdminEmail This field is required, the manager's email address.
     * @param string $AdminPosition This field is required, the manager position.
     * @param string $ContactFirstName This field is required, the contact person name.
     * @param string $ContactLastName This field is required, the contact person's surname.
     * @param string $ContactEmail This field is required, the contact person's email address.
     * @param string $ContactNumber This field is required, the contact person's mobile phone number.
     * @param string $ContactPosition This field is required, the contact person position.
     * @param boolean $IsDV Indicates whether it is a dv certificate. default value is false.
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

        if (array_key_exists("IsDV",$param) and $param["IsDV"] !== null) {
            $this->IsDV = $param["IsDV"];
        }
    }
}
