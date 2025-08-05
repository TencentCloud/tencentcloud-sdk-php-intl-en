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
 * @method string getGatewayType() Obtain Gateway type. valid values:
<Li> Cloud: cloud gateway, a gateway created and managed by Tencent cloud;</li>
<Li>Private: private gateway, a user-deployed private gateway.</li>
 * @method void setGatewayType(string $GatewayType) Set Gateway type. valid values:
<Li> Cloud: cloud gateway, a gateway created and managed by Tencent cloud;</li>
<Li>Private: private gateway, a user-deployed private gateway.</li>
 * @method string getGatewayName() Obtain Gateway name: up to 16 characters, allowed characters (a-z, A-Z, 0-9, -, _).
 * @method void setGatewayName(string $GatewayName) Set Gateway name: up to 16 characters, allowed characters (a-z, A-Z, 0-9, -, _).
 * @method integer getGatewayPort() Obtain Gateway port: value range: 1-65535 (excluding 8888).
 * @method void setGatewayPort(integer $GatewayPort) Set Gateway port: value range: 1-65535 (excluding 8888).
 * @method string getRegionId() Obtain Gateway region: GatewayType value is cloud (cloud gateway). required. RegionId list can be obtained from the DescribeMultiPathGatewayRegions API.
 * @method void setRegionId(string $RegionId) Set Gateway region: GatewayType value is cloud (cloud gateway). required. RegionId list can be obtained from the DescribeMultiPathGatewayRegions API.
 * @method string getGatewayIP() Obtain Gateway address (required when GatewayType=private):
Before using this address, ensure it has been registered in the Tencent Cloud Multi-Path Security Acceleration Gateway system. 
If not registered, submit a support ticket or contact your architect to pre-register the gateway IP address in the system before API invocation.
 * @method void setGatewayIP(string $GatewayIP) Set Gateway address (required when GatewayType=private):
Before using this address, ensure it has been registered in the Tencent Cloud Multi-Path Security Acceleration Gateway system. 
If not registered, submit a support ticket or contact your architect to pre-register the gateway IP address in the system before API invocation.
 */
class CreateMultiPathGatewayRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Gateway type. valid values:
<Li> Cloud: cloud gateway, a gateway created and managed by Tencent cloud;</li>
<Li>Private: private gateway, a user-deployed private gateway.</li>
     */
    public $GatewayType;

    /**
     * @var string Gateway name: up to 16 characters, allowed characters (a-z, A-Z, 0-9, -, _).
     */
    public $GatewayName;

    /**
     * @var integer Gateway port: value range: 1-65535 (excluding 8888).
     */
    public $GatewayPort;

    /**
     * @var string Gateway region: GatewayType value is cloud (cloud gateway). required. RegionId list can be obtained from the DescribeMultiPathGatewayRegions API.
     */
    public $RegionId;

    /**
     * @var string Gateway address (required when GatewayType=private):
Before using this address, ensure it has been registered in the Tencent Cloud Multi-Path Security Acceleration Gateway system. 
If not registered, submit a support ticket or contact your architect to pre-register the gateway IP address in the system before API invocation.
     */
    public $GatewayIP;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $GatewayType Gateway type. valid values:
<Li> Cloud: cloud gateway, a gateway created and managed by Tencent cloud;</li>
<Li>Private: private gateway, a user-deployed private gateway.</li>
     * @param string $GatewayName Gateway name: up to 16 characters, allowed characters (a-z, A-Z, 0-9, -, _).
     * @param integer $GatewayPort Gateway port: value range: 1-65535 (excluding 8888).
     * @param string $RegionId Gateway region: GatewayType value is cloud (cloud gateway). required. RegionId list can be obtained from the DescribeMultiPathGatewayRegions API.
     * @param string $GatewayIP Gateway address (required when GatewayType=private):
Before using this address, ensure it has been registered in the Tencent Cloud Multi-Path Security Acceleration Gateway system. 
If not registered, submit a support ticket or contact your architect to pre-register the gateway IP address in the system before API invocation.
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
