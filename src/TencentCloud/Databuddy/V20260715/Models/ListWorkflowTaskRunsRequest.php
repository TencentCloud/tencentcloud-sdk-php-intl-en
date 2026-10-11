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
 * ListWorkflowTaskRuns request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
 * @method string getTaskId() Obtain <p>Task ID, which can be obtained through the ListWorkflowTasks API. Optional, exact match. Pass at least one of this parameter and WorkflowRunId: if only TaskId is passed, all execution history of the task is queried.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID, which can be obtained through the ListWorkflowTasks API. Optional, exact match. Pass at least one of this parameter and WorkflowRunId: if only TaskId is passed, all execution history of the task is queried.</p>
 * @method string getWorkflowRunId() Obtain <p>Workflow run ID, which can be obtained through ListWorkflowRuns. Optional, exact match. Pass at least one of this parameter and TaskId: if only WorkflowRunId is passed, all task runs under this workflow run are queried.</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) Set <p>Workflow run ID, which can be obtained through ListWorkflowRuns. Optional, exact match. Pass at least one of this parameter and TaskId: if only WorkflowRunId is passed, all task runs under this workflow run are queried.</p>
 * @method integer getPageNumber() Obtain <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
 * @method integer getPageSize() Obtain <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
 * @method void setPageSize(integer $PageSize) Set <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
 */
class ListWorkflowTaskRunsRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>Task ID, which can be obtained through the ListWorkflowTasks API. Optional, exact match. Pass at least one of this parameter and WorkflowRunId: if only TaskId is passed, all execution history of the task is queried.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Workflow run ID, which can be obtained through ListWorkflowRuns. Optional, exact match. Pass at least one of this parameter and TaskId: if only WorkflowRunId is passed, all task runs under this workflow run are queried.</p>
     */
    public $WorkflowRunId;

    /**
     * @var integer <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
     */
    public $PageSize;

    /**
     * @param string $WorkspaceId <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
     * @param string $TaskId <p>Task ID, which can be obtained through the ListWorkflowTasks API. Optional, exact match. Pass at least one of this parameter and WorkflowRunId: if only TaskId is passed, all execution history of the task is queried.</p>
     * @param string $WorkflowRunId <p>Workflow run ID, which can be obtained through ListWorkflowRuns. Optional, exact match. Pass at least one of this parameter and TaskId: if only WorkflowRunId is passed, all task runs under this workflow run are queried.</p>
     * @param integer $PageNumber <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
     * @param integer $PageSize <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
