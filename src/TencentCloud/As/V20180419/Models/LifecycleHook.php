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
 * Lifecycle hook
 *
 * @method string getLifecycleHookId() Obtain Lifecycle hook ID
 * @method void setLifecycleHookId(string $LifecycleHookId) Set Lifecycle hook ID
 * @method string getLifecycleHookName() Obtain Lifecycle hook name
 * @method void setLifecycleHookName(string $LifecycleHookName) Set Lifecycle hook name
 * @method string getAutoScalingGroupId() Obtain Auto scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Auto scaling group ID
 * @method string getDefaultResult() Obtain Default result of the lifecycle hook
 * @method void setDefaultResult(string $DefaultResult) Set Default result of the lifecycle hook
 * @method integer getHeartbeatTimeout() Obtain Wait timeout period of the lifecycle hook
 * @method void setHeartbeatTimeout(integer $HeartbeatTimeout) Set Wait timeout period of the lifecycle hook
 * @method string getLifecycleTransition() Obtain Applicable scenario of the lifecycle hook
 * @method void setLifecycleTransition(string $LifecycleTransition) Set Applicable scenario of the lifecycle hook
 * @method string getNotificationMetadata() Obtain Additional information for the notification target
 * @method void setNotificationMetadata(string $NotificationMetadata) Set Additional information for the notification target
 * @method string getCreatedTime() Obtain Creation time
 * @method void setCreatedTime(string $CreatedTime) Set Creation time
 * @method NotificationTarget getNotificationTarget() Obtain Notification target
 * @method void setNotificationTarget(NotificationTarget $NotificationTarget) Set Notification target
 * @method string getLifecycleTransitionType() Obtain Applicable scenario of the lifecycle hook
 * @method void setLifecycleTransitionType(string $LifecycleTransitionType) Set Applicable scenario of the lifecycle hook
 * @method LifecycleCommand getLifecycleCommand() Obtain Remote command execution object.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLifecycleCommand(LifecycleCommand $LifecycleCommand) Set Remote command execution object.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LifecycleHook extends AbstractModel
{
    /**
     * @var string Lifecycle hook ID
     */
    public $LifecycleHookId;

    /**
     * @var string Lifecycle hook name
     */
    public $LifecycleHookName;

    /**
     * @var string Auto scaling group ID
     */
    public $AutoScalingGroupId;

    /**
     * @var string Default result of the lifecycle hook
     */
    public $DefaultResult;

    /**
     * @var integer Wait timeout period of the lifecycle hook
     */
    public $HeartbeatTimeout;

    /**
     * @var string Applicable scenario of the lifecycle hook
     */
    public $LifecycleTransition;

    /**
     * @var string Additional information for the notification target
     */
    public $NotificationMetadata;

    /**
     * @var string Creation time
     */
    public $CreatedTime;

    /**
     * @var NotificationTarget Notification target
     */
    public $NotificationTarget;

    /**
     * @var string Applicable scenario of the lifecycle hook
     */
    public $LifecycleTransitionType;

    /**
     * @var LifecycleCommand Remote command execution object.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LifecycleCommand;

    /**
     * @param string $LifecycleHookId Lifecycle hook ID
     * @param string $LifecycleHookName Lifecycle hook name
     * @param string $AutoScalingGroupId Auto scaling group ID
     * @param string $DefaultResult Default result of the lifecycle hook
     * @param integer $HeartbeatTimeout Wait timeout period of the lifecycle hook
     * @param string $LifecycleTransition Applicable scenario of the lifecycle hook
     * @param string $NotificationMetadata Additional information for the notification target
     * @param string $CreatedTime Creation time
     * @param NotificationTarget $NotificationTarget Notification target
     * @param string $LifecycleTransitionType Applicable scenario of the lifecycle hook
     * @param LifecycleCommand $LifecycleCommand Remote command execution object.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("LifecycleHookId",$param) and $param["LifecycleHookId"] !== null) {
            $this->LifecycleHookId = $param["LifecycleHookId"];
        }

        if (array_key_exists("LifecycleHookName",$param) and $param["LifecycleHookName"] !== null) {
            $this->LifecycleHookName = $param["LifecycleHookName"];
        }

        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("DefaultResult",$param) and $param["DefaultResult"] !== null) {
            $this->DefaultResult = $param["DefaultResult"];
        }

        if (array_key_exists("HeartbeatTimeout",$param) and $param["HeartbeatTimeout"] !== null) {
            $this->HeartbeatTimeout = $param["HeartbeatTimeout"];
        }

        if (array_key_exists("LifecycleTransition",$param) and $param["LifecycleTransition"] !== null) {
            $this->LifecycleTransition = $param["LifecycleTransition"];
        }

        if (array_key_exists("NotificationMetadata",$param) and $param["NotificationMetadata"] !== null) {
            $this->NotificationMetadata = $param["NotificationMetadata"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("NotificationTarget",$param) and $param["NotificationTarget"] !== null) {
            $this->NotificationTarget = new NotificationTarget();
            $this->NotificationTarget->deserialize($param["NotificationTarget"]);
        }

        if (array_key_exists("LifecycleTransitionType",$param) and $param["LifecycleTransitionType"] !== null) {
            $this->LifecycleTransitionType = $param["LifecycleTransitionType"];
        }

        if (array_key_exists("LifecycleCommand",$param) and $param["LifecycleCommand"] !== null) {
            $this->LifecycleCommand = new LifecycleCommand();
            $this->LifecycleCommand->deserialize($param["LifecycleCommand"]);
        }
    }
}
