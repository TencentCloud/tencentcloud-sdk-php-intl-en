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
 * Workflow list pagination details.
 *
 * @method integer getTaskCount() Obtain Number of Tasks
 * @method void setTaskCount(integer $TaskCount) Set Number of Tasks
 * @method string getFolderName() Obtain folder name.

 * @method void setFolderName(string $FolderName) Set folder name.

 * @method string getFolderId() Obtain Workflow folder id.
 * @method void setFolderId(string $FolderId) Set Workflow folder id.
 * @method string getWorkflowId() Obtain Workflow id.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow id.
 * @method string getWorkflowName() Obtain Workflow name.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowType() Obtain Specifies the workflow type.
-cycle period.
-manual.
 * @method void setWorkflowType(string $WorkflowType) Set Specifies the workflow type.
-cycle period.
-manual.
 * @method string getWorkflowDesc() Obtain Workflow description.

 * @method void setWorkflowDesc(string $WorkflowDesc) Set Workflow description.

 * @method string getOwnerUin() Obtain Responsible user id, multiple ';' separators.

 * @method void setOwnerUin(string $OwnerUin) Set Responsible user id, multiple ';' separators.

 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getProjectName() Obtain Project name.


 * @method void setProjectName(string $ProjectName) Set Project name.


 * @method string getStatus() Obtain Workflow Status

* ALL_RUNNING: All running (all workflows are in scheduling state)

* ALL_FREEZED: All paused

* ALL_STOPPTED: All stopped

* PART_RUNNING: Partially running (some workflows are running, others not)

* ALL_NO_RUNNING: All not scheduled

* ALL_INVALID: All invalid
 * @method void setStatus(string $Status) Set Workflow Status

* ALL_RUNNING: All running (all workflows are in scheduling state)

* ALL_FREEZED: All paused

* ALL_STOPPTED: All stopped

* PART_RUNNING: Partially running (some workflows are running, others not)

* ALL_NO_RUNNING: All not scheduled

* ALL_INVALID: All invalid
 * @method string getCreateTime() Obtain Workflow creation time.

 * @method void setCreateTime(string $CreateTime) Set Workflow creation time.

 * @method string getUpdateTime() Obtain Latest update time. specifies development and production updates.
 * @method void setUpdateTime(string $UpdateTime) Set Latest update time. specifies development and production updates.
 * @method string getUpdateUserUin() Obtain Last updated by, including development and production updates.
 * @method void setUpdateUserUin(string $UpdateUserUin) Set Last updated by, including development and production updates.
 */
class OpsWorkflow extends AbstractModel
{
    /**
     * @var integer Number of Tasks
     */
    public $TaskCount;

    /**
     * @var string folder name.

     */
    public $FolderName;

    /**
     * @var string Workflow folder id.
     */
    public $FolderId;

    /**
     * @var string Workflow id.
     */
    public $WorkflowId;

    /**
     * @var string Workflow name.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowName;

    /**
     * @var string Specifies the workflow type.
-cycle period.
-manual.
     */
    public $WorkflowType;

    /**
     * @var string Workflow description.

     */
    public $WorkflowDesc;

    /**
     * @var string Responsible user id, multiple ';' separators.

     */
    public $OwnerUin;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Project name.


     */
    public $ProjectName;

    /**
     * @var string Workflow Status

* ALL_RUNNING: All running (all workflows are in scheduling state)

* ALL_FREEZED: All paused

* ALL_STOPPTED: All stopped

* PART_RUNNING: Partially running (some workflows are running, others not)

* ALL_NO_RUNNING: All not scheduled

* ALL_INVALID: All invalid
     */
    public $Status;

    /**
     * @var string Workflow creation time.

     */
    public $CreateTime;

    /**
     * @var string Latest update time. specifies development and production updates.
     */
    public $UpdateTime;

    /**
     * @var string Last updated by, including development and production updates.
     */
    public $UpdateUserUin;

    /**
     * @param integer $TaskCount Number of Tasks
     * @param string $FolderName folder name.

     * @param string $FolderId Workflow folder id.
     * @param string $WorkflowId Workflow id.
     * @param string $WorkflowName Workflow name.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowType Specifies the workflow type.
-cycle period.
-manual.
     * @param string $WorkflowDesc Workflow description.

     * @param string $OwnerUin Responsible user id, multiple ';' separators.

     * @param string $ProjectId Project ID.
     * @param string $ProjectName Project name.


     * @param string $Status Workflow Status

* ALL_RUNNING: All running (all workflows are in scheduling state)

* ALL_FREEZED: All paused

* ALL_STOPPTED: All stopped

* PART_RUNNING: Partially running (some workflows are running, others not)

* ALL_NO_RUNNING: All not scheduled

* ALL_INVALID: All invalid
     * @param string $CreateTime Workflow creation time.

     * @param string $UpdateTime Latest update time. specifies development and production updates.
     * @param string $UpdateUserUin Last updated by, including development and production updates.
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
        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UpdateUserUin",$param) and $param["UpdateUserUin"] !== null) {
            $this->UpdateUserUin = $param["UpdateUserUin"];
        }
    }
}
