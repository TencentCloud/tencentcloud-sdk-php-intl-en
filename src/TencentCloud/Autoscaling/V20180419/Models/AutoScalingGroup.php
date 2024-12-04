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
 * Auto scaling group
 *
 * @method string getAutoScalingGroupId() Obtain Auto scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Auto scaling group ID
 * @method string getAutoScalingGroupName() Obtain Auto scaling group name
 * @method void setAutoScalingGroupName(string $AutoScalingGroupName) Set Auto scaling group name
 * @method string getAutoScalingGroupStatus() Obtain Current status of the scaling group. Valid values:
<li>NORMAL: The scaling group is normal.</li>
<li>CVM_ABNORMAL: The launch configuration is abnormal.</li>
<li>LB_ABNORMAL: The CLB is abnormal.</li>
<li>LB_LISTENER_ABNORMAL: The CLB listener is abnormal.</li>
<li>LB_LOCATION_ABNORMAL: The forwarding configuration of the CLB listener is abnormal.</li>
<li>VPC_ABNORMAL: The VPC is abnormal.</li>
<li>SUBNET_ABNORMAL: The VPC subnet is abnormal.</li>
<li>INSUFFICIENT_BALANCE: The balance is insufficient.</li>
<li>LB_BACKEND_REGION_NOT_MATCH: The region of the CLB instance backend does not match that of the AS service.</li>
<li>LB_BACKEND_VPC_NOT_MATCH: The VPC of the CLB instance does not match that of the scaling group.</li>
 * @method void setAutoScalingGroupStatus(string $AutoScalingGroupStatus) Set Current status of the scaling group. Valid values:
<li>NORMAL: The scaling group is normal.</li>
<li>CVM_ABNORMAL: The launch configuration is abnormal.</li>
<li>LB_ABNORMAL: The CLB is abnormal.</li>
<li>LB_LISTENER_ABNORMAL: The CLB listener is abnormal.</li>
<li>LB_LOCATION_ABNORMAL: The forwarding configuration of the CLB listener is abnormal.</li>
<li>VPC_ABNORMAL: The VPC is abnormal.</li>
<li>SUBNET_ABNORMAL: The VPC subnet is abnormal.</li>
<li>INSUFFICIENT_BALANCE: The balance is insufficient.</li>
<li>LB_BACKEND_REGION_NOT_MATCH: The region of the CLB instance backend does not match that of the AS service.</li>
<li>LB_BACKEND_VPC_NOT_MATCH: The VPC of the CLB instance does not match that of the scaling group.</li>
 * @method string getCreatedTime() Obtain Creation time in UTC format
 * @method void setCreatedTime(string $CreatedTime) Set Creation time in UTC format
 * @method integer getDefaultCooldown() Obtain Default cooldown period in seconds
 * @method void setDefaultCooldown(integer $DefaultCooldown) Set Default cooldown period in seconds
 * @method integer getDesiredCapacity() Obtain Desired number of instances
 * @method void setDesiredCapacity(integer $DesiredCapacity) Set Desired number of instances
 * @method string getEnabledStatus() Obtain Enabled status. Value range: `ENABLED`, `DISABLED`
 * @method void setEnabledStatus(string $EnabledStatus) Set Enabled status. Value range: `ENABLED`, `DISABLED`
 * @method array getForwardLoadBalancerSet() Obtain List of application load balancers
 * @method void setForwardLoadBalancerSet(array $ForwardLoadBalancerSet) Set List of application load balancers
 * @method integer getInstanceCount() Obtain Number of instances
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances
 * @method integer getInServiceInstanceCount() Obtain Number of instances in `IN_SERVICE` status
 * @method void setInServiceInstanceCount(integer $InServiceInstanceCount) Set Number of instances in `IN_SERVICE` status
 * @method string getLaunchConfigurationId() Obtain Launch configuration ID
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) Set Launch configuration ID
 * @method string getLaunchConfigurationName() Obtain Launch configuration name
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) Set Launch configuration name
 * @method array getLoadBalancerIdSet() Obtain List of Classic load balancer IDs
 * @method void setLoadBalancerIdSet(array $LoadBalancerIdSet) Set List of Classic load balancer IDs
 * @method integer getMaxSize() Obtain Maximum number of instances
 * @method void setMaxSize(integer $MaxSize) Set Maximum number of instances
 * @method integer getMinSize() Obtain Minimum number of instances
 * @method void setMinSize(integer $MinSize) Set Minimum number of instances
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method array getSubnetIdSet() Obtain List of subnet IDs
 * @method void setSubnetIdSet(array $SubnetIdSet) Set List of subnet IDs
 * @method array getTerminationPolicySet() Obtain Termination policy
 * @method void setTerminationPolicySet(array $TerminationPolicySet) Set Termination policy
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method array getZoneSet() Obtain List of availability zones
 * @method void setZoneSet(array $ZoneSet) Set List of availability zones
 * @method string getRetryPolicy() Obtain Retry policy
 * @method void setRetryPolicy(string $RetryPolicy) Set Retry policy
 * @method string getInActivityStatus() Obtain Whether the auto scaling group is performing a scaling activity. `IN_ACTIVITY` indicates yes, and `NOT_IN_ACTIVITY` indicates no.
 * @method void setInActivityStatus(string $InActivityStatus) Set Whether the auto scaling group is performing a scaling activity. `IN_ACTIVITY` indicates yes, and `NOT_IN_ACTIVITY` indicates no.
 * @method array getTags() Obtain List of auto scaling group tags
 * @method void setTags(array $Tags) Set List of auto scaling group tags
 * @method ServiceSettings getServiceSettings() Obtain Service settings
 * @method void setServiceSettings(ServiceSettings $ServiceSettings) Set Service settings
 * @method integer getIpv6AddressCount() Obtain The number of IPv6 addresses that an instance has.
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) Set The number of IPv6 addresses that an instance has.
 * @method string getMultiZoneSubnetPolicy() Obtain Multi-AZ/subnet policy.
<li>PRIORITY: The instances are attempted to be created taking the order of the AZ/subnet list as the priority. If the highest-priority AZ/subnet can create instances successfully, instances can always be created in that AZ/subnet.</li>
<li>EQUALITY: Select the AZ/subnet with the least number of instances for scale-out. In this way, each AZ/subnet has an opportunity for scale-out. Instances produced from multiple scale-out operations will be distributed to multiple AZs/subnets.</li>
 * @method void setMultiZoneSubnetPolicy(string $MultiZoneSubnetPolicy) Set Multi-AZ/subnet policy.
<li>PRIORITY: The instances are attempted to be created taking the order of the AZ/subnet list as the priority. If the highest-priority AZ/subnet can create instances successfully, instances can always be created in that AZ/subnet.</li>
<li>EQUALITY: Select the AZ/subnet with the least number of instances for scale-out. In this way, each AZ/subnet has an opportunity for scale-out. Instances produced from multiple scale-out operations will be distributed to multiple AZs/subnets.</li>
 * @method string getHealthCheckType() Obtain Scaling group instance health check type, whose valid values include:
<li>CVM: Determine whether an instance is unhealthy based on its network status. An unhealthy network status is indicated by an event where instances become unreachable via PING. Detailed criteria of judgment can be found in [Instance Health Check](https://intl.cloud.tencent.com/document/product/377/8553?from_cn_redirect=1).</li>
<li>CLB: Determine whether an instance is unhealthy based on the health check status of CLB. For principles behind CLB health checks, see [Health Check](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1).</li>
 * @method void setHealthCheckType(string $HealthCheckType) Set Scaling group instance health check type, whose valid values include:
<li>CVM: Determine whether an instance is unhealthy based on its network status. An unhealthy network status is indicated by an event where instances become unreachable via PING. Detailed criteria of judgment can be found in [Instance Health Check](https://intl.cloud.tencent.com/document/product/377/8553?from_cn_redirect=1).</li>
<li>CLB: Determine whether an instance is unhealthy based on the health check status of CLB. For principles behind CLB health checks, see [Health Check](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1).</li>
 * @method integer getLoadBalancerHealthCheckGracePeriod() Obtain Grace period of the CLB health check
 * @method void setLoadBalancerHealthCheckGracePeriod(integer $LoadBalancerHealthCheckGracePeriod) Set Grace period of the CLB health check
 * @method string getInstanceAllocationPolicy() Obtain Instance assignment policy, whose valid values include LAUNCH_CONFIGURATION and SPOT_MIXED.
<li>LAUNCH_CONFIGURATION: Represent the traditional mode of assigning instances according to the launch configuration.</li>
<li>SPOT_MIXED: Represent the spot mixed mode. Currently, this mode is supported only when the launch configuration is set to the pay-as-you-go billing mode. In the mixed mode, the scaling group will scale out pay-as-you-go models or spot models based on the predefined settings. When the mixed mode is used, the billing type of the associated launch configuration cannot be modified.</li>
 * @method void setInstanceAllocationPolicy(string $InstanceAllocationPolicy) Set Instance assignment policy, whose valid values include LAUNCH_CONFIGURATION and SPOT_MIXED.
<li>LAUNCH_CONFIGURATION: Represent the traditional mode of assigning instances according to the launch configuration.</li>
<li>SPOT_MIXED: Represent the spot mixed mode. Currently, this mode is supported only when the launch configuration is set to the pay-as-you-go billing mode. In the mixed mode, the scaling group will scale out pay-as-you-go models or spot models based on the predefined settings. When the mixed mode is used, the billing type of the associated launch configuration cannot be modified.</li>
 * @method SpotMixedAllocationPolicy getSpotMixedAllocationPolicy() Obtain Specifies how to assign pay-as-you-go instances and spot instances.
A valid value will be returned only when `InstanceAllocationPolicy` is set to `SPOT_MIXED`.
 * @method void setSpotMixedAllocationPolicy(SpotMixedAllocationPolicy $SpotMixedAllocationPolicy) Set Specifies how to assign pay-as-you-go instances and spot instances.
A valid value will be returned only when `InstanceAllocationPolicy` is set to `SPOT_MIXED`.
 * @method boolean getCapacityRebalance() Obtain Capacity rebalancing feature, which is applicable only to spot instances within the scaling group. Valid values:
<li>TRUE: Enable this feature. When spot instances in the scaling group are about to be automatically recycled by the spot instance service, AS proactively initiates the termination process of the spot instances. If there is a configured scale-in hook, it will be triggered before termination. After the termination process starts, AS asynchronously initiates the scale-out to reach the expected number of instances.</li>
<li>FALSE: Disable this feature. AS waits for the spot instance to be terminated before scaling out to reach the number of instances expected by the scaling group.</li>
 * @method void setCapacityRebalance(boolean $CapacityRebalance) Set Capacity rebalancing feature, which is applicable only to spot instances within the scaling group. Valid values:
<li>TRUE: Enable this feature. When spot instances in the scaling group are about to be automatically recycled by the spot instance service, AS proactively initiates the termination process of the spot instances. If there is a configured scale-in hook, it will be triggered before termination. After the termination process starts, AS asynchronously initiates the scale-out to reach the expected number of instances.</li>
<li>FALSE: Disable this feature. AS waits for the spot instance to be terminated before scaling out to reach the number of instances expected by the scaling group.</li>
 * @method InstanceNameIndexSettings getInstanceNameIndexSettings() Obtain Instance name sequencing settings.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceNameIndexSettings(InstanceNameIndexSettings $InstanceNameIndexSettings) Set Instance name sequencing settings.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class AutoScalingGroup extends AbstractModel
{
    /**
     * @var string Auto scaling group ID
     */
    public $AutoScalingGroupId;

    /**
     * @var string Auto scaling group name
     */
    public $AutoScalingGroupName;

    /**
     * @var string Current status of the scaling group. Valid values:
<li>NORMAL: The scaling group is normal.</li>
<li>CVM_ABNORMAL: The launch configuration is abnormal.</li>
<li>LB_ABNORMAL: The CLB is abnormal.</li>
<li>LB_LISTENER_ABNORMAL: The CLB listener is abnormal.</li>
<li>LB_LOCATION_ABNORMAL: The forwarding configuration of the CLB listener is abnormal.</li>
<li>VPC_ABNORMAL: The VPC is abnormal.</li>
<li>SUBNET_ABNORMAL: The VPC subnet is abnormal.</li>
<li>INSUFFICIENT_BALANCE: The balance is insufficient.</li>
<li>LB_BACKEND_REGION_NOT_MATCH: The region of the CLB instance backend does not match that of the AS service.</li>
<li>LB_BACKEND_VPC_NOT_MATCH: The VPC of the CLB instance does not match that of the scaling group.</li>
     */
    public $AutoScalingGroupStatus;

    /**
     * @var string Creation time in UTC format
     */
    public $CreatedTime;

    /**
     * @var integer Default cooldown period in seconds
     */
    public $DefaultCooldown;

    /**
     * @var integer Desired number of instances
     */
    public $DesiredCapacity;

    /**
     * @var string Enabled status. Value range: `ENABLED`, `DISABLED`
     */
    public $EnabledStatus;

    /**
     * @var array List of application load balancers
     */
    public $ForwardLoadBalancerSet;

    /**
     * @var integer Number of instances
     */
    public $InstanceCount;

    /**
     * @var integer Number of instances in `IN_SERVICE` status
     */
    public $InServiceInstanceCount;

    /**
     * @var string Launch configuration ID
     */
    public $LaunchConfigurationId;

    /**
     * @var string Launch configuration name
     */
    public $LaunchConfigurationName;

    /**
     * @var array List of Classic load balancer IDs
     */
    public $LoadBalancerIdSet;

    /**
     * @var integer Maximum number of instances
     */
    public $MaxSize;

    /**
     * @var integer Minimum number of instances
     */
    public $MinSize;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var array List of subnet IDs
     */
    public $SubnetIdSet;

    /**
     * @var array Termination policy
     */
    public $TerminationPolicySet;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var array List of availability zones
     */
    public $ZoneSet;

    /**
     * @var string Retry policy
     */
    public $RetryPolicy;

    /**
     * @var string Whether the auto scaling group is performing a scaling activity. `IN_ACTIVITY` indicates yes, and `NOT_IN_ACTIVITY` indicates no.
     */
    public $InActivityStatus;

    /**
     * @var array List of auto scaling group tags
     */
    public $Tags;

    /**
     * @var ServiceSettings Service settings
     */
    public $ServiceSettings;

    /**
     * @var integer The number of IPv6 addresses that an instance has.
     */
    public $Ipv6AddressCount;

    /**
     * @var string Multi-AZ/subnet policy.
<li>PRIORITY: The instances are attempted to be created taking the order of the AZ/subnet list as the priority. If the highest-priority AZ/subnet can create instances successfully, instances can always be created in that AZ/subnet.</li>
<li>EQUALITY: Select the AZ/subnet with the least number of instances for scale-out. In this way, each AZ/subnet has an opportunity for scale-out. Instances produced from multiple scale-out operations will be distributed to multiple AZs/subnets.</li>
     */
    public $MultiZoneSubnetPolicy;

    /**
     * @var string Scaling group instance health check type, whose valid values include:
<li>CVM: Determine whether an instance is unhealthy based on its network status. An unhealthy network status is indicated by an event where instances become unreachable via PING. Detailed criteria of judgment can be found in [Instance Health Check](https://intl.cloud.tencent.com/document/product/377/8553?from_cn_redirect=1).</li>
<li>CLB: Determine whether an instance is unhealthy based on the health check status of CLB. For principles behind CLB health checks, see [Health Check](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1).</li>
     */
    public $HealthCheckType;

    /**
     * @var integer Grace period of the CLB health check
     */
    public $LoadBalancerHealthCheckGracePeriod;

    /**
     * @var string Instance assignment policy, whose valid values include LAUNCH_CONFIGURATION and SPOT_MIXED.
<li>LAUNCH_CONFIGURATION: Represent the traditional mode of assigning instances according to the launch configuration.</li>
<li>SPOT_MIXED: Represent the spot mixed mode. Currently, this mode is supported only when the launch configuration is set to the pay-as-you-go billing mode. In the mixed mode, the scaling group will scale out pay-as-you-go models or spot models based on the predefined settings. When the mixed mode is used, the billing type of the associated launch configuration cannot be modified.</li>
     */
    public $InstanceAllocationPolicy;

    /**
     * @var SpotMixedAllocationPolicy Specifies how to assign pay-as-you-go instances and spot instances.
A valid value will be returned only when `InstanceAllocationPolicy` is set to `SPOT_MIXED`.
     */
    public $SpotMixedAllocationPolicy;

    /**
     * @var boolean Capacity rebalancing feature, which is applicable only to spot instances within the scaling group. Valid values:
<li>TRUE: Enable this feature. When spot instances in the scaling group are about to be automatically recycled by the spot instance service, AS proactively initiates the termination process of the spot instances. If there is a configured scale-in hook, it will be triggered before termination. After the termination process starts, AS asynchronously initiates the scale-out to reach the expected number of instances.</li>
<li>FALSE: Disable this feature. AS waits for the spot instance to be terminated before scaling out to reach the number of instances expected by the scaling group.</li>
     */
    public $CapacityRebalance;

    /**
     * @var InstanceNameIndexSettings Instance name sequencing settings.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceNameIndexSettings;

    /**
     * @param string $AutoScalingGroupId Auto scaling group ID
     * @param string $AutoScalingGroupName Auto scaling group name
     * @param string $AutoScalingGroupStatus Current status of the scaling group. Valid values:
<li>NORMAL: The scaling group is normal.</li>
<li>CVM_ABNORMAL: The launch configuration is abnormal.</li>
<li>LB_ABNORMAL: The CLB is abnormal.</li>
<li>LB_LISTENER_ABNORMAL: The CLB listener is abnormal.</li>
<li>LB_LOCATION_ABNORMAL: The forwarding configuration of the CLB listener is abnormal.</li>
<li>VPC_ABNORMAL: The VPC is abnormal.</li>
<li>SUBNET_ABNORMAL: The VPC subnet is abnormal.</li>
<li>INSUFFICIENT_BALANCE: The balance is insufficient.</li>
<li>LB_BACKEND_REGION_NOT_MATCH: The region of the CLB instance backend does not match that of the AS service.</li>
<li>LB_BACKEND_VPC_NOT_MATCH: The VPC of the CLB instance does not match that of the scaling group.</li>
     * @param string $CreatedTime Creation time in UTC format
     * @param integer $DefaultCooldown Default cooldown period in seconds
     * @param integer $DesiredCapacity Desired number of instances
     * @param string $EnabledStatus Enabled status. Value range: `ENABLED`, `DISABLED`
     * @param array $ForwardLoadBalancerSet List of application load balancers
     * @param integer $InstanceCount Number of instances
     * @param integer $InServiceInstanceCount Number of instances in `IN_SERVICE` status
     * @param string $LaunchConfigurationId Launch configuration ID
     * @param string $LaunchConfigurationName Launch configuration name
     * @param array $LoadBalancerIdSet List of Classic load balancer IDs
     * @param integer $MaxSize Maximum number of instances
     * @param integer $MinSize Minimum number of instances
     * @param integer $ProjectId Project ID
     * @param array $SubnetIdSet List of subnet IDs
     * @param array $TerminationPolicySet Termination policy
     * @param string $VpcId VPC ID
     * @param array $ZoneSet List of availability zones
     * @param string $RetryPolicy Retry policy
     * @param string $InActivityStatus Whether the auto scaling group is performing a scaling activity. `IN_ACTIVITY` indicates yes, and `NOT_IN_ACTIVITY` indicates no.
     * @param array $Tags List of auto scaling group tags
     * @param ServiceSettings $ServiceSettings Service settings
     * @param integer $Ipv6AddressCount The number of IPv6 addresses that an instance has.
     * @param string $MultiZoneSubnetPolicy Multi-AZ/subnet policy.
<li>PRIORITY: The instances are attempted to be created taking the order of the AZ/subnet list as the priority. If the highest-priority AZ/subnet can create instances successfully, instances can always be created in that AZ/subnet.</li>
<li>EQUALITY: Select the AZ/subnet with the least number of instances for scale-out. In this way, each AZ/subnet has an opportunity for scale-out. Instances produced from multiple scale-out operations will be distributed to multiple AZs/subnets.</li>
     * @param string $HealthCheckType Scaling group instance health check type, whose valid values include:
<li>CVM: Determine whether an instance is unhealthy based on its network status. An unhealthy network status is indicated by an event where instances become unreachable via PING. Detailed criteria of judgment can be found in [Instance Health Check](https://intl.cloud.tencent.com/document/product/377/8553?from_cn_redirect=1).</li>
<li>CLB: Determine whether an instance is unhealthy based on the health check status of CLB. For principles behind CLB health checks, see [Health Check](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1).</li>
     * @param integer $LoadBalancerHealthCheckGracePeriod Grace period of the CLB health check
     * @param string $InstanceAllocationPolicy Instance assignment policy, whose valid values include LAUNCH_CONFIGURATION and SPOT_MIXED.
<li>LAUNCH_CONFIGURATION: Represent the traditional mode of assigning instances according to the launch configuration.</li>
<li>SPOT_MIXED: Represent the spot mixed mode. Currently, this mode is supported only when the launch configuration is set to the pay-as-you-go billing mode. In the mixed mode, the scaling group will scale out pay-as-you-go models or spot models based on the predefined settings. When the mixed mode is used, the billing type of the associated launch configuration cannot be modified.</li>
     * @param SpotMixedAllocationPolicy $SpotMixedAllocationPolicy Specifies how to assign pay-as-you-go instances and spot instances.
A valid value will be returned only when `InstanceAllocationPolicy` is set to `SPOT_MIXED`.
     * @param boolean $CapacityRebalance Capacity rebalancing feature, which is applicable only to spot instances within the scaling group. Valid values:
<li>TRUE: Enable this feature. When spot instances in the scaling group are about to be automatically recycled by the spot instance service, AS proactively initiates the termination process of the spot instances. If there is a configured scale-in hook, it will be triggered before termination. After the termination process starts, AS asynchronously initiates the scale-out to reach the expected number of instances.</li>
<li>FALSE: Disable this feature. AS waits for the spot instance to be terminated before scaling out to reach the number of instances expected by the scaling group.</li>
     * @param InstanceNameIndexSettings $InstanceNameIndexSettings Instance name sequencing settings.
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("AutoScalingGroupStatus",$param) and $param["AutoScalingGroupStatus"] !== null) {
            $this->AutoScalingGroupStatus = $param["AutoScalingGroupStatus"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("DefaultCooldown",$param) and $param["DefaultCooldown"] !== null) {
            $this->DefaultCooldown = $param["DefaultCooldown"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("EnabledStatus",$param) and $param["EnabledStatus"] !== null) {
            $this->EnabledStatus = $param["EnabledStatus"];
        }

        if (array_key_exists("ForwardLoadBalancerSet",$param) and $param["ForwardLoadBalancerSet"] !== null) {
            $this->ForwardLoadBalancerSet = [];
            foreach ($param["ForwardLoadBalancerSet"] as $key => $value){
                $obj = new ForwardLoadBalancer();
                $obj->deserialize($value);
                array_push($this->ForwardLoadBalancerSet, $obj);
            }
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("InServiceInstanceCount",$param) and $param["InServiceInstanceCount"] !== null) {
            $this->InServiceInstanceCount = $param["InServiceInstanceCount"];
        }

        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("LaunchConfigurationName",$param) and $param["LaunchConfigurationName"] !== null) {
            $this->LaunchConfigurationName = $param["LaunchConfigurationName"];
        }

        if (array_key_exists("LoadBalancerIdSet",$param) and $param["LoadBalancerIdSet"] !== null) {
            $this->LoadBalancerIdSet = $param["LoadBalancerIdSet"];
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

        if (array_key_exists("SubnetIdSet",$param) and $param["SubnetIdSet"] !== null) {
            $this->SubnetIdSet = $param["SubnetIdSet"];
        }

        if (array_key_exists("TerminationPolicySet",$param) and $param["TerminationPolicySet"] !== null) {
            $this->TerminationPolicySet = $param["TerminationPolicySet"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ZoneSet",$param) and $param["ZoneSet"] !== null) {
            $this->ZoneSet = $param["ZoneSet"];
        }

        if (array_key_exists("RetryPolicy",$param) and $param["RetryPolicy"] !== null) {
            $this->RetryPolicy = $param["RetryPolicy"];
        }

        if (array_key_exists("InActivityStatus",$param) and $param["InActivityStatus"] !== null) {
            $this->InActivityStatus = $param["InActivityStatus"];
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
