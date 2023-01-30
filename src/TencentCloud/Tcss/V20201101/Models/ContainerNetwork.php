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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Container network information
 *
 * @method string getEndpointID() Obtain Endpoint ID
 * @method void setEndpointID(string $EndpointID) Set Endpoint ID
 * @method string getMode() Obtain Mode: `bridge`.
 * @method void setMode(string $Mode) Set Mode: `bridge`.
 * @method string getName() Obtain Network name
 * @method void setName(string $Name) Set Network name
 * @method string getNetworkID() Obtain Network ID
 * @method void setNetworkID(string $NetworkID) Set Network ID
 * @method string getGateway() Obtain Gateway
 * @method void setGateway(string $Gateway) Set Gateway
 * @method string getIpv4() Obtain IPv4 address
 * @method void setIpv4(string $Ipv4) Set IPv4 address
 * @method string getIpv6() Obtain IPv6 address
 * @method void setIpv6(string $Ipv6) Set IPv6 address
 * @method string getMAC() Obtain MAC address
 * @method void setMAC(string $MAC) Set MAC address
 */
class ContainerNetwork extends AbstractModel
{
    /**
     * @var string Endpoint ID
     */
    public $EndpointID;

    /**
     * @var string Mode: `bridge`.
     */
    public $Mode;

    /**
     * @var string Network name
     */
    public $Name;

    /**
     * @var string Network ID
     */
    public $NetworkID;

    /**
     * @var string Gateway
     */
    public $Gateway;

    /**
     * @var string IPv4 address
     */
    public $Ipv4;

    /**
     * @var string IPv6 address
     */
    public $Ipv6;

    /**
     * @var string MAC address
     */
    public $MAC;

    /**
     * @param string $EndpointID Endpoint ID
     * @param string $Mode Mode: `bridge`.
     * @param string $Name Network name
     * @param string $NetworkID Network ID
     * @param string $Gateway Gateway
     * @param string $Ipv4 IPv4 address
     * @param string $Ipv6 IPv6 address
     * @param string $MAC MAC address
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
        if (array_key_exists("EndpointID",$param) and $param["EndpointID"] !== null) {
            $this->EndpointID = $param["EndpointID"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NetworkID",$param) and $param["NetworkID"] !== null) {
            $this->NetworkID = $param["NetworkID"];
        }

        if (array_key_exists("Gateway",$param) and $param["Gateway"] !== null) {
            $this->Gateway = $param["Gateway"];
        }

        if (array_key_exists("Ipv4",$param) and $param["Ipv4"] !== null) {
            $this->Ipv4 = $param["Ipv4"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = $param["Ipv6"];
        }

        if (array_key_exists("MAC",$param) and $param["MAC"] !== null) {
            $this->MAC = $param["MAC"];
        }
    }
}
