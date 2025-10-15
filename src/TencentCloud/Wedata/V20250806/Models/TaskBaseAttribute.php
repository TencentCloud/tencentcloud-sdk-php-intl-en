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
 * Describes the basic attribute information of the task.
 *
 * @method string getTaskId() Obtain Task ID

 * @method void setTaskId(string $TaskId) Set Task ID

 * @method integer getTaskTypeId() Obtain Specifies the task type ID.

* 21:JDBC SQL
* 23:TDSQL-PostgreSQL
* 26:OfflineSynchronization
* 30:Python
* 31:PySpark
* 33:Impala
* 34:Hive SQL
* 35:Shell
* 36:Spark SQL
* 38:Shell Form Mode
* 39:Spark
* 40:TCHouse-P
* 41:Kettle
* 42:Tchouse-X
* 43:TCHouse-X SQL
* 46:DLC Spark
* 47:TiOne
* 48:Trino
* 50:DLC PySpark
* 92:MapReduce
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 134:StarRocks
* 137:For-each
* 138:Setats SQL
 * @method void setTaskTypeId(integer $TaskTypeId) Set Specifies the task type ID.

* 21:JDBC SQL
* 23:TDSQL-PostgreSQL
* 26:OfflineSynchronization
* 30:Python
* 31:PySpark
* 33:Impala
* 34:Hive SQL
* 35:Shell
* 36:Spark SQL
* 38:Shell Form Mode
* 39:Spark
* 40:TCHouse-P
* 41:Kettle
* 42:Tchouse-X
* 43:TCHouse-X SQL
* 46:DLC Spark
* 47:TiOne
* 48:Trino
* 50:DLC PySpark
* 92:MapReduce
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 134:StarRocks
* 137:For-each
* 138:Setats SQL
 * @method string getWorkflowId() Obtain Workflow ID.

 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.

 * @method string getTaskName() Obtain Task name.

 * @method void setTaskName(string $TaskName) Set Task name.

 * @method string getTaskLatestVersionNo() Obtain Last save version number.

 * @method void setTaskLatestVersionNo(string $TaskLatestVersionNo) Set Last save version number.

 * @method string getTaskLatestSubmitVersionNo() Obtain Last submit version number.

 * @method void setTaskLatestSubmitVersionNo(string $TaskLatestSubmitVersionNo) Set Last submit version number.

 * @method string getWorkflowName() Obtain Workflow name.


 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.


 * @method string getStatus() Obtain Task Status:

* N: New
* Y: Scheduling
* F: Offline
* O: Paused
* T: Offlining (in the process of being taken offline)
* INVALID: Invalid

 * @method void setStatus(string $Status) Set Task Status:

* N: New
* Y: Scheduling
* F: Offline
* O: Paused
* T: Offlining (in the process of being taken offline)
* INVALID: Invalid

 * @method boolean getSubmit() Obtain Latest submission status of the task. Specifies whether it has been submitted: true/false.
 * @method void setSubmit(boolean $Submit) Set Latest submission status of the task. Specifies whether it has been submitted: true/false.
 * @method string getCreateTime() Obtain Task creation time. example: 2022-02-12 11:13:41.

 * @method void setCreateTime(string $CreateTime) Set Task creation time. example: 2022-02-12 11:13:41.

 * @method string getLastUpdateTime() Obtain Last update time. example: 2025-08-13 16:34:06.
 * @method void setLastUpdateTime(string $LastUpdateTime) Set Last update time. example: 2025-08-13 16:34:06.
 * @method string getLastUpdateUserName() Obtain Last Updated By (Name).
 * @method void setLastUpdateUserName(string $LastUpdateUserName) Set Last Updated By (Name).
 * @method string getLastOpsTime() Obtain Last operation time.

 * @method void setLastOpsTime(string $LastOpsTime) Set Last operation time.

 * @method string getLastOpsUserName() Obtain Last operator name.
 * @method void setLastOpsUserName(string $LastOpsUserName) Set Last operator name.
 * @method string getOwnerUin() Obtain Task owner ID.
 * @method void setOwnerUin(string $OwnerUin) Set Task owner ID.
 * @method string getTaskDescription() Obtain Task description

 * @method void setTaskDescription(string $TaskDescription) Set Task description

 * @method string getUpdateUserUin() Obtain Last Updated User ID

 * @method void setUpdateUserUin(string $UpdateUserUin) Set Last Updated User ID

 * @method string getCreateUserUin() Obtain Created By User ID

 * @method void setCreateUserUin(string $CreateUserUin) Set Created By User ID
 */
class TaskBaseAttribute extends AbstractModel
{
    /**
     * @var string Task ID

     */
    public $TaskId;

    /**
     * @var integer Specifies the task type ID.

* 21:JDBC SQL
* 23:TDSQL-PostgreSQL
* 26:OfflineSynchronization
* 30:Python
* 31:PySpark
* 33:Impala
* 34:Hive SQL
* 35:Shell
* 36:Spark SQL
* 38:Shell Form Mode
* 39:Spark
* 40:TCHouse-P
* 41:Kettle
* 42:Tchouse-X
* 43:TCHouse-X SQL
* 46:DLC Spark
* 47:TiOne
* 48:Trino
* 50:DLC PySpark
* 92:MapReduce
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 134:StarRocks
* 137:For-each
* 138:Setats SQL
     */
    public $TaskTypeId;

    /**
     * @var string Workflow ID.

     */
    public $WorkflowId;

    /**
     * @var string Task name.

     */
    public $TaskName;

    /**
     * @var string Last save version number.

     */
    public $TaskLatestVersionNo;

    /**
     * @var string Last submit version number.

     */
    public $TaskLatestSubmitVersionNo;

    /**
     * @var string Workflow name.


     */
    public $WorkflowName;

    /**
     * @var string Task Status:

* N: New
* Y: Scheduling
* F: Offline
* O: Paused
* T: Offlining (in the process of being taken offline)
* INVALID: Invalid

     */
    public $Status;

    /**
     * @var boolean Latest submission status of the task. Specifies whether it has been submitted: true/false.
     */
    public $Submit;

    /**
     * @var string Task creation time. example: 2022-02-12 11:13:41.

     */
    public $CreateTime;

    /**
     * @var string Last update time. example: 2025-08-13 16:34:06.
     */
    public $LastUpdateTime;

    /**
     * @var string Last Updated By (Name).
     */
    public $LastUpdateUserName;

    /**
     * @var string Last operation time.

     */
    public $LastOpsTime;

    /**
     * @var string Last operator name.
     */
    public $LastOpsUserName;

    /**
     * @var string Task owner ID.
     */
    public $OwnerUin;

    /**
     * @var string Task description

     */
    public $TaskDescription;

    /**
     * @var string Last Updated User ID

     */
    public $UpdateUserUin;

    /**
     * @var string Created By User ID

     */
    public $CreateUserUin;

    /**
     * @param string $TaskId Task ID

     * @param integer $TaskTypeId Specifies the task type ID.

* 21:JDBC SQL
* 23:TDSQL-PostgreSQL
* 26:OfflineSynchronization
* 30:Python
* 31:PySpark
* 33:Impala
* 34:Hive SQL
* 35:Shell
* 36:Spark SQL
* 38:Shell Form Mode
* 39:Spark
* 40:TCHouse-P
* 41:Kettle
* 42:Tchouse-X
* 43:TCHouse-X SQL
* 46:DLC Spark
* 47:TiOne
* 48:Trino
* 50:DLC PySpark
* 92:MapReduce
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 134:StarRocks
* 137:For-each
* 138:Setats SQL
     * @param string $WorkflowId Workflow ID.

     * @param string $TaskName Task name.

     * @param string $TaskLatestVersionNo Last save version number.

     * @param string $TaskLatestSubmitVersionNo Last submit version number.

     * @param string $WorkflowName Workflow name.


     * @param string $Status Task Status:

* N: New
* Y: Scheduling
* F: Offline
* O: Paused
* T: Offlining (in the process of being taken offline)
* INVALID: Invalid

     * @param boolean $Submit Latest submission status of the task. Specifies whether it has been submitted: true/false.
     * @param string $CreateTime Task creation time. example: 2022-02-12 11:13:41.

     * @param string $LastUpdateTime Last update time. example: 2025-08-13 16:34:06.
     * @param string $LastUpdateUserName Last Updated By (Name).
     * @param string $LastOpsTime Last operation time.

     * @param string $LastOpsUserName Last operator name.
     * @param string $OwnerUin Task owner ID.
     * @param string $TaskDescription Task description

     * @param string $UpdateUserUin Last Updated User ID

     * @param string $CreateUserUin Created By User ID
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
    }
}
