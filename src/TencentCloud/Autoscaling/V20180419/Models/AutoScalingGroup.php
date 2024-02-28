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
 * @method string getAutoScalingGroupStatus() Obtain Current scaling group status. Valid values:<br>
<li>NORMAL: Normal<br>
<li>CVM_ABNORMAL: Abnormal launch configuration<br>
<li>LB_ABNORMAL: Abnormal load balancer<br>
<li>LB_LISTENER_ABNORMAL: Abnormal load balancer listener<br>
<li>LB_LOCATION_ABNORMAL: Abnormal forwarding configuration of the load balancer listener<br>
<li>VPC_ABNORMAL: VPC network error<br>
<li>SUBNET_ABNORMAL: VPC subnet exception<br>
<li>INSUFFICIENT_BALANCE: Insufficient account balance<br>
<li>LB_BACKEND_REGION_NOT_MATCH: The CLB backend and the AS service are not in the same region.<br>
<li>LB_BACKEND_VPC_NOT_MATCH: The CLB instance and the scaling group are not in the same VPC.
 * @method void setAutoScalingGroupStatus(string $AutoScalingGroupStatus) Set Current scaling group status. Valid values:<br>
<li>NORMAL: Normal<br>
<li>CVM_ABNORMAL: Abnormal launch configuration<br>
<li>LB_ABNORMAL: Abnormal load balancer<br>
<li>LB_LISTENER_ABNORMAL: Abnormal load balancer listener<br>
<li>LB_LOCATION_ABNORMAL: Abnormal forwarding configuration of the load balancer listener<br>
<li>VPC_ABNORMAL: VPC network error<br>
<li>SUBNET_ABNORMAL: VPC subnet exception<br>
<li>INSUFFICIENT_BALANCE: Insufficient account balance<br>
<li>LB_BACKEND_REGION_NOT_MATCH: The CLB backend and the AS service are not in the same region.<br>
<li>LB_BACKEND_VPC_NOT_MATCH: The CLB instance and the scaling group are not in the same VPC.
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
 * @method string getMultiZoneSubnetPolicy() Obtain The policy applied when there are multiple availability zones/subnets
<br><li> PRIORITY: when creating instances, choose the availability zone/subnet based on the order in the list from top to bottom. If the first instance is successfully created in the availability zone/subnet of the highest priority, all instances will be created in this availability zone/subnet.
<br><li> EQUALITY: chooses the availability zone/subnet with the least instances for scale-out. This gives each availability zone/subnet an opportunity for scale-out and disperses the instances created during multiple scale-out operations across different availability zones/subnets.
 * @method void setMultiZoneSubnetPolicy(string $MultiZoneSubnetPolicy) Set The policy applied when there are multiple availability zones/subnets
<br><li> PRIORITY: when creating instances, choose the availability zone/subnet based on the order in the list from top to bottom. If the first instance is successfully created in the availability zone/subnet of the highest priority, all instances will be created in this availability zone/subnet.
<br><li> EQUALITY: chooses the availability zone/subnet with the least instances for scale-out. This gives each availability zone/subnet an opportunity for scale-out and disperses the instances created during multiple scale-out operations across different availability zones/subnets.
 * @method string getHealthCheckType() Obtain Health check type of instances in a scaling group.<br><li>CVM: confirm whether an instance is healthy based on the network status. If the pinged instance is unreachable, the instance will be considered unhealthy. For more information, see [Instance Health Check](https://intl.cloud.tencent.com/document/product/377/8553?from_cn_redirect=1)<br><li>CLB: confirm whether an instance is healthy based on the CLB health check status. For more information, see [Health Check Overview](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1).
 * @method void setHealthCheckType(string $HealthCheckType) Set Health check type of instances in a scaling group.<br><li>CVM: confirm whether an instance is healthy based on the network status. If the pinged instance is unreachable, the instance will be considered unhealthy. For more information, see [Instance Health Check](https://intl.cloud.tencent.com/document/product/377/8553?from_cn_redirect=1)<br><li>CLB: confirm whether an instance is healthy based on the CLB health check status. For more information, see [Health Check Overview](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1).
 * @method integer getLoadBalancerHealthCheckGracePeriod() Obtain Grace period of the CLB health check
 * @method void setLoadBalancerHealthCheckGracePeriod(integer $LoadBalancerHealthCheckGracePeriod) Set Grace period of the CLB health check
 * @method string getInstanceAllocationPolicy() Obtain Specifies how to assign instances. Valid values: `LAUNCH_CONFIGURATION` and `SPOT_MIXED`.
<br><li>`LAUNCH_CONFIGURATION`: the launch configuration mode.
<br><li>`SPOT_MIXED`: a mixed instance mode. Currently, this mode is supported only when the launch configuration takes the pay-as-you-go billing mode. With this mode, the scaling group can provision a combination of pay-as-you-go instances and spot instances to meet the configured capacity. Note that the billing mode of the associated launch configuration cannot be modified when this mode is used.
 * @method void setInstanceAllocationPolicy(string $InstanceAllocationPolicy) Set Specifies how to assign instances. Valid values: `LAUNCH_CONFIGURATION` and `SPOT_MIXED`.
<br><li>`LAUNCH_CONFIGURATION`: the launch configuration mode.
<br><li>`SPOT_MIXED`: a mixed instance mode. Currently, this mode is supported only when the launch configuration takes the pay-as-you-go billing mode. With this mode, the scaling group can provision a combination of pay-as-you-go instances and spot instances to meet the configured capacity. Note that the billing mode of the associated launch configuration cannot be modified when this mode is used.
 * @method SpotMixedAllocationPolicy getSpotMixedAllocationPolicy() Obtain Specifies how to assign pay-as-you-go instances and spot instances.
A valid value will be returned only when `InstanceAllocationPolicy` is set to `SPOT_MIXED`.
 * @method void setSpotMixedAllocationPolicy(SpotMixedAllocationPolicy $SpotMixedAllocationPolicy) Set Specifies how to assign pay-as-you-go instances and spot instances.
A valid value will be returned only when `InstanceAllocationPolicy` is set to `SPOT_MIXED`.
 * @method boolean getCapacityRebalance() Obtain Indicates whether the capacity rebalancing feature is enabled. This parameter is only valid for spot instances in the scaling group. Valid values:
<br><li>`TRUE`: yes. Before the spot instances in the scaling group are about to be automatically repossessed, AS will terminate them. The scale-in hook (if configured) will take effect before the termination. After the termination process starts, AS will asynchronously initiate a scaling activity to meet the desired capacity.
<br><li>`FALSE`: no. AS will add instances to meet the desired capacity only after the spot instances are terminated.
 * @method void setCapacityRebalance(boolean $CapacityRebalance) Set Indicates whether the capacity rebalancing feature is enabled. This parameter is only valid for spot instances in the scaling group. Valid values:
<br><li>`TRUE`: yes. Before the spot instances in the scaling group are about to be automatically repossessed, AS will terminate them. The scale-in hook (if configured) will take effect before the termination. After the termination process starts, AS will asynchronously initiate a scaling activity to meet the desired capacity.
<br><li>`FALSE`: no. AS will add instances to meet the desired capacity only after the spot instances are terminated.
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
     * @var string Current scaling group status. Valid values:<br>
<li>NORMAL: Normal<br>
<li>CVM_ABNORMAL: Abnormal launch configuration<br>
<li>LB_ABNORMAL: Abnormal load balancer<br>
<li>LB_LISTENER_ABNORMAL: Abnormal load balancer listener<br>
<li>LB_LOCATION_ABNORMAL: Abnormal forwarding configuration of the load balancer listener<br>
<li>VPC_ABNORMAL: VPC network error<br>
<li>SUBNET_ABNORMAL: VPC subnet exception<br>
<li>INSUFFICIENT_BALANCE: Insufficient account balance<br>
<li>LB_BACKEND_REGION_NOT_MATCH: The CLB backend and the AS service are not in the same region.<br>
<li>LB_BACKEND_VPC_NOT_MATCH: The CLB instance and the scaling group are not in the same VPC.
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
     * @var string The policy applied when there are multiple availability zones/subnets
<br><li> PRIORITY: when creating instances, choose the availability zone/subnet based on the order in the list from top to bottom. If the first instance is successfully created in the availability zone/subnet of the highest priority, all instances will be created in this availability zone/subnet.
<br><li> EQUALITY: chooses the availability zone/subnet with the least instances for scale-out. This gives each availability zone/subnet an opportunity for scale-out and disperses the instances created during multiple scale-out operations across different availability zones/subnets.
     */
    public $MultiZoneSubnetPolicy;

    /**
     * @var string Health check type of instances in a scaling group.<br><li>CVM: confirm whether an instance is healthy based on the network status. If the pinged instance is unreachable, the instance will be considered unhealthy. For more information, see [Instance Health Check](https://intl.cloud.tencent.com/document/product/377/8553?from_cn_redirect=1)<br><li>CLB: confirm whether an instance is healthy based on the CLB health check status. For more information, see [Health Check Overview](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1).
     */
    public $HealthCheckType;

    /**
     * @var integer Grace period of the CLB health check
     */
    public $LoadBalancerHealthCheckGracePeriod;

    /**
     * @var string Specifies how to assign instances. Valid values: `LAUNCH_CONFIGURATION` and `SPOT_MIXED`.
<br><li>`LAUNCH_CONFIGURATION`: the launch configuration mode.
<br><li>`SPOT_MIXED`: a mixed instance mode. Currently, this mode is supported only when the launch configuration takes the pay-as-you-go billing mode. With this mode, the scaling group can provision a combination of pay-as-you-go instances and spot instances to meet the configured capacity. Note that the billing mode of the associated launch configuration cannot be modified when this mode is used.
     */
    public $InstanceAllocationPolicy;

    /**
     * @var SpotMixedAllocationPolicy Specifies how to assign pay-as-you-go instances and spot instances.
A valid value will be returned only when `InstanceAllocationPolicy` is set to `SPOT_MIXED`.
     */
    public $SpotMixedAllocationPolicy;

    /**
     * @var boolean Indicates whether the capacity rebalancing feature is enabled. This parameter is only valid for spot instances in the scaling group. Valid values:
<br><li>`TRUE`: yes. Before the spot instances in the scaling group are about to be automatically repossessed, AS will terminate them. The scale-in hook (if configured) will take effect before the termination. After the termination process starts, AS will asynchronously initiate a scaling activity to meet the desired capacity.
<br><li>`FALSE`: no. AS will add instances to meet the desired capacity only after the spot instances are terminated.
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
     * @param string $AutoScalingGroupStatus Current scaling group status. Valid values:<br>
<li>NORMAL: Normal<br>
<li>CVM_ABNORMAL: Abnormal launch configuration<br>
<li>LB_ABNORMAL: Abnormal load balancer<br>
<li>LB_LISTENER_ABNORMAL: Abnormal load balancer listener<br>
<li>LB_LOCATION_ABNORMAL: Abnormal forwarding configuration of the load balancer listener<br>
<li>VPC_ABNORMAL: VPC network error<br>
<li>SUBNET_ABNORMAL: VPC subnet exception<br>
<li>INSUFFICIENT_BALANCE: Insufficient account balance<br>
<li>LB_BACKEND_REGION_NOT_MATCH: The CLB backend and the AS service are not in the same region.<br>
<li>LB_BACKEND_VPC_NOT_MATCH: The CLB instance and the scaling group are not in the same VPC.
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
     * @param string $MultiZoneSubnetPolicy The policy applied when there are multiple availability zones/subnets
<br><li> PRIORITY: when creating instances, choose the availability zone/subnet based on the order in the list from top to bottom. If the first instance is successfully created in the availability zone/subnet of the highest priority, all instances will be created in this availability zone/subnet.
<br><li> EQUALITY: chooses the availability zone/subnet with the least instances for scale-out. This gives each availability zone/subnet an opportunity for scale-out and disperses the instances created during multiple scale-out operations across different availability zones/subnets.
     * @param string $HealthCheckType Health check type of instances in a scaling group.<br><li>CVM: confirm whether an instance is healthy based on the network status. If the pinged instance is unreachable, the instance will be considered unhealthy. For more information, see [Instance Health Check](https://intl.cloud.tencent.com/document/product/377/8553?from_cn_redirect=1)<br><li>CLB: confirm whether an instance is healthy based on the CLB health check status. For more information, see [Health Check Overview](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1).
     * @param integer $LoadBalancerHealthCheckGracePeriod Grace period of the CLB health check
     * @param string $InstanceAllocationPolicy Specifies how to assign instances. Valid values: `LAUNCH_CONFIGURATION` and `SPOT_MIXED`.
<br><li>`LAUNCH_CONFIGURATION`: the launch configuration mode.
<br><li>`SPOT_MIXED`: a mixed instance mode. Currently, this mode is supported only when the launch configuration takes the pay-as-you-go billing mode. With this mode, the scaling group can provision a combination of pay-as-you-go instances and spot instances to meet the configured capacity. Note that the billing mode of the associated launch configuration cannot be modified when this mode is used.
     * @param SpotMixedAllocationPolicy $SpotMixedAllocationPolicy Specifies how to assign pay-as-you-go instances and spot instances.
A valid value will be returned only when `InstanceAllocationPolicy` is set to `SPOT_MIXED`.
     * @param boolean $CapacityRebalance Indicates whether the capacity rebalancing feature is enabled. This parameter is only valid for spot instances in the scaling group. Valid values:
<br><li>`TRUE`: yes. Before the spot instances in the scaling group are about to be automatically repossessed, AS will terminate them. The scale-in hook (if configured) will take effect before the termination. After the termination process starts, AS will asynchronously initiate a scaling activity to meet the desired capacity.
<br><li>`FALSE`: no. AS will add instances to meet the desired capacity only after the spot instances are terminated.
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
