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
 * @method string getLifecycleHookId() 获取Lifecycle hook ID
 * @method void setLifecycleHookId(string $LifecycleHookId) 设置Lifecycle hook ID
 * @method string getLifecycleHookName() 获取Lifecycle hook name
 * @method void setLifecycleHookName(string $LifecycleHookName) 设置Lifecycle hook name
 * @method string getLifecycleTransition() 获取Scenario for the lifecycle hook. Value range: "INSTANCE_LAUNCHING", "INSTANCE_TERMINATING"
 * @method void setLifecycleTransition(string $LifecycleTransition) 设置Scenario for the lifecycle hook. Value range: "INSTANCE_LAUNCHING", "INSTANCE_TERMINATING"
 * @method string getDefaultResult() 获取Defines the action to be taken by the auto scaling group upon lifecycle hook timeout. Value range: "CONTINUE", "ABANDON". Default value: "CONTINUE"
 * @method void setDefaultResult(string $DefaultResult) 设置Defines the action to be taken by the auto scaling group upon lifecycle hook timeout. Value range: "CONTINUE", "ABANDON". Default value: "CONTINUE"
 * @method integer getHeartbeatTimeout() 获取The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-3,600. Default value: 300
 * @method void setHeartbeatTimeout(integer $HeartbeatTimeout) 设置The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-3,600. Default value: 300
 * @method string getNotificationMetadata() 获取Additional information sent by AS to the notification target. The default value is ''
 * @method void setNotificationMetadata(string $NotificationMetadata) 设置Additional information sent by AS to the notification target. The default value is ''
 * @method NotificationTarget getNotificationTarget() 获取Notification target
 * @method void setNotificationTarget(NotificationTarget $NotificationTarget) 设置Notification target
 */

/**
 *UpgradeLifecycleHook request structure.
 */
class UpgradeLifecycleHookRequest extends AbstractModel
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
     * @var string Scenario for the lifecycle hook. Value range: "INSTANCE_LAUNCHING", "INSTANCE_TERMINATING"
     */
    public $LifecycleTransition;

    /**
     * @var string Defines the action to be taken by the auto scaling group upon lifecycle hook timeout. Value range: "CONTINUE", "ABANDON". Default value: "CONTINUE"
     */
    public $DefaultResult;

    /**
     * @var integer The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-3,600. Default value: 300
     */
    public $HeartbeatTimeout;

    /**
     * @var string Additional information sent by AS to the notification target. The default value is ''
     */
    public $NotificationMetadata;

    /**
     * @var NotificationTarget Notification target
     */
    public $NotificationTarget;
    /**
     * @param string $LifecycleHookId Lifecycle hook ID
     * @param string $LifecycleHookName Lifecycle hook name
     * @param string $LifecycleTransition Scenario for the lifecycle hook. Value range: "INSTANCE_LAUNCHING", "INSTANCE_TERMINATING"
     * @param string $DefaultResult Defines the action to be taken by the auto scaling group upon lifecycle hook timeout. Value range: "CONTINUE", "ABANDON". Default value: "CONTINUE"
     * @param integer $HeartbeatTimeout The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30-3,600. Default value: 300
     * @param string $NotificationMetadata Additional information sent by AS to the notification target. The default value is ''
     * @param NotificationTarget $NotificationTarget Notification target
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
    }
}
