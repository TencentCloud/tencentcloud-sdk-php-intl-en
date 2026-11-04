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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Workflow running instance information
 *
 * @method WorkflowRunSummary getWorkflowRunSummary() Obtain Basic information of the workflow running instance
 * @method void setWorkflowRunSummary(WorkflowRunSummary $WorkflowRunSummary) Set Basic information of the workflow running instance
 * @method WorkflowRunOutput getWorkflowRunOutput() Obtain Workflow run instance output information
 * @method void setWorkflowRunOutput(WorkflowRunOutput $WorkflowRunOutput) Set Workflow run instance output information
 * @method WorkflowRunMetadata getWorkflowRunMetadata() Obtain Workflow run instance metadata
 * @method void setWorkflowRunMetadata(WorkflowRunMetadata $WorkflowRunMetadata) Set Workflow run instance metadata
 */
class WorkflowRun extends AbstractModel
{
    /**
     * @var WorkflowRunSummary Basic information of the workflow running instance
     */
    public $WorkflowRunSummary;

    /**
     * @var WorkflowRunOutput Workflow run instance output information
     */
    public $WorkflowRunOutput;

    /**
     * @var WorkflowRunMetadata Workflow run instance metadata
     */
    public $WorkflowRunMetadata;

    /**
     * @param WorkflowRunSummary $WorkflowRunSummary Basic information of the workflow running instance
     * @param WorkflowRunOutput $WorkflowRunOutput Workflow run instance output information
     * @param WorkflowRunMetadata $WorkflowRunMetadata Workflow run instance metadata
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
        if (array_key_exists("WorkflowRunSummary",$param) and $param["WorkflowRunSummary"] !== null) {
            $this->WorkflowRunSummary = new WorkflowRunSummary();
            $this->WorkflowRunSummary->deserialize($param["WorkflowRunSummary"]);
        }

        if (array_key_exists("WorkflowRunOutput",$param) and $param["WorkflowRunOutput"] !== null) {
            $this->WorkflowRunOutput = new WorkflowRunOutput();
            $this->WorkflowRunOutput->deserialize($param["WorkflowRunOutput"]);
        }

        if (array_key_exists("WorkflowRunMetadata",$param) and $param["WorkflowRunMetadata"] !== null) {
            $this->WorkflowRunMetadata = new WorkflowRunMetadata();
            $this->WorkflowRunMetadata->deserialize($param["WorkflowRunMetadata"]);
        }
    }
}
