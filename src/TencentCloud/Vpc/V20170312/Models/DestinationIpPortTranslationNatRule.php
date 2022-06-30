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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The port forwarding rules of the NAT gateway
 *
 * @method string getIpProtocol() Obtain Network protocol. Valid values: `TCP`, `UDP`.
 * @method void setIpProtocol(string $IpProtocol) Set Network protocol. Valid values: `TCP`, `UDP`.
 * @method string getPublicIpAddress() Obtain EIP.
 * @method void setPublicIpAddress(string $PublicIpAddress) Set EIP.
 * @method integer getPublicPort() Obtain Public network port.
 * @method void setPublicPort(integer $PublicPort) Set Public network port.
 * @method string getPrivateIpAddress() Obtain Private network address.
 * @method void setPrivateIpAddress(string $PrivateIpAddress) Set Private network address.
 * @method integer getPrivatePort() Obtain Private network port.
 * @method void setPrivatePort(integer $PrivatePort) Set Private network port.
 * @method string getDescription() Obtain Description of NAT gateway forwarding rules.
 * @method void setDescription(string $Description) Set Description of NAT gateway forwarding rules.
 */
class DestinationIpPortTranslationNatRule extends AbstractModel
{
    /**
     * @var string Network protocol. Valid values: `TCP`, `UDP`.
     */
    public $IpProtocol;

    /**
     * @var string EIP.
     */
    public $PublicIpAddress;

    /**
     * @var integer Public network port.
     */
    public $PublicPort;

    /**
     * @var string Private network address.
     */
    public $PrivateIpAddress;

    /**
     * @var integer Private network port.
     */
    public $PrivatePort;

    /**
     * @var string Description of NAT gateway forwarding rules.
     */
    public $Description;

    /**
     * @param string $IpProtocol Network protocol. Valid values: `TCP`, `UDP`.
     * @param string $PublicIpAddress EIP.
     * @param integer $PublicPort Public network port.
     * @param string $PrivateIpAddress Private network address.
     * @param integer $PrivatePort Private network port.
     * @param string $Description Description of NAT gateway forwarding rules.
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
