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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query job run list returned parameter
 *
 * @method string getExecutionId() Obtain Running ID of the task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionId(string $ExecutionId) Set Running ID of the task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowId() Obtain Workflow ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowExecutionId() Obtain Running ID of the workflow
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowExecutionId(string $WorkflowExecutionId) Set Running ID of the workflow
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTriggerType() Obtain Trigger Type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerType(string $TriggerType) Set Trigger Type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWaitTime() Obtain Waiting duration, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWaitTime(string $WaitTime) Set Waiting duration, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecuteUserUin() Obtain Operating Account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecuteUserUin(string $ExecuteUserUin) Set Operating Account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScheduleTime() Obtain Planned scheduling time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScheduleTime(string $ScheduleTime) Set Planned scheduling time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionStartTime() Obtain Start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionEndTime() Obtain Running end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionEndTime(string $ExecutionEndTime) Set Running end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionTime() Obtain Running time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionTime(string $ExecutionTime) Set Running time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRetryTimes() Obtain Times of automatic retry
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRetryTimes(integer $RetryTimes) Set Times of automatic retry
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorCodeStr() Obtain Error code description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorCodeStr(string $ErrorCodeStr) Set Error code description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskName() Obtain Task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskName(string $TaskName) Set Task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowName() Obtain Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRerunTimes() Obtain Number of manual rerun attempts by the user
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRerunTimes(integer $RerunTimes) Set Number of manual rerun attempts by the user
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskExecutionState() Obtain Task running status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskExecutionState(string $TaskExecutionState) Set Task running status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsLatestExecution() Obtain Whether it is the most recent run
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsLatestExecution(boolean $IsLatestExecution) Set Whether it is the most recent run
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ListTriggerTaskRunBrief extends AbstractModel
{
    /**
     * @var string Running ID of the task
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionId;

    /**
     * @var string Workflow ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Running ID of the workflow
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowExecutionId;

    /**
     * @var string Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Trigger Type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerType;

    /**
     * @var string Waiting duration, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WaitTime;

    /**
     * @var string Operating Account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecuteUserUin;

    /**
     * @var string Planned scheduling time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScheduleTime;

    /**
     * @var string Start time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionStartTime;

    /**
     * @var string Running end time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionEndTime;

    /**
     * @var string Running time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionTime;

    /**
     * @var integer Times of automatic retry
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RetryTimes;

    /**
     * @var string Error code description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorCodeStr;

    /**
     * @var string Task name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskName;

    /**
     * @var string Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowName;

    /**
     * @var integer Number of manual rerun attempts by the user
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RerunTimes;

    /**
     * @var string Task running status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskExecutionState;

    /**
     * @var boolean Whether it is the most recent run
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsLatestExecution;

    /**
     * @param string $ExecutionId Running ID of the task
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowId Workflow ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowExecutionId Running ID of the workflow
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskId Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TriggerType Trigger Type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WaitTime Waiting duration, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecuteUserUin Operating Account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScheduleTime Planned scheduling time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionStartTime Start time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionEndTime Running end time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionTime Running time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RetryTimes Times of automatic retry
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorCodeStr Error code description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskName Task name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowName Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RerunTimes Number of manual rerun attempts by the user
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskExecutionState Task running status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsLatestExecution Whether it is the most recent run
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ExecutionId",$param) and $param["ExecutionId"] !== null) {
            $this->ExecutionId = $param["ExecutionId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowExecutionId",$param) and $param["WorkflowExecutionId"] !== null) {
            $this->WorkflowExecutionId = $param["WorkflowExecutionId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("WaitTime",$param) and $param["WaitTime"] !== null) {
            $this->WaitTime = $param["WaitTime"];
        }

        if (array_key_exists("ExecuteUserUin",$param) and $param["ExecuteUserUin"] !== null) {
            $this->ExecuteUserUin = $param["ExecuteUserUin"];
        }

        if (array_key_exists("ScheduleTime",$param) and $param["ScheduleTime"] !== null) {
            $this->ScheduleTime = $param["ScheduleTime"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            $this->ExecutionTime = $param["ExecutionTime"];
        }

        if (array_key_exists("RetryTimes",$param) and $param["RetryTimes"] !== null) {
            $this->RetryTimes = $param["RetryTimes"];
        }

        if (array_key_exists("ErrorCodeStr",$param) and $param["ErrorCodeStr"] !== null) {
            $this->ErrorCodeStr = $param["ErrorCodeStr"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("RerunTimes",$param) and $param["RerunTimes"] !== null) {
            $this->RerunTimes = $param["RerunTimes"];
        }

        if (array_key_exists("TaskExecutionState",$param) and $param["TaskExecutionState"] !== null) {
            $this->TaskExecutionState = $param["TaskExecutionState"];
        }

        if (array_key_exists("IsLatestExecution",$param) and $param["IsLatestExecution"] !== null) {
            $this->IsLatestExecution = $param["IsLatestExecution"];
        }
    }
}
