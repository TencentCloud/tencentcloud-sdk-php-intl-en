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
 * CreateAccelerationDomain request structure.
 *
 * @method string getZoneId() Obtain Zone ID of the acceleration domain name.
 * @method void setZoneId(string $ZoneId) Set Zone ID of the acceleration domain name.
 * @method string getDomainName() Obtain Acceleration domain name.
 * @method void setDomainName(string $DomainName) Set Acceleration domain name.
 * @method OriginInfo getOriginInfo() Obtain Origin server information.
 * @method void setOriginInfo(OriginInfo $OriginInfo) Set Origin server information.
 * @method string getOriginProtocol() Obtain Origin-pull protocol. Valid values:
<li>FOLLOW: follow protocol;</li>
<li>HTTP: Origin-pull over HTTP protocol;</li>
<li>HTTPS: origin-pull over the HTTPS protocol.</li>If not specified, the default is FOLLOW.
 * @method void setOriginProtocol(string $OriginProtocol) Set Origin-pull protocol. Valid values:
<li>FOLLOW: follow protocol;</li>
<li>HTTP: Origin-pull over HTTP protocol;</li>
<li>HTTPS: origin-pull over the HTTPS protocol.</li>If not specified, the default is FOLLOW.
 * @method integer getHttpOriginPort() Obtain HTTP origin-pull port. Default value: 80. Value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTP.
 * @method void setHttpOriginPort(integer $HttpOriginPort) Set HTTP origin-pull port. Default value: 80. Value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTP.
 * @method integer getHttpsOriginPort() Obtain HTTPS origin port. Default value: 443. Value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTPS.
 * @method void setHttpsOriginPort(integer $HttpsOriginPort) Set HTTPS origin port. Default value: 443. Value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTPS.
 * @method string getIPv6Status() Obtain IPv6 status. Valid values:
<li>follow: follow the site IPv6 configuration;</li>
<li>`on`: Enabled status;</li>
<li>off: Disabled.</li>If not specified, the default is: follow.
 * @method void setIPv6Status(string $IPv6Status) Set IPv6 status. Valid values:
<li>follow: follow the site IPv6 configuration;</li>
<li>`on`: Enabled status;</li>
<li>off: Disabled.</li>If not specified, the default is: follow.
 * @method string getSharedCNAME() Obtain Shared CNAME address bound to the specified domain. If not specified, the default CNAME is used.
Binding a shared CNAME requires the scheduling policies of all domains to be consistent. The following configurations affect the scheduling policy. When they are inconsistent, binding a shared CNAME is processed as follows:
- IPv6 access: not allowed to create a domain name. Modify IPv6Status to match the domain configuration of the rest bound to the shared CNAME.
-DDoS protection: If DDoS protection is enabled for the selected shared CNAME, DDoS protection will be enabled for the domain by default when you create the domain.
-Network optimization in the Chinese mainland (international acceleration): You are not allowed to create a domain name. Make sure the network optimization in the Chinese mainland (international acceleration) configuration of the current domain name is consistent with the rest of the domain names bound to the shared CNAME, and try again later.

Note: Shared CNAME is currently in beta test. To use it, contact us to enable it.
 * @method void setSharedCNAME(string $SharedCNAME) Set Shared CNAME address bound to the specified domain. If not specified, the default CNAME is used.
Binding a shared CNAME requires the scheduling policies of all domains to be consistent. The following configurations affect the scheduling policy. When they are inconsistent, binding a shared CNAME is processed as follows:
- IPv6 access: not allowed to create a domain name. Modify IPv6Status to match the domain configuration of the rest bound to the shared CNAME.
-DDoS protection: If DDoS protection is enabled for the selected shared CNAME, DDoS protection will be enabled for the domain by default when you create the domain.
-Network optimization in the Chinese mainland (international acceleration): You are not allowed to create a domain name. Make sure the network optimization in the Chinese mainland (international acceleration) configuration of the current domain name is consistent with the rest of the domain names bound to the shared CNAME, and try again later.

Note: Shared CNAME is currently in beta test. To use it, contact us to enable it.
 */
class CreateAccelerationDomainRequest extends AbstractModel
{
    /**
     * @var string Zone ID of the acceleration domain name.
     */
    public $ZoneId;

    /**
     * @var string Acceleration domain name.
     */
    public $DomainName;

    /**
     * @var OriginInfo Origin server information.
     */
    public $OriginInfo;

    /**
     * @var string Origin-pull protocol. Valid values:
<li>FOLLOW: follow protocol;</li>
<li>HTTP: Origin-pull over HTTP protocol;</li>
<li>HTTPS: origin-pull over the HTTPS protocol.</li>If not specified, the default is FOLLOW.
     */
    public $OriginProtocol;

    /**
     * @var integer HTTP origin-pull port. Default value: 80. Value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTP.
     */
    public $HttpOriginPort;

    /**
     * @var integer HTTPS origin port. Default value: 443. Value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTPS.
     */
    public $HttpsOriginPort;

    /**
     * @var string IPv6 status. Valid values:
<li>follow: follow the site IPv6 configuration;</li>
<li>`on`: Enabled status;</li>
<li>off: Disabled.</li>If not specified, the default is: follow.
     */
    public $IPv6Status;

    /**
     * @var string Shared CNAME address bound to the specified domain. If not specified, the default CNAME is used.
Binding a shared CNAME requires the scheduling policies of all domains to be consistent. The following configurations affect the scheduling policy. When they are inconsistent, binding a shared CNAME is processed as follows:
- IPv6 access: not allowed to create a domain name. Modify IPv6Status to match the domain configuration of the rest bound to the shared CNAME.
-DDoS protection: If DDoS protection is enabled for the selected shared CNAME, DDoS protection will be enabled for the domain by default when you create the domain.
-Network optimization in the Chinese mainland (international acceleration): You are not allowed to create a domain name. Make sure the network optimization in the Chinese mainland (international acceleration) configuration of the current domain name is consistent with the rest of the domain names bound to the shared CNAME, and try again later.

Note: Shared CNAME is currently in beta test. To use it, contact us to enable it.
     */
    public $SharedCNAME;

    /**
     * @param string $ZoneId Zone ID of the acceleration domain name.
     * @param string $DomainName Acceleration domain name.
     * @param OriginInfo $OriginInfo Origin server information.
     * @param string $OriginProtocol Origin-pull protocol. Valid values:
<li>FOLLOW: follow protocol;</li>
<li>HTTP: Origin-pull over HTTP protocol;</li>
<li>HTTPS: origin-pull over the HTTPS protocol.</li>If not specified, the default is FOLLOW.
     * @param integer $HttpOriginPort HTTP origin-pull port. Default value: 80. Value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTP.
     * @param integer $HttpsOriginPort HTTPS origin port. Default value: 443. Value range: 1–65535.
This parameter is valid only when OriginProtocol is FOLLOW or HTTPS.
     * @param string $IPv6Status IPv6 status. Valid values:
<li>follow: follow the site IPv6 configuration;</li>
<li>`on`: Enabled status;</li>
<li>off: Disabled.</li>If not specified, the default is: follow.
     * @param string $SharedCNAME Shared CNAME address bound to the specified domain. If not specified, the default CNAME is used.
Binding a shared CNAME requires the scheduling policies of all domains to be consistent. The following configurations affect the scheduling policy. When they are inconsistent, binding a shared CNAME is processed as follows:
- IPv6 access: not allowed to create a domain name. Modify IPv6Status to match the domain configuration of the rest bound to the shared CNAME.
-DDoS protection: If DDoS protection is enabled for the selected shared CNAME, DDoS protection will be enabled for the domain by default when you create the domain.
-Network optimization in the Chinese mainland (international acceleration): You are not allowed to create a domain name. Make sure the network optimization in the Chinese mainland (international acceleration) configuration of the current domain name is consistent with the rest of the domain names bound to the shared CNAME, and try again later.

Note: Shared CNAME is currently in beta test. To use it, contact us to enable it.
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

        if (array_key_exists("OriginInfo",$param) and $param["OriginInfo"] !== null) {
            $this->OriginInfo = new OriginInfo();
            $this->OriginInfo->deserialize($param["OriginInfo"]);
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

        if (array_key_exists("IPv6Status",$param) and $param["IPv6Status"] !== null) {
            $this->IPv6Status = $param["IPv6Status"];
        }

        if (array_key_exists("SharedCNAME",$param) and $param["SharedCNAME"] !== null) {
            $this->SharedCNAME = $param["SharedCNAME"];
        }
    }
}
