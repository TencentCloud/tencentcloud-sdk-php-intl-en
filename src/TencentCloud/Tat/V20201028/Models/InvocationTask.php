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
 * Execution task.
 *
 * @method string getInvocationId() Obtain Execution activity ID.
 * @method void setInvocationId(string $InvocationId) Set Execution activity ID.
 * @method string getInvocationTaskId() Obtain Execution task ID.
 * @method void setInvocationTaskId(string $InvocationTaskId) Set Execution task ID.
 * @method string getCommandId() Obtain Command ID.
 * @method void setCommandId(string $CommandId) Set Command ID.
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
 * @method TaskResult getTaskResult() Obtain Execution result.
 * @method void setTaskResult(TaskResult $TaskResult) Set Execution result.
 * @method string getStartTime() Obtain Task start time. format: YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Task start time. format: YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Task end time. format: YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Task end time. format: YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time. the format is YYYY-MM-DDThh:MM:ssZ.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time. the format is YYYY-MM-DDThh:MM:ssZ.
 * @method string getUpdatedTime() Obtain Update time. the format is YYYY-MM-DDThh:MM:ssZ.
 * @method void setUpdatedTime(string $UpdatedTime) Set Update time. the format is YYYY-MM-DDThh:MM:ssZ.
 * @method CommandDocument getCommandDocument() Obtain Command details of the execution task.
 * @method void setCommandDocument(CommandDocument $CommandDocument) Set Command details of the execution task.
 * @method string getErrorInfo() Obtain Error message displayed when the execution task fails.
 * @method void setErrorInfo(string $ErrorInfo) Set Error message displayed when the execution task fails.
 * @method string getInvocationSource() Obtain Invocation source.

-USER: originate from user invocation.
-INVOKER: originate from scheduled execution.
 * @method void setInvocationSource(string $InvocationSource) Set Invocation source.

-USER: originate from user invocation.
-INVOKER: originate from scheduled execution.
 * @method string getCommandName() Obtain Name of the executed command.
 * @method void setCommandName(string $CommandName) Set Name of the executed command.
 */
class InvocationTask extends AbstractModel
{
    /**
     * @var string Execution activity ID.
     */
    public $InvocationId;

    /**
     * @var string Execution task ID.
     */
    public $InvocationTaskId;

    /**
     * @var string Command ID.
     */
    public $CommandId;

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
     * @var TaskResult Execution result.
     */
    public $TaskResult;

    /**
     * @var string Task start time. format: YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Task end time. format: YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Creation time. the format is YYYY-MM-DDThh:MM:ssZ.
     */
    public $CreatedTime;

    /**
     * @var string Update time. the format is YYYY-MM-DDThh:MM:ssZ.
     */
    public $UpdatedTime;

    /**
     * @var CommandDocument Command details of the execution task.
     */
    public $CommandDocument;

    /**
     * @var string Error message displayed when the execution task fails.
     */
    public $ErrorInfo;

    /**
     * @var string Invocation source.

-USER: originate from user invocation.
-INVOKER: originate from scheduled execution.
     */
    public $InvocationSource;

    /**
     * @var string Name of the executed command.
     */
    public $CommandName;

    /**
     * @param string $InvocationId Execution activity ID.
     * @param string $InvocationTaskId Execution task ID.
     * @param string $CommandId Command ID.
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
     * @param TaskResult $TaskResult Execution result.
     * @param string $StartTime Task start time. format: YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Task end time. format: YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time. the format is YYYY-MM-DDThh:MM:ssZ.
     * @param string $UpdatedTime Update time. the format is YYYY-MM-DDThh:MM:ssZ.
     * @param CommandDocument $CommandDocument Command details of the execution task.
     * @param string $ErrorInfo Error message displayed when the execution task fails.
     * @param string $InvocationSource Invocation source.

-USER: originate from user invocation.
-INVOKER: originate from scheduled execution.
     * @param string $CommandName Name of the executed command.
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
        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            $this->InvocationId = $param["InvocationId"];
        }

        if (array_key_exists("InvocationTaskId",$param) and $param["InvocationTaskId"] !== null) {
            $this->InvocationTaskId = $param["InvocationTaskId"];
        }

        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TaskResult",$param) and $param["TaskResult"] !== null) {
            $this->TaskResult = new TaskResult();
            $this->TaskResult->deserialize($param["TaskResult"]);
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("CommandDocument",$param) and $param["CommandDocument"] !== null) {
            $this->CommandDocument = new CommandDocument();
            $this->CommandDocument->deserialize($param["CommandDocument"]);
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }

        if (array_key_exists("InvocationSource",$param) and $param["InvocationSource"] !== null) {
            $this->InvocationSource = $param["InvocationSource"];
        }

        if (array_key_exists("CommandName",$param) and $param["CommandName"] !== null) {
            $this->CommandName = $param["CommandName"];
        }
    }
}
