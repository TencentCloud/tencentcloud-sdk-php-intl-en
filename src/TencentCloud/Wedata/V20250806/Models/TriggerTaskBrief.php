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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task summary information.
 *
 * @method string getProjectId() Obtain Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectName() Obtain Project name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowId() Obtain Workflow id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowName() Obtain Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskName() Obtain Task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskName(string $TaskName) Set Task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskType() Obtain Task type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskType(string $TaskType) Set Task type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserUinInCharge() Obtain Responsible person user UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserUinInCharge(string $UserUinInCharge) Set Responsible person user UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserNameInCharge() Obtain Responsible person's name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserNameInCharge(string $UserNameInCharge) Set Responsible person's name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFolderId() Obtain Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFolderId(string $FolderId) Set Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFolderName() Obtain Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFolderName(string $FolderName) Set Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskTypeId() Obtain Task type ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskTypeId(integer $TaskTypeId) Set Task type ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionState() Obtain Task status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionState(string $ExecutionState) Set Task status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionStartTime() Obtain Start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Start time.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TriggerTaskBrief extends AbstractModel
{
    /**
     * @var string Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Project name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Workflow id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowName;

    /**
     * @var string Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskName;

    /**
     * @var string Task type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskType;

    /**
     * @var string Responsible person user UIN.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserUinInCharge;

    /**
     * @var string Responsible person's name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserNameInCharge;

    /**
     * @var string Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FolderId;

    /**
     * @var string Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FolderName;

    /**
     * @var integer Task type ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskTypeId;

    /**
     * @var string Task status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionState;

    /**
     * @var string Start time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionStartTime;

    /**
     * @param string $ProjectId Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectName Project name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowId Workflow id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowName Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskId Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskName Task name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskType Task type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserUinInCharge Responsible person user UIN.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserNameInCharge Responsible person's name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FolderId Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FolderName Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskTypeId Task type ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionState Task status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionStartTime Start time.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("UserUinInCharge",$param) and $param["UserUinInCharge"] !== null) {
            $this->UserUinInCharge = $param["UserUinInCharge"];
        }

        if (array_key_exists("UserNameInCharge",$param) and $param["UserNameInCharge"] !== null) {
            $this->UserNameInCharge = $param["UserNameInCharge"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("ExecutionState",$param) and $param["ExecutionState"] !== null) {
            $this->ExecutionState = $param["ExecutionState"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }
    }
}
