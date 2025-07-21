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
 * Lifecycle hook
 *
 * @method string getLifecycleHookId() Obtain Lifecycle hook ID
 * @method void setLifecycleHookId(string $LifecycleHookId) Set Lifecycle hook ID
 * @method string getLifecycleHookName() Obtain Lifecycle hook name
 * @method void setLifecycleHookName(string $LifecycleHookName) Set Lifecycle hook name
 * @method string getAutoScalingGroupId() Obtain Auto scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Auto scaling group ID
 * @method string getDefaultResult() Obtain Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values:.
-CONTINUE execution by default means capacity expansion or reduction.
-For scale-out hooks, cvms with hook timeout or failed LifecycleCommand execution will be released directly or removed; for scale-in hooks, scale-in activities will continue.
 * @method void setDefaultResult(string $DefaultResult) Set Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values:.
-CONTINUE execution by default means capacity expansion or reduction.
-For scale-out hooks, cvms with hook timeout or failed LifecycleCommand execution will be released directly or removed; for scale-in hooks, scale-in activities will continue.
 * @method integer getHeartbeatTimeout() Obtain Specifies the timeout waiting time of the lifecycle hook in seconds. value range: 30 to 7200.
 * @method void setHeartbeatTimeout(integer $HeartbeatTimeout) Set Specifies the timeout waiting time of the lifecycle hook in seconds. value range: 30 to 7200.
 * @method string getLifecycleTransition() Obtain Scenario for entering the lifecycle hook. valid values:.
-`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.
-INSTANCE_TERMINATING: scale-in lifecycle hook.
 * @method void setLifecycleTransition(string $LifecycleTransition) Set Scenario for entering the lifecycle hook. valid values:.
-`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.
-INSTANCE_TERMINATING: scale-in lifecycle hook.
 * @method string getNotificationMetadata() Obtain Additional information for the notification target
 * @method void setNotificationMetadata(string $NotificationMetadata) Set Additional information for the notification target
 * @method string getCreatedTime() Obtain Creation time. uses UTC for timing.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time. uses UTC for timing.
 * @method NotificationTarget getNotificationTarget() Obtain Notification target
 * @method void setNotificationTarget(NotificationTarget $NotificationTarget) Set Notification target
 * @method string getLifecycleTransitionType() Obtain Specifies the scenario type for performing the lifecycle hook. valid values: NORMAL and EXTENSION. default value: NORMAL.
Description: when set to `EXTENSION`, the lifecycle hook will be triggered during `AttachInstances`, `DetachInstances`, or `RemoveInstances` API calls. if set to `NORMAL`, the lifecycle hook will not be triggered by these apis.
 * @method void setLifecycleTransitionType(string $LifecycleTransitionType) Set Specifies the scenario type for performing the lifecycle hook. valid values: NORMAL and EXTENSION. default value: NORMAL.
Description: when set to `EXTENSION`, the lifecycle hook will be triggered during `AttachInstances`, `DetachInstances`, or `RemoveInstances` API calls. if set to `NORMAL`, the lifecycle hook will not be triggered by these apis.
 * @method LifecycleCommand getLifecycleCommand() Obtain Remote command execution object.
 * @method void setLifecycleCommand(LifecycleCommand $LifecycleCommand) Set Remote command execution object.
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
     * @var string Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values:.
-CONTINUE execution by default means capacity expansion or reduction.
-For scale-out hooks, cvms with hook timeout or failed LifecycleCommand execution will be released directly or removed; for scale-in hooks, scale-in activities will continue.
     */
    public $DefaultResult;

    /**
     * @var integer Specifies the timeout waiting time of the lifecycle hook in seconds. value range: 30 to 7200.
     */
    public $HeartbeatTimeout;

    /**
     * @var string Scenario for entering the lifecycle hook. valid values:.
-`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.
-INSTANCE_TERMINATING: scale-in lifecycle hook.
     */
    public $LifecycleTransition;

    /**
     * @var string Additional information for the notification target
     */
    public $NotificationMetadata;

    /**
     * @var string Creation time. uses UTC for timing.
     */
    public $CreatedTime;

    /**
     * @var NotificationTarget Notification target
     */
    public $NotificationTarget;

    /**
     * @var string Specifies the scenario type for performing the lifecycle hook. valid values: NORMAL and EXTENSION. default value: NORMAL.
Description: when set to `EXTENSION`, the lifecycle hook will be triggered during `AttachInstances`, `DetachInstances`, or `RemoveInstances` API calls. if set to `NORMAL`, the lifecycle hook will not be triggered by these apis.
     */
    public $LifecycleTransitionType;

    /**
     * @var LifecycleCommand Remote command execution object.
     */
    public $LifecycleCommand;

    /**
     * @param string $LifecycleHookId Lifecycle hook ID
     * @param string $LifecycleHookName Lifecycle hook name
     * @param string $AutoScalingGroupId Auto scaling group ID
     * @param string $DefaultResult Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values:.
-CONTINUE execution by default means capacity expansion or reduction.
-For scale-out hooks, cvms with hook timeout or failed LifecycleCommand execution will be released directly or removed; for scale-in hooks, scale-in activities will continue.
     * @param integer $HeartbeatTimeout Specifies the timeout waiting time of the lifecycle hook in seconds. value range: 30 to 7200.
     * @param string $LifecycleTransition Scenario for entering the lifecycle hook. valid values:.
-`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.
-INSTANCE_TERMINATING: scale-in lifecycle hook.
     * @param string $NotificationMetadata Additional information for the notification target
     * @param string $CreatedTime Creation time. uses UTC for timing.
     * @param NotificationTarget $NotificationTarget Notification target
     * @param string $LifecycleTransitionType Specifies the scenario type for performing the lifecycle hook. valid values: NORMAL and EXTENSION. default value: NORMAL.
Description: when set to `EXTENSION`, the lifecycle hook will be triggered during `AttachInstances`, `DetachInstances`, or `RemoveInstances` API calls. if set to `NORMAL`, the lifecycle hook will not be triggered by these apis.
     * @param LifecycleCommand $LifecycleCommand Remote command execution object.
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
