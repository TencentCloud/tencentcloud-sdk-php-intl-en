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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Elastic Network Interface configuration in the launch configuration.
 *
 * @method string getInterfaceType() Obtain <p>Network interface card type. This field is required in the request for each network interface.</p><p>Enumeration values:</p><ul><li>PRIMARY: Primary network interface</li><li>SECONDARY: Auxiliary network interface</li></ul><p>When configuring upper-level NetworkInterfaces, the array must explicitly contain and can only contain one PRIMARY. AS does not auto-complete the primary network interface.</p>
 * @method void setInterfaceType(string $InterfaceType) Set <p>Network interface card type. This field is required in the request for each network interface.</p><p>Enumeration values:</p><ul><li>PRIMARY: Primary network interface</li><li>SECONDARY: Auxiliary network interface</li></ul><p>When configuring upper-level NetworkInterfaces, the array must explicitly contain and can only contain one PRIMARY. AS does not auto-complete the primary network interface.</p>
 * @method integer getPrivateIpv4AddressCount() Obtain <p>Total number of private IPv4 addresses requested for the network interface card, including the primary IP.</p><p>Value range: [1, 40]</p><p>Required for SECONDARY network interface card requests; optional for PRIMARY network interface card requests. If left empty, it is processed as 1 only when constructing a CVM request copy during actual scaling, and is not written back to the launch configuration. The explicitly passed in value is passed through to CVM by AS, and finally validated by CVM/VPC.</p>
 * @method void setPrivateIpv4AddressCount(integer $PrivateIpv4AddressCount) Set <p>Total number of private IPv4 addresses requested for the network interface card, including the primary IP.</p><p>Value range: [1, 40]</p><p>Required for SECONDARY network interface card requests; optional for PRIMARY network interface card requests. If left empty, it is processed as 1 only when constructing a CVM request copy during actual scaling, and is not written back to the launch configuration. The explicitly passed in value is passed through to CVM by AS, and finally validated by CVM/VPC.</p>
 * @method array getSecurityGroupIds() Obtain <p>List of security group IDs bound to the ENI.</p><p>Input limit: up to 10.</p><p>For PRIMARY, a non-empty list explicitly configured in the network interface takes precedence over the SecurityGroupIds parameter in the launch configuration; if not configured in the network interface, the SecurityGroupIds parameter in the launch configuration is used. If neither is configured, AS does not specify security groups and proceeds with the CVM default rule. For SECONDARY, only the non-empty list explicitly configured in the network interface is passed through, and the SecurityGroupIds parameter in the launch configuration is not inherited.</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>List of security group IDs bound to the ENI.</p><p>Input limit: up to 10.</p><p>For PRIMARY, a non-empty list explicitly configured in the network interface takes precedence over the SecurityGroupIds parameter in the launch configuration; if not configured in the network interface, the SecurityGroupIds parameter in the launch configuration is used. If neither is configured, AS does not specify security groups and proceeds with the CVM default rule. For SECONDARY, only the non-empty list explicitly configured in the network interface is passed through, and the SecurityGroupIds parameter in the launch configuration is not inherited.</p>
 * @method boolean getIsKeepENI() Obtain <p>Whether to reserve the auxiliary network interface when instance is terminated. Only applicable to SECONDARY.</p><p>Enumeration values:</p><ul><li>false: Do not retain the auxiliary network interface. It will destroy with the instance.</li><li>true: Retain the auxiliary network interface.</li></ul><p>Default value: false</p><p>PRIMARY does not allow configuration of true.</p>
 * @method void setIsKeepENI(boolean $IsKeepENI) Set <p>Whether to reserve the auxiliary network interface when instance is terminated. Only applicable to SECONDARY.</p><p>Enumeration values:</p><ul><li>false: Do not retain the auxiliary network interface. It will destroy with the instance.</li><li>true: Retain the auxiliary network interface.</li></ul><p>Default value: false</p><p>PRIMARY does not allow configuration of true.</p>
 */
class NetworkInterface extends AbstractModel
{
    /**
     * @var string <p>Network interface card type. This field is required in the request for each network interface.</p><p>Enumeration values:</p><ul><li>PRIMARY: Primary network interface</li><li>SECONDARY: Auxiliary network interface</li></ul><p>When configuring upper-level NetworkInterfaces, the array must explicitly contain and can only contain one PRIMARY. AS does not auto-complete the primary network interface.</p>
     */
    public $InterfaceType;

    /**
     * @var integer <p>Total number of private IPv4 addresses requested for the network interface card, including the primary IP.</p><p>Value range: [1, 40]</p><p>Required for SECONDARY network interface card requests; optional for PRIMARY network interface card requests. If left empty, it is processed as 1 only when constructing a CVM request copy during actual scaling, and is not written back to the launch configuration. The explicitly passed in value is passed through to CVM by AS, and finally validated by CVM/VPC.</p>
     */
    public $PrivateIpv4AddressCount;

    /**
     * @var array <p>List of security group IDs bound to the ENI.</p><p>Input limit: up to 10.</p><p>For PRIMARY, a non-empty list explicitly configured in the network interface takes precedence over the SecurityGroupIds parameter in the launch configuration; if not configured in the network interface, the SecurityGroupIds parameter in the launch configuration is used. If neither is configured, AS does not specify security groups and proceeds with the CVM default rule. For SECONDARY, only the non-empty list explicitly configured in the network interface is passed through, and the SecurityGroupIds parameter in the launch configuration is not inherited.</p>
     */
    public $SecurityGroupIds;

    /**
     * @var boolean <p>Whether to reserve the auxiliary network interface when instance is terminated. Only applicable to SECONDARY.</p><p>Enumeration values:</p><ul><li>false: Do not retain the auxiliary network interface. It will destroy with the instance.</li><li>true: Retain the auxiliary network interface.</li></ul><p>Default value: false</p><p>PRIMARY does not allow configuration of true.</p>
     */
    public $IsKeepENI;

    /**
     * @param string $InterfaceType <p>Network interface card type. This field is required in the request for each network interface.</p><p>Enumeration values:</p><ul><li>PRIMARY: Primary network interface</li><li>SECONDARY: Auxiliary network interface</li></ul><p>When configuring upper-level NetworkInterfaces, the array must explicitly contain and can only contain one PRIMARY. AS does not auto-complete the primary network interface.</p>
     * @param integer $PrivateIpv4AddressCount <p>Total number of private IPv4 addresses requested for the network interface card, including the primary IP.</p><p>Value range: [1, 40]</p><p>Required for SECONDARY network interface card requests; optional for PRIMARY network interface card requests. If left empty, it is processed as 1 only when constructing a CVM request copy during actual scaling, and is not written back to the launch configuration. The explicitly passed in value is passed through to CVM by AS, and finally validated by CVM/VPC.</p>
     * @param array $SecurityGroupIds <p>List of security group IDs bound to the ENI.</p><p>Input limit: up to 10.</p><p>For PRIMARY, a non-empty list explicitly configured in the network interface takes precedence over the SecurityGroupIds parameter in the launch configuration; if not configured in the network interface, the SecurityGroupIds parameter in the launch configuration is used. If neither is configured, AS does not specify security groups and proceeds with the CVM default rule. For SECONDARY, only the non-empty list explicitly configured in the network interface is passed through, and the SecurityGroupIds parameter in the launch configuration is not inherited.</p>
     * @param boolean $IsKeepENI <p>Whether to reserve the auxiliary network interface when instance is terminated. Only applicable to SECONDARY.</p><p>Enumeration values:</p><ul><li>false: Do not retain the auxiliary network interface. It will destroy with the instance.</li><li>true: Retain the auxiliary network interface.</li></ul><p>Default value: false</p><p>PRIMARY does not allow configuration of true.</p>
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
        if (array_key_exists("InterfaceType",$param) and $param["InterfaceType"] !== null) {
            $this->InterfaceType = $param["InterfaceType"];
        }

        if (array_key_exists("PrivateIpv4AddressCount",$param) and $param["PrivateIpv4AddressCount"] !== null) {
            $this->PrivateIpv4AddressCount = $param["PrivateIpv4AddressCount"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("IsKeepENI",$param) and $param["IsKeepENI"] !== null) {
            $this->IsKeepENI = $param["IsKeepENI"];
        }
    }
}
