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
 * ModifyMultiPathGateway request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getGatewayId() Obtain Specifies the gateway ID.
 * @method void setGatewayId(string $GatewayId) Set Specifies the gateway ID.
 * @method string getGatewayName() Obtain Gateway name, up to 16 characters, allowed characters (a-z, A-Z, 0-9, -, _).
 * @method void setGatewayName(string $GatewayName) Set Gateway name, up to 16 characters, allowed characters (a-z, A-Z, 0-9, -, _).
 * @method string getGatewayIP() Obtain Gateway address, if GatewayType value is private (private gateway), you can fill in and modify it. When using this address, please ensure it has been entered into the Tencent cloud multi-channel security acceleration gateway system. if not entered, you need to submit a ticket or contact the architect to enter the gateway IP address into the Tencent cloud multi-channel security acceleration gateway system in advance before making API calls.
 * @method void setGatewayIP(string $GatewayIP) Set Gateway address, if GatewayType value is private (private gateway), you can fill in and modify it. When using this address, please ensure it has been entered into the Tencent cloud multi-channel security acceleration gateway system. if not entered, you need to submit a ticket or contact the architect to enter the gateway IP address into the Tencent cloud multi-channel security acceleration gateway system in advance before making API calls.
 * @method integer getGatewayPort() Obtain Gateway port, range 1-65535 (excluding 8888), supports modifying GatewayType with a value of private gateway.
 * @method void setGatewayPort(integer $GatewayPort) Set Gateway port, range 1-65535 (excluding 8888), supports modifying GatewayType with a value of private gateway.
 */
class ModifyMultiPathGatewayRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Specifies the gateway ID.
     */
    public $GatewayId;

    /**
     * @var string Gateway name, up to 16 characters, allowed characters (a-z, A-Z, 0-9, -, _).
     */
    public $GatewayName;

    /**
     * @var string Gateway address, if GatewayType value is private (private gateway), you can fill in and modify it. When using this address, please ensure it has been entered into the Tencent cloud multi-channel security acceleration gateway system. if not entered, you need to submit a ticket or contact the architect to enter the gateway IP address into the Tencent cloud multi-channel security acceleration gateway system in advance before making API calls.
     */
    public $GatewayIP;

    /**
     * @var integer Gateway port, range 1-65535 (excluding 8888), supports modifying GatewayType with a value of private gateway.
     */
    public $GatewayPort;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $GatewayId Specifies the gateway ID.
     * @param string $GatewayName Gateway name, up to 16 characters, allowed characters (a-z, A-Z, 0-9, -, _).
     * @param string $GatewayIP Gateway address, if GatewayType value is private (private gateway), you can fill in and modify it. When using this address, please ensure it has been entered into the Tencent cloud multi-channel security acceleration gateway system. if not entered, you need to submit a ticket or contact the architect to enter the gateway IP address into the Tencent cloud multi-channel security acceleration gateway system in advance before making API calls.
     * @param integer $GatewayPort Gateway port, range 1-65535 (excluding 8888), supports modifying GatewayType with a value of private gateway.
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

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("GatewayIP",$param) and $param["GatewayIP"] !== null) {
            $this->GatewayIP = $param["GatewayIP"];
        }

        if (array_key_exists("GatewayPort",$param) and $param["GatewayPort"] !== null) {
            $this->GatewayPort = $param["GatewayPort"];
        }
    }
}
