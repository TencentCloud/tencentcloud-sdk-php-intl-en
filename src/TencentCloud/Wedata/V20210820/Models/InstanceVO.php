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
 * Scheduling running instance entity.
 *
 * @method string getInstanceKey() Obtain Unique identifier of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceKey(string $InstanceKey) Set Unique identifier of an instance.
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
 * @method TaskTypeOpsDto getTaskType() Obtain Task type

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskType(TaskTypeOpsDto $TaskType) Set Task type

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskCycleType() Obtain Task cycle type.
Supports filtering multiple conditions with an or relationship between them.
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
Supports filtering multiple conditions with an or relationship between them.
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCurRunDate() Obtain Instance data time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurRunDate(string $CurRunDate) Set Instance data time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTryLimit() Obtain Specifies the limit on the number of retries issued each time a running failure occurs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTryLimit(integer $TryLimit) Set Specifies the limit on the number of retries issued each time a running failure occurs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTries() Obtain Number of retries after failure.
Will be reset to 0 and then recounted when triggered for execution by once again manually rerunning or using a supplementary entry instance and other methods.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTries(integer $Tries) Set Number of retries after failure.
Will be reset to 0 and then recounted when triggered for execution by once again manually rerunning or using a supplementary entry instance and other methods.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalRunNum() Obtain Cumulative running times.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalRunNum(integer $TotalRunNum) Set Cumulative running times.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceType() Obtain Instance type.

-0 indicates the supplementary entry type.
-1 indicates a periodic instance.
-2 indicates a non-periodic instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(integer $InstanceType) Set Instance type.

-0 indicates the supplementary entry type.
-1 indicates a periodic instance.
-2 indicates a non-periodic instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceState() Obtain Indicates the status of an instance.

-[0]Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22]: running.
-[21] indicates skipping running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceState(integer $InstanceState) Set Indicates the status of an instance.

-[0]Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22]: running.
-[21] indicates skipping running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Operation completion time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Operation completion time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCostTime() Obtain Time spent.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCostTime(string $CostTime) Set Time spent.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSchedulerTime() Obtain Planned scheduling time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSchedulerTime(string $SchedulerTime) Set Planned scheduling time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutorGroupId() Obtain Execution resource group ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutorGroupId(string $ExecutorGroupId) Set Execution resource group ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutorGroupName() Obtain Resource group name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutorGroupName(string $ExecutorGroupName) Set Resource group name

Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceVO extends AbstractModel
{
    /**
     * @var string Unique identifier of an instance.
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
     * @var TaskTypeOpsDto Task type

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskType;

    /**
     * @var string Task cycle type.
Supports filtering multiple conditions with an or relationship between them.
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
     * @var string Instance data time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CurRunDate;

    /**
     * @var integer Specifies the limit on the number of retries issued each time a running failure occurs.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TryLimit;

    /**
     * @var integer Number of retries after failure.
Will be reset to 0 and then recounted when triggered for execution by once again manually rerunning or using a supplementary entry instance and other methods.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tries;

    /**
     * @var integer Cumulative running times.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalRunNum;

    /**
     * @var integer Instance type.

-0 indicates the supplementary entry type.
-1 indicates a periodic instance.
-2 indicates a non-periodic instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var integer Indicates the status of an instance.

-[0]Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22]: running.
-[21] indicates skipping running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceState;

    /**
     * @var string Start time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Operation completion time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Time spent.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CostTime;

    /**
     * @var string Planned scheduling time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SchedulerTime;

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
     * @param string $InstanceKey Unique identifier of an instance.
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
     * @param TaskTypeOpsDto $TaskType Task type

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskCycleType Task cycle type.
Supports filtering multiple conditions with an or relationship between them.
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CurRunDate Instance data time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TryLimit Specifies the limit on the number of retries issued each time a running failure occurs.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Tries Number of retries after failure.
Will be reset to 0 and then recounted when triggered for execution by once again manually rerunning or using a supplementary entry instance and other methods.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalRunNum Cumulative running times.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceType Instance type.

-0 indicates the supplementary entry type.
-1 indicates a periodic instance.
-2 indicates a non-periodic instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceState Indicates the status of an instance.

-[0]Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22]: running.
-[21] indicates skipping running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Start time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Operation completion time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CostTime Time spent.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SchedulerTime Planned scheduling time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutorGroupId Execution resource group ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutorGroupName Resource group name

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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = new TaskTypeOpsDto();
            $this->TaskType->deserialize($param["TaskType"]);
        }

        if (array_key_exists("TaskCycleType",$param) and $param["TaskCycleType"] !== null) {
            $this->TaskCycleType = $param["TaskCycleType"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
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

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }
    }
}
