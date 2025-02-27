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
 * @method string getDvAuthMethod() Obtain Certificate domain validation methods:

DNS_AUTO: Automatically add domain DNS validation. Requires the user's domain to be hosted on 'Cloud DNS' and associated with the same Tencent Cloud account as the certificate application.

DNS: Manually add domain DNS validation. Requires the user to manually add the validation value at their domain's DNS service provider.

FILE: Manually add domain file validation. Requires the user to manually add a specified path file in the root directory of the domain site for file validation. Either HTTP or HTTPS validation will suffice; the domain site must be accessible by overseas CA institutions. The specific access whitelist is: 64.78.193.238, 216.168.247.9, 216.168.249.9, 54.189.196.217.
 * @method void setDvAuthMethod(string $DvAuthMethod) Set Certificate domain validation methods:

DNS_AUTO: Automatically add domain DNS validation. Requires the user's domain to be hosted on 'Cloud DNS' and associated with the same Tencent Cloud account as the certificate application.

DNS: Manually add domain DNS validation. Requires the user to manually add the validation value at their domain's DNS service provider.

FILE: Manually add domain file validation. Requires the user to manually add a specified path file in the root directory of the domain site for file validation. Either HTTP or HTTPS validation will suffice; the domain site must be accessible by overseas CA institutions. The specific access whitelist is: 64.78.193.238, 216.168.247.9, 216.168.249.9, 54.189.196.217.
 * @method string getDomainName() Obtain The domain bound to the certificate.
 * @method void setDomainName(string $DomainName) Set The domain bound to the certificate.
 * @method integer getProjectId() Obtain The project ID associated with the certificate. Default is 0 (default project)
 * @method void setProjectId(integer $ProjectId) Set The project ID associated with the certificate. Default is 0 (default project)
 * @method string getPackageType() Obtain Certificate type, optional, currently only type 83 is supported. 83 = trustasia c1 dv free.
 * @method void setPackageType(string $PackageType) Set Certificate type, optional, currently only type 83 is supported. 83 = trustasia c1 dv free.
 * @method string getContactEmail() Obtain The email associated with the certificate order, By default, it uses the Tencent Cloud account email. If it does not exist, a fixed email address will be used.
 * @method void setContactEmail(string $ContactEmail) Set The email associated with the certificate order, By default, it uses the Tencent Cloud account email. If it does not exist, a fixed email address will be used.
 * @method string getContactPhone() Obtain The mobile phone number associated with the certificate. If it does not exist, a fixed mobile phone number will be used.
 * @method void setContactPhone(string $ContactPhone) Set The mobile phone number associated with the certificate. If it does not exist, a fixed mobile phone number will be used.
 * @method string getValidityPeriod() Obtain Certificate valid period, 3 months by default, currently only 3 months is supported.
 * @method void setValidityPeriod(string $ValidityPeriod) Set Certificate valid period, 3 months by default, currently only 3 months is supported.
 * @method string getCsrEncryptAlgo() Obtain Encryption algorithm, values can be ECC or RSA, default is RSA.
 * @method void setCsrEncryptAlgo(string $CsrEncryptAlgo) Set Encryption algorithm, values can be ECC or RSA, default is RSA.
 * @method string getCsrKeyParameter() Obtain Key pair parameters. RSA supports only 2048. ECC supports only prime256v1. When the encryption algorithm is set to ECC, this parameter is mandatory.
 * @method void setCsrKeyParameter(string $CsrKeyParameter) Set Key pair parameters. RSA supports only 2048. ECC supports only prime256v1. When the encryption algorithm is set to ECC, this parameter is mandatory.
 * @method string getCsrKeyPassword() Obtain Private key password, currently only used when generating jks, pfx format certificates; private key certificates of other formats are not encrypted.
 * @method void setCsrKeyPassword(string $CsrKeyPassword) Set Private key password, currently only used when generating jks, pfx format certificates; private key certificates of other formats are not encrypted.
 * @method string getAlias() Obtain Certificate alias.
 * @method void setAlias(string $Alias) Set Certificate alias.
 * @method string getOldCertificateId() Obtain Old certificate id, used for certificate renewal (the certificate valid period is within 30 days and not expired), a renewal relationship will be established, which can be hosted; not providing it means applying for a new certificate.
 * @method void setOldCertificateId(string $OldCertificateId) Set Old certificate id, used for certificate renewal (the certificate valid period is within 30 days and not expired), a renewal relationship will be established, which can be hosted; not providing it means applying for a new certificate.
 * @method string getPackageId() Obtain Benefit package ID, used for free certificate expansion package, the free certificate expansion package has been discontinued.
 * @method void setPackageId(string $PackageId) Set Benefit package ID, used for free certificate expansion package, the free certificate expansion package has been discontinued.
 * @method boolean getDeleteDnsAutoRecord() Obtain Whether to delete the automatic domain name verification record after issuance, which is fasle by default. This parameter can be passed in only for domain names of the DNS_AUTO verification type.
 * @method void setDeleteDnsAutoRecord(boolean $DeleteDnsAutoRecord) Set Whether to delete the automatic domain name verification record after issuance, which is fasle by default. This parameter can be passed in only for domain names of the DNS_AUTO verification type.
 * @method array getDnsNames() Obtain Other domains bound to the certificate, to be opened. This parameter is not currently supported.
 * @method void setDnsNames(array $DnsNames) Set Other domains bound to the certificate, to be opened. This parameter is not currently supported.
 */
class ApplyCertificateRequest extends AbstractModel
{
    /**
     * @var string Certificate domain validation methods:

DNS_AUTO: Automatically add domain DNS validation. Requires the user's domain to be hosted on 'Cloud DNS' and associated with the same Tencent Cloud account as the certificate application.

DNS: Manually add domain DNS validation. Requires the user to manually add the validation value at their domain's DNS service provider.

FILE: Manually add domain file validation. Requires the user to manually add a specified path file in the root directory of the domain site for file validation. Either HTTP or HTTPS validation will suffice; the domain site must be accessible by overseas CA institutions. The specific access whitelist is: 64.78.193.238, 216.168.247.9, 216.168.249.9, 54.189.196.217.
     */
    public $DvAuthMethod;

    /**
     * @var string The domain bound to the certificate.
     */
    public $DomainName;

    /**
     * @var integer The project ID associated with the certificate. Default is 0 (default project)
     */
    public $ProjectId;

    /**
     * @var string Certificate type, optional, currently only type 83 is supported. 83 = trustasia c1 dv free.
     */
    public $PackageType;

    /**
     * @var string The email associated with the certificate order, By default, it uses the Tencent Cloud account email. If it does not exist, a fixed email address will be used.
     */
    public $ContactEmail;

    /**
     * @var string The mobile phone number associated with the certificate. If it does not exist, a fixed mobile phone number will be used.
     */
    public $ContactPhone;

    /**
     * @var string Certificate valid period, 3 months by default, currently only 3 months is supported.
     */
    public $ValidityPeriod;

    /**
     * @var string Encryption algorithm, values can be ECC or RSA, default is RSA.
     */
    public $CsrEncryptAlgo;

    /**
     * @var string Key pair parameters. RSA supports only 2048. ECC supports only prime256v1. When the encryption algorithm is set to ECC, this parameter is mandatory.
     */
    public $CsrKeyParameter;

    /**
     * @var string Private key password, currently only used when generating jks, pfx format certificates; private key certificates of other formats are not encrypted.
     */
    public $CsrKeyPassword;

    /**
     * @var string Certificate alias.
     */
    public $Alias;

    /**
     * @var string Old certificate id, used for certificate renewal (the certificate valid period is within 30 days and not expired), a renewal relationship will be established, which can be hosted; not providing it means applying for a new certificate.
     */
    public $OldCertificateId;

    /**
     * @var string Benefit package ID, used for free certificate expansion package, the free certificate expansion package has been discontinued.
     */
    public $PackageId;

    /**
     * @var boolean Whether to delete the automatic domain name verification record after issuance, which is fasle by default. This parameter can be passed in only for domain names of the DNS_AUTO verification type.
     */
    public $DeleteDnsAutoRecord;

    /**
     * @var array Other domains bound to the certificate, to be opened. This parameter is not currently supported.
     */
    public $DnsNames;

    /**
     * @param string $DvAuthMethod Certificate domain validation methods:

DNS_AUTO: Automatically add domain DNS validation. Requires the user's domain to be hosted on 'Cloud DNS' and associated with the same Tencent Cloud account as the certificate application.

DNS: Manually add domain DNS validation. Requires the user to manually add the validation value at their domain's DNS service provider.

FILE: Manually add domain file validation. Requires the user to manually add a specified path file in the root directory of the domain site for file validation. Either HTTP or HTTPS validation will suffice; the domain site must be accessible by overseas CA institutions. The specific access whitelist is: 64.78.193.238, 216.168.247.9, 216.168.249.9, 54.189.196.217.
     * @param string $DomainName The domain bound to the certificate.
     * @param integer $ProjectId The project ID associated with the certificate. Default is 0 (default project)
     * @param string $PackageType Certificate type, optional, currently only type 83 is supported. 83 = trustasia c1 dv free.
     * @param string $ContactEmail The email associated with the certificate order, By default, it uses the Tencent Cloud account email. If it does not exist, a fixed email address will be used.
     * @param string $ContactPhone The mobile phone number associated with the certificate. If it does not exist, a fixed mobile phone number will be used.
     * @param string $ValidityPeriod Certificate valid period, 3 months by default, currently only 3 months is supported.
     * @param string $CsrEncryptAlgo Encryption algorithm, values can be ECC or RSA, default is RSA.
     * @param string $CsrKeyParameter Key pair parameters. RSA supports only 2048. ECC supports only prime256v1. When the encryption algorithm is set to ECC, this parameter is mandatory.
     * @param string $CsrKeyPassword Private key password, currently only used when generating jks, pfx format certificates; private key certificates of other formats are not encrypted.
     * @param string $Alias Certificate alias.
     * @param string $OldCertificateId Old certificate id, used for certificate renewal (the certificate valid period is within 30 days and not expired), a renewal relationship will be established, which can be hosted; not providing it means applying for a new certificate.
     * @param string $PackageId Benefit package ID, used for free certificate expansion package, the free certificate expansion package has been discontinued.
     * @param boolean $DeleteDnsAutoRecord Whether to delete the automatic domain name verification record after issuance, which is fasle by default. This parameter can be passed in only for domain names of the DNS_AUTO verification type.
     * @param array $DnsNames Other domains bound to the certificate, to be opened. This parameter is not currently supported.
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
