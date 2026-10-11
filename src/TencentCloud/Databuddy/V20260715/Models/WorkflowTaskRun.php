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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Workflow task running information
 *
 * @method string getTaskName() Obtain <p>Task name.</p>
 * @method void setTaskName(string $TaskName) Set <p>Task name.</p>
 * @method string getWorkflowTaskRunId() Obtain <p>Task running ID</p>
 * @method void setWorkflowTaskRunId(string $WorkflowTaskRunId) Set <p>Task running ID</p>
 * @method string getRunState() Obtain <p>Running state, for example, CREATE("initialize"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("running"), SKIPPED("skip running"), SUCCESS("success"), FAILED("failure"), TERMINATING("terminating"), TERMINATED("termination"), CANCELLED("manual termination")</p>
 * @method void setRunState(string $RunState) Set <p>Running state, for example, CREATE("initialize"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("running"), SKIPPED("skip running"), SUCCESS("success"), FAILED("failure"), TERMINATING("terminating"), TERMINATED("termination"), CANCELLED("manual termination")</p>
 * @method string getWorkspaceId() Obtain <p>Workspace ID</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID</p>
 * @method string getWorkflowId() Obtain <p>Workflow ID</p>
 * @method void setWorkflowId(string $WorkflowId) Set <p>Workflow ID</p>
 * @method string getWorkflowRunId() Obtain <p>Workflow running ID</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) Set <p>Workflow running ID</p>
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getTaskTypeName() Obtain <p>Task Type Name. For details, see the description of the TaskTypeName field in the TaskType data structure.</p>
 * @method void setTaskTypeName(string $TaskTypeName) Set <p>Task Type Name. For details, see the description of the TaskTypeName field in the TaskType data structure.</p>
 * @method string getTaskVersionId() Obtain <p>Task version ID.</p>
 * @method void setTaskVersionId(string $TaskVersionId) Set <p>Task version ID.</p>
 * @method string getTriggerType() Obtain <p>Trigger type</p><p>Enumeration values:</p><ul><li>Manual: manual triggering</li><li>Scheduler: scheduling trigger</li></ul>
 * @method void setTriggerType(string $TriggerType) Set <p>Trigger type</p><p>Enumeration values:</p><ul><li>Manual: manual triggering</li><li>Scheduler: scheduling trigger</li></ul>
 * @method string getResourceGroupId() Obtain <p>Associated resource group ID</p>
 * @method void setResourceGroupId(string $ResourceGroupId) Set <p>Associated resource group ID</p>
 * @method string getErrorCodeString() Obtain <p>Error code</p>
 * @method void setErrorCodeString(string $ErrorCodeString) Set <p>Error code</p>
 * @method string getRunUserUin() Obtain <p>Running user UIN</p>
 * @method void setRunUserUin(string $RunUserUin) Set <p>Running user UIN</p>
 * @method string getRunUserName() Obtain <p>Username for operation</p>
 * @method void setRunUserName(string $RunUserName) Set <p>Username for operation</p>
 * @method string getCreateUserUin() Obtain <p>Creator UIN</p>
 * @method void setCreateUserUin(string $CreateUserUin) Set <p>Creator UIN</p>
 * @method string getJobId() Obtain <p>Execution platform execution ID</p>
 * @method void setJobId(string $JobId) Set <p>Execution platform execution ID</p>
 * @method string getCreateTime() Obtain <p>Creation time. Unit: millisecond timestamp</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time. Unit: millisecond timestamp</p>
 * @method string getUpdateTime() Obtain <p>Last update time. Unit: timestamp in milliseconds</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last update time. Unit: timestamp in milliseconds</p>
 * @method string getDependenceFinishedTime() Obtain <p>Dependency task completion time, unit: timestamp in milliseconds</p>
 * @method void setDependenceFinishedTime(string $DependenceFinishedTime) Set <p>Dependency task completion time, unit: timestamp in milliseconds</p>
 * @method string getRunStartTime() Obtain <p>Start time in milliseconds.</p>
 * @method void setRunStartTime(string $RunStartTime) Set <p>Start time in milliseconds.</p>
 * @method string getRunEndTime() Obtain <p>Running end time, unit: timestamp in milliseconds</p>
 * @method void setRunEndTime(string $RunEndTime) Set <p>Running end time, unit: timestamp in milliseconds</p>
 * @method string getRunCostTime() Obtain <p>Running time, unit: seconds</p>
 * @method void setRunCostTime(string $RunCostTime) Set <p>Running time, unit: seconds</p>
 * @method string getWaitTime() Obtain <p>Waiting duration (waiting duration from dependency readiness to start), unit: second</p>
 * @method void setWaitTime(string $WaitTime) Set <p>Waiting duration (waiting duration from dependency readiness to start), unit: second</p>
 * @method string getIssueTime() Obtain <p>Execution platform time, unit: timestamp in milliseconds</p>
 * @method void setIssueTime(string $IssueTime) Set <p>Execution platform time, unit: timestamp in milliseconds</p>
 * @method string getTimeZone() Obtain <p>Time zone</p>
 * @method void setTimeZone(string $TimeZone) Set <p>Time zone</p>
 * @method array getDependOnList() Obtain <p>Task ID list that it depends on. Reserved field, temporarily returns []</p><p>Reserved field, temporarily returns []</p>
 * @method void setDependOnList(array $DependOnList) Set <p>Task ID list that it depends on. Reserved field, temporarily returns []</p><p>Reserved field, temporarily returns []</p>
 * @method string getRunParams() Obtain <p>Running parameter</p>
 * @method void setRunParams(string $RunParams) Set <p>Running parameter</p>
 * @method string getTaskTypeExtensions() Obtain <p>Task extension information, including script path</p>
 * @method void setTaskTypeExtensions(string $TaskTypeExtensions) Set <p>Task extension information, including script path</p>
 * @method float getLeftCoordinate() Obtain <p>Task X coordinate</p>
 * @method void setLeftCoordinate(float $LeftCoordinate) Set <p>Task X coordinate</p>
 * @method float getTopCoordinate() Obtain <p>Task Y-axis coordinate</p>
 * @method void setTopCoordinate(float $TopCoordinate) Set <p>Task Y-axis coordinate</p>
 * @method integer getRetryTimes() Obtain <p>Number of retries. 0 indicates the first run.</p>
 * @method void setRetryTimes(integer $RetryTimes) Set <p>Number of retries. 0 indicates the first run.</p>
 * @method string getWorkflowName() Obtain <p>Workflow name</p>
 * @method void setWorkflowName(string $WorkflowName) Set <p>Workflow name</p>
 * @method integer getRerunTimes() Obtain <p>Number of reruns.</p>
 * @method void setRerunTimes(integer $RerunTimes) Set <p>Number of reruns.</p>
 * @method boolean getIsLatestRun() Obtain <p>Whether it is the most recent run</p>
 * @method void setIsLatestRun(boolean $IsLatestRun) Set <p>Whether it is the most recent run</p>
 * @method array getResourceGroupInfoList() Obtain <p>Resource group information list.</p>
 * @method void setResourceGroupInfoList(array $ResourceGroupInfoList) Set <p>Resource group information list.</p>
 * @method string getRunResult() Obtain <p>Execution result</p>
 * @method void setRunResult(string $RunResult) Set <p>Execution result</p>
 * @method string getDependOnRunCondition() Obtain <p>Task dependency run conditions</p><p>ALL_SUCCESS: All successful: All upstream dependency tasks have been executed and succeeded<br>ONE_SUCCESS: At least one successful: At least one upstream dependency task succeeded<br>NONE_FAILED: No failure currently: No dependency task failed, and at least one dependency task is running<br>ALL_DONE: All completed: All upstream dependency tasks have been executed and completed (regardless of success or failure)<br>ONE_FAILED: At least one failed: At least one upstream dependency task failed<br>ALL_FAILED: All failed: All upstream dependency tasks failed<br>ALL_DONE_AT_LEAST_ONE_SUCCESS: All upstream completed and at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>ALL_SKIPPED: All upstream completed, no skipped runs: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are success, failure, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ONE_DONE: At least one completed: Once any upstream task is completed, a dependency check is performed, and the dependency check passes; otherwise, it keeps waiting for upstream<br>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS: All upstream completed, none failed, at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If no upstream task failed and at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>NONE_SKIPPED: All upstream completed, no skipped runs: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are success, failure, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ALL_DONE_AT_LEAST_ONE_FAILED: All upstream completed and at least one failed: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one failed, the dependency check passes; otherwise, the run is skipped<br>ADVANCED: Configured when the run condition is in advanced mode</p>
 * @method void setDependOnRunCondition(string $DependOnRunCondition) Set <p>Task dependency run conditions</p><p>ALL_SUCCESS: All successful: All upstream dependency tasks have been executed and succeeded<br>ONE_SUCCESS: At least one successful: At least one upstream dependency task succeeded<br>NONE_FAILED: No failure currently: No dependency task failed, and at least one dependency task is running<br>ALL_DONE: All completed: All upstream dependency tasks have been executed and completed (regardless of success or failure)<br>ONE_FAILED: At least one failed: At least one upstream dependency task failed<br>ALL_FAILED: All failed: All upstream dependency tasks failed<br>ALL_DONE_AT_LEAST_ONE_SUCCESS: All upstream completed and at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>ALL_SKIPPED: All upstream completed, no skipped runs: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are success, failure, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ONE_DONE: At least one completed: Once any upstream task is completed, a dependency check is performed, and the dependency check passes; otherwise, it keeps waiting for upstream<br>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS: All upstream completed, none failed, at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If no upstream task failed and at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>NONE_SKIPPED: All upstream completed, no skipped runs: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are success, failure, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ALL_DONE_AT_LEAST_ONE_FAILED: All upstream completed and at least one failed: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one failed, the dependency check passes; otherwise, the run is skipped<br>ADVANCED: Configured when the run condition is in advanced mode</p>
 * @method AdvancedDependencyConfig getAdvancedDependencyConfig() Obtain <p>Advanced dependency configuration</p>
 * @method void setAdvancedDependencyConfig(AdvancedDependencyConfig $AdvancedDependencyConfig) Set <p>Advanced dependency configuration</p>
 * @method InnerWorkflowTaskBrief getInnerTask() Obtain <p>Built-in workflow task information</p>
 * @method void setInnerTask(InnerWorkflowTaskBrief $InnerTask) Set <p>Built-in workflow task information</p>
 * @method string getScheduledTime() Obtain <p>Scheduled dispatch time</p><p>Parameter format: timestamp in milliseconds, UTC</p>
 * @method void setScheduledTime(string $ScheduledTime) Set <p>Scheduled dispatch time</p><p>Parameter format: timestamp in milliseconds, UTC</p>
 */
class WorkflowTaskRun extends AbstractModel
{
    /**
     * @var string <p>Task name.</p>
     */
    public $TaskName;

    /**
     * @var string <p>Task running ID</p>
     */
    public $WorkflowTaskRunId;

    /**
     * @var string <p>Running state, for example, CREATE("initialize"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("running"), SKIPPED("skip running"), SUCCESS("success"), FAILED("failure"), TERMINATING("terminating"), TERMINATED("termination"), CANCELLED("manual termination")</p>
     */
    public $RunState;

    /**
     * @var string <p>Workspace ID</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>Workflow ID</p>
     */
    public $WorkflowId;

    /**
     * @var string <p>Workflow running ID</p>
     */
    public $WorkflowRunId;

    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task Type Name. For details, see the description of the TaskTypeName field in the TaskType data structure.</p>
     */
    public $TaskTypeName;

    /**
     * @var string <p>Task version ID.</p>
     */
    public $TaskVersionId;

    /**
     * @var string <p>Trigger type</p><p>Enumeration values:</p><ul><li>Manual: manual triggering</li><li>Scheduler: scheduling trigger</li></ul>
     */
    public $TriggerType;

    /**
     * @var string <p>Associated resource group ID</p>
     */
    public $ResourceGroupId;

    /**
     * @var string <p>Error code</p>
     */
    public $ErrorCodeString;

    /**
     * @var string <p>Running user UIN</p>
     */
    public $RunUserUin;

    /**
     * @var string <p>Username for operation</p>
     */
    public $RunUserName;

    /**
     * @var string <p>Creator UIN</p>
     */
    public $CreateUserUin;

    /**
     * @var string <p>Execution platform execution ID</p>
     */
    public $JobId;

    /**
     * @var string <p>Creation time. Unit: millisecond timestamp</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last update time. Unit: timestamp in milliseconds</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Dependency task completion time, unit: timestamp in milliseconds</p>
     */
    public $DependenceFinishedTime;

    /**
     * @var string <p>Start time in milliseconds.</p>
     */
    public $RunStartTime;

    /**
     * @var string <p>Running end time, unit: timestamp in milliseconds</p>
     */
    public $RunEndTime;

    /**
     * @var string <p>Running time, unit: seconds</p>
     */
    public $RunCostTime;

    /**
     * @var string <p>Waiting duration (waiting duration from dependency readiness to start), unit: second</p>
     */
    public $WaitTime;

    /**
     * @var string <p>Execution platform time, unit: timestamp in milliseconds</p>
     */
    public $IssueTime;

    /**
     * @var string <p>Time zone</p>
     */
    public $TimeZone;

    /**
     * @var array <p>Task ID list that it depends on. Reserved field, temporarily returns []</p><p>Reserved field, temporarily returns []</p>
     */
    public $DependOnList;

    /**
     * @var string <p>Running parameter</p>
     */
    public $RunParams;

    /**
     * @var string <p>Task extension information, including script path</p>
     */
    public $TaskTypeExtensions;

    /**
     * @var float <p>Task X coordinate</p>
     */
    public $LeftCoordinate;

    /**
     * @var float <p>Task Y-axis coordinate</p>
     */
    public $TopCoordinate;

    /**
     * @var integer <p>Number of retries. 0 indicates the first run.</p>
     */
    public $RetryTimes;

    /**
     * @var string <p>Workflow name</p>
     */
    public $WorkflowName;

    /**
     * @var integer <p>Number of reruns.</p>
     */
    public $RerunTimes;

    /**
     * @var boolean <p>Whether it is the most recent run</p>
     */
    public $IsLatestRun;

    /**
     * @var array <p>Resource group information list.</p>
     */
    public $ResourceGroupInfoList;

    /**
     * @var string <p>Execution result</p>
     */
    public $RunResult;

    /**
     * @var string <p>Task dependency run conditions</p><p>ALL_SUCCESS: All successful: All upstream dependency tasks have been executed and succeeded<br>ONE_SUCCESS: At least one successful: At least one upstream dependency task succeeded<br>NONE_FAILED: No failure currently: No dependency task failed, and at least one dependency task is running<br>ALL_DONE: All completed: All upstream dependency tasks have been executed and completed (regardless of success or failure)<br>ONE_FAILED: At least one failed: At least one upstream dependency task failed<br>ALL_FAILED: All failed: All upstream dependency tasks failed<br>ALL_DONE_AT_LEAST_ONE_SUCCESS: All upstream completed and at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>ALL_SKIPPED: All upstream completed, no skipped runs: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are success, failure, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ONE_DONE: At least one completed: Once any upstream task is completed, a dependency check is performed, and the dependency check passes; otherwise, it keeps waiting for upstream<br>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS: All upstream completed, none failed, at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If no upstream task failed and at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>NONE_SKIPPED: All upstream completed, no skipped runs: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are success, failure, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ALL_DONE_AT_LEAST_ONE_FAILED: All upstream completed and at least one failed: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one failed, the dependency check passes; otherwise, the run is skipped<br>ADVANCED: Configured when the run condition is in advanced mode</p>
     */
    public $DependOnRunCondition;

    /**
     * @var AdvancedDependencyConfig <p>Advanced dependency configuration</p>
     */
    public $AdvancedDependencyConfig;

    /**
     * @var InnerWorkflowTaskBrief <p>Built-in workflow task information</p>
     */
    public $InnerTask;

    /**
     * @var string <p>Scheduled dispatch time</p><p>Parameter format: timestamp in milliseconds, UTC</p>
     */
    public $ScheduledTime;

    /**
     * @param string $TaskName <p>Task name.</p>
     * @param string $WorkflowTaskRunId <p>Task running ID</p>
     * @param string $RunState <p>Running state, for example, CREATE("initialize"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("running"), SKIPPED("skip running"), SUCCESS("success"), FAILED("failure"), TERMINATING("terminating"), TERMINATED("termination"), CANCELLED("manual termination")</p>
     * @param string $WorkspaceId <p>Workspace ID</p>
     * @param string $WorkflowId <p>Workflow ID</p>
     * @param string $WorkflowRunId <p>Workflow running ID</p>
     * @param string $TaskId <p>Task ID.</p>
     * @param string $TaskTypeName <p>Task Type Name. For details, see the description of the TaskTypeName field in the TaskType data structure.</p>
     * @param string $TaskVersionId <p>Task version ID.</p>
     * @param string $TriggerType <p>Trigger type</p><p>Enumeration values:</p><ul><li>Manual: manual triggering</li><li>Scheduler: scheduling trigger</li></ul>
     * @param string $ResourceGroupId <p>Associated resource group ID</p>
     * @param string $ErrorCodeString <p>Error code</p>
     * @param string $RunUserUin <p>Running user UIN</p>
     * @param string $RunUserName <p>Username for operation</p>
     * @param string $CreateUserUin <p>Creator UIN</p>
     * @param string $JobId <p>Execution platform execution ID</p>
     * @param string $CreateTime <p>Creation time. Unit: millisecond timestamp</p>
     * @param string $UpdateTime <p>Last update time. Unit: timestamp in milliseconds</p>
     * @param string $DependenceFinishedTime <p>Dependency task completion time, unit: timestamp in milliseconds</p>
     * @param string $RunStartTime <p>Start time in milliseconds.</p>
     * @param string $RunEndTime <p>Running end time, unit: timestamp in milliseconds</p>
     * @param string $RunCostTime <p>Running time, unit: seconds</p>
     * @param string $WaitTime <p>Waiting duration (waiting duration from dependency readiness to start), unit: second</p>
     * @param string $IssueTime <p>Execution platform time, unit: timestamp in milliseconds</p>
     * @param string $TimeZone <p>Time zone</p>
     * @param array $DependOnList <p>Task ID list that it depends on. Reserved field, temporarily returns []</p><p>Reserved field, temporarily returns []</p>
     * @param string $RunParams <p>Running parameter</p>
     * @param string $TaskTypeExtensions <p>Task extension information, including script path</p>
     * @param float $LeftCoordinate <p>Task X coordinate</p>
     * @param float $TopCoordinate <p>Task Y-axis coordinate</p>
     * @param integer $RetryTimes <p>Number of retries. 0 indicates the first run.</p>
     * @param string $WorkflowName <p>Workflow name</p>
     * @param integer $RerunTimes <p>Number of reruns.</p>
     * @param boolean $IsLatestRun <p>Whether it is the most recent run</p>
     * @param array $ResourceGroupInfoList <p>Resource group information list.</p>
     * @param string $RunResult <p>Execution result</p>
     * @param string $DependOnRunCondition <p>Task dependency run conditions</p><p>ALL_SUCCESS: All successful: All upstream dependency tasks have been executed and succeeded<br>ONE_SUCCESS: At least one successful: At least one upstream dependency task succeeded<br>NONE_FAILED: No failure currently: No dependency task failed, and at least one dependency task is running<br>ALL_DONE: All completed: All upstream dependency tasks have been executed and completed (regardless of success or failure)<br>ONE_FAILED: At least one failed: At least one upstream dependency task failed<br>ALL_FAILED: All failed: All upstream dependency tasks failed<br>ALL_DONE_AT_LEAST_ONE_SUCCESS: All upstream completed and at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>ALL_SKIPPED: All upstream completed, no skipped runs: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are success, failure, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ONE_DONE: At least one completed: Once any upstream task is completed, a dependency check is performed, and the dependency check passes; otherwise, it keeps waiting for upstream<br>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS: All upstream completed, none failed, at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If no upstream task failed and at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>NONE_SKIPPED: All upstream completed, no skipped runs: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are success, failure, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ALL_DONE_AT_LEAST_ONE_FAILED: All upstream completed and at least one failed: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one failed, the dependency check passes; otherwise, the run is skipped<br>ADVANCED: Configured when the run condition is in advanced mode</p>
     * @param AdvancedDependencyConfig $AdvancedDependencyConfig <p>Advanced dependency configuration</p>
     * @param InnerWorkflowTaskBrief $InnerTask <p>Built-in workflow task information</p>
     * @param string $ScheduledTime <p>Scheduled dispatch time</p><p>Parameter format: timestamp in milliseconds, UTC</p>
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowTaskRunId",$param) and $param["WorkflowTaskRunId"] !== null) {
            $this->WorkflowTaskRunId = $param["WorkflowTaskRunId"];
        }

        if (array_key_exists("RunState",$param) and $param["RunState"] !== null) {
            $this->RunState = $param["RunState"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskTypeName",$param) and $param["TaskTypeName"] !== null) {
            $this->TaskTypeName = $param["TaskTypeName"];
        }

        if (array_key_exists("TaskVersionId",$param) and $param["TaskVersionId"] !== null) {
            $this->TaskVersionId = $param["TaskVersionId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ErrorCodeString",$param) and $param["ErrorCodeString"] !== null) {
            $this->ErrorCodeString = $param["ErrorCodeString"];
        }

        if (array_key_exists("RunUserUin",$param) and $param["RunUserUin"] !== null) {
            $this->RunUserUin = $param["RunUserUin"];
        }

        if (array_key_exists("RunUserName",$param) and $param["RunUserName"] !== null) {
            $this->RunUserName = $param["RunUserName"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
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

        if (array_key_exists("RunStartTime",$param) and $param["RunStartTime"] !== null) {
            $this->RunStartTime = $param["RunStartTime"];
        }

        if (array_key_exists("RunEndTime",$param) and $param["RunEndTime"] !== null) {
            $this->RunEndTime = $param["RunEndTime"];
        }

        if (array_key_exists("RunCostTime",$param) and $param["RunCostTime"] !== null) {
            $this->RunCostTime = $param["RunCostTime"];
        }

        if (array_key_exists("WaitTime",$param) and $param["WaitTime"] !== null) {
            $this->WaitTime = $param["WaitTime"];
        }

        if (array_key_exists("IssueTime",$param) and $param["IssueTime"] !== null) {
            $this->IssueTime = $param["IssueTime"];
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

        if (array_key_exists("LeftCoordinate",$param) and $param["LeftCoordinate"] !== null) {
            $this->LeftCoordinate = $param["LeftCoordinate"];
        }

        if (array_key_exists("TopCoordinate",$param) and $param["TopCoordinate"] !== null) {
            $this->TopCoordinate = $param["TopCoordinate"];
        }

        if (array_key_exists("RetryTimes",$param) and $param["RetryTimes"] !== null) {
            $this->RetryTimes = $param["RetryTimes"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("RerunTimes",$param) and $param["RerunTimes"] !== null) {
            $this->RerunTimes = $param["RerunTimes"];
        }

        if (array_key_exists("IsLatestRun",$param) and $param["IsLatestRun"] !== null) {
            $this->IsLatestRun = $param["IsLatestRun"];
        }

        if (array_key_exists("ResourceGroupInfoList",$param) and $param["ResourceGroupInfoList"] !== null) {
            $this->ResourceGroupInfoList = [];
            foreach ($param["ResourceGroupInfoList"] as $key => $value){
                $obj = new ResourceGroupInfo();
                $obj->deserialize($value);
                array_push($this->ResourceGroupInfoList, $obj);
            }
        }

        if (array_key_exists("RunResult",$param) and $param["RunResult"] !== null) {
            $this->RunResult = $param["RunResult"];
        }

        if (array_key_exists("DependOnRunCondition",$param) and $param["DependOnRunCondition"] !== null) {
            $this->DependOnRunCondition = $param["DependOnRunCondition"];
        }

        if (array_key_exists("AdvancedDependencyConfig",$param) and $param["AdvancedDependencyConfig"] !== null) {
            $this->AdvancedDependencyConfig = new AdvancedDependencyConfig();
            $this->AdvancedDependencyConfig->deserialize($param["AdvancedDependencyConfig"]);
        }

        if (array_key_exists("InnerTask",$param) and $param["InnerTask"] !== null) {
            $this->InnerTask = new InnerWorkflowTaskBrief();
            $this->InnerTask->deserialize($param["InnerTask"]);
        }

        if (array_key_exists("ScheduledTime",$param) and $param["ScheduledTime"] !== null) {
            $this->ScheduledTime = $param["ScheduledTime"];
        }
    }
}
