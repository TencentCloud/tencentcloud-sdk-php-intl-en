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
 * ModifyLifecycleHook request structure.
 *
 * @method string getLifecycleHookId() Obtain Lifecycle hook ID. you can get the lifecycle hook ID by calling the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieving the LifecycleHookId from the returned information.
 * @method void setLifecycleHookId(string $LifecycleHookId) Set Lifecycle hook ID. you can get the lifecycle hook ID by calling the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieving the LifecycleHookId from the returned information.
 * @method string getLifecycleHookName() Obtain Lifecycle hook name. Name only supports chinese, english, digits, underscore (_), hyphen (-), decimal point (.), maximum length cannot exceed 128.
 * @method void setLifecycleHookName(string $LifecycleHookName) Set Lifecycle hook name. Name only supports chinese, english, digits, underscore (_), hyphen (-), decimal point (.), maximum length cannot exceed 128.
 * @method string getLifecycleTransition() Obtain Scenario for entering the lifecycle hook. valid values:.
`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.
`INSTANCE_TERMINATING`: the lifecycle hook is being scaled in.
 * @method void setLifecycleTransition(string $LifecycleTransition) Set Scenario for entering the lifecycle hook. valid values:.
`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.
`INSTANCE_TERMINATING`: the lifecycle hook is being scaled in.
 * @method string getDefaultResult() Obtain Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values:.
Default value means CONTINUE to execute capacity expansion or reduction.
* ABANDON: for scale-out hooks, cvms that time out or fail to execute LifecycleCommand are released directly or removed. for scale-in hooks, scale-in activities continue.
 * @method void setDefaultResult(string $DefaultResult) Set Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values:.
Default value means CONTINUE to execute capacity expansion or reduction.
* ABANDON: for scale-out hooks, cvms that time out or fail to execute LifecycleCommand are released directly or removed. for scale-in hooks, scale-in activities continue.
 * @method integer getHeartbeatTimeout() Obtain The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30 - 7,200 seconds.
 * @method void setHeartbeatTimeout(integer $HeartbeatTimeout) Set The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30 - 7,200 seconds.
 * @method string getNotificationMetadata() Obtain Specifies the additional information sent by auto scaling to the notification target. NotificationMetadata and LifecycleCommand are mutually exclusive. the two cannot be specified simultaneously.
 * @method void setNotificationMetadata(string $NotificationMetadata) Set Specifies the additional information sent by auto scaling to the notification target. NotificationMetadata and LifecycleCommand are mutually exclusive. the two cannot be specified simultaneously.
 * @method string getLifecycleTransitionType() Obtain The scenario where the lifecycle hook is applied. `EXTENSION`: The lifecycle hook will be triggered when `AttachInstances`, `DetachInstances` or `RemoveInstances` is called. `NORMAL`: The lifecycle hook is not triggered by the above APIs.
 * @method void setLifecycleTransitionType(string $LifecycleTransitionType) Set The scenario where the lifecycle hook is applied. `EXTENSION`: The lifecycle hook will be triggered when `AttachInstances`, `DetachInstances` or `RemoveInstances` is called. `NORMAL`: The lifecycle hook is not triggered by the above APIs.
 * @method NotificationTarget getNotificationTarget() Obtain Notify the target information. NotificationTarget and LifecycleCommand are mutually exclusive. the two cannot be specified simultaneously.
 * @method void setNotificationTarget(NotificationTarget $NotificationTarget) Set Notify the target information. NotificationTarget and LifecycleCommand are mutually exclusive. the two cannot be specified simultaneously.
 * @method LifecycleCommand getLifecycleCommand() Obtain Remote command execution object. `NotificationMetadata`, `NotificationTarget`, and `LifecycleCommand` cannot be specified at the same time.
 * @method void setLifecycleCommand(LifecycleCommand $LifecycleCommand) Set Remote command execution object. `NotificationMetadata`, `NotificationTarget`, and `LifecycleCommand` cannot be specified at the same time.
 */
class ModifyLifecycleHookRequest extends AbstractModel
{
    /**
     * @var string Lifecycle hook ID. you can get the lifecycle hook ID by calling the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieving the LifecycleHookId from the returned information.
     */
    public $LifecycleHookId;

    /**
     * @var string Lifecycle hook name. Name only supports chinese, english, digits, underscore (_), hyphen (-), decimal point (.), maximum length cannot exceed 128.
     */
    public $LifecycleHookName;

    /**
     * @var string Scenario for entering the lifecycle hook. valid values:.
`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.
`INSTANCE_TERMINATING`: the lifecycle hook is being scaled in.
     */
    public $LifecycleTransition;

    /**
     * @var string Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values:.
Default value means CONTINUE to execute capacity expansion or reduction.
* ABANDON: for scale-out hooks, cvms that time out or fail to execute LifecycleCommand are released directly or removed. for scale-in hooks, scale-in activities continue.
     */
    public $DefaultResult;

    /**
     * @var integer The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30 - 7,200 seconds.
     */
    public $HeartbeatTimeout;

    /**
     * @var string Specifies the additional information sent by auto scaling to the notification target. NotificationMetadata and LifecycleCommand are mutually exclusive. the two cannot be specified simultaneously.
     */
    public $NotificationMetadata;

    /**
     * @var string The scenario where the lifecycle hook is applied. `EXTENSION`: The lifecycle hook will be triggered when `AttachInstances`, `DetachInstances` or `RemoveInstances` is called. `NORMAL`: The lifecycle hook is not triggered by the above APIs.
     */
    public $LifecycleTransitionType;

    /**
     * @var NotificationTarget Notify the target information. NotificationTarget and LifecycleCommand are mutually exclusive. the two cannot be specified simultaneously.
     */
    public $NotificationTarget;

    /**
     * @var LifecycleCommand Remote command execution object. `NotificationMetadata`, `NotificationTarget`, and `LifecycleCommand` cannot be specified at the same time.
     */
    public $LifecycleCommand;

    /**
     * @param string $LifecycleHookId Lifecycle hook ID. you can get the lifecycle hook ID by calling the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieving the LifecycleHookId from the returned information.
     * @param string $LifecycleHookName Lifecycle hook name. Name only supports chinese, english, digits, underscore (_), hyphen (-), decimal point (.), maximum length cannot exceed 128.
     * @param string $LifecycleTransition Scenario for entering the lifecycle hook. valid values:.
`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.
`INSTANCE_TERMINATING`: the lifecycle hook is being scaled in.
     * @param string $DefaultResult Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values:.
Default value means CONTINUE to execute capacity expansion or reduction.
* ABANDON: for scale-out hooks, cvms that time out or fail to execute LifecycleCommand are released directly or removed. for scale-in hooks, scale-in activities continue.
     * @param integer $HeartbeatTimeout The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30 - 7,200 seconds.
     * @param string $NotificationMetadata Specifies the additional information sent by auto scaling to the notification target. NotificationMetadata and LifecycleCommand are mutually exclusive. the two cannot be specified simultaneously.
     * @param string $LifecycleTransitionType The scenario where the lifecycle hook is applied. `EXTENSION`: The lifecycle hook will be triggered when `AttachInstances`, `DetachInstances` or `RemoveInstances` is called. `NORMAL`: The lifecycle hook is not triggered by the above APIs.
     * @param NotificationTarget $NotificationTarget Notify the target information. NotificationTarget and LifecycleCommand are mutually exclusive. the two cannot be specified simultaneously.
     * @param LifecycleCommand $LifecycleCommand Remote command execution object. `NotificationMetadata`, `NotificationTarget`, and `LifecycleCommand` cannot be specified at the same time.
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

        if (array_key_exists("LifecycleTransitionType",$param) and $param["LifecycleTransitionType"] !== null) {
            $this->LifecycleTransitionType = $param["LifecycleTransitionType"];
        }

        if (array_key_exists("NotificationTarget",$param) and $param["NotificationTarget"] !== null) {
            $this->NotificationTarget = new NotificationTarget();
            $this->NotificationTarget->deserialize($param["NotificationTarget"]);
        }

        if (array_key_exists("LifecycleCommand",$param) and $param["LifecycleCommand"] !== null) {
            $this->LifecycleCommand = new LifecycleCommand();
            $this->LifecycleCommand->deserialize($param["LifecycleCommand"]);
        }
    }
}
