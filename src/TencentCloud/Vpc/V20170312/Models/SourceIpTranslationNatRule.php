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
 * SNAT rule of a NAT Gateway
 *
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getResourceType() Obtain Resource type. Valid values: SUBNET, NETWORKINTERFACE
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setResourceType(string $ResourceType) Set Resource type. Valid values: SUBNET, NETWORKINTERFACE
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getPrivateIpAddress() Obtain Source IP/IP range
 * @method void setPrivateIpAddress(string $PrivateIpAddress) Set Source IP/IP range
 * @method array getPublicIpAddresses() Obtain Elastic IP address pool
 * @method void setPublicIpAddresses(array $PublicIpAddresses) Set Elastic IP address pool
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getNatGatewaySnatId() Obtain SNAT rule ID
 * @method void setNatGatewaySnatId(string $NatGatewaySnatId) Set SNAT rule ID
 * @method string getNatGatewayId() Obtain NAT Gateway ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setNatGatewayId(string $NatGatewayId) Set NAT Gateway ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time of a SNAT rule for a NAT Gateway
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time of a SNAT rule for a NAT Gateway
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class SourceIpTranslationNatRule extends AbstractModel
{
    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string Resource type. Valid values: SUBNET, NETWORKINTERFACE
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ResourceType;

    /**
     * @var string Source IP/IP range
     */
    public $PrivateIpAddress;

    /**
     * @var array Elastic IP address pool
     */
    public $PublicIpAddresses;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string SNAT rule ID
     */
    public $NatGatewaySnatId;

    /**
     * @var string NAT Gateway ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $NatGatewayId;

    /**
     * @var string VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Creation time of a SNAT rule for a NAT Gateway
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @param string $ResourceId Resource ID
     * @param string $ResourceType Resource type. Valid values: SUBNET, NETWORKINTERFACE
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $PrivateIpAddress Source IP/IP range
     * @param array $PublicIpAddresses Elastic IP address pool
     * @param string $Description Description
     * @param string $NatGatewaySnatId SNAT rule ID
     * @param string $NatGatewayId NAT Gateway ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $VpcId VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time of a SNAT rule for a NAT Gateway
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NatGatewaySnatId",$param) and $param["NatGatewaySnatId"] !== null) {
            $this->NatGatewaySnatId = $param["NatGatewaySnatId"];
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
