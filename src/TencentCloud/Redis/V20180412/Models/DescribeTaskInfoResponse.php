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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getStatus() 获取Task status. preparing: to be run; running: running; succeed: succeeded; failed: failed; error: running error.
 * @method void setStatus(string $Status) 设置Task status. preparing: to be run; running: running; succeed: succeeded; failed: failed; error: running error.
 * @method string getStartTime() 获取Task start time
 * @method void setStartTime(string $StartTime) 设置Task start time
 * @method string getTaskType() 获取Task type
 * @method void setTaskType(string $TaskType) 设置Task type
 * @method string getInstanceId() 获取Instance ID
 * @method void setInstanceId(string $InstanceId) 设置Instance ID
 * @method string getTaskMessage() 获取Task message, which is displayed in case of an error. It will be blank if the status is running or succeeded
 * @method void setTaskMessage(string $TaskMessage) 设置Task message, which is displayed in case of an error. It will be blank if the status is running or succeeded
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeTaskInfo response structure.
 */
class DescribeTaskInfoResponse extends AbstractModel
{
    /**
     * @var string Task status. preparing: to be run; running: running; succeed: succeeded; failed: failed; error: running error.
     */
    public $Status;

    /**
     * @var string Task start time
     */
    public $StartTime;

    /**
     * @var string Task type
     */
    public $TaskType;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Task message, which is displayed in case of an error. It will be blank if the status is running or succeeded
     */
    public $TaskMessage;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $Status Task status. preparing: to be run; running: running; succeed: succeeded; failed: failed; error: running error.
     * @param string $StartTime Task start time
     * @param string $TaskType Task type
     * @param string $InstanceId Instance ID
     * @param string $TaskMessage Task message, which is displayed in case of an error. It will be blank if the status is running or succeeded
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TaskMessage",$param) and $param["TaskMessage"] !== null) {
            $this->TaskMessage = $param["TaskMessage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
