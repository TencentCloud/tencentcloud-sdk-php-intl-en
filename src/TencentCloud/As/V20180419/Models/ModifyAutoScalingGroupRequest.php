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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAutoScalingGroupId() 获取Auto scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置Auto scaling group ID
 * @method string getAutoScalingGroupName() 获取Auto scaling group name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 55 bytes and must be unique under your account.
 * @method void setAutoScalingGroupName(string $AutoScalingGroupName) 设置Auto scaling group name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 55 bytes and must be unique under your account.
 * @method integer getDefaultCooldown() 获取Default cooldown period in seconds. Default value: 300
 * @method void setDefaultCooldown(integer $DefaultCooldown) 设置Default cooldown period in seconds. Default value: 300
 * @method integer getDesiredCapacity() 获取Desired number of instances. The number should be no larger than the maximum and no smaller than minimum number of instances
 * @method void setDesiredCapacity(integer $DesiredCapacity) 设置Desired number of instances. The number should be no larger than the maximum and no smaller than minimum number of instances
 * @method string getLaunchConfigurationId() 获取Launch configuration ID
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置Launch configuration ID
 * @method integer getMaxSize() 获取Maximum number of instances. Value range: 0-2,000.
 * @method void setMaxSize(integer $MaxSize) 设置Maximum number of instances. Value range: 0-2,000.
 * @method integer getMinSize() 获取Minimum number of instances. Value range: 0-2,000.
 * @method void setMinSize(integer $MinSize) 设置Minimum number of instances. Value range: 0-2,000.
 * @method integer getProjectId() 获取Project ID
 * @method void setProjectId(integer $ProjectId) 设置Project ID
 * @method array getSubnetIds() 获取List of subnet IDs
 * @method void setSubnetIds(array $SubnetIds) 设置List of subnet IDs
 * @method array getTerminationPolicies() 获取Termination policy. Currently, the maximum length is 1. Value range: OLDEST_INSTANCE, NEWEST_INSTANCE.
<br><li> OLDEST_INSTANCE: The oldest instance in the auto scaling group will be terminated first.
<br><li> NEWEST_INSTANCE: The newest instance in the auto scaling group will be terminated first.
 * @method void setTerminationPolicies(array $TerminationPolicies) 设置Termination policy. Currently, the maximum length is 1. Value range: OLDEST_INSTANCE, NEWEST_INSTANCE.
<br><li> OLDEST_INSTANCE: The oldest instance in the auto scaling group will be terminated first.
<br><li> NEWEST_INSTANCE: The newest instance in the auto scaling group will be terminated first.
 * @method string getVpcId() 获取VPC ID. This field is left empty for basic networks. You need to specify SubnetIds when modifying the network of the auto scaling group to a VPC with a specified VPC ID. Specify Zones when modifying the network to a basic network.
 * @method void setVpcId(string $VpcId) 设置VPC ID. This field is left empty for basic networks. You need to specify SubnetIds when modifying the network of the auto scaling group to a VPC with a specified VPC ID. Specify Zones when modifying the network to a basic network.
 * @method array getZones() 获取List of availability zones
 * @method void setZones(array $Zones) 设置List of availability zones
 * @method string getRetryPolicy() 获取Retry policy. Value range: IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY. Default value: IMMEDIATE_RETRY.
<br><li> IMMEDIATE_RETRY: Retrying immediately in a short period of time and stopping after a number of consecutive failures (5).
<br><li> INCREMENTAL_INTERVALS: Retrying at incremental intervals, i.e., as the number of consecutive failures increases, the retry interval gradually increases, ranging from one second to one day.
<br><li> NO_RETRY: No retry until a user call or alarm message is received again.
 * @method void setRetryPolicy(string $RetryPolicy) 设置Retry policy. Value range: IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY. Default value: IMMEDIATE_RETRY.
<br><li> IMMEDIATE_RETRY: Retrying immediately in a short period of time and stopping after a number of consecutive failures (5).
<br><li> INCREMENTAL_INTERVALS: Retrying at incremental intervals, i.e., as the number of consecutive failures increases, the retry interval gradually increases, ranging from one second to one day.
<br><li> NO_RETRY: No retry until a user call or alarm message is received again.
 * @method string getZonesCheckPolicy() 获取Availability zone verification policy. Value range: ALL, ANY. Default value: ANY. This will work when the resource-related fields (launch configuration, availability zone, or subnet) of the auto scaling group are actually modified.
<br><li> ALL: The verification will succeed only if all availability zones (Zone) or subnets (SubnetId) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any availability zone (Zone) or subnet (SubnetId) is available; otherwise, an error will be reported.

Common reasons why an availability zone or subnet is unavailable include stock-out of CVM instances or CBS cloud disks in the availability zone, insufficient quota in the availability zone, or insufficient IPs in the subnet.
If an availability zone or subnet in Zones/SubnetIds does not exist, a verification error will be reported regardless of the value of ZonesCheckPolicy.
 * @method void setZonesCheckPolicy(string $ZonesCheckPolicy) 设置Availability zone verification policy. Value range: ALL, ANY. Default value: ANY. This will work when the resource-related fields (launch configuration, availability zone, or subnet) of the auto scaling group are actually modified.
<br><li> ALL: The verification will succeed only if all availability zones (Zone) or subnets (SubnetId) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any availability zone (Zone) or subnet (SubnetId) is available; otherwise, an error will be reported.

Common reasons why an availability zone or subnet is unavailable include stock-out of CVM instances or CBS cloud disks in the availability zone, insufficient quota in the availability zone, or insufficient IPs in the subnet.
If an availability zone or subnet in Zones/SubnetIds does not exist, a verification error will be reported regardless of the value of ZonesCheckPolicy.
 * @method ServiceSettings getServiceSettings() 获取Service settings such as unhealthy instance replacement.
 * @method void setServiceSettings(ServiceSettings $ServiceSettings) 设置Service settings such as unhealthy instance replacement.
 * @method integer getIpv6AddressCount() 获取
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) 设置
 */

/**
 *ModifyAutoScalingGroup request structure.
 */
class ModifyAutoScalingGroupRequest extends AbstractModel
{
    /**
     * @var string Auto scaling group ID
     */
    public $AutoScalingGroupId;

    /**
     * @var string Auto scaling group name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 55 bytes and must be unique under your account.
     */
    public $AutoScalingGroupName;

    /**
     * @var integer Default cooldown period in seconds. Default value: 300
     */
    public $DefaultCooldown;

    /**
     * @var integer Desired number of instances. The number should be no larger than the maximum and no smaller than minimum number of instances
     */
    public $DesiredCapacity;

    /**
     * @var string Launch configuration ID
     */
    public $LaunchConfigurationId;

    /**
     * @var integer Maximum number of instances. Value range: 0-2,000.
     */
    public $MaxSize;

    /**
     * @var integer Minimum number of instances. Value range: 0-2,000.
     */
    public $MinSize;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var array List of subnet IDs
     */
    public $SubnetIds;

    /**
     * @var array Termination policy. Currently, the maximum length is 1. Value range: OLDEST_INSTANCE, NEWEST_INSTANCE.
<br><li> OLDEST_INSTANCE: The oldest instance in the auto scaling group will be terminated first.
<br><li> NEWEST_INSTANCE: The newest instance in the auto scaling group will be terminated first.
     */
    public $TerminationPolicies;

    /**
     * @var string VPC ID. This field is left empty for basic networks. You need to specify SubnetIds when modifying the network of the auto scaling group to a VPC with a specified VPC ID. Specify Zones when modifying the network to a basic network.
     */
    public $VpcId;

    /**
     * @var array List of availability zones
     */
    public $Zones;

    /**
     * @var string Retry policy. Value range: IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY. Default value: IMMEDIATE_RETRY.
<br><li> IMMEDIATE_RETRY: Retrying immediately in a short period of time and stopping after a number of consecutive failures (5).
<br><li> INCREMENTAL_INTERVALS: Retrying at incremental intervals, i.e., as the number of consecutive failures increases, the retry interval gradually increases, ranging from one second to one day.
<br><li> NO_RETRY: No retry until a user call or alarm message is received again.
     */
    public $RetryPolicy;

    /**
     * @var string Availability zone verification policy. Value range: ALL, ANY. Default value: ANY. This will work when the resource-related fields (launch configuration, availability zone, or subnet) of the auto scaling group are actually modified.
<br><li> ALL: The verification will succeed only if all availability zones (Zone) or subnets (SubnetId) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any availability zone (Zone) or subnet (SubnetId) is available; otherwise, an error will be reported.

Common reasons why an availability zone or subnet is unavailable include stock-out of CVM instances or CBS cloud disks in the availability zone, insufficient quota in the availability zone, or insufficient IPs in the subnet.
If an availability zone or subnet in Zones/SubnetIds does not exist, a verification error will be reported regardless of the value of ZonesCheckPolicy.
     */
    public $ZonesCheckPolicy;

    /**
     * @var ServiceSettings Service settings such as unhealthy instance replacement.
     */
    public $ServiceSettings;

    /**
     * @var integer 
     */
    public $Ipv6AddressCount;
    /**
     * @param string $AutoScalingGroupId Auto scaling group ID
     * @param string $AutoScalingGroupName Auto scaling group name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 55 bytes and must be unique under your account.
     * @param integer $DefaultCooldown Default cooldown period in seconds. Default value: 300
     * @param integer $DesiredCapacity Desired number of instances. The number should be no larger than the maximum and no smaller than minimum number of instances
     * @param string $LaunchConfigurationId Launch configuration ID
     * @param integer $MaxSize Maximum number of instances. Value range: 0-2,000.
     * @param integer $MinSize Minimum number of instances. Value range: 0-2,000.
     * @param integer $ProjectId Project ID
     * @param array $SubnetIds List of subnet IDs
     * @param array $TerminationPolicies Termination policy. Currently, the maximum length is 1. Value range: OLDEST_INSTANCE, NEWEST_INSTANCE.
<br><li> OLDEST_INSTANCE: The oldest instance in the auto scaling group will be terminated first.
<br><li> NEWEST_INSTANCE: The newest instance in the auto scaling group will be terminated first.
     * @param string $VpcId VPC ID. This field is left empty for basic networks. You need to specify SubnetIds when modifying the network of the auto scaling group to a VPC with a specified VPC ID. Specify Zones when modifying the network to a basic network.
     * @param array $Zones List of availability zones
     * @param string $RetryPolicy Retry policy. Value range: IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY. Default value: IMMEDIATE_RETRY.
<br><li> IMMEDIATE_RETRY: Retrying immediately in a short period of time and stopping after a number of consecutive failures (5).
<br><li> INCREMENTAL_INTERVALS: Retrying at incremental intervals, i.e., as the number of consecutive failures increases, the retry interval gradually increases, ranging from one second to one day.
<br><li> NO_RETRY: No retry until a user call or alarm message is received again.
     * @param string $ZonesCheckPolicy Availability zone verification policy. Value range: ALL, ANY. Default value: ANY. This will work when the resource-related fields (launch configuration, availability zone, or subnet) of the auto scaling group are actually modified.
<br><li> ALL: The verification will succeed only if all availability zones (Zone) or subnets (SubnetId) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any availability zone (Zone) or subnet (SubnetId) is available; otherwise, an error will be reported.

Common reasons why an availability zone or subnet is unavailable include stock-out of CVM instances or CBS cloud disks in the availability zone, insufficient quota in the availability zone, or insufficient IPs in the subnet.
If an availability zone or subnet in Zones/SubnetIds does not exist, a verification error will be reported regardless of the value of ZonesCheckPolicy.
     * @param ServiceSettings $ServiceSettings Service settings such as unhealthy instance replacement.
     * @param integer $Ipv6AddressCount 
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("AutoScalingGroupName",$param) and $param["AutoScalingGroupName"] !== null) {
            $this->AutoScalingGroupName = $param["AutoScalingGroupName"];
        }

        if (array_key_exists("DefaultCooldown",$param) and $param["DefaultCooldown"] !== null) {
            $this->DefaultCooldown = $param["DefaultCooldown"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("TerminationPolicies",$param) and $param["TerminationPolicies"] !== null) {
            $this->TerminationPolicies = $param["TerminationPolicies"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("RetryPolicy",$param) and $param["RetryPolicy"] !== null) {
            $this->RetryPolicy = $param["RetryPolicy"];
        }

        if (array_key_exists("ZonesCheckPolicy",$param) and $param["ZonesCheckPolicy"] !== null) {
            $this->ZonesCheckPolicy = $param["ZonesCheckPolicy"];
        }

        if (array_key_exists("ServiceSettings",$param) and $param["ServiceSettings"] !== null) {
            $this->ServiceSettings = new ServiceSettings();
            $this->ServiceSettings->deserialize($param["ServiceSettings"]);
        }

        if (array_key_exists("Ipv6AddressCount",$param) and $param["Ipv6AddressCount"] !== null) {
            $this->Ipv6AddressCount = $param["Ipv6AddressCount"];
        }
    }
}
