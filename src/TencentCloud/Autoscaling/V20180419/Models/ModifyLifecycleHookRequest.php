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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLifecycleHook request structure.
 *
 * @method string getLifecycleHookId() Obtain Lifecycle hook ID.
 * @method void setLifecycleHookId(string $LifecycleHookId) Set Lifecycle hook ID.
 * @method string getLifecycleHookName() Obtain Lifecycle hook name.
 * @method void setLifecycleHookName(string $LifecycleHookName) Set Lifecycle hook name.
 * @method string getLifecycleTransition() Obtain The time when the lifecycle hook is applied. Valid values:
<li> `INSTANCE_LAUNCHING`: After the instance launch
<li> `INSTANCE_TERMINATING`: Before the instance termination
 * @method void setLifecycleTransition(string $LifecycleTransition) Set The time when the lifecycle hook is applied. Valid values:
<li> `INSTANCE_LAUNCHING`: After the instance launch
<li> `INSTANCE_TERMINATING`: Before the instance termination
 * @method string getDefaultResult() Obtain Actions after the lifecycle hook times out. Valid values:
<li> `CONTINUE`: Continue the scaling activity after the timeout
<li> `ABANDON`: Terminate the scaling activity after the timeout
 * @method void setDefaultResult(string $DefaultResult) Set Actions after the lifecycle hook times out. Valid values:
<li> `CONTINUE`: Continue the scaling activity after the timeout
<li> `ABANDON`: Terminate the scaling activity after the timeout
 * @method integer getHeartbeatTimeout() Obtain The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30 - 7,200 seconds.
 * @method void setHeartbeatTimeout(integer $HeartbeatTimeout) Set The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30 - 7,200 seconds.
 * @method string getNotificationMetadata() Obtain Additional information sent by AS to the notification target.
 * @method void setNotificationMetadata(string $NotificationMetadata) Set Additional information sent by AS to the notification target.
 * @method string getLifecycleTransitionType() Obtain The scenario where the lifecycle hook is applied. `EXTENSION`: The lifecycle hook will be triggered when `AttachInstances`, `DetachInstances` or `RemoveInstances` is called. `NORMAL`: The lifecycle hook is not triggered by the above APIs.
 * @method void setLifecycleTransitionType(string $LifecycleTransitionType) Set The scenario where the lifecycle hook is applied. `EXTENSION`: The lifecycle hook will be triggered when `AttachInstances`, `DetachInstances` or `RemoveInstances` is called. `NORMAL`: The lifecycle hook is not triggered by the above APIs.
 * @method NotificationTarget getNotificationTarget() Obtain Information of the notification target.
 * @method void setNotificationTarget(NotificationTarget $NotificationTarget) Set Information of the notification target.
 */
class ModifyLifecycleHookRequest extends AbstractModel
{
    /**
     * @var string Lifecycle hook ID.
     */
    public $LifecycleHookId;

    /**
     * @var string Lifecycle hook name.
     */
    public $LifecycleHookName;

    /**
     * @var string The time when the lifecycle hook is applied. Valid values:
<li> `INSTANCE_LAUNCHING`: After the instance launch
<li> `INSTANCE_TERMINATING`: Before the instance termination
     */
    public $LifecycleTransition;

    /**
     * @var string Actions after the lifecycle hook times out. Valid values:
<li> `CONTINUE`: Continue the scaling activity after the timeout
<li> `ABANDON`: Terminate the scaling activity after the timeout
     */
    public $DefaultResult;

    /**
     * @var integer The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30 - 7,200 seconds.
     */
    public $HeartbeatTimeout;

    /**
     * @var string Additional information sent by AS to the notification target.
     */
    public $NotificationMetadata;

    /**
     * @var string The scenario where the lifecycle hook is applied. `EXTENSION`: The lifecycle hook will be triggered when `AttachInstances`, `DetachInstances` or `RemoveInstances` is called. `NORMAL`: The lifecycle hook is not triggered by the above APIs.
     */
    public $LifecycleTransitionType;

    /**
     * @var NotificationTarget Information of the notification target.
     */
    public $NotificationTarget;

    /**
     * @param string $LifecycleHookId Lifecycle hook ID.
     * @param string $LifecycleHookName Lifecycle hook name.
     * @param string $LifecycleTransition The time when the lifecycle hook is applied. Valid values:
<li> `INSTANCE_LAUNCHING`: After the instance launch
<li> `INSTANCE_TERMINATING`: Before the instance termination
     * @param string $DefaultResult Actions after the lifecycle hook times out. Valid values:
<li> `CONTINUE`: Continue the scaling activity after the timeout
<li> `ABANDON`: Terminate the scaling activity after the timeout
     * @param integer $HeartbeatTimeout The maximum length of time (in seconds) that can elapse before the lifecycle hook times out. Value range: 30 - 7,200 seconds.
     * @param string $NotificationMetadata Additional information sent by AS to the notification target.
     * @param string $LifecycleTransitionType The scenario where the lifecycle hook is applied. `EXTENSION`: The lifecycle hook will be triggered when `AttachInstances`, `DetachInstances` or `RemoveInstances` is called. `NORMAL`: The lifecycle hook is not triggered by the above APIs.
     * @param NotificationTarget $NotificationTarget Information of the notification target.
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
    }
}
