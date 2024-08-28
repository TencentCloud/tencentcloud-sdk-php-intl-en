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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Asset management network interface information
 *
 * @method string getName() Obtain Network interface name
 * @method void setName(string $Name) Set Network interface name
 * @method string getIp() Obtain IPv4 address
 * @method void setIp(string $Ip) Set IPv4 address
 * @method string getGateWay() Obtain Gateway
 * @method void setGateWay(string $GateWay) Set Gateway
 * @method string getMac() Obtain MAC address
 * @method void setMac(string $Mac) Set MAC address
 * @method string getIpv6() Obtain IPv6 address
 * @method void setIpv6(string $Ipv6) Set IPv6 address
 * @method string getDnsServer() Obtain DNS server
 * @method void setDnsServer(string $DnsServer) Set DNS server
 */
class AssetNetworkCardInfo extends AbstractModel
{
    /**
     * @var string Network interface name
     */
    public $Name;

    /**
     * @var string IPv4 address
     */
    public $Ip;

    /**
     * @var string Gateway
     */
    public $GateWay;

    /**
     * @var string MAC address
     */
    public $Mac;

    /**
     * @var string IPv6 address
     */
    public $Ipv6;

    /**
     * @var string DNS server
     */
    public $DnsServer;

    /**
     * @param string $Name Network interface name
     * @param string $Ip IPv4 address
     * @param string $GateWay Gateway
     * @param string $Mac MAC address
     * @param string $Ipv6 IPv6 address
     * @param string $DnsServer DNS server
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("GateWay",$param) and $param["GateWay"] !== null) {
            $this->GateWay = $param["GateWay"];
        }

        if (array_key_exists("Mac",$param) and $param["Mac"] !== null) {
            $this->Mac = $param["Mac"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = $param["Ipv6"];
        }

        if (array_key_exists("DnsServer",$param) and $param["DnsServer"] !== null) {
            $this->DnsServer = $param["DnsServer"];
        }
    }
}
