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
 * Describes the list details of the task operation and maintenance workflow.
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getTaskName() Obtain Task name.
 * @method void setTaskName(string $TaskName) Set Task name.
 * @method string getOwnerUin() Obtain Owner id

 * @method void setOwnerUin(string $OwnerUin) Set Owner id

 * @method string getStatus() Obtain Task Status

-N: New

-Y: Scheduling

-F: Offline

-O: Paused

-T: Offlining

-INVALID: Invalid
 * @method void setStatus(string $Status) Set Task Status

-N: New

-Y: Scheduling

-F: Offline

-O: Paused

-T: Offlining

-INVALID: Invalid
 * @method string getFolderId() Obtain Folder ID
 * @method void setFolderId(string $FolderId) Set Folder ID
 * @method string getFolderName() Obtain Folder name.
 * @method void setFolderName(string $FolderName) Set Folder name.
 * @method string getWorkflowId() Obtain Workflow id.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow id.
 * @method string getWorkflowName() Obtain Workflow name.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getProjectName() Obtain Project name.
 * @method void setProjectName(string $ProjectName) Set Project name.
 * @method string getUpdateUserUin() Obtain Specifies the name of the updater.
 * @method void setUpdateUserUin(string $UpdateUserUin) Set Specifies the name of the updater.
 * @method integer getTaskTypeId() Obtain Task type Id.
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
 * @method void setTaskTypeId(integer $TaskTypeId) Set Task type Id.
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
 * @method string getTaskTypeDesc() Obtain Task type description.
-Universal data synchronization.
 - ETLTaskType
 - ETLTaskType
 - python
 - pyspark
 - HiveSQLTaskType
 - shell
 - SparkSQLTaskType
 - JDBCSQLTaskType
 - DLCTaskType
 - ImpalaTaskType
 - CDWTaskType
 - kettle
 - DLCSparkTaskType
-TiOne machine learning.
 - TrinoTaskType
 - DLCPyspark
 - spark
 - mr
-Specifies the shell script.
-hivesql script.
-Specifies common custom business.

 * @method void setTaskTypeDesc(string $TaskTypeDesc) Set Task type description.
-Universal data synchronization.
 - ETLTaskType
 - ETLTaskType
 - python
 - pyspark
 - HiveSQLTaskType
 - shell
 - SparkSQLTaskType
 - JDBCSQLTaskType
 - DLCTaskType
 - ImpalaTaskType
 - CDWTaskType
 - kettle
 - DLCSparkTaskType
-TiOne machine learning.
 - TrinoTaskType
 - DLCPyspark
 - spark
 - mr
-Specifies the shell script.
-hivesql script.
-Specifies common custom business.

 * @method string getCycleType() Obtain Task Cycle Type

* ONEOFF_CYCLE: One-time

* YEAR_CYCLE: Yearly

* MONTH_CYCLE: Monthly

* WEEK_CYCLE: Weekly

* DAY_CYCLE: Daily

* HOUR_CYCLE: Hourly

* MINUTE_CYCLE: Minute-level

* CRONTAB_CYCLE: Crontab expression-based
 * @method void setCycleType(string $CycleType) Set Task Cycle Type

* ONEOFF_CYCLE: One-time

* YEAR_CYCLE: Yearly

* MONTH_CYCLE: Monthly

* WEEK_CYCLE: Weekly

* DAY_CYCLE: Daily

* HOUR_CYCLE: Hourly

* MINUTE_CYCLE: Minute-level

* CRONTAB_CYCLE: Crontab expression-based
 * @method string getExecutorGroupId() Obtain Resource group ID

 * @method void setExecutorGroupId(string $ExecutorGroupId) Set Resource group ID

 * @method string getScheduleDesc() Obtain Scheduling description.

 * @method void setScheduleDesc(string $ScheduleDesc) Set Scheduling description.

 * @method string getExecutorGroupName() Obtain Resource group name.
 * @method void setExecutorGroupName(string $ExecutorGroupName) Set Resource group name.
 * @method string getLastSchedulerCommitTime() Obtain Latest scheduling submission time.

 * @method void setLastSchedulerCommitTime(string $LastSchedulerCommitTime) Set Latest scheduling submission time.

 * @method string getFirstRunTime() Obtain First execution time.

 * @method void setFirstRunTime(string $FirstRunTime) Set First execution time.

 * @method string getFirstSubmitTime() Obtain Most recent submission time.
 * @method void setFirstSubmitTime(string $FirstSubmitTime) Set Most recent submission time.
 * @method string getCreateTime() Obtain Creation time.


 * @method void setCreateTime(string $CreateTime) Set Creation time.


 * @method string getLastUpdateTime() Obtain Latest update time.

 * @method void setLastUpdateTime(string $LastUpdateTime) Set Latest update time.
 */
class TaskOpsInfo extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Task name.
     */
    public $TaskName;

    /**
     * @var string Owner id

     */
    public $OwnerUin;

    /**
     * @var string Task Status

-N: New

-Y: Scheduling

-F: Offline

-O: Paused

-T: Offlining

-INVALID: Invalid
     */
    public $Status;

    /**
     * @var string Folder ID
     */
    public $FolderId;

    /**
     * @var string Folder name.
     */
    public $FolderName;

    /**
     * @var string Workflow id.
     */
    public $WorkflowId;

    /**
     * @var string Workflow name.
     */
    public $WorkflowName;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Project name.
     */
    public $ProjectName;

    /**
     * @var string Specifies the name of the updater.
     */
    public $UpdateUserUin;

    /**
     * @var integer Task type Id.
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
     * @var string Task type description.
-Universal data synchronization.
 - ETLTaskType
 - ETLTaskType
 - python
 - pyspark
 - HiveSQLTaskType
 - shell
 - SparkSQLTaskType
 - JDBCSQLTaskType
 - DLCTaskType
 - ImpalaTaskType
 - CDWTaskType
 - kettle
 - DLCSparkTaskType
-TiOne machine learning.
 - TrinoTaskType
 - DLCPyspark
 - spark
 - mr
-Specifies the shell script.
-hivesql script.
-Specifies common custom business.

     */
    public $TaskTypeDesc;

    /**
     * @var string Task Cycle Type

* ONEOFF_CYCLE: One-time

* YEAR_CYCLE: Yearly

* MONTH_CYCLE: Monthly

* WEEK_CYCLE: Weekly

* DAY_CYCLE: Daily

* HOUR_CYCLE: Hourly

* MINUTE_CYCLE: Minute-level

* CRONTAB_CYCLE: Crontab expression-based
     */
    public $CycleType;

    /**
     * @var string Resource group ID

     */
    public $ExecutorGroupId;

    /**
     * @var string Scheduling description.

     */
    public $ScheduleDesc;

    /**
     * @var string Resource group name.
     */
    public $ExecutorGroupName;

    /**
     * @var string Latest scheduling submission time.

     */
    public $LastSchedulerCommitTime;

    /**
     * @var string First execution time.

     */
    public $FirstRunTime;

    /**
     * @var string Most recent submission time.
     */
    public $FirstSubmitTime;

    /**
     * @var string Creation time.


     */
    public $CreateTime;

    /**
     * @var string Latest update time.

     */
    public $LastUpdateTime;

    /**
     * @param string $TaskId Task ID
     * @param string $TaskName Task name.
     * @param string $OwnerUin Owner id

     * @param string $Status Task Status

-N: New

-Y: Scheduling

-F: Offline

-O: Paused

-T: Offlining

-INVALID: Invalid
     * @param string $FolderId Folder ID
     * @param string $FolderName Folder name.
     * @param string $WorkflowId Workflow id.
     * @param string $WorkflowName Workflow name.
     * @param string $ProjectId Project ID.
     * @param string $ProjectName Project name.
     * @param string $UpdateUserUin Specifies the name of the updater.
     * @param integer $TaskTypeId Task type Id.
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
     * @param string $TaskTypeDesc Task type description.
-Universal data synchronization.
 - ETLTaskType
 - ETLTaskType
 - python
 - pyspark
 - HiveSQLTaskType
 - shell
 - SparkSQLTaskType
 - JDBCSQLTaskType
 - DLCTaskType
 - ImpalaTaskType
 - CDWTaskType
 - kettle
 - DLCSparkTaskType
-TiOne machine learning.
 - TrinoTaskType
 - DLCPyspark
 - spark
 - mr
-Specifies the shell script.
-hivesql script.
-Specifies common custom business.

     * @param string $CycleType Task Cycle Type

* ONEOFF_CYCLE: One-time

* YEAR_CYCLE: Yearly

* MONTH_CYCLE: Monthly

* WEEK_CYCLE: Weekly

* DAY_CYCLE: Daily

* HOUR_CYCLE: Hourly

* MINUTE_CYCLE: Minute-level

* CRONTAB_CYCLE: Crontab expression-based
     * @param string $ExecutorGroupId Resource group ID

     * @param string $ScheduleDesc Scheduling description.

     * @param string $ExecutorGroupName Resource group name.
     * @param string $LastSchedulerCommitTime Latest scheduling submission time.

     * @param string $FirstRunTime First execution time.

     * @param string $FirstSubmitTime Most recent submission time.
     * @param string $CreateTime Creation time.


     * @param string $LastUpdateTime Latest update time.
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("UpdateUserUin",$param) and $param["UpdateUserUin"] !== null) {
            $this->UpdateUserUin = $param["UpdateUserUin"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TaskTypeDesc",$param) and $param["TaskTypeDesc"] !== null) {
            $this->TaskTypeDesc = $param["TaskTypeDesc"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ScheduleDesc",$param) and $param["ScheduleDesc"] !== null) {
            $this->ScheduleDesc = $param["ScheduleDesc"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("LastSchedulerCommitTime",$param) and $param["LastSchedulerCommitTime"] !== null) {
            $this->LastSchedulerCommitTime = $param["LastSchedulerCommitTime"];
        }

        if (array_key_exists("FirstRunTime",$param) and $param["FirstRunTime"] !== null) {
            $this->FirstRunTime = $param["FirstRunTime"];
        }

        if (array_key_exists("FirstSubmitTime",$param) and $param["FirstSubmitTime"] !== null) {
            $this->FirstSubmitTime = $param["FirstSubmitTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }
    }
}
