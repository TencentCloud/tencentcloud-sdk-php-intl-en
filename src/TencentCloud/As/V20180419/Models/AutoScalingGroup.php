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
 * @method string getAutoScalingGroupId() Obtain Auto scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Auto scaling group ID
 * @method string getAutoScalingGroupName() Obtain Auto scaling group name
 * @method void setAutoScalingGroupName(string $AutoScalingGroupName) Set Auto scaling group name
 * @method string getAutoScalingGroupStatus() Obtain Current status of the auto scaling group. Value range: <br><li>NORMAL: normal <br><li>CVM_ABNORMAL: Exception with the launch configuration <br><li>LB_ABNORMAL: exception with the load balancer <br><li>VPC_ABNORMAL: exception with the VPC <br><li>INSUFFICIENT_BALANCE: insufficient balance <br>
 * @method void setAutoScalingGroupStatus(string $AutoScalingGroupStatus) Set Current status of the auto scaling group. Value range: <br><li>NORMAL: normal <br><li>CVM_ABNORMAL: Exception with the launch configuration <br><li>LB_ABNORMAL: exception with the load balancer <br><li>VPC_ABNORMAL: exception with the VPC <br><li>INSUFFICIENT_BALANCE: insufficient balance <br>
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
 * @method integer getIpv6AddressCount() Obtain 
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) Set 
 */

/**
 *Auto scaling group
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
     * @var string Current status of the auto scaling group. Value range: <br><li>NORMAL: normal <br><li>CVM_ABNORMAL: Exception with the launch configuration <br><li>LB_ABNORMAL: exception with the load balancer <br><li>VPC_ABNORMAL: exception with the VPC <br><li>INSUFFICIENT_BALANCE: insufficient balance <br>
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
     * @var integer 
     */
    public $Ipv6AddressCount;
    /**
     * @param string $AutoScalingGroupId Auto scaling group ID
     * @param string $AutoScalingGroupName Auto scaling group name
     * @param string $AutoScalingGroupStatus Current status of the auto scaling group. Value range: <br><li>NORMAL: normal <br><li>CVM_ABNORMAL: Exception with the launch configuration <br><li>LB_ABNORMAL: exception with the load balancer <br><li>VPC_ABNORMAL: exception with the VPC <br><li>INSUFFICIENT_BALANCE: insufficient balance <br>
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
     * @param integer $Ipv6AddressCount 
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
    }
}
