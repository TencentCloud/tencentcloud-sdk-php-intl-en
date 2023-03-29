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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The domain information set.
 *
 * @method integer getAutoRenew() Obtain The auto-renewal flag. Valid values: `0` (disabled by default), `1` (enabled), `2` (disabled).
 * @method void setAutoRenew(integer $AutoRenew) Set The auto-renewal flag. Valid values: `0` (disabled by default), `1` (enabled), `2` (disabled).
 * @method string getCreationDate() Obtain The registration time.
 * @method void setCreationDate(string $CreationDate) Set The registration time.
 * @method string getDomainId() Obtain The domain ID.
 * @method void setDomainId(string $DomainId) Set The domain ID.
 * @method integer getDnsStatus() Obtain The DNS status. Valid values: `1` (DNSPod), `2` (others), `3` (unknown).
 * @method void setDnsStatus(integer $DnsStatus) Set The DNS status. Valid values: `1` (DNSPod), `2` (others), `3` (unknown).
 * @method string getDomainName() Obtain The domains.
 * @method void setDomainName(string $DomainName) Set The domains.
 * @method array getDomainStatus() Obtain The domain status.
 * @method void setDomainStatus(array $DomainStatus) Set The domain status.
 * @method string getStatus() Obtain The purchase status of the domain. Valid values:
`ok`: Normal.
`RegisterPending`: Pending registration.
`RegisterDoing`: Registration in progress.
`RegisterFailed`: Registration failed.
`RenewPending`: Renewal grace period.
`RenewDoing`: Renewing.
`RedemptionPending`: Redemption period.
`AboutToExpire`: About to expire.
`TransferPending`: Pending transfer.
`TransferTransing`: Transfer in progress.
`TransferFailed`: Transfer failed.
 * @method void setStatus(string $Status) Set The purchase status of the domain. Valid values:
`ok`: Normal.
`RegisterPending`: Pending registration.
`RegisterDoing`: Registration in progress.
`RegisterFailed`: Registration failed.
`RenewPending`: Renewal grace period.
`RenewDoing`: Renewing.
`RedemptionPending`: Redemption period.
`AboutToExpire`: About to expire.
`TransferPending`: Pending transfer.
`TransferTransing`: Transfer in progress.
`TransferFailed`: Transfer failed.
 * @method string getExpirationDate() Obtain The expiration date.
 * @method void setExpirationDate(string $ExpirationDate) Set The expiration date.
 * @method integer getExpireMessage() Obtain The auto-renewal flag. Valid values: `1` (enabled), `2` (disabled), `3` (disabled by default).
 * @method void setExpireMessage(integer $ExpireMessage) Set The auto-renewal flag. Valid values: `1` (enabled), `2` (disabled), `3` (disabled by default).
 * @method boolean getIsPremium() Obtain Whether the domain is a premium one.
 * @method void setIsPremium(boolean $IsPremium) Set Whether the domain is a premium one.
 * @method array getDns() Obtain The DNS server of the domain.
 * @method void setDns(array $Dns) Set The DNS server of the domain.
 * @method IntlContactInfo getContactInfo() Obtain The contact information.
 * @method void setContactInfo(IntlContactInfo $ContactInfo) Set The contact information.
 * @method integer getCanRenewYears() Obtain The number of years available for renewal. The value `0` indicates that the domain has reached its maximum validity period (10 years) and cannot be renewed.
 * @method void setCanRenewYears(integer $CanRenewYears) Set The number of years available for renewal. The value `0` indicates that the domain has reached its maximum validity period (10 years) and cannot be renewed.
 * @method string getRegistrarType() Obtain The registrar type. If the value is `epp`, the registration time on the page is followed by (UTC). Otherwise, it is followed by (UTC+8).
 * @method void setRegistrarType(string $RegistrarType) Set The registrar type. If the value is `epp`, the registration time on the page is followed by (UTC). Otherwise, it is followed by (UTC+8).
 * @method string getUin() Obtain The account to which the domain belongs.
 * @method void setUin(string $Uin) Set The account to which the domain belongs.
 * @method string getTemplateId() Obtain The profile ID.
 * @method void setTemplateId(string $TemplateId) Set The profile ID.
 * @method boolean getSupportDnssec() Obtain Whether DNSSEC is supported.
 * @method void setSupportDnssec(boolean $SupportDnssec) Set Whether DNSSEC is supported.
 * @method integer getWhoisPrivacy() Obtain WHOIS privacy service status. Valid values: `1` (enabled), `2` (disabled), `3` (enabling), `4` (disabling).
 * @method void setWhoisPrivacy(integer $WhoisPrivacy) Set WHOIS privacy service status. Valid values: `1` (enabled), `2` (disabled), `3` (enabling), `4` (disabling).
 * @method string getModifyStatus() Obtain Valid values: `NotModify` (not modified), `Modifying`, `Failed` (failed to modify)
 * @method void setModifyStatus(string $ModifyStatus) Set Valid values: `NotModify` (not modified), `Modifying`, `Failed` (failed to modify)
 * @method string getDnsModifyStatus() Obtain Valid values: `NotModify` (not modified), `Modifying`, `Failed` (failed to modify)
 * @method void setDnsModifyStatus(string $DnsModifyStatus) Set Valid values: `NotModify` (not modified), `Modifying`, `Failed` (failed to modify)
 */
class IntlDomainInfo extends AbstractModel
{
    /**
     * @var integer The auto-renewal flag. Valid values: `0` (disabled by default), `1` (enabled), `2` (disabled).
     */
    public $AutoRenew;

    /**
     * @var string The registration time.
     */
    public $CreationDate;

    /**
     * @var string The domain ID.
     */
    public $DomainId;

    /**
     * @var integer The DNS status. Valid values: `1` (DNSPod), `2` (others), `3` (unknown).
     */
    public $DnsStatus;

    /**
     * @var string The domains.
     */
    public $DomainName;

    /**
     * @var array The domain status.
     */
    public $DomainStatus;

    /**
     * @var string The purchase status of the domain. Valid values:
`ok`: Normal.
`RegisterPending`: Pending registration.
`RegisterDoing`: Registration in progress.
`RegisterFailed`: Registration failed.
`RenewPending`: Renewal grace period.
`RenewDoing`: Renewing.
`RedemptionPending`: Redemption period.
`AboutToExpire`: About to expire.
`TransferPending`: Pending transfer.
`TransferTransing`: Transfer in progress.
`TransferFailed`: Transfer failed.
     */
    public $Status;

    /**
     * @var string The expiration date.
     */
    public $ExpirationDate;

    /**
     * @var integer The auto-renewal flag. Valid values: `1` (enabled), `2` (disabled), `3` (disabled by default).
     */
    public $ExpireMessage;

    /**
     * @var boolean Whether the domain is a premium one.
     */
    public $IsPremium;

    /**
     * @var array The DNS server of the domain.
     */
    public $Dns;

    /**
     * @var IntlContactInfo The contact information.
     */
    public $ContactInfo;

    /**
     * @var integer The number of years available for renewal. The value `0` indicates that the domain has reached its maximum validity period (10 years) and cannot be renewed.
     */
    public $CanRenewYears;

    /**
     * @var string The registrar type. If the value is `epp`, the registration time on the page is followed by (UTC). Otherwise, it is followed by (UTC+8).
     */
    public $RegistrarType;

    /**
     * @var string The account to which the domain belongs.
     */
    public $Uin;

    /**
     * @var string The profile ID.
     */
    public $TemplateId;

    /**
     * @var boolean Whether DNSSEC is supported.
     */
    public $SupportDnssec;

    /**
     * @var integer WHOIS privacy service status. Valid values: `1` (enabled), `2` (disabled), `3` (enabling), `4` (disabling).
     */
    public $WhoisPrivacy;

    /**
     * @var string Valid values: `NotModify` (not modified), `Modifying`, `Failed` (failed to modify)
     */
    public $ModifyStatus;

    /**
     * @var string Valid values: `NotModify` (not modified), `Modifying`, `Failed` (failed to modify)
     */
    public $DnsModifyStatus;

    /**
     * @param integer $AutoRenew The auto-renewal flag. Valid values: `0` (disabled by default), `1` (enabled), `2` (disabled).
     * @param string $CreationDate The registration time.
     * @param string $DomainId The domain ID.
     * @param integer $DnsStatus The DNS status. Valid values: `1` (DNSPod), `2` (others), `3` (unknown).
     * @param string $DomainName The domains.
     * @param array $DomainStatus The domain status.
     * @param string $Status The purchase status of the domain. Valid values:
`ok`: Normal.
`RegisterPending`: Pending registration.
`RegisterDoing`: Registration in progress.
`RegisterFailed`: Registration failed.
`RenewPending`: Renewal grace period.
`RenewDoing`: Renewing.
`RedemptionPending`: Redemption period.
`AboutToExpire`: About to expire.
`TransferPending`: Pending transfer.
`TransferTransing`: Transfer in progress.
`TransferFailed`: Transfer failed.
     * @param string $ExpirationDate The expiration date.
     * @param integer $ExpireMessage The auto-renewal flag. Valid values: `1` (enabled), `2` (disabled), `3` (disabled by default).
     * @param boolean $IsPremium Whether the domain is a premium one.
     * @param array $Dns The DNS server of the domain.
     * @param IntlContactInfo $ContactInfo The contact information.
     * @param integer $CanRenewYears The number of years available for renewal. The value `0` indicates that the domain has reached its maximum validity period (10 years) and cannot be renewed.
     * @param string $RegistrarType The registrar type. If the value is `epp`, the registration time on the page is followed by (UTC). Otherwise, it is followed by (UTC+8).
     * @param string $Uin The account to which the domain belongs.
     * @param string $TemplateId The profile ID.
     * @param boolean $SupportDnssec Whether DNSSEC is supported.
     * @param integer $WhoisPrivacy WHOIS privacy service status. Valid values: `1` (enabled), `2` (disabled), `3` (enabling), `4` (disabling).
     * @param string $ModifyStatus Valid values: `NotModify` (not modified), `Modifying`, `Failed` (failed to modify)
     * @param string $DnsModifyStatus Valid values: `NotModify` (not modified), `Modifying`, `Failed` (failed to modify)
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
        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("CreationDate",$param) and $param["CreationDate"] !== null) {
            $this->CreationDate = $param["CreationDate"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("DnsStatus",$param) and $param["DnsStatus"] !== null) {
            $this->DnsStatus = $param["DnsStatus"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
            $this->DomainStatus = $param["DomainStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("ExpireMessage",$param) and $param["ExpireMessage"] !== null) {
            $this->ExpireMessage = $param["ExpireMessage"];
        }

        if (array_key_exists("IsPremium",$param) and $param["IsPremium"] !== null) {
            $this->IsPremium = $param["IsPremium"];
        }

        if (array_key_exists("Dns",$param) and $param["Dns"] !== null) {
            $this->Dns = $param["Dns"];
        }

        if (array_key_exists("ContactInfo",$param) and $param["ContactInfo"] !== null) {
            $this->ContactInfo = new IntlContactInfo();
            $this->ContactInfo->deserialize($param["ContactInfo"]);
        }

        if (array_key_exists("CanRenewYears",$param) and $param["CanRenewYears"] !== null) {
            $this->CanRenewYears = $param["CanRenewYears"];
        }

        if (array_key_exists("RegistrarType",$param) and $param["RegistrarType"] !== null) {
            $this->RegistrarType = $param["RegistrarType"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("SupportDnssec",$param) and $param["SupportDnssec"] !== null) {
            $this->SupportDnssec = $param["SupportDnssec"];
        }

        if (array_key_exists("WhoisPrivacy",$param) and $param["WhoisPrivacy"] !== null) {
            $this->WhoisPrivacy = $param["WhoisPrivacy"];
        }

        if (array_key_exists("ModifyStatus",$param) and $param["ModifyStatus"] !== null) {
            $this->ModifyStatus = $param["ModifyStatus"];
        }

        if (array_key_exists("DnsModifyStatus",$param) and $param["DnsModifyStatus"] !== null) {
            $this->DnsModifyStatus = $param["DnsModifyStatus"];
        }
    }
}
