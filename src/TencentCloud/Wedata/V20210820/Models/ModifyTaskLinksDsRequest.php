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
 * ModifyTaskLinksDs request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getTaskFrom() Obtain Parent Task ID
 * @method void setTaskFrom(string $TaskFrom) Set Parent Task ID
 * @method string getTaskTo() Obtain Subtask ID
 * @method void setTaskTo(string $TaskTo) Set Subtask ID
 * @method string getWorkflowId() Obtain Subtask Workflow
 * @method void setWorkflowId(string $WorkflowId) Set Subtask Workflow
 * @method string getRealFromWorkflowId() Obtain Parent task Workflow
 * @method void setRealFromWorkflowId(string $RealFromWorkflowId) Set Parent task Workflow
 * @method string getRequestFromSource() Obtain Request source, WEB frontend; CLIENT CLIENT.
 * @method void setRequestFromSource(string $RequestFromSource) Set Request source, WEB frontend; CLIENT CLIENT.
 * @method string getLinkDependencyType() Obtain Dependency relationship between parent and child tasks.
Enable all instances that normally depend on the parent task.
    normal_all(1),
normal dependent on parent task first one.
Specifies the normal dependent on parent task, which is the last one (3).
Valid values: normal, any one of dependent on parent tasks (4).
normal dependent on parent task a specified one.
self-Dependency, cannot use.

Invalid dependent parent task for all instances. enable (forward dependency for tomorrow).
    non_normal_all_forward(11),
non-normal dependent on parent task. first one forward (12).
non-normal dependent on parent task, last one.
Not normal, dependent on parent task, any one.
Specifies a non-normal task that depends on the parent task and designates one.

Specifies that all instances dependent on a non-normal parent task are enabled (backward dependency on yesterday).
    non_normal_all_backward(21),
non-normal dependent on parent task. first one backward (22).
Not normal dependent on parent task last one backward.
non-normal dependent on parent task, any one.
Specifies a non-normal task that depends on the parent task.
 * @method void setLinkDependencyType(string $LinkDependencyType) Set Dependency relationship between parent and child tasks.
Enable all instances that normally depend on the parent task.
    normal_all(1),
normal dependent on parent task first one.
Specifies the normal dependent on parent task, which is the last one (3).
Valid values: normal, any one of dependent on parent tasks (4).
normal dependent on parent task a specified one.
self-Dependency, cannot use.

Invalid dependent parent task for all instances. enable (forward dependency for tomorrow).
    non_normal_all_forward(11),
non-normal dependent on parent task. first one forward (12).
non-normal dependent on parent task, last one.
Not normal, dependent on parent task, any one.
Specifies a non-normal task that depends on the parent task and designates one.

Specifies that all instances dependent on a non-normal parent task are enabled (backward dependency on yesterday).
    non_normal_all_backward(21),
non-normal dependent on parent task. first one backward (22).
Not normal dependent on parent task last one backward.
non-normal dependent on parent task, any one.
Specifies a non-normal task that depends on the parent task.
 * @method string getLinkExt() Obtain Additional attribute information such as branch node and merge node information.
 * @method void setLinkExt(string $LinkExt) Set Additional attribute information such as branch node and merge node information.
 */
class ModifyTaskLinksDsRequest extends AbstractModel
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
     * @var string Parent task Workflow
     */
    public $RealFromWorkflowId;

    /**
     * @var string Request source, WEB frontend; CLIENT CLIENT.
     */
    public $RequestFromSource;

    /**
     * @var string Dependency relationship between parent and child tasks.
Enable all instances that normally depend on the parent task.
    normal_all(1),
normal dependent on parent task first one.
Specifies the normal dependent on parent task, which is the last one (3).
Valid values: normal, any one of dependent on parent tasks (4).
normal dependent on parent task a specified one.
self-Dependency, cannot use.

Invalid dependent parent task for all instances. enable (forward dependency for tomorrow).
    non_normal_all_forward(11),
non-normal dependent on parent task. first one forward (12).
non-normal dependent on parent task, last one.
Not normal, dependent on parent task, any one.
Specifies a non-normal task that depends on the parent task and designates one.

Specifies that all instances dependent on a non-normal parent task are enabled (backward dependency on yesterday).
    non_normal_all_backward(21),
non-normal dependent on parent task. first one backward (22).
Not normal dependent on parent task last one backward.
non-normal dependent on parent task, any one.
Specifies a non-normal task that depends on the parent task.
     */
    public $LinkDependencyType;

    /**
     * @var string Additional attribute information such as branch node and merge node information.
     */
    public $LinkExt;

    /**
     * @param string $ProjectId Project ID
     * @param string $TaskFrom Parent Task ID
     * @param string $TaskTo Subtask ID
     * @param string $WorkflowId Subtask Workflow
     * @param string $RealFromWorkflowId Parent task Workflow
     * @param string $RequestFromSource Request source, WEB frontend; CLIENT CLIENT.
     * @param string $LinkDependencyType Dependency relationship between parent and child tasks.
Enable all instances that normally depend on the parent task.
    normal_all(1),
normal dependent on parent task first one.
Specifies the normal dependent on parent task, which is the last one (3).
Valid values: normal, any one of dependent on parent tasks (4).
normal dependent on parent task a specified one.
self-Dependency, cannot use.

Invalid dependent parent task for all instances. enable (forward dependency for tomorrow).
    non_normal_all_forward(11),
non-normal dependent on parent task. first one forward (12).
non-normal dependent on parent task, last one.
Not normal, dependent on parent task, any one.
Specifies a non-normal task that depends on the parent task and designates one.

Specifies that all instances dependent on a non-normal parent task are enabled (backward dependency on yesterday).
    non_normal_all_backward(21),
non-normal dependent on parent task. first one backward (22).
Not normal dependent on parent task last one backward.
non-normal dependent on parent task, any one.
Specifies a non-normal task that depends on the parent task.
     * @param string $LinkExt Additional attribute information such as branch node and merge node information.
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

        if (array_key_exists("RequestFromSource",$param) and $param["RequestFromSource"] !== null) {
            $this->RequestFromSource = $param["RequestFromSource"];
        }

        if (array_key_exists("LinkDependencyType",$param) and $param["LinkDependencyType"] !== null) {
            $this->LinkDependencyType = $param["LinkDependencyType"];
        }

        if (array_key_exists("LinkExt",$param) and $param["LinkExt"] !== null) {
            $this->LinkExt = $param["LinkExt"];
        }
    }
}
