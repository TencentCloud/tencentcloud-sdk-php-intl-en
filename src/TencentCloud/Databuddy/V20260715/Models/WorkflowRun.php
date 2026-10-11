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
 * Workflow running information
 *
 * @method string getAppId() Obtain <p>Root account ID</p>
 * @method void setAppId(string $AppId) Set <p>Root account ID</p>
 * @method string getWorkflowName() Obtain <p>Workflow name</p>
 * @method void setWorkflowName(string $WorkflowName) Set <p>Workflow name</p>
 * @method string getWorkflowId() Obtain <p>Workflow ID</p>
 * @method void setWorkflowId(string $WorkflowId) Set <p>Workflow ID</p>
 * @method string getWorkflowRunId() Obtain <p>Workflow running ID</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) Set <p>Workflow running ID</p>
 * @method string getWorkspaceId() Obtain <p>Workspace ID</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID</p>
 * @method string getTriggerType() Obtain <p>Trigger mode: Scheduler, ManualTrigger, Event (for reference, see SchedulerTriggerType)</p>
 * @method void setTriggerType(string $TriggerType) Set <p>Trigger mode: Scheduler, ManualTrigger, Event (for reference, see SchedulerTriggerType)</p>
 * @method string getRunStartTime() Obtain <p>Start time in milliseconds.</p>
 * @method void setRunStartTime(string $RunStartTime) Set <p>Start time in milliseconds.</p>
 * @method string getPendingStartTime() Obtain <p>Start time of the pending state, unit: timestamp in milliseconds</p>
 * @method void setPendingStartTime(string $PendingStartTime) Set <p>Start time of the pending state, unit: timestamp in milliseconds</p>
 * @method string getQueueStartTime() Obtain <p>queue status start time, unit: timestamp in milliseconds</p>
 * @method void setQueueStartTime(string $QueueStartTime) Set <p>queue status start time, unit: timestamp in milliseconds</p>
 * @method string getRunEndTime() Obtain <p>Running end time, unit: timestamp in milliseconds</p>
 * @method void setRunEndTime(string $RunEndTime) Set <p>Running end time, unit: timestamp in milliseconds</p>
 * @method string getEndTime() Obtain <p>End time. It has a value when running enters the end state. Unit: timestamp in milliseconds</p>
 * @method void setEndTime(string $EndTime) Set <p>End time. It has a value when running enters the end state. Unit: timestamp in milliseconds</p>
 * @method string getRunCostTime() Obtain <p>Running time, unit: seconds</p>
 * @method void setRunCostTime(string $RunCostTime) Set <p>Running time, unit: seconds</p>
 * @method string getQueueCostTime() Obtain <p>Concurrency queue time, in seconds</p>
 * @method void setQueueCostTime(string $QueueCostTime) Set <p>Concurrency queue time, in seconds</p>
 * @method string getPendingCostTime() Obtain <p>Time spent waiting for resources, in seconds</p>
 * @method void setPendingCostTime(string $PendingCostTime) Set <p>Time spent waiting for resources, in seconds</p>
 * @method string getRunState() Obtain <p>RUNNING state. CREATE("initialization"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("RUNNING"), SKIPPED("skip RUNNING"), SUCCESS("successful"), FAILED("failure"), TERMINATING("TERMINATING"), TERMINATED("termination"), CANCELLED("manual termination"), etc.</p>
 * @method void setRunState(string $RunState) Set <p>RUNNING state. CREATE("initialization"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("RUNNING"), SKIPPED("skip RUNNING"), SUCCESS("successful"), FAILED("failure"), TERMINATING("TERMINATING"), TERMINATED("termination"), CANCELLED("manual termination"), etc.</p>
 * @method array getResourceGroupIds() Obtain <p>Computational resource (resource group ID set of the task)</p>
 * @method void setResourceGroupIds(array $ResourceGroupIds) Set <p>Computational resource (resource group ID set of the task)</p>
 * @method string getRunUserUin() Obtain <p>Running user UIN</p>
 * @method void setRunUserUin(string $RunUserUin) Set <p>Running user UIN</p>
 * @method string getRunUserName() Obtain <p>Username for operation</p>
 * @method void setRunUserName(string $RunUserName) Set <p>Username for operation</p>
 * @method string getErrorCodeString() Obtain <p>Error code</p>
 * @method void setErrorCodeString(string $ErrorCodeString) Set <p>Error code</p>
 * @method string getWorkflowParams() Obtain <p>Running parameter</p>
 * @method void setWorkflowParams(string $WorkflowParams) Set <p>Running parameter</p>
 * @method string getWorkflowVersionId() Obtain <p>Workflow version ID</p>
 * @method void setWorkflowVersionId(string $WorkflowVersionId) Set <p>Workflow version ID</p>
 * @method boolean getSupportRerun() Obtain <p>Whether rerunning is supported for the current workflow</p>
 * @method void setSupportRerun(boolean $SupportRerun) Set <p>Whether rerunning is supported for the current workflow</p>
 * @method string getCreateTime() Obtain <p>Workflow run creation time. Unit: millisecond timestamp</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Workflow run creation time. Unit: millisecond timestamp</p>
 * @method integer getRerunTimes() Obtain <p>Number of reruns.</p>
 * @method void setRerunTimes(integer $RerunTimes) Set <p>Number of reruns.</p>
 * @method array getSelectedTaskIds() Obtain <p>Task scope in operation, Task ID list</p>
 * @method void setSelectedTaskIds(array $SelectedTaskIds) Set <p>Task scope in operation, Task ID list</p>
 * @method array getResourceGroupInfoList() Obtain <p>Resource group information list.</p>
 * @method void setResourceGroupInfoList(array $ResourceGroupInfoList) Set <p>Resource group information list.</p>
 * @method array getLabelList() Obtain <p>Tag list.</p>
 * @method void setLabelList(array $LabelList) Set <p>Tag list.</p>
 * @method string getParentWorkflowRunId() Obtain <p>Parent workflow running ID [unique to nested workflow triggers]</p>
 * @method void setParentWorkflowRunId(string $ParentWorkflowRunId) Set <p>Parent workflow running ID [unique to nested workflow triggers]</p>
 * @method string getParentWorkflowTaskRunId() Obtain <p>Parent workflow task running ID [unique to nested workflow triggers]</p>
 * @method void setParentWorkflowTaskRunId(string $ParentWorkflowTaskRunId) Set <p>Parent workflow task running ID [unique to nested workflow triggers]</p>
 * @method string getParentWorkflowTaskRunName() Obtain <p>Parent workflow task run name [exclusive to nested workflow triggers]</p>
 * @method void setParentWorkflowTaskRunName(string $ParentWorkflowTaskRunName) Set <p>Parent workflow task run name [exclusive to nested workflow triggers]</p>
 * @method string getPermission() Obtain <p>Authorization permission type<br>PERMISSION_TYPE_UNSPECIFIED: unspecified permission<br>MANAGE: management permission, including all operation permissions<br>RUN: execution permission, executable entity<br>VIEW: view permission, viewable entity content</p>
 * @method void setPermission(string $Permission) Set <p>Authorization permission type<br>PERMISSION_TYPE_UNSPECIFIED: unspecified permission<br>MANAGE: management permission, including all operation permissions<br>RUN: execution permission, executable entity<br>VIEW: view permission, viewable entity content</p>
 * @method array getAdvancedParameters() Obtain <p>Parameters filled in by the user during advanced execution of the workflow</p>
 * @method void setAdvancedParameters(array $AdvancedParameters) Set <p>Parameters filled in by the user during advanced execution of the workflow</p>
 * @method string getScheduledTime() Obtain <p>Scheduled dispatch time</p><p>Parameter format: timestamp in milliseconds (UTC)</p>
 * @method void setScheduledTime(string $ScheduledTime) Set <p>Scheduled dispatch time</p><p>Parameter format: timestamp in milliseconds (UTC)</p>
 */
class WorkflowRun extends AbstractModel
{
    /**
     * @var string <p>Root account ID</p>
     */
    public $AppId;

    /**
     * @var string <p>Workflow name</p>
     */
    public $WorkflowName;

    /**
     * @var string <p>Workflow ID</p>
     */
    public $WorkflowId;

    /**
     * @var string <p>Workflow running ID</p>
     */
    public $WorkflowRunId;

    /**
     * @var string <p>Workspace ID</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>Trigger mode: Scheduler, ManualTrigger, Event (for reference, see SchedulerTriggerType)</p>
     */
    public $TriggerType;

    /**
     * @var string <p>Start time in milliseconds.</p>
     */
    public $RunStartTime;

    /**
     * @var string <p>Start time of the pending state, unit: timestamp in milliseconds</p>
     */
    public $PendingStartTime;

    /**
     * @var string <p>queue status start time, unit: timestamp in milliseconds</p>
     */
    public $QueueStartTime;

    /**
     * @var string <p>Running end time, unit: timestamp in milliseconds</p>
     */
    public $RunEndTime;

    /**
     * @var string <p>End time. It has a value when running enters the end state. Unit: timestamp in milliseconds</p>
     */
    public $EndTime;

    /**
     * @var string <p>Running time, unit: seconds</p>
     */
    public $RunCostTime;

    /**
     * @var string <p>Concurrency queue time, in seconds</p>
     */
    public $QueueCostTime;

    /**
     * @var string <p>Time spent waiting for resources, in seconds</p>
     */
    public $PendingCostTime;

    /**
     * @var string <p>RUNNING state. CREATE("initialization"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("RUNNING"), SKIPPED("skip RUNNING"), SUCCESS("successful"), FAILED("failure"), TERMINATING("TERMINATING"), TERMINATED("termination"), CANCELLED("manual termination"), etc.</p>
     */
    public $RunState;

    /**
     * @var array <p>Computational resource (resource group ID set of the task)</p>
     */
    public $ResourceGroupIds;

    /**
     * @var string <p>Running user UIN</p>
     */
    public $RunUserUin;

    /**
     * @var string <p>Username for operation</p>
     */
    public $RunUserName;

    /**
     * @var string <p>Error code</p>
     */
    public $ErrorCodeString;

    /**
     * @var string <p>Running parameter</p>
     */
    public $WorkflowParams;

    /**
     * @var string <p>Workflow version ID</p>
     */
    public $WorkflowVersionId;

    /**
     * @var boolean <p>Whether rerunning is supported for the current workflow</p>
     */
    public $SupportRerun;

    /**
     * @var string <p>Workflow run creation time. Unit: millisecond timestamp</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Number of reruns.</p>
     */
    public $RerunTimes;

    /**
     * @var array <p>Task scope in operation, Task ID list</p>
     */
    public $SelectedTaskIds;

    /**
     * @var array <p>Resource group information list.</p>
     */
    public $ResourceGroupInfoList;

    /**
     * @var array <p>Tag list.</p>
     */
    public $LabelList;

    /**
     * @var string <p>Parent workflow running ID [unique to nested workflow triggers]</p>
     */
    public $ParentWorkflowRunId;

    /**
     * @var string <p>Parent workflow task running ID [unique to nested workflow triggers]</p>
     */
    public $ParentWorkflowTaskRunId;

    /**
     * @var string <p>Parent workflow task run name [exclusive to nested workflow triggers]</p>
     */
    public $ParentWorkflowTaskRunName;

    /**
     * @var string <p>Authorization permission type<br>PERMISSION_TYPE_UNSPECIFIED: unspecified permission<br>MANAGE: management permission, including all operation permissions<br>RUN: execution permission, executable entity<br>VIEW: view permission, viewable entity content</p>
     */
    public $Permission;

    /**
     * @var array <p>Parameters filled in by the user during advanced execution of the workflow</p>
     */
    public $AdvancedParameters;

    /**
     * @var string <p>Scheduled dispatch time</p><p>Parameter format: timestamp in milliseconds (UTC)</p>
     */
    public $ScheduledTime;

    /**
     * @param string $AppId <p>Root account ID</p>
     * @param string $WorkflowName <p>Workflow name</p>
     * @param string $WorkflowId <p>Workflow ID</p>
     * @param string $WorkflowRunId <p>Workflow running ID</p>
     * @param string $WorkspaceId <p>Workspace ID</p>
     * @param string $TriggerType <p>Trigger mode: Scheduler, ManualTrigger, Event (for reference, see SchedulerTriggerType)</p>
     * @param string $RunStartTime <p>Start time in milliseconds.</p>
     * @param string $PendingStartTime <p>Start time of the pending state, unit: timestamp in milliseconds</p>
     * @param string $QueueStartTime <p>queue status start time, unit: timestamp in milliseconds</p>
     * @param string $RunEndTime <p>Running end time, unit: timestamp in milliseconds</p>
     * @param string $EndTime <p>End time. It has a value when running enters the end state. Unit: timestamp in milliseconds</p>
     * @param string $RunCostTime <p>Running time, unit: seconds</p>
     * @param string $QueueCostTime <p>Concurrency queue time, in seconds</p>
     * @param string $PendingCostTime <p>Time spent waiting for resources, in seconds</p>
     * @param string $RunState <p>RUNNING state. CREATE("initialization"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("RUNNING"), SKIPPED("skip RUNNING"), SUCCESS("successful"), FAILED("failure"), TERMINATING("TERMINATING"), TERMINATED("termination"), CANCELLED("manual termination"), etc.</p>
     * @param array $ResourceGroupIds <p>Computational resource (resource group ID set of the task)</p>
     * @param string $RunUserUin <p>Running user UIN</p>
     * @param string $RunUserName <p>Username for operation</p>
     * @param string $ErrorCodeString <p>Error code</p>
     * @param string $WorkflowParams <p>Running parameter</p>
     * @param string $WorkflowVersionId <p>Workflow version ID</p>
     * @param boolean $SupportRerun <p>Whether rerunning is supported for the current workflow</p>
     * @param string $CreateTime <p>Workflow run creation time. Unit: millisecond timestamp</p>
     * @param integer $RerunTimes <p>Number of reruns.</p>
     * @param array $SelectedTaskIds <p>Task scope in operation, Task ID list</p>
     * @param array $ResourceGroupInfoList <p>Resource group information list.</p>
     * @param array $LabelList <p>Tag list.</p>
     * @param string $ParentWorkflowRunId <p>Parent workflow running ID [unique to nested workflow triggers]</p>
     * @param string $ParentWorkflowTaskRunId <p>Parent workflow task running ID [unique to nested workflow triggers]</p>
     * @param string $ParentWorkflowTaskRunName <p>Parent workflow task run name [exclusive to nested workflow triggers]</p>
     * @param string $Permission <p>Authorization permission type<br>PERMISSION_TYPE_UNSPECIFIED: unspecified permission<br>MANAGE: management permission, including all operation permissions<br>RUN: execution permission, executable entity<br>VIEW: view permission, viewable entity content</p>
     * @param array $AdvancedParameters <p>Parameters filled in by the user during advanced execution of the workflow</p>
     * @param string $ScheduledTime <p>Scheduled dispatch time</p><p>Parameter format: timestamp in milliseconds (UTC)</p>
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

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("RunStartTime",$param) and $param["RunStartTime"] !== null) {
            $this->RunStartTime = $param["RunStartTime"];
        }

        if (array_key_exists("PendingStartTime",$param) and $param["PendingStartTime"] !== null) {
            $this->PendingStartTime = $param["PendingStartTime"];
        }

        if (array_key_exists("QueueStartTime",$param) and $param["QueueStartTime"] !== null) {
            $this->QueueStartTime = $param["QueueStartTime"];
        }

        if (array_key_exists("RunEndTime",$param) and $param["RunEndTime"] !== null) {
            $this->RunEndTime = $param["RunEndTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RunCostTime",$param) and $param["RunCostTime"] !== null) {
            $this->RunCostTime = $param["RunCostTime"];
        }

        if (array_key_exists("QueueCostTime",$param) and $param["QueueCostTime"] !== null) {
            $this->QueueCostTime = $param["QueueCostTime"];
        }

        if (array_key_exists("PendingCostTime",$param) and $param["PendingCostTime"] !== null) {
            $this->PendingCostTime = $param["PendingCostTime"];
        }

        if (array_key_exists("RunState",$param) and $param["RunState"] !== null) {
            $this->RunState = $param["RunState"];
        }

        if (array_key_exists("ResourceGroupIds",$param) and $param["ResourceGroupIds"] !== null) {
            $this->ResourceGroupIds = $param["ResourceGroupIds"];
        }

        if (array_key_exists("RunUserUin",$param) and $param["RunUserUin"] !== null) {
            $this->RunUserUin = $param["RunUserUin"];
        }

        if (array_key_exists("RunUserName",$param) and $param["RunUserName"] !== null) {
            $this->RunUserName = $param["RunUserName"];
        }

        if (array_key_exists("ErrorCodeString",$param) and $param["ErrorCodeString"] !== null) {
            $this->ErrorCodeString = $param["ErrorCodeString"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RerunTimes",$param) and $param["RerunTimes"] !== null) {
            $this->RerunTimes = $param["RerunTimes"];
        }

        if (array_key_exists("SelectedTaskIds",$param) and $param["SelectedTaskIds"] !== null) {
            $this->SelectedTaskIds = $param["SelectedTaskIds"];
        }

        if (array_key_exists("ResourceGroupInfoList",$param) and $param["ResourceGroupInfoList"] !== null) {
            $this->ResourceGroupInfoList = [];
            foreach ($param["ResourceGroupInfoList"] as $key => $value){
                $obj = new ResourceGroupInfo();
                $obj->deserialize($value);
                array_push($this->ResourceGroupInfoList, $obj);
            }
        }

        if (array_key_exists("LabelList",$param) and $param["LabelList"] !== null) {
            $this->LabelList = [];
            foreach ($param["LabelList"] as $key => $value){
                $obj = new LabelBrief();
                $obj->deserialize($value);
                array_push($this->LabelList, $obj);
            }
        }

        if (array_key_exists("ParentWorkflowRunId",$param) and $param["ParentWorkflowRunId"] !== null) {
            $this->ParentWorkflowRunId = $param["ParentWorkflowRunId"];
        }

        if (array_key_exists("ParentWorkflowTaskRunId",$param) and $param["ParentWorkflowTaskRunId"] !== null) {
            $this->ParentWorkflowTaskRunId = $param["ParentWorkflowTaskRunId"];
        }

        if (array_key_exists("ParentWorkflowTaskRunName",$param) and $param["ParentWorkflowTaskRunName"] !== null) {
            $this->ParentWorkflowTaskRunName = $param["ParentWorkflowTaskRunName"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("AdvancedParameters",$param) and $param["AdvancedParameters"] !== null) {
            $this->AdvancedParameters = [];
            foreach ($param["AdvancedParameters"] as $key => $value){
                $obj = new AdvancedParameter();
                $obj->deserialize($value);
                array_push($this->AdvancedParameters, $obj);
            }
        }

        if (array_key_exists("ScheduledTime",$param) and $param["ScheduledTime"] !== null) {
            $this->ScheduledTime = $param["ScheduledTime"];
        }
    }
}
