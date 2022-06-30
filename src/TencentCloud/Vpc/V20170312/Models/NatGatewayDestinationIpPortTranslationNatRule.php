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
 * @method string getIpProtocol() Obtain Network protocol. Available choices: `TCP`, `UDP`.
 * @method void setIpProtocol(string $IpProtocol) Set Network protocol. Available choices: `TCP`, `UDP`.
 * @method string getPublicIpAddress() Obtain EIP.
 * @method void setPublicIpAddress(string $PublicIpAddress) Set EIP.
 * @method integer getPublicPort() Obtain Public port.
 * @method void setPublicPort(integer $PublicPort) Set Public port.
 * @method string getPrivateIpAddress() Obtain Private IP.
 * @method void setPrivateIpAddress(string $PrivateIpAddress) Set Private IP.
 * @method integer getPrivatePort() Obtain Private port.
 * @method void setPrivatePort(integer $PrivatePort) Set Private port.
 * @method string getDescription() Obtain NAT gateway forwarding rule description.
 * @method void setDescription(string $Description) Set NAT gateway forwarding rule description.
 * @method string getNatGatewayId() Obtain NAT gateway ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setNatGatewayId(string $NatGatewayId) Set NAT gateway ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain VPC ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain The creation time of the NAT gateway forwarding rule.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set The creation time of the NAT gateway forwarding rule.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class NatGatewayDestinationIpPortTranslationNatRule extends AbstractModel
{
    /**
     * @var string Network protocol. Available choices: `TCP`, `UDP`.
     */
    public $IpProtocol;

    /**
     * @var string EIP.
     */
    public $PublicIpAddress;

    /**
     * @var integer Public port.
     */
    public $PublicPort;

    /**
     * @var string Private IP.
     */
    public $PrivateIpAddress;

    /**
     * @var integer Private port.
     */
    public $PrivatePort;

    /**
     * @var string NAT gateway forwarding rule description.
     */
    public $Description;

    /**
     * @var string NAT gateway ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $NatGatewayId;

    /**
     * @var string VPC ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string The creation time of the NAT gateway forwarding rule.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @param string $IpProtocol Network protocol. Available choices: `TCP`, `UDP`.
     * @param string $PublicIpAddress EIP.
     * @param integer $PublicPort Public port.
     * @param string $PrivateIpAddress Private IP.
     * @param integer $PrivatePort Private port.
     * @param string $Description NAT gateway forwarding rule description.
     * @param string $NatGatewayId NAT gateway ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $VpcId VPC ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreatedTime The creation time of the NAT gateway forwarding rule.
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
