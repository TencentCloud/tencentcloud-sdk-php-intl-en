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
 * ModifyAccelerationDomain request structure.
 *
 * @method string getZoneId() Obtain Zone ID of the acceleration domain name.
 * @method void setZoneId(string $ZoneId) Set Zone ID of the acceleration domain name.
 * @method string getDomainName() Obtain Acceleration domain name.
 * @method void setDomainName(string $DomainName) Set Acceleration domain name.
 * @method OriginInfo getOriginInfo() Obtain Origin server information.
 * @method void setOriginInfo(OriginInfo $OriginInfo) Set Origin server information.
 * @method string getOriginProtocol() Obtain Origin-pull protocol. Valid values:
<li>FOLLOW: follow protocol;</li>
<li>HTTP: Origin-pull over HTTP;</li>
<li>HTTPS: Origin-pull over HTTPS protocol.</li>
<li>Leave blank to retain the original configuration.</li>
 * @method void setOriginProtocol(string $OriginProtocol) Set Origin-pull protocol. Valid values:
<li>FOLLOW: follow protocol;</li>
<li>HTTP: Origin-pull over HTTP;</li>
<li>HTTPS: Origin-pull over HTTPS protocol.</li>
<li>Leave blank to retain the original configuration.</li>
 * @method integer getHttpOriginPort() Obtain HTTP origin-pull port. Value range: 1–65535. This parameter is valid only when OriginProtocol is FOLLOW or HTTP. If not specified, the original configuration is retained.
 * @method void setHttpOriginPort(integer $HttpOriginPort) Set HTTP origin-pull port. Value range: 1–65535. This parameter is valid only when OriginProtocol is FOLLOW or HTTP. If not specified, the original configuration is retained.
 * @method integer getHttpsOriginPort() Obtain HTTPS origin-pull port. Value range: 1-65535. This parameter is valid only when OriginProtocol is FOLLOW or HTTPS. If not specified, the original configuration is retained.
 * @method void setHttpsOriginPort(integer $HttpsOriginPort) Set HTTPS origin-pull port. Value range: 1-65535. This parameter is valid only when OriginProtocol is FOLLOW or HTTPS. If not specified, the original configuration is retained.
 * @method string getIPv6Status() Obtain IPv6 status. Valid values:
<li>follow: follow the site IPv6 configuration;</li>
<li>on: enabled;</li>
<li>off: Disabled.</li>
<li>Leave blank to retain the original configuration.</li>
 * @method void setIPv6Status(string $IPv6Status) Set IPv6 status. Valid values:
<li>follow: follow the site IPv6 configuration;</li>
<li>on: enabled;</li>
<li>off: Disabled.</li>
<li>Leave blank to retain the original configuration.</li>
 */
class ModifyAccelerationDomainRequest extends AbstractModel
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
<li>HTTP: Origin-pull over HTTP;</li>
<li>HTTPS: Origin-pull over HTTPS protocol.</li>
<li>Leave blank to retain the original configuration.</li>
     */
    public $OriginProtocol;

    /**
     * @var integer HTTP origin-pull port. Value range: 1–65535. This parameter is valid only when OriginProtocol is FOLLOW or HTTP. If not specified, the original configuration is retained.
     */
    public $HttpOriginPort;

    /**
     * @var integer HTTPS origin-pull port. Value range: 1-65535. This parameter is valid only when OriginProtocol is FOLLOW or HTTPS. If not specified, the original configuration is retained.
     */
    public $HttpsOriginPort;

    /**
     * @var string IPv6 status. Valid values:
<li>follow: follow the site IPv6 configuration;</li>
<li>on: enabled;</li>
<li>off: Disabled.</li>
<li>Leave blank to retain the original configuration.</li>
     */
    public $IPv6Status;

    /**
     * @param string $ZoneId Zone ID of the acceleration domain name.
     * @param string $DomainName Acceleration domain name.
     * @param OriginInfo $OriginInfo Origin server information.
     * @param string $OriginProtocol Origin-pull protocol. Valid values:
<li>FOLLOW: follow protocol;</li>
<li>HTTP: Origin-pull over HTTP;</li>
<li>HTTPS: Origin-pull over HTTPS protocol.</li>
<li>Leave blank to retain the original configuration.</li>
     * @param integer $HttpOriginPort HTTP origin-pull port. Value range: 1–65535. This parameter is valid only when OriginProtocol is FOLLOW or HTTP. If not specified, the original configuration is retained.
     * @param integer $HttpsOriginPort HTTPS origin-pull port. Value range: 1-65535. This parameter is valid only when OriginProtocol is FOLLOW or HTTPS. If not specified, the original configuration is retained.
     * @param string $IPv6Status IPv6 status. Valid values:
<li>follow: follow the site IPv6 configuration;</li>
<li>on: enabled;</li>
<li>off: Disabled.</li>
<li>Leave blank to retain the original configuration.</li>
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
    }
}
