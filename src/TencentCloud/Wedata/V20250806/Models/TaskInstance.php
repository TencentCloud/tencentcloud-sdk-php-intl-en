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
 * Scheduling task instance entity.
 *
 * @method string getProjectId() Obtain Project id.
 * @method void setProjectId(string $ProjectId) Set Project id.
 * @method string getInstanceKey() Obtain **Instance unique id**.
 * @method void setInstanceKey(string $InstanceKey) Set **Instance unique id**.
 * @method string getFolderId() Obtain Folder ID.

 * @method void setFolderId(string $FolderId) Set Folder ID.

 * @method string getFolderName() Obtain Folder name.
 * @method void setFolderName(string $FolderName) Set Folder name.
 * @method string getWorkflowId() Obtain Workflow ID.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
 * @method string getWorkflowName() Obtain Workflow name.

 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.

 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getTaskName() Obtain Task name.

 * @method void setTaskName(string $TaskName) Set Task name.

 * @method string getCurRunDate() Obtain Instance data time.
 * @method void setCurRunDate(string $CurRunDate) Set Instance data time.
 * @method string getInstanceState() Obtain **Instance status**.
-WAIT_EVENT: specifies the wait for event.
-WAIT_UPSTREAM: waiting for upstream.
- WAIT_RUN: awaiting execution.
- RUNNING: indicates the instance is RUNNING.
- SKIP_RUNNING: SKIP RUNNING.
- FAILED_RETRY: RETRY on failure.
- EXPIRED: failed.
-COMPLETED: success.
 * @method void setInstanceState(string $InstanceState) Set **Instance status**.
-WAIT_EVENT: specifies the wait for event.
-WAIT_UPSTREAM: waiting for upstream.
- WAIT_RUN: awaiting execution.
- RUNNING: indicates the instance is RUNNING.
- SKIP_RUNNING: SKIP RUNNING.
- FAILED_RETRY: RETRY on failure.
- EXPIRED: failed.
-COMPLETED: success.
 * @method integer getInstanceType() Obtain Specifies the instance type.

-0 indicates the supplementary entry type.
-Indicates a periodic instance.
-2 indicates a non-periodic instance.
 * @method void setInstanceType(integer $InstanceType) Set Specifies the instance type.

-0 indicates the supplementary entry type.
-Indicates a periodic instance.
-2 indicates a non-periodic instance.
 * @method array getOwnerUinList() Obtain Owner Uin list.
 * @method void setOwnerUinList(array $OwnerUinList) Set Owner Uin list.
 * @method integer getTotalRunNum() Obtain Cumulative running times.

 * @method void setTotalRunNum(integer $TotalRunNum) Set Cumulative running times.

 * @method string getTaskType() Obtain Task type description.
 * @method void setTaskType(string $TaskType) Set Task type description.
 * @method integer getTaskTypeId() Obtain Task type id.

 * @method void setTaskTypeId(integer $TaskTypeId) Set Task type id.

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
 * @method integer getTryLimit() Obtain Retry count limit when execution fails each time.

 * @method void setTryLimit(integer $TryLimit) Set Retry count limit when execution fails each time.

 * @method integer getTries() Obtain Specifies the number of retry attempts on failure.
When triggered by manual rerun, supplementary entry instance, or other methods, the count will be reset to 0 and start again.
 * @method void setTries(integer $Tries) Set Specifies the number of retry attempts on failure.
When triggered by manual rerun, supplementary entry instance, or other methods, the count will be reset to 0 and start again.
 * @method string getStartTime() Obtain Operation start time.
 * @method void setStartTime(string $StartTime) Set Operation start time.
 * @method string getEndTime() Obtain Operation completion time.
 * @method void setEndTime(string $EndTime) Set Operation completion time.
 * @method integer getCostTime() Obtain Time spent, in milliseconds.

 * @method void setCostTime(integer $CostTime) Set Time spent, in milliseconds.

 * @method string getSchedulerTime() Obtain Scheduled dispatch time.

 * @method void setSchedulerTime(string $SchedulerTime) Set Scheduled dispatch time.

 * @method string getLastUpdateTime() Obtain Latest update time of the instance. specifies the time format as yyyy-MM-dd HH:MM:ss.

 * @method void setLastUpdateTime(string $LastUpdateTime) Set Latest update time of the instance. specifies the time format as yyyy-MM-dd HH:MM:ss.

 * @method string getExecutorGroupId() Obtain Execution resource group ID.

 * @method void setExecutorGroupId(string $ExecutorGroupId) Set Execution resource group ID.

 * @method string getExecutorGroupName() Obtain Resource group name.

 * @method void setExecutorGroupName(string $ExecutorGroupName) Set Resource group name.
 */
class TaskInstance extends AbstractModel
{
    /**
     * @var string Project id.
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
     * @var string Folder name.
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
     * @var string Instance data time.
     */
    public $CurRunDate;

    /**
     * @var string **Instance status**.
-WAIT_EVENT: specifies the wait for event.
-WAIT_UPSTREAM: waiting for upstream.
- WAIT_RUN: awaiting execution.
- RUNNING: indicates the instance is RUNNING.
- SKIP_RUNNING: SKIP RUNNING.
- FAILED_RETRY: RETRY on failure.
- EXPIRED: failed.
-COMPLETED: success.
     */
    public $InstanceState;

    /**
     * @var integer Specifies the instance type.

-0 indicates the supplementary entry type.
-Indicates a periodic instance.
-2 indicates a non-periodic instance.
     */
    public $InstanceType;

    /**
     * @var array Owner Uin list.
     */
    public $OwnerUinList;

    /**
     * @var integer Cumulative running times.

     */
    public $TotalRunNum;

    /**
     * @var string Task type description.
     */
    public $TaskType;

    /**
     * @var integer Task type id.

     */
    public $TaskTypeId;

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
     * @var integer Retry count limit when execution fails each time.

     */
    public $TryLimit;

    /**
     * @var integer Specifies the number of retry attempts on failure.
When triggered by manual rerun, supplementary entry instance, or other methods, the count will be reset to 0 and start again.
     */
    public $Tries;

    /**
     * @var string Operation start time.
     */
    public $StartTime;

    /**
     * @var string Operation completion time.
     */
    public $EndTime;

    /**
     * @var integer Time spent, in milliseconds.

     */
    public $CostTime;

    /**
     * @var string Scheduled dispatch time.

     */
    public $SchedulerTime;

    /**
     * @var string Latest update time of the instance. specifies the time format as yyyy-MM-dd HH:MM:ss.

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
     * @param string $ProjectId Project id.
     * @param string $InstanceKey **Instance unique id**.
     * @param string $FolderId Folder ID.

     * @param string $FolderName Folder name.
     * @param string $WorkflowId Workflow ID.
     * @param string $WorkflowName Workflow name.

     * @param string $TaskId Task ID
     * @param string $TaskName Task name.

     * @param string $CurRunDate Instance data time.
     * @param string $InstanceState **Instance status**.
-WAIT_EVENT: specifies the wait for event.
-WAIT_UPSTREAM: waiting for upstream.
- WAIT_RUN: awaiting execution.
- RUNNING: indicates the instance is RUNNING.
- SKIP_RUNNING: SKIP RUNNING.
- FAILED_RETRY: RETRY on failure.
- EXPIRED: failed.
-COMPLETED: success.
     * @param integer $InstanceType Specifies the instance type.

-0 indicates the supplementary entry type.
-Indicates a periodic instance.
-2 indicates a non-periodic instance.
     * @param array $OwnerUinList Owner Uin list.
     * @param integer $TotalRunNum Cumulative running times.

     * @param string $TaskType Task type description.
     * @param integer $TaskTypeId Task type id.

     * @param string $CycleType Task Cycle Type

* ONEOFF_CYCLE: One-time

* YEAR_CYCLE: Yearly

* MONTH_CYCLE: Monthly

* WEEK_CYCLE: Weekly

* DAY_CYCLE: Daily

* HOUR_CYCLE: Hourly

* MINUTE_CYCLE: Minute-level

* CRONTAB_CYCLE: Crontab expression-based
     * @param integer $TryLimit Retry count limit when execution fails each time.

     * @param integer $Tries Specifies the number of retry attempts on failure.
When triggered by manual rerun, supplementary entry instance, or other methods, the count will be reset to 0 and start again.
     * @param string $StartTime Operation start time.
     * @param string $EndTime Operation completion time.
     * @param integer $CostTime Time spent, in milliseconds.

     * @param string $SchedulerTime Scheduled dispatch time.

     * @param string $LastUpdateTime Latest update time of the instance. specifies the time format as yyyy-MM-dd HH:MM:ss.

     * @param string $ExecutorGroupId Execution resource group ID.

     * @param string $ExecutorGroupName Resource group name.
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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("TryLimit",$param) and $param["TryLimit"] !== null) {
            $this->TryLimit = $param["TryLimit"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
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
    }
}
