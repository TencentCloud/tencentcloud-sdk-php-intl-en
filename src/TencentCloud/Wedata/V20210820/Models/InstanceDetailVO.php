<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a scheduled instance.
 *
 * @method string getInstanceKey() Obtain Unique id of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceKey(string $InstanceKey) Set Unique id of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectId() Obtain Project ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFolderId() Obtain Folder ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFolderId(string $FolderId) Set Folder ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFolderName() Obtain Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFolderName(string $FolderName) Set Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowId() Obtain Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowName() Obtain Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getInChargeList() Obtain Responsible person list.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInChargeList(array $InChargeList) Set Responsible person list.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain Task ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskName() Obtain Task Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskName(string $TaskName) Set Task Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskCycleType() Obtain Task cycle type.
Support filtering multiple items with an or relationship between conditions.
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskCycleType(string $TaskCycleType) Set Task cycle type.
Support filtering multiple items with an or relationship between conditions.
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TaskTypeOpsDto getTaskType() Obtain Task type

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskType(TaskTypeOpsDto $TaskType) Set Task type

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutorGroupId() Obtain Execution resource group ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutorGroupId(string $ExecutorGroupId) Set Execution resource group ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutorGroupName() Obtain Resource group name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutorGroupName(string $ExecutorGroupName) Set Resource group name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCurRunDate() Obtain Instance data time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurRunDate(string $CurRunDate) Set Instance data time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNextCurDate() Obtain Next instance data time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNextCurDate(string $NextCurDate) Set Next instance data time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTryLimit() Obtain Limit on the number of retries issued each time a run fails.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTryLimit(integer $TryLimit) Set Limit on the number of retries issued each time a run fails.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTries() Obtain Current number of issued run attempts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTries(integer $Tries) Set Current number of issued run attempts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalRunNum() Obtain Cumulative running times.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalRunNum(integer $TotalRunNum) Set Cumulative running times.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLifeRoundNum() Obtain Instance lifetime number, which identifies one-time execution of the instance.

For example: the number of the first run of a periodic instance is 0. after the user reruns the instance later, the number of the second execution is 1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLifeRoundNum(integer $LifeRoundNum) Set Instance lifetime number, which identifies one-time execution of the instance.

For example: the number of the first run of a periodic instance is 0. after the user reruns the instance later, the number of the second execution is 1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceType() Obtain Instance type.

-0 indicates Replenished Instance.
-1 indicates Periodic Instance.
-2 indicates Non-Periodic Instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(integer $InstanceType) Set Instance type.

-0 indicates Replenished Instance.
-1 indicates Periodic Instance.
-2 indicates Non-Periodic Instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceState() Obtain Indicates the status of an instance.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21]: skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceState(integer $InstanceState) Set Indicates the status of an instance.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21]: skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSchedulerTime() Obtain Planned scheduling time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSchedulerTime(string $SchedulerTime) Set Planned scheduling time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Start time of operation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Start time of operation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Indicates the operation completion time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Indicates the operation completion time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCostTime() Obtain Time spent.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCostTime(string $CostTime) Set Time spent.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceRunType() Obtain Instance running trigger type.

-RERUN indicates rerunning.
-ADDITION indicates data replenishment.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN indicates re-run - empty run.
-ADDITION_SKIP_RUN indicates a data replenishment run - empty run.
-PERIODIC_SKIP_RUN indicates an empty run in a periodic cycle.
-APERIODIC_SKIP_RUN indicates a non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceRunType(string $InstanceRunType) Set Instance running trigger type.

-RERUN indicates rerunning.
-ADDITION indicates data replenishment.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN indicates re-run - empty run.
-ADDITION_SKIP_RUN indicates a data replenishment run - empty run.
-PERIODIC_SKIP_RUN indicates an empty run in a periodic cycle.
-APERIODIC_SKIP_RUN indicates a non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionJobId() Obtain Dispatch execution ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionJobId(string $ExecutionJobId) Set Dispatch execution ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getInstanceLifeCycleList() Obtain Instance lifecycle list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceLifeCycleList(array $InstanceLifeCycleList) Set Instance lifecycle list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method InstanceLogVO getLatestLog() Obtain The last execution log of the instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLatestLog(InstanceLogVO $LatestLog) Set The last execution log of the instance.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceDetailVO extends AbstractModel
{
    /**
     * @var string Unique id of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceKey;

    /**
     * @var string Project ID.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Folder ID.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FolderId;

    /**
     * @var string Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FolderName;

    /**
     * @var string Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowName;

    /**
     * @var array Responsible person list.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InChargeList;

    /**
     * @var string Task ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task Name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskName;

    /**
     * @var string Task cycle type.
Support filtering multiple items with an or relationship between conditions.
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskCycleType;

    /**
     * @var TaskTypeOpsDto Task type

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskType;

    /**
     * @var string Execution resource group ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutorGroupId;

    /**
     * @var string Resource group name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutorGroupName;

    /**
     * @var string Instance data time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CurRunDate;

    /**
     * @var string Next instance data time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NextCurDate;

    /**
     * @var integer Limit on the number of retries issued each time a run fails.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TryLimit;

    /**
     * @var integer Current number of issued run attempts.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tries;

    /**
     * @var integer Cumulative running times.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalRunNum;

    /**
     * @var integer Instance lifetime number, which identifies one-time execution of the instance.

For example: the number of the first run of a periodic instance is 0. after the user reruns the instance later, the number of the second execution is 1.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LifeRoundNum;

    /**
     * @var integer Instance type.

-0 indicates Replenished Instance.
-1 indicates Periodic Instance.
-2 indicates Non-Periodic Instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var integer Indicates the status of an instance.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21]: skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceState;

    /**
     * @var string Planned scheduling time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SchedulerTime;

    /**
     * @var string Start time of operation.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Indicates the operation completion time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Time spent.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CostTime;

    /**
     * @var string Instance running trigger type.

-RERUN indicates rerunning.
-ADDITION indicates data replenishment.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN indicates re-run - empty run.
-ADDITION_SKIP_RUN indicates a data replenishment run - empty run.
-PERIODIC_SKIP_RUN indicates an empty run in a periodic cycle.
-APERIODIC_SKIP_RUN indicates a non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceRunType;

    /**
     * @var string Dispatch execution ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionJobId;

    /**
     * @var array Instance lifecycle list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceLifeCycleList;

    /**
     * @var InstanceLogVO The last execution log of the instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LatestLog;

    /**
     * @param string $InstanceKey Unique id of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectId Project ID.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FolderId Folder ID.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FolderName Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowId Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowName Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $InChargeList Responsible person list.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskId Task ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskName Task Name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskCycleType Task cycle type.
Support filtering multiple items with an or relationship between conditions.
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TaskTypeOpsDto $TaskType Task type

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutorGroupId Execution resource group ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutorGroupName Resource group name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CurRunDate Instance data time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NextCurDate Next instance data time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TryLimit Limit on the number of retries issued each time a run fails.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Tries Current number of issued run attempts.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalRunNum Cumulative running times.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LifeRoundNum Instance lifetime number, which identifies one-time execution of the instance.

For example: the number of the first run of a periodic instance is 0. after the user reruns the instance later, the number of the second execution is 1.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceType Instance type.

-0 indicates Replenished Instance.
-1 indicates Periodic Instance.
-2 indicates Non-Periodic Instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceState Indicates the status of an instance.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21]: skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SchedulerTime Planned scheduling time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Start time of operation.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Indicates the operation completion time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CostTime Time spent.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceRunType Instance running trigger type.

-RERUN indicates rerunning.
-ADDITION indicates data replenishment.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN indicates re-run - empty run.
-ADDITION_SKIP_RUN indicates a data replenishment run - empty run.
-PERIODIC_SKIP_RUN indicates an empty run in a periodic cycle.
-APERIODIC_SKIP_RUN indicates a non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionJobId Dispatch execution ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $InstanceLifeCycleList Instance lifecycle list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param InstanceLogVO $LatestLog The last execution log of the instance.
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
        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("InChargeList",$param) and $param["InChargeList"] !== null) {
            $this->InChargeList = $param["InChargeList"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskCycleType",$param) and $param["TaskCycleType"] !== null) {
            $this->TaskCycleType = $param["TaskCycleType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = new TaskTypeOpsDto();
            $this->TaskType->deserialize($param["TaskType"]);
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("NextCurDate",$param) and $param["NextCurDate"] !== null) {
            $this->NextCurDate = $param["NextCurDate"];
        }

        if (array_key_exists("TryLimit",$param) and $param["TryLimit"] !== null) {
            $this->TryLimit = $param["TryLimit"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("TotalRunNum",$param) and $param["TotalRunNum"] !== null) {
            $this->TotalRunNum = $param["TotalRunNum"];
        }

        if (array_key_exists("LifeRoundNum",$param) and $param["LifeRoundNum"] !== null) {
            $this->LifeRoundNum = $param["LifeRoundNum"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("SchedulerTime",$param) and $param["SchedulerTime"] !== null) {
            $this->SchedulerTime = $param["SchedulerTime"];
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

        if (array_key_exists("InstanceRunType",$param) and $param["InstanceRunType"] !== null) {
            $this->InstanceRunType = $param["InstanceRunType"];
        }

        if (array_key_exists("ExecutionJobId",$param) and $param["ExecutionJobId"] !== null) {
            $this->ExecutionJobId = $param["ExecutionJobId"];
        }

        if (array_key_exists("InstanceLifeCycleList",$param) and $param["InstanceLifeCycleList"] !== null) {
            $this->InstanceLifeCycleList = [];
            foreach ($param["InstanceLifeCycleList"] as $key => $value){
                $obj = new InstanceLifeCycleVO();
                $obj->deserialize($value);
                array_push($this->InstanceLifeCycleList, $obj);
            }
        }

        if (array_key_exists("LatestLog",$param) and $param["LatestLog"] !== null) {
            $this->LatestLog = new InstanceLogVO();
            $this->LatestLog->deserialize($param["LatestLog"]);
        }
    }
}
