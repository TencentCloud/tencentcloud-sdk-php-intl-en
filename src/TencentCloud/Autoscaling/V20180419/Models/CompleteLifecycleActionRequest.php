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
 * CompleteLifecycleAction request structure.
 *
 * @method string getLifecycleHookId() Obtain Lifecycle hook ID
 * @method void setLifecycleHookId(string $LifecycleHookId) Set Lifecycle hook ID
 * @method string getLifecycleActionResult() Obtain Result of the lifecycle action. Value range: "CONTINUE", "ABANDON"
 * @method void setLifecycleActionResult(string $LifecycleActionResult) Set Result of the lifecycle action. Value range: "CONTINUE", "ABANDON"
 * @method string getInstanceId() Obtain Instance ID. Either "InstanceId" or "LifecycleActionToken" must be specified
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Either "InstanceId" or "LifecycleActionToken" must be specified
 * @method string getLifecycleActionToken() Obtain Either "InstanceId" or "LifecycleActionToken" must be specified
 * @method void setLifecycleActionToken(string $LifecycleActionToken) Set Either "InstanceId" or "LifecycleActionToken" must be specified
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
