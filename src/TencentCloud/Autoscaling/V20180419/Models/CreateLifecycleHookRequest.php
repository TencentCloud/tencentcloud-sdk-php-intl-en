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
 * CreateLifecycleHook request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
 * @method string getLifecycleHookName() Obtain Lifecycle hook name, which can contain Chinese characters, letters, numbers, underscores (_), hyphens (-), and periods (.) with a maximum length of 128 bytes.
 * @method void setLifecycleHookName(string $LifecycleHookName) Set Lifecycle hook name, which can contain Chinese characters, letters, numbers, underscores (_), hyphens (-), and periods (.) with a maximum length of 128 bytes.
 * @method string getLifecycleTransition() Obtain Scenario for performing the lifecycle hook. valid values:.
<Li>`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.</li>.
<Li>`INSTANCE_TERMINATING`: scaling in lifecycle hook</li>.
 * @method void setLifecycleTransition(string $LifecycleTransition) Set Scenario for performing the lifecycle hook. valid values:.
<Li>`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.</li>.
<Li>`INSTANCE_TERMINATING`: scaling in lifecycle hook</li>.
 * @method string getDefaultResult() Obtain Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values:.
<Li>CONTINUE: default value, means continue execution of capacity expansion or reduction</li>.
<li>ABANDON: for scale-out hooks, CVM instances with hook timeout or failed LifecycleCommand execution will be released directly or removed. for scale-in hooks, scale-in activities will continue.</li>.
 * @method void setDefaultResult(string $DefaultResult) Set Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values:.
<Li>CONTINUE: default value, means continue execution of capacity expansion or reduction</li>.
<li>ABANDON: for scale-out hooks, CVM instances with hook timeout or failed LifecycleCommand execution will be released directly or removed. for scale-in hooks, scale-in activities will continue.</li>.
 * @method integer getHeartbeatTimeout() Obtain The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-7200. Default value: 300
 * @method void setHeartbeatTimeout(integer $HeartbeatTimeout) Set The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-7200. Default value: 300
 * @method string getNotificationMetadata() Obtain Additional information of a notification that auto scaling sends to targets. this parameter is set when you configure a notification (default value: ""), with a maximum length of 1024 characters. NotificationMetadata and LifecycleCommand are mutually exclusive, and either can be specified.
 * @method void setNotificationMetadata(string $NotificationMetadata) Set Additional information of a notification that auto scaling sends to targets. this parameter is set when you configure a notification (default value: ""), with a maximum length of 1024 characters. NotificationMetadata and LifecycleCommand are mutually exclusive, and either can be specified.
 * @method NotificationTarget getNotificationTarget() Obtain Notification target. `NotificationTarget` and `LifecycleCommand` cannot be specified at the same time.
 * @method void setNotificationTarget(NotificationTarget $NotificationTarget) Set Notification target. `NotificationTarget` and `LifecycleCommand` cannot be specified at the same time.
 * @method string getLifecycleTransitionType() Obtain Specifies the scenario type for performing the lifecycle hook. valid values: NORMAL and EXTENSION. default value: NORMAL.
`EXTENSION`: the lifecycle hook will be triggered when calling [AttachInstances](https://intl.cloud.tencent.com/document/api/377/20441?from_cn_redirect=1), [DetachInstances](https://intl.cloud.tencent.com/document/api/377/20436?from_cn_redirect=1), [removeinstances](https://intl.cloud.tencent.com/document/api/377/20431?from_cn_redirect=1), [StopAutoScalingInstances](https://intl.cloud.tencent.com/document/api/377/40286?from_cn_redirect=1), [StartAutoScalingInstances](https://intl.cloud.tencent.com/document/api/377/40287?from_cn_redirect=1), or [StartInstanceRefresh](https://intl.cloud.tencent.com/document/api/377/99172?from_cn_redirect=1). `NORMAL`: the lifecycle hook is not triggered by these apis.
 * @method void setLifecycleTransitionType(string $LifecycleTransitionType) Set Specifies the scenario type for performing the lifecycle hook. valid values: NORMAL and EXTENSION. default value: NORMAL.
`EXTENSION`: the lifecycle hook will be triggered when calling [AttachInstances](https://intl.cloud.tencent.com/document/api/377/20441?from_cn_redirect=1), [DetachInstances](https://intl.cloud.tencent.com/document/api/377/20436?from_cn_redirect=1), [removeinstances](https://intl.cloud.tencent.com/document/api/377/20431?from_cn_redirect=1), [StopAutoScalingInstances](https://intl.cloud.tencent.com/document/api/377/40286?from_cn_redirect=1), [StartAutoScalingInstances](https://intl.cloud.tencent.com/document/api/377/40287?from_cn_redirect=1), or [StartInstanceRefresh](https://intl.cloud.tencent.com/document/api/377/99172?from_cn_redirect=1). `NORMAL`: the lifecycle hook is not triggered by these apis.
 * @method LifecycleCommand getLifecycleCommand() Obtain Specifies the remote command execution object. NotificationTarget and NotificationMetadata are mutually exclusive with this parameter. either cannot be specified simultaneously.
 * @method void setLifecycleCommand(LifecycleCommand $LifecycleCommand) Set Specifies the remote command execution object. NotificationTarget and NotificationMetadata are mutually exclusive with this parameter. either cannot be specified simultaneously.
 */
class CreateLifecycleHookRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
     */
    public $AutoScalingGroupId;

    /**
     * @var string Lifecycle hook name, which can contain Chinese characters, letters, numbers, underscores (_), hyphens (-), and periods (.) with a maximum length of 128 bytes.
     */
    public $LifecycleHookName;

    /**
     * @var string Scenario for performing the lifecycle hook. valid values:.
<Li>`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.</li>.
<Li>`INSTANCE_TERMINATING`: scaling in lifecycle hook</li>.
     */
    public $LifecycleTransition;

    /**
     * @var string Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values:.
<Li>CONTINUE: default value, means continue execution of capacity expansion or reduction</li>.
<li>ABANDON: for scale-out hooks, CVM instances with hook timeout or failed LifecycleCommand execution will be released directly or removed. for scale-in hooks, scale-in activities will continue.</li>.
     */
    public $DefaultResult;

    /**
     * @var integer The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-7200. Default value: 300
     */
    public $HeartbeatTimeout;

    /**
     * @var string Additional information of a notification that auto scaling sends to targets. this parameter is set when you configure a notification (default value: ""), with a maximum length of 1024 characters. NotificationMetadata and LifecycleCommand are mutually exclusive, and either can be specified.
     */
    public $NotificationMetadata;

    /**
     * @var NotificationTarget Notification target. `NotificationTarget` and `LifecycleCommand` cannot be specified at the same time.
     */
    public $NotificationTarget;

    /**
     * @var string Specifies the scenario type for performing the lifecycle hook. valid values: NORMAL and EXTENSION. default value: NORMAL.
`EXTENSION`: the lifecycle hook will be triggered when calling [AttachInstances](https://intl.cloud.tencent.com/document/api/377/20441?from_cn_redirect=1), [DetachInstances](https://intl.cloud.tencent.com/document/api/377/20436?from_cn_redirect=1), [removeinstances](https://intl.cloud.tencent.com/document/api/377/20431?from_cn_redirect=1), [StopAutoScalingInstances](https://intl.cloud.tencent.com/document/api/377/40286?from_cn_redirect=1), [StartAutoScalingInstances](https://intl.cloud.tencent.com/document/api/377/40287?from_cn_redirect=1), or [StartInstanceRefresh](https://intl.cloud.tencent.com/document/api/377/99172?from_cn_redirect=1). `NORMAL`: the lifecycle hook is not triggered by these apis.
     */
    public $LifecycleTransitionType;

    /**
     * @var LifecycleCommand Specifies the remote command execution object. NotificationTarget and NotificationMetadata are mutually exclusive with this parameter. either cannot be specified simultaneously.
     */
    public $LifecycleCommand;

    /**
     * @param string $AutoScalingGroupId Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
     * @param string $LifecycleHookName Lifecycle hook name, which can contain Chinese characters, letters, numbers, underscores (_), hyphens (-), and periods (.) with a maximum length of 128 bytes.
     * @param string $LifecycleTransition Scenario for performing the lifecycle hook. valid values:.
<Li>`INSTANCE_LAUNCHING`: the lifecycle hook is being scaled out.</li>.
<Li>`INSTANCE_TERMINATING`: scaling in lifecycle hook</li>.
     * @param string $DefaultResult Action to be taken by the scaling group in case of lifecycle hook timeout or LifecycleCommand execution failure. valid values:.
<Li>CONTINUE: default value, means continue execution of capacity expansion or reduction</li>.
<li>ABANDON: for scale-out hooks, CVM instances with hook timeout or failed LifecycleCommand execution will be released directly or removed. for scale-in hooks, scale-in activities will continue.</li>.
     * @param integer $HeartbeatTimeout The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-7200. Default value: 300
     * @param string $NotificationMetadata Additional information of a notification that auto scaling sends to targets. this parameter is set when you configure a notification (default value: ""), with a maximum length of 1024 characters. NotificationMetadata and LifecycleCommand are mutually exclusive, and either can be specified.
     * @param NotificationTarget $NotificationTarget Notification target. `NotificationTarget` and `LifecycleCommand` cannot be specified at the same time.
     * @param string $LifecycleTransitionType Specifies the scenario type for performing the lifecycle hook. valid values: NORMAL and EXTENSION. default value: NORMAL.
`EXTENSION`: the lifecycle hook will be triggered when calling [AttachInstances](https://intl.cloud.tencent.com/document/api/377/20441?from_cn_redirect=1), [DetachInstances](https://intl.cloud.tencent.com/document/api/377/20436?from_cn_redirect=1), [removeinstances](https://intl.cloud.tencent.com/document/api/377/20431?from_cn_redirect=1), [StopAutoScalingInstances](https://intl.cloud.tencent.com/document/api/377/40286?from_cn_redirect=1), [StartAutoScalingInstances](https://intl.cloud.tencent.com/document/api/377/40287?from_cn_redirect=1), or [StartInstanceRefresh](https://intl.cloud.tencent.com/document/api/377/99172?from_cn_redirect=1). `NORMAL`: the lifecycle hook is not triggered by these apis.
     * @param LifecycleCommand $LifecycleCommand Specifies the remote command execution object. NotificationTarget and NotificationMetadata are mutually exclusive with this parameter. either cannot be specified simultaneously.
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
