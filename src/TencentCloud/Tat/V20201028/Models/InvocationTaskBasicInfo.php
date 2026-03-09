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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Execution task description.
 *
 * @method string getInvocationTaskId() Obtain Execution task ID.
 * @method void setInvocationTaskId(string $InvocationTaskId) Set Execution task ID.
 * @method string getTaskStatus() Obtain Execution task status. valid values:.

-PENDING: waiting for distribution.
-DELIVERING: distributing.
-DELIVER_DELAYED: delivery delay.
-DELIVER_FAILED: delivery fail.
-START_FAILED: command start failed.
- RUNNING: command RUNNING.
-SUCCESS: command success.
-FAILED: command execution failed, exit code not 0.
-TIMEOUT: command timeout.
-TASK_TIMEOUT: client no response.
-Canceling.
- CANCELLED: canceled (command canceled before startup).
-TERMINATED: suspended (canceled during command execution).
 * @method void setTaskStatus(string $TaskStatus) Set Execution task status. valid values:.

-PENDING: waiting for distribution.
-DELIVERING: distributing.
-DELIVER_DELAYED: delivery delay.
-DELIVER_FAILED: delivery fail.
-START_FAILED: command start failed.
- RUNNING: command RUNNING.
-SUCCESS: command success.
-FAILED: command execution failed, exit code not 0.
-TIMEOUT: command timeout.
-TASK_TIMEOUT: client no response.
-Canceling.
- CANCELLED: canceled (command canceled before startup).
-TERMINATED: suspended (canceled during command execution).
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 */
class InvocationTaskBasicInfo extends AbstractModel
{
    /**
     * @var string Execution task ID.
     */
    public $InvocationTaskId;

    /**
     * @var string Execution task status. valid values:.

-PENDING: waiting for distribution.
-DELIVERING: distributing.
-DELIVER_DELAYED: delivery delay.
-DELIVER_FAILED: delivery fail.
-START_FAILED: command start failed.
- RUNNING: command RUNNING.
-SUCCESS: command success.
-FAILED: command execution failed, exit code not 0.
-TIMEOUT: command timeout.
-TASK_TIMEOUT: client no response.
-Canceling.
- CANCELLED: canceled (command canceled before startup).
-TERMINATED: suspended (canceled during command execution).
     */
    public $TaskStatus;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @param string $InvocationTaskId Execution task ID.
     * @param string $TaskStatus Execution task status. valid values:.

-PENDING: waiting for distribution.
-DELIVERING: distributing.
-DELIVER_DELAYED: delivery delay.
-DELIVER_FAILED: delivery fail.
-START_FAILED: command start failed.
- RUNNING: command RUNNING.
-SUCCESS: command success.
-FAILED: command execution failed, exit code not 0.
-TIMEOUT: command timeout.
-TASK_TIMEOUT: client no response.
-Canceling.
- CANCELLED: canceled (command canceled before startup).
-TERMINATED: suspended (canceled during command execution).
     * @param string $InstanceId Instance ID.
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
        if (array_key_exists("InvocationTaskId",$param) and $param["InvocationTaskId"] !== null) {
            $this->InvocationTaskId = $param["InvocationTaskId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
