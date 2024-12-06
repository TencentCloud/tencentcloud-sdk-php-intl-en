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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNetworkFirewallPolicyStatus response structure.
 *
 * @method string getTaskStatus() Obtain Task status. Valid values: `Task_Running`, `Task_Succ`, `Task_Error`, `Task_NoExist`.
 * @method void setTaskStatus(string $TaskStatus) Set Task status. Valid values: `Task_Running`, `Task_Succ`, `Task_Error`, `Task_NoExist`.
 * @method array getTaskResult() Obtain Task result, such as `NameRepeat` and `K8sRuleIngressPortError`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskResult(array $TaskResult) Set Task result, such as `NameRepeat` and `K8sRuleIngressPortError`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeNetworkFirewallPolicyStatusResponse extends AbstractModel
{
    /**
     * @var string Task status. Valid values: `Task_Running`, `Task_Succ`, `Task_Error`, `Task_NoExist`.
     */
    public $TaskStatus;

    /**
     * @var array Task result, such as `NameRepeat` and `K8sRuleIngressPortError`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskResult;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TaskStatus Task status. Valid values: `Task_Running`, `Task_Succ`, `Task_Error`, `Task_NoExist`.
     * @param array $TaskResult Task result, such as `NameRepeat` and `K8sRuleIngressPortError`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskResult",$param) and $param["TaskResult"] !== null) {
            $this->TaskResult = $param["TaskResult"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
