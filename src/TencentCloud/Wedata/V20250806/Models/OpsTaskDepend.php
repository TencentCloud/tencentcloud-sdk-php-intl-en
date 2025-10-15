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
 * Dependent task information.
 *
 * @method string getTaskId() Obtain Task ID


 * @method void setTaskId(string $TaskId) Set Task ID


 * @method string getTaskName() Obtain Task name.


 * @method void setTaskName(string $TaskName) Set Task name.


 * @method string getWorkflowId() Obtain Workflow id.

 * @method void setWorkflowId(string $WorkflowId) Set Workflow id.

 * @method string getWorkflowName() Obtain Workflow name.


 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.


 * @method string getProjectId() Obtain Project ID.


 * @method void setProjectId(string $ProjectId) Set Project ID.


 * @method string getProjectName() Obtain Project name.


 * @method void setProjectName(string $ProjectName) Set Project name.


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
Note: This field may return null, indicating that no valid values can be obtained.
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
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskTypeDesc() Obtain Task type description.
-20 : universal data synchronization.
 - 25 :  ETLTaskType
 - 26 :  ETLTaskType
 - 30 :  python
 - 31 :  pyspark
 - 34 :  hivesql
 - 35 :  shell
 - 36 :  sparksql
 - 21 :  jdbcsql
 - 32 :  dlc
 - 33 :  ImpalaTaskType
 - 40 :  CDWTaskType
 - 41 :  kettle
 - 42 :  TCHouse-X
 - 43 :  TCHouse-X SQL
 - 46 :  dlcsparkTaskType
 - 47 :  TiOneMachineLearningTaskType
 - 48 :  Trino
 - 50 :  DLCPyspark
 - 23 :  TencentDistributedSQL
 - 39 :  spark
 - 92 :  MRTaskType
 - 38 :  ShellScript
 - 70 :  HiveSQLScrip
-130: specifies the branch.
-131: specifies the merge.
-132: specifies the Notebook explore.
-133: specifies the SSH node.
 - 134 :  StarRocks
 - 137 :  For-each
-10000: common custom business.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskTypeDesc(string $TaskTypeDesc) Set Task type description.
-20 : universal data synchronization.
 - 25 :  ETLTaskType
 - 26 :  ETLTaskType
 - 30 :  python
 - 31 :  pyspark
 - 34 :  hivesql
 - 35 :  shell
 - 36 :  sparksql
 - 21 :  jdbcsql
 - 32 :  dlc
 - 33 :  ImpalaTaskType
 - 40 :  CDWTaskType
 - 41 :  kettle
 - 42 :  TCHouse-X
 - 43 :  TCHouse-X SQL
 - 46 :  dlcsparkTaskType
 - 47 :  TiOneMachineLearningTaskType
 - 48 :  Trino
 - 50 :  DLCPyspark
 - 23 :  TencentDistributedSQL
 - 39 :  spark
 - 92 :  MRTaskType
 - 38 :  ShellScript
 - 70 :  HiveSQLScrip
-130: specifies the branch.
-131: specifies the merge.
-132: specifies the Notebook explore.
-133: specifies the SSH node.
 - 134 :  StarRocks
 - 137 :  For-each
-10000: common custom business.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFolderName() Obtain Folder name.

 * @method void setFolderName(string $FolderName) Set Folder name.

 * @method string getFolderId() Obtain Folder ID

 * @method void setFolderId(string $FolderId) Set Folder ID

 * @method string getFirstSubmitTime() Obtain Latest submission time.

 * @method void setFirstSubmitTime(string $FirstSubmitTime) Set Latest submission time.

 * @method string getFirstRunTime() Obtain First running time


 * @method void setFirstRunTime(string $FirstRunTime) Set First running time


 * @method string getScheduleDesc() Obtain Describes the scheduling plan display description information.

 * @method void setScheduleDesc(string $ScheduleDesc) Set Describes the scheduling plan display description information.

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
 * @method string getOwnerUin() Obtain Specifies the person in charge.
 * @method void setOwnerUin(string $OwnerUin) Set Specifies the person in charge.
 * @method string getExecutionStartTime() Obtain Execution start time. format: HH:mm, for example 00:00.

 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Execution start time. format: HH:mm, for example 00:00.

 * @method string getExecutionEndTime() Obtain Execution end time. format: HH:mm, for example 23:59.

 * @method void setExecutionEndTime(string $ExecutionEndTime) Set Execution end time. format: HH:mm, for example 23:59.
 */
class OpsTaskDepend extends AbstractModel
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
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskTypeId;

    /**
     * @var string Task type description.
-20 : universal data synchronization.
 - 25 :  ETLTaskType
 - 26 :  ETLTaskType
 - 30 :  python
 - 31 :  pyspark
 - 34 :  hivesql
 - 35 :  shell
 - 36 :  sparksql
 - 21 :  jdbcsql
 - 32 :  dlc
 - 33 :  ImpalaTaskType
 - 40 :  CDWTaskType
 - 41 :  kettle
 - 42 :  TCHouse-X
 - 43 :  TCHouse-X SQL
 - 46 :  dlcsparkTaskType
 - 47 :  TiOneMachineLearningTaskType
 - 48 :  Trino
 - 50 :  DLCPyspark
 - 23 :  TencentDistributedSQL
 - 39 :  spark
 - 92 :  MRTaskType
 - 38 :  ShellScript
 - 70 :  HiveSQLScrip
-130: specifies the branch.
-131: specifies the merge.
-132: specifies the Notebook explore.
-133: specifies the SSH node.
 - 134 :  StarRocks
 - 137 :  For-each
-10000: common custom business.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskTypeDesc;

    /**
     * @var string Folder name.

     */
    public $FolderName;

    /**
     * @var string Folder ID

     */
    public $FolderId;

    /**
     * @var string Latest submission time.

     */
    public $FirstSubmitTime;

    /**
     * @var string First running time


     */
    public $FirstRunTime;

    /**
     * @var string Describes the scheduling plan display description information.

     */
    public $ScheduleDesc;

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
     * @var string Specifies the person in charge.
     */
    public $OwnerUin;

    /**
     * @var string Execution start time. format: HH:mm, for example 00:00.

     */
    public $ExecutionStartTime;

    /**
     * @var string Execution end time. format: HH:mm, for example 23:59.

     */
    public $ExecutionEndTime;

    /**
     * @param string $TaskId Task ID


     * @param string $TaskName Task name.


     * @param string $WorkflowId Workflow id.

     * @param string $WorkflowName Workflow name.


     * @param string $ProjectId Project ID.


     * @param string $ProjectName Project name.


     * @param string $Status Task Status

-N: New

-Y: Scheduling

-F: Offline

-O: Paused

-T: Offlining

-INVALID: Invalid
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
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskTypeDesc Task type description.
-20 : universal data synchronization.
 - 25 :  ETLTaskType
 - 26 :  ETLTaskType
 - 30 :  python
 - 31 :  pyspark
 - 34 :  hivesql
 - 35 :  shell
 - 36 :  sparksql
 - 21 :  jdbcsql
 - 32 :  dlc
 - 33 :  ImpalaTaskType
 - 40 :  CDWTaskType
 - 41 :  kettle
 - 42 :  TCHouse-X
 - 43 :  TCHouse-X SQL
 - 46 :  dlcsparkTaskType
 - 47 :  TiOneMachineLearningTaskType
 - 48 :  Trino
 - 50 :  DLCPyspark
 - 23 :  TencentDistributedSQL
 - 39 :  spark
 - 92 :  MRTaskType
 - 38 :  ShellScript
 - 70 :  HiveSQLScrip
-130: specifies the branch.
-131: specifies the merge.
-132: specifies the Notebook explore.
-133: specifies the SSH node.
 - 134 :  StarRocks
 - 137 :  For-each
-10000: common custom business.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FolderName Folder name.

     * @param string $FolderId Folder ID

     * @param string $FirstSubmitTime Latest submission time.

     * @param string $FirstRunTime First running time


     * @param string $ScheduleDesc Describes the scheduling plan display description information.

     * @param string $CycleType Task Cycle Type

* ONEOFF_CYCLE: One-time

* YEAR_CYCLE: Yearly

* MONTH_CYCLE: Monthly

* WEEK_CYCLE: Weekly

* DAY_CYCLE: Daily

* HOUR_CYCLE: Hourly

* MINUTE_CYCLE: Minute-level

* CRONTAB_CYCLE: Crontab expression-based
     * @param string $OwnerUin Specifies the person in charge.
     * @param string $ExecutionStartTime Execution start time. format: HH:mm, for example 00:00.

     * @param string $ExecutionEndTime Execution end time. format: HH:mm, for example 23:59.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TaskTypeDesc",$param) and $param["TaskTypeDesc"] !== null) {
            $this->TaskTypeDesc = $param["TaskTypeDesc"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FirstSubmitTime",$param) and $param["FirstSubmitTime"] !== null) {
            $this->FirstSubmitTime = $param["FirstSubmitTime"];
        }

        if (array_key_exists("FirstRunTime",$param) and $param["FirstRunTime"] !== null) {
            $this->FirstRunTime = $param["FirstRunTime"];
        }

        if (array_key_exists("ScheduleDesc",$param) and $param["ScheduleDesc"] !== null) {
            $this->ScheduleDesc = $param["ScheduleDesc"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }
    }
}
