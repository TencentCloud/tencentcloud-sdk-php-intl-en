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
 * Task basic attribute information.
 *
 * @method string getTaskId() Obtain Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskTypeId() Obtain Task type ID.

- 26:OfflineSynchronization
- 30:Python
- 32:DLC SQL
- 35:Shell
- 38:Shell Form Mode
- 46:DLC Spark
- 50:DLC PySpark
- 130:Branch Node
- 131:Merged Node
- 132:Notebook
- 133:SSH
- 137:For-each
- 139:DLC Spark Streaming
- 140:Run Workflow
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskTypeId(integer $TaskTypeId) Set Task type ID.

- 26:OfflineSynchronization
- 30:Python
- 32:DLC SQL
- 35:Shell
- 38:Shell Form Mode
- 46:DLC Spark
- 50:DLC PySpark
- 130:Branch Node
- 131:Merged Node
- 132:Notebook
- 133:SSH
- 137:For-each
- 139:DLC Spark Streaming
- 140:Run Workflow
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowId() Obtain Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskName() Obtain Task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskName(string $TaskName) Set Task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskLatestVersionNo() Obtain Last saved version no.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskLatestVersionNo(string $TaskLatestVersionNo) Set Last saved version no.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskLatestSubmitVersionNo() Obtain Version no. of last submission.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskLatestSubmitVersionNo(string $TaskLatestSubmitVersionNo) Set Version no. of last submission.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowName() Obtain Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Task status:.
* N: create.
* Y: scheduling in progress.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Task status:.
* N: create.
* Y: scheduling in progress.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSubmit() Obtain Latest submission status of the task, whether it has been submitted: true/false.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubmit(boolean $Submit) Set Latest submission status of the task, whether it has been submitted: true/false.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Task creation time, for example: 2022-02-12 11:13:41.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Task creation time, for example: 2022-02-12 11:13:41.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastUpdateTime() Obtain Last update time, for example: 2025-08-13 16:34:06.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastUpdateTime(string $LastUpdateTime) Set Last update time, for example: 2025-08-13 16:34:06.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastUpdateUserName() Obtain Last updated by name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastUpdateUserName(string $LastUpdateUserName) Set Last updated by name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastOpsTime() Obtain Last maintenance time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastOpsTime(string $LastOpsTime) Set Last maintenance time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastOpsUserName() Obtain Last operator name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastOpsUserName(string $LastOpsUserName) Set Last operator name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOwnerUin() Obtain Task owner ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerUin(string $OwnerUin) Set Task owner ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskDescription() Obtain Task description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskDescription(string $TaskDescription) Set Task description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateUserUin() Obtain Latest update uid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateUserUin(string $UpdateUserUin) Set Latest update uid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUserUin() Obtain Create a user ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUserUin(string $CreateUserUin) Set Create a user ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskFolderPath() Obtain Task folder path.

Note:.

Do not fill in the task node type in the path. for example, in a workflow named wf01, under the "common" category, if you want to create a new shell task under the tf_01 folder in this classification, just fill in /tf_01.
If the tf_01 folder does not exist, first create this folder (use the CreateTaskFolder api) for a successful operation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskFolderPath(string $TaskFolderPath) Set Task folder path.

Note:.

Do not fill in the task node type in the path. for example, in a workflow named wf01, under the "common" category, if you want to create a new shell task under the tf_01 folder in this classification, just fill in /tf_01.
If the tf_01 folder does not exist, first create this folder (use the CreateTaskFolder api) for a successful operation.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TriggerTaskBaseAttribute extends AbstractModel
{
    /**
     * @var string Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var integer Task type ID.

- 26:OfflineSynchronization
- 30:Python
- 32:DLC SQL
- 35:Shell
- 38:Shell Form Mode
- 46:DLC Spark
- 50:DLC PySpark
- 130:Branch Node
- 131:Merged Node
- 132:Notebook
- 133:SSH
- 137:For-each
- 139:DLC Spark Streaming
- 140:Run Workflow
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskTypeId;

    /**
     * @var string Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Task name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskName;

    /**
     * @var string Last saved version no.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskLatestVersionNo;

    /**
     * @var string Version no. of last submission.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskLatestSubmitVersionNo;

    /**
     * @var string Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowName;

    /**
     * @var string Task status:.
* N: create.
* Y: scheduling in progress.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var boolean Latest submission status of the task, whether it has been submitted: true/false.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Submit;

    /**
     * @var string Task creation time, for example: 2022-02-12 11:13:41.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Last update time, for example: 2025-08-13 16:34:06.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastUpdateTime;

    /**
     * @var string Last updated by name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastUpdateUserName;

    /**
     * @var string Last maintenance time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastOpsTime;

    /**
     * @var string Last operator name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastOpsUserName;

    /**
     * @var string Task owner ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerUin;

    /**
     * @var string Task description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskDescription;

    /**
     * @var string Latest update uid.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateUserUin;

    /**
     * @var string Create a user ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUserUin;

    /**
     * @var string Task folder path.

Note:.

Do not fill in the task node type in the path. for example, in a workflow named wf01, under the "common" category, if you want to create a new shell task under the tf_01 folder in this classification, just fill in /tf_01.
If the tf_01 folder does not exist, first create this folder (use the CreateTaskFolder api) for a successful operation.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskFolderPath;

    /**
     * @param string $TaskId Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskTypeId Task type ID.

- 26:OfflineSynchronization
- 30:Python
- 32:DLC SQL
- 35:Shell
- 38:Shell Form Mode
- 46:DLC Spark
- 50:DLC PySpark
- 130:Branch Node
- 131:Merged Node
- 132:Notebook
- 133:SSH
- 137:For-each
- 139:DLC Spark Streaming
- 140:Run Workflow
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowId Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskName Task name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskLatestVersionNo Last saved version no.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskLatestSubmitVersionNo Version no. of last submission.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowName Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Task status:.
* N: create.
* Y: scheduling in progress.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Submit Latest submission status of the task, whether it has been submitted: true/false.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Task creation time, for example: 2022-02-12 11:13:41.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastUpdateTime Last update time, for example: 2025-08-13 16:34:06.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastUpdateUserName Last updated by name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastOpsTime Last maintenance time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastOpsUserName Last operator name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OwnerUin Task owner ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskDescription Task description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateUserUin Latest update uid.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUserUin Create a user ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskFolderPath Task folder path.

Note:.

Do not fill in the task node type in the path. for example, in a workflow named wf01, under the "common" category, if you want to create a new shell task under the tf_01 folder in this classification, just fill in /tf_01.
If the tf_01 folder does not exist, first create this folder (use the CreateTaskFolder api) for a successful operation.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskLatestVersionNo",$param) and $param["TaskLatestVersionNo"] !== null) {
            $this->TaskLatestVersionNo = $param["TaskLatestVersionNo"];
        }

        if (array_key_exists("TaskLatestSubmitVersionNo",$param) and $param["TaskLatestSubmitVersionNo"] !== null) {
            $this->TaskLatestSubmitVersionNo = $param["TaskLatestSubmitVersionNo"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Submit",$param) and $param["Submit"] !== null) {
            $this->Submit = $param["Submit"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("LastUpdateUserName",$param) and $param["LastUpdateUserName"] !== null) {
            $this->LastUpdateUserName = $param["LastUpdateUserName"];
        }

        if (array_key_exists("LastOpsTime",$param) and $param["LastOpsTime"] !== null) {
            $this->LastOpsTime = $param["LastOpsTime"];
        }

        if (array_key_exists("LastOpsUserName",$param) and $param["LastOpsUserName"] !== null) {
            $this->LastOpsUserName = $param["LastOpsUserName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }

        if (array_key_exists("UpdateUserUin",$param) and $param["UpdateUserUin"] !== null) {
            $this->UpdateUserUin = $param["UpdateUserUin"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("TaskFolderPath",$param) and $param["TaskFolderPath"] !== null) {
            $this->TaskFolderPath = $param["TaskFolderPath"];
        }
    }
}
