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
 * @method string getAutoScalingGroupId() 获取Auto scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置Auto scaling group ID
 * @method string getDefaultResult() 获取Default result of the lifecycle hook
 * @method void setDefaultResult(string $DefaultResult) 设置Default result of the lifecycle hook
 * @method integer getHeartbeatTimeout() 获取Wait timeout period of the lifecycle hook
 * @method void setHeartbeatTimeout(integer $HeartbeatTimeout) 设置Wait timeout period of the lifecycle hook
 * @method string getLifecycleTransition() 获取Applicable scenario of the lifecycle hook
 * @method void setLifecycleTransition(string $LifecycleTransition) 设置Applicable scenario of the lifecycle hook
 * @method string getNotificationMetadata() 获取Additional information for the notification target
 * @method void setNotificationMetadata(string $NotificationMetadata) 设置Additional information for the notification target
 * @method string getCreatedTime() 获取Creation time
 * @method void setCreatedTime(string $CreatedTime) 设置Creation time
 * @method NotificationTarget getNotificationTarget() 获取Notification target
 * @method void setNotificationTarget(NotificationTarget $NotificationTarget) 设置Notification target
 */

/**
 *Lifecycle hook
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
     * @param string $LifecycleHookId Lifecycle hook ID
     * @param string $LifecycleHookName Lifecycle hook name
     * @param string $AutoScalingGroupId Auto scaling group ID
     * @param string $DefaultResult Default result of the lifecycle hook
     * @param integer $HeartbeatTimeout Wait timeout period of the lifecycle hook
     * @param string $LifecycleTransition Applicable scenario of the lifecycle hook
     * @param string $NotificationMetadata Additional information for the notification target
     * @param string $CreatedTime Creation time
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
    }
}
