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
 * UpgradeLifecycleHook request structure.
 *
 * @method string getLifecycleHookId() Obtain Lifecycle hook ID. you can call the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieve the LifecycleHookId from the returned information to obtain the lifecycle hook ID.
 * @method void setLifecycleHookId(string $LifecycleHookId) Set Lifecycle hook ID. you can call the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieve the LifecycleHookId from the returned information to obtain the lifecycle hook ID.
 * @method string getLifecycleHookName() Obtain Lifecycle hook name, which can contain chinese characters, letters, numbers, underscores (_), hyphens (-), and periods (.) with a maximum length of 128 characters.
 * @method void setLifecycleHookName(string $LifecycleHookName) Set Lifecycle hook name, which can contain chinese characters, letters, numbers, underscores (_), hyphens (-), and periods (.) with a maximum length of 128 characters.
 * @method string getLifecycleTransition() Obtain Scenario for performing the lifecycle hook. valid values:.
`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.
`INSTANCE_TERMINATING`: the lifecycle hook is being scaled in.
 * @method void setLifecycleTransition(string $LifecycleTransition) Set Scenario for performing the lifecycle hook. valid values:.
`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.
`INSTANCE_TERMINATING`: the lifecycle hook is being scaled in.
 * @method string getDefaultResult() Obtain Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values are as follows:.
Default value, means CONTINUE to execute capacity expansion or reduction.
* ABANDON: for scale-out hooks, cvms that time out or fail to execute LifecycleCommand will be released directly or removed. for scale-in hooks, scale-in activities will continue.
 * @method void setDefaultResult(string $DefaultResult) Set Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values are as follows:.
Default value, means CONTINUE to execute capacity expansion or reduction.
* ABANDON: for scale-out hooks, cvms that time out or fail to execute LifecycleCommand will be released directly or removed. for scale-in hooks, scale-in activities will continue.
 * @method integer getHeartbeatTimeout() Obtain The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-7200. Default value: 300
 * @method void setHeartbeatTimeout(integer $HeartbeatTimeout) Set The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-7200. Default value: 300
 * @method string getNotificationMetadata() Obtain Additional information sent by auto scaling to notification targets, used when configuring a notification (default value: ""). NotificationMetadata and LifecycleCommand are mutually exclusive parameters and cannot be specified simultaneously.
 * @method void setNotificationMetadata(string $NotificationMetadata) Set Additional information sent by auto scaling to notification targets, used when configuring a notification (default value: ""). NotificationMetadata and LifecycleCommand are mutually exclusive parameters and cannot be specified simultaneously.
 * @method NotificationTarget getNotificationTarget() Obtain Notification result. `NotificationTarget` and `LifecycleCommand` cannot be specified at the same time.
 * @method void setNotificationTarget(NotificationTarget $NotificationTarget) Set Notification result. `NotificationTarget` and `LifecycleCommand` cannot be specified at the same time.
 * @method string getLifecycleTransitionType() Obtain The scenario where the lifecycle hook is applied. `EXTENSION`: the lifecycle hook will be triggered when AttachInstances, DetachInstances or RemoveInstaces is called. `NORMAL`: the lifecycle hook is not triggered by the above APIs. 
 * @method void setLifecycleTransitionType(string $LifecycleTransitionType) Set The scenario where the lifecycle hook is applied. `EXTENSION`: the lifecycle hook will be triggered when AttachInstances, DetachInstances or RemoveInstaces is called. `NORMAL`: the lifecycle hook is not triggered by the above APIs. 
 * @method LifecycleCommand getLifecycleCommand() Obtain Remote command execution object. `NotificationMetadata`, `NotificationTarget`, and `LifecycleCommand` are mutually exclusive and cannot be specified simultaneously.
 * @method void setLifecycleCommand(LifecycleCommand $LifecycleCommand) Set Remote command execution object. `NotificationMetadata`, `NotificationTarget`, and `LifecycleCommand` are mutually exclusive and cannot be specified simultaneously.
 */
class UpgradeLifecycleHookRequest extends AbstractModel
{
    /**
     * @var string Lifecycle hook ID. you can call the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieve the LifecycleHookId from the returned information to obtain the lifecycle hook ID.
     */
    public $LifecycleHookId;

    /**
     * @var string Lifecycle hook name, which can contain chinese characters, letters, numbers, underscores (_), hyphens (-), and periods (.) with a maximum length of 128 characters.
     */
    public $LifecycleHookName;

    /**
     * @var string Scenario for performing the lifecycle hook. valid values:.
`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.
`INSTANCE_TERMINATING`: the lifecycle hook is being scaled in.
     */
    public $LifecycleTransition;

    /**
     * @var string Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values are as follows:.
Default value, means CONTINUE to execute capacity expansion or reduction.
* ABANDON: for scale-out hooks, cvms that time out or fail to execute LifecycleCommand will be released directly or removed. for scale-in hooks, scale-in activities will continue.
     */
    public $DefaultResult;

    /**
     * @var integer The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-7200. Default value: 300
     */
    public $HeartbeatTimeout;

    /**
     * @var string Additional information sent by auto scaling to notification targets, used when configuring a notification (default value: ""). NotificationMetadata and LifecycleCommand are mutually exclusive parameters and cannot be specified simultaneously.
     */
    public $NotificationMetadata;

    /**
     * @var NotificationTarget Notification result. `NotificationTarget` and `LifecycleCommand` cannot be specified at the same time.
     */
    public $NotificationTarget;

    /**
     * @var string The scenario where the lifecycle hook is applied. `EXTENSION`: the lifecycle hook will be triggered when AttachInstances, DetachInstances or RemoveInstaces is called. `NORMAL`: the lifecycle hook is not triggered by the above APIs. 
     */
    public $LifecycleTransitionType;

    /**
     * @var LifecycleCommand Remote command execution object. `NotificationMetadata`, `NotificationTarget`, and `LifecycleCommand` are mutually exclusive and cannot be specified simultaneously.
     */
    public $LifecycleCommand;

    /**
     * @param string $LifecycleHookId Lifecycle hook ID. you can call the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieve the LifecycleHookId from the returned information to obtain the lifecycle hook ID.
     * @param string $LifecycleHookName Lifecycle hook name, which can contain chinese characters, letters, numbers, underscores (_), hyphens (-), and periods (.) with a maximum length of 128 characters.
     * @param string $LifecycleTransition Scenario for performing the lifecycle hook. valid values:.
`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.
`INSTANCE_TERMINATING`: the lifecycle hook is being scaled in.
     * @param string $DefaultResult Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values are as follows:.
Default value, means CONTINUE to execute capacity expansion or reduction.
* ABANDON: for scale-out hooks, cvms that time out or fail to execute LifecycleCommand will be released directly or removed. for scale-in hooks, scale-in activities will continue.
     * @param integer $HeartbeatTimeout The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-7200. Default value: 300
     * @param string $NotificationMetadata Additional information sent by auto scaling to notification targets, used when configuring a notification (default value: ""). NotificationMetadata and LifecycleCommand are mutually exclusive parameters and cannot be specified simultaneously.
     * @param NotificationTarget $NotificationTarget Notification result. `NotificationTarget` and `LifecycleCommand` cannot be specified at the same time.
     * @param string $LifecycleTransitionType The scenario where the lifecycle hook is applied. `EXTENSION`: the lifecycle hook will be triggered when AttachInstances, DetachInstances or RemoveInstaces is called. `NORMAL`: the lifecycle hook is not triggered by the above APIs. 
     * @param LifecycleCommand $LifecycleCommand Remote command execution object. `NotificationMetadata`, `NotificationTarget`, and `LifecycleCommand` are mutually exclusive and cannot be specified simultaneously.
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

        if (array_key_exists("LifecycleTransition",$param) and $param["LifecycleTransition"] !== null) {
            $this->LifecycleTransition = $param["LifecycleTransition"];
        }

        if (array_key_exists("DefaultResult",$param) and $param["DefaultResult"] !== null) {
            $this->DefaultResult = $param["DefaultResult"];
        }

        if (array_key_exists("HeartbeatTimeout",$param) and $param["HeartbeatTimeout"] !== null) {
            $this->HeartbeatTimeout = $param["HeartbeatTimeout"];
        }

        if (array_key_exists("NotificationMetadata",$param) and $param["NotificationMetadata"] !== null) {
            $this->NotificationMetadata = $param["NotificationMetadata"];
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
