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
 * Workflow operation summary information.
 *
 * @method string getAppId() Obtain User AppId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(string $AppId) Set User AppId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectId() Obtain Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowName() Obtain Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowId() Obtain Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionId() Obtain Workflow running ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionId(string $ExecutionId) Set Workflow running ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTriggerId() Obtain Trigger ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerId(string $TriggerId) Set Trigger ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTriggerType() Obtain Trigger mode: scheduling trigger Scheduler, manual trigger ManualTrigger, Event trigger Event.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerType(string $TriggerType) Set Trigger mode: scheduling trigger Scheduler, manual trigger ManualTrigger, Event trigger Event.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Workflow trigger time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Workflow trigger time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionStartTime() Obtain Execution start timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Execution start timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionEndTime() Obtain Execution end timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionEndTime(string $ExecutionEndTime) Set Execution end timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionCostTime() Obtain Running time, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionCostTime(string $ExecutionCostTime) Set Running time, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQueueCostTime() Obtain Concurrent queue time taken, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQueueCostTime(string $QueueCostTime) Set Concurrent queue time taken, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPendingCostTime() Obtain Wait time for resource spending, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPendingCostTime(string $PendingCostTime) Set Wait time for resource spending, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionState() Obtain Execution status: execution FAILED: FAILED, operation successful: SUCCESS, waiting: PENDING, skip RUNNING: SKIPED, RUNNING: RUNNING.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionState(string $ExecutionState) Set Execution status: execution FAILED: FAILED, operation successful: SUCCESS, waiting: PENDING, skip RUNNING: SKIPED, RUNNING: RUNNING.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecuteUserUin() Obtain Running user UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecuteUserUin(string $ExecuteUserUin) Set Running user UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecuteUserName() Obtain Running username.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecuteUserName(string $ExecuteUserName) Set Running username.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorCodeStr() Obtain Error code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorCodeStr(string $ErrorCodeStr) Set Error code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowParams() Obtain Running parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowParams(string $WorkflowParams) Set Running parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowVersionId() Obtain Workflow version info ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowVersionId(string $WorkflowVersionId) Set Workflow version info ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSupportRerun() Obtain Whether rerun is supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportRerun(boolean $SupportRerun) Set Whether rerun is supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRerunTimes() Obtain Number of reruns.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRerunTimes(integer $RerunTimes) Set Number of reruns.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSelectedTaskIds() Obtain Running task scope, comma-separated task ID list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSelectedTaskIds(array $SelectedTaskIds) Set Running task scope, comma-separated task ID list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPendingStartTime() Obtain Start time of pending concurrency.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPendingStartTime(string $PendingStartTime) Set Start time of pending concurrency.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQueueStartTime() Obtain Queued waiting start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQueueStartTime(string $QueueStartTime) Set Queued waiting start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Running end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Running end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFolderId() Obtain Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFolderId(string $FolderId) Set Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFolderName() Obtain Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFolderName(string $FolderName) Set Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPlannedSchedulingTime() Obtain Planned scheduling time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPlannedSchedulingTime(string $PlannedSchedulingTime) Set Planned scheduling time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCycleType() Obtain Cycle type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCycleType(string $CycleType) Set Cycle type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserNameInCharge() Obtain Responsible person's name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserNameInCharge(string $UserNameInCharge) Set Responsible person's name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserUinInCharge() Obtain Responsible person ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserUinInCharge(string $UserUinInCharge) Set Responsible person ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TriggerWorkflowRunBrief extends AbstractModel
{
    /**
     * @var string User AppId
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowName;

    /**
     * @var string Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Workflow running ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionId;

    /**
     * @var string Trigger ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerId;

    /**
     * @var string Trigger mode: scheduling trigger Scheduler, manual trigger ManualTrigger, Event trigger Event.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerType;

    /**
     * @var string Workflow trigger time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Execution start timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionStartTime;

    /**
     * @var string Execution end timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionEndTime;

    /**
     * @var string Running time, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionCostTime;

    /**
     * @var string Concurrent queue time taken, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QueueCostTime;

    /**
     * @var string Wait time for resource spending, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PendingCostTime;

    /**
     * @var string Execution status: execution FAILED: FAILED, operation successful: SUCCESS, waiting: PENDING, skip RUNNING: SKIPED, RUNNING: RUNNING.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionState;

    /**
     * @var string Running user UIN.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecuteUserUin;

    /**
     * @var string Running username.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecuteUserName;

    /**
     * @var string Error code
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorCodeStr;

    /**
     * @var string Running parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowParams;

    /**
     * @var string Workflow version info ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowVersionId;

    /**
     * @var boolean Whether rerun is supported.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportRerun;

    /**
     * @var integer Number of reruns.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RerunTimes;

    /**
     * @var array Running task scope, comma-separated task ID list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SelectedTaskIds;

    /**
     * @var string Start time of pending concurrency.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PendingStartTime;

    /**
     * @var string Queued waiting start time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QueueStartTime;

    /**
     * @var string Running end time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FolderId;

    /**
     * @var string Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FolderName;

    /**
     * @var string Planned scheduling time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PlannedSchedulingTime;

    /**
     * @var string Cycle type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CycleType;

    /**
     * @var string Responsible person's name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserNameInCharge;

    /**
     * @var string Responsible person ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserUinInCharge;

    /**
     * @param string $AppId User AppId
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectId Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowName Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowId Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionId Workflow running ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TriggerId Trigger ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TriggerType Trigger mode: scheduling trigger Scheduler, manual trigger ManualTrigger, Event trigger Event.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Workflow trigger time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionStartTime Execution start timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionEndTime Execution end timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionCostTime Running time, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $QueueCostTime Concurrent queue time taken, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PendingCostTime Wait time for resource spending, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionState Execution status: execution FAILED: FAILED, operation successful: SUCCESS, waiting: PENDING, skip RUNNING: SKIPED, RUNNING: RUNNING.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecuteUserUin Running user UIN.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecuteUserName Running username.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorCodeStr Error code
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowParams Running parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowVersionId Workflow version info ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SupportRerun Whether rerun is supported.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RerunTimes Number of reruns.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SelectedTaskIds Running task scope, comma-separated task ID list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PendingStartTime Start time of pending concurrency.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $QueueStartTime Queued waiting start time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Running end time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FolderId Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FolderName Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PlannedSchedulingTime Planned scheduling time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CycleType Cycle type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserNameInCharge Responsible person's name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserUinInCharge Responsible person ID.
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("ExecutionId",$param) and $param["ExecutionId"] !== null) {
            $this->ExecutionId = $param["ExecutionId"];
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("ExecutionCostTime",$param) and $param["ExecutionCostTime"] !== null) {
            $this->ExecutionCostTime = $param["ExecutionCostTime"];
        }

        if (array_key_exists("QueueCostTime",$param) and $param["QueueCostTime"] !== null) {
            $this->QueueCostTime = $param["QueueCostTime"];
        }

        if (array_key_exists("PendingCostTime",$param) and $param["PendingCostTime"] !== null) {
            $this->PendingCostTime = $param["PendingCostTime"];
        }

        if (array_key_exists("ExecutionState",$param) and $param["ExecutionState"] !== null) {
            $this->ExecutionState = $param["ExecutionState"];
        }

        if (array_key_exists("ExecuteUserUin",$param) and $param["ExecuteUserUin"] !== null) {
            $this->ExecuteUserUin = $param["ExecuteUserUin"];
        }

        if (array_key_exists("ExecuteUserName",$param) and $param["ExecuteUserName"] !== null) {
            $this->ExecuteUserName = $param["ExecuteUserName"];
        }

        if (array_key_exists("ErrorCodeStr",$param) and $param["ErrorCodeStr"] !== null) {
            $this->ErrorCodeStr = $param["ErrorCodeStr"];
        }

        if (array_key_exists("WorkflowParams",$param) and $param["WorkflowParams"] !== null) {
            $this->WorkflowParams = $param["WorkflowParams"];
        }

        if (array_key_exists("WorkflowVersionId",$param) and $param["WorkflowVersionId"] !== null) {
            $this->WorkflowVersionId = $param["WorkflowVersionId"];
        }

        if (array_key_exists("SupportRerun",$param) and $param["SupportRerun"] !== null) {
            $this->SupportRerun = $param["SupportRerun"];
        }

        if (array_key_exists("RerunTimes",$param) and $param["RerunTimes"] !== null) {
            $this->RerunTimes = $param["RerunTimes"];
        }

        if (array_key_exists("SelectedTaskIds",$param) and $param["SelectedTaskIds"] !== null) {
            $this->SelectedTaskIds = $param["SelectedTaskIds"];
        }

        if (array_key_exists("PendingStartTime",$param) and $param["PendingStartTime"] !== null) {
            $this->PendingStartTime = $param["PendingStartTime"];
        }

        if (array_key_exists("QueueStartTime",$param) and $param["QueueStartTime"] !== null) {
            $this->QueueStartTime = $param["QueueStartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("PlannedSchedulingTime",$param) and $param["PlannedSchedulingTime"] !== null) {
            $this->PlannedSchedulingTime = $param["PlannedSchedulingTime"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("UserNameInCharge",$param) and $param["UserNameInCharge"] !== null) {
            $this->UserNameInCharge = $param["UserNameInCharge"];
        }

        if (array_key_exists("UserUinInCharge",$param) and $param["UserUinInCharge"] !== null) {
            $this->UserUinInCharge = $param["UserUinInCharge"];
        }
    }
}
