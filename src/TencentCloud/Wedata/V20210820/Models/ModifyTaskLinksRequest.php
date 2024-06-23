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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTaskLinks request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getTaskFrom() Obtain Parent Task ID
 * @method void setTaskFrom(string $TaskFrom) Set Parent Task ID
 * @method string getTaskTo() Obtain Subtask ID
 * @method void setTaskTo(string $TaskTo) Set Subtask ID
 * @method string getWorkflowId() Obtain Subtask Workflow
 * @method void setWorkflowId(string $WorkflowId) Set Subtask Workflow
 * @method string getRealFromWorkflowId() Obtain Parent Task Workflow
 * @method void setRealFromWorkflowId(string $RealFromWorkflowId) Set Parent Task Workflow
 * @method string getLinkDependencyType() Obtain Dependency Relationship Between Parent and Child Tasks
 * @method void setLinkDependencyType(string $LinkDependencyType) Set Dependency Relationship Between Parent and Child Tasks
 */
class ModifyTaskLinksRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Parent Task ID
     */
    public $TaskFrom;

    /**
     * @var string Subtask ID
     */
    public $TaskTo;

    /**
     * @var string Subtask Workflow
     */
    public $WorkflowId;

    /**
     * @var string Parent Task Workflow
     */
    public $RealFromWorkflowId;

    /**
     * @var string Dependency Relationship Between Parent and Child Tasks
     */
    public $LinkDependencyType;

    /**
     * @param string $ProjectId Project ID
     * @param string $TaskFrom Parent Task ID
     * @param string $TaskTo Subtask ID
     * @param string $WorkflowId Subtask Workflow
     * @param string $RealFromWorkflowId Parent Task Workflow
     * @param string $LinkDependencyType Dependency Relationship Between Parent and Child Tasks
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskFrom",$param) and $param["TaskFrom"] !== null) {
            $this->TaskFrom = $param["TaskFrom"];
        }

        if (array_key_exists("TaskTo",$param) and $param["TaskTo"] !== null) {
            $this->TaskTo = $param["TaskTo"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("RealFromWorkflowId",$param) and $param["RealFromWorkflowId"] !== null) {
            $this->RealFromWorkflowId = $param["RealFromWorkflowId"];
        }

        if (array_key_exists("LinkDependencyType",$param) and $param["LinkDependencyType"] !== null) {
            $this->LinkDependencyType = $param["LinkDependencyType"];
        }
    }
}
