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
 * Running information of a single iteration of the built-in workflow
 *
 * @method string getWorkflowRunId() Obtain <p>Built-in flow running ID</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) Set <p>Built-in flow running ID</p>
 * @method string getIterationIndex() Obtain <p>Iteration serial number</p>
 * @method void setIterationIndex(string $IterationIndex) Set <p>Iteration serial number</p>
 * @method string getRunStartTime() Obtain <p>Start time in milliseconds.</p>
 * @method void setRunStartTime(string $RunStartTime) Set <p>Start time in milliseconds.</p>
 * @method string getRunEndTime() Obtain <p>Running end time, unit: timestamp in milliseconds</p>
 * @method void setRunEndTime(string $RunEndTime) Set <p>Running end time, unit: timestamp in milliseconds</p>
 * @method string getRunState() Obtain <p>Running state (for reference, see the workflow execution status enumeration)</p>
 * @method void setRunState(string $RunState) Set <p>Running state (for reference, see the workflow execution status enumeration)</p>
 * @method string getRunCostTime() Obtain <p>Running time, unit: seconds</p>
 * @method void setRunCostTime(string $RunCostTime) Set <p>Running time, unit: seconds</p>
 * @method string getWorkflowParams() Obtain <p>Running parameter</p>
 * @method void setWorkflowParams(string $WorkflowParams) Set <p>Running parameter</p>
 * @method string getErrorCodeString() Obtain <p>Error code</p>
 * @method void setErrorCodeString(string $ErrorCodeString) Set <p>Error code</p>
 * @method InnerWorkflowTaskRunIterationBrief getInnerTaskRun() Obtain <p>Task operation inside the built-in workflow</p>
 * @method void setInnerTaskRun(InnerWorkflowTaskRunIterationBrief $InnerTaskRun) Set <p>Task operation inside the built-in workflow</p>
 */
class InnerWorkflowTaskRunIteration extends AbstractModel
{
    /**
     * @var string <p>Built-in flow running ID</p>
     */
    public $WorkflowRunId;

    /**
     * @var string <p>Iteration serial number</p>
     */
    public $IterationIndex;

    /**
     * @var string <p>Start time in milliseconds.</p>
     */
    public $RunStartTime;

    /**
     * @var string <p>Running end time, unit: timestamp in milliseconds</p>
     */
    public $RunEndTime;

    /**
     * @var string <p>Running state (for reference, see the workflow execution status enumeration)</p>
     */
    public $RunState;

    /**
     * @var string <p>Running time, unit: seconds</p>
     */
    public $RunCostTime;

    /**
     * @var string <p>Running parameter</p>
     */
    public $WorkflowParams;

    /**
     * @var string <p>Error code</p>
     */
    public $ErrorCodeString;

    /**
     * @var InnerWorkflowTaskRunIterationBrief <p>Task operation inside the built-in workflow</p>
     */
    public $InnerTaskRun;

    /**
     * @param string $WorkflowRunId <p>Built-in flow running ID</p>
     * @param string $IterationIndex <p>Iteration serial number</p>
     * @param string $RunStartTime <p>Start time in milliseconds.</p>
     * @param string $RunEndTime <p>Running end time, unit: timestamp in milliseconds</p>
     * @param string $RunState <p>Running state (for reference, see the workflow execution status enumeration)</p>
     * @param string $RunCostTime <p>Running time, unit: seconds</p>
     * @param string $WorkflowParams <p>Running parameter</p>
     * @param string $ErrorCodeString <p>Error code</p>
     * @param InnerWorkflowTaskRunIterationBrief $InnerTaskRun <p>Task operation inside the built-in workflow</p>
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
        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("IterationIndex",$param) and $param["IterationIndex"] !== null) {
            $this->IterationIndex = $param["IterationIndex"];
        }

        if (array_key_exists("RunStartTime",$param) and $param["RunStartTime"] !== null) {
            $this->RunStartTime = $param["RunStartTime"];
        }

        if (array_key_exists("RunEndTime",$param) and $param["RunEndTime"] !== null) {
            $this->RunEndTime = $param["RunEndTime"];
        }

        if (array_key_exists("RunState",$param) and $param["RunState"] !== null) {
            $this->RunState = $param["RunState"];
        }

        if (array_key_exists("RunCostTime",$param) and $param["RunCostTime"] !== null) {
            $this->RunCostTime = $param["RunCostTime"];
        }

        if (array_key_exists("WorkflowParams",$param) and $param["WorkflowParams"] !== null) {
            $this->WorkflowParams = $param["WorkflowParams"];
        }

        if (array_key_exists("ErrorCodeString",$param) and $param["ErrorCodeString"] !== null) {
            $this->ErrorCodeString = $param["ErrorCodeString"];
        }

        if (array_key_exists("InnerTaskRun",$param) and $param["InnerTaskRun"] !== null) {
            $this->InnerTaskRun = new InnerWorkflowTaskRunIterationBrief();
            $this->InnerTaskRun->deserialize($param["InnerTaskRun"]);
        }
    }
}
