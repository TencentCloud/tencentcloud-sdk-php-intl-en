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
 * @method string getGatewayId() Obtain Gateway ID.
 * @method void setGatewayId(string $GatewayId) Set Gateway ID.
 * @method string getGatewayName() Obtain Gateway name, up to 16 characters. Usable characters: a-z, A-Z, 0-9, -, _.
 * @method void setGatewayName(string $GatewayName) Set Gateway name, up to 16 characters. Usable characters: a-z, A-Z, 0-9, -, _.
 * @method string getGatewayIP() Obtain Gateway address. When GatewayType is private, you can fill in and modify this address. Before using this address, please ensure it has been entered into the Tencent Cloud multi-channel security acceleration gateway system. If not, enter the gateway IP address into the Tencent Cloud multi-channel security acceleration gateway system in advance through a ticket or by contacting the architect before calling this API.
 * @method void setGatewayIP(string $GatewayIP) Set Gateway address. When GatewayType is private, you can fill in and modify this address. Before using this address, please ensure it has been entered into the Tencent Cloud multi-channel security acceleration gateway system. If not, enter the gateway IP address into the Tencent Cloud multi-channel security acceleration gateway system in advance through a ticket or by contacting the architect before calling this API.
 * @method integer getGatewayPort() Obtain Gateway port. Value range: 1–65535 (excluding 8888). Modification is supported only for private gateways with a GatewayType value of private.
 * @method void setGatewayPort(integer $GatewayPort) Set Gateway port. Value range: 1–65535 (excluding 8888). Modification is supported only for private gateways with a GatewayType value of private.
 */
class ModifyMultiPathGatewayRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Gateway ID.
     */
    public $GatewayId;

    /**
     * @var string Gateway name, up to 16 characters. Usable characters: a-z, A-Z, 0-9, -, _.
     */
    public $GatewayName;

    /**
     * @var string Gateway address. When GatewayType is private, you can fill in and modify this address. Before using this address, please ensure it has been entered into the Tencent Cloud multi-channel security acceleration gateway system. If not, enter the gateway IP address into the Tencent Cloud multi-channel security acceleration gateway system in advance through a ticket or by contacting the architect before calling this API.
     */
    public $GatewayIP;

    /**
     * @var integer Gateway port. Value range: 1–65535 (excluding 8888). Modification is supported only for private gateways with a GatewayType value of private.
     */
    public $GatewayPort;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $GatewayId Gateway ID.
     * @param string $GatewayName Gateway name, up to 16 characters. Usable characters: a-z, A-Z, 0-9, -, _.
     * @param string $GatewayIP Gateway address. When GatewayType is private, you can fill in and modify this address. Before using this address, please ensure it has been entered into the Tencent Cloud multi-channel security acceleration gateway system. If not, enter the gateway IP address into the Tencent Cloud multi-channel security acceleration gateway system in advance through a ticket or by contacting the architect before calling this API.
     * @param integer $GatewayPort Gateway port. Value range: 1–65535 (excluding 8888). Modification is supported only for private gateways with a GatewayType value of private.
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
