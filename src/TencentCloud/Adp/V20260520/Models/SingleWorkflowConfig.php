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
 * Single workflow configuration
 *
 * @method boolean getAsyncWorkflow() Obtain <p>Whether to enable async workflow</p>
 * @method void setAsyncWorkflow(boolean $AsyncWorkflow) Set <p>Whether to enable async workflow</p>
 * @method string getStatus() Obtain <p>Status Release status (UNPUBLISHED: to be released PUBLISHING: publishing PUBLISHED: released PUBLISHED_FAIL: release failure; DRAFT: to be debugged)</p>
 * @method void setStatus(string $Status) Set <p>Status Release status (UNPUBLISHED: to be released PUBLISHING: publishing PUBLISHED: released PUBLISHED_FAIL: release failure; DRAFT: to be debugged)</p>
 * @method string getWorkflowDescription() Obtain <p>Workflow description</p>
 * @method void setWorkflowDescription(string $WorkflowDescription) Set <p>Workflow description</p>
 * @method string getWorkflowId() Obtain <p>Workflow Id</p>
 * @method void setWorkflowId(string $WorkflowId) Set <p>Workflow Id</p>
 * @method string getWorkflowName() Obtain <p>Workflow name.</p>
 * @method void setWorkflowName(string $WorkflowName) Set <p>Workflow name.</p>
 * @method boolean getEnabled() Obtain <p>Whether the workflow is enabled</p>
 * @method void setEnabled(boolean $Enabled) Set <p>Whether the workflow is enabled</p>
 */
class SingleWorkflowConfig extends AbstractModel
{
    /**
     * @var boolean <p>Whether to enable async workflow</p>
     */
    public $AsyncWorkflow;

    /**
     * @var string <p>Status Release status (UNPUBLISHED: to be released PUBLISHING: publishing PUBLISHED: released PUBLISHED_FAIL: release failure; DRAFT: to be debugged)</p>
     */
    public $Status;

    /**
     * @var string <p>Workflow description</p>
     */
    public $WorkflowDescription;

    /**
     * @var string <p>Workflow Id</p>
     */
    public $WorkflowId;

    /**
     * @var string <p>Workflow name.</p>
     */
    public $WorkflowName;

    /**
     * @var boolean <p>Whether the workflow is enabled</p>
     */
    public $Enabled;

    /**
     * @param boolean $AsyncWorkflow <p>Whether to enable async workflow</p>
     * @param string $Status <p>Status Release status (UNPUBLISHED: to be released PUBLISHING: publishing PUBLISHED: released PUBLISHED_FAIL: release failure; DRAFT: to be debugged)</p>
     * @param string $WorkflowDescription <p>Workflow description</p>
     * @param string $WorkflowId <p>Workflow Id</p>
     * @param string $WorkflowName <p>Workflow name.</p>
     * @param boolean $Enabled <p>Whether the workflow is enabled</p>
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
        if (array_key_exists("AsyncWorkflow",$param) and $param["AsyncWorkflow"] !== null) {
            $this->AsyncWorkflow = $param["AsyncWorkflow"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("WorkflowDescription",$param) and $param["WorkflowDescription"] !== null) {
            $this->WorkflowDescription = $param["WorkflowDescription"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
