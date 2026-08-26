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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Network interface configuration for instance creation, including VPCs, subnets, and IP address allocation for primary and secondary network interfaces. This feature is in beta test in selected regions. To use this feature, [submit a ticket](https://console.tencentcloud.com/workorder/category).
 *
 * @method string getInterfaceType() Obtain Specifies whether the network interface is primary or secondary. Valid values must be uppercase. The `NetworkInterfaces` array must contain exactly one `PRIMARY` network interface and can contain multiple `SECONDARY` network interfaces. Valid values:<li>`PRIMARY`: Primary network interface.</li><li>`SECONDARY`: Secondary network interface.</li>
 * @method void setInterfaceType(string $InterfaceType) Set Specifies whether the network interface is primary or secondary. Valid values must be uppercase. The `NetworkInterfaces` array must contain exactly one `PRIMARY` network interface and can contain multiple `SECONDARY` network interfaces. Valid values:<li>`PRIMARY`: Primary network interface.</li><li>`SECONDARY`: Secondary network interface.</li>
 * @method string getVpcId() Obtain VPC ID in the format of `vpc-xxx`. You can obtain a valid VPC ID from the [VPC console](https://console.tencentcloud.com/vpc/vpc?rid=1) or from the `VpcId` field returned by the [DescribeVpcs](https://www.tencentcloud.com/document/product/215/15778) API. If both `VpcId` and `SubnetId` are set to `DEFAULT` when creating an instance, the default VPC is used.
 * @method void setVpcId(string $VpcId) Set VPC ID in the format of `vpc-xxx`. You can obtain a valid VPC ID from the [VPC console](https://console.tencentcloud.com/vpc/vpc?rid=1) or from the `VpcId` field returned by the [DescribeVpcs](https://www.tencentcloud.com/document/product/215/15778) API. If both `VpcId` and `SubnetId` are set to `DEFAULT` when creating an instance, the default VPC is used.
 * @method string getSubnetId() Obtain VPC subnet ID in the format of `subnet-xxx`. You can obtain a valid subnet ID from the [subnet console](https://console.tencentcloud.com/vpc/subnet) or from the `SubnetId` field returned by the [DescribeSubnets](https://www.tencentcloud.com/document/product/215/15784) API. If both `SubnetId` and `VpcId` are set to `DEFAULT` when creating an instance, the default VPC is used.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID in the format of `subnet-xxx`. You can obtain a valid subnet ID from the [subnet console](https://console.tencentcloud.com/vpc/subnet) or from the `SubnetId` field returned by the [DescribeSubnets](https://www.tencentcloud.com/document/product/215/15784) API. If both `SubnetId` and `VpcId` are set to `DEFAULT` when creating an instance, the default VPC is used.
 * @method integer getPrivateIpv4AddressCount() Obtain Required. Specifies the number of private IPv4 addresses automatically assigned to each network interface. Manually specifying IP addresses and automatically assigning IP addresses at the same time is not supported. Valid range: [1, 50].
 * @method void setPrivateIpv4AddressCount(integer $PrivateIpv4AddressCount) Set Required. Specifies the number of private IPv4 addresses automatically assigned to each network interface. Manually specifying IP addresses and automatically assigning IP addresses at the same time is not supported. Valid range: [1, 50].
 * @method string getNetworkInterfaceId() Obtain ID of an existing elastic network interface (ENI) to be attached. This parameter applies only to secondary network interfaces. The primary network interface is created automatically through the existing process and cannot be specified using this parameter. When an existing ENI is specified, `InstanceCount` must be set to 1.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set ID of an existing elastic network interface (ENI) to be attached. This parameter applies only to secondary network interfaces. The primary network interface is created automatically through the existing process and cannot be specified using this parameter. When an existing ENI is specified, `InstanceCount` must be set to 1.
 * @method array getSecurityGroupIds() Obtain Security groups associated with the instance. You can obtain the security group IDs from the `SecurityGroupId` field returned by the [DescribeSecurityGroups](https://www.tencentcloud.com/document/api/215/15808) API. If this parameter is not specified, the default security group of the specified project is associated. If no default security group exists, one is automatically created. Each user can configure up to 50 security groups per project in each region.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security groups associated with the instance. You can obtain the security group IDs from the `SecurityGroupId` field returned by the [DescribeSecurityGroups](https://www.tencentcloud.com/document/api/215/15808) API. If this parameter is not specified, the default security group of the specified project is associated. If no default security group exists, one is automatically created. Each user can configure up to 50 security groups per project in each region.
 * @method boolean getDeleteWithInstance() Obtain Specifies whether the associated elastic network interface (ENI) is deleted when the CVM instance is terminated. This parameter applies only to secondary network interfaces. By default, secondary network interfaces are retained to preserve the existing behavior. This parameter does not apply to the primary network interface, which is always deleted when the instance is terminated. Default value: `false`.
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) Set Specifies whether the associated elastic network interface (ENI) is deleted when the CVM instance is terminated. This parameter applies only to secondary network interfaces. By default, secondary network interfaces are retained to preserve the existing behavior. This parameter does not apply to the primary network interface, which is always deleted when the instance is terminated. Default value: `false`.
 */
class NetworkInterfaces extends AbstractModel
{
    /**
     * @var string Specifies whether the network interface is primary or secondary. Valid values must be uppercase. The `NetworkInterfaces` array must contain exactly one `PRIMARY` network interface and can contain multiple `SECONDARY` network interfaces. Valid values:<li>`PRIMARY`: Primary network interface.</li><li>`SECONDARY`: Secondary network interface.</li>
     */
    public $InterfaceType;

    /**
     * @var string VPC ID in the format of `vpc-xxx`. You can obtain a valid VPC ID from the [VPC console](https://console.tencentcloud.com/vpc/vpc?rid=1) or from the `VpcId` field returned by the [DescribeVpcs](https://www.tencentcloud.com/document/product/215/15778) API. If both `VpcId` and `SubnetId` are set to `DEFAULT` when creating an instance, the default VPC is used.
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID in the format of `subnet-xxx`. You can obtain a valid subnet ID from the [subnet console](https://console.tencentcloud.com/vpc/subnet) or from the `SubnetId` field returned by the [DescribeSubnets](https://www.tencentcloud.com/document/product/215/15784) API. If both `SubnetId` and `VpcId` are set to `DEFAULT` when creating an instance, the default VPC is used.
     */
    public $SubnetId;

    /**
     * @var integer Required. Specifies the number of private IPv4 addresses automatically assigned to each network interface. Manually specifying IP addresses and automatically assigning IP addresses at the same time is not supported. Valid range: [1, 50].
     */
    public $PrivateIpv4AddressCount;

    /**
     * @var string ID of an existing elastic network interface (ENI) to be attached. This parameter applies only to secondary network interfaces. The primary network interface is created automatically through the existing process and cannot be specified using this parameter. When an existing ENI is specified, `InstanceCount` must be set to 1.
     */
    public $NetworkInterfaceId;

    /**
     * @var array Security groups associated with the instance. You can obtain the security group IDs from the `SecurityGroupId` field returned by the [DescribeSecurityGroups](https://www.tencentcloud.com/document/api/215/15808) API. If this parameter is not specified, the default security group of the specified project is associated. If no default security group exists, one is automatically created. Each user can configure up to 50 security groups per project in each region.
     */
    public $SecurityGroupIds;

    /**
     * @var boolean Specifies whether the associated elastic network interface (ENI) is deleted when the CVM instance is terminated. This parameter applies only to secondary network interfaces. By default, secondary network interfaces are retained to preserve the existing behavior. This parameter does not apply to the primary network interface, which is always deleted when the instance is terminated. Default value: `false`.
     */
    public $DeleteWithInstance;

    /**
     * @param string $InterfaceType Specifies whether the network interface is primary or secondary. Valid values must be uppercase. The `NetworkInterfaces` array must contain exactly one `PRIMARY` network interface and can contain multiple `SECONDARY` network interfaces. Valid values:<li>`PRIMARY`: Primary network interface.</li><li>`SECONDARY`: Secondary network interface.</li>
     * @param string $VpcId VPC ID in the format of `vpc-xxx`. You can obtain a valid VPC ID from the [VPC console](https://console.tencentcloud.com/vpc/vpc?rid=1) or from the `VpcId` field returned by the [DescribeVpcs](https://www.tencentcloud.com/document/product/215/15778) API. If both `VpcId` and `SubnetId` are set to `DEFAULT` when creating an instance, the default VPC is used.
     * @param string $SubnetId VPC subnet ID in the format of `subnet-xxx`. You can obtain a valid subnet ID from the [subnet console](https://console.tencentcloud.com/vpc/subnet) or from the `SubnetId` field returned by the [DescribeSubnets](https://www.tencentcloud.com/document/product/215/15784) API. If both `SubnetId` and `VpcId` are set to `DEFAULT` when creating an instance, the default VPC is used.
     * @param integer $PrivateIpv4AddressCount Required. Specifies the number of private IPv4 addresses automatically assigned to each network interface. Manually specifying IP addresses and automatically assigning IP addresses at the same time is not supported. Valid range: [1, 50].
     * @param string $NetworkInterfaceId ID of an existing elastic network interface (ENI) to be attached. This parameter applies only to secondary network interfaces. The primary network interface is created automatically through the existing process and cannot be specified using this parameter. When an existing ENI is specified, `InstanceCount` must be set to 1.
     * @param array $SecurityGroupIds Security groups associated with the instance. You can obtain the security group IDs from the `SecurityGroupId` field returned by the [DescribeSecurityGroups](https://www.tencentcloud.com/document/api/215/15808) API. If this parameter is not specified, the default security group of the specified project is associated. If no default security group exists, one is automatically created. Each user can configure up to 50 security groups per project in each region.
     * @param boolean $DeleteWithInstance Specifies whether the associated elastic network interface (ENI) is deleted when the CVM instance is terminated. This parameter applies only to secondary network interfaces. By default, secondary network interfaces are retained to preserve the existing behavior. This parameter does not apply to the primary network interface, which is always deleted when the instance is terminated. Default value: `false`.
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PrivateIpv4AddressCount",$param) and $param["PrivateIpv4AddressCount"] !== null) {
            $this->PrivateIpv4AddressCount = $param["PrivateIpv4AddressCount"];
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }
    }
}
