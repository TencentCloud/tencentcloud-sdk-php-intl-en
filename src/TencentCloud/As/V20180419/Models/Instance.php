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
 * @method string getInstanceId() 获取Instance ID
 * @method void setInstanceId(string $InstanceId) 设置Instance ID
 * @method string getAutoScalingGroupId() 获取Auto scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置Auto scaling group ID
 * @method string getLaunchConfigurationId() 获取Launch configuration ID
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置Launch configuration ID
 * @method string getLaunchConfigurationName() 获取Launch configuration name
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) 设置Launch configuration name
 * @method string getLifeCycleState() 获取Lifecycle status. Value range: IN_SERVICE, CREATING, TERMINATING, ATTACHING, DETACHING, ATTACHING_LB, DETACHING_LB
 * @method void setLifeCycleState(string $LifeCycleState) 设置Lifecycle status. Value range: IN_SERVICE, CREATING, TERMINATING, ATTACHING, DETACHING, ATTACHING_LB, DETACHING_LB
 * @method string getHealthStatus() 获取Health status. Value range: HEALTHY, UNHEALTHY
 * @method void setHealthStatus(string $HealthStatus) 设置Health status. Value range: HEALTHY, UNHEALTHY
 * @method boolean getProtectedFromScaleIn() 获取Whether to add scale-in protection
 * @method void setProtectedFromScaleIn(boolean $ProtectedFromScaleIn) 设置Whether to add scale-in protection
 * @method string getZone() 获取Availability zone
 * @method void setZone(string $Zone) 设置Availability zone
 * @method string getCreationType() 获取Creation type. Value range: AUTO_CREATION, MANUAL_ATTACHING.
 * @method void setCreationType(string $CreationType) 设置Creation type. Value range: AUTO_CREATION, MANUAL_ATTACHING.
 * @method string getAddTime() 获取Instance addition time
 * @method void setAddTime(string $AddTime) 设置Instance addition time
 * @method string getInstanceType() 获取Instance type
 * @method void setInstanceType(string $InstanceType) 设置Instance type
 * @method integer getVersionNumber() 获取Version number
 * @method void setVersionNumber(integer $VersionNumber) 设置Version number
 * @method string getAutoScalingGroupName() 获取Auto scaling group name
 * @method void setAutoScalingGroupName(string $AutoScalingGroupName) 设置Auto scaling group name
 */

/**
 *Instance information
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
     * @var string Lifecycle status. Value range: IN_SERVICE, CREATING, TERMINATING, ATTACHING, DETACHING, ATTACHING_LB, DETACHING_LB
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
     * @param string $InstanceId Instance ID
     * @param string $AutoScalingGroupId Auto scaling group ID
     * @param string $LaunchConfigurationId Launch configuration ID
     * @param string $LaunchConfigurationName Launch configuration name
     * @param string $LifeCycleState Lifecycle status. Value range: IN_SERVICE, CREATING, TERMINATING, ATTACHING, DETACHING, ATTACHING_LB, DETACHING_LB
     * @param string $HealthStatus Health status. Value range: HEALTHY, UNHEALTHY
     * @param boolean $ProtectedFromScaleIn Whether to add scale-in protection
     * @param string $Zone Availability zone
     * @param string $CreationType Creation type. Value range: AUTO_CREATION, MANUAL_ATTACHING.
     * @param string $AddTime Instance addition time
     * @param string $InstanceType Instance type
     * @param integer $VersionNumber Version number
     * @param string $AutoScalingGroupName Auto scaling group name
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
    }
}
