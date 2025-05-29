<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifies the single workflow configuration in Q&A knowledge library single workflow mode.
 *
 * @method string getWorkflowId() Obtain Workflow ID.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
 * @method string getWorkflowName() Obtain Workflow name.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
 * @method string getWorkflowDesc() Obtain Workflow description.
 * @method void setWorkflowDesc(string $WorkflowDesc) Set Workflow description.
 * @method string getStatus() Obtain Workflow status, publishing status (UNPUBLISHED; PUBLISHING; PUBLISHED; FAIL).
 * @method void setStatus(string $Status) Set Workflow status, publishing status (UNPUBLISHED; PUBLISHING; PUBLISHED; FAIL).
 * @method boolean getIsEnable() Obtain Whether to enable workflow.
 * @method void setIsEnable(boolean $IsEnable) Set Whether to enable workflow.
 * @method boolean getAsyncWorkflow() Obtain Whether to enable asynchronous call of the workflow.
 * @method void setAsyncWorkflow(boolean $AsyncWorkflow) Set Whether to enable asynchronous call of the workflow.
 */
class KnowledgeQaSingleWorkflow extends AbstractModel
{
    /**
     * @var string Workflow ID.
     */
    public $WorkflowId;

    /**
     * @var string Workflow name.
     */
    public $WorkflowName;

    /**
     * @var string Workflow description.
     */
    public $WorkflowDesc;

    /**
     * @var string Workflow status, publishing status (UNPUBLISHED; PUBLISHING; PUBLISHED; FAIL).
     */
    public $Status;

    /**
     * @var boolean Whether to enable workflow.
     */
    public $IsEnable;

    /**
     * @var boolean Whether to enable asynchronous call of the workflow.
     */
    public $AsyncWorkflow;

    /**
     * @param string $WorkflowId Workflow ID.
     * @param string $WorkflowName Workflow name.
     * @param string $WorkflowDesc Workflow description.
     * @param string $Status Workflow status, publishing status (UNPUBLISHED; PUBLISHING; PUBLISHED; FAIL).
     * @param boolean $IsEnable Whether to enable workflow.
     * @param boolean $AsyncWorkflow Whether to enable asynchronous call of the workflow.
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

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }

        if (array_key_exists("AsyncWorkflow",$param) and $param["AsyncWorkflow"] !== null) {
            $this->AsyncWorkflow = $param["AsyncWorkflow"];
        }
    }
}
