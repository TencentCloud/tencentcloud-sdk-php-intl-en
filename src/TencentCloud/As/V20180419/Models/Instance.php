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
 * Instance information
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getAutoScalingGroupId() Obtain Auto scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Auto scaling group ID
 * @method string getLaunchConfigurationId() Obtain Launch configuration ID
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) Set Launch configuration ID
 * @method string getLaunchConfigurationName() Obtain Launch configuration name
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) Set Launch configuration name
 * @method string getLifeCycleState() Obtain Lifecycle status. Valid values:<br>
<li>`IN_SERVICE`: The instance is running.
<li>`CREATING`: The instance is being created.
<li>`CREATION_FAILED`: The instance fails to be created.
<li>`TERMINATING`: The instance is being terminated.
<li>`TERMINATION_FAILED`: The instance fails to be terminated.
<li>`ATTACHING`: The instance is being bound.
<li>`ATTACH_FAILED`: The instance fails to be bound.
<li>`DETACHING`: The instance is being unbound.
<li>`DETACH_FAILED`: The instance fails to be unbound.
<li>`ATTACHING_LB`: The LB is being bound.
<li>DETACHING_LB: The LB is being unbound.
<li>`MODIFYING_LB`: The LB is being modified.
<li>`STARTING`: The instance is being started up.
<li>`START_FAILED`: The instance fails to be started up.
<li>`STOPPING`: The instance is being shut down.
<li>`STOP_FAILED`: The instance fails to be shut down.
<li>`STOPPED`: The instance is shut down.
<li>`IN_LAUNCHING_HOOK`: The lifecycle hook is being scaled out.
<li>`IN_TERMINATING_HOOK`: The lifecycle hook is being scaled in.
 * @method void setLifeCycleState(string $LifeCycleState) Set Lifecycle status. Valid values:<br>
<li>`IN_SERVICE`: The instance is running.
<li>`CREATING`: The instance is being created.
<li>`CREATION_FAILED`: The instance fails to be created.
<li>`TERMINATING`: The instance is being terminated.
<li>`TERMINATION_FAILED`: The instance fails to be terminated.
<li>`ATTACHING`: The instance is being bound.
<li>`ATTACH_FAILED`: The instance fails to be bound.
<li>`DETACHING`: The instance is being unbound.
<li>`DETACH_FAILED`: The instance fails to be unbound.
<li>`ATTACHING_LB`: The LB is being bound.
<li>DETACHING_LB: The LB is being unbound.
<li>`MODIFYING_LB`: The LB is being modified.
<li>`STARTING`: The instance is being started up.
<li>`START_FAILED`: The instance fails to be started up.
<li>`STOPPING`: The instance is being shut down.
<li>`STOP_FAILED`: The instance fails to be shut down.
<li>`STOPPED`: The instance is shut down.
<li>`IN_LAUNCHING_HOOK`: The lifecycle hook is being scaled out.
<li>`IN_TERMINATING_HOOK`: The lifecycle hook is being scaled in.
 * @method string getHealthStatus() Obtain Health status. Value range: HEALTHY, UNHEALTHY
 * @method void setHealthStatus(string $HealthStatus) Set Health status. Value range: HEALTHY, UNHEALTHY
 * @method boolean getProtectedFromScaleIn() Obtain Whether to add scale-in protection
 * @method void setProtectedFromScaleIn(boolean $ProtectedFromScaleIn) Set Whether to add scale-in protection
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 * @method string getCreationType() Obtain Creation type. Value range: AUTO_CREATION, MANUAL_ATTACHING.
 * @method void setCreationType(string $CreationType) Set Creation type. Value range: AUTO_CREATION, MANUAL_ATTACHING.
 * @method string getAddTime() Obtain Instance addition time
 * @method void setAddTime(string $AddTime) Set Instance addition time
 * @method string getInstanceType() Obtain Instance type
 * @method void setInstanceType(string $InstanceType) Set Instance type
 * @method integer getVersionNumber() Obtain Version number
 * @method void setVersionNumber(integer $VersionNumber) Set Version number
 * @method string getAutoScalingGroupName() Obtain Auto scaling group name
 * @method void setAutoScalingGroupName(string $AutoScalingGroupName) Set Auto scaling group name
 * @method string getWarmupStatus() Obtain Warming up status. Valid values:
<li>`WAITING_ENTER_WARMUP`: The instance is waiting to be warmed up.
<li>`NO_NEED_WARMUP`: Warming up is not required.
<li>`IN_WARMUP`: The instance is being warmed up.
<li>`AFTER_WARMUP`: Warming up is completed.
 * @method void setWarmupStatus(string $WarmupStatus) Set Warming up status. Valid values:
<li>`WAITING_ENTER_WARMUP`: The instance is waiting to be warmed up.
<li>`NO_NEED_WARMUP`: Warming up is not required.
<li>`IN_WARMUP`: The instance is being warmed up.
<li>`AFTER_WARMUP`: Warming up is completed.
 * @method array getDisasterRecoverGroupIds() Obtain Placement group ID. Only one is allowed.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set Placement group ID. Only one is allowed.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class Instance extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Auto scaling group ID
     */
    public $AutoScalingGroupId;

    /**
     * @var string Launch configuration ID
     */
    public $LaunchConfigurationId;

    /**
     * @var string Launch configuration name
     */
    public $LaunchConfigurationName;

    /**
     * @var string Lifecycle status. Valid values:<br>
<li>`IN_SERVICE`: The instance is running.
<li>`CREATING`: The instance is being created.
<li>`CREATION_FAILED`: The instance fails to be created.
<li>`TERMINATING`: The instance is being terminated.
<li>`TERMINATION_FAILED`: The instance fails to be terminated.
<li>`ATTACHING`: The instance is being bound.
<li>`ATTACH_FAILED`: The instance fails to be bound.
<li>`DETACHING`: The instance is being unbound.
<li>`DETACH_FAILED`: The instance fails to be unbound.
<li>`ATTACHING_LB`: The LB is being bound.
<li>DETACHING_LB: The LB is being unbound.
<li>`MODIFYING_LB`: The LB is being modified.
<li>`STARTING`: The instance is being started up.
<li>`START_FAILED`: The instance fails to be started up.
<li>`STOPPING`: The instance is being shut down.
<li>`STOP_FAILED`: The instance fails to be shut down.
<li>`STOPPED`: The instance is shut down.
<li>`IN_LAUNCHING_HOOK`: The lifecycle hook is being scaled out.
<li>`IN_TERMINATING_HOOK`: The lifecycle hook is being scaled in.
     */
    public $LifeCycleState;

    /**
     * @var string Health status. Value range: HEALTHY, UNHEALTHY
     */
    public $HealthStatus;

    /**
     * @var boolean Whether to add scale-in protection
     */
    public $ProtectedFromScaleIn;

    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @var string Creation type. Value range: AUTO_CREATION, MANUAL_ATTACHING.
     */
    public $CreationType;

    /**
     * @var string Instance addition time
     */
    public $AddTime;

    /**
     * @var string Instance type
     */
    public $InstanceType;

    /**
     * @var integer Version number
     */
    public $VersionNumber;

    /**
     * @var string Auto scaling group name
     */
    public $AutoScalingGroupName;

    /**
     * @var string Warming up status. Valid values:
<li>`WAITING_ENTER_WARMUP`: The instance is waiting to be warmed up.
<li>`NO_NEED_WARMUP`: Warming up is not required.
<li>`IN_WARMUP`: The instance is being warmed up.
<li>`AFTER_WARMUP`: Warming up is completed.
     */
    public $WarmupStatus;

    /**
     * @var array Placement group ID. Only one is allowed.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DisasterRecoverGroupIds;

    /**
     * @param string $InstanceId Instance ID
     * @param string $AutoScalingGroupId Auto scaling group ID
     * @param string $LaunchConfigurationId Launch configuration ID
     * @param string $LaunchConfigurationName Launch configuration name
     * @param string $LifeCycleState Lifecycle status. Valid values:<br>
<li>`IN_SERVICE`: The instance is running.
<li>`CREATING`: The instance is being created.
<li>`CREATION_FAILED`: The instance fails to be created.
<li>`TERMINATING`: The instance is being terminated.
<li>`TERMINATION_FAILED`: The instance fails to be terminated.
<li>`ATTACHING`: The instance is being bound.
<li>`ATTACH_FAILED`: The instance fails to be bound.
<li>`DETACHING`: The instance is being unbound.
<li>`DETACH_FAILED`: The instance fails to be unbound.
<li>`ATTACHING_LB`: The LB is being bound.
<li>DETACHING_LB: The LB is being unbound.
<li>`MODIFYING_LB`: The LB is being modified.
<li>`STARTING`: The instance is being started up.
<li>`START_FAILED`: The instance fails to be started up.
<li>`STOPPING`: The instance is being shut down.
<li>`STOP_FAILED`: The instance fails to be shut down.
<li>`STOPPED`: The instance is shut down.
<li>`IN_LAUNCHING_HOOK`: The lifecycle hook is being scaled out.
<li>`IN_TERMINATING_HOOK`: The lifecycle hook is being scaled in.
     * @param string $HealthStatus Health status. Value range: HEALTHY, UNHEALTHY
     * @param boolean $ProtectedFromScaleIn Whether to add scale-in protection
     * @param string $Zone Availability zone
     * @param string $CreationType Creation type. Value range: AUTO_CREATION, MANUAL_ATTACHING.
     * @param string $AddTime Instance addition time
     * @param string $InstanceType Instance type
     * @param integer $VersionNumber Version number
     * @param string $AutoScalingGroupName Auto scaling group name
     * @param string $WarmupStatus Warming up status. Valid values:
<li>`WAITING_ENTER_WARMUP`: The instance is waiting to be warmed up.
<li>`NO_NEED_WARMUP`: Warming up is not required.
<li>`IN_WARMUP`: The instance is being warmed up.
<li>`AFTER_WARMUP`: Warming up is completed.
     * @param array $DisasterRecoverGroupIds Placement group ID. Only one is allowed.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("LaunchConfigurationName",$param) and $param["LaunchConfigurationName"] !== null) {
            $this->LaunchConfigurationName = $param["LaunchConfigurationName"];
        }

        if (array_key_exists("LifeCycleState",$param) and $param["LifeCycleState"] !== null) {
            $this->LifeCycleState = $param["LifeCycleState"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("ProtectedFromScaleIn",$param) and $param["ProtectedFromScaleIn"] !== null) {
            $this->ProtectedFromScaleIn = $param["ProtectedFromScaleIn"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CreationType",$param) and $param["CreationType"] !== null) {
            $this->CreationType = $param["CreationType"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("VersionNumber",$param) and $param["VersionNumber"] !== null) {
            $this->VersionNumber = $param["VersionNumber"];
        }

        if (array_key_exists("AutoScalingGroupName",$param) and $param["AutoScalingGroupName"] !== null) {
            $this->AutoScalingGroupName = $param["AutoScalingGroupName"];
        }

        if (array_key_exists("WarmupStatus",$param) and $param["WarmupStatus"] !== null) {
            $this->WarmupStatus = $param["WarmupStatus"];
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }
    }
}
