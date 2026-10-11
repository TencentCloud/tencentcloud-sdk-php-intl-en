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
 * RerunWorkflowRun request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
 * @method string getWorkflowId() Obtain <p>Workflow ID. You can obtain it through ListWorkflows. Required</p>
 * @method void setWorkflowId(string $WorkflowId) Set <p>Workflow ID. You can obtain it through ListWorkflows. Required</p>
 * @method string getWorkflowRunId() Obtain <p>Workflow run ID, which can be obtained through ListWorkflowRuns. Required</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) Set <p>Workflow run ID, which can be obtained through ListWorkflowRuns. Required</p>
 * @method integer getRunType() Obtain <p>Running type. Required. Value: 1 ordinary running, 2 advanced running</p>
 * @method void setRunType(integer $RunType) Set <p>Running type. Required. Value: 1 ordinary running, 2 advanced running</p>
 * @method array getAdvancedParams() Obtain <p>Custom running parameter filled when the running type is advanced running</p>
 * @method void setAdvancedParams(array $AdvancedParams) Set <p>Custom running parameter filled when the running type is advanced running</p>
 * @method array getTaskIds() Obtain <p>This time, the specified task ID set needs to be rerun. You can obtain it through ListWorkflowTasks. If not passed, all tasks under the workflow will be rerun by default.</p>
 * @method void setTaskIds(array $TaskIds) Set <p>This time, the specified task ID set needs to be rerun. You can obtain it through ListWorkflowTasks. If not passed, all tasks under the workflow will be rerun by default.</p>
 * @method ScheduledTimeConfig getScheduledTimeConfig() Obtain <p>Scheduled dispatch time list configuration</p>
 * @method void setScheduledTimeConfig(ScheduledTimeConfig $ScheduledTimeConfig) Set <p>Scheduled dispatch time list configuration</p>
 */
class RerunWorkflowRunRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>Workflow ID. You can obtain it through ListWorkflows. Required</p>
     */
    public $WorkflowId;

    /**
     * @var string <p>Workflow run ID, which can be obtained through ListWorkflowRuns. Required</p>
     */
    public $WorkflowRunId;

    /**
     * @var integer <p>Running type. Required. Value: 1 ordinary running, 2 advanced running</p>
     */
    public $RunType;

    /**
     * @var array <p>Custom running parameter filled when the running type is advanced running</p>
     */
    public $AdvancedParams;

    /**
     * @var array <p>This time, the specified task ID set needs to be rerun. You can obtain it through ListWorkflowTasks. If not passed, all tasks under the workflow will be rerun by default.</p>
     */
    public $TaskIds;

    /**
     * @var ScheduledTimeConfig <p>Scheduled dispatch time list configuration</p>
     */
    public $ScheduledTimeConfig;

    /**
     * @param string $WorkspaceId <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
     * @param string $WorkflowId <p>Workflow ID. You can obtain it through ListWorkflows. Required</p>
     * @param string $WorkflowRunId <p>Workflow run ID, which can be obtained through ListWorkflowRuns. Required</p>
     * @param integer $RunType <p>Running type. Required. Value: 1 ordinary running, 2 advanced running</p>
     * @param array $AdvancedParams <p>Custom running parameter filled when the running type is advanced running</p>
     * @param array $TaskIds <p>This time, the specified task ID set needs to be rerun. You can obtain it through ListWorkflowTasks. If not passed, all tasks under the workflow will be rerun by default.</p>
     * @param ScheduledTimeConfig $ScheduledTimeConfig <p>Scheduled dispatch time list configuration</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("AdvancedParams",$param) and $param["AdvancedParams"] !== null) {
            $this->AdvancedParams = [];
            foreach ($param["AdvancedParams"] as $key => $value){
                $obj = new TaskSchedulingParameterBrief();
                $obj->deserialize($value);
                array_push($this->AdvancedParams, $obj);
            }
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("ScheduledTimeConfig",$param) and $param["ScheduledTimeConfig"] !== null) {
            $this->ScheduledTimeConfig = new ScheduledTimeConfig();
            $this->ScheduledTimeConfig->deserialize($param["ScheduledTimeConfig"]);
        }
    }
}
