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
 * Describes the dependency task information.
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

 * @method string getStatus() Obtain Task Status:

* N: New

* Y: Scheduling

* F: Offline

* O: Paused

* T: Offlining (in the process of being taken offline)

I* NVALID: Invalid
 * @method void setStatus(string $Status) Set Task Status:

* N: New

* Y: Scheduling

* F: Offline

* O: Paused

* T: Offlining (in the process of being taken offline)

I* NVALID: Invalid
 * @method integer getTaskTypeId() Obtain Task type id.
 * @method void setTaskTypeId(integer $TaskTypeId) Set Task type id.
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
-130: branch.
-131: merge.
-132: Notebook 
-133: SSH node.
 - 134 :  StarRocks
 - 137 :  For-each
-10000 : custom business common.
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
-130: branch.
-131: merge.
-132: Notebook 
-133: SSH node.
 - 134 :  StarRocks
 - 137 :  For-each
-10000 : custom business common.
 * @method string getScheduleDesc() Obtain Specifies scheduling plan display description information.

 * @method void setScheduleDesc(string $ScheduleDesc) Set Specifies scheduling plan display description information.

 * @method string getStartTime() Obtain Task start time.
 * @method void setStartTime(string $StartTime) Set Task start time.
 * @method string getEndTime() Obtain Task end time.
 * @method void setEndTime(string $EndTime) Set Task end time.
 * @method integer getDelayTime() Obtain Delay time.
 * @method void setDelayTime(integer $DelayTime) Set Delay time.
 * @method string getCycleType() Obtain Cycle Type, Default: D
Supported types:
* O: One-time

* Y: Yearly

* M: Monthly

* W: Weekly

* D: Daily

* H: Hourly

* I: Minute

* C: Crontab expression type
 * @method void setCycleType(string $CycleType) Set Cycle Type, Default: D
Supported types:
* O: One-time

* Y: Yearly

* M: Monthly

* W: Weekly

* D: Daily

* H: Hourly

* I: Minute

* C: Crontab expression type
 * @method string getOwnerUin() Obtain Owner ID
 * @method void setOwnerUin(string $OwnerUin) Set Owner ID
 * @method string getTaskAction() Obtain Elastic cycle configuration.
 * @method void setTaskAction(string $TaskAction) Set Elastic cycle configuration.
 * @method string getInitStrategy() Obtain Initialization strategy for scheduling.
 * @method void setInitStrategy(string $InitStrategy) Set Initialization strategy for scheduling.
 * @method string getCrontabExpression() Obtain crontab expression.
 * @method void setCrontabExpression(string $CrontabExpression) Set crontab expression.
 */
class TaskDependDto extends AbstractModel
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
     * @var string Task Status:

* N: New

* Y: Scheduling

* F: Offline

* O: Paused

* T: Offlining (in the process of being taken offline)

I* NVALID: Invalid
     */
    public $Status;

    /**
     * @var integer Task type id.
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
-130: branch.
-131: merge.
-132: Notebook 
-133: SSH node.
 - 134 :  StarRocks
 - 137 :  For-each
-10000 : custom business common.
     */
    public $TaskTypeDesc;

    /**
     * @var string Specifies scheduling plan display description information.

     */
    public $ScheduleDesc;

    /**
     * @var string Task start time.
     */
    public $StartTime;

    /**
     * @var string Task end time.
     */
    public $EndTime;

    /**
     * @var integer Delay time.
     */
    public $DelayTime;

    /**
     * @var string Cycle Type, Default: D
Supported types:
* O: One-time

* Y: Yearly

* M: Monthly

* W: Weekly

* D: Daily

* H: Hourly

* I: Minute

* C: Crontab expression type
     */
    public $CycleType;

    /**
     * @var string Owner ID
     */
    public $OwnerUin;

    /**
     * @var string Elastic cycle configuration.
     */
    public $TaskAction;

    /**
     * @var string Initialization strategy for scheduling.
     */
    public $InitStrategy;

    /**
     * @var string crontab expression.
     */
    public $CrontabExpression;

    /**
     * @param string $TaskId Task ID

     * @param string $TaskName Task name.

     * @param string $WorkflowId Workflow id.
     * @param string $WorkflowName Workflow name.

     * @param string $ProjectId Project ID.

     * @param string $Status Task Status:

* N: New

* Y: Scheduling

* F: Offline

* O: Paused

* T: Offlining (in the process of being taken offline)

I* NVALID: Invalid
     * @param integer $TaskTypeId Task type id.
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
-130: branch.
-131: merge.
-132: Notebook 
-133: SSH node.
 - 134 :  StarRocks
 - 137 :  For-each
-10000 : custom business common.
     * @param string $ScheduleDesc Specifies scheduling plan display description information.

     * @param string $StartTime Task start time.
     * @param string $EndTime Task end time.
     * @param integer $DelayTime Delay time.
     * @param string $CycleType Cycle Type, Default: D
Supported types:
* O: One-time

* Y: Yearly

* M: Monthly

* W: Weekly

* D: Daily

* H: Hourly

* I: Minute

* C: Crontab expression type
     * @param string $OwnerUin Owner ID
     * @param string $TaskAction Elastic cycle configuration.
     * @param string $InitStrategy Initialization strategy for scheduling.
     * @param string $CrontabExpression crontab expression.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TaskTypeDesc",$param) and $param["TaskTypeDesc"] !== null) {
            $this->TaskTypeDesc = $param["TaskTypeDesc"];
        }

        if (array_key_exists("ScheduleDesc",$param) and $param["ScheduleDesc"] !== null) {
            $this->ScheduleDesc = $param["ScheduleDesc"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("InitStrategy",$param) and $param["InitStrategy"] !== null) {
            $this->InitStrategy = $param["InitStrategy"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }
    }
}
