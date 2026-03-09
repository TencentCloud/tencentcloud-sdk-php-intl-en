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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAutoScalingGroup request structure.
 *
 * @method string getAutoScalingGroupId() Obtain <p>Scaling group ID. obtain available scaling group ids in the following ways:</p><li>query scaling group ids by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/group">console</a>.</li><li>obtain scaling group ids by calling the <a href="https://www.tencentcloud.comom/document/api/377/20438?from_cn_redirect=1">DescribeAutoScalingGroups</a> api and retrieving AutoScalingGroupId from the returned information.</li>.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set <p>Scaling group ID. obtain available scaling group ids in the following ways:</p><li>query scaling group ids by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/group">console</a>.</li><li>obtain scaling group ids by calling the <a href="https://www.tencentcloud.comom/document/api/377/20438?from_cn_redirect=1">DescribeAutoScalingGroups</a> api and retrieving AutoScalingGroupId from the returned information.</li>.
 * @method string getAutoScalingGroupName() Obtain <p>The scaling group name must be unique in your account. name only supports chinese, english, digits, underscore, separator "-", and decimal point. the maximum length cannot exceed 55 bytes.</p>.
 * @method void setAutoScalingGroupName(string $AutoScalingGroupName) Set <p>The scaling group name must be unique in your account. name only supports chinese, english, digits, underscore, separator "-", and decimal point. the maximum length cannot exceed 55 bytes.</p>.
 * @method integer getDefaultCooldown() Obtain <P>Default cooldown in seconds, value ranges from 0 to 3600, default value is 300.</p>.
 * @method void setDefaultCooldown(integer $DefaultCooldown) Set <P>Default cooldown in seconds, value ranges from 0 to 3600, default value is 300.</p>.
 * @method integer getDesiredCapacity() Obtain <P>Expected number of instances. value range [0,2000]. to meet the maximum value equal to or greater than the expected value, and the expected value equal to or greater than the minimum value.</p>.
 * @method void setDesiredCapacity(integer $DesiredCapacity) Set <P>Expected number of instances. value range [0,2000]. to meet the maximum value equal to or greater than the expected value, and the expected value equal to or greater than the minimum value.</p>.
 * @method string getLaunchConfigurationId() Obtain <p>Launch configuration ID. obtain available launch configuration ids in the following ways:</p><li>query the launch configuration ID by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/config">console</a>.</li><li>obtain the launch configuration ID by calling the <a href="https://www.tencentcloud.comom/document/api/377/20445?from_cn_redirect=1">DescribeLaunchConfigurations</a> api and retrieving the LaunchConfigurationId from the returned information.</li>.
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) Set <p>Launch configuration ID. obtain available launch configuration ids in the following ways:</p><li>query the launch configuration ID by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/config">console</a>.</li><li>obtain the launch configuration ID by calling the <a href="https://www.tencentcloud.comom/document/api/377/20445?from_cn_redirect=1">DescribeLaunchConfigurations</a> api and retrieving the LaunchConfigurationId from the returned information.</li>.
 * @method integer getMaxSize() Obtain <P>Maximum number of instances. value range: [0,2000]. to meet the requirement, the maximum value must be equal to or greater than the expected value, and the expected value must be equal to or greater than the minimum value.</p>.
 * @method void setMaxSize(integer $MaxSize) Set <P>Maximum number of instances. value range: [0,2000]. to meet the requirement, the maximum value must be equal to or greater than the expected value, and the expected value must be equal to or greater than the minimum value.</p>.
 * @method integer getMinSize() Obtain <P>Minimum number of instances. value range: [0,2000]. to meet the requirement, the maximum value must be equal to or greater than the expected value, and the expected value must be equal to or greater than the minimum value.</p>.
 * @method void setMinSize(integer $MinSize) Set <P>Minimum number of instances. value range: [0,2000]. to meet the requirement, the maximum value must be equal to or greater than the expected value, and the expected value must be equal to or greater than the minimum value.</p>.
 * @method integer getProjectId() Obtain <p>Project ID. obtain this parameter by calling the `ProjectId` field in the return value of <a href="https://www.tencentcloud.comom/document/api/651/78725?from_cn_redirect=1">DescribeProject</a>. default value is 0, indicating usage of the default project.</p>.
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID. obtain this parameter by calling the `ProjectId` field in the return value of <a href="https://www.tencentcloud.comom/document/api/651/78725?from_cn_redirect=1">DescribeProject</a>. default value is 0, indicating usage of the default project.</p>.
 * @method array getSubnetIds() Obtain <p>subnet ID list. valid vpc subnet ids can be obtained by logging in to the <a href="https://console.cloud.tencent.com/vpc/subnet">console</a> for querying. you can also call the API <a href="https://www.tencentcloud.comom/document/product/215/15784?from_cn_redirect=1">DescribeSubnets</a> and retrieve them from the SubnetId field in the API response.</p>.
 * @method void setSubnetIds(array $SubnetIds) Set <p>subnet ID list. valid vpc subnet ids can be obtained by logging in to the <a href="https://console.cloud.tencent.com/vpc/subnet">console</a> for querying. you can also call the API <a href="https://www.tencentcloud.comom/document/product/215/15784?from_cn_redirect=1">DescribeSubnets</a> and retrieve them from the SubnetId field in the API response.</p>.
 * @method array getTerminationPolicies() Obtain <p>Termination policy, whose maximum length is currently 1. valid values: OLDEST_INSTANCE and NEWEST_INSTANCE.</p><li> OLDEST_INSTANCE terminates the OLDEST INSTANCE in the scaling group first.</li><li> NEWEST_INSTANCE terminates the NEWEST INSTANCE in the scaling group first.</li>.
 * @method void setTerminationPolicies(array $TerminationPolicies) Set <p>Termination policy, whose maximum length is currently 1. valid values: OLDEST_INSTANCE and NEWEST_INSTANCE.</p><li> OLDEST_INSTANCE terminates the OLDEST INSTANCE in the scaling group first.</li><li> NEWEST_INSTANCE terminates the NEWEST INSTANCE in the scaling group first.</li>.
 * @method string getVpcId() Obtain <p>vpc ID. when modifying the vpc, you need to change the SubnetIds parameter to the subnet of this vpc. effective VpcId can be queried by logging in to the <a href="https://console.cloud.tencent.com/vpc/vpc">console</a>; you can also call the <a href="https://www.tencentcloud.comom/document/api/215/15778?from_cn_redirect=1">DescribeVpc</a> api and get the VpcId field from the api response.</p>.
 * @method void setVpcId(string $VpcId) Set <p>vpc ID. when modifying the vpc, you need to change the SubnetIds parameter to the subnet of this vpc. effective VpcId can be queried by logging in to the <a href="https://console.cloud.tencent.com/vpc/vpc">console</a>; you can also call the <a href="https://www.tencentcloud.comom/document/api/215/15778?from_cn_redirect=1">DescribeVpc</a> api and get the VpcId field from the api response.</p>.
 * @method array getZones() Obtain <P>AZ list</p>.
 * @method void setZones(array $Zones) Set <P>AZ list</p>.
 * @method string getRetryPolicy() Obtain <p>RETRY policy, whose valid values include IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY, with the default value being IMMEDIATE_RETRY. a partially successful scaling operation is considered a failed activity.</p><li>IMMEDIATE_RETRY: RETRY immediately, attempting retries in rapid succession over a short period, and cease further retries after a certain number of consecutive failures (5 times).</li><li>INCREMENTAL_INTERVALS: INCREMENTAL interval RETRY, with the RETRY interval gradually increasing as the number of consecutive failures rises, ranging from seconds to 1 day.</li><li>NO_RETRY: NO RETRY until a user call or Alarm information is received again.</li>.
 * @method void setRetryPolicy(string $RetryPolicy) Set <p>RETRY policy, whose valid values include IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY, with the default value being IMMEDIATE_RETRY. a partially successful scaling operation is considered a failed activity.</p><li>IMMEDIATE_RETRY: RETRY immediately, attempting retries in rapid succession over a short period, and cease further retries after a certain number of consecutive failures (5 times).</li><li>INCREMENTAL_INTERVALS: INCREMENTAL interval RETRY, with the RETRY interval gradually increasing as the number of consecutive failures rises, ranging from seconds to 1 day.</li><li>NO_RETRY: NO RETRY until a user call or Alarm information is received again.</li>.
 * @method string getZonesCheckPolicy() Obtain <p>Availability Zone validation policy. valid values include ALL and ANY. default value: ANY. it is effective when scaling group actual change resource-related fields (launch configuration, az, subnet) are modified.</p><li> ALL: verification passes if ALL azs (Zone) or subnets (SubnetId) are available. otherwise, a verification error will be reported.</li><li> ANY: verification passes if ANY AZ (Zone) or subnet (SubnetId) is available. otherwise, a verification error will be reported.</li><p>common causes for unavailable azs or subnets include CVM instancetype sold out in the az, CBS cloud disk sold out in the az, insufficient quota in the az, or insufficient IP addresses in the subnet.</p><p>if Zones/SubnetIds contain nonexistent azs or subnets, a verification error will be reported regardless of the values of ZonesCheckPolicy.</p>.
 * @method void setZonesCheckPolicy(string $ZonesCheckPolicy) Set <p>Availability Zone validation policy. valid values include ALL and ANY. default value: ANY. it is effective when scaling group actual change resource-related fields (launch configuration, az, subnet) are modified.</p><li> ALL: verification passes if ALL azs (Zone) or subnets (SubnetId) are available. otherwise, a verification error will be reported.</li><li> ANY: verification passes if ANY AZ (Zone) or subnet (SubnetId) is available. otherwise, a verification error will be reported.</li><p>common causes for unavailable azs or subnets include CVM instancetype sold out in the az, CBS cloud disk sold out in the az, insufficient quota in the az, or insufficient IP addresses in the subnet.</p><p>if Zones/SubnetIds contain nonexistent azs or subnets, a verification error will be reported regardless of the values of ZonesCheckPolicy.</p>.
 * @method ServiceSettings getServiceSettings() Obtain <P>Service settings, including cloud monitoring and unhealthy instance replacement.</p>.
 * @method void setServiceSettings(ServiceSettings $ServiceSettings) Set <P>Service settings, including cloud monitoring and unhealthy instance replacement.</p>.
 * @method integer getIpv6AddressCount() Obtain <p>The instance has a configuration for the number of IPv6 addresses. valid values include 0 and 1. the default value is 0, which means the instance does not allocate an IPv6 address. you need to use a VPC that supports IPv6 and enable IPv6 CIDR in the subnet.</p>
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) Set <p>The instance has a configuration for the number of IPv6 addresses. valid values include 0 and 1. the default value is 0, which means the instance does not allocate an IPv6 address. you need to use a VPC that supports IPv6 and enable IPv6 CIDR in the subnet.</p>
 * @method string getMultiZoneSubnetPolicy() Obtain <p>The multi-az/subnet policy, with values including PRIORITY and EQUALITY, defaults to PRIORITY.</p><li> PRIORITY: attempt to create instances taking the order of the az/subnet list as the PRIORITY. if instances can be successfully created in the az/subnet with the highest PRIORITY, they will always be created there.</li> <li> EQUALITY: instances added through scale-out will be distributed across multiple azs/subnets to ensure A relatively balanced number of instances in each az/subnet after expansion.</li> <p>points to consider:</p><li> when the scaling group is based on A classic network, this policy applies to multi-az. when the scaling group is based on A VPC network, this policy applies to multi-subnet, no longer considering AZ factors. for example, with four subnets labeled A, B, c, and D, where A, B, and c are in availability zone 1 and D is in availability zone 2, consider subnets A, B, c, and D for sorting, without considering availability zones 1 and 2.</li> <li> this policy applies to multi-az/subnet but is not applicable to the instancetypes parameter of the launch configuration. selection of multiple models is according to PRIORITY policy.</li> <li> when creating instances according to the PRIORITY policy, ensure the policy for multiple models first, then the policy for multi-az/subnet. for example, with multiple models A and B, and multiple subnets 1, 2, and 3, attempts will be made in the order A1, A2, A3, B1, B2, B3. if A1 is sold out, A2 will be attempted (not B1).</li>.
 * @method void setMultiZoneSubnetPolicy(string $MultiZoneSubnetPolicy) Set <p>The multi-az/subnet policy, with values including PRIORITY and EQUALITY, defaults to PRIORITY.</p><li> PRIORITY: attempt to create instances taking the order of the az/subnet list as the PRIORITY. if instances can be successfully created in the az/subnet with the highest PRIORITY, they will always be created there.</li> <li> EQUALITY: instances added through scale-out will be distributed across multiple azs/subnets to ensure A relatively balanced number of instances in each az/subnet after expansion.</li> <p>points to consider:</p><li> when the scaling group is based on A classic network, this policy applies to multi-az. when the scaling group is based on A VPC network, this policy applies to multi-subnet, no longer considering AZ factors. for example, with four subnets labeled A, B, c, and D, where A, B, and c are in availability zone 1 and D is in availability zone 2, consider subnets A, B, c, and D for sorting, without considering availability zones 1 and 2.</li> <li> this policy applies to multi-az/subnet but is not applicable to the instancetypes parameter of the launch configuration. selection of multiple models is according to PRIORITY policy.</li> <li> when creating instances according to the PRIORITY policy, ensure the policy for multiple models first, then the policy for multi-az/subnet. for example, with multiple models A and B, and multiple subnets 1, 2, and 3, attempts will be made in the order A1, A2, A3, B1, B2, B3. if A1 is sold out, A2 will be attempted (not B1).</li>.
 * @method string getHealthCheckType() Obtain <p>Scaling group instance health check type, values are as follows:</p><li>CVM: determine whether an instance is unhealthy based on its network status. an unhealthy network status refers to an event where instances become unreachable via PING. for detailed criteria of judgment, refer to [instance health check](https://www.tencentcloud.comom/document/product/377/8553?from_cn_redirect=1).</li><li>CLB: determine whether an instance is unhealthy based on the health check status of CLB. for the principle of CLB health check, see [health check](https://www.tencentcloud.comom/document/product/214/6097?from_cn_redirect=1).</li>.
 * @method void setHealthCheckType(string $HealthCheckType) Set <p>Scaling group instance health check type, values are as follows:</p><li>CVM: determine whether an instance is unhealthy based on its network status. an unhealthy network status refers to an event where instances become unreachable via PING. for detailed criteria of judgment, refer to [instance health check](https://www.tencentcloud.comom/document/product/377/8553?from_cn_redirect=1).</li><li>CLB: determine whether an instance is unhealthy based on the health check status of CLB. for the principle of CLB health check, see [health check](https://www.tencentcloud.comom/document/product/214/6097?from_cn_redirect=1).</li>.
 * @method integer getLoadBalancerHealthCheckGracePeriod() Obtain <p>Specifies the CLB health check grace period in seconds.</p><p>value range: [0, 7200].</p><p>default value: 0.</p>
 * @method void setLoadBalancerHealthCheckGracePeriod(integer $LoadBalancerHealthCheckGracePeriod) Set <p>Specifies the CLB health check grace period in seconds.</p><p>value range: [0, 7200].</p><p>default value: 0.</p>
 * @method string getInstanceAllocationPolicy() Obtain <p>Instance allocation policy. valid values include LAUNCH_CONFIGURATION and SPOT_MIXED.</p><li> LAUNCH_CONFIGURATION represents the traditional startup CONFIGURATION mode.</li><li> SPOT_MIXED represents the SPOT hybrid mode. currently only support hybrid mode when the LAUNCH CONFIGURATION uses pay-as-you-go billing mode. in hybrid mode, the scaling group will scale out based on the SPOT model. the billing type of the associated LAUNCH CONFIGURATION cannot be modified when using hybrid mode.</li>.
 * @method void setInstanceAllocationPolicy(string $InstanceAllocationPolicy) Set <p>Instance allocation policy. valid values include LAUNCH_CONFIGURATION and SPOT_MIXED.</p><li> LAUNCH_CONFIGURATION represents the traditional startup CONFIGURATION mode.</li><li> SPOT_MIXED represents the SPOT hybrid mode. currently only support hybrid mode when the LAUNCH CONFIGURATION uses pay-as-you-go billing mode. in hybrid mode, the scaling group will scale out based on the SPOT model. the billing type of the associated LAUNCH CONFIGURATION cannot be modified when using hybrid mode.</li>.
 * @method SpotMixedAllocationPolicy getSpotMixedAllocationPolicy() Obtain <p>Allocation policy of instances for each billing type in SPOT hybrid mode.<br>available only when InstanceAllocationPolicy is set to SPOT_MIXED.</p>.
 * @method void setSpotMixedAllocationPolicy(SpotMixedAllocationPolicy $SpotMixedAllocationPolicy) Set <p>Allocation policy of instances for each billing type in SPOT hybrid mode.<br>available only when InstanceAllocationPolicy is set to SPOT_MIXED.</p>.
 * @method boolean getCapacityRebalance() Obtain <p>The capacity rebalancing feature is only applicable to spot instances within the scaling group. valid values:</p><li> TRUE: enable this feature. when spot instances within the scaling group are about to be automatically recycled by the spot instance service, AS initiates the termination process of spot instances. if a scale-in hook is configured, trigger before termination. after the termination process starts, AS asynchronously initiates scale-out to reach the expected number of instances.</li> <li> FALSE: disable this feature. AS waits for the spot instance to be terminated before scaling out to reach the number of instances expected by the scaling group.</li>.
 * @method void setCapacityRebalance(boolean $CapacityRebalance) Set <p>The capacity rebalancing feature is only applicable to spot instances within the scaling group. valid values:</p><li> TRUE: enable this feature. when spot instances within the scaling group are about to be automatically recycled by the spot instance service, AS initiates the termination process of spot instances. if a scale-in hook is configured, trigger before termination. after the termination process starts, AS asynchronously initiates scale-out to reach the expected number of instances.</li> <li> FALSE: disable this feature. AS waits for the spot instance to be terminated before scaling out to reach the number of instances expected by the scaling group.</li>.
 * @method InstanceNameIndexSettings getInstanceNameIndexSettings() Obtain <P>Instance name sequencing settings. once enabled, append incremental numeric sequence to the names of instances automatically created within the scaling group.</p>.
 * @method void setInstanceNameIndexSettings(InstanceNameIndexSettings $InstanceNameIndexSettings) Set <P>Instance name sequencing settings. once enabled, append incremental numeric sequence to the names of instances automatically created within the scaling group.</p>.
 * @method HostNameIndexSettings getHostNameIndexSettings() Obtain <P>Instance hostname sequencing settings. once enabled, append incremental numeric sequence to the hostname of instances automatically created within the scaling group.</p>.
 * @method void setHostNameIndexSettings(HostNameIndexSettings $HostNameIndexSettings) Set <P>Instance hostname sequencing settings. once enabled, append incremental numeric sequence to the hostname of instances automatically created within the scaling group.</p>.
 * @method boolean getConcurrentScaleOutForDesiredCapacity() Obtain <p>The concurrent scaling up functionality for matching expected numbers cannot be set when InstanceAllocationPolicy is in spot hybrid mode or when ScalingMode is in the scaling-prioritized startup mode. currently only two matching expected number scale-out activities are supported to run concurrently. other types of activities such as specified quantity scale-out or scale-in cannot be specified. set to FALSE indicates disabled.</p>.
 * @method void setConcurrentScaleOutForDesiredCapacity(boolean $ConcurrentScaleOutForDesiredCapacity) Set <p>The concurrent scaling up functionality for matching expected numbers cannot be set when InstanceAllocationPolicy is in spot hybrid mode or when ScalingMode is in the scaling-prioritized startup mode. currently only two matching expected number scale-out activities are supported to run concurrently. other types of activities such as specified quantity scale-out or scale-in cannot be specified. set to FALSE indicates disabled.</p>.
 */
class ModifyAutoScalingGroupRequest extends AbstractModel
{
    /**
     * @var string <p>Scaling group ID. obtain available scaling group ids in the following ways:</p><li>query scaling group ids by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/group">console</a>.</li><li>obtain scaling group ids by calling the <a href="https://www.tencentcloud.comom/document/api/377/20438?from_cn_redirect=1">DescribeAutoScalingGroups</a> api and retrieving AutoScalingGroupId from the returned information.</li>.
     */
    public $AutoScalingGroupId;

    /**
     * @var string <p>The scaling group name must be unique in your account. name only supports chinese, english, digits, underscore, separator "-", and decimal point. the maximum length cannot exceed 55 bytes.</p>.
     */
    public $AutoScalingGroupName;

    /**
     * @var integer <P>Default cooldown in seconds, value ranges from 0 to 3600, default value is 300.</p>.
     */
    public $DefaultCooldown;

    /**
     * @var integer <P>Expected number of instances. value range [0,2000]. to meet the maximum value equal to or greater than the expected value, and the expected value equal to or greater than the minimum value.</p>.
     */
    public $DesiredCapacity;

    /**
     * @var string <p>Launch configuration ID. obtain available launch configuration ids in the following ways:</p><li>query the launch configuration ID by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/config">console</a>.</li><li>obtain the launch configuration ID by calling the <a href="https://www.tencentcloud.comom/document/api/377/20445?from_cn_redirect=1">DescribeLaunchConfigurations</a> api and retrieving the LaunchConfigurationId from the returned information.</li>.
     */
    public $LaunchConfigurationId;

    /**
     * @var integer <P>Maximum number of instances. value range: [0,2000]. to meet the requirement, the maximum value must be equal to or greater than the expected value, and the expected value must be equal to or greater than the minimum value.</p>.
     */
    public $MaxSize;

    /**
     * @var integer <P>Minimum number of instances. value range: [0,2000]. to meet the requirement, the maximum value must be equal to or greater than the expected value, and the expected value must be equal to or greater than the minimum value.</p>.
     */
    public $MinSize;

    /**
     * @var integer <p>Project ID. obtain this parameter by calling the `ProjectId` field in the return value of <a href="https://www.tencentcloud.comom/document/api/651/78725?from_cn_redirect=1">DescribeProject</a>. default value is 0, indicating usage of the default project.</p>.
     */
    public $ProjectId;

    /**
     * @var array <p>subnet ID list. valid vpc subnet ids can be obtained by logging in to the <a href="https://console.cloud.tencent.com/vpc/subnet">console</a> for querying. you can also call the API <a href="https://www.tencentcloud.comom/document/product/215/15784?from_cn_redirect=1">DescribeSubnets</a> and retrieve them from the SubnetId field in the API response.</p>.
     */
    public $SubnetIds;

    /**
     * @var array <p>Termination policy, whose maximum length is currently 1. valid values: OLDEST_INSTANCE and NEWEST_INSTANCE.</p><li> OLDEST_INSTANCE terminates the OLDEST INSTANCE in the scaling group first.</li><li> NEWEST_INSTANCE terminates the NEWEST INSTANCE in the scaling group first.</li>.
     */
    public $TerminationPolicies;

    /**
     * @var string <p>vpc ID. when modifying the vpc, you need to change the SubnetIds parameter to the subnet of this vpc. effective VpcId can be queried by logging in to the <a href="https://console.cloud.tencent.com/vpc/vpc">console</a>; you can also call the <a href="https://www.tencentcloud.comom/document/api/215/15778?from_cn_redirect=1">DescribeVpc</a> api and get the VpcId field from the api response.</p>.
     */
    public $VpcId;

    /**
     * @var array <P>AZ list</p>.
     */
    public $Zones;

    /**
     * @var string <p>RETRY policy, whose valid values include IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY, with the default value being IMMEDIATE_RETRY. a partially successful scaling operation is considered a failed activity.</p><li>IMMEDIATE_RETRY: RETRY immediately, attempting retries in rapid succession over a short period, and cease further retries after a certain number of consecutive failures (5 times).</li><li>INCREMENTAL_INTERVALS: INCREMENTAL interval RETRY, with the RETRY interval gradually increasing as the number of consecutive failures rises, ranging from seconds to 1 day.</li><li>NO_RETRY: NO RETRY until a user call or Alarm information is received again.</li>.
     */
    public $RetryPolicy;

    /**
     * @var string <p>Availability Zone validation policy. valid values include ALL and ANY. default value: ANY. it is effective when scaling group actual change resource-related fields (launch configuration, az, subnet) are modified.</p><li> ALL: verification passes if ALL azs (Zone) or subnets (SubnetId) are available. otherwise, a verification error will be reported.</li><li> ANY: verification passes if ANY AZ (Zone) or subnet (SubnetId) is available. otherwise, a verification error will be reported.</li><p>common causes for unavailable azs or subnets include CVM instancetype sold out in the az, CBS cloud disk sold out in the az, insufficient quota in the az, or insufficient IP addresses in the subnet.</p><p>if Zones/SubnetIds contain nonexistent azs or subnets, a verification error will be reported regardless of the values of ZonesCheckPolicy.</p>.
     */
    public $ZonesCheckPolicy;

    /**
     * @var ServiceSettings <P>Service settings, including cloud monitoring and unhealthy instance replacement.</p>.
     */
    public $ServiceSettings;

    /**
     * @var integer <p>The instance has a configuration for the number of IPv6 addresses. valid values include 0 and 1. the default value is 0, which means the instance does not allocate an IPv6 address. you need to use a VPC that supports IPv6 and enable IPv6 CIDR in the subnet.</p>
     */
    public $Ipv6AddressCount;

    /**
     * @var string <p>The multi-az/subnet policy, with values including PRIORITY and EQUALITY, defaults to PRIORITY.</p><li> PRIORITY: attempt to create instances taking the order of the az/subnet list as the PRIORITY. if instances can be successfully created in the az/subnet with the highest PRIORITY, they will always be created there.</li> <li> EQUALITY: instances added through scale-out will be distributed across multiple azs/subnets to ensure A relatively balanced number of instances in each az/subnet after expansion.</li> <p>points to consider:</p><li> when the scaling group is based on A classic network, this policy applies to multi-az. when the scaling group is based on A VPC network, this policy applies to multi-subnet, no longer considering AZ factors. for example, with four subnets labeled A, B, c, and D, where A, B, and c are in availability zone 1 and D is in availability zone 2, consider subnets A, B, c, and D for sorting, without considering availability zones 1 and 2.</li> <li> this policy applies to multi-az/subnet but is not applicable to the instancetypes parameter of the launch configuration. selection of multiple models is according to PRIORITY policy.</li> <li> when creating instances according to the PRIORITY policy, ensure the policy for multiple models first, then the policy for multi-az/subnet. for example, with multiple models A and B, and multiple subnets 1, 2, and 3, attempts will be made in the order A1, A2, A3, B1, B2, B3. if A1 is sold out, A2 will be attempted (not B1).</li>.
     */
    public $MultiZoneSubnetPolicy;

    /**
     * @var string <p>Scaling group instance health check type, values are as follows:</p><li>CVM: determine whether an instance is unhealthy based on its network status. an unhealthy network status refers to an event where instances become unreachable via PING. for detailed criteria of judgment, refer to [instance health check](https://www.tencentcloud.comom/document/product/377/8553?from_cn_redirect=1).</li><li>CLB: determine whether an instance is unhealthy based on the health check status of CLB. for the principle of CLB health check, see [health check](https://www.tencentcloud.comom/document/product/214/6097?from_cn_redirect=1).</li>.
     */
    public $HealthCheckType;

    /**
     * @var integer <p>Specifies the CLB health check grace period in seconds.</p><p>value range: [0, 7200].</p><p>default value: 0.</p>
     */
    public $LoadBalancerHealthCheckGracePeriod;

    /**
     * @var string <p>Instance allocation policy. valid values include LAUNCH_CONFIGURATION and SPOT_MIXED.</p><li> LAUNCH_CONFIGURATION represents the traditional startup CONFIGURATION mode.</li><li> SPOT_MIXED represents the SPOT hybrid mode. currently only support hybrid mode when the LAUNCH CONFIGURATION uses pay-as-you-go billing mode. in hybrid mode, the scaling group will scale out based on the SPOT model. the billing type of the associated LAUNCH CONFIGURATION cannot be modified when using hybrid mode.</li>.
     */
    public $InstanceAllocationPolicy;

    /**
     * @var SpotMixedAllocationPolicy <p>Allocation policy of instances for each billing type in SPOT hybrid mode.<br>available only when InstanceAllocationPolicy is set to SPOT_MIXED.</p>.
     */
    public $SpotMixedAllocationPolicy;

    /**
     * @var boolean <p>The capacity rebalancing feature is only applicable to spot instances within the scaling group. valid values:</p><li> TRUE: enable this feature. when spot instances within the scaling group are about to be automatically recycled by the spot instance service, AS initiates the termination process of spot instances. if a scale-in hook is configured, trigger before termination. after the termination process starts, AS asynchronously initiates scale-out to reach the expected number of instances.</li> <li> FALSE: disable this feature. AS waits for the spot instance to be terminated before scaling out to reach the number of instances expected by the scaling group.</li>.
     */
    public $CapacityRebalance;

    /**
     * @var InstanceNameIndexSettings <P>Instance name sequencing settings. once enabled, append incremental numeric sequence to the names of instances automatically created within the scaling group.</p>.
     */
    public $InstanceNameIndexSettings;

    /**
     * @var HostNameIndexSettings <P>Instance hostname sequencing settings. once enabled, append incremental numeric sequence to the hostname of instances automatically created within the scaling group.</p>.
     */
    public $HostNameIndexSettings;

    /**
     * @var boolean <p>The concurrent scaling up functionality for matching expected numbers cannot be set when InstanceAllocationPolicy is in spot hybrid mode or when ScalingMode is in the scaling-prioritized startup mode. currently only two matching expected number scale-out activities are supported to run concurrently. other types of activities such as specified quantity scale-out or scale-in cannot be specified. set to FALSE indicates disabled.</p>.
     */
    public $ConcurrentScaleOutForDesiredCapacity;

    /**
     * @param string $AutoScalingGroupId <p>Scaling group ID. obtain available scaling group ids in the following ways:</p><li>query scaling group ids by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/group">console</a>.</li><li>obtain scaling group ids by calling the <a href="https://www.tencentcloud.comom/document/api/377/20438?from_cn_redirect=1">DescribeAutoScalingGroups</a> api and retrieving AutoScalingGroupId from the returned information.</li>.
     * @param string $AutoScalingGroupName <p>The scaling group name must be unique in your account. name only supports chinese, english, digits, underscore, separator "-", and decimal point. the maximum length cannot exceed 55 bytes.</p>.
     * @param integer $DefaultCooldown <P>Default cooldown in seconds, value ranges from 0 to 3600, default value is 300.</p>.
     * @param integer $DesiredCapacity <P>Expected number of instances. value range [0,2000]. to meet the maximum value equal to or greater than the expected value, and the expected value equal to or greater than the minimum value.</p>.
     * @param string $LaunchConfigurationId <p>Launch configuration ID. obtain available launch configuration ids in the following ways:</p><li>query the launch configuration ID by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/config">console</a>.</li><li>obtain the launch configuration ID by calling the <a href="https://www.tencentcloud.comom/document/api/377/20445?from_cn_redirect=1">DescribeLaunchConfigurations</a> api and retrieving the LaunchConfigurationId from the returned information.</li>.
     * @param integer $MaxSize <P>Maximum number of instances. value range: [0,2000]. to meet the requirement, the maximum value must be equal to or greater than the expected value, and the expected value must be equal to or greater than the minimum value.</p>.
     * @param integer $MinSize <P>Minimum number of instances. value range: [0,2000]. to meet the requirement, the maximum value must be equal to or greater than the expected value, and the expected value must be equal to or greater than the minimum value.</p>.
     * @param integer $ProjectId <p>Project ID. obtain this parameter by calling the `ProjectId` field in the return value of <a href="https://www.tencentcloud.comom/document/api/651/78725?from_cn_redirect=1">DescribeProject</a>. default value is 0, indicating usage of the default project.</p>.
     * @param array $SubnetIds <p>subnet ID list. valid vpc subnet ids can be obtained by logging in to the <a href="https://console.cloud.tencent.com/vpc/subnet">console</a> for querying. you can also call the API <a href="https://www.tencentcloud.comom/document/product/215/15784?from_cn_redirect=1">DescribeSubnets</a> and retrieve them from the SubnetId field in the API response.</p>.
     * @param array $TerminationPolicies <p>Termination policy, whose maximum length is currently 1. valid values: OLDEST_INSTANCE and NEWEST_INSTANCE.</p><li> OLDEST_INSTANCE terminates the OLDEST INSTANCE in the scaling group first.</li><li> NEWEST_INSTANCE terminates the NEWEST INSTANCE in the scaling group first.</li>.
     * @param string $VpcId <p>vpc ID. when modifying the vpc, you need to change the SubnetIds parameter to the subnet of this vpc. effective VpcId can be queried by logging in to the <a href="https://console.cloud.tencent.com/vpc/vpc">console</a>; you can also call the <a href="https://www.tencentcloud.comom/document/api/215/15778?from_cn_redirect=1">DescribeVpc</a> api and get the VpcId field from the api response.</p>.
     * @param array $Zones <P>AZ list</p>.
     * @param string $RetryPolicy <p>RETRY policy, whose valid values include IMMEDIATE_RETRY, INCREMENTAL_INTERVALS, and NO_RETRY, with the default value being IMMEDIATE_RETRY. a partially successful scaling operation is considered a failed activity.</p><li>IMMEDIATE_RETRY: RETRY immediately, attempting retries in rapid succession over a short period, and cease further retries after a certain number of consecutive failures (5 times).</li><li>INCREMENTAL_INTERVALS: INCREMENTAL interval RETRY, with the RETRY interval gradually increasing as the number of consecutive failures rises, ranging from seconds to 1 day.</li><li>NO_RETRY: NO RETRY until a user call or Alarm information is received again.</li>.
     * @param string $ZonesCheckPolicy <p>Availability Zone validation policy. valid values include ALL and ANY. default value: ANY. it is effective when scaling group actual change resource-related fields (launch configuration, az, subnet) are modified.</p><li> ALL: verification passes if ALL azs (Zone) or subnets (SubnetId) are available. otherwise, a verification error will be reported.</li><li> ANY: verification passes if ANY AZ (Zone) or subnet (SubnetId) is available. otherwise, a verification error will be reported.</li><p>common causes for unavailable azs or subnets include CVM instancetype sold out in the az, CBS cloud disk sold out in the az, insufficient quota in the az, or insufficient IP addresses in the subnet.</p><p>if Zones/SubnetIds contain nonexistent azs or subnets, a verification error will be reported regardless of the values of ZonesCheckPolicy.</p>.
     * @param ServiceSettings $ServiceSettings <P>Service settings, including cloud monitoring and unhealthy instance replacement.</p>.
     * @param integer $Ipv6AddressCount <p>The instance has a configuration for the number of IPv6 addresses. valid values include 0 and 1. the default value is 0, which means the instance does not allocate an IPv6 address. you need to use a VPC that supports IPv6 and enable IPv6 CIDR in the subnet.</p>
     * @param string $MultiZoneSubnetPolicy <p>The multi-az/subnet policy, with values including PRIORITY and EQUALITY, defaults to PRIORITY.</p><li> PRIORITY: attempt to create instances taking the order of the az/subnet list as the PRIORITY. if instances can be successfully created in the az/subnet with the highest PRIORITY, they will always be created there.</li> <li> EQUALITY: instances added through scale-out will be distributed across multiple azs/subnets to ensure A relatively balanced number of instances in each az/subnet after expansion.</li> <p>points to consider:</p><li> when the scaling group is based on A classic network, this policy applies to multi-az. when the scaling group is based on A VPC network, this policy applies to multi-subnet, no longer considering AZ factors. for example, with four subnets labeled A, B, c, and D, where A, B, and c are in availability zone 1 and D is in availability zone 2, consider subnets A, B, c, and D for sorting, without considering availability zones 1 and 2.</li> <li> this policy applies to multi-az/subnet but is not applicable to the instancetypes parameter of the launch configuration. selection of multiple models is according to PRIORITY policy.</li> <li> when creating instances according to the PRIORITY policy, ensure the policy for multiple models first, then the policy for multi-az/subnet. for example, with multiple models A and B, and multiple subnets 1, 2, and 3, attempts will be made in the order A1, A2, A3, B1, B2, B3. if A1 is sold out, A2 will be attempted (not B1).</li>.
     * @param string $HealthCheckType <p>Scaling group instance health check type, values are as follows:</p><li>CVM: determine whether an instance is unhealthy based on its network status. an unhealthy network status refers to an event where instances become unreachable via PING. for detailed criteria of judgment, refer to [instance health check](https://www.tencentcloud.comom/document/product/377/8553?from_cn_redirect=1).</li><li>CLB: determine whether an instance is unhealthy based on the health check status of CLB. for the principle of CLB health check, see [health check](https://www.tencentcloud.comom/document/product/214/6097?from_cn_redirect=1).</li>.
     * @param integer $LoadBalancerHealthCheckGracePeriod <p>Specifies the CLB health check grace period in seconds.</p><p>value range: [0, 7200].</p><p>default value: 0.</p>
     * @param string $InstanceAllocationPolicy <p>Instance allocation policy. valid values include LAUNCH_CONFIGURATION and SPOT_MIXED.</p><li> LAUNCH_CONFIGURATION represents the traditional startup CONFIGURATION mode.</li><li> SPOT_MIXED represents the SPOT hybrid mode. currently only support hybrid mode when the LAUNCH CONFIGURATION uses pay-as-you-go billing mode. in hybrid mode, the scaling group will scale out based on the SPOT model. the billing type of the associated LAUNCH CONFIGURATION cannot be modified when using hybrid mode.</li>.
     * @param SpotMixedAllocationPolicy $SpotMixedAllocationPolicy <p>Allocation policy of instances for each billing type in SPOT hybrid mode.<br>available only when InstanceAllocationPolicy is set to SPOT_MIXED.</p>.
     * @param boolean $CapacityRebalance <p>The capacity rebalancing feature is only applicable to spot instances within the scaling group. valid values:</p><li> TRUE: enable this feature. when spot instances within the scaling group are about to be automatically recycled by the spot instance service, AS initiates the termination process of spot instances. if a scale-in hook is configured, trigger before termination. after the termination process starts, AS asynchronously initiates scale-out to reach the expected number of instances.</li> <li> FALSE: disable this feature. AS waits for the spot instance to be terminated before scaling out to reach the number of instances expected by the scaling group.</li>.
     * @param InstanceNameIndexSettings $InstanceNameIndexSettings <P>Instance name sequencing settings. once enabled, append incremental numeric sequence to the names of instances automatically created within the scaling group.</p>.
     * @param HostNameIndexSettings $HostNameIndexSettings <P>Instance hostname sequencing settings. once enabled, append incremental numeric sequence to the hostname of instances automatically created within the scaling group.</p>.
     * @param boolean $ConcurrentScaleOutForDesiredCapacity <p>The concurrent scaling up functionality for matching expected numbers cannot be set when InstanceAllocationPolicy is in spot hybrid mode or when ScalingMode is in the scaling-prioritized startup mode. currently only two matching expected number scale-out activities are supported to run concurrently. other types of activities such as specified quantity scale-out or scale-in cannot be specified. set to FALSE indicates disabled.</p>.
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

        if (array_key_exists("HostNameIndexSettings",$param) and $param["HostNameIndexSettings"] !== null) {
            $this->HostNameIndexSettings = new HostNameIndexSettings();
            $this->HostNameIndexSettings->deserialize($param["HostNameIndexSettings"]);
        }

        if (array_key_exists("ConcurrentScaleOutForDesiredCapacity",$param) and $param["ConcurrentScaleOutForDesiredCapacity"] !== null) {
            $this->ConcurrentScaleOutForDesiredCapacity = $param["ConcurrentScaleOutForDesiredCapacity"];
        }
    }
}
