<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * CertificateInfoSubmit request structure.
 *
 * @method string getCertId() Obtain Paid SSL certificate ID of materials to be submitted.	
 * @method void setCertId(string $CertId) Set Paid SSL certificate ID of materials to be submitted.	
 * @method string getGenCsrType() Obtain This field is required. CSR generation method, value is:
-online: Tencent Cloud submits the filled parameter information to generate a CSR and private key, and by Tencent Cloud for encrypted storage.
-parse: Generate CSR and private key manually, and apply for a certificate by uploading CSR.
 * @method void setGenCsrType(string $GenCsrType) Set This field is required. CSR generation method, value is:
-online: Tencent Cloud submits the filled parameter information to generate a CSR and private key, and by Tencent Cloud for encrypted storage.
-parse: Generate CSR and private key manually, and apply for a certificate by uploading CSR.
 * @method string getCertCommonName() Obtain Common name for certificate binding. If an uploaded CSR is used, that domain name must match the common name resolved by the CSR.
 * @method void setCertCommonName(string $CertCommonName) Set Common name for certificate binding. If an uploaded CSR is used, that domain name must match the common name resolved by the CSR.
 * @method integer getCompanyType() Obtain Organization information type. Valid values:
1 (Personal): Only DV-type certificates can be set to 1. For personal-type certificates, organization information fields (Org, Admin, Tech) can be omitted.
2 (Company): All types of certificates can be set to 2. Pass organization information fields as needed.
 * @method void setCompanyType(integer $CompanyType) Set Organization information type. Valid values:
1 (Personal): Only DV-type certificates can be set to 1. For personal-type certificates, organization information fields (Org, Admin, Tech) can be omitted.
2 (Company): All types of certificates can be set to 2. Pass organization information fields as needed.
 * @method string getCompanyId() Obtain Company ID can be viewed in the [Tencent Cloud Console](https://console.cloud.tencent.com/ssl/info). If no company information is found, set this parameter to 0. If company information matching the current order exists, you can view the company ID via [DescribeCompanies](https://www.tencentcloud.com/document/product/400/90375?from_cn_redirect=1). If a company ID is provided, parameters starting with "Org" can be omitted.


 * @method void setCompanyId(string $CompanyId) Set Company ID can be viewed in the [Tencent Cloud Console](https://console.cloud.tencent.com/ssl/info). If no company information is found, set this parameter to 0. If company information matching the current order exists, you can view the company ID via [DescribeCompanies](https://www.tencentcloud.com/document/product/400/90375?from_cn_redirect=1). If a company ID is provided, parameters starting with "Org" can be omitted.


 * @method string getOrgIdType() Obtain Company document type. Valid values:
TYDMZ (unified social credit code): This field is required only for CFCA certificates, not required for other types.
OTHERS
 * @method void setOrgIdType(string $OrgIdType) Set Company document type. Valid values:
TYDMZ (unified social credit code): This field is required only for CFCA certificates, not required for other types.
OTHERS
 * @method string getOrgIdNumber() Obtain Company identification number, value ranges from...to...
TYDMZ (unified social credit code): 11532xxxxxxxx24820

 * @method void setOrgIdNumber(string $OrgIdNumber) Set Company identification number, value ranges from...to...
TYDMZ (unified social credit code): 11532xxxxxxxx24820

 * @method string getAdminIdType() Obtain Document type of the manager. Valid values:
SFZ (ID card): This field is required only for CFCA certs, not required for other types.
HZ (passport): This field is required only for CFCA certs and not required for other types.
 * @method void setAdminIdType(string $AdminIdType) Set Document type of the manager. Valid values:
SFZ (ID card): This field is required only for CFCA certs, not required for other types.
HZ (passport): This field is required only for CFCA certs and not required for other types.
 * @method string getAdminIdNumber() Obtain ID number of the manager. This field is required only for CFCA certificates, not required for other types. Value ranges from...to...
ID card: 110000xxxxxxxx1242
HZ (Passport): EFxxxxxxx
 * @method void setAdminIdNumber(string $AdminIdNumber) Set ID number of the manager. This field is required only for CFCA certificates, not required for other types. Value ranges from...to...
ID card: 110000xxxxxxxx1242
HZ (Passport): EFxxxxxxx
 * @method string getTechIdType() Obtain Contact person document type. Valid values:
SFZ (ID card): This field is required only for CFCA certs, not required for other types.
HZ (passport): This field is required only for CFCA certs and not required for other types.
 * @method void setTechIdType(string $TechIdType) Set Contact person document type. Valid values:
SFZ (ID card): This field is required only for CFCA certs, not required for other types.
HZ (passport): This field is required only for CFCA certs and not required for other types.
 * @method string getTechIdNumber() Obtain ID number of the contact person. This field is required only for CFCA certs and not required for other types. Value ranges from...to...
ID card: 110000xxxxxxxx1242
HZ (Passport): EFxxxxxxx
 * @method void setTechIdNumber(string $TechIdNumber) Set ID number of the contact person. This field is required only for CFCA certs and not required for other types. Value ranges from...to...
ID card: 110000xxxxxxxx1242
HZ (Passport): EFxxxxxxx
 * @method string getCsr() Obtain Uploaded CSR content.
If GenCsrType is parse, this field is required.
 * @method void setCsr(string $Csr) Set Uploaded CSR content.
If GenCsrType is parse, this field is required.
 * @method array getDnsNames() Obtain Other domains bound to the certificate. No need to provide for single domain or wildcard certificates. Required for multi-domain names and multiple wildcard certificates.
 * @method void setDnsNames(array $DnsNames) Set Other domains bound to the certificate. No need to provide for single domain or wildcard certificates. Required for multi-domain names and multiple wildcard certificates.
 * @method string getKeyPass() Obtain Private key password. Currently used only when generating certs in jks or pfx format; private key certificates in other formats are unencrypted.	
 * @method void setKeyPass(string $KeyPass) Set Private key password. Currently used only when generating certs in jks or pfx format; private key certificates in other formats are unencrypted.	
 * @method string getOrgOrganization() Obtain Company name. This field is required if CompanyId or ManagerId is not provided.
 * @method void setOrgOrganization(string $OrgOrganization) Set Company name. This field is required if CompanyId or ManagerId is not provided.
 * @method string getOrgDivision() Obtain Department name. If not passing CompanyId or ManagerId, this field is required.
 * @method void setOrgDivision(string $OrgDivision) Set Department name. If not passing CompanyId or ManagerId, this field is required.
 * @method string getOrgAddress() Obtain Company detailed address. If not pass CompanyId or ManagerId, this field is required.
 * @method void setOrgAddress(string $OrgAddress) Set Company detailed address. If not pass CompanyId or ManagerId, this field is required.
 * @method string getOrgCountry() Obtain Country/region name, for example China: CN. If not passing CompanyId or ManagerId, this field is required.
 * @method void setOrgCountry(string $OrgCountry) Set Country/region name, for example China: CN. If not passing CompanyId or ManagerId, this field is required.
 * @method string getOrgCity() Obtain Located city. If not pass CompanyId or ManagerId, this field is required.
 * @method void setOrgCity(string $OrgCity) Set Located city. If not pass CompanyId or ManagerId, this field is required.
 * @method string getOrgRegion() Obtain Province where the company is located. If not passing CompanyId or ManagerId, this field is required.
 * @method void setOrgRegion(string $OrgRegion) Set Province where the company is located. If not passing CompanyId or ManagerId, this field is required.
 * @method string getOrgPhoneArea() Obtain Area code of the company. If not passing CompanyId or ManagerId, this field is required.
For example: 021. Pass 86 as the mobile number.
 * @method void setOrgPhoneArea(string $OrgPhoneArea) Set Area code of the company. If not passing CompanyId or ManagerId, this field is required.
For example: 021. Pass 86 as the mobile number.
 * @method string getOrgPhoneNumber() Obtain Company number. If CompanyId or ManagerId is not provided, this field is required.
 * @method void setOrgPhoneNumber(string $OrgPhoneNumber) Set Company number. If CompanyId or ManagerId is not provided, this field is required.
 * @method string getVerifyType() Obtain Domain validation method of the certificate
DNS: Manually add domain DNS validation. The user needs to manually add the verification value at the DNS service provider.
FILE: Manual addition of domain name FILE verification. Users are advised to manually add a specified path FILE in the root directory of the domain site to perform FILE verification. Either http or https passing is sufficient. The domain site must be accessible by overseas certificate authorities. The specific access allowlist is: 64.78.193.238, 216.168.247.9, 216.168.249.9, 54.189.196.217.
 * @method void setVerifyType(string $VerifyType) Set Domain validation method of the certificate
DNS: Manually add domain DNS validation. The user needs to manually add the verification value at the DNS service provider.
FILE: Manual addition of domain name FILE verification. Users are advised to manually add a specified path FILE in the root directory of the domain site to perform FILE verification. Either http or https passing is sufficient. The domain site must be accessible by overseas certificate authorities. The specific access allowlist is: 64.78.193.238, 216.168.247.9, 216.168.249.9, 54.189.196.217.
 * @method string getAdminFirstName() Obtain Manage name. If not passing ManagerId, this field is required.
 * @method void setAdminFirstName(string $AdminFirstName) Set Manage name. If not passing ManagerId, this field is required.
 * @method string getAdminLastName() Obtain Manager name. If not, this field is required when ManagerId is not passed.
 * @method void setAdminLastName(string $AdminLastName) Set Manager name. If not, this field is required when ManagerId is not passed.
 * @method string getAdminPhone() Obtain Manager mobile number. If not passing ManagerId, this field is required.
 * @method void setAdminPhone(string $AdminPhone) Set Manager mobile number. If not passing ManagerId, this field is required.
 * @method string getAdminEmail() Obtain Manager email address. If not passing ManagerId, this field is required.
 * @method void setAdminEmail(string $AdminEmail) Set Manager email address. If not passing ManagerId, this field is required.
 * @method string getAdminTitle() Obtain Manager position. If not passing ManagerId, this field is required.
 * @method void setAdminTitle(string $AdminTitle) Set Manager position. If not passing ManagerId, this field is required.
 * @method string getTechFirstName() Obtain Contact name. If not passing ManagerId, this field is required.
 * @method void setTechFirstName(string $TechFirstName) Set Contact name. If not passing ManagerId, this field is required.
 * @method string getTechLastName() Obtain Last name of the contact. If not, this field is required when ManagerId is not passed.
 * @method void setTechLastName(string $TechLastName) Set Last name of the contact. If not, this field is required when ManagerId is not passed.
 * @method string getContactEmail() Obtain Contact email address. This field is required when CompanyType is 1.
 * @method void setContactEmail(string $ContactEmail) Set Contact email address. This field is required when CompanyType is 1.
 * @method integer getAutoRenewFlag() Obtain Whether to enable auto-renewal: 0, not enabled; 1, enabled; defaults to 0.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Whether to enable auto-renewal: 0, not enabled; 1, enabled; defaults to 0.
 * @method string getCsrKeyParameter() Obtain Key pair parameters. RSA supports 2048 and 4096. ECC is only supported for prime256v1. This parameter is required when the CSR generation method is online.

 * @method void setCsrKeyParameter(string $CsrKeyParameter) Set Key pair parameters. RSA supports 2048 and 4096. ECC is only supported for prime256v1. This parameter is required when the CSR generation method is online.

 * @method string getCsrEncryptAlgo() Obtain Encryption algorithm, value is ECC or RSA, defaults to RSA. This parameter is required when CSR generation method is online.
 * @method void setCsrEncryptAlgo(string $CsrEncryptAlgo) Set Encryption algorithm, value is ECC or RSA, defaults to RSA. This parameter is required when CSR generation method is online.
 * @method string getManagerId() Obtain Manager ID can be viewed in the [Tencent Cloud Console](https://console.cloud.tencent.com/ssl/info). If no administrator information is found, pass 0 for this parameter. If administrator information exists that meets the current order, the manager ID can be selected based on [DescribeManagers](https://www.tencentcloud.com/document/product/400/52672?from_cn_redirect=1). If the manager ID is passed, parameters beginning with Org, Admin, or Tech can be omitted. The manager ID includes company information.

 * @method void setManagerId(string $ManagerId) Set Manager ID can be viewed in the [Tencent Cloud Console](https://console.cloud.tencent.com/ssl/info). If no administrator information is found, pass 0 for this parameter. If administrator information exists that meets the current order, the manager ID can be selected based on [DescribeManagers](https://www.tencentcloud.com/document/product/400/52672?from_cn_redirect=1). If the manager ID is passed, parameters beginning with Org, Admin, or Tech can be omitted. The manager ID includes company information.

 * @method string getTechPhone() Obtain Contact phone. If not passing ManagerId, this field is required.
 * @method void setTechPhone(string $TechPhone) Set Contact phone. If not passing ManagerId, this field is required.
 * @method string getTechEmail() Obtain contact email
 * @method void setTechEmail(string $TechEmail) Set contact email
 * @method string getTechTitle() Obtain Contact person position. If not passing ManagerId, this field is required.
 * @method void setTechTitle(string $TechTitle) Set Contact person position. If not passing ManagerId, this field is required.
 * @method integer getType() Obtain Certificate type
 * @method void setType(integer $Type) Set Certificate type
 * @method string getCaType() Obtain Valid only for Dnspod series certs. ca organization kind can be sectigo and digicert.
 * @method void setCaType(string $CaType) Set Valid only for Dnspod series certs. ca organization kind can be sectigo and digicert.
 * @method string getSignAlgo() Obtain signature algorithm
 * @method void setSignAlgo(string $SignAlgo) Set signature algorithm
 * @method boolean getUseCrossSignRoot() Obtain Whether to use intersect root certificate
 * @method void setUseCrossSignRoot(boolean $UseCrossSignRoot) Set Whether to use intersect root certificate
 */
class CertificateInfoSubmitRequest extends AbstractModel
{
    /**
     * @var string Paid SSL certificate ID of materials to be submitted.	
     */
    public $CertId;

    /**
     * @var string This field is required. CSR generation method, value is:
-online: Tencent Cloud submits the filled parameter information to generate a CSR and private key, and by Tencent Cloud for encrypted storage.
-parse: Generate CSR and private key manually, and apply for a certificate by uploading CSR.
     */
    public $GenCsrType;

    /**
     * @var string Common name for certificate binding. If an uploaded CSR is used, that domain name must match the common name resolved by the CSR.
     */
    public $CertCommonName;

    /**
     * @var integer Organization information type. Valid values:
1 (Personal): Only DV-type certificates can be set to 1. For personal-type certificates, organization information fields (Org, Admin, Tech) can be omitted.
2 (Company): All types of certificates can be set to 2. Pass organization information fields as needed.
     */
    public $CompanyType;

    /**
     * @var string Company ID can be viewed in the [Tencent Cloud Console](https://console.cloud.tencent.com/ssl/info). If no company information is found, set this parameter to 0. If company information matching the current order exists, you can view the company ID via [DescribeCompanies](https://www.tencentcloud.com/document/product/400/90375?from_cn_redirect=1). If a company ID is provided, parameters starting with "Org" can be omitted.


     */
    public $CompanyId;

    /**
     * @var string Company document type. Valid values:
TYDMZ (unified social credit code): This field is required only for CFCA certificates, not required for other types.
OTHERS
     */
    public $OrgIdType;

    /**
     * @var string Company identification number, value ranges from...to...
TYDMZ (unified social credit code): 11532xxxxxxxx24820

     */
    public $OrgIdNumber;

    /**
     * @var string Document type of the manager. Valid values:
SFZ (ID card): This field is required only for CFCA certs, not required for other types.
HZ (passport): This field is required only for CFCA certs and not required for other types.
     */
    public $AdminIdType;

    /**
     * @var string ID number of the manager. This field is required only for CFCA certificates, not required for other types. Value ranges from...to...
ID card: 110000xxxxxxxx1242
HZ (Passport): EFxxxxxxx
     */
    public $AdminIdNumber;

    /**
     * @var string Contact person document type. Valid values:
SFZ (ID card): This field is required only for CFCA certs, not required for other types.
HZ (passport): This field is required only for CFCA certs and not required for other types.
     */
    public $TechIdType;

    /**
     * @var string ID number of the contact person. This field is required only for CFCA certs and not required for other types. Value ranges from...to...
ID card: 110000xxxxxxxx1242
HZ (Passport): EFxxxxxxx
     */
    public $TechIdNumber;

    /**
     * @var string Uploaded CSR content.
If GenCsrType is parse, this field is required.
     */
    public $Csr;

    /**
     * @var array Other domains bound to the certificate. No need to provide for single domain or wildcard certificates. Required for multi-domain names and multiple wildcard certificates.
     */
    public $DnsNames;

    /**
     * @var string Private key password. Currently used only when generating certs in jks or pfx format; private key certificates in other formats are unencrypted.	
     */
    public $KeyPass;

    /**
     * @var string Company name. This field is required if CompanyId or ManagerId is not provided.
     */
    public $OrgOrganization;

    /**
     * @var string Department name. If not passing CompanyId or ManagerId, this field is required.
     */
    public $OrgDivision;

    /**
     * @var string Company detailed address. If not pass CompanyId or ManagerId, this field is required.
     */
    public $OrgAddress;

    /**
     * @var string Country/region name, for example China: CN. If not passing CompanyId or ManagerId, this field is required.
     */
    public $OrgCountry;

    /**
     * @var string Located city. If not pass CompanyId or ManagerId, this field is required.
     */
    public $OrgCity;

    /**
     * @var string Province where the company is located. If not passing CompanyId or ManagerId, this field is required.
     */
    public $OrgRegion;

    /**
     * @var string Area code of the company. If not passing CompanyId or ManagerId, this field is required.
For example: 021. Pass 86 as the mobile number.
     */
    public $OrgPhoneArea;

    /**
     * @var string Company number. If CompanyId or ManagerId is not provided, this field is required.
     */
    public $OrgPhoneNumber;

    /**
     * @var string Domain validation method of the certificate
DNS: Manually add domain DNS validation. The user needs to manually add the verification value at the DNS service provider.
FILE: Manual addition of domain name FILE verification. Users are advised to manually add a specified path FILE in the root directory of the domain site to perform FILE verification. Either http or https passing is sufficient. The domain site must be accessible by overseas certificate authorities. The specific access allowlist is: 64.78.193.238, 216.168.247.9, 216.168.249.9, 54.189.196.217.
     */
    public $VerifyType;

    /**
     * @var string Manage name. If not passing ManagerId, this field is required.
     */
    public $AdminFirstName;

    /**
     * @var string Manager name. If not, this field is required when ManagerId is not passed.
     */
    public $AdminLastName;

    /**
     * @var string Manager mobile number. If not passing ManagerId, this field is required.
     */
    public $AdminPhone;

    /**
     * @var string Manager email address. If not passing ManagerId, this field is required.
     */
    public $AdminEmail;

    /**
     * @var string Manager position. If not passing ManagerId, this field is required.
     */
    public $AdminTitle;

    /**
     * @var string Contact name. If not passing ManagerId, this field is required.
     */
    public $TechFirstName;

    /**
     * @var string Last name of the contact. If not, this field is required when ManagerId is not passed.
     */
    public $TechLastName;

    /**
     * @var string Contact email address. This field is required when CompanyType is 1.
     */
    public $ContactEmail;

    /**
     * @var integer Whether to enable auto-renewal: 0, not enabled; 1, enabled; defaults to 0.
     */
    public $AutoRenewFlag;

    /**
     * @var string Key pair parameters. RSA supports 2048 and 4096. ECC is only supported for prime256v1. This parameter is required when the CSR generation method is online.

     */
    public $CsrKeyParameter;

    /**
     * @var string Encryption algorithm, value is ECC or RSA, defaults to RSA. This parameter is required when CSR generation method is online.
     */
    public $CsrEncryptAlgo;

    /**
     * @var string Manager ID can be viewed in the [Tencent Cloud Console](https://console.cloud.tencent.com/ssl/info). If no administrator information is found, pass 0 for this parameter. If administrator information exists that meets the current order, the manager ID can be selected based on [DescribeManagers](https://www.tencentcloud.com/document/product/400/52672?from_cn_redirect=1). If the manager ID is passed, parameters beginning with Org, Admin, or Tech can be omitted. The manager ID includes company information.

     */
    public $ManagerId;

    /**
     * @var string Contact phone. If not passing ManagerId, this field is required.
     */
    public $TechPhone;

    /**
     * @var string contact email
     */
    public $TechEmail;

    /**
     * @var string Contact person position. If not passing ManagerId, this field is required.
     */
    public $TechTitle;

    /**
     * @var integer Certificate type
     */
    public $Type;

    /**
     * @var string Valid only for Dnspod series certs. ca organization kind can be sectigo and digicert.
     */
    public $CaType;

    /**
     * @var string signature algorithm
     */
    public $SignAlgo;

    /**
     * @var boolean Whether to use intersect root certificate
     */
    public $UseCrossSignRoot;

    /**
     * @param string $CertId Paid SSL certificate ID of materials to be submitted.	
     * @param string $GenCsrType This field is required. CSR generation method, value is:
-online: Tencent Cloud submits the filled parameter information to generate a CSR and private key, and by Tencent Cloud for encrypted storage.
-parse: Generate CSR and private key manually, and apply for a certificate by uploading CSR.
     * @param string $CertCommonName Common name for certificate binding. If an uploaded CSR is used, that domain name must match the common name resolved by the CSR.
     * @param integer $CompanyType Organization information type. Valid values:
1 (Personal): Only DV-type certificates can be set to 1. For personal-type certificates, organization information fields (Org, Admin, Tech) can be omitted.
2 (Company): All types of certificates can be set to 2. Pass organization information fields as needed.
     * @param string $CompanyId Company ID can be viewed in the [Tencent Cloud Console](https://console.cloud.tencent.com/ssl/info). If no company information is found, set this parameter to 0. If company information matching the current order exists, you can view the company ID via [DescribeCompanies](https://www.tencentcloud.com/document/product/400/90375?from_cn_redirect=1). If a company ID is provided, parameters starting with "Org" can be omitted.


     * @param string $OrgIdType Company document type. Valid values:
TYDMZ (unified social credit code): This field is required only for CFCA certificates, not required for other types.
OTHERS
     * @param string $OrgIdNumber Company identification number, value ranges from...to...
TYDMZ (unified social credit code): 11532xxxxxxxx24820

     * @param string $AdminIdType Document type of the manager. Valid values:
SFZ (ID card): This field is required only for CFCA certs, not required for other types.
HZ (passport): This field is required only for CFCA certs and not required for other types.
     * @param string $AdminIdNumber ID number of the manager. This field is required only for CFCA certificates, not required for other types. Value ranges from...to...
ID card: 110000xxxxxxxx1242
HZ (Passport): EFxxxxxxx
     * @param string $TechIdType Contact person document type. Valid values:
SFZ (ID card): This field is required only for CFCA certs, not required for other types.
HZ (passport): This field is required only for CFCA certs and not required for other types.
     * @param string $TechIdNumber ID number of the contact person. This field is required only for CFCA certs and not required for other types. Value ranges from...to...
ID card: 110000xxxxxxxx1242
HZ (Passport): EFxxxxxxx
     * @param string $Csr Uploaded CSR content.
If GenCsrType is parse, this field is required.
     * @param array $DnsNames Other domains bound to the certificate. No need to provide for single domain or wildcard certificates. Required for multi-domain names and multiple wildcard certificates.
     * @param string $KeyPass Private key password. Currently used only when generating certs in jks or pfx format; private key certificates in other formats are unencrypted.	
     * @param string $OrgOrganization Company name. This field is required if CompanyId or ManagerId is not provided.
     * @param string $OrgDivision Department name. If not passing CompanyId or ManagerId, this field is required.
     * @param string $OrgAddress Company detailed address. If not pass CompanyId or ManagerId, this field is required.
     * @param string $OrgCountry Country/region name, for example China: CN. If not passing CompanyId or ManagerId, this field is required.
     * @param string $OrgCity Located city. If not pass CompanyId or ManagerId, this field is required.
     * @param string $OrgRegion Province where the company is located. If not passing CompanyId or ManagerId, this field is required.
     * @param string $OrgPhoneArea Area code of the company. If not passing CompanyId or ManagerId, this field is required.
For example: 021. Pass 86 as the mobile number.
     * @param string $OrgPhoneNumber Company number. If CompanyId or ManagerId is not provided, this field is required.
     * @param string $VerifyType Domain validation method of the certificate
DNS: Manually add domain DNS validation. The user needs to manually add the verification value at the DNS service provider.
FILE: Manual addition of domain name FILE verification. Users are advised to manually add a specified path FILE in the root directory of the domain site to perform FILE verification. Either http or https passing is sufficient. The domain site must be accessible by overseas certificate authorities. The specific access allowlist is: 64.78.193.238, 216.168.247.9, 216.168.249.9, 54.189.196.217.
     * @param string $AdminFirstName Manage name. If not passing ManagerId, this field is required.
     * @param string $AdminLastName Manager name. If not, this field is required when ManagerId is not passed.
     * @param string $AdminPhone Manager mobile number. If not passing ManagerId, this field is required.
     * @param string $AdminEmail Manager email address. If not passing ManagerId, this field is required.
     * @param string $AdminTitle Manager position. If not passing ManagerId, this field is required.
     * @param string $TechFirstName Contact name. If not passing ManagerId, this field is required.
     * @param string $TechLastName Last name of the contact. If not, this field is required when ManagerId is not passed.
     * @param string $ContactEmail Contact email address. This field is required when CompanyType is 1.
     * @param integer $AutoRenewFlag Whether to enable auto-renewal: 0, not enabled; 1, enabled; defaults to 0.
     * @param string $CsrKeyParameter Key pair parameters. RSA supports 2048 and 4096. ECC is only supported for prime256v1. This parameter is required when the CSR generation method is online.

     * @param string $CsrEncryptAlgo Encryption algorithm, value is ECC or RSA, defaults to RSA. This parameter is required when CSR generation method is online.
     * @param string $ManagerId Manager ID can be viewed in the [Tencent Cloud Console](https://console.cloud.tencent.com/ssl/info). If no administrator information is found, pass 0 for this parameter. If administrator information exists that meets the current order, the manager ID can be selected based on [DescribeManagers](https://www.tencentcloud.com/document/product/400/52672?from_cn_redirect=1). If the manager ID is passed, parameters beginning with Org, Admin, or Tech can be omitted. The manager ID includes company information.

     * @param string $TechPhone Contact phone. If not passing ManagerId, this field is required.
     * @param string $TechEmail contact email
     * @param string $TechTitle Contact person position. If not passing ManagerId, this field is required.
     * @param integer $Type Certificate type
     * @param string $CaType Valid only for Dnspod series certs. ca organization kind can be sectigo and digicert.
     * @param string $SignAlgo signature algorithm
     * @param boolean $UseCrossSignRoot Whether to use intersect root certificate
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("GenCsrType",$param) and $param["GenCsrType"] !== null) {
            $this->GenCsrType = $param["GenCsrType"];
        }

        if (array_key_exists("CertCommonName",$param) and $param["CertCommonName"] !== null) {
            $this->CertCommonName = $param["CertCommonName"];
        }

        if (array_key_exists("CompanyType",$param) and $param["CompanyType"] !== null) {
            $this->CompanyType = $param["CompanyType"];
        }

        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("OrgIdType",$param) and $param["OrgIdType"] !== null) {
            $this->OrgIdType = $param["OrgIdType"];
        }

        if (array_key_exists("OrgIdNumber",$param) and $param["OrgIdNumber"] !== null) {
            $this->OrgIdNumber = $param["OrgIdNumber"];
        }

        if (array_key_exists("AdminIdType",$param) and $param["AdminIdType"] !== null) {
            $this->AdminIdType = $param["AdminIdType"];
        }

        if (array_key_exists("AdminIdNumber",$param) and $param["AdminIdNumber"] !== null) {
            $this->AdminIdNumber = $param["AdminIdNumber"];
        }

        if (array_key_exists("TechIdType",$param) and $param["TechIdType"] !== null) {
            $this->TechIdType = $param["TechIdType"];
        }

        if (array_key_exists("TechIdNumber",$param) and $param["TechIdNumber"] !== null) {
            $this->TechIdNumber = $param["TechIdNumber"];
        }

        if (array_key_exists("Csr",$param) and $param["Csr"] !== null) {
            $this->Csr = $param["Csr"];
        }

        if (array_key_exists("DnsNames",$param) and $param["DnsNames"] !== null) {
            $this->DnsNames = $param["DnsNames"];
        }

        if (array_key_exists("KeyPass",$param) and $param["KeyPass"] !== null) {
            $this->KeyPass = $param["KeyPass"];
        }

        if (array_key_exists("OrgOrganization",$param) and $param["OrgOrganization"] !== null) {
            $this->OrgOrganization = $param["OrgOrganization"];
        }

        if (array_key_exists("OrgDivision",$param) and $param["OrgDivision"] !== null) {
            $this->OrgDivision = $param["OrgDivision"];
        }

        if (array_key_exists("OrgAddress",$param) and $param["OrgAddress"] !== null) {
            $this->OrgAddress = $param["OrgAddress"];
        }

        if (array_key_exists("OrgCountry",$param) and $param["OrgCountry"] !== null) {
            $this->OrgCountry = $param["OrgCountry"];
        }

        if (array_key_exists("OrgCity",$param) and $param["OrgCity"] !== null) {
            $this->OrgCity = $param["OrgCity"];
        }

        if (array_key_exists("OrgRegion",$param) and $param["OrgRegion"] !== null) {
            $this->OrgRegion = $param["OrgRegion"];
        }

        if (array_key_exists("OrgPhoneArea",$param) and $param["OrgPhoneArea"] !== null) {
            $this->OrgPhoneArea = $param["OrgPhoneArea"];
        }

        if (array_key_exists("OrgPhoneNumber",$param) and $param["OrgPhoneNumber"] !== null) {
            $this->OrgPhoneNumber = $param["OrgPhoneNumber"];
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

        if (array_key_exists("AdminPhone",$param) and $param["AdminPhone"] !== null) {
            $this->AdminPhone = $param["AdminPhone"];
        }

        if (array_key_exists("AdminEmail",$param) and $param["AdminEmail"] !== null) {
            $this->AdminEmail = $param["AdminEmail"];
        }

        if (array_key_exists("AdminTitle",$param) and $param["AdminTitle"] !== null) {
            $this->AdminTitle = $param["AdminTitle"];
        }

        if (array_key_exists("TechFirstName",$param) and $param["TechFirstName"] !== null) {
            $this->TechFirstName = $param["TechFirstName"];
        }

        if (array_key_exists("TechLastName",$param) and $param["TechLastName"] !== null) {
            $this->TechLastName = $param["TechLastName"];
        }

        if (array_key_exists("ContactEmail",$param) and $param["ContactEmail"] !== null) {
            $this->ContactEmail = $param["ContactEmail"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("CsrKeyParameter",$param) and $param["CsrKeyParameter"] !== null) {
            $this->CsrKeyParameter = $param["CsrKeyParameter"];
        }

        if (array_key_exists("CsrEncryptAlgo",$param) and $param["CsrEncryptAlgo"] !== null) {
            $this->CsrEncryptAlgo = $param["CsrEncryptAlgo"];
        }

        if (array_key_exists("ManagerId",$param) and $param["ManagerId"] !== null) {
            $this->ManagerId = $param["ManagerId"];
        }

        if (array_key_exists("TechPhone",$param) and $param["TechPhone"] !== null) {
            $this->TechPhone = $param["TechPhone"];
        }

        if (array_key_exists("TechEmail",$param) and $param["TechEmail"] !== null) {
            $this->TechEmail = $param["TechEmail"];
        }

        if (array_key_exists("TechTitle",$param) and $param["TechTitle"] !== null) {
            $this->TechTitle = $param["TechTitle"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CaType",$param) and $param["CaType"] !== null) {
            $this->CaType = $param["CaType"];
        }

        if (array_key_exists("SignAlgo",$param) and $param["SignAlgo"] !== null) {
            $this->SignAlgo = $param["SignAlgo"];
        }

        if (array_key_exists("UseCrossSignRoot",$param) and $param["UseCrossSignRoot"] !== null) {
            $this->UseCrossSignRoot = $param["UseCrossSignRoot"];
        }
    }
}
