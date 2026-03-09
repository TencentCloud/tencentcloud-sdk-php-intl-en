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
 * Summary information of task running in workflow scheduling mode.
 *
 * @method string getExecutionId() Obtain Running ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionId(string $ExecutionId) Set Running ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionState() Obtain Execution status: FAILED (FAILED to run), SUCCESS (executed successfully), PENDING (waiting), SKIP (SKIP RUNNING), RUNNING (RUNNING).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionState(string $ExecutionState) Set Execution status: FAILED (FAILED to run), SUCCESS (executed successfully), PENDING (waiting), SKIP (SKIP RUNNING), RUNNING (RUNNING).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectId() Obtain Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowId() Obtain Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowExecutionId() Obtain Running ID of the workflow.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowExecutionId(string $WorkflowExecutionId) Set Running ID of the workflow.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskType() Obtain Task type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskType(string $TaskType) Set Task type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskVersionId() Obtain Task version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskVersionId(string $TaskVersionId) Set Task version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTriggerType() Obtain Trigger Type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerType(string $TriggerType) Set Trigger Type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWaitTime() Obtain Waiting duration, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWaitTime(string $WaitTime) Set Waiting duration, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceGroup() Obtain Associated resource group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceGroup(string $ResourceGroup) Set Associated resource group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorCode() Obtain Error code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorCode(string $ErrorCode) Set Error code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecuteUserUin() Obtain Operating account.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecuteUserUin(string $ExecuteUserUin) Set Operating account.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreaterUin() Obtain Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreaterUin(string $CreaterUin) Set Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJobId() Obtain Execution ID of the execution platform.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobId(string $JobId) Set Execution ID of the execution platform.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation Timestamp
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation Timestamp
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update Timestamp
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update Timestamp
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDependenceFinishedTime() Obtain Task completion time dependency.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDependenceFinishedTime(string $DependenceFinishedTime) Set Task completion time dependency.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQueueStartTime() Obtain Task delivery time to the execution platform.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQueueStartTime(string $QueueStartTime) Set Task delivery time to the execution platform.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPendingStartTime() Obtain Started waiting for source time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPendingStartTime(string $PendingStartTime) Set Started waiting for source time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionStartTime() Obtain Start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionEndTime() Obtain Running end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionEndTime(string $ExecutionEndTime) Set Running end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQueueCostTime() Obtain Queuing time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQueueCostTime(string $QueueCostTime) Set Queuing time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionTime() Obtain Running time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionTime(string $ExecutionTime) Set Running time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAllCostTime() Obtain Total time spent.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAllCostTime(string $AllCostTime) Set Total time spent.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTimeZone() Obtain Time zone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeZone(string $TimeZone) Set Time zone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDependOnList() Obtain Depends on the upstream task ID list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDependOnList(array $DependOnList) Set Depends on the upstream task ID list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRunParams() Obtain Running parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRunParams(string $RunParams) Set Running parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskTypeExtensions() Obtain Task extension information, including script path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskTypeExtensions(string $TaskTypeExtensions) Set Task extension information, including script path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRetryTimes() Obtain Retry count. it indicates the first run when set to 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRetryTimes(integer $RetryTimes) Set Retry count. it indicates the first run when set to 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getLeftCoordinate() Obtain Left coordinate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLeftCoordinate(float $LeftCoordinate) Set Left coordinate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getTopCoordinate() Obtain Top coordinate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopCoordinate(float $TopCoordinate) Set Top coordinate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceGroupId() Obtain Resource group ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceGroupId(string $ResourceGroupId) Set Resource group ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorCodeStr() Obtain Error code description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorCodeStr(string $ErrorCodeStr) Set Error code description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUin() Obtain Creator UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUin(string $CreateUin) Set Creator UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssueTime() Obtain Issue the execution platform time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssueTime(string $IssueTime) Set Issue the execution platform time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskName() Obtain Task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskName(string $TaskName) Set Task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowName() Obtain Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecuteUserName() Obtain Operator name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecuteUserName(string $ExecuteUserName) Set Operator name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRerunTimes() Obtain Number of retries.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRerunTimes(integer $RerunTimes) Set Number of retries.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsLatestExecution() Obtain Whether it is the most recent run.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsLatestExecution(boolean $IsLatestExecution) Set Whether it is the most recent run.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskExecutionState() Obtain Task running status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskExecutionState(string $TaskExecutionState) Set Task running status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCycleType() Obtain Cycle type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCycleType(string $CycleType) Set Cycle type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserNameInCharge() Obtain Responsible person's name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserNameInCharge(string $UserNameInCharge) Set Responsible person's name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserUinInCharge() Obtain Responsible person id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserUinInCharge(string $UserUinInCharge) Set Responsible person id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceGroupName() Obtain Resource group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceGroupName(string $ResourceGroupName) Set Resource group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTimezone() Obtain Time zone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimezone(string $Timezone) Set Time zone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFolderId() Obtain Folder ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFolderId(string $FolderId) Set Folder ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFolderName() Obtain Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFolderName(string $FolderName) Set Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectName() Obtain Project name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskTypeId() Obtain Task type id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskTypeId(integer $TaskTypeId) Set Task type id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowParams() Obtain Workflow running parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowParams(string $WorkflowParams) Set Workflow running parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSupportRerun() Obtain Whether rerun is supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportRerun(boolean $SupportRerun) Set Whether rerun is supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowExecutionState() Obtain Workflow execution status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowExecutionState(string $WorkflowExecutionState) Set Workflow execution status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionResult() Obtain Task execution result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionResult(string $ExecutionResult) Set Task execution result.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TriggerTaskRunBrief extends AbstractModel
{
    /**
     * @var string Running ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionId;

    /**
     * @var string Execution status: FAILED (FAILED to run), SUCCESS (executed successfully), PENDING (waiting), SKIP (SKIP RUNNING), RUNNING (RUNNING).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionState;

    /**
     * @var string Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Running ID of the workflow.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowExecutionId;

    /**
     * @var string Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskType;

    /**
     * @var string Task version.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskVersionId;

    /**
     * @var string Trigger Type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerType;

    /**
     * @var string Waiting duration, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WaitTime;

    /**
     * @var string Associated resource group.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceGroup;

    /**
     * @var string Error code
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorCode;

    /**
     * @var string Operating account.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecuteUserUin;

    /**
     * @var string Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreaterUin;

    /**
     * @var string Execution ID of the execution platform.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobId;

    /**
     * @var string Creation Timestamp
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update Timestamp
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Task completion time dependency.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DependenceFinishedTime;

    /**
     * @var string Task delivery time to the execution platform.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QueueStartTime;

    /**
     * @var string Started waiting for source time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PendingStartTime;

    /**
     * @var string Start time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionStartTime;

    /**
     * @var string Running end time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionEndTime;

    /**
     * @var string Queuing time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QueueCostTime;

    /**
     * @var string Running time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionTime;

    /**
     * @var string Total time spent.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AllCostTime;

    /**
     * @var string Time zone.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeZone;

    /**
     * @var array Depends on the upstream task ID list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DependOnList;

    /**
     * @var string Running parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RunParams;

    /**
     * @var string Task extension information, including script path.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskTypeExtensions;

    /**
     * @var integer Retry count. it indicates the first run when set to 0.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RetryTimes;

    /**
     * @var float Left coordinate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LeftCoordinate;

    /**
     * @var float Top coordinate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopCoordinate;

    /**
     * @var string Resource group ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceGroupId;

    /**
     * @var string Error code description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorCodeStr;

    /**
     * @var string Creator UIN.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUin;

    /**
     * @var string Issue the execution platform time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssueTime;

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
     * @var string Operator name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecuteUserName;

    /**
     * @var integer Number of retries.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RerunTimes;

    /**
     * @var boolean Whether it is the most recent run.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsLatestExecution;

    /**
     * @var string Task running status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskExecutionState;

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
     * @var string Responsible person id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserUinInCharge;

    /**
     * @var string Resource group name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceGroupName;

    /**
     * @var string Time zone.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Timezone;

    /**
     * @var string Folder ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FolderId;

    /**
     * @var string Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FolderName;

    /**
     * @var string Project name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectName;

    /**
     * @var integer Task type id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskTypeId;

    /**
     * @var string Workflow running parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowParams;

    /**
     * @var boolean Whether rerun is supported.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportRerun;

    /**
     * @var string Workflow execution status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowExecutionState;

    /**
     * @var string Task execution result.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionResult;

    /**
     * @param string $ExecutionId Running ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionState Execution status: FAILED (FAILED to run), SUCCESS (executed successfully), PENDING (waiting), SKIP (SKIP RUNNING), RUNNING (RUNNING).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectId Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowId Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowExecutionId Running ID of the workflow.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskId Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskType Task type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskVersionId Task version.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TriggerType Trigger Type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WaitTime Waiting duration, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceGroup Associated resource group.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorCode Error code
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecuteUserUin Operating account.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreaterUin Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JobId Execution ID of the execution platform.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation Timestamp
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update Timestamp
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DependenceFinishedTime Task completion time dependency.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $QueueStartTime Task delivery time to the execution platform.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PendingStartTime Started waiting for source time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionStartTime Start time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionEndTime Running end time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $QueueCostTime Queuing time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionTime Running time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AllCostTime Total time spent.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TimeZone Time zone.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DependOnList Depends on the upstream task ID list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RunParams Running parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskTypeExtensions Task extension information, including script path.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RetryTimes Retry count. it indicates the first run when set to 0.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $LeftCoordinate Left coordinate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $TopCoordinate Top coordinate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceGroupId Resource group ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorCodeStr Error code description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUin Creator UIN.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssueTime Issue the execution platform time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskName Task name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowName Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecuteUserName Operator name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RerunTimes Number of retries.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsLatestExecution Whether it is the most recent run.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskExecutionState Task running status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CycleType Cycle type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserNameInCharge Responsible person's name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserUinInCharge Responsible person id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceGroupName Resource group name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Timezone Time zone.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FolderId Folder ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FolderName Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectName Project name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskTypeId Task type id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowParams Workflow running parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SupportRerun Whether rerun is supported.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowExecutionState Workflow execution status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionResult Task execution result.
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

        if (array_key_exists("ExecutionState",$param) and $param["ExecutionState"] !== null) {
            $this->ExecutionState = $param["ExecutionState"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskVersionId",$param) and $param["TaskVersionId"] !== null) {
            $this->TaskVersionId = $param["TaskVersionId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("WaitTime",$param) and $param["WaitTime"] !== null) {
            $this->WaitTime = $param["WaitTime"];
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ExecuteUserUin",$param) and $param["ExecuteUserUin"] !== null) {
            $this->ExecuteUserUin = $param["ExecuteUserUin"];
        }

        if (array_key_exists("CreaterUin",$param) and $param["CreaterUin"] !== null) {
            $this->CreaterUin = $param["CreaterUin"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DependenceFinishedTime",$param) and $param["DependenceFinishedTime"] !== null) {
            $this->DependenceFinishedTime = $param["DependenceFinishedTime"];
        }

        if (array_key_exists("QueueStartTime",$param) and $param["QueueStartTime"] !== null) {
            $this->QueueStartTime = $param["QueueStartTime"];
        }

        if (array_key_exists("PendingStartTime",$param) and $param["PendingStartTime"] !== null) {
            $this->PendingStartTime = $param["PendingStartTime"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("QueueCostTime",$param) and $param["QueueCostTime"] !== null) {
            $this->QueueCostTime = $param["QueueCostTime"];
        }

        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            $this->ExecutionTime = $param["ExecutionTime"];
        }

        if (array_key_exists("AllCostTime",$param) and $param["AllCostTime"] !== null) {
            $this->AllCostTime = $param["AllCostTime"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("DependOnList",$param) and $param["DependOnList"] !== null) {
            $this->DependOnList = $param["DependOnList"];
        }

        if (array_key_exists("RunParams",$param) and $param["RunParams"] !== null) {
            $this->RunParams = $param["RunParams"];
        }

        if (array_key_exists("TaskTypeExtensions",$param) and $param["TaskTypeExtensions"] !== null) {
            $this->TaskTypeExtensions = $param["TaskTypeExtensions"];
        }

        if (array_key_exists("RetryTimes",$param) and $param["RetryTimes"] !== null) {
            $this->RetryTimes = $param["RetryTimes"];
        }

        if (array_key_exists("LeftCoordinate",$param) and $param["LeftCoordinate"] !== null) {
            $this->LeftCoordinate = $param["LeftCoordinate"];
        }

        if (array_key_exists("TopCoordinate",$param) and $param["TopCoordinate"] !== null) {
            $this->TopCoordinate = $param["TopCoordinate"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ErrorCodeStr",$param) and $param["ErrorCodeStr"] !== null) {
            $this->ErrorCodeStr = $param["ErrorCodeStr"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("IssueTime",$param) and $param["IssueTime"] !== null) {
            $this->IssueTime = $param["IssueTime"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("ExecuteUserName",$param) and $param["ExecuteUserName"] !== null) {
            $this->ExecuteUserName = $param["ExecuteUserName"];
        }

        if (array_key_exists("RerunTimes",$param) and $param["RerunTimes"] !== null) {
            $this->RerunTimes = $param["RerunTimes"];
        }

        if (array_key_exists("IsLatestExecution",$param) and $param["IsLatestExecution"] !== null) {
            $this->IsLatestExecution = $param["IsLatestExecution"];
        }

        if (array_key_exists("TaskExecutionState",$param) and $param["TaskExecutionState"] !== null) {
            $this->TaskExecutionState = $param["TaskExecutionState"];
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

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("Timezone",$param) and $param["Timezone"] !== null) {
            $this->Timezone = $param["Timezone"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("WorkflowParams",$param) and $param["WorkflowParams"] !== null) {
            $this->WorkflowParams = $param["WorkflowParams"];
        }

        if (array_key_exists("SupportRerun",$param) and $param["SupportRerun"] !== null) {
            $this->SupportRerun = $param["SupportRerun"];
        }

        if (array_key_exists("WorkflowExecutionState",$param) and $param["WorkflowExecutionState"] !== null) {
            $this->WorkflowExecutionState = $param["WorkflowExecutionState"];
        }

        if (array_key_exists("ExecutionResult",$param) and $param["ExecutionResult"] !== null) {
            $this->ExecutionResult = $param["ExecutionResult"];
        }
    }
}
