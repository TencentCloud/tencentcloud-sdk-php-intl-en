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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccelerationDomain request structure.
 *
 * @method string getZoneId() Obtain ID of the site related with the acceleration domain name.
 * @method void setZoneId(string $ZoneId) Set ID of the site related with the acceleration domain name.
 * @method string getDomainName() Obtain Acceleration domain name
 * @method void setDomainName(string $DomainName) Set Acceleration domain name
 * @method OriginInfo getOriginInfo() Obtain Details of the origin.
 * @method void setOriginInfo(OriginInfo $OriginInfo) Set Details of the origin.
 * @method string getOriginProtocol() Obtain Origin-pull protocol configuration. Values:
<li>`FOLLOW`: Follow the protocol of origin</li>
<li>`HTTP`: Send requests to the origin over HTTP</li>
<li>`HTTPS`: Send requests to the origin over HTTPS</li>
<li>Default: `FOLLOW`</li>
 * @method void setOriginProtocol(string $OriginProtocol) Set Origin-pull protocol configuration. Values:
<li>`FOLLOW`: Follow the protocol of origin</li>
<li>`HTTP`: Send requests to the origin over HTTP</li>
<li>`HTTPS`: Send requests to the origin over HTTPS</li>
<li>Default: `FOLLOW`</li>
 * @method integer getHttpOriginPort() Obtain Ports for HTTP origin-pull requests. Range: 1-65535. It takes effect when `OriginProtocol=FOLLOW/HTTP`. Port 80 is used if it's not specified. 
 * @method void setHttpOriginPort(integer $HttpOriginPort) Set Ports for HTTP origin-pull requests. Range: 1-65535. It takes effect when `OriginProtocol=FOLLOW/HTTP`. Port 80 is used if it's not specified. 
 * @method integer getHttpsOriginPort() Obtain Ports for HTTPS origin-pull requests. Range: 1-65535. It takes effect when `OriginProtocol=FOLLOW/HTTPS`. Port 443 is used if it's not specified. 
 * @method void setHttpsOriginPort(integer $HttpsOriginPort) Set Ports for HTTPS origin-pull requests. Range: 1-65535. It takes effect when `OriginProtocol=FOLLOW/HTTPS`. Port 443 is used if it's not specified. 
 * @method string getIPv6Status() Obtain IPv6 status. Values:
<li>`follow`: Follow the IPv6 configuration of the site</li>
<li>`on`: Enable</li>
<li>`off`: Disable</li>
<li>Default: `follow`</li>
 * @method void setIPv6Status(string $IPv6Status) Set IPv6 status. Values:
<li>`follow`: Follow the IPv6 configuration of the site</li>
<li>`on`: Enable</li>
<li>`off`: Disable</li>
<li>Default: `follow`</li>
 */
class CreateAccelerationDomainRequest extends AbstractModel
{
    /**
     * @var string ID of the site related with the acceleration domain name.
     */
    public $ZoneId;

    /**
     * @var string Acceleration domain name
     */
    public $DomainName;

    /**
     * @var OriginInfo Details of the origin.
     */
    public $OriginInfo;

    /**
     * @var string Origin-pull protocol configuration. Values:
<li>`FOLLOW`: Follow the protocol of origin</li>
<li>`HTTP`: Send requests to the origin over HTTP</li>
<li>`HTTPS`: Send requests to the origin over HTTPS</li>
<li>Default: `FOLLOW`</li>
     */
    public $OriginProtocol;

    /**
     * @var integer Ports for HTTP origin-pull requests. Range: 1-65535. It takes effect when `OriginProtocol=FOLLOW/HTTP`. Port 80 is used if it's not specified. 
     */
    public $HttpOriginPort;

    /**
     * @var integer Ports for HTTPS origin-pull requests. Range: 1-65535. It takes effect when `OriginProtocol=FOLLOW/HTTPS`. Port 443 is used if it's not specified. 
     */
    public $HttpsOriginPort;

    /**
     * @var string IPv6 status. Values:
<li>`follow`: Follow the IPv6 configuration of the site</li>
<li>`on`: Enable</li>
<li>`off`: Disable</li>
<li>Default: `follow`</li>
     */
    public $IPv6Status;

    /**
     * @param string $ZoneId ID of the site related with the acceleration domain name.
     * @param string $DomainName Acceleration domain name
     * @param OriginInfo $OriginInfo Details of the origin.
     * @param string $OriginProtocol Origin-pull protocol configuration. Values:
<li>`FOLLOW`: Follow the protocol of origin</li>
<li>`HTTP`: Send requests to the origin over HTTP</li>
<li>`HTTPS`: Send requests to the origin over HTTPS</li>
<li>Default: `FOLLOW`</li>
     * @param integer $HttpOriginPort Ports for HTTP origin-pull requests. Range: 1-65535. It takes effect when `OriginProtocol=FOLLOW/HTTP`. Port 80 is used if it's not specified. 
     * @param integer $HttpsOriginPort Ports for HTTPS origin-pull requests. Range: 1-65535. It takes effect when `OriginProtocol=FOLLOW/HTTPS`. Port 443 is used if it's not specified. 
     * @param string $IPv6Status IPv6 status. Values:
<li>`follow`: Follow the IPv6 configuration of the site</li>
<li>`on`: Enable</li>
<li>`off`: Disable</li>
<li>Default: `follow`</li>
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
