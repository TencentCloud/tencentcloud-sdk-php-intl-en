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
 * ListTaskFolders request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getParentTaskFolderPath() Obtain Absolute path of the parent folder, such as /abc/de. if it is the root directory, pass /.
 * @method void setParentTaskFolderPath(string $ParentTaskFolderPath) Set Absolute path of the parent folder, such as /abc/de. if it is the root directory, pass /.
 * @method string getWorkflowId() Obtain Workflow ID.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
 * @method string getTaskFolderType() Obtain Task folder type.

| task folder type parameter | task folder type interface corresponding name |.
| ---------------- | ------------------------ |
ETL | integration task.
| EMR              | EMR                      |
| DLC              | DLC                      |
| SETATS           | SETATS                   |
| TDSQL            | TDSQL                    |
| TCHOUSE          | TCHOUSE                  |
GENERAL.
TI_ONE | ti-one machine learning.
ACROSS_WORKFLOWS | cross-workflow.


 * @method void setTaskFolderType(string $TaskFolderType) Set Task folder type.

| task folder type parameter | task folder type interface corresponding name |.
| ---------------- | ------------------------ |
ETL | integration task.
| EMR              | EMR                      |
| DLC              | DLC                      |
| SETATS           | SETATS                   |
| TDSQL            | TDSQL                    |
| TCHOUSE          | TCHOUSE                  |
GENERAL.
TI_ONE | ti-one machine learning.
ACROSS_WORKFLOWS | cross-workflow.


 * @method integer getPageNumber() Obtain Number of data pages, equal to or greater than 1. default is 1.
 * @method void setPageNumber(integer $PageNumber) Set Number of data pages, equal to or greater than 1. default is 1.
 * @method integer getPageSize() Obtain Number of data records displayed per page. minimum value is 10. maximum value is 200. default value is 10.
 * @method void setPageSize(integer $PageSize) Set Number of data records displayed per page. minimum value is 10. maximum value is 200. default value is 10.
 */
class ListTaskFoldersRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Absolute path of the parent folder, such as /abc/de. if it is the root directory, pass /.
     */
    public $ParentTaskFolderPath;

    /**
     * @var string Workflow ID.
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
GENERAL.
TI_ONE | ti-one machine learning.
ACROSS_WORKFLOWS | cross-workflow.


     */
    public $TaskFolderType;

    /**
     * @var integer Number of data pages, equal to or greater than 1. default is 1.
     */
    public $PageNumber;

    /**
     * @var integer Number of data records displayed per page. minimum value is 10. maximum value is 200. default value is 10.
     */
    public $PageSize;

    /**
     * @param string $ProjectId Project ID.
     * @param string $ParentTaskFolderPath Absolute path of the parent folder, such as /abc/de. if it is the root directory, pass /.
     * @param string $WorkflowId Workflow ID.
     * @param string $TaskFolderType Task folder type.

| task folder type parameter | task folder type interface corresponding name |.
| ---------------- | ------------------------ |
ETL | integration task.
| EMR              | EMR                      |
| DLC              | DLC                      |
| SETATS           | SETATS                   |
| TDSQL            | TDSQL                    |
| TCHOUSE          | TCHOUSE                  |
GENERAL.
TI_ONE | ti-one machine learning.
ACROSS_WORKFLOWS | cross-workflow.


     * @param integer $PageNumber Number of data pages, equal to or greater than 1. default is 1.
     * @param integer $PageSize Number of data records displayed per page. minimum value is 10. maximum value is 200. default value is 10.
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

        if (array_key_exists("ParentTaskFolderPath",$param) and $param["ParentTaskFolderPath"] !== null) {
            $this->ParentTaskFolderPath = $param["ParentTaskFolderPath"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskFolderType",$param) and $param["TaskFolderType"] !== null) {
            $this->TaskFolderType = $param["TaskFolderType"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
