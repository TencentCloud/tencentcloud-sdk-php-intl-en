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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned results of querying complex task details
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method integer getStatus() Obtain Task status. 1: NEW, 2: RUNNING, 3: COMPLETED, 4: FAILED
 * @method void setStatus(integer $Status) Set Task status. 1: NEW, 2: RUNNING, 3: COMPLETED, 4: FAILED
 * @method string getFailReason() Obtain Reason for failure
 * @method void setFailReason(string $FailReason) Set Reason for failure
 * @method float getProgress() Obtain Progress (0-1)
 * @method void setProgress(float $Progress) Set Progress (0-1)
 * @method string getAction() Obtain Task operation type. A batch task type starts with "Batch".
 * @method void setAction(string $Action) Set Task operation type. A batch task type starts with "Batch".
 * @method string getActionZhDesc() Obtain Operation type Chinese description
 * @method void setActionZhDesc(string $ActionZhDesc) Set Operation type Chinese description
 * @method integer getTaskType() Obtain Task type. 1. Simple 2. Complex 3. Subtask
 * @method void setTaskType(integer $TaskType) Set Task type. 1. Simple 2. Complex 3. Subtask
 * @method string getResourceId() Obtain Task resource ID (invalid for complex tasks)
 * @method void setResourceId(string $ResourceId) Set Task resource ID (invalid for complex tasks)
 * @method integer getTotal() Obtain Total number of tasks (valid only for complex tasks)
 * @method void setTotal(integer $Total) Set Total number of tasks (valid only for complex tasks)
 * @method integer getSuccessCount() Obtain Successful Tasks (valid only for complex tasks)
 * @method void setSuccessCount(integer $SuccessCount) Set Successful Tasks (valid only for complex tasks)
 * @method integer getFailCount() Obtain Number of failed tasks (valid only for complex tasks)
 * @method void setFailCount(integer $FailCount) Set Number of failed tasks (valid only for complex tasks)
 * @method integer getRunningCount() Obtain Number of running tasks (valid only for complex tasks)
 * @method void setRunningCount(integer $RunningCount) Set Number of running tasks (valid only for complex tasks)
 * @method string getStartedAt() Obtain Task start time.
 * @method void setStartedAt(string $StartedAt) Set Task start time.
 * @method string getCreatedAt() Obtain Task creation time
 * @method void setCreatedAt(string $CreatedAt) Set Task creation time
 * @method string getUpdatedAt() Obtain Update task time.
 * @method void setUpdatedAt(string $UpdatedAt) Set Update task time.
 * @method integer getRuntime() Obtain Task running time in milliseconds.
 * @method void setRuntime(integer $Runtime) Set Task running time in milliseconds.
 * @method string getDeviceId() Obtain Device ID
 * @method void setDeviceId(string $DeviceId) Set Device ID
 * @method string getDeviceName() Obtain Device name.
 * @method void setDeviceName(string $DeviceName) Set Device name.
 * @method string getChannelId() Obtain Channel ID
 * @method void setChannelId(string $ChannelId) Set Channel ID
 * @method string getChannelName() Obtain Channel name
 * @method void setChannelName(string $ChannelName) Set Channel name
 */
class TaskData extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var integer Task status. 1: NEW, 2: RUNNING, 3: COMPLETED, 4: FAILED
     */
    public $Status;

    /**
     * @var string Reason for failure
     */
    public $FailReason;

    /**
     * @var float Progress (0-1)
     */
    public $Progress;

    /**
     * @var string Task operation type. A batch task type starts with "Batch".
     */
    public $Action;

    /**
     * @var string Operation type Chinese description
     */
    public $ActionZhDesc;

    /**
     * @var integer Task type. 1. Simple 2. Complex 3. Subtask
     */
    public $TaskType;

    /**
     * @var string Task resource ID (invalid for complex tasks)
     */
    public $ResourceId;

    /**
     * @var integer Total number of tasks (valid only for complex tasks)
     */
    public $Total;

    /**
     * @var integer Successful Tasks (valid only for complex tasks)
     */
    public $SuccessCount;

    /**
     * @var integer Number of failed tasks (valid only for complex tasks)
     */
    public $FailCount;

    /**
     * @var integer Number of running tasks (valid only for complex tasks)
     */
    public $RunningCount;

    /**
     * @var string Task start time.
     */
    public $StartedAt;

    /**
     * @var string Task creation time
     */
    public $CreatedAt;

    /**
     * @var string Update task time.
     */
    public $UpdatedAt;

    /**
     * @var integer Task running time in milliseconds.
     */
    public $Runtime;

    /**
     * @var string Device ID
     */
    public $DeviceId;

    /**
     * @var string Device name.
     */
    public $DeviceName;

    /**
     * @var string Channel ID
     */
    public $ChannelId;

    /**
     * @var string Channel name
     */
    public $ChannelName;

    /**
     * @param string $TaskId Task ID.
     * @param integer $Status Task status. 1: NEW, 2: RUNNING, 3: COMPLETED, 4: FAILED
     * @param string $FailReason Reason for failure
     * @param float $Progress Progress (0-1)
     * @param string $Action Task operation type. A batch task type starts with "Batch".
     * @param string $ActionZhDesc Operation type Chinese description
     * @param integer $TaskType Task type. 1. Simple 2. Complex 3. Subtask
     * @param string $ResourceId Task resource ID (invalid for complex tasks)
     * @param integer $Total Total number of tasks (valid only for complex tasks)
     * @param integer $SuccessCount Successful Tasks (valid only for complex tasks)
     * @param integer $FailCount Number of failed tasks (valid only for complex tasks)
     * @param integer $RunningCount Number of running tasks (valid only for complex tasks)
     * @param string $StartedAt Task start time.
     * @param string $CreatedAt Task creation time
     * @param string $UpdatedAt Update task time.
     * @param integer $Runtime Task running time in milliseconds.
     * @param string $DeviceId Device ID
     * @param string $DeviceName Device name.
     * @param string $ChannelId Channel ID
     * @param string $ChannelName Channel name
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ActionZhDesc",$param) and $param["ActionZhDesc"] !== null) {
            $this->ActionZhDesc = $param["ActionZhDesc"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("RunningCount",$param) and $param["RunningCount"] !== null) {
            $this->RunningCount = $param["RunningCount"];
        }

        if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
            $this->StartedAt = $param["StartedAt"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }
    }
}
