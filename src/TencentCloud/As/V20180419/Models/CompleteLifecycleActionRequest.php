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
 * @method string getLifecycleActionResult() 获取Result of the lifecycle action. Value range: "CONTINUE", "ABANDON"
 * @method void setLifecycleActionResult(string $LifecycleActionResult) 设置Result of the lifecycle action. Value range: "CONTINUE", "ABANDON"
 * @method string getInstanceId() 获取Instance ID. Either "InstanceId" or "LifecycleActionToken" must be specified
 * @method void setInstanceId(string $InstanceId) 设置Instance ID. Either "InstanceId" or "LifecycleActionToken" must be specified
 * @method string getLifecycleActionToken() 获取Either "InstanceId" or "LifecycleActionToken" must be specified
 * @method void setLifecycleActionToken(string $LifecycleActionToken) 设置Either "InstanceId" or "LifecycleActionToken" must be specified
 */

/**
 *CompleteLifecycleAction request structure.
 */
class CompleteLifecycleActionRequest extends AbstractModel
{
    /**
     * @var string Lifecycle hook ID
     */
    public $LifecycleHookId;

    /**
     * @var string Result of the lifecycle action. Value range: "CONTINUE", "ABANDON"
     */
    public $LifecycleActionResult;

    /**
     * @var string Instance ID. Either "InstanceId" or "LifecycleActionToken" must be specified
     */
    public $InstanceId;

    /**
     * @var string Either "InstanceId" or "LifecycleActionToken" must be specified
     */
    public $LifecycleActionToken;
    /**
     * @param string $LifecycleHookId Lifecycle hook ID
     * @param string $LifecycleActionResult Result of the lifecycle action. Value range: "CONTINUE", "ABANDON"
     * @param string $InstanceId Instance ID. Either "InstanceId" or "LifecycleActionToken" must be specified
     * @param string $LifecycleActionToken Either "InstanceId" or "LifecycleActionToken" must be specified
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

        if (array_key_exists("LifecycleActionResult",$param) and $param["LifecycleActionResult"] !== null) {
            $this->LifecycleActionResult = $param["LifecycleActionResult"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LifecycleActionToken",$param) and $param["LifecycleActionToken"] !== null) {
            $this->LifecycleActionToken = $param["LifecycleActionToken"];
        }
    }
}
