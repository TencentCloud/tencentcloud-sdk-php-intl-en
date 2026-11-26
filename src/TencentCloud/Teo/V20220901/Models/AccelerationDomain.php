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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Acceleration domain name
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getDomainName() Obtain <p>Acceleration domain name.</p>
 * @method void setDomainName(string $DomainName) Set <p>Acceleration domain name.</p>
 * @method string getDomainStatus() Obtain <p>Acceleration domain name status</p><p>Enumeration values:</p><ul><li>online: effective</li><li>process: deploying</li><li>offline: disabled</li><li>init: not applied, site to be activated</li></ul>
 * @method void setDomainStatus(string $DomainStatus) Set <p>Acceleration domain name status</p><p>Enumeration values:</p><ul><li>online: effective</li><li>process: deploying</li><li>offline: disabled</li><li>init: not applied, site to be activated</li></ul>
 * @method string getCname() Obtain <p>CNAME address.</p>
 * @method void setCname(string $Cname) Set <p>CNAME address.</p>
 * @method string getIPv6Status() Obtain <p>IPv6 status. Valid values:</p><li>follow: Follow the site IPv6 configuration;</li><li>on: Enabled;</li><li>off: Disabled.</li>
 * @method void setIPv6Status(string $IPv6Status) Set <p>IPv6 status. Valid values:</p><li>follow: Follow the site IPv6 configuration;</li><li>on: Enabled;</li><li>off: Disabled.</li>
 * @method string getIdentificationStatus() Obtain <p>Acceleration domain ownership verification status. Valid values: </p><li>pending: to be verified;</li><li>finished: verified.</li>
 * @method void setIdentificationStatus(string $IdentificationStatus) Set <p>Acceleration domain ownership verification status. Valid values: </p><li>pending: to be verified;</li><li>finished: verified.</li>
 * @method OwnershipVerification getOwnershipVerification() Obtain <p>When the acceleration domain name needs to perform ownership verification to continue providing services, this object will carry the information required for the corresponding verification method.</p>
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) Set <p>When the acceleration domain name needs to perform ownership verification to continue providing services, this object will carry the information required for the corresponding verification method.</p>
 * @method OriginDetail getOriginDetail() Obtain <p>Origin server information.</p>
 * @method void setOriginDetail(OriginDetail $OriginDetail) Set <p>Origin server information.</p>
 * @method string getOriginProtocol() Obtain <p>Origin-pull protocol. Valid values:</p><li>FOLLOW: follow protocol;</li><li>HTTP: origin-pull over HTTP protocol;</li><li>HTTPS: origin-pull over HTTPS protocol.</li>
 * @method void setOriginProtocol(string $OriginProtocol) Set <p>Origin-pull protocol. Valid values:</p><li>FOLLOW: follow protocol;</li><li>HTTP: origin-pull over HTTP protocol;</li><li>HTTPS: origin-pull over HTTPS protocol.</li>
 * @method integer getHttpOriginPort() Obtain <p>HTTP origin port.</p>
 * @method void setHttpOriginPort(integer $HttpOriginPort) Set <p>HTTP origin port.</p>
 * @method integer getHttpsOriginPort() Obtain <p>HTTPS origin port.</p>
 * @method void setHttpsOriginPort(integer $HttpsOriginPort) Set <p>HTTPS origin port.</p>
 * @method AccelerationDomainCertificate getCertificate() Obtain <p>Acceleration domain name certificate information.</p>
 * @method void setCertificate(AccelerationDomainCertificate $Certificate) Set <p>Acceleration domain name certificate information.</p>
 * @method string getCreatedOn() Obtain <p>Creation time.</p>
 * @method void setCreatedOn(string $CreatedOn) Set <p>Creation time.</p>
 * @method string getModifiedOn() Obtain <p>Last modified.</p>
 * @method void setModifiedOn(string $ModifiedOn) Set <p>Last modified.</p>
 * @method array getComplianceRestrictions() Obtain <p>List of region access restrictions on a domain name due to compliance issues.</p>
 * @method void setComplianceRestrictions(array $ComplianceRestrictions) Set <p>List of region access restrictions on a domain name due to compliance issues.</p>
 */
class AccelerationDomain extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Acceleration domain name.</p>
     */
    public $DomainName;

    /**
     * @var string <p>Acceleration domain name status</p><p>Enumeration values:</p><ul><li>online: effective</li><li>process: deploying</li><li>offline: disabled</li><li>init: not applied, site to be activated</li></ul>
     */
    public $DomainStatus;

    /**
     * @var string <p>CNAME address.</p>
     */
    public $Cname;

    /**
     * @var string <p>IPv6 status. Valid values:</p><li>follow: Follow the site IPv6 configuration;</li><li>on: Enabled;</li><li>off: Disabled.</li>
     */
    public $IPv6Status;

    /**
     * @var string <p>Acceleration domain ownership verification status. Valid values: </p><li>pending: to be verified;</li><li>finished: verified.</li>
     */
    public $IdentificationStatus;

    /**
     * @var OwnershipVerification <p>When the acceleration domain name needs to perform ownership verification to continue providing services, this object will carry the information required for the corresponding verification method.</p>
     */
    public $OwnershipVerification;

    /**
     * @var OriginDetail <p>Origin server information.</p>
     */
    public $OriginDetail;

    /**
     * @var string <p>Origin-pull protocol. Valid values:</p><li>FOLLOW: follow protocol;</li><li>HTTP: origin-pull over HTTP protocol;</li><li>HTTPS: origin-pull over HTTPS protocol.</li>
     */
    public $OriginProtocol;

    /**
     * @var integer <p>HTTP origin port.</p>
     */
    public $HttpOriginPort;

    /**
     * @var integer <p>HTTPS origin port.</p>
     */
    public $HttpsOriginPort;

    /**
     * @var AccelerationDomainCertificate <p>Acceleration domain name certificate information.</p>
     */
    public $Certificate;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreatedOn;

    /**
     * @var string <p>Last modified.</p>
     */
    public $ModifiedOn;

    /**
     * @var array <p>List of region access restrictions on a domain name due to compliance issues.</p>
     */
    public $ComplianceRestrictions;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $DomainName <p>Acceleration domain name.</p>
     * @param string $DomainStatus <p>Acceleration domain name status</p><p>Enumeration values:</p><ul><li>online: effective</li><li>process: deploying</li><li>offline: disabled</li><li>init: not applied, site to be activated</li></ul>
     * @param string $Cname <p>CNAME address.</p>
     * @param string $IPv6Status <p>IPv6 status. Valid values:</p><li>follow: Follow the site IPv6 configuration;</li><li>on: Enabled;</li><li>off: Disabled.</li>
     * @param string $IdentificationStatus <p>Acceleration domain ownership verification status. Valid values: </p><li>pending: to be verified;</li><li>finished: verified.</li>
     * @param OwnershipVerification $OwnershipVerification <p>When the acceleration domain name needs to perform ownership verification to continue providing services, this object will carry the information required for the corresponding verification method.</p>
     * @param OriginDetail $OriginDetail <p>Origin server information.</p>
     * @param string $OriginProtocol <p>Origin-pull protocol. Valid values:</p><li>FOLLOW: follow protocol;</li><li>HTTP: origin-pull over HTTP protocol;</li><li>HTTPS: origin-pull over HTTPS protocol.</li>
     * @param integer $HttpOriginPort <p>HTTP origin port.</p>
     * @param integer $HttpsOriginPort <p>HTTPS origin port.</p>
     * @param AccelerationDomainCertificate $Certificate <p>Acceleration domain name certificate information.</p>
     * @param string $CreatedOn <p>Creation time.</p>
     * @param string $ModifiedOn <p>Last modified.</p>
     * @param array $ComplianceRestrictions <p>List of region access restrictions on a domain name due to compliance issues.</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
            $this->DomainStatus = $param["DomainStatus"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("IPv6Status",$param) and $param["IPv6Status"] !== null) {
            $this->IPv6Status = $param["IPv6Status"];
        }

        if (array_key_exists("IdentificationStatus",$param) and $param["IdentificationStatus"] !== null) {
            $this->IdentificationStatus = $param["IdentificationStatus"];
        }

        if (array_key_exists("OwnershipVerification",$param) and $param["OwnershipVerification"] !== null) {
            $this->OwnershipVerification = new OwnershipVerification();
            $this->OwnershipVerification->deserialize($param["OwnershipVerification"]);
        }

        if (array_key_exists("OriginDetail",$param) and $param["OriginDetail"] !== null) {
            $this->OriginDetail = new OriginDetail();
            $this->OriginDetail->deserialize($param["OriginDetail"]);
        }

        if (array_key_exists("OriginProtocol",$param) and $param["OriginProtocol"] !== null) {
            $this->OriginProtocol = $param["OriginProtocol"];
        }

        if (array_key_exists("HttpOriginPort",$param) and $param["HttpOriginPort"] !== null) {
            $this->HttpOriginPort = $param["HttpOriginPort"];
        }

        if (array_key_exists("HttpsOriginPort",$param) and $param["HttpsOriginPort"] !== null) {
            $this->HttpsOriginPort = $param["HttpsOriginPort"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new AccelerationDomainCertificate();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("ComplianceRestrictions",$param) and $param["ComplianceRestrictions"] !== null) {
            $this->ComplianceRestrictions = [];
            foreach ($param["ComplianceRestrictions"] as $key => $value){
                $obj = new ComplianceRestriction();
                $obj->deserialize($value);
                array_push($this->ComplianceRestrictions, $obj);
            }
        }
    }
}
