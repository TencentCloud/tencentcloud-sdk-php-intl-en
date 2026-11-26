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
 * CreateMultiPathGateway request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getGatewayType() Obtain Gateway type. Valid values:
<li> cloud: Cloud Gateway, a gateway created and managed by Tencent Cloud;</li>
<li> private: Private gateway, a private gateway deployed by the user.</li>
 * @method void setGatewayType(string $GatewayType) Set Gateway type. Valid values:
<li> cloud: Cloud Gateway, a gateway created and managed by Tencent Cloud;</li>
<li> private: Private gateway, a private gateway deployed by the user.</li>
 * @method string getGatewayName() Obtain Gateway name, up to 16 characters. Available characters: a-z, A-Z, 0-9, -, _.
 * @method void setGatewayName(string $GatewayName) Set Gateway name, up to 16 characters. Available characters: a-z, A-Z, 0-9, -, _.
 * @method integer getGatewayPort() Obtain Gateway port. Range: 1–65535 (excluding 8888).
 * @method void setGatewayPort(integer $GatewayPort) Set Gateway port. Range: 1–65535 (excluding 8888).
 * @method string getRegionId() Obtain Gateway region. Required when the GatewayType value is cloud (Cloud Gateway). You can query the RegionId list via the DescribeMultiPathGatewayRegions API.
 * @method void setRegionId(string $RegionId) Set Gateway region. Required when the GatewayType value is cloud (Cloud Gateway). You can query the RegionId list via the DescribeMultiPathGatewayRegions API.
 * @method string getGatewayIP() Obtain Gateway address. Required when GatewayType is private. When using this address, please ensure it has been entered into the Tencent Cloud multi-channel security acceleration gateway system. If not entered, the gateway IP address needs to be entered into the Tencent Cloud multi-channel security acceleration gateway system in advance through a ticket or by contacting the architect before calling this API.
 * @method void setGatewayIP(string $GatewayIP) Set Gateway address. Required when GatewayType is private. When using this address, please ensure it has been entered into the Tencent Cloud multi-channel security acceleration gateway system. If not entered, the gateway IP address needs to be entered into the Tencent Cloud multi-channel security acceleration gateway system in advance through a ticket or by contacting the architect before calling this API.
 */
class CreateMultiPathGatewayRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Gateway type. Valid values:
<li> cloud: Cloud Gateway, a gateway created and managed by Tencent Cloud;</li>
<li> private: Private gateway, a private gateway deployed by the user.</li>
     */
    public $GatewayType;

    /**
     * @var string Gateway name, up to 16 characters. Available characters: a-z, A-Z, 0-9, -, _.
     */
    public $GatewayName;

    /**
     * @var integer Gateway port. Range: 1–65535 (excluding 8888).
     */
    public $GatewayPort;

    /**
     * @var string Gateway region. Required when the GatewayType value is cloud (Cloud Gateway). You can query the RegionId list via the DescribeMultiPathGatewayRegions API.
     */
    public $RegionId;

    /**
     * @var string Gateway address. Required when GatewayType is private. When using this address, please ensure it has been entered into the Tencent Cloud multi-channel security acceleration gateway system. If not entered, the gateway IP address needs to be entered into the Tencent Cloud multi-channel security acceleration gateway system in advance through a ticket or by contacting the architect before calling this API.
     */
    public $GatewayIP;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $GatewayType Gateway type. Valid values:
<li> cloud: Cloud Gateway, a gateway created and managed by Tencent Cloud;</li>
<li> private: Private gateway, a private gateway deployed by the user.</li>
     * @param string $GatewayName Gateway name, up to 16 characters. Available characters: a-z, A-Z, 0-9, -, _.
     * @param integer $GatewayPort Gateway port. Range: 1–65535 (excluding 8888).
     * @param string $RegionId Gateway region. Required when the GatewayType value is cloud (Cloud Gateway). You can query the RegionId list via the DescribeMultiPathGatewayRegions API.
     * @param string $GatewayIP Gateway address. Required when GatewayType is private. When using this address, please ensure it has been entered into the Tencent Cloud multi-channel security acceleration gateway system. If not entered, the gateway IP address needs to be entered into the Tencent Cloud multi-channel security acceleration gateway system in advance through a ticket or by contacting the architect before calling this API.
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

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("GatewayPort",$param) and $param["GatewayPort"] !== null) {
            $this->GatewayPort = $param["GatewayPort"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("GatewayIP",$param) and $param["GatewayIP"] !== null) {
            $this->GatewayIP = $param["GatewayIP"];
        }
    }
}
