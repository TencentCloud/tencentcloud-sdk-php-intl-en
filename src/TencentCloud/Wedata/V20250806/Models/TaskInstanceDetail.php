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
 * Scheduling task instance details.
 *
 * @method string getProjectId() Obtain Specifies the project id.

 * @method void setProjectId(string $ProjectId) Set Specifies the project id.

 * @method string getInstanceKey() Obtain **Instance unique id**.

 * @method void setInstanceKey(string $InstanceKey) Set **Instance unique id**.

 * @method string getFolderId() Obtain Folder ID.


 * @method void setFolderId(string $FolderId) Set Folder ID.


 * @method string getFolderName() Obtain Specifies the folder name.

 * @method void setFolderName(string $FolderName) Set Specifies the folder name.

 * @method string getWorkflowId() Obtain Workflow ID.

 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.

 * @method string getWorkflowName() Obtain Workflow name.


 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.


 * @method string getTaskId() Obtain Task ID


 * @method void setTaskId(string $TaskId) Set Task ID


 * @method string getTaskName() Obtain Task name.


 * @method void setTaskName(string $TaskName) Set Task name.


 * @method integer getTaskTypeId() Obtain Specifies the id corresponding to taskType.
 * @method void setTaskTypeId(integer $TaskTypeId) Set Specifies the id corresponding to taskType.
 * @method string getTaskType() Obtain Task type


 * @method void setTaskType(string $TaskType) Set Task type


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
 * @method string getCurRunDate() Obtain Specifies the instance data time.

 * @method void setCurRunDate(string $CurRunDate) Set Specifies the instance data time.

 * @method string getInstanceState() Obtain Instance status.
-WAIT_EVENT: wait for event.
-WAIT_UPSTREAM: waiting for upstream.
- WAIT_RUN: awaiting execution.
-RUNNING. specifies the running status.
- SKIP_RUNNING: specifies whether to SKIP RUNNING.
- FAILED_RETRY: RETRY on failure.
-EXPIRED: indicates a failure.
-COMPLETED: success.

 * @method void setInstanceState(string $InstanceState) Set Instance status.
-WAIT_EVENT: wait for event.
-WAIT_UPSTREAM: waiting for upstream.
- WAIT_RUN: awaiting execution.
-RUNNING. specifies the running status.
- SKIP_RUNNING: specifies whether to SKIP RUNNING.
- FAILED_RETRY: RETRY on failure.
-EXPIRED: indicates a failure.
-COMPLETED: success.

 * @method integer getInstanceType() Obtain Specifies the instance type.

-0 indicates the replenishment type.
-Indicates a periodic instance.
-2 indicates a non-periodic instance.

 * @method void setInstanceType(integer $InstanceType) Set Specifies the instance type.

-0 indicates the replenishment type.
-Indicates a periodic instance.
-2 indicates a non-periodic instance.

 * @method array getOwnerUinList() Obtain owner uin list.


 * @method void setOwnerUinList(array $OwnerUinList) Set owner uin list.


 * @method integer getTotalRunNum() Obtain Cumulative running times.

 * @method void setTotalRunNum(integer $TotalRunNum) Set Cumulative running times.

 * @method integer getTryLimit() Obtain Retry count limit when execution fails each time.

 * @method void setTryLimit(integer $TryLimit) Set Retry count limit when execution fails each time.

 * @method integer getTries() Obtain **Failure Retry Count** - The number of retry attempts after a failure. When the instance is triggered again through methods such as manual rerun or backfill, this counter is reset to 0 and starts counting again.
 * @method void setTries(integer $Tries) Set **Failure Retry Count** - The number of retry attempts after a failure. When the instance is triggered again through methods such as manual rerun or backfill, this counter is reset to 0 and starts counting again.
 * @method integer getCostTime() Obtain Time spent, in milliseconds.

 * @method void setCostTime(integer $CostTime) Set Time spent, in milliseconds.

 * @method string getStartTime() Obtain Start time.

 * @method void setStartTime(string $StartTime) Set Start time.

 * @method string getEndTime() Obtain Operation completion time.

 * @method void setEndTime(string $EndTime) Set Operation completion time.

 * @method string getSchedulerTime() Obtain Scheduled dispatch time.

 * @method void setSchedulerTime(string $SchedulerTime) Set Scheduled dispatch time.

 * @method string getLastUpdateTime() Obtain Latest update time of the instance. format: yyyy-MM-dd HH:MM:ss.

 * @method void setLastUpdateTime(string $LastUpdateTime) Set Latest update time of the instance. format: yyyy-MM-dd HH:MM:ss.

 * @method string getExecutorGroupId() Obtain Execution resource group ID.

 * @method void setExecutorGroupId(string $ExecutorGroupId) Set Execution resource group ID.

 * @method string getExecutorGroupName() Obtain Resource group name.

 * @method void setExecutorGroupName(string $ExecutorGroupName) Set Resource group name.

 * @method string getJobErrorMsg() Obtain Brief task failure information.

 * @method void setJobErrorMsg(string $JobErrorMsg) Set Brief task failure information.
 */
class TaskInstanceDetail extends AbstractModel
{
    /**
     * @var string Specifies the project id.

     */
    public $ProjectId;

    /**
     * @var string **Instance unique id**.

     */
    public $InstanceKey;

    /**
     * @var string Folder ID.


     */
    public $FolderId;

    /**
     * @var string Specifies the folder name.

     */
    public $FolderName;

    /**
     * @var string Workflow ID.

     */
    public $WorkflowId;

    /**
     * @var string Workflow name.


     */
    public $WorkflowName;

    /**
     * @var string Task ID


     */
    public $TaskId;

    /**
     * @var string Task name.


     */
    public $TaskName;

    /**
     * @var integer Specifies the id corresponding to taskType.
     */
    public $TaskTypeId;

    /**
     * @var string Task type


     */
    public $TaskType;

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
     * @var string Specifies the instance data time.

     */
    public $CurRunDate;

    /**
     * @var string Instance status.
-WAIT_EVENT: wait for event.
-WAIT_UPSTREAM: waiting for upstream.
- WAIT_RUN: awaiting execution.
-RUNNING. specifies the running status.
- SKIP_RUNNING: specifies whether to SKIP RUNNING.
- FAILED_RETRY: RETRY on failure.
-EXPIRED: indicates a failure.
-COMPLETED: success.

     */
    public $InstanceState;

    /**
     * @var integer Specifies the instance type.

-0 indicates the replenishment type.
-Indicates a periodic instance.
-2 indicates a non-periodic instance.

     */
    public $InstanceType;

    /**
     * @var array owner uin list.


     */
    public $OwnerUinList;

    /**
     * @var integer Cumulative running times.

     */
    public $TotalRunNum;

    /**
     * @var integer Retry count limit when execution fails each time.

     */
    public $TryLimit;

    /**
     * @var integer **Failure Retry Count** - The number of retry attempts after a failure. When the instance is triggered again through methods such as manual rerun or backfill, this counter is reset to 0 and starts counting again.
     */
    public $Tries;

    /**
     * @var integer Time spent, in milliseconds.

     */
    public $CostTime;

    /**
     * @var string Start time.

     */
    public $StartTime;

    /**
     * @var string Operation completion time.

     */
    public $EndTime;

    /**
     * @var string Scheduled dispatch time.

     */
    public $SchedulerTime;

    /**
     * @var string Latest update time of the instance. format: yyyy-MM-dd HH:MM:ss.

     */
    public $LastUpdateTime;

    /**
     * @var string Execution resource group ID.

     */
    public $ExecutorGroupId;

    /**
     * @var string Resource group name.

     */
    public $ExecutorGroupName;

    /**
     * @var string Brief task failure information.

     */
    public $JobErrorMsg;

    /**
     * @param string $ProjectId Specifies the project id.

     * @param string $InstanceKey **Instance unique id**.

     * @param string $FolderId Folder ID.


     * @param string $FolderName Specifies the folder name.

     * @param string $WorkflowId Workflow ID.

     * @param string $WorkflowName Workflow name.


     * @param string $TaskId Task ID


     * @param string $TaskName Task name.


     * @param integer $TaskTypeId Specifies the id corresponding to taskType.
     * @param string $TaskType Task type


     * @param string $CycleType Task Cycle Type

* ONEOFF_CYCLE: One-time

* YEAR_CYCLE: Yearly

* MONTH_CYCLE: Monthly

* WEEK_CYCLE: Weekly

* DAY_CYCLE: Daily

* HOUR_CYCLE: Hourly

* MINUTE_CYCLE: Minute-level

* CRONTAB_CYCLE: Crontab expression-based
     * @param string $CurRunDate Specifies the instance data time.

     * @param string $InstanceState Instance status.
-WAIT_EVENT: wait for event.
-WAIT_UPSTREAM: waiting for upstream.
- WAIT_RUN: awaiting execution.
-RUNNING. specifies the running status.
- SKIP_RUNNING: specifies whether to SKIP RUNNING.
- FAILED_RETRY: RETRY on failure.
-EXPIRED: indicates a failure.
-COMPLETED: success.

     * @param integer $InstanceType Specifies the instance type.

-0 indicates the replenishment type.
-Indicates a periodic instance.
-2 indicates a non-periodic instance.

     * @param array $OwnerUinList owner uin list.


     * @param integer $TotalRunNum Cumulative running times.

     * @param integer $TryLimit Retry count limit when execution fails each time.

     * @param integer $Tries **Failure Retry Count** - The number of retry attempts after a failure. When the instance is triggered again through methods such as manual rerun or backfill, this counter is reset to 0 and starts counting again.
     * @param integer $CostTime Time spent, in milliseconds.

     * @param string $StartTime Start time.

     * @param string $EndTime Operation completion time.

     * @param string $SchedulerTime Scheduled dispatch time.

     * @param string $LastUpdateTime Latest update time of the instance. format: yyyy-MM-dd HH:MM:ss.

     * @param string $ExecutorGroupId Execution resource group ID.

     * @param string $ExecutorGroupName Resource group name.

     * @param string $JobErrorMsg Brief task failure information.
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

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("OwnerUinList",$param) and $param["OwnerUinList"] !== null) {
            $this->OwnerUinList = $param["OwnerUinList"];
        }

        if (array_key_exists("TotalRunNum",$param) and $param["TotalRunNum"] !== null) {
            $this->TotalRunNum = $param["TotalRunNum"];
        }

        if (array_key_exists("TryLimit",$param) and $param["TryLimit"] !== null) {
            $this->TryLimit = $param["TryLimit"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SchedulerTime",$param) and $param["SchedulerTime"] !== null) {
            $this->SchedulerTime = $param["SchedulerTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("JobErrorMsg",$param) and $param["JobErrorMsg"] !== null) {
            $this->JobErrorMsg = $param["JobErrorMsg"];
        }
    }
}
