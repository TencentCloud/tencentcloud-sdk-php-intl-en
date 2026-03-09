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
 * Task file detailed information.
 *
 * @method string getProjectId() Obtain Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskFolderId() Obtain Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskFolderId(string $TaskFolderId) Set Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskFolderPath() Obtain Absolute path of the folder.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskFolderPath(string $TaskFolderPath) Set Absolute path of the folder.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUserUin() Obtain Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUserUin(string $CreateUserUin) Set Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParentTaskFolderPath() Obtain Parent folder absolute path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParentTaskFolderPath(string $ParentTaskFolderPath) Set Parent folder absolute path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskFolderName() Obtain Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskFolderName(string $TaskFolderName) Set Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowId() Obtain Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskFolderType() Obtain Task folder type.

| task folder type parameter | task folder type interface corresponding name |.
| ---------------- | ------------------------ |
ETL | integration task.
| EMR              | EMR                      |
| DLC              | DLC                      |
| SETATS           | SETATS                   |
| TDSQL            | TDSQL                    |
| TCHOUSE          | TCHOUSE                  |
COMMON.
TI_ONE | ti-one machine learning.
ACROSS_WORKFLOWS | cross-workflow.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskFolderType(string $TaskFolderType) Set Task folder type.

| task folder type parameter | task folder type interface corresponding name |.
| ---------------- | ------------------------ |
ETL | integration task.
| EMR              | EMR                      |
| DLC              | DLC                      |
| SETATS           | SETATS                   |
| TDSQL            | TDSQL                    |
| TCHOUSE          | TCHOUSE                  |
COMMON.
TI_ONE | ti-one machine learning.
ACROSS_WORKFLOWS | cross-workflow.

Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskFolderDetail extends AbstractModel
{
    /**
     * @var string Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskFolderId;

    /**
     * @var string Absolute path of the folder.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskFolderPath;

    /**
     * @var string Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUserUin;

    /**
     * @var string Parent folder absolute path.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParentTaskFolderPath;

    /**
     * @var string Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskFolderName;

    /**
     * @var string Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Task folder type.

| task folder type parameter | task folder type interface corresponding name |.
| ---------------- | ------------------------ |
ETL | integration task.
| EMR              | EMR                      |
| DLC              | DLC                      |
| SETATS           | SETATS                   |
| TDSQL            | TDSQL                    |
| TCHOUSE          | TCHOUSE                  |
COMMON.
TI_ONE | ti-one machine learning.
ACROSS_WORKFLOWS | cross-workflow.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskFolderType;

    /**
     * @param string $ProjectId Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskFolderId Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskFolderPath Absolute path of the folder.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUserUin Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ParentTaskFolderPath Parent folder absolute path.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskFolderName Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowId Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskFolderType Task folder type.

| task folder type parameter | task folder type interface corresponding name |.
| ---------------- | ------------------------ |
ETL | integration task.
| EMR              | EMR                      |
| DLC              | DLC                      |
| SETATS           | SETATS                   |
| TDSQL            | TDSQL                    |
| TCHOUSE          | TCHOUSE                  |
COMMON.
TI_ONE | ti-one machine learning.
ACROSS_WORKFLOWS | cross-workflow.

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

        if (array_key_exists("TaskFolderId",$param) and $param["TaskFolderId"] !== null) {
            $this->TaskFolderId = $param["TaskFolderId"];
        }

        if (array_key_exists("TaskFolderPath",$param) and $param["TaskFolderPath"] !== null) {
            $this->TaskFolderPath = $param["TaskFolderPath"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("ParentTaskFolderPath",$param) and $param["ParentTaskFolderPath"] !== null) {
            $this->ParentTaskFolderPath = $param["ParentTaskFolderPath"];
        }

        if (array_key_exists("TaskFolderName",$param) and $param["TaskFolderName"] !== null) {
            $this->TaskFolderName = $param["TaskFolderName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskFolderType",$param) and $param["TaskFolderType"] !== null) {
            $this->TaskFolderType = $param["TaskFolderType"];
        }
    }
}
