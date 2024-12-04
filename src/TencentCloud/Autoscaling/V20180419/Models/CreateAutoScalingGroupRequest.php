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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAutoScalingGroup request structure.
 *
 * @method string getAutoScalingGroupName() Obtain Auto scaling group name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 55 bytes and must be unique under your account.
 * @method void setAutoScalingGroupName(string $AutoScalingGroupName) Set Auto scaling group name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 55 bytes and must be unique under your account.
 * @method string getLaunchConfigurationId() Obtain Launch configuration ID
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) Set Launch configuration ID
 * @method integer getMaxSize() Obtain Maximum number of instances. Value range: 0-2,000.
 * @method void setMaxSize(integer $MaxSize) Set Maximum number of instances. Value range: 0-2,000.
 * @method integer getMinSize() Obtain Minimum number of instances. Value range: 0-2,000.
 * @method void setMinSize(integer $MinSize) Set Minimum number of instances. Value range: 0-2,000.
 * @method string getVpcId() Obtain VPC ID; if on a basic network, enter an empty string
 * @method void setVpcId(string $VpcId) Set VPC ID; if on a basic network, enter an empty string
 * @method integer getDefaultCooldown() Obtain Default cooldown period in seconds. Default value: 300
 * @method void setDefaultCooldown(integer $DefaultCooldown) Set Default cooldown period in seconds. Default value: 300
 * @method integer getDesiredCapacity() Obtain Desired number of instances. The number should be no larger than the maximum and no smaller than minimum number of instances
 * @method void setDesiredCapacity(integer $DesiredCapacity) Set Desired number of instances. The number should be no larger than the maximum and no smaller than minimum number of instances
 * @method array getLoadBalancerIds() Obtain List of classic CLB IDs. Currently, the maximum length is 20. You cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set List of classic CLB IDs. Currently, the maximum length is 20. You cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time.
 * @method integer getProjectId() Obtain Project ID of an instance in a scaling group. The default project is used if it’s left blank.
 * @method void setProjectId(integer $ProjectId) Set Project ID of an instance in a scaling group. The default project is used if it’s left blank.
 * @method array getForwardLoadBalancers() Obtain List of application CLBs. Up to 100 CLBs are allowed. `LoadBalancerIds` and `ForwardLoadBalancers` cannot be specified at the same time.
 * @method void setForwardLoadBalancers(array $ForwardLoadBalancers) Set List of application CLBs. Up to 100 CLBs are allowed. `LoadBalancerIds` and `ForwardLoadBalancers` cannot be specified at the same time.
 * @method array getSubnetIds() Obtain List of subnet IDs. A subnet must be specified in the VPC scenario. If multiple subnets are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
 * @method void setSubnetIds(array $SubnetIds) Set List of subnet IDs. A subnet must be specified in the VPC scenario. If multiple subnets are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
 * @method array getTerminationPolicies() Obtain Termination policy, whose maximum length is currently 1. Valid values: OLDEST_INSTANCE and NEWEST_INSTANCE. Default value: OLDEST_INSTANCE.
<li>OLDEST_INSTANCE: Terminate the oldest instance in the scaling group first.</li>
<li>NEWEST_INSTANCE: Terminate the newest instance in the scaling group first.</li>
 * @method void setTerminationPolicies(array $TerminationPolicies) Set Termination policy, whose maximum length is currently 1. Valid values: OLDEST_INSTANCE and NEWEST_INSTANCE. Default value: OLDEST_INSTANCE.
<li>OLDEST_INSTANCE: Terminate the oldest instance in the scaling group first.</li>
<li>NEWEST_INSTANCE: Terminate the newest instance in the scaling group first.</li>
 * @method array getZones() Obtain List of availability zones. An availability zone must be specified in the basic network scenario. If multiple availability zones are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
 * @method void setZones(array $Zones) Set List of availability zones. An availability zone must be specified in the basic network scenario. If multiple availability zones are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
 * @method string getRetryPolicy() Obtain Retry policy. Valid values: IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY. Default value: IMMEDIATE_RETRY. A partially successful scaling activity is considered a failed activity.
<li>IMMEDIATE_RETRY: Immediately retry or quickly retry in a short period. There will be no retry anymore after a certain number of consecutive failures (5).</li>
<li>INCREMENTAL_INTERVALS: Retry at an incremental interval. As the number of continuous failures increase, the retry interval gradually increases. The interval for the first 10 retries is the same as the immediate retry mode, and that for the subsequent retries gradually increases to 10 minutes, 30 minutes, 60 minutes, or 1 day.</li>
<li>NO_RETRY: There will be no retry until another user call or alarm information is received.</li>  
 * @method void setRetryPolicy(string $RetryPolicy) Set Retry policy. Valid values: IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY. Default value: IMMEDIATE_RETRY. A partially successful scaling activity is considered a failed activity.
<li>IMMEDIATE_RETRY: Immediately retry or quickly retry in a short period. There will be no retry anymore after a certain number of consecutive failures (5).</li>
<li>INCREMENTAL_INTERVALS: Retry at an incremental interval. As the number of continuous failures increase, the retry interval gradually increases. The interval for the first 10 retries is the same as the immediate retry mode, and that for the subsequent retries gradually increases to 10 minutes, 30 minutes, 60 minutes, or 1 day.</li>
<li>NO_RETRY: There will be no retry until another user call or alarm information is received.</li>  
 * @method string getZonesCheckPolicy() Obtain AZ verification policy. Valid values: ALL and ANY. Default value: ANY.
<li>ALL: Verification passes if all AZs or subnets are available; otherwise, a verification error will be reported.<li>
<li>ANY: Verification passes if any AZ or subnet is available; otherwise, a verification error will be reported.</li>

Common reasons for unavailable AZs or subnets include the CVM InstanceType in the AZ being sold out, the CBS cloud disk in the AZ being sold out, insufficient quota in the AZ, and insufficient IP addresses in the subnet.
If there is no AZ or subnet in Zones/SubnetIds, a verification error will be reported regardless of the values of ZonesCheckPolicy.
 * @method void setZonesCheckPolicy(string $ZonesCheckPolicy) Set AZ verification policy. Valid values: ALL and ANY. Default value: ANY.
<li>ALL: Verification passes if all AZs or subnets are available; otherwise, a verification error will be reported.<li>
<li>ANY: Verification passes if any AZ or subnet is available; otherwise, a verification error will be reported.</li>

Common reasons for unavailable AZs or subnets include the CVM InstanceType in the AZ being sold out, the CBS cloud disk in the AZ being sold out, insufficient quota in the AZ, and insufficient IP addresses in the subnet.
If there is no AZ or subnet in Zones/SubnetIds, a verification error will be reported regardless of the values of ZonesCheckPolicy.
 * @method array getTags() Obtain List of tag descriptions. In this parameter, you can specify the tags to be bound with a scaling group as well as corresponding resource instances. Each scaling group can have up to 30 tags.
 * @method void setTags(array $Tags) Set List of tag descriptions. In this parameter, you can specify the tags to be bound with a scaling group as well as corresponding resource instances. Each scaling group can have up to 30 tags.
 * @method ServiceSettings getServiceSettings() Obtain Service settings such as unhealthy instance replacement.
 * @method void setServiceSettings(ServiceSettings $ServiceSettings) Set Service settings such as unhealthy instance replacement.
 * @method integer getIpv6AddressCount() Obtain The number of IPv6 addresses that an instance has. Valid values: 0 and 1. Default value: 0.
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) Set The number of IPv6 addresses that an instance has. Valid values: 0 and 1. Default value: 0.
 * @method string getMultiZoneSubnetPolicy() Obtain Multi-AZ/multi-subnet policy, whose valid values include PRIORITY and EQUALITY, with the default value being PRIORITY.
<li>PRIORITY: The instances are attempted to be created taking the order of the AZ/subnet list as the priority. If instances can be successfully created in the highest-priority AZ/subnet, they will always be created in that AZ/subnet.</li>
<li>EQUALITY: The instances added through scale-out will be distributed across multiple AZs/subnets to ensure a relatively balanced number of instances in each AZ/subnet after scaling out.</li>

Points to consider regarding this policy:
<li>When the scaling group is based on a classic network, this policy applies to the multi-AZ; when the scaling group is based on a VPC network, this policy applies to the multi-subnet, in this case, the AZs are no longer considered. For example, if there are four subnets labeled A, B, C, and D, where A, B, and C are in AZ 1 and D is in AZ 2, the subnets A, B, C, and D are considered for sorting without regard to AZs 1 and 2.</li>
<li>This policy applies to the multi-AZ/multi-subnet and not to the InstanceTypes parameter of the launch configuration, which is selected according to the priority policy.</li>
<li>When instances are created according to the PRIORITY policy, ensure the policy for multiple models first, followed by the policy for the multi-AZ/subnet. For example, with models A and B and subnets 1, 2, and 3, attempts will be made in the order of A1, A2, A3, B1, B2, and B3. If A1 is sold out, A2 will be attempted (instead of B1).</li>
 * @method void setMultiZoneSubnetPolicy(string $MultiZoneSubnetPolicy) Set Multi-AZ/multi-subnet policy, whose valid values include PRIORITY and EQUALITY, with the default value being PRIORITY.
<li>PRIORITY: The instances are attempted to be created taking the order of the AZ/subnet list as the priority. If instances can be successfully created in the highest-priority AZ/subnet, they will always be created in that AZ/subnet.</li>
<li>EQUALITY: The instances added through scale-out will be distributed across multiple AZs/subnets to ensure a relatively balanced number of instances in each AZ/subnet after scaling out.</li>

Points to consider regarding this policy:
<li>When the scaling group is based on a classic network, this policy applies to the multi-AZ; when the scaling group is based on a VPC network, this policy applies to the multi-subnet, in this case, the AZs are no longer considered. For example, if there are four subnets labeled A, B, C, and D, where A, B, and C are in AZ 1 and D is in AZ 2, the subnets A, B, C, and D are considered for sorting without regard to AZs 1 and 2.</li>
<li>This policy applies to the multi-AZ/multi-subnet and not to the InstanceTypes parameter of the launch configuration, which is selected according to the priority policy.</li>
<li>When instances are created according to the PRIORITY policy, ensure the policy for multiple models first, followed by the policy for the multi-AZ/subnet. For example, with models A and B and subnets 1, 2, and 3, attempts will be made in the order of A1, A2, A3, B1, B2, and B3. If A1 is sold out, A2 will be attempted (instead of B1).</li>
 * @method string getHealthCheckType() Obtain Health check type for scaling group instances. Valid values:
<li>CVM: Determine whether an instance is unhealthy based on its network status. An unhealthy network status is indicated by an event where instances become unreachable via PING. For detailed criteria of judgment, see [Instance Health Check](https://www.tencentcloud.com/document/product/377/8553?lang=en&pg=).</li>
<li>CLB: Determine whether an instance is unhealthy based on the health check status of CLB. For principles behind CLB health checks, see [Health Check Overview](https://www.tencentcloud.com/document/product/214/6097?from_search=1&lang=en&pg=).</li>
If CLB is selected, the scaling group will check both the instance's network status and the CLB's health check status. If the instance's network status is unhealthy, the instance will be marked as UNHEALTHY. If the CLB's health check status is abnormal, the instance will be marked as CLB_UNHEALTHY. If both of them are abnormal, the instance will be marked as UNHEALTHY|CLB_UNHEALTHY. Default value: CLB.
 * @method void setHealthCheckType(string $HealthCheckType) Set Health check type for scaling group instances. Valid values:
<li>CVM: Determine whether an instance is unhealthy based on its network status. An unhealthy network status is indicated by an event where instances become unreachable via PING. For detailed criteria of judgment, see [Instance Health Check](https://www.tencentcloud.com/document/product/377/8553?lang=en&pg=).</li>
<li>CLB: Determine whether an instance is unhealthy based on the health check status of CLB. For principles behind CLB health checks, see [Health Check Overview](https://www.tencentcloud.com/document/product/214/6097?from_search=1&lang=en&pg=).</li>
If CLB is selected, the scaling group will check both the instance's network status and the CLB's health check status. If the instance's network status is unhealthy, the instance will be marked as UNHEALTHY. If the CLB's health check status is abnormal, the instance will be marked as CLB_UNHEALTHY. If both of them are abnormal, the instance will be marked as UNHEALTHY|CLB_UNHEALTHY. Default value: CLB.
 * @method integer getLoadBalancerHealthCheckGracePeriod() Obtain Grace period of the CLB health check during which the `IN_SERVICE` instances added will not be marked as `CLB_UNHEALTHY`.<br>Valid range: 0-7200, in seconds. Default value: `0`.
 * @method void setLoadBalancerHealthCheckGracePeriod(integer $LoadBalancerHealthCheckGracePeriod) Set Grace period of the CLB health check during which the `IN_SERVICE` instances added will not be marked as `CLB_UNHEALTHY`.<br>Valid range: 0-7200, in seconds. Default value: `0`.
 * @method string getInstanceAllocationPolicy() Obtain Instance assignment policy. Valid values: LAUNCH_CONFIGURATION and SPOT_MIXED. Default value: LAUNCH_CONFIGURATION.
<li>LAUNCH_CONFIGURATION: Represent the traditional mode of assigning instances according to the launch configuration.</li>
<li>SPOT_MIXED: Represent the spot mixed mode. Currently, this mode is supported only when the launch configuration is set to the pay-as-you-go billing mode. In the mixed mode, the scaling group will scale out pay-as-you-go models or spot models based on the predefined settings. When the mixed mode is used, the billing type of the associated launch configuration cannot be modified.</li>
 * @method void setInstanceAllocationPolicy(string $InstanceAllocationPolicy) Set Instance assignment policy. Valid values: LAUNCH_CONFIGURATION and SPOT_MIXED. Default value: LAUNCH_CONFIGURATION.
<li>LAUNCH_CONFIGURATION: Represent the traditional mode of assigning instances according to the launch configuration.</li>
<li>SPOT_MIXED: Represent the spot mixed mode. Currently, this mode is supported only when the launch configuration is set to the pay-as-you-go billing mode. In the mixed mode, the scaling group will scale out pay-as-you-go models or spot models based on the predefined settings. When the mixed mode is used, the billing type of the associated launch configuration cannot be modified.</li>
 * @method SpotMixedAllocationPolicy getSpotMixedAllocationPolicy() Obtain Specifies how to assign pay-as-you-go instances and spot instances.
This parameter is valid only when `InstanceAllocationPolicy ` is set to `SPOT_MIXED`.
 * @method void setSpotMixedAllocationPolicy(SpotMixedAllocationPolicy $SpotMixedAllocationPolicy) Set Specifies how to assign pay-as-you-go instances and spot instances.
This parameter is valid only when `InstanceAllocationPolicy ` is set to `SPOT_MIXED`.
 * @method boolean getCapacityRebalance() Obtain Capacity rebalancing feature, which is applicable only to spot instances within the scaling group. Valid values:
<li>TRUE: Enable this feature. When spot instances in the scaling group are about to be automatically recycled by the spot instance service, AS proactively initiates the termination process of the spot instances. If there is a configured scale-in hook, it will be triggered before termination. After the termination process starts, AS asynchronously initiates the scale-out to reach the expected number of instances.</li>
<li>FALSE: Disable this feature. AS waits for the spot instance to be terminated before scaling out to reach the number of instances expected by the scaling group.</li>

Default value: FALSE.
 * @method void setCapacityRebalance(boolean $CapacityRebalance) Set Capacity rebalancing feature, which is applicable only to spot instances within the scaling group. Valid values:
<li>TRUE: Enable this feature. When spot instances in the scaling group are about to be automatically recycled by the spot instance service, AS proactively initiates the termination process of the spot instances. If there is a configured scale-in hook, it will be triggered before termination. After the termination process starts, AS asynchronously initiates the scale-out to reach the expected number of instances.</li>
<li>FALSE: Disable this feature. AS waits for the spot instance to be terminated before scaling out to reach the number of instances expected by the scaling group.</li>

Default value: FALSE.
 * @method InstanceNameIndexSettings getInstanceNameIndexSettings() Obtain Instance name sequencing settings. If this parameter is not specified, the default is not enabled. When enabled, an incremental numeric sequence will be appended to the names of instances automatically created within the scaling group.
 * @method void setInstanceNameIndexSettings(InstanceNameIndexSettings $InstanceNameIndexSettings) Set Instance name sequencing settings. If this parameter is not specified, the default is not enabled. When enabled, an incremental numeric sequence will be appended to the names of instances automatically created within the scaling group.
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
     * @var integer Project ID of an instance in a scaling group. The default project is used if it’s left blank.
     */
    public $ProjectId;

    /**
     * @var array List of application CLBs. Up to 100 CLBs are allowed. `LoadBalancerIds` and `ForwardLoadBalancers` cannot be specified at the same time.
     */
    public $ForwardLoadBalancers;

    /**
     * @var array List of subnet IDs. A subnet must be specified in the VPC scenario. If multiple subnets are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
     */
    public $SubnetIds;

    /**
     * @var array Termination policy, whose maximum length is currently 1. Valid values: OLDEST_INSTANCE and NEWEST_INSTANCE. Default value: OLDEST_INSTANCE.
<li>OLDEST_INSTANCE: Terminate the oldest instance in the scaling group first.</li>
<li>NEWEST_INSTANCE: Terminate the newest instance in the scaling group first.</li>
     */
    public $TerminationPolicies;

    /**
     * @var array List of availability zones. An availability zone must be specified in the basic network scenario. If multiple availability zones are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
     */
    public $Zones;

    /**
     * @var string Retry policy. Valid values: IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY. Default value: IMMEDIATE_RETRY. A partially successful scaling activity is considered a failed activity.
<li>IMMEDIATE_RETRY: Immediately retry or quickly retry in a short period. There will be no retry anymore after a certain number of consecutive failures (5).</li>
<li>INCREMENTAL_INTERVALS: Retry at an incremental interval. As the number of continuous failures increase, the retry interval gradually increases. The interval for the first 10 retries is the same as the immediate retry mode, and that for the subsequent retries gradually increases to 10 minutes, 30 minutes, 60 minutes, or 1 day.</li>
<li>NO_RETRY: There will be no retry until another user call or alarm information is received.</li>  
     */
    public $RetryPolicy;

    /**
     * @var string AZ verification policy. Valid values: ALL and ANY. Default value: ANY.
<li>ALL: Verification passes if all AZs or subnets are available; otherwise, a verification error will be reported.<li>
<li>ANY: Verification passes if any AZ or subnet is available; otherwise, a verification error will be reported.</li>

Common reasons for unavailable AZs or subnets include the CVM InstanceType in the AZ being sold out, the CBS cloud disk in the AZ being sold out, insufficient quota in the AZ, and insufficient IP addresses in the subnet.
If there is no AZ or subnet in Zones/SubnetIds, a verification error will be reported regardless of the values of ZonesCheckPolicy.
     */
    public $ZonesCheckPolicy;

    /**
     * @var array List of tag descriptions. In this parameter, you can specify the tags to be bound with a scaling group as well as corresponding resource instances. Each scaling group can have up to 30 tags.
     */
    public $Tags;

    /**
     * @var ServiceSettings Service settings such as unhealthy instance replacement.
     */
    public $ServiceSettings;

    /**
     * @var integer The number of IPv6 addresses that an instance has. Valid values: 0 and 1. Default value: 0.
     */
    public $Ipv6AddressCount;

    /**
     * @var string Multi-AZ/multi-subnet policy, whose valid values include PRIORITY and EQUALITY, with the default value being PRIORITY.
<li>PRIORITY: The instances are attempted to be created taking the order of the AZ/subnet list as the priority. If instances can be successfully created in the highest-priority AZ/subnet, they will always be created in that AZ/subnet.</li>
<li>EQUALITY: The instances added through scale-out will be distributed across multiple AZs/subnets to ensure a relatively balanced number of instances in each AZ/subnet after scaling out.</li>

Points to consider regarding this policy:
<li>When the scaling group is based on a classic network, this policy applies to the multi-AZ; when the scaling group is based on a VPC network, this policy applies to the multi-subnet, in this case, the AZs are no longer considered. For example, if there are four subnets labeled A, B, C, and D, where A, B, and C are in AZ 1 and D is in AZ 2, the subnets A, B, C, and D are considered for sorting without regard to AZs 1 and 2.</li>
<li>This policy applies to the multi-AZ/multi-subnet and not to the InstanceTypes parameter of the launch configuration, which is selected according to the priority policy.</li>
<li>When instances are created according to the PRIORITY policy, ensure the policy for multiple models first, followed by the policy for the multi-AZ/subnet. For example, with models A and B and subnets 1, 2, and 3, attempts will be made in the order of A1, A2, A3, B1, B2, and B3. If A1 is sold out, A2 will be attempted (instead of B1).</li>
     */
    public $MultiZoneSubnetPolicy;

    /**
     * @var string Health check type for scaling group instances. Valid values:
<li>CVM: Determine whether an instance is unhealthy based on its network status. An unhealthy network status is indicated by an event where instances become unreachable via PING. For detailed criteria of judgment, see [Instance Health Check](https://www.tencentcloud.com/document/product/377/8553?lang=en&pg=).</li>
<li>CLB: Determine whether an instance is unhealthy based on the health check status of CLB. For principles behind CLB health checks, see [Health Check Overview](https://www.tencentcloud.com/document/product/214/6097?from_search=1&lang=en&pg=).</li>
If CLB is selected, the scaling group will check both the instance's network status and the CLB's health check status. If the instance's network status is unhealthy, the instance will be marked as UNHEALTHY. If the CLB's health check status is abnormal, the instance will be marked as CLB_UNHEALTHY. If both of them are abnormal, the instance will be marked as UNHEALTHY|CLB_UNHEALTHY. Default value: CLB.
     */
    public $HealthCheckType;

    /**
     * @var integer Grace period of the CLB health check during which the `IN_SERVICE` instances added will not be marked as `CLB_UNHEALTHY`.<br>Valid range: 0-7200, in seconds. Default value: `0`.
     */
    public $LoadBalancerHealthCheckGracePeriod;

    /**
     * @var string Instance assignment policy. Valid values: LAUNCH_CONFIGURATION and SPOT_MIXED. Default value: LAUNCH_CONFIGURATION.
<li>LAUNCH_CONFIGURATION: Represent the traditional mode of assigning instances according to the launch configuration.</li>
<li>SPOT_MIXED: Represent the spot mixed mode. Currently, this mode is supported only when the launch configuration is set to the pay-as-you-go billing mode. In the mixed mode, the scaling group will scale out pay-as-you-go models or spot models based on the predefined settings. When the mixed mode is used, the billing type of the associated launch configuration cannot be modified.</li>
     */
    public $InstanceAllocationPolicy;

    /**
     * @var SpotMixedAllocationPolicy Specifies how to assign pay-as-you-go instances and spot instances.
This parameter is valid only when `InstanceAllocationPolicy ` is set to `SPOT_MIXED`.
     */
    public $SpotMixedAllocationPolicy;

    /**
     * @var boolean Capacity rebalancing feature, which is applicable only to spot instances within the scaling group. Valid values:
<li>TRUE: Enable this feature. When spot instances in the scaling group are about to be automatically recycled by the spot instance service, AS proactively initiates the termination process of the spot instances. If there is a configured scale-in hook, it will be triggered before termination. After the termination process starts, AS asynchronously initiates the scale-out to reach the expected number of instances.</li>
<li>FALSE: Disable this feature. AS waits for the spot instance to be terminated before scaling out to reach the number of instances expected by the scaling group.</li>

Default value: FALSE.
     */
    public $CapacityRebalance;

    /**
     * @var InstanceNameIndexSettings Instance name sequencing settings. If this parameter is not specified, the default is not enabled. When enabled, an incremental numeric sequence will be appended to the names of instances automatically created within the scaling group.
     */
    public $InstanceNameIndexSettings;

    /**
     * @param string $AutoScalingGroupName Auto scaling group name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 55 bytes and must be unique under your account.
     * @param string $LaunchConfigurationId Launch configuration ID
     * @param integer $MaxSize Maximum number of instances. Value range: 0-2,000.
     * @param integer $MinSize Minimum number of instances. Value range: 0-2,000.
     * @param string $VpcId VPC ID; if on a basic network, enter an empty string
     * @param integer $DefaultCooldown Default cooldown period in seconds. Default value: 300
     * @param integer $DesiredCapacity Desired number of instances. The number should be no larger than the maximum and no smaller than minimum number of instances
     * @param array $LoadBalancerIds List of classic CLB IDs. Currently, the maximum length is 20. You cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time.
     * @param integer $ProjectId Project ID of an instance in a scaling group. The default project is used if it’s left blank.
     * @param array $ForwardLoadBalancers List of application CLBs. Up to 100 CLBs are allowed. `LoadBalancerIds` and `ForwardLoadBalancers` cannot be specified at the same time.
     * @param array $SubnetIds List of subnet IDs. A subnet must be specified in the VPC scenario. If multiple subnets are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
     * @param array $TerminationPolicies Termination policy, whose maximum length is currently 1. Valid values: OLDEST_INSTANCE and NEWEST_INSTANCE. Default value: OLDEST_INSTANCE.
<li>OLDEST_INSTANCE: Terminate the oldest instance in the scaling group first.</li>
<li>NEWEST_INSTANCE: Terminate the newest instance in the scaling group first.</li>
     * @param array $Zones List of availability zones. An availability zone must be specified in the basic network scenario. If multiple availability zones are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
     * @param string $RetryPolicy Retry policy. Valid values: IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY. Default value: IMMEDIATE_RETRY. A partially successful scaling activity is considered a failed activity.
<li>IMMEDIATE_RETRY: Immediately retry or quickly retry in a short period. There will be no retry anymore after a certain number of consecutive failures (5).</li>
<li>INCREMENTAL_INTERVALS: Retry at an incremental interval. As the number of continuous failures increase, the retry interval gradually increases. The interval for the first 10 retries is the same as the immediate retry mode, and that for the subsequent retries gradually increases to 10 minutes, 30 minutes, 60 minutes, or 1 day.</li>
<li>NO_RETRY: There will be no retry until another user call or alarm information is received.</li>  
     * @param string $ZonesCheckPolicy AZ verification policy. Valid values: ALL and ANY. Default value: ANY.
<li>ALL: Verification passes if all AZs or subnets are available; otherwise, a verification error will be reported.<li>
<li>ANY: Verification passes if any AZ or subnet is available; otherwise, a verification error will be reported.</li>

Common reasons for unavailable AZs or subnets include the CVM InstanceType in the AZ being sold out, the CBS cloud disk in the AZ being sold out, insufficient quota in the AZ, and insufficient IP addresses in the subnet.
If there is no AZ or subnet in Zones/SubnetIds, a verification error will be reported regardless of the values of ZonesCheckPolicy.
     * @param array $Tags List of tag descriptions. In this parameter, you can specify the tags to be bound with a scaling group as well as corresponding resource instances. Each scaling group can have up to 30 tags.
     * @param ServiceSettings $ServiceSettings Service settings such as unhealthy instance replacement.
     * @param integer $Ipv6AddressCount The number of IPv6 addresses that an instance has. Valid values: 0 and 1. Default value: 0.
     * @param string $MultiZoneSubnetPolicy Multi-AZ/multi-subnet policy, whose valid values include PRIORITY and EQUALITY, with the default value being PRIORITY.
<li>PRIORITY: The instances are attempted to be created taking the order of the AZ/subnet list as the priority. If instances can be successfully created in the highest-priority AZ/subnet, they will always be created in that AZ/subnet.</li>
<li>EQUALITY: The instances added through scale-out will be distributed across multiple AZs/subnets to ensure a relatively balanced number of instances in each AZ/subnet after scaling out.</li>

Points to consider regarding this policy:
<li>When the scaling group is based on a classic network, this policy applies to the multi-AZ; when the scaling group is based on a VPC network, this policy applies to the multi-subnet, in this case, the AZs are no longer considered. For example, if there are four subnets labeled A, B, C, and D, where A, B, and C are in AZ 1 and D is in AZ 2, the subnets A, B, C, and D are considered for sorting without regard to AZs 1 and 2.</li>
<li>This policy applies to the multi-AZ/multi-subnet and not to the InstanceTypes parameter of the launch configuration, which is selected according to the priority policy.</li>
<li>When instances are created according to the PRIORITY policy, ensure the policy for multiple models first, followed by the policy for the multi-AZ/subnet. For example, with models A and B and subnets 1, 2, and 3, attempts will be made in the order of A1, A2, A3, B1, B2, and B3. If A1 is sold out, A2 will be attempted (instead of B1).</li>
     * @param string $HealthCheckType Health check type for scaling group instances. Valid values:
<li>CVM: Determine whether an instance is unhealthy based on its network status. An unhealthy network status is indicated by an event where instances become unreachable via PING. For detailed criteria of judgment, see [Instance Health Check](https://www.tencentcloud.com/document/product/377/8553?lang=en&pg=).</li>
<li>CLB: Determine whether an instance is unhealthy based on the health check status of CLB. For principles behind CLB health checks, see [Health Check Overview](https://www.tencentcloud.com/document/product/214/6097?from_search=1&lang=en&pg=).</li>
If CLB is selected, the scaling group will check both the instance's network status and the CLB's health check status. If the instance's network status is unhealthy, the instance will be marked as UNHEALTHY. If the CLB's health check status is abnormal, the instance will be marked as CLB_UNHEALTHY. If both of them are abnormal, the instance will be marked as UNHEALTHY|CLB_UNHEALTHY. Default value: CLB.
     * @param integer $LoadBalancerHealthCheckGracePeriod Grace period of the CLB health check during which the `IN_SERVICE` instances added will not be marked as `CLB_UNHEALTHY`.<br>Valid range: 0-7200, in seconds. Default value: `0`.
     * @param string $InstanceAllocationPolicy Instance assignment policy. Valid values: LAUNCH_CONFIGURATION and SPOT_MIXED. Default value: LAUNCH_CONFIGURATION.
<li>LAUNCH_CONFIGURATION: Represent the traditional mode of assigning instances according to the launch configuration.</li>
<li>SPOT_MIXED: Represent the spot mixed mode. Currently, this mode is supported only when the launch configuration is set to the pay-as-you-go billing mode. In the mixed mode, the scaling group will scale out pay-as-you-go models or spot models based on the predefined settings. When the mixed mode is used, the billing type of the associated launch configuration cannot be modified.</li>
     * @param SpotMixedAllocationPolicy $SpotMixedAllocationPolicy Specifies how to assign pay-as-you-go instances and spot instances.
This parameter is valid only when `InstanceAllocationPolicy ` is set to `SPOT_MIXED`.
     * @param boolean $CapacityRebalance Capacity rebalancing feature, which is applicable only to spot instances within the scaling group. Valid values:
<li>TRUE: Enable this feature. When spot instances in the scaling group are about to be automatically recycled by the spot instance service, AS proactively initiates the termination process of the spot instances. If there is a configured scale-in hook, it will be triggered before termination. After the termination process starts, AS asynchronously initiates the scale-out to reach the expected number of instances.</li>
<li>FALSE: Disable this feature. AS waits for the spot instance to be terminated before scaling out to reach the number of instances expected by the scaling group.</li>

Default value: FALSE.
     * @param InstanceNameIndexSettings $InstanceNameIndexSettings Instance name sequencing settings. If this parameter is not specified, the default is not enabled. When enabled, an incremental numeric sequence will be appended to the names of instances automatically created within the scaling group.
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

        if (array_key_exists("MultiZoneSubnetPolicy",$param) and $param["MultiZoneSubnetPolicy"] !== null) {
            $this->MultiZoneSubnetPolicy = $param["MultiZoneSubnetPolicy"];
        }

        if (array_key_exists("HealthCheckType",$param) and $param["HealthCheckType"] !== null) {
            $this->HealthCheckType = $param["HealthCheckType"];
        }

        if (array_key_exists("LoadBalancerHealthCheckGracePeriod",$param) and $param["LoadBalancerHealthCheckGracePeriod"] !== null) {
            $this->LoadBalancerHealthCheckGracePeriod = $param["LoadBalancerHealthCheckGracePeriod"];
        }

        if (array_key_exists("InstanceAllocationPolicy",$param) and $param["InstanceAllocationPolicy"] !== null) {
            $this->InstanceAllocationPolicy = $param["InstanceAllocationPolicy"];
        }

        if (array_key_exists("SpotMixedAllocationPolicy",$param) and $param["SpotMixedAllocationPolicy"] !== null) {
            $this->SpotMixedAllocationPolicy = new SpotMixedAllocationPolicy();
            $this->SpotMixedAllocationPolicy->deserialize($param["SpotMixedAllocationPolicy"]);
        }

        if (array_key_exists("CapacityRebalance",$param) and $param["CapacityRebalance"] !== null) {
            $this->CapacityRebalance = $param["CapacityRebalance"];
        }

        if (array_key_exists("InstanceNameIndexSettings",$param) and $param["InstanceNameIndexSettings"] !== null) {
            $this->InstanceNameIndexSettings = new InstanceNameIndexSettings();
            $this->InstanceNameIndexSettings->deserialize($param["InstanceNameIndexSettings"]);
        }
    }
}
