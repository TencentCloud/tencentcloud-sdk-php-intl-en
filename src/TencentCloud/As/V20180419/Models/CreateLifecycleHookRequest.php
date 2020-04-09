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
 * CreateLifecycleHook request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Auto scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Auto scaling group ID
 * @method string getLifecycleHookName() Obtain Lifecycle hook name, which can contain Chinese characters, letters, numbers, underscores (_), hyphens (-), and periods (.) with a maximum length of 128 bytes.
 * @method void setLifecycleHookName(string $LifecycleHookName) Set Lifecycle hook name, which can contain Chinese characters, letters, numbers, underscores (_), hyphens (-), and periods (.) with a maximum length of 128 bytes.
 * @method string getLifecycleTransition() Obtain Scenario for the lifecycle hook. Valid values: "INSTANCE_LAUNCHING" and "INSTANCE_TERMINATING"
 * @method void setLifecycleTransition(string $LifecycleTransition) Set Scenario for the lifecycle hook. Valid values: "INSTANCE_LAUNCHING" and "INSTANCE_TERMINATING"
 * @method string getDefaultResult() Obtain Defined actions when lifecycle hook times out. Valid values: "CONTINUE" and "ABANDON". Default value: "CONTINUE"
 * @method void setDefaultResult(string $DefaultResult) Set Defined actions when lifecycle hook times out. Valid values: "CONTINUE" and "ABANDON". Default value: "CONTINUE"
 * @method integer getHeartbeatTimeout() Obtain The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-3,600. Default value: 300
 * @method void setHeartbeatTimeout(integer $HeartbeatTimeout) Set The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-3,600. Default value: 300
 * @method string getNotificationMetadata() Obtain Additional information sent by Auto Scaling to the notification target. Default value is “”. Maximum length is 1024 characters.
 * @method void setNotificationMetadata(string $NotificationMetadata) Set Additional information sent by Auto Scaling to the notification target. Default value is “”. Maximum length is 1024 characters.
 * @method NotificationTarget getNotificationTarget() Obtain Notification target
 * @method void setNotificationTarget(NotificationTarget $NotificationTarget) Set Notification target
 * @method string getLifecycleTransitionType() Obtain The scenario where the lifecycle hook is applied. `EXTENSION`: the lifecycle hook will be triggered when AttachInstances, DetachInstances or RemoveInstaces is called. `NORMAL`: the lifecycle hook is not triggered by the above APIs. 
 * @method void setLifecycleTransitionType(string $LifecycleTransitionType) Set The scenario where the lifecycle hook is applied. `EXTENSION`: the lifecycle hook will be triggered when AttachInstances, DetachInstances or RemoveInstaces is called. `NORMAL`: the lifecycle hook is not triggered by the above APIs. 
 */
class CreateLifecycleHookRequest extends AbstractModel
{
    /**
     * @var string Auto scaling group ID
     */
    public $AutoScalingGroupId;

    /**
     * @var string Lifecycle hook name, which can contain Chinese characters, letters, numbers, underscores (_), hyphens (-), and periods (.) with a maximum length of 128 bytes.
     */
    public $LifecycleHookName;

    /**
     * @var string Scenario for the lifecycle hook. Valid values: "INSTANCE_LAUNCHING" and "INSTANCE_TERMINATING"
     */
    public $LifecycleTransition;

    /**
     * @var string Defined actions when lifecycle hook times out. Valid values: "CONTINUE" and "ABANDON". Default value: "CONTINUE"
     */
    public $DefaultResult;

    /**
     * @var integer The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-3,600. Default value: 300
     */
    public $HeartbeatTimeout;

    /**
     * @var string Additional information sent by Auto Scaling to the notification target. Default value is “”. Maximum length is 1024 characters.
     */
    public $NotificationMetadata;

    /**
     * @var NotificationTarget Notification target
     */
    public $NotificationTarget;

    /**
     * @var string The scenario where the lifecycle hook is applied. `EXTENSION`: the lifecycle hook will be triggered when AttachInstances, DetachInstances or RemoveInstaces is called. `NORMAL`: the lifecycle hook is not triggered by the above APIs. 
     */
    public $LifecycleTransitionType;

    /**
     * @param string $AutoScalingGroupId Auto scaling group ID
     * @param string $LifecycleHookName Lifecycle hook name, which can contain Chinese characters, letters, numbers, underscores (_), hyphens (-), and periods (.) with a maximum length of 128 bytes.
     * @param string $LifecycleTransition Scenario for the lifecycle hook. Valid values: "INSTANCE_LAUNCHING" and "INSTANCE_TERMINATING"
     * @param string $DefaultResult Defined actions when lifecycle hook times out. Valid values: "CONTINUE" and "ABANDON". Default value: "CONTINUE"
     * @param integer $HeartbeatTimeout The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-3,600. Default value: 300
     * @param string $NotificationMetadata Additional information sent by Auto Scaling to the notification target. Default value is “”. Maximum length is 1024 characters.
     * @param NotificationTarget $NotificationTarget Notification target
     * @param string $LifecycleTransitionType The scenario where the lifecycle hook is applied. `EXTENSION`: the lifecycle hook will be triggered when AttachInstances, DetachInstances or RemoveInstaces is called. `NORMAL`: the lifecycle hook is not triggered by the above APIs. 
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
    }
}
