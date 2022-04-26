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
 * @method string getTaskStatus() Obtain Execution task status. Valid values:
<li> PENDING: Pending 
<li> DELIVERING: Delivering
<li> DELIVER_DELAYED: Delivery delayed 
<li> DELIVER_FAILED: Delivery failed
<li> START_FAILED: Failed to start the command
<li> RUNNING: Running
<li> SUCCESS: Success
<li> FAILED: Failed to execute the command. The exit code is not 0 after execution.
<li> TIMEOUT: Command timed out
<li> TASK_TIMEOUT: Task timed out
<li> CANCELLING: Canceling
<li> CANCELLED: Canceled (canceled before execution)
<li> TERMINATED: Terminated (canceled during execution)
 * @method void setTaskStatus(string $TaskStatus) Set Execution task status. Valid values:
<li> PENDING: Pending 
<li> DELIVERING: Delivering
<li> DELIVER_DELAYED: Delivery delayed 
<li> DELIVER_FAILED: Delivery failed
<li> START_FAILED: Failed to start the command
<li> RUNNING: Running
<li> SUCCESS: Success
<li> FAILED: Failed to execute the command. The exit code is not 0 after execution.
<li> TIMEOUT: Command timed out
<li> TASK_TIMEOUT: Task timed out
<li> CANCELLING: Canceling
<li> CANCELLED: Canceled (canceled before execution)
<li> TERMINATED: Terminated (canceled during execution)
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method TaskResult getTaskResult() Obtain Execution result.
 * @method void setTaskResult(TaskResult $TaskResult) Set Execution result.
 * @method string getStartTime() Obtain Start time of the execution task.
 * @method void setStartTime(string $StartTime) Set Start time of the execution task.
 * @method string getEndTime() Obtain End time of the execution task.
 * @method void setEndTime(string $EndTime) Set End time of the execution task.
 * @method string getCreatedTime() Obtain Creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time.
 * @method string getUpdatedTime() Obtain Update time.
 * @method void setUpdatedTime(string $UpdatedTime) Set Update time.
 * @method CommandDocument getCommandDocument() Obtain Command details of the execution task.
 * @method void setCommandDocument(CommandDocument $CommandDocument) Set Command details of the execution task.
 * @method string getErrorInfo() Obtain Error message displayed when the execution task fails.
 * @method void setErrorInfo(string $ErrorInfo) Set Error message displayed when the execution task fails.
 * @method string getInvocationSource() Obtain Invocation source.
 * @method void setInvocationSource(string $InvocationSource) Set Invocation source.
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
     * @var string Execution task status. Valid values:
<li> PENDING: Pending 
<li> DELIVERING: Delivering
<li> DELIVER_DELAYED: Delivery delayed 
<li> DELIVER_FAILED: Delivery failed
<li> START_FAILED: Failed to start the command
<li> RUNNING: Running
<li> SUCCESS: Success
<li> FAILED: Failed to execute the command. The exit code is not 0 after execution.
<li> TIMEOUT: Command timed out
<li> TASK_TIMEOUT: Task timed out
<li> CANCELLING: Canceling
<li> CANCELLED: Canceled (canceled before execution)
<li> TERMINATED: Terminated (canceled during execution)
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
     * @var string Start time of the execution task.
     */
    public $StartTime;

    /**
     * @var string End time of the execution task.
     */
    public $EndTime;

    /**
     * @var string Creation time.
     */
    public $CreatedTime;

    /**
     * @var string Update time.
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
     */
    public $InvocationSource;

    /**
     * @param string $InvocationId Execution activity ID.
     * @param string $InvocationTaskId Execution task ID.
     * @param string $CommandId Command ID.
     * @param string $TaskStatus Execution task status. Valid values:
<li> PENDING: Pending 
<li> DELIVERING: Delivering
<li> DELIVER_DELAYED: Delivery delayed 
<li> DELIVER_FAILED: Delivery failed
<li> START_FAILED: Failed to start the command
<li> RUNNING: Running
<li> SUCCESS: Success
<li> FAILED: Failed to execute the command. The exit code is not 0 after execution.
<li> TIMEOUT: Command timed out
<li> TASK_TIMEOUT: Task timed out
<li> CANCELLING: Canceling
<li> CANCELLED: Canceled (canceled before execution)
<li> TERMINATED: Terminated (canceled during execution)
     * @param string $InstanceId Instance ID.
     * @param TaskResult $TaskResult Execution result.
     * @param string $StartTime Start time of the execution task.
     * @param string $EndTime End time of the execution task.
     * @param string $CreatedTime Creation time.
     * @param string $UpdatedTime Update time.
     * @param CommandDocument $CommandDocument Command details of the execution task.
     * @param string $ErrorInfo Error message displayed when the execution task fails.
     * @param string $InvocationSource Invocation source.
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
    }
}
