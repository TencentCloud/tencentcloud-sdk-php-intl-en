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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Nic information
 *
 * @method string getDnsServer() Obtain <p>DNS server</p>
 * @method void setDnsServer(string $DnsServer) Set <p>DNS server</p>
 * @method string getGateway() Obtain <p>Gateway</p>
 * @method void setGateway(string $Gateway) Set <p>Gateway</p>
 * @method string getIp() Obtain <p>IP address</p>
 * @method void setIp(string $Ip) Set <p>IP address</p>
 * @method string getIpv6() Obtain <p>IPv6 address</p>
 * @method void setIpv6(string $Ipv6) Set <p>IPv6 address</p>
 * @method string getMac() Obtain <p>MAC address</p>
 * @method void setMac(string $Mac) Set <p>MAC address</p>
 * @method string getName() Obtain <p>ENI name.</p>
 * @method void setName(string $Name) Set <p>ENI name.</p>
 */
class NetworkCardInfo extends AbstractModel
{
    /**
     * @var string <p>DNS server</p>
     */
    public $DnsServer;

    /**
     * @var string <p>Gateway</p>
     */
    public $Gateway;

    /**
     * @var string <p>IP address</p>
     */
    public $Ip;

    /**
     * @var string <p>IPv6 address</p>
     */
    public $Ipv6;

    /**
     * @var string <p>MAC address</p>
     */
    public $Mac;

    /**
     * @var string <p>ENI name.</p>
     */
    public $Name;

    /**
     * @param string $DnsServer <p>DNS server</p>
     * @param string $Gateway <p>Gateway</p>
     * @param string $Ip <p>IP address</p>
     * @param string $Ipv6 <p>IPv6 address</p>
     * @param string $Mac <p>MAC address</p>
     * @param string $Name <p>ENI name.</p>
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
        if (array_key_exists("DnsServer",$param) and $param["DnsServer"] !== null) {
            $this->DnsServer = $param["DnsServer"];
        }

        if (array_key_exists("Gateway",$param) and $param["Gateway"] !== null) {
            $this->Gateway = $param["Gateway"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = $param["Ipv6"];
        }

        if (array_key_exists("Mac",$param) and $param["Mac"] !== null) {
            $this->Mac = $param["Mac"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
