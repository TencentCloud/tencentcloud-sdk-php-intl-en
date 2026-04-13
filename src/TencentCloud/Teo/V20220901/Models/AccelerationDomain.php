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
 * Accelerated domain name
 *
 * @method string getZoneId() Obtain ID of the site.
 * @method void setZoneId(string $ZoneId) Set ID of the site.
 * @method string getDomainName() Obtain Accelerated domain name
 * @method void setDomainName(string $DomainName) Set Accelerated domain name
 * @method string getDomainStatus() Obtain Accelerated domain name status. valid values:.
<li>online: in effect;</li>.
<li>process: deployment in progress.</li>.
<li>offline: disabled;</li>.
<li>`forbidden`: banned.</li>.
<li>init: not applied, site to be activated.</li>.
 * @method void setDomainStatus(string $DomainStatus) Set Accelerated domain name status. valid values:.
<li>online: in effect;</li>.
<li>process: deployment in progress.</li>.
<li>offline: disabled;</li>.
<li>`forbidden`: banned.</li>.
<li>init: not applied, site to be activated.</li>.
 * @method string getCname() Obtain The CNAME address.
 * @method void setCname(string $Cname) Set The CNAME address.
 * @method string getIPv6Status() Obtain IPv6 status. valid values:.
<li>follow: specifies whether to adhere to the site IPv6 configuration.</li>.
<li>on: enabled status.</li>.
<li>off: disabled.</li>.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setIPv6Status(string $IPv6Status) Set IPv6 status. valid values:.
<li>follow: specifies whether to adhere to the site IPv6 configuration.</li>.
<li>on: enabled status.</li>.
<li>off: disabled.</li>.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method string getIdentificationStatus() Obtain Acceleration domain ownership verification status. valid values:. 
<li>pending: to be verified.</li>.
<li>finished: verified.</li>.	
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setIdentificationStatus(string $IdentificationStatus) Set Acceleration domain ownership verification status. valid values:. 
<li>pending: to be verified.</li>.
<li>finished: verified.</li>.	
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method OwnershipVerification getOwnershipVerification() Obtain Acceleration domain name needs to perform ownership verification to continue providing services. this object carries the required information for the corresponding verification method.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) Set Acceleration domain name needs to perform ownership verification to continue providing services. this object carries the required information for the corresponding verification method.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method OriginDetail getOriginDetail() Obtain Details of the origin.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginDetail(OriginDetail $OriginDetail) Set Details of the origin.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginProtocol() Obtain Origin-Pull protocol. valid values:.
<Li>FOLLOW: follow protocol.</li>.
<Li>HTTP: specifies the http protocol for origin-pull.</li>.
<Li>HTTPS: specifies the https protocol for origin-pull.</li>.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setOriginProtocol(string $OriginProtocol) Set Origin-Pull protocol. valid values:.
<Li>FOLLOW: follow protocol.</li>.
<Li>HTTP: specifies the http protocol for origin-pull.</li>.
<Li>HTTPS: specifies the https protocol for origin-pull.</li>.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method integer getHttpOriginPort() Obtain Specifies the HTTP origin port.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setHttpOriginPort(integer $HttpOriginPort) Set Specifies the HTTP origin port.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method integer getHttpsOriginPort() Obtain Specifies the HTTPS origin port.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setHttpsOriginPort(integer $HttpsOriginPort) Set Specifies the HTTPS origin port.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method AccelerationDomainCertificate getCertificate() Obtain Accelerates domain name certificate information.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setCertificate(AccelerationDomainCertificate $Certificate) Set Accelerates domain name certificate information.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method string getCreatedOn() Obtain Creation time of the accelerated domain name.
 * @method void setCreatedOn(string $CreatedOn) Set Creation time of the accelerated domain name.
 * @method string getModifiedOn() Obtain Modification time of the accelerated domain name.
 * @method void setModifiedOn(string $ModifiedOn) Set Modification time of the accelerated domain name.
 */
class AccelerationDomain extends AbstractModel
{
    /**
     * @var string ID of the site.
     */
    public $ZoneId;

    /**
     * @var string Accelerated domain name
     */
    public $DomainName;

    /**
     * @var string Accelerated domain name status. valid values:.
<li>online: in effect;</li>.
<li>process: deployment in progress.</li>.
<li>offline: disabled;</li>.
<li>`forbidden`: banned.</li>.
<li>init: not applied, site to be activated.</li>.
     */
    public $DomainStatus;

    /**
     * @var string The CNAME address.
     */
    public $Cname;

    /**
     * @var string IPv6 status. valid values:.
<li>follow: specifies whether to adhere to the site IPv6 configuration.</li>.
<li>on: enabled status.</li>.
<li>off: disabled.</li>.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $IPv6Status;

    /**
     * @var string Acceleration domain ownership verification status. valid values:. 
<li>pending: to be verified.</li>.
<li>finished: verified.</li>.	
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $IdentificationStatus;

    /**
     * @var OwnershipVerification Acceleration domain name needs to perform ownership verification to continue providing services. this object carries the required information for the corresponding verification method.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $OwnershipVerification;

    /**
     * @var OriginDetail Details of the origin.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginDetail;

    /**
     * @var string Origin-Pull protocol. valid values:.
<Li>FOLLOW: follow protocol.</li>.
<Li>HTTP: specifies the http protocol for origin-pull.</li>.
<Li>HTTPS: specifies the https protocol for origin-pull.</li>.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $OriginProtocol;

    /**
     * @var integer Specifies the HTTP origin port.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $HttpOriginPort;

    /**
     * @var integer Specifies the HTTPS origin port.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $HttpsOriginPort;

    /**
     * @var AccelerationDomainCertificate Accelerates domain name certificate information.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $Certificate;

    /**
     * @var string Creation time of the accelerated domain name.
     */
    public $CreatedOn;

    /**
     * @var string Modification time of the accelerated domain name.
     */
    public $ModifiedOn;

    /**
     * @param string $ZoneId ID of the site.
     * @param string $DomainName Accelerated domain name
     * @param string $DomainStatus Accelerated domain name status. valid values:.
<li>online: in effect;</li>.
<li>process: deployment in progress.</li>.
<li>offline: disabled;</li>.
<li>`forbidden`: banned.</li>.
<li>init: not applied, site to be activated.</li>.
     * @param string $Cname The CNAME address.
     * @param string $IPv6Status IPv6 status. valid values:.
<li>follow: specifies whether to adhere to the site IPv6 configuration.</li>.
<li>on: enabled status.</li>.
<li>off: disabled.</li>.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param string $IdentificationStatus Acceleration domain ownership verification status. valid values:. 
<li>pending: to be verified.</li>.
<li>finished: verified.</li>.	
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param OwnershipVerification $OwnershipVerification Acceleration domain name needs to perform ownership verification to continue providing services. this object carries the required information for the corresponding verification method.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param OriginDetail $OriginDetail Details of the origin.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OriginProtocol Origin-Pull protocol. valid values:.
<Li>FOLLOW: follow protocol.</li>.
<Li>HTTP: specifies the http protocol for origin-pull.</li>.
<Li>HTTPS: specifies the https protocol for origin-pull.</li>.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param integer $HttpOriginPort Specifies the HTTP origin port.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param integer $HttpsOriginPort Specifies the HTTPS origin port.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param AccelerationDomainCertificate $Certificate Accelerates domain name certificate information.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param string $CreatedOn Creation time of the accelerated domain name.
     * @param string $ModifiedOn Modification time of the accelerated domain name.
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
    }
}
