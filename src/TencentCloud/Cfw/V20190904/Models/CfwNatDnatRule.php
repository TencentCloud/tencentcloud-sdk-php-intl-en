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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NAT firewall DNAT rules
 *
 * @method string getIpProtocol() Obtain Network protocol. Valid values: TCP or UDP.
 * @method void setIpProtocol(string $IpProtocol) Set Network protocol. Valid values: TCP or UDP.
 * @method string getPublicIpAddress() Obtain Elastic IP.
 * @method void setPublicIpAddress(string $PublicIpAddress) Set Elastic IP.
 * @method integer getPublicPort() Obtain Public port.
 * @method void setPublicPort(integer $PublicPort) Set Public port.
 * @method string getPrivateIpAddress() Obtain Private address.
 * @method void setPrivateIpAddress(string $PrivateIpAddress) Set Private address.
 * @method integer getPrivatePort() Obtain Private port.
 * @method void setPrivatePort(integer $PrivatePort) Set Private port.
 * @method string getDescription() Obtain The description of NAT firewall forwarding rules.
 * @method void setDescription(string $Description) Set The description of NAT firewall forwarding rules.
 */
class CfwNatDnatRule extends AbstractModel
{
    /**
     * @var string Network protocol. Valid values: TCP or UDP.
     */
    public $IpProtocol;

    /**
     * @var string Elastic IP.
     */
    public $PublicIpAddress;

    /**
     * @var integer Public port.
     */
    public $PublicPort;

    /**
     * @var string Private address.
     */
    public $PrivateIpAddress;

    /**
     * @var integer Private port.
     */
    public $PrivatePort;

    /**
     * @var string The description of NAT firewall forwarding rules.
     */
    public $Description;

    /**
     * @param string $IpProtocol Network protocol. Valid values: TCP or UDP.
     * @param string $PublicIpAddress Elastic IP.
     * @param integer $PublicPort Public port.
     * @param string $PrivateIpAddress Private address.
     * @param integer $PrivatePort Private port.
     * @param string $Description The description of NAT firewall forwarding rules.
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
        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }

        if (array_key_exists("PublicIpAddress",$param) and $param["PublicIpAddress"] !== null) {
            $this->PublicIpAddress = $param["PublicIpAddress"];
        }

        if (array_key_exists("PublicPort",$param) and $param["PublicPort"] !== null) {
            $this->PublicPort = $param["PublicPort"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("PrivatePort",$param) and $param["PrivatePort"] !== null) {
            $this->PrivatePort = $param["PrivatePort"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
