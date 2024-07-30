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
 * ApplyCertificate request structure.
 *
 * @method string getDvAuthMethod() Obtain Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation.
 * @method void setDvAuthMethod(string $DvAuthMethod) Set Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation.
 * @method string getDomainName() Obtain Domain name
 * @method void setDomainName(string $DomainName) Set Domain name
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getPackageType() Obtain Certificate type. Currently, the only supported value is 2, which indicates TrustAsia TLS RSA CA.
 * @method void setPackageType(string $PackageType) Set Certificate type. Currently, the only supported value is 2, which indicates TrustAsia TLS RSA CA.
 * @method string getContactEmail() Obtain Email address
 * @method void setContactEmail(string $ContactEmail) Set Email address
 * @method string getContactPhone() Obtain Mobile number
 * @method void setContactPhone(string $ContactPhone) Set Mobile number
 * @method string getValidityPeriod() Obtain Validity period. The default value is 12 months, which is the only supported value currently.
 * @method void setValidityPeriod(string $ValidityPeriod) Set Validity period. The default value is 12 months, which is the only supported value currently.
 * @method string getCsrEncryptAlgo() Obtain Encryption algorithm. RSA and ECC are supported.
 * @method void setCsrEncryptAlgo(string $CsrEncryptAlgo) Set Encryption algorithm. RSA and ECC are supported.
 * @method string getCsrKeyParameter() Obtain Key pair parameters. RSA supports only 2048. ECC supports only prime256v1. When the encryption algorithm is set to ECC, this parameter is mandatory.
 * @method void setCsrKeyParameter(string $CsrKeyParameter) Set Key pair parameters. RSA supports only 2048. ECC supports only prime256v1. When the encryption algorithm is set to ECC, this parameter is mandatory.
 * @method string getCsrKeyPassword() Obtain CSR encryption password
 * @method void setCsrKeyPassword(string $CsrKeyPassword) Set CSR encryption password
 * @method string getAlias() Obtain Alias
 * @method void setAlias(string $Alias) Set Alias
 * @method string getOldCertificateId() Obtain Original certificate ID, which is used to apply for a new certificate.
 * @method void setOldCertificateId(string $OldCertificateId) Set Original certificate ID, which is used to apply for a new certificate.
 * @method string getPackageId() Obtain Benefit package ID, which is used to expand the free certificate package
 * @method void setPackageId(string $PackageId) Set Benefit package ID, which is used to expand the free certificate package
 * @method boolean getDeleteDnsAutoRecord() Obtain Whether to delete the automatic domain name verification record after issuance, which is no by default. This parameter can be passed in only for domain names of the DNS_AUTO verification type.
 * @method void setDeleteDnsAutoRecord(boolean $DeleteDnsAutoRecord) Set Whether to delete the automatic domain name verification record after issuance, which is no by default. This parameter can be passed in only for domain names of the DNS_AUTO verification type.
 * @method array getDnsNames() Obtain 
 * @method void setDnsNames(array $DnsNames) Set 
 */
class ApplyCertificateRequest extends AbstractModel
{
    /**
     * @var string Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation.
     */
    public $DvAuthMethod;

    /**
     * @var string Domain name
     */
    public $DomainName;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Certificate type. Currently, the only supported value is 2, which indicates TrustAsia TLS RSA CA.
     */
    public $PackageType;

    /**
     * @var string Email address
     */
    public $ContactEmail;

    /**
     * @var string Mobile number
     */
    public $ContactPhone;

    /**
     * @var string Validity period. The default value is 12 months, which is the only supported value currently.
     */
    public $ValidityPeriod;

    /**
     * @var string Encryption algorithm. RSA and ECC are supported.
     */
    public $CsrEncryptAlgo;

    /**
     * @var string Key pair parameters. RSA supports only 2048. ECC supports only prime256v1. When the encryption algorithm is set to ECC, this parameter is mandatory.
     */
    public $CsrKeyParameter;

    /**
     * @var string CSR encryption password
     */
    public $CsrKeyPassword;

    /**
     * @var string Alias
     */
    public $Alias;

    /**
     * @var string Original certificate ID, which is used to apply for a new certificate.
     */
    public $OldCertificateId;

    /**
     * @var string Benefit package ID, which is used to expand the free certificate package
     */
    public $PackageId;

    /**
     * @var boolean Whether to delete the automatic domain name verification record after issuance, which is no by default. This parameter can be passed in only for domain names of the DNS_AUTO verification type.
     */
    public $DeleteDnsAutoRecord;

    /**
     * @var array 
     */
    public $DnsNames;

    /**
     * @param string $DvAuthMethod Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation.
     * @param string $DomainName Domain name
     * @param integer $ProjectId Project ID
     * @param string $PackageType Certificate type. Currently, the only supported value is 2, which indicates TrustAsia TLS RSA CA.
     * @param string $ContactEmail Email address
     * @param string $ContactPhone Mobile number
     * @param string $ValidityPeriod Validity period. The default value is 12 months, which is the only supported value currently.
     * @param string $CsrEncryptAlgo Encryption algorithm. RSA and ECC are supported.
     * @param string $CsrKeyParameter Key pair parameters. RSA supports only 2048. ECC supports only prime256v1. When the encryption algorithm is set to ECC, this parameter is mandatory.
     * @param string $CsrKeyPassword CSR encryption password
     * @param string $Alias Alias
     * @param string $OldCertificateId Original certificate ID, which is used to apply for a new certificate.
     * @param string $PackageId Benefit package ID, which is used to expand the free certificate package
     * @param boolean $DeleteDnsAutoRecord Whether to delete the automatic domain name verification record after issuance, which is no by default. This parameter can be passed in only for domain names of the DNS_AUTO verification type.
     * @param array $DnsNames 
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
        if (array_key_exists("DvAuthMethod",$param) and $param["DvAuthMethod"] !== null) {
            $this->DvAuthMethod = $param["DvAuthMethod"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("ContactEmail",$param) and $param["ContactEmail"] !== null) {
            $this->ContactEmail = $param["ContactEmail"];
        }

        if (array_key_exists("ContactPhone",$param) and $param["ContactPhone"] !== null) {
            $this->ContactPhone = $param["ContactPhone"];
        }

        if (array_key_exists("ValidityPeriod",$param) and $param["ValidityPeriod"] !== null) {
            $this->ValidityPeriod = $param["ValidityPeriod"];
        }

        if (array_key_exists("CsrEncryptAlgo",$param) and $param["CsrEncryptAlgo"] !== null) {
            $this->CsrEncryptAlgo = $param["CsrEncryptAlgo"];
        }

        if (array_key_exists("CsrKeyParameter",$param) and $param["CsrKeyParameter"] !== null) {
            $this->CsrKeyParameter = $param["CsrKeyParameter"];
        }

        if (array_key_exists("CsrKeyPassword",$param) and $param["CsrKeyPassword"] !== null) {
            $this->CsrKeyPassword = $param["CsrKeyPassword"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("DeleteDnsAutoRecord",$param) and $param["DeleteDnsAutoRecord"] !== null) {
            $this->DeleteDnsAutoRecord = $param["DeleteDnsAutoRecord"];
        }

        if (array_key_exists("DnsNames",$param) and $param["DnsNames"] !== null) {
            $this->DnsNames = $param["DnsNames"];
        }
    }
}
