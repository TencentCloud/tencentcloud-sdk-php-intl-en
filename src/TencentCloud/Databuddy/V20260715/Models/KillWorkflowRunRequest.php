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
 * KillWorkflowRun request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
 * @method string getWorkflowId() Obtain <p>Workflow ID. You can obtain it through ListWorkflows. Required</p>
 * @method void setWorkflowId(string $WorkflowId) Set <p>Workflow ID. You can obtain it through ListWorkflows. Required</p>
 * @method array getWorkflowRunIds() Obtain <p>List of workflow running IDs pending termination. You can obtain it through ListWorkflowRuns</p>
 * @method void setWorkflowRunIds(array $WorkflowRunIds) Set <p>List of workflow running IDs pending termination. You can obtain it through ListWorkflowRuns</p>
 * @method boolean getKillAllRuns() Obtain <p>Whether to terminate all running instances in the workflow that have not entered the final state. Optional. false by default.</p>
 * @method void setKillAllRuns(boolean $KillAllRuns) Set <p>Whether to terminate all running instances in the workflow that have not entered the final state. Optional. false by default.</p>
 * @method boolean getOnlyKillPendingRuns() Obtain <p>Whether to terminate only the running that is in the Waiting (Pending) state. Optional. false by default</p>
 * @method void setOnlyKillPendingRuns(boolean $OnlyKillPendingRuns) Set <p>Whether to terminate only the running that is in the Waiting (Pending) state. Optional. false by default</p>
 */
class KillWorkflowRunRequest extends AbstractModel
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
     * @var array <p>List of workflow running IDs pending termination. You can obtain it through ListWorkflowRuns</p>
     */
    public $WorkflowRunIds;

    /**
     * @var boolean <p>Whether to terminate all running instances in the workflow that have not entered the final state. Optional. false by default.</p>
     */
    public $KillAllRuns;

    /**
     * @var boolean <p>Whether to terminate only the running that is in the Waiting (Pending) state. Optional. false by default</p>
     */
    public $OnlyKillPendingRuns;

    /**
     * @param string $WorkspaceId <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
     * @param string $WorkflowId <p>Workflow ID. You can obtain it through ListWorkflows. Required</p>
     * @param array $WorkflowRunIds <p>List of workflow running IDs pending termination. You can obtain it through ListWorkflowRuns</p>
     * @param boolean $KillAllRuns <p>Whether to terminate all running instances in the workflow that have not entered the final state. Optional. false by default.</p>
     * @param boolean $OnlyKillPendingRuns <p>Whether to terminate only the running that is in the Waiting (Pending) state. Optional. false by default</p>
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

        if (array_key_exists("WorkflowRunIds",$param) and $param["WorkflowRunIds"] !== null) {
            $this->WorkflowRunIds = $param["WorkflowRunIds"];
        }

        if (array_key_exists("KillAllRuns",$param) and $param["KillAllRuns"] !== null) {
            $this->KillAllRuns = $param["KillAllRuns"];
        }

        if (array_key_exists("OnlyKillPendingRuns",$param) and $param["OnlyKillPendingRuns"] !== null) {
            $this->OnlyKillPendingRuns = $param["OnlyKillPendingRuns"];
        }
    }
}
