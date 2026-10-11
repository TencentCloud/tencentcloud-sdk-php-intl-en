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
 * Outcome of a single operation. Shared by RunWorkflow / RerunWorkflowRun / KillWorkflowRun: RunWorkflow — WorkflowId / WorkflowName have values, WorkflowRunId is empty. RerunWorkflowRun — WorkflowId / WorkflowName / WorkflowRunId all have values. KillWorkflowRun — WorkflowId / WorkflowName / WorkflowRunId all have values.
 *
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method string getWorkflowName() Obtain Workflow name.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
 * @method string getRunActionId() Obtain Operation action ID, used to trace the specific executed action.
 * @method void setRunActionId(string $RunActionId) Set Operation action ID, used to trace the specific executed action.
 * @method string getErrorMessage() Obtain Failure error message. When the operation fails, a specific error description is returned.
 * @method void setErrorMessage(string $ErrorMessage) Set Failure error message. When the operation fails, a specific error description is returned.
 * @method boolean getOpStatus() Obtain Operation status. `true` indicates success, and `false` indicates failure.
 * @method void setOpStatus(boolean $OpStatus) Set Operation status. `true` indicates success, and `false` indicates failure.
 * @method string getWorkflowRunId() Obtain Workflow running ID. In rerun/termination scenarios, the operated running ID is returned. It is empty in the run workflow scenario.
 * @method void setWorkflowRunId(string $WorkflowRunId) Set Workflow running ID. In rerun/termination scenarios, the operated running ID is returned. It is empty in the run workflow scenario.
 */
class RunActionBrief extends AbstractModel
{
    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @var string Workflow name.
     */
    public $WorkflowName;

    /**
     * @var string Operation action ID, used to trace the specific executed action.
     */
    public $RunActionId;

    /**
     * @var string Failure error message. When the operation fails, a specific error description is returned.
     */
    public $ErrorMessage;

    /**
     * @var boolean Operation status. `true` indicates success, and `false` indicates failure.
     */
    public $OpStatus;

    /**
     * @var string Workflow running ID. In rerun/termination scenarios, the operated running ID is returned. It is empty in the run workflow scenario.
     */
    public $WorkflowRunId;

    /**
     * @param string $WorkflowId Workflow ID
     * @param string $WorkflowName Workflow name.
     * @param string $RunActionId Operation action ID, used to trace the specific executed action.
     * @param string $ErrorMessage Failure error message. When the operation fails, a specific error description is returned.
     * @param boolean $OpStatus Operation status. `true` indicates success, and `false` indicates failure.
     * @param string $WorkflowRunId Workflow running ID. In rerun/termination scenarios, the operated running ID is returned. It is empty in the run workflow scenario.
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("RunActionId",$param) and $param["RunActionId"] !== null) {
            $this->RunActionId = $param["RunActionId"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("OpStatus",$param) and $param["OpStatus"] !== null) {
            $this->OpStatus = $param["OpStatus"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }
    }
}
