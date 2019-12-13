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
 * @method string getAutoScalingGroupName() 获取Auto scaling group name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 55 bytes and must be unique under your account.
 * @method void setAutoScalingGroupName(string $AutoScalingGroupName) 设置Auto scaling group name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 55 bytes and must be unique under your account.
 * @method string getLaunchConfigurationId() 获取Launch configuration ID
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置Launch configuration ID
 * @method integer getMaxSize() 获取Maximum number of instances. Value range: 0-2,000.
 * @method void setMaxSize(integer $MaxSize) 设置Maximum number of instances. Value range: 0-2,000.
 * @method integer getMinSize() 获取Minimum number of instances. Value range: 0-2,000.
 * @method void setMinSize(integer $MinSize) 设置Minimum number of instances. Value range: 0-2,000.
 * @method string getVpcId() 获取VPC ID; if on a basic network, enter an empty string
 * @method void setVpcId(string $VpcId) 设置VPC ID; if on a basic network, enter an empty string
 * @method integer getDefaultCooldown() 获取Default cooldown period in seconds. Default value: 300
 * @method void setDefaultCooldown(integer $DefaultCooldown) 设置Default cooldown period in seconds. Default value: 300
 * @method integer getDesiredCapacity() 获取Desired number of instances. The number should be no larger than the maximum and no smaller than minimum number of instances
 * @method void setDesiredCapacity(integer $DesiredCapacity) 设置Desired number of instances. The number should be no larger than the maximum and no smaller than minimum number of instances
 * @method array getLoadBalancerIds() 获取List of classic CLB IDs. Currently, the maximum length is 20. You cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置List of classic CLB IDs. Currently, the maximum length is 20. You cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time.
 * @method integer getProjectId() 获取Project ID
 * @method void setProjectId(integer $ProjectId) 设置Project ID
 * @method array getForwardLoadBalancers() 获取List of CLBs. Currently, the maximum length is 20. You cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time.
 * @method void setForwardLoadBalancers(array $ForwardLoadBalancers) 设置List of CLBs. Currently, the maximum length is 20. You cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time.
 * @method array getSubnetIds() 获取List of subnet IDs. A subnet must be specified in the VPC scenario. If multiple subnets are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
 * @method void setSubnetIds(array $SubnetIds) 设置List of subnet IDs. A subnet must be specified in the VPC scenario. If multiple subnets are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
 * @method array getTerminationPolicies() 获取Termination policy. Currently, the maximum length is 1. Value range: OLDEST_INSTANCE, NEWEST_INSTANCE. Default value: OLDEST_INSTANCE.
<br><li> OLDEST_INSTANCE: The oldest instance in the auto scaling group will be terminated first.
<br><li> NEWEST_INSTANCE: The newest instance in the auto scaling group will be terminated first.
 * @method void setTerminationPolicies(array $TerminationPolicies) 设置Termination policy. Currently, the maximum length is 1. Value range: OLDEST_INSTANCE, NEWEST_INSTANCE. Default value: OLDEST_INSTANCE.
<br><li> OLDEST_INSTANCE: The oldest instance in the auto scaling group will be terminated first.
<br><li> NEWEST_INSTANCE: The newest instance in the auto scaling group will be terminated first.
 * @method array getZones() 获取List of availability zones. An availability zone must be specified in the basic network scenario. If multiple availability zones are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
 * @method void setZones(array $Zones) 设置List of availability zones. An availability zone must be specified in the basic network scenario. If multiple availability zones are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
 * @method string getRetryPolicy() 获取Retry policy. Value range: IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY. Default value: IMMEDIATE_RETRY.
<br><li> IMMEDIATE_RETRY: Retrying immediately in a short period of time and stopping after a number of consecutive failures (5).
<br><li> INCREMENTAL_INTERVALS: Retrying at incremental intervals, i.e., as the number of consecutive failures increases, the retry interval gradually increases, ranging from one second to one day.
<br><li> NO_RETRY: No retry until a user call or alarm message is received again.
 * @method void setRetryPolicy(string $RetryPolicy) 设置Retry policy. Value range: IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY. Default value: IMMEDIATE_RETRY.
<br><li> IMMEDIATE_RETRY: Retrying immediately in a short period of time and stopping after a number of consecutive failures (5).
<br><li> INCREMENTAL_INTERVALS: Retrying at incremental intervals, i.e., as the number of consecutive failures increases, the retry interval gradually increases, ranging from one second to one day.
<br><li> NO_RETRY: No retry until a user call or alarm message is received again.
 * @method string getZonesCheckPolicy() 获取Availability zone verification policy. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will succeed only if all availability zones (Zone) or subnets (SubnetId) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any availability zone (Zone) or subnet (SubnetId) is available; otherwise, an error will be reported.

Common reasons why an availability zone or subnet is unavailable include stock-out of CVM instances or CBS cloud disks in the availability zone, insufficient quota in the availability zone, or insufficient IPs in the subnet.
If an availability zone or subnet in Zones/SubnetIds does not exist, a verification error will be reported regardless of the value of ZonesCheckPolicy.
 * @method void setZonesCheckPolicy(string $ZonesCheckPolicy) 设置Availability zone verification policy. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will succeed only if all availability zones (Zone) or subnets (SubnetId) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any availability zone (Zone) or subnet (SubnetId) is available; otherwise, an error will be reported.

Common reasons why an availability zone or subnet is unavailable include stock-out of CVM instances or CBS cloud disks in the availability zone, insufficient quota in the availability zone, or insufficient IPs in the subnet.
If an availability zone or subnet in Zones/SubnetIds does not exist, a verification error will be reported regardless of the value of ZonesCheckPolicy.
 * @method array getTags() 获取List of tag descriptions. This parameter is used to bind a tag to an auto scaling group as well as the corresponding resource instances.
 * @method void setTags(array $Tags) 设置List of tag descriptions. This parameter is used to bind a tag to an auto scaling group as well as the corresponding resource instances.
 * @method ServiceSettings getServiceSettings() 获取Service settings such as unhealthy instance replacement.
 * @method void setServiceSettings(ServiceSettings $ServiceSettings) 设置Service settings such as unhealthy instance replacement.
 * @method integer getIpv6AddressCount() 获取
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) 设置
 */

/**
 *CreateAutoScalingGroup request structure.
 */
class CreateAutoScalingGroupRequest extends AbstractModel
{
    /**
     * @var string Auto scaling group name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 55 bytes and must be unique under your account.
     */
    public $AutoScalingGroupName;

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
     * @var string VPC ID; if on a basic network, enter an empty string
     */
    public $VpcId;

    /**
     * @var integer Default cooldown period in seconds. Default value: 300
     */
    public $DefaultCooldown;

    /**
     * @var integer Desired number of instances. The number should be no larger than the maximum and no smaller than minimum number of instances
     */
    public $DesiredCapacity;

    /**
     * @var array List of classic CLB IDs. Currently, the maximum length is 20. You cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time.
     */
    public $LoadBalancerIds;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var array List of CLBs. Currently, the maximum length is 20. You cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time.
     */
    public $ForwardLoadBalancers;

    /**
     * @var array List of subnet IDs. A subnet must be specified in the VPC scenario. If multiple subnets are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
     */
    public $SubnetIds;

    /**
     * @var array Termination policy. Currently, the maximum length is 1. Value range: OLDEST_INSTANCE, NEWEST_INSTANCE. Default value: OLDEST_INSTANCE.
<br><li> OLDEST_INSTANCE: The oldest instance in the auto scaling group will be terminated first.
<br><li> NEWEST_INSTANCE: The newest instance in the auto scaling group will be terminated first.
     */
    public $TerminationPolicies;

    /**
     * @var array List of availability zones. An availability zone must be specified in the basic network scenario. If multiple availability zones are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
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
     * @var string Availability zone verification policy. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will succeed only if all availability zones (Zone) or subnets (SubnetId) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any availability zone (Zone) or subnet (SubnetId) is available; otherwise, an error will be reported.

Common reasons why an availability zone or subnet is unavailable include stock-out of CVM instances or CBS cloud disks in the availability zone, insufficient quota in the availability zone, or insufficient IPs in the subnet.
If an availability zone or subnet in Zones/SubnetIds does not exist, a verification error will be reported regardless of the value of ZonesCheckPolicy.
     */
    public $ZonesCheckPolicy;

    /**
     * @var array List of tag descriptions. This parameter is used to bind a tag to an auto scaling group as well as the corresponding resource instances.
     */
    public $Tags;

    /**
     * @var ServiceSettings Service settings such as unhealthy instance replacement.
     */
    public $ServiceSettings;

    /**
     * @var integer 
     */
    public $Ipv6AddressCount;
    /**
     * @param string $AutoScalingGroupName Auto scaling group name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 55 bytes and must be unique under your account.
     * @param string $LaunchConfigurationId Launch configuration ID
     * @param integer $MaxSize Maximum number of instances. Value range: 0-2,000.
     * @param integer $MinSize Minimum number of instances. Value range: 0-2,000.
     * @param string $VpcId VPC ID; if on a basic network, enter an empty string
     * @param integer $DefaultCooldown Default cooldown period in seconds. Default value: 300
     * @param integer $DesiredCapacity Desired number of instances. The number should be no larger than the maximum and no smaller than minimum number of instances
     * @param array $LoadBalancerIds List of classic CLB IDs. Currently, the maximum length is 20. You cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time.
     * @param integer $ProjectId Project ID
     * @param array $ForwardLoadBalancers List of CLBs. Currently, the maximum length is 20. You cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time.
     * @param array $SubnetIds List of subnet IDs. A subnet must be specified in the VPC scenario. If multiple subnets are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
     * @param array $TerminationPolicies Termination policy. Currently, the maximum length is 1. Value range: OLDEST_INSTANCE, NEWEST_INSTANCE. Default value: OLDEST_INSTANCE.
<br><li> OLDEST_INSTANCE: The oldest instance in the auto scaling group will be terminated first.
<br><li> NEWEST_INSTANCE: The newest instance in the auto scaling group will be terminated first.
     * @param array $Zones List of availability zones. An availability zone must be specified in the basic network scenario. If multiple availability zones are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
     * @param string $RetryPolicy Retry policy. Value range: IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY. Default value: IMMEDIATE_RETRY.
<br><li> IMMEDIATE_RETRY: Retrying immediately in a short period of time and stopping after a number of consecutive failures (5).
<br><li> INCREMENTAL_INTERVALS: Retrying at incremental intervals, i.e., as the number of consecutive failures increases, the retry interval gradually increases, ranging from one second to one day.
<br><li> NO_RETRY: No retry until a user call or alarm message is received again.
     * @param string $ZonesCheckPolicy Availability zone verification policy. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will succeed only if all availability zones (Zone) or subnets (SubnetId) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any availability zone (Zone) or subnet (SubnetId) is available; otherwise, an error will be reported.

Common reasons why an availability zone or subnet is unavailable include stock-out of CVM instances or CBS cloud disks in the availability zone, insufficient quota in the availability zone, or insufficient IPs in the subnet.
If an availability zone or subnet in Zones/SubnetIds does not exist, a verification error will be reported regardless of the value of ZonesCheckPolicy.
     * @param array $Tags List of tag descriptions. This parameter is used to bind a tag to an auto scaling group as well as the corresponding resource instances.
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
        if (array_key_exists("AutoScalingGroupName",$param) and $param["AutoScalingGroupName"] !== null) {
            $this->AutoScalingGroupName = $param["AutoScalingGroupName"];
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("DefaultCooldown",$param) and $param["DefaultCooldown"] !== null) {
            $this->DefaultCooldown = $param["DefaultCooldown"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ForwardLoadBalancers",$param) and $param["ForwardLoadBalancers"] !== null) {
            $this->ForwardLoadBalancers = [];
            foreach ($param["ForwardLoadBalancers"] as $key => $value){
                $obj = new ForwardLoadBalancer();
                $obj->deserialize($value);
                array_push($this->ForwardLoadBalancers, $obj);
            }
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("TerminationPolicies",$param) and $param["TerminationPolicies"] !== null) {
            $this->TerminationPolicies = $param["TerminationPolicies"];
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
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
