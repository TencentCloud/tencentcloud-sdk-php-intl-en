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
 * Create task basic attribute information.
 *
 * @method string getTaskName() Obtain Task name.
 * @method void setTaskName(string $TaskName) Set Task name.
 * @method string getTaskTypeId() Obtain Task type ID:.
* 26:OfflineSynchronization
* 30:Python
* 32:DLC SQL
* 35:Shell
* 38:Shell Form Mode
* 46:DLC Spark
* 50:DLC PySpark
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 137:For-each
* 139:DLC Spark Streaming
* 140:Run Workflow
 * @method void setTaskTypeId(string $TaskTypeId) Set Task type ID:.
* 26:OfflineSynchronization
* 30:Python
* 32:DLC SQL
* 35:Shell
* 38:Shell Form Mode
* 46:DLC Spark
* 50:DLC PySpark
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 137:For-each
* 139:DLC Spark Streaming
* 140:Run Workflow
 * @method string getWorkflowId() Obtain Workflow ID.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
 * @method string getOwnerUin() Obtain Task owner ID, defaults to the current user.
 * @method void setOwnerUin(string $OwnerUin) Set Task owner ID, defaults to the current user.
 * @method string getTaskDescription() Obtain Task description
 * @method void setTaskDescription(string $TaskDescription) Set Task description
 * @method string getTaskFolderPath() Obtain Task folder path.

Note:.
-Do not fill in the task node type in the path. for example, in a workflow named wf01, under the "common" category, if you want to create a new shell task under the tf_01 folder in this classification, just fill in /tf_01.
-If the tf_01 folder does not exist, first create this folder (use the CreateTaskFolder api) for the operation to succeed.
 * @method void setTaskFolderPath(string $TaskFolderPath) Set Task folder path.

Note:.
-Do not fill in the task node type in the path. for example, in a workflow named wf01, under the "common" category, if you want to create a new shell task under the tf_01 folder in this classification, just fill in /tf_01.
-If the tf_01 folder does not exist, first create this folder (use the CreateTaskFolder api) for the operation to succeed.
 */
class CreateTriggerTaskBaseAttribute extends AbstractModel
{
    /**
     * @var string Task name.
     */
    public $TaskName;

    /**
     * @var string Task type ID:.
* 26:OfflineSynchronization
* 30:Python
* 32:DLC SQL
* 35:Shell
* 38:Shell Form Mode
* 46:DLC Spark
* 50:DLC PySpark
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 137:For-each
* 139:DLC Spark Streaming
* 140:Run Workflow
     */
    public $TaskTypeId;

    /**
     * @var string Workflow ID.
     */
    public $WorkflowId;

    /**
     * @var string Task owner ID, defaults to the current user.
     */
    public $OwnerUin;

    /**
     * @var string Task description
     */
    public $TaskDescription;

    /**
     * @var string Task folder path.

Note:.
-Do not fill in the task node type in the path. for example, in a workflow named wf01, under the "common" category, if you want to create a new shell task under the tf_01 folder in this classification, just fill in /tf_01.
-If the tf_01 folder does not exist, first create this folder (use the CreateTaskFolder api) for the operation to succeed.
     */
    public $TaskFolderPath;

    /**
     * @param string $TaskName Task name.
     * @param string $TaskTypeId Task type ID:.
* 26:OfflineSynchronization
* 30:Python
* 32:DLC SQL
* 35:Shell
* 38:Shell Form Mode
* 46:DLC Spark
* 50:DLC PySpark
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 137:For-each
* 139:DLC Spark Streaming
* 140:Run Workflow
     * @param string $WorkflowId Workflow ID.
     * @param string $OwnerUin Task owner ID, defaults to the current user.
     * @param string $TaskDescription Task description
     * @param string $TaskFolderPath Task folder path.

Note:.
-Do not fill in the task node type in the path. for example, in a workflow named wf01, under the "common" category, if you want to create a new shell task under the tf_01 folder in this classification, just fill in /tf_01.
-If the tf_01 folder does not exist, first create this folder (use the CreateTaskFolder api) for the operation to succeed.
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }

        if (array_key_exists("TaskFolderPath",$param) and $param["TaskFolderPath"] !== null) {
            $this->TaskFolderPath = $param["TaskFolderPath"];
        }
    }
}
