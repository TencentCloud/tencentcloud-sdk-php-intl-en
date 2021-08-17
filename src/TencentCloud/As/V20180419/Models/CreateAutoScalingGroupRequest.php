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
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method array getForwardLoadBalancers() Obtain List of CLBs. Currently, the maximum length is 20. You cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time.
 * @method void setForwardLoadBalancers(array $ForwardLoadBalancers) Set List of CLBs. Currently, the maximum length is 20. You cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time.
 * @method array getSubnetIds() Obtain List of subnet IDs. A subnet must be specified in the VPC scenario. If multiple subnets are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
 * @method void setSubnetIds(array $SubnetIds) Set List of subnet IDs. A subnet must be specified in the VPC scenario. If multiple subnets are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
 * @method array getTerminationPolicies() Obtain Termination policy. Currently, the maximum length is 1. Value range: OLDEST_INSTANCE, NEWEST_INSTANCE. Default value: OLDEST_INSTANCE.
<br><li> OLDEST_INSTANCE: The oldest instance in the auto scaling group will be terminated first.
<br><li> NEWEST_INSTANCE: The newest instance in the auto scaling group will be terminated first.
 * @method void setTerminationPolicies(array $TerminationPolicies) Set Termination policy. Currently, the maximum length is 1. Value range: OLDEST_INSTANCE, NEWEST_INSTANCE. Default value: OLDEST_INSTANCE.
<br><li> OLDEST_INSTANCE: The oldest instance in the auto scaling group will be terminated first.
<br><li> NEWEST_INSTANCE: The newest instance in the auto scaling group will be terminated first.
 * @method array getZones() Obtain List of availability zones. An availability zone must be specified in the basic network scenario. If multiple availability zones are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
 * @method void setZones(array $Zones) Set List of availability zones. An availability zone must be specified in the basic network scenario. If multiple availability zones are entered, their priority will be determined by the order in which they are entered, and they will be tried one by one until instances can be successfully created.
 * @method string getRetryPolicy() Obtain Retry policy. Value range: IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY. Default value: IMMEDIATE_RETRY.
<br><li> IMMEDIATE_RETRY: Retrying immediately in a short period of time and stopping after a number of consecutive failures (5).
<br><li> INCREMENTAL_INTERVALS: Retrying at incremental intervals, i.e., as the number of consecutive failures increases, the retry interval gradually increases, ranging from one second to one day.
<br><li> NO_RETRY: No retry until a user call or alarm message is received again.
 * @method void setRetryPolicy(string $RetryPolicy) Set Retry policy. Value range: IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY. Default value: IMMEDIATE_RETRY.
<br><li> IMMEDIATE_RETRY: Retrying immediately in a short period of time and stopping after a number of consecutive failures (5).
<br><li> INCREMENTAL_INTERVALS: Retrying at incremental intervals, i.e., as the number of consecutive failures increases, the retry interval gradually increases, ranging from one second to one day.
<br><li> NO_RETRY: No retry until a user call or alarm message is received again.
 * @method string getZonesCheckPolicy() Obtain Availability zone verification policy. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will succeed only if all availability zones (Zone) or subnets (SubnetId) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any availability zone (Zone) or subnet (SubnetId) is available; otherwise, an error will be reported.

Common reasons why an availability zone or subnet is unavailable include stock-out of CVM instances or CBS cloud disks in the availability zone, insufficient quota in the availability zone, or insufficient IPs in the subnet.
If an availability zone or subnet in Zones/SubnetIds does not exist, a verification error will be reported regardless of the value of ZonesCheckPolicy.
 * @method void setZonesCheckPolicy(string $ZonesCheckPolicy) Set Availability zone verification policy. Value range: ALL, ANY. Default value: ANY.
<br><li> ALL: The verification will succeed only if all availability zones (Zone) or subnets (SubnetId) are available; otherwise, an error will be reported.
<br><li> ANY: The verification will success if any availability zone (Zone) or subnet (SubnetId) is available; otherwise, an error will be reported.

Common reasons why an availability zone or subnet is unavailable include stock-out of CVM instances or CBS cloud disks in the availability zone, insufficient quota in the availability zone, or insufficient IPs in the subnet.
If an availability zone or subnet in Zones/SubnetIds does not exist, a verification error will be reported regardless of the value of ZonesCheckPolicy.
 * @method array getTags() Obtain List of tag descriptions. In this parameter, you can specify the tags to be bound with a scaling group as well as corresponding resource instances. Each scaling group can have up to 30 tags.
 * @method void setTags(array $Tags) Set List of tag descriptions. In this parameter, you can specify the tags to be bound with a scaling group as well as corresponding resource instances. Each scaling group can have up to 30 tags.
 * @method ServiceSettings getServiceSettings() Obtain Service settings such as unhealthy instance replacement.
 * @method void setServiceSettings(ServiceSettings $ServiceSettings) Set Service settings such as unhealthy instance replacement.
 * @method integer getIpv6AddressCount() Obtain The number of IPv6 addresses that an instance has. Valid values: 0 and 1. Default value: 0.
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) Set The number of IPv6 addresses that an instance has. Valid values: 0 and 1. Default value: 0.
 * @method string getMultiZoneSubnetPolicy() Obtain Multi-availability zone/subnet policy. Valid values: PRIORITY and EQUALITY. Default value: PRIORITY.
<br><li> PRIORITY: creates instances based on the priority determined by the order in the availability zone/subnet list. If an instance can be successfully created in the availability zone/subnet of the highest priority, all instances will be created in the availability zone/subnet.
<br><li> EQUALITY: scales out the availability zone/subnet with the least instances each time. This gives each availability zone/subnet an opportunity for scale-out and disperses the instances created during multiple scale-out operations across different availability zones/subnets.

Notes about this policy:
<br><li> When the scaling group is based on basic network, this policy applies to multiple availability zones. When the scaling group is based on VPC, this policy applies to multiple subnets, and you do not need to consider availability zones. For example, if you have four subnets (A, B, C, and D) and A, B, and C are in availability zone 1 and D is in availability zone 2, you only need to decide the order of the four subnets, without worrying about the issue of availability zones.
<br><li> This policy is applicable to multiple availability zones/subnets, but is not applicable to multiple models with launch configurations. When there are multiple models, the PRIORITY policy is applied.
<br><li> During instance creation, apply the multi-model policy and then apply the multi-availability zones/subnet policy. For example, if you have models A and B and subnets 1, 2, and 3 (based on the PRIORITY policy), creation will be attempted in the following order: A1, A2, A3, B1, B2, and B3. If A1 is sold out, A2 (not B1) is tried next.
<br><li> No matter what policy is used, a single scaling event always uses a specific configuration at priority (model * availability zone/subnet).
 * @method void setMultiZoneSubnetPolicy(string $MultiZoneSubnetPolicy) Set Multi-availability zone/subnet policy. Valid values: PRIORITY and EQUALITY. Default value: PRIORITY.
<br><li> PRIORITY: creates instances based on the priority determined by the order in the availability zone/subnet list. If an instance can be successfully created in the availability zone/subnet of the highest priority, all instances will be created in the availability zone/subnet.
<br><li> EQUALITY: scales out the availability zone/subnet with the least instances each time. This gives each availability zone/subnet an opportunity for scale-out and disperses the instances created during multiple scale-out operations across different availability zones/subnets.

Notes about this policy:
<br><li> When the scaling group is based on basic network, this policy applies to multiple availability zones. When the scaling group is based on VPC, this policy applies to multiple subnets, and you do not need to consider availability zones. For example, if you have four subnets (A, B, C, and D) and A, B, and C are in availability zone 1 and D is in availability zone 2, you only need to decide the order of the four subnets, without worrying about the issue of availability zones.
<br><li> This policy is applicable to multiple availability zones/subnets, but is not applicable to multiple models with launch configurations. When there are multiple models, the PRIORITY policy is applied.
<br><li> During instance creation, apply the multi-model policy and then apply the multi-availability zones/subnet policy. For example, if you have models A and B and subnets 1, 2, and 3 (based on the PRIORITY policy), creation will be attempted in the following order: A1, A2, A3, B1, B2, and B3. If A1 is sold out, A2 (not B1) is tried next.
<br><li> No matter what policy is used, a single scaling event always uses a specific configuration at priority (model * availability zone/subnet).
 * @method string getHealthCheckType() Obtain Health check type of instances in a scaling group.<br><li>CVM: confirm whether an instance is healthy based on the network status. If the pinged instance is unreachable, the instance will be considered unhealthy. For more information, see [Instance Health Check](https://intl.cloud.tencent.com/document/product/377/8553?from_cn_redirect=1)<br><li>CLB: confirm whether an instance is healthy based on the CLB health check status. For more information, see [Health Check Overview](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1).<br>If the parameter is set to `CLB`, the scaling group will check both the network status and the CLB health check status. If the network check indicates unhealthy, the `HealthStatus` field will return `UNHEALTHY`. If the CLB health check indicates unhealthy, the `HealthStatus` field will return `CLB_UNHEALTHY`. If both checks indicate unhealthy, the `HealthStatus` field will return `UNHEALTHY|CLB_UNHEALTHY`. Default value: `CLB`.
 * @method void setHealthCheckType(string $HealthCheckType) Set Health check type of instances in a scaling group.<br><li>CVM: confirm whether an instance is healthy based on the network status. If the pinged instance is unreachable, the instance will be considered unhealthy. For more information, see [Instance Health Check](https://intl.cloud.tencent.com/document/product/377/8553?from_cn_redirect=1)<br><li>CLB: confirm whether an instance is healthy based on the CLB health check status. For more information, see [Health Check Overview](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1).<br>If the parameter is set to `CLB`, the scaling group will check both the network status and the CLB health check status. If the network check indicates unhealthy, the `HealthStatus` field will return `UNHEALTHY`. If the CLB health check indicates unhealthy, the `HealthStatus` field will return `CLB_UNHEALTHY`. If both checks indicate unhealthy, the `HealthStatus` field will return `UNHEALTHY|CLB_UNHEALTHY`. Default value: `CLB`.
 * @method integer getLoadBalancerHealthCheckGracePeriod() Obtain Grace period of the CLB health check during which the `IN_SERVICE` instances added will not be marked as `CLB_UNHEALTHY`.<br>Valid range: 0-7200, in seconds. Default value: `0`.
 * @method void setLoadBalancerHealthCheckGracePeriod(integer $LoadBalancerHealthCheckGracePeriod) Set Grace period of the CLB health check during which the `IN_SERVICE` instances added will not be marked as `CLB_UNHEALTHY`.<br>Valid range: 0-7200, in seconds. Default value: `0`.
 * @method string getInstanceAllocationPolicy() Obtain Specifies how to assign instances. Valid values: `LAUNCH_CONFIGURATION` and `SPOT_MIXED`; default value: `LAUNCH_CONFIGURATION`.
<br><li>`LAUNCH_CONFIGURATION`: the launch configuration mode.
<br><li>`SPOT_MIXED`: a mixed instance mode. Currently, this mode is supported only when the launch configuration takes the pay-as-you-go billing mode. With this mode, the scaling group can provision a combination of pay-as-you-go instances and spot instances to meet the configured capacity. Note that the billing mode of the associated launch configuration cannot be modified when this mode is used.
 * @method void setInstanceAllocationPolicy(string $InstanceAllocationPolicy) Set Specifies how to assign instances. Valid values: `LAUNCH_CONFIGURATION` and `SPOT_MIXED`; default value: `LAUNCH_CONFIGURATION`.
<br><li>`LAUNCH_CONFIGURATION`: the launch configuration mode.
<br><li>`SPOT_MIXED`: a mixed instance mode. Currently, this mode is supported only when the launch configuration takes the pay-as-you-go billing mode. With this mode, the scaling group can provision a combination of pay-as-you-go instances and spot instances to meet the configured capacity. Note that the billing mode of the associated launch configuration cannot be modified when this mode is used.
 * @method SpotMixedAllocationPolicy getSpotMixedAllocationPolicy() Obtain Specifies how to assign pay-as-you-go instances and spot instances.
This parameter is valid only when `InstanceAllocationPolicy ` is set to `SPOT_MIXED`.
 * @method void setSpotMixedAllocationPolicy(SpotMixedAllocationPolicy $SpotMixedAllocationPolicy) Set Specifies how to assign pay-as-you-go instances and spot instances.
This parameter is valid only when `InstanceAllocationPolicy ` is set to `SPOT_MIXED`.
 * @method boolean getCapacityRebalance() Obtain Indicates whether the capacity rebalancing feature is enabled. This parameter is only valid for spot instances in the scaling group. Valid values:
<br><li>`TRUE`: yes. Before the spot instances in the scaling group are about to be automatically repossessed, AS will terminate them. The scale-in hook (if configured) will take effect before the termination. After the termination process starts, AS will asynchronously initiate a scaling activity to meet the desired capacity.
<br><li>`FALSE`: no. AS will add instances to meet the desired capacity only after the spot instances are terminated.

Default value: `False`.
 * @method void setCapacityRebalance(boolean $CapacityRebalance) Set Indicates whether the capacity rebalancing feature is enabled. This parameter is only valid for spot instances in the scaling group. Valid values:
<br><li>`TRUE`: yes. Before the spot instances in the scaling group are about to be automatically repossessed, AS will terminate them. The scale-in hook (if configured) will take effect before the termination. After the termination process starts, AS will asynchronously initiate a scaling activity to meet the desired capacity.
<br><li>`FALSE`: no. AS will add instances to meet the desired capacity only after the spot instances are terminated.

Default value: `False`.
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
     * @var string Multi-availability zone/subnet policy. Valid values: PRIORITY and EQUALITY. Default value: PRIORITY.
<br><li> PRIORITY: creates instances based on the priority determined by the order in the availability zone/subnet list. If an instance can be successfully created in the availability zone/subnet of the highest priority, all instances will be created in the availability zone/subnet.
<br><li> EQUALITY: scales out the availability zone/subnet with the least instances each time. This gives each availability zone/subnet an opportunity for scale-out and disperses the instances created during multiple scale-out operations across different availability zones/subnets.

Notes about this policy:
<br><li> When the scaling group is based on basic network, this policy applies to multiple availability zones. When the scaling group is based on VPC, this policy applies to multiple subnets, and you do not need to consider availability zones. For example, if you have four subnets (A, B, C, and D) and A, B, and C are in availability zone 1 and D is in availability zone 2, you only need to decide the order of the four subnets, without worrying about the issue of availability zones.
<br><li> This policy is applicable to multiple availability zones/subnets, but is not applicable to multiple models with launch configurations. When there are multiple models, the PRIORITY policy is applied.
<br><li> During instance creation, apply the multi-model policy and then apply the multi-availability zones/subnet policy. For example, if you have models A and B and subnets 1, 2, and 3 (based on the PRIORITY policy), creation will be attempted in the following order: A1, A2, A3, B1, B2, and B3. If A1 is sold out, A2 (not B1) is tried next.
<br><li> No matter what policy is used, a single scaling event always uses a specific configuration at priority (model * availability zone/subnet).
     */
    public $MultiZoneSubnetPolicy;

    /**
     * @var string Health check type of instances in a scaling group.<br><li>CVM: confirm whether an instance is healthy based on the network status. If the pinged instance is unreachable, the instance will be considered unhealthy. For more information, see [Instance Health Check](https://intl.cloud.tencent.com/document/product/377/8553?from_cn_redirect=1)<br><li>CLB: confirm whether an instance is healthy based on the CLB health check status. For more information, see [Health Check Overview](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1).<br>If the parameter is set to `CLB`, the scaling group will check both the network status and the CLB health check status. If the network check indicates unhealthy, the `HealthStatus` field will return `UNHEALTHY`. If the CLB health check indicates unhealthy, the `HealthStatus` field will return `CLB_UNHEALTHY`. If both checks indicate unhealthy, the `HealthStatus` field will return `UNHEALTHY|CLB_UNHEALTHY`. Default value: `CLB`.
     */
    public $HealthCheckType;

    /**
     * @var integer Grace period of the CLB health check during which the `IN_SERVICE` instances added will not be marked as `CLB_UNHEALTHY`.<br>Valid range: 0-7200, in seconds. Default value: `0`.
     */
    public $LoadBalancerHealthCheckGracePeriod;

    /**
     * @var string Specifies how to assign instances. Valid values: `LAUNCH_CONFIGURATION` and `SPOT_MIXED`; default value: `LAUNCH_CONFIGURATION`.
<br><li>`LAUNCH_CONFIGURATION`: the launch configuration mode.
<br><li>`SPOT_MIXED`: a mixed instance mode. Currently, this mode is supported only when the launch configuration takes the pay-as-you-go billing mode. With this mode, the scaling group can provision a combination of pay-as-you-go instances and spot instances to meet the configured capacity. Note that the billing mode of the associated launch configuration cannot be modified when this mode is used.
     */
    public $InstanceAllocationPolicy;

    /**
     * @var SpotMixedAllocationPolicy Specifies how to assign pay-as-you-go instances and spot instances.
This parameter is valid only when `InstanceAllocationPolicy ` is set to `SPOT_MIXED`.
     */
    public $SpotMixedAllocationPolicy;

    /**
     * @var boolean Indicates whether the capacity rebalancing feature is enabled. This parameter is only valid for spot instances in the scaling group. Valid values:
<br><li>`TRUE`: yes. Before the spot instances in the scaling group are about to be automatically repossessed, AS will terminate them. The scale-in hook (if configured) will take effect before the termination. After the termination process starts, AS will asynchronously initiate a scaling activity to meet the desired capacity.
<br><li>`FALSE`: no. AS will add instances to meet the desired capacity only after the spot instances are terminated.

Default value: `False`.
     */
    public $CapacityRebalance;

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
     * @param array $Tags List of tag descriptions. In this parameter, you can specify the tags to be bound with a scaling group as well as corresponding resource instances. Each scaling group can have up to 30 tags.
     * @param ServiceSettings $ServiceSettings Service settings such as unhealthy instance replacement.
     * @param integer $Ipv6AddressCount The number of IPv6 addresses that an instance has. Valid values: 0 and 1. Default value: 0.
     * @param string $MultiZoneSubnetPolicy Multi-availability zone/subnet policy. Valid values: PRIORITY and EQUALITY. Default value: PRIORITY.
<br><li> PRIORITY: creates instances based on the priority determined by the order in the availability zone/subnet list. If an instance can be successfully created in the availability zone/subnet of the highest priority, all instances will be created in the availability zone/subnet.
<br><li> EQUALITY: scales out the availability zone/subnet with the least instances each time. This gives each availability zone/subnet an opportunity for scale-out and disperses the instances created during multiple scale-out operations across different availability zones/subnets.

Notes about this policy:
<br><li> When the scaling group is based on basic network, this policy applies to multiple availability zones. When the scaling group is based on VPC, this policy applies to multiple subnets, and you do not need to consider availability zones. For example, if you have four subnets (A, B, C, and D) and A, B, and C are in availability zone 1 and D is in availability zone 2, you only need to decide the order of the four subnets, without worrying about the issue of availability zones.
<br><li> This policy is applicable to multiple availability zones/subnets, but is not applicable to multiple models with launch configurations. When there are multiple models, the PRIORITY policy is applied.
<br><li> During instance creation, apply the multi-model policy and then apply the multi-availability zones/subnet policy. For example, if you have models A and B and subnets 1, 2, and 3 (based on the PRIORITY policy), creation will be attempted in the following order: A1, A2, A3, B1, B2, and B3. If A1 is sold out, A2 (not B1) is tried next.
<br><li> No matter what policy is used, a single scaling event always uses a specific configuration at priority (model * availability zone/subnet).
     * @param string $HealthCheckType Health check type of instances in a scaling group.<br><li>CVM: confirm whether an instance is healthy based on the network status. If the pinged instance is unreachable, the instance will be considered unhealthy. For more information, see [Instance Health Check](https://intl.cloud.tencent.com/document/product/377/8553?from_cn_redirect=1)<br><li>CLB: confirm whether an instance is healthy based on the CLB health check status. For more information, see [Health Check Overview](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1).<br>If the parameter is set to `CLB`, the scaling group will check both the network status and the CLB health check status. If the network check indicates unhealthy, the `HealthStatus` field will return `UNHEALTHY`. If the CLB health check indicates unhealthy, the `HealthStatus` field will return `CLB_UNHEALTHY`. If both checks indicate unhealthy, the `HealthStatus` field will return `UNHEALTHY|CLB_UNHEALTHY`. Default value: `CLB`.
     * @param integer $LoadBalancerHealthCheckGracePeriod Grace period of the CLB health check during which the `IN_SERVICE` instances added will not be marked as `CLB_UNHEALTHY`.<br>Valid range: 0-7200, in seconds. Default value: `0`.
     * @param string $InstanceAllocationPolicy Specifies how to assign instances. Valid values: `LAUNCH_CONFIGURATION` and `SPOT_MIXED`; default value: `LAUNCH_CONFIGURATION`.
<br><li>`LAUNCH_CONFIGURATION`: the launch configuration mode.
<br><li>`SPOT_MIXED`: a mixed instance mode. Currently, this mode is supported only when the launch configuration takes the pay-as-you-go billing mode. With this mode, the scaling group can provision a combination of pay-as-you-go instances and spot instances to meet the configured capacity. Note that the billing mode of the associated launch configuration cannot be modified when this mode is used.
     * @param SpotMixedAllocationPolicy $SpotMixedAllocationPolicy Specifies how to assign pay-as-you-go instances and spot instances.
This parameter is valid only when `InstanceAllocationPolicy ` is set to `SPOT_MIXED`.
     * @param boolean $CapacityRebalance Indicates whether the capacity rebalancing feature is enabled. This parameter is only valid for spot instances in the scaling group. Valid values:
<br><li>`TRUE`: yes. Before the spot instances in the scaling group are about to be automatically repossessed, AS will terminate them. The scale-in hook (if configured) will take effect before the termination. After the termination process starts, AS will asynchronously initiate a scaling activity to meet the desired capacity.
<br><li>`FALSE`: no. AS will add instances to meet the desired capacity only after the spot instances are terminated.

Default value: `False`.
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
    }
}
