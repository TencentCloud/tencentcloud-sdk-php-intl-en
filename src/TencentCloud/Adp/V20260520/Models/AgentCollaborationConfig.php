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
 * Agent collaboration configuration
 *
 * @method integer getAgentCollaborationMode() Obtain Collaboration mode. Enumeration values: 1: Free transfer: Agents can freely transmit tasks with each other. 2: Workflow orchestration: Collaboration based on predefined processes. 3: Plan-and-Execute: A collaboration mode with separate planning and execution.
 * @method void setAgentCollaborationMode(integer $AgentCollaborationMode) Set Collaboration mode. Enumeration values: 1: Free transfer: Agents can freely transmit tasks with each other. 2: Workflow orchestration: Collaboration based on predefined processes. 3: Plan-and-Execute: A collaboration mode with separate planning and execution.
 * @method string getWorkflowId() Obtain Workflow ID.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
 * @method string getWorkflowName() Obtain Workflow name.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
 */
class AgentCollaborationConfig extends AbstractModel
{
    /**
     * @var integer Collaboration mode. Enumeration values: 1: Free transfer: Agents can freely transmit tasks with each other. 2: Workflow orchestration: Collaboration based on predefined processes. 3: Plan-and-Execute: A collaboration mode with separate planning and execution.
     */
    public $AgentCollaborationMode;

    /**
     * @var string Workflow ID.
     */
    public $WorkflowId;

    /**
     * @var string Workflow name.
     */
    public $WorkflowName;

    /**
     * @param integer $AgentCollaborationMode Collaboration mode. Enumeration values: 1: Free transfer: Agents can freely transmit tasks with each other. 2: Workflow orchestration: Collaboration based on predefined processes. 3: Plan-and-Execute: A collaboration mode with separate planning and execution.
     * @param string $WorkflowId Workflow ID.
     * @param string $WorkflowName Workflow name.
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
        if (array_key_exists("AgentCollaborationMode",$param) and $param["AgentCollaborationMode"] !== null) {
            $this->AgentCollaborationMode = $param["AgentCollaborationMode"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }
    }
}
