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
 * Content of the `Certificates` parameter returned by `DescribeCertificates`
 *
 * @method string getOwnerUin() Obtain User UIN
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerUin(string $OwnerUin) Set User UIN
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProjectId() Obtain Project ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFrom() Obtain Certificate source
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFrom(string $From) Set Certificate source
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPackageType() Obtain The certificate plan type. Valid values:
null: Certificates uploaded by users (no plan type)
`1`: GeoTrust DV SSL CA - G3; `2`: TrustAsia TLS RSA CA; `3`: SecureSite EV Pro; `4`: SecureSite EV; `5`: SecureSite OV Pro; `6`: SecureSite OV; `7`: SecureSite OV wildcard; `8`: GeoTrust EV; `9`: GeoTrust OV; `10`: GeoTrust OV wildcard; `11`: TrustAsia DV multi-domain; `12`: TrustAsia DV wildcard; `13`: TrustAsia OV wildcard D3; `14`: TrustAsia OV D3; `15`: TrustAsia OV multi-domain D3; `16`: TrustAsia EV D3; `17`: TrustAsia EV multi-domain D3; `18`: GlobalSign OV; `19`: GlobalSign OV wildcard; `20`: GlobalSign EV; `21`: TrustAsia OV wildcard multi-domain D3; `22`: GlobalSign OV multi-domain; `23`: GlobalSign OV wildcard multi-domain; `24`: GlobalSign EV multi-domain
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPackageType(string $PackageType) Set The certificate plan type. Valid values:
null: Certificates uploaded by users (no plan type)
`1`: GeoTrust DV SSL CA - G3; `2`: TrustAsia TLS RSA CA; `3`: SecureSite EV Pro; `4`: SecureSite EV; `5`: SecureSite OV Pro; `6`: SecureSite OV; `7`: SecureSite OV wildcard; `8`: GeoTrust EV; `9`: GeoTrust OV; `10`: GeoTrust OV wildcard; `11`: TrustAsia DV multi-domain; `12`: TrustAsia DV wildcard; `13`: TrustAsia OV wildcard D3; `14`: TrustAsia OV D3; `15`: TrustAsia OV multi-domain D3; `16`: TrustAsia EV D3; `17`: TrustAsia EV multi-domain D3; `18`: GlobalSign OV; `19`: GlobalSign OV wildcard; `20`: GlobalSign EV; `21`: TrustAsia OV wildcard multi-domain D3; `22`: GlobalSign OV multi-domain; `23`: GlobalSign OV wildcard multi-domain; `24`: GlobalSign EV multi-domain
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCertificateType() Obtain Certificate type. `CA`: client certificate; `SVR`: server certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateType(string $CertificateType) Set Certificate type. `CA`: client certificate; `SVR`: server certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProductZhName() Obtain Issuer
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProductZhName(string $ProductZhName) Set Issuer
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain Primary domain name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Primary domain name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAlias() Obtain Alias
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAlias(string $Alias) Set Alias
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status. `0`: Reviewing; `1`: Approved; `2`: Unapproved; `3`: Expired; `4`: DNS record added for domain names of the DNS_AUTO verification type; `5`: Enterprise-grade certificate, pending submission; `6`: Canceling order; `7`: Canceled; `8`: Information submitted, pending confirmation letter upload; `9`: Revoking certificate; `10`: Revoked; `11`: Reissuing; `12`: Pending revocation confirmation letter upload; `13`: Pending information submission for the free certificate; `14`: Refunded.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status. `0`: Reviewing; `1`: Approved; `2`: Unapproved; `3`: Expired; `4`: DNS record added for domain names of the DNS_AUTO verification type; `5`: Enterprise-grade certificate, pending submission; `6`: Canceling order; `7`: Canceled; `8`: Information submitted, pending confirmation letter upload; `9`: Revoking certificate; `10`: Revoked; `11`: Reissuing; `12`: Pending revocation confirmation letter upload; `13`: Pending information submission for the free certificate; `14`: Refunded.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CertificateExtra getCertificateExtra() Obtain Extended information of the certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateExtra(CertificateExtra $CertificateExtra) Set Extended information of the certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVulnerabilityStatus() Obtain Vulnerability scanning status. `INACTIVE`: not activated; `ACTIVE`: activated
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVulnerabilityStatus(string $VulnerabilityStatus) Set Vulnerability scanning status. `INACTIVE`: not activated; `ACTIVE`: activated
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatusMsg() Obtain Status information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatusMsg(string $StatusMsg) Set Status information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVerifyType() Obtain Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation; `EMAIL`: email validation
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVerifyType(string $VerifyType) Set Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation; `EMAIL`: email validation
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCertBeginTime() Obtain Time when the certificate takes effect
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertBeginTime(string $CertBeginTime) Set Time when the certificate takes effect
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCertEndTime() Obtain Time when the certificate expires
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertEndTime(string $CertEndTime) Set Time when the certificate expires
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getValidityPeriod() Obtain Validity period of the certificate, in months
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setValidityPeriod(string $ValidityPeriod) Set Validity period of the certificate, in months
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInsertTime() Obtain Creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInsertTime(string $InsertTime) Set Creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCertificateId() Obtain Certificate ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateId(string $CertificateId) Set Certificate ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getSubjectAltName() Obtain Domain names associated with the certificate (including the primary domain name)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubjectAltName(array $SubjectAltName) Set Domain names associated with the certificate (including the primary domain name)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPackageTypeName() Obtain Certificate type name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPackageTypeName(string $PackageTypeName) Set Certificate type name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatusName() Obtain Status description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatusName(string $StatusName) Set Status description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsVip() Obtain Whether the customer is a VIP customer
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsVip(boolean $IsVip) Set Whether the customer is a VIP customer
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsDv() Obtain Whether the certificate is a DV certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsDv(boolean $IsDv) Set Whether the certificate is a DV certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsWildcard() Obtain Whether the certificate is a wildcard certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsWildcard(boolean $IsWildcard) Set Whether the certificate is a wildcard certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsVulnerability() Obtain Whether the vulnerability scanning feature is enabled
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsVulnerability(boolean $IsVulnerability) Set Whether the vulnerability scanning feature is enabled
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getRenewAble() Obtain Whether the certificate can be reissued
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRenewAble(boolean $RenewAble) Set Whether the certificate can be reissued
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ProjectInfo getProjectInfo() Obtain Project information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProjectInfo(ProjectInfo $ProjectInfo) Set Project information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getBoundResource() Obtain Associated Tencent Cloud services. Currently, this parameter is unavailable.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBoundResource(array $BoundResource) Set Associated Tencent Cloud services. Currently, this parameter is unavailable.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getDeployable() Obtain Whether the certificate can be deployed
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeployable(boolean $Deployable) Set Whether the certificate can be deployed
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain List of tags
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set List of tags
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getIsIgnore() Obtain Whether the expiration notification was ignored
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsIgnore(boolean $IsIgnore) Set Whether the expiration notification was ignored
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsSM() Obtain Whether the certificate is a Chinese SM certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsSM(boolean $IsSM) Set Whether the certificate is a Chinese SM certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEncryptAlgorithm() Obtain Certificate algorithm
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEncryptAlgorithm(string $EncryptAlgorithm) Set Certificate algorithm
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCAEncryptAlgorithms() Obtain Encryption algorithm of the uploaded CA certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCAEncryptAlgorithms(array $CAEncryptAlgorithms) Set Encryption algorithm of the uploaded CA certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCAEndTimes() Obtain Expiration time of the uploaded CA certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCAEndTimes(array $CAEndTimes) Set Expiration time of the uploaded CA certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCACommonNames() Obtain Generic name of the uploaded CA certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCACommonNames(array $CACommonNames) Set Generic name of the uploaded CA certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PreAuditInfo getPreAuditInfo() Obtain Prereview information of the certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPreAuditInfo(PreAuditInfo $PreAuditInfo) Set Prereview information of the certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAutoRenewFlag() Obtain Whether auto-renewal is enabled.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Whether auto-renewal is enabled.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class Certificates extends AbstractModel
{
    /**
     * @var string User UIN
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerUin;

    /**
     * @var string Project ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Certificate source
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $From;

    /**
     * @var string The certificate plan type. Valid values:
null: Certificates uploaded by users (no plan type)
`1`: GeoTrust DV SSL CA - G3; `2`: TrustAsia TLS RSA CA; `3`: SecureSite EV Pro; `4`: SecureSite EV; `5`: SecureSite OV Pro; `6`: SecureSite OV; `7`: SecureSite OV wildcard; `8`: GeoTrust EV; `9`: GeoTrust OV; `10`: GeoTrust OV wildcard; `11`: TrustAsia DV multi-domain; `12`: TrustAsia DV wildcard; `13`: TrustAsia OV wildcard D3; `14`: TrustAsia OV D3; `15`: TrustAsia OV multi-domain D3; `16`: TrustAsia EV D3; `17`: TrustAsia EV multi-domain D3; `18`: GlobalSign OV; `19`: GlobalSign OV wildcard; `20`: GlobalSign EV; `21`: TrustAsia OV wildcard multi-domain D3; `22`: GlobalSign OV multi-domain; `23`: GlobalSign OV wildcard multi-domain; `24`: GlobalSign EV multi-domain
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PackageType;

    /**
     * @var string Certificate type. `CA`: client certificate; `SVR`: server certificate
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertificateType;

    /**
     * @var string Issuer
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProductZhName;

    /**
     * @var string Primary domain name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Alias
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Alias;

    /**
     * @var integer Status. `0`: Reviewing; `1`: Approved; `2`: Unapproved; `3`: Expired; `4`: DNS record added for domain names of the DNS_AUTO verification type; `5`: Enterprise-grade certificate, pending submission; `6`: Canceling order; `7`: Canceled; `8`: Information submitted, pending confirmation letter upload; `9`: Revoking certificate; `10`: Revoked; `11`: Reissuing; `12`: Pending revocation confirmation letter upload; `13`: Pending information submission for the free certificate; `14`: Refunded.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var CertificateExtra Extended information of the certificate
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertificateExtra;

    /**
     * @var string Vulnerability scanning status. `INACTIVE`: not activated; `ACTIVE`: activated
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VulnerabilityStatus;

    /**
     * @var string Status information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StatusMsg;

    /**
     * @var string Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation; `EMAIL`: email validation
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VerifyType;

    /**
     * @var string Time when the certificate takes effect
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertBeginTime;

    /**
     * @var string Time when the certificate expires
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertEndTime;

    /**
     * @var string Validity period of the certificate, in months
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ValidityPeriod;

    /**
     * @var string Creation time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InsertTime;

    /**
     * @var string Certificate ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertificateId;

    /**
     * @var array Domain names associated with the certificate (including the primary domain name)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubjectAltName;

    /**
     * @var string Certificate type name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PackageTypeName;

    /**
     * @var string Status description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StatusName;

    /**
     * @var boolean Whether the customer is a VIP customer
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsVip;

    /**
     * @var boolean Whether the certificate is a DV certificate
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsDv;

    /**
     * @var boolean Whether the certificate is a wildcard certificate
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsWildcard;

    /**
     * @var boolean Whether the vulnerability scanning feature is enabled
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsVulnerability;

    /**
     * @var boolean Whether the certificate can be reissued
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RenewAble;

    /**
     * @var ProjectInfo Project information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectInfo;

    /**
     * @var array Associated Tencent Cloud services. Currently, this parameter is unavailable.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BoundResource;

    /**
     * @var boolean Whether the certificate can be deployed
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Deployable;

    /**
     * @var array List of tags
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var boolean Whether the expiration notification was ignored
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsIgnore;

    /**
     * @var boolean Whether the certificate is a Chinese SM certificate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsSM;

    /**
     * @var string Certificate algorithm
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EncryptAlgorithm;

    /**
     * @var array Encryption algorithm of the uploaded CA certificate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CAEncryptAlgorithms;

    /**
     * @var array Expiration time of the uploaded CA certificate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CAEndTimes;

    /**
     * @var array Generic name of the uploaded CA certificate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CACommonNames;

    /**
     * @var PreAuditInfo Prereview information of the certificate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PreAuditInfo;

    /**
     * @var integer Whether auto-renewal is enabled.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AutoRenewFlag;

    /**
     * @param string $OwnerUin User UIN
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectId Project ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $From Certificate source
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PackageType The certificate plan type. Valid values:
null: Certificates uploaded by users (no plan type)
`1`: GeoTrust DV SSL CA - G3; `2`: TrustAsia TLS RSA CA; `3`: SecureSite EV Pro; `4`: SecureSite EV; `5`: SecureSite OV Pro; `6`: SecureSite OV; `7`: SecureSite OV wildcard; `8`: GeoTrust EV; `9`: GeoTrust OV; `10`: GeoTrust OV wildcard; `11`: TrustAsia DV multi-domain; `12`: TrustAsia DV wildcard; `13`: TrustAsia OV wildcard D3; `14`: TrustAsia OV D3; `15`: TrustAsia OV multi-domain D3; `16`: TrustAsia EV D3; `17`: TrustAsia EV multi-domain D3; `18`: GlobalSign OV; `19`: GlobalSign OV wildcard; `20`: GlobalSign EV; `21`: TrustAsia OV wildcard multi-domain D3; `22`: GlobalSign OV multi-domain; `23`: GlobalSign OV wildcard multi-domain; `24`: GlobalSign EV multi-domain
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CertificateType Certificate type. `CA`: client certificate; `SVR`: server certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProductZhName Issuer
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Domain Primary domain name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Alias Alias
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status. `0`: Reviewing; `1`: Approved; `2`: Unapproved; `3`: Expired; `4`: DNS record added for domain names of the DNS_AUTO verification type; `5`: Enterprise-grade certificate, pending submission; `6`: Canceling order; `7`: Canceled; `8`: Information submitted, pending confirmation letter upload; `9`: Revoking certificate; `10`: Revoked; `11`: Reissuing; `12`: Pending revocation confirmation letter upload; `13`: Pending information submission for the free certificate; `14`: Refunded.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CertificateExtra $CertificateExtra Extended information of the certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VulnerabilityStatus Vulnerability scanning status. `INACTIVE`: not activated; `ACTIVE`: activated
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StatusMsg Status information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VerifyType Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation; `EMAIL`: email validation
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertBeginTime Time when the certificate takes effect
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertEndTime Time when the certificate expires
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ValidityPeriod Validity period of the certificate, in months
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InsertTime Creation time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertificateId Certificate ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $SubjectAltName Domain names associated with the certificate (including the primary domain name)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PackageTypeName Certificate type name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StatusName Status description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsVip Whether the customer is a VIP customer
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsDv Whether the certificate is a DV certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsWildcard Whether the certificate is a wildcard certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsVulnerability Whether the vulnerability scanning feature is enabled
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $RenewAble Whether the certificate can be reissued
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ProjectInfo $ProjectInfo Project information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $BoundResource Associated Tencent Cloud services. Currently, this parameter is unavailable.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $Deployable Whether the certificate can be deployed
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags List of tags
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $IsIgnore Whether the expiration notification was ignored
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsSM Whether the certificate is a Chinese SM certificate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EncryptAlgorithm Certificate algorithm
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CAEncryptAlgorithms Encryption algorithm of the uploaded CA certificate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CAEndTimes Expiration time of the uploaded CA certificate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CACommonNames Generic name of the uploaded CA certificate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PreAuditInfo $PreAuditInfo Prereview information of the certificate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AutoRenewFlag Whether auto-renewal is enabled.
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("ProductZhName",$param) and $param["ProductZhName"] !== null) {
            $this->ProductZhName = $param["ProductZhName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CertificateExtra",$param) and $param["CertificateExtra"] !== null) {
            $this->CertificateExtra = new CertificateExtra();
            $this->CertificateExtra->deserialize($param["CertificateExtra"]);
        }

        if (array_key_exists("VulnerabilityStatus",$param) and $param["VulnerabilityStatus"] !== null) {
            $this->VulnerabilityStatus = $param["VulnerabilityStatus"];
        }

        if (array_key_exists("StatusMsg",$param) and $param["StatusMsg"] !== null) {
            $this->StatusMsg = $param["StatusMsg"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("CertBeginTime",$param) and $param["CertBeginTime"] !== null) {
            $this->CertBeginTime = $param["CertBeginTime"];
        }

        if (array_key_exists("CertEndTime",$param) and $param["CertEndTime"] !== null) {
            $this->CertEndTime = $param["CertEndTime"];
        }

        if (array_key_exists("ValidityPeriod",$param) and $param["ValidityPeriod"] !== null) {
            $this->ValidityPeriod = $param["ValidityPeriod"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("SubjectAltName",$param) and $param["SubjectAltName"] !== null) {
            $this->SubjectAltName = $param["SubjectAltName"];
        }

        if (array_key_exists("PackageTypeName",$param) and $param["PackageTypeName"] !== null) {
            $this->PackageTypeName = $param["PackageTypeName"];
        }

        if (array_key_exists("StatusName",$param) and $param["StatusName"] !== null) {
            $this->StatusName = $param["StatusName"];
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("IsDv",$param) and $param["IsDv"] !== null) {
            $this->IsDv = $param["IsDv"];
        }

        if (array_key_exists("IsWildcard",$param) and $param["IsWildcard"] !== null) {
            $this->IsWildcard = $param["IsWildcard"];
        }

        if (array_key_exists("IsVulnerability",$param) and $param["IsVulnerability"] !== null) {
            $this->IsVulnerability = $param["IsVulnerability"];
        }

        if (array_key_exists("RenewAble",$param) and $param["RenewAble"] !== null) {
            $this->RenewAble = $param["RenewAble"];
        }

        if (array_key_exists("ProjectInfo",$param) and $param["ProjectInfo"] !== null) {
            $this->ProjectInfo = new ProjectInfo();
            $this->ProjectInfo->deserialize($param["ProjectInfo"]);
        }

        if (array_key_exists("BoundResource",$param) and $param["BoundResource"] !== null) {
            $this->BoundResource = $param["BoundResource"];
        }

        if (array_key_exists("Deployable",$param) and $param["Deployable"] !== null) {
            $this->Deployable = $param["Deployable"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("IsIgnore",$param) and $param["IsIgnore"] !== null) {
            $this->IsIgnore = $param["IsIgnore"];
        }

        if (array_key_exists("IsSM",$param) and $param["IsSM"] !== null) {
            $this->IsSM = $param["IsSM"];
        }

        if (array_key_exists("EncryptAlgorithm",$param) and $param["EncryptAlgorithm"] !== null) {
            $this->EncryptAlgorithm = $param["EncryptAlgorithm"];
        }

        if (array_key_exists("CAEncryptAlgorithms",$param) and $param["CAEncryptAlgorithms"] !== null) {
            $this->CAEncryptAlgorithms = $param["CAEncryptAlgorithms"];
        }

        if (array_key_exists("CAEndTimes",$param) and $param["CAEndTimes"] !== null) {
            $this->CAEndTimes = $param["CAEndTimes"];
        }

        if (array_key_exists("CACommonNames",$param) and $param["CACommonNames"] !== null) {
            $this->CACommonNames = $param["CACommonNames"];
        }

        if (array_key_exists("PreAuditInfo",$param) and $param["PreAuditInfo"] !== null) {
            $this->PreAuditInfo = new PreAuditInfo();
            $this->PreAuditInfo->deserialize($param["PreAuditInfo"]);
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
