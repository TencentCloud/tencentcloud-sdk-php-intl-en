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
 * CompleteLifecycleAction request structure.
 *
 * @method string getLifecycleHookId() Obtain Lifecycle hook ID. you can get the lifecycle hook ID by calling the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieving the `LifecycleHookId` from the returned information.
 * @method void setLifecycleHookId(string $LifecycleHookId) Set Lifecycle hook ID. you can get the lifecycle hook ID by calling the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieving the `LifecycleHookId` from the returned information.
 * @method string getLifecycleActionResult() Obtain Describes the result of the lifecycle action. valid values are as follows:.
<Li>CONTINUE: default value, means continue execution of capacity expansion or reduction</li>.
<li>ABANDON: for scale-out hooks, CVM instances with hook timeout or failed LifecycleCommand execution will be released directly or moved; for scale-in hooks, scale-in activities will continue.</li>.
 * @method void setLifecycleActionResult(string $LifecycleActionResult) Set Describes the result of the lifecycle action. valid values are as follows:.
<Li>CONTINUE: default value, means continue execution of capacity expansion or reduction</li>.
<li>ABANDON: for scale-out hooks, CVM instances with hook timeout or failed LifecycleCommand execution will be released directly or moved; for scale-in hooks, scale-in activities will continue.</li>.
 * @method string getInstanceId() Obtain One of the parameters `InstanceId` or `LifecycleActionToken` is required. you can get the instance ID by logging in to the [console](https://console.cloud.tencent.com/cvm/index) or making an api call to [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and retrieving the `InstanceId` from the returned information.
 * @method void setInstanceId(string $InstanceId) Set One of the parameters `InstanceId` or `LifecycleActionToken` is required. you can get the instance ID by logging in to the [console](https://console.cloud.tencent.com/cvm/index) or making an api call to [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and retrieving the `InstanceId` from the returned information.
 * @method string getLifecycleActionToken() Obtain Lifecycle action token. specifies that one of `InstanceId` or `LifecycleActionToken` must be filled.
The method for accessing the parameter is as follows: when the hook of the `NotificationTarget` parameter is triggered, deliver a message containing the token to the message queue specified in the `NotificationTarget` parameter. the message queue consumer can obtain the token from the message.
 * @method void setLifecycleActionToken(string $LifecycleActionToken) Set Lifecycle action token. specifies that one of `InstanceId` or `LifecycleActionToken` must be filled.
The method for accessing the parameter is as follows: when the hook of the `NotificationTarget` parameter is triggered, deliver a message containing the token to the message queue specified in the `NotificationTarget` parameter. the message queue consumer can obtain the token from the message.
 */
class CompleteLifecycleActionRequest extends AbstractModel
{
    /**
     * @var string Lifecycle hook ID. you can get the lifecycle hook ID by calling the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieving the `LifecycleHookId` from the returned information.
     */
    public $LifecycleHookId;

    /**
     * @var string Describes the result of the lifecycle action. valid values are as follows:.
<Li>CONTINUE: default value, means continue execution of capacity expansion or reduction</li>.
<li>ABANDON: for scale-out hooks, CVM instances with hook timeout or failed LifecycleCommand execution will be released directly or moved; for scale-in hooks, scale-in activities will continue.</li>.
     */
    public $LifecycleActionResult;

    /**
     * @var string One of the parameters `InstanceId` or `LifecycleActionToken` is required. you can get the instance ID by logging in to the [console](https://console.cloud.tencent.com/cvm/index) or making an api call to [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and retrieving the `InstanceId` from the returned information.
     */
    public $InstanceId;

    /**
     * @var string Lifecycle action token. specifies that one of `InstanceId` or `LifecycleActionToken` must be filled.
The method for accessing the parameter is as follows: when the hook of the `NotificationTarget` parameter is triggered, deliver a message containing the token to the message queue specified in the `NotificationTarget` parameter. the message queue consumer can obtain the token from the message.
     */
    public $LifecycleActionToken;

    /**
     * @param string $LifecycleHookId Lifecycle hook ID. you can get the lifecycle hook ID by calling the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieving the `LifecycleHookId` from the returned information.
     * @param string $LifecycleActionResult Describes the result of the lifecycle action. valid values are as follows:.
<Li>CONTINUE: default value, means continue execution of capacity expansion or reduction</li>.
<li>ABANDON: for scale-out hooks, CVM instances with hook timeout or failed LifecycleCommand execution will be released directly or moved; for scale-in hooks, scale-in activities will continue.</li>.
     * @param string $InstanceId One of the parameters `InstanceId` or `LifecycleActionToken` is required. you can get the instance ID by logging in to the [console](https://console.cloud.tencent.com/cvm/index) or making an api call to [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and retrieving the `InstanceId` from the returned information.
     * @param string $LifecycleActionToken Lifecycle action token. specifies that one of `InstanceId` or `LifecycleActionToken` must be filled.
The method for accessing the parameter is as follows: when the hook of the `NotificationTarget` parameter is triggered, deliver a message containing the token to the message queue specified in the `NotificationTarget` parameter. the message queue consumer can obtain the token from the message.
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
