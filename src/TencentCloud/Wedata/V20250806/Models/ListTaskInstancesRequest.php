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
 * ListTaskInstances request structure.
 *
 * @method string getProjectId() Obtain **Project ID**. specifies the project ID.
 * @method void setProjectId(string $ProjectId) Set **Project ID**. specifies the project ID.
 * @method integer getPageNumber() Obtain **Page number. integer.**.
Used in conjunction with pageSize and cannot be less than 1. default value: 1.
 * @method void setPageNumber(integer $PageNumber) Set **Page number. integer.**.
Used in conjunction with pageSize and cannot be less than 1. default value: 1.
 * @method integer getPageSize() Obtain Specifies the number of items to display per page. default: 10. value range: 1-100.
 * @method void setPageSize(integer $PageSize) Set Specifies the number of items to display per page. default: 10. value range: 1-100.
 * @method string getKeyword() Obtain Task name or task ID.
Supports fuzzy search filtering. multiple values are separated by commas.
 * @method void setKeyword(string $Keyword) Set Task name or task ID.
Supports fuzzy search filtering. multiple values are separated by commas.
 * @method string getTimeZone() Obtain **Time zone** timeZone, specifies the time zone of the passed in time string. default UTC+8.
 * @method void setTimeZone(string $TimeZone) Set **Time zone** timeZone, specifies the time zone of the passed in time string. default UTC+8.
 * @method integer getInstanceType() Obtain **Instance Type**

0 - Backfill instance

1 - Cyclic (scheduled) instance

2 - Non-cyclic (non-scheduled) instance
 * @method void setInstanceType(integer $InstanceType) Set **Instance Type**

0 - Backfill instance

1 - Cyclic (scheduled) instance

2 - Non-cyclic (non-scheduled) instance
 * @method string getInstanceState() Obtain **Instance Status**

WAIT_EVENT: Waiting for event

WAIT_UPSTREAM: Waiting for upstream

WAIT_RUN: Waiting to run

RUNNING: Running

SKIP_RUNNING: Skipped

FAILED_RETRY: Retrying after failure

EXPIRED: Failed

COMPLETED: Succeeded
 * @method void setInstanceState(string $InstanceState) Set **Instance Status**

WAIT_EVENT: Waiting for event

WAIT_UPSTREAM: Waiting for upstream

WAIT_RUN: Waiting to run

RUNNING: Running

SKIP_RUNNING: Skipped

FAILED_RETRY: Retrying after failure

EXPIRED: Failed

COMPLETED: Succeeded
 * @method integer getTaskTypeId() Obtain Task type Id.
 * @method void setTaskTypeId(integer $TaskTypeId) Set Task type Id.
 * @method string getCycleType() Obtain **Task Cycle Type**

ONEOFF_CYCLE: One-time

YEAR_CYCLE: Yearly

MONTH_CYCLE: Monthly

WEEK_CYCLE: Weekly

DAY_CYCLE: Daily

HOUR_CYCLE: Hourly

MINUTE_CYCLE: Minute-level

CRONTAB_CYCLE: Crontab expression-based
 * @method void setCycleType(string $CycleType) Set **Task Cycle Type**

ONEOFF_CYCLE: One-time

YEAR_CYCLE: Yearly

MONTH_CYCLE: Monthly

WEEK_CYCLE: Weekly

DAY_CYCLE: Daily

HOUR_CYCLE: Hourly

MINUTE_CYCLE: Minute-level

CRONTAB_CYCLE: Crontab expression-based
 * @method string getOwnerUin() Obtain Task owner id.
 * @method void setOwnerUin(string $OwnerUin) Set Task owner id.
 * @method string getFolderId() Obtain Folder id
 * @method void setFolderId(string $FolderId) Set Folder id
 * @method string getWorkflowId() Obtain Workflow id of the task.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow id of the task.
 * @method string getExecutorGroupId() Obtain **Execution resource group Id**.
 * @method void setExecutorGroupId(string $ExecutorGroupId) Set **Execution resource group Id**.
 * @method string getScheduleTimeFrom() Obtain **Instance Scheduled Time Filter Condition** specifies the filter start time in the time format yyyy-MM-dd HH:MM:ss.
 * @method void setScheduleTimeFrom(string $ScheduleTimeFrom) Set **Instance Scheduled Time Filter Condition** specifies the filter start time in the time format yyyy-MM-dd HH:MM:ss.
 * @method string getScheduleTimeTo() Obtain **Instance Scheduled Time Filter Condition** specifies the cutoff time in the format of yyyy-MM-dd HH:MM:ss.
 * @method void setScheduleTimeTo(string $ScheduleTimeTo) Set **Instance Scheduled Time Filter Condition** specifies the cutoff time in the format of yyyy-MM-dd HH:MM:ss.
 * @method string getStartTimeFrom() Obtain **Instance Execution Start Time Filter Condition** specifies the start time for filtering. time format: yyyy-MM-dd HH:MM:ss.
 * @method void setStartTimeFrom(string $StartTimeFrom) Set **Instance Execution Start Time Filter Condition** specifies the start time for filtering. time format: yyyy-MM-dd HH:MM:ss.
 * @method string getStartTimeTo() Obtain **Instance Execution Start Time Filter Condition**.
Expiration time in yyyy-MM-dd HH:MM:ss format.
 * @method void setStartTimeTo(string $StartTimeTo) Set **Instance Execution Start Time Filter Condition**.
Expiration time in yyyy-MM-dd HH:MM:ss format.
 * @method string getLastUpdateTimeFrom() Obtain **Instance Last Update Time Filter Condition**.
Expiration time in yyyy-MM-dd HH:MM:ss format.
 * @method void setLastUpdateTimeFrom(string $LastUpdateTimeFrom) Set **Instance Last Update Time Filter Condition**.
Expiration time in yyyy-MM-dd HH:MM:ss format.
 * @method string getLastUpdateTimeTo() Obtain **Instance Last Update Time Filter Condition**.
Expiration time in yyyy-MM-dd HH:MM:ss format.
 * @method void setLastUpdateTimeTo(string $LastUpdateTimeTo) Set **Instance Last Update Time Filter Condition**.
Expiration time in yyyy-MM-dd HH:MM:ss format.
 * @method string getSortColumn() Obtain **Query Result Sorting Field**

SCHEDULE_DATE: Sort by scheduled execution time

START_TIME: Sort by actual execution start time

END_TIME: Sort by actual execution end time

COST_TIME: Sort by execution duration
 * @method void setSortColumn(string $SortColumn) Set **Query Result Sorting Field**

SCHEDULE_DATE: Sort by scheduled execution time

START_TIME: Sort by actual execution start time

END_TIME: Sort by actual execution end time

COST_TIME: Sort by execution duration
 * @method string getSortType() Obtain **Instance Sorting Order**

- ASC 
- DESC
 * @method void setSortType(string $SortType) Set **Instance Sorting Order**

- ASC 
- DESC
 */
class ListTaskInstancesRequest extends AbstractModel
{
    /**
     * @var string **Project ID**. specifies the project ID.
     */
    public $ProjectId;

    /**
     * @var integer **Page number. integer.**.
Used in conjunction with pageSize and cannot be less than 1. default value: 1.
     */
    public $PageNumber;

    /**
     * @var integer Specifies the number of items to display per page. default: 10. value range: 1-100.
     */
    public $PageSize;

    /**
     * @var string Task name or task ID.
Supports fuzzy search filtering. multiple values are separated by commas.
     */
    public $Keyword;

    /**
     * @var string **Time zone** timeZone, specifies the time zone of the passed in time string. default UTC+8.
     */
    public $TimeZone;

    /**
     * @var integer **Instance Type**

0 - Backfill instance

1 - Cyclic (scheduled) instance

2 - Non-cyclic (non-scheduled) instance
     */
    public $InstanceType;

    /**
     * @var string **Instance Status**

WAIT_EVENT: Waiting for event

WAIT_UPSTREAM: Waiting for upstream

WAIT_RUN: Waiting to run

RUNNING: Running

SKIP_RUNNING: Skipped

FAILED_RETRY: Retrying after failure

EXPIRED: Failed

COMPLETED: Succeeded
     */
    public $InstanceState;

    /**
     * @var integer Task type Id.
     */
    public $TaskTypeId;

    /**
     * @var string **Task Cycle Type**

ONEOFF_CYCLE: One-time

YEAR_CYCLE: Yearly

MONTH_CYCLE: Monthly

WEEK_CYCLE: Weekly

DAY_CYCLE: Daily

HOUR_CYCLE: Hourly

MINUTE_CYCLE: Minute-level

CRONTAB_CYCLE: Crontab expression-based
     */
    public $CycleType;

    /**
     * @var string Task owner id.
     */
    public $OwnerUin;

    /**
     * @var string Folder id
     */
    public $FolderId;

    /**
     * @var string Workflow id of the task.
     */
    public $WorkflowId;

    /**
     * @var string **Execution resource group Id**.
     */
    public $ExecutorGroupId;

    /**
     * @var string **Instance Scheduled Time Filter Condition** specifies the filter start time in the time format yyyy-MM-dd HH:MM:ss.
     */
    public $ScheduleTimeFrom;

    /**
     * @var string **Instance Scheduled Time Filter Condition** specifies the cutoff time in the format of yyyy-MM-dd HH:MM:ss.
     */
    public $ScheduleTimeTo;

    /**
     * @var string **Instance Execution Start Time Filter Condition** specifies the start time for filtering. time format: yyyy-MM-dd HH:MM:ss.
     */
    public $StartTimeFrom;

    /**
     * @var string **Instance Execution Start Time Filter Condition**.
Expiration time in yyyy-MM-dd HH:MM:ss format.
     */
    public $StartTimeTo;

    /**
     * @var string **Instance Last Update Time Filter Condition**.
Expiration time in yyyy-MM-dd HH:MM:ss format.
     */
    public $LastUpdateTimeFrom;

    /**
     * @var string **Instance Last Update Time Filter Condition**.
Expiration time in yyyy-MM-dd HH:MM:ss format.
     */
    public $LastUpdateTimeTo;

    /**
     * @var string **Query Result Sorting Field**

SCHEDULE_DATE: Sort by scheduled execution time

START_TIME: Sort by actual execution start time

END_TIME: Sort by actual execution end time

COST_TIME: Sort by execution duration
     */
    public $SortColumn;

    /**
     * @var string **Instance Sorting Order**

- ASC 
- DESC
     */
    public $SortType;

    /**
     * @param string $ProjectId **Project ID**. specifies the project ID.
     * @param integer $PageNumber **Page number. integer.**.
Used in conjunction with pageSize and cannot be less than 1. default value: 1.
     * @param integer $PageSize Specifies the number of items to display per page. default: 10. value range: 1-100.
     * @param string $Keyword Task name or task ID.
Supports fuzzy search filtering. multiple values are separated by commas.
     * @param string $TimeZone **Time zone** timeZone, specifies the time zone of the passed in time string. default UTC+8.
     * @param integer $InstanceType **Instance Type**

0 - Backfill instance

1 - Cyclic (scheduled) instance

2 - Non-cyclic (non-scheduled) instance
     * @param string $InstanceState **Instance Status**

WAIT_EVENT: Waiting for event

WAIT_UPSTREAM: Waiting for upstream

WAIT_RUN: Waiting to run

RUNNING: Running

SKIP_RUNNING: Skipped

FAILED_RETRY: Retrying after failure

EXPIRED: Failed

COMPLETED: Succeeded
     * @param integer $TaskTypeId Task type Id.
     * @param string $CycleType **Task Cycle Type**

ONEOFF_CYCLE: One-time

YEAR_CYCLE: Yearly

MONTH_CYCLE: Monthly

WEEK_CYCLE: Weekly

DAY_CYCLE: Daily

HOUR_CYCLE: Hourly

MINUTE_CYCLE: Minute-level

CRONTAB_CYCLE: Crontab expression-based
     * @param string $OwnerUin Task owner id.
     * @param string $FolderId Folder id
     * @param string $WorkflowId Workflow id of the task.
     * @param string $ExecutorGroupId **Execution resource group Id**.
     * @param string $ScheduleTimeFrom **Instance Scheduled Time Filter Condition** specifies the filter start time in the time format yyyy-MM-dd HH:MM:ss.
     * @param string $ScheduleTimeTo **Instance Scheduled Time Filter Condition** specifies the cutoff time in the format of yyyy-MM-dd HH:MM:ss.
     * @param string $StartTimeFrom **Instance Execution Start Time Filter Condition** specifies the start time for filtering. time format: yyyy-MM-dd HH:MM:ss.
     * @param string $StartTimeTo **Instance Execution Start Time Filter Condition**.
Expiration time in yyyy-MM-dd HH:MM:ss format.
     * @param string $LastUpdateTimeFrom **Instance Last Update Time Filter Condition**.
Expiration time in yyyy-MM-dd HH:MM:ss format.
     * @param string $LastUpdateTimeTo **Instance Last Update Time Filter Condition**.
Expiration time in yyyy-MM-dd HH:MM:ss format.
     * @param string $SortColumn **Query Result Sorting Field**

SCHEDULE_DATE: Sort by scheduled execution time

START_TIME: Sort by actual execution start time

END_TIME: Sort by actual execution end time

COST_TIME: Sort by execution duration
     * @param string $SortType **Instance Sorting Order**

- ASC 
- DESC
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ScheduleTimeFrom",$param) and $param["ScheduleTimeFrom"] !== null) {
            $this->ScheduleTimeFrom = $param["ScheduleTimeFrom"];
        }

        if (array_key_exists("ScheduleTimeTo",$param) and $param["ScheduleTimeTo"] !== null) {
            $this->ScheduleTimeTo = $param["ScheduleTimeTo"];
        }

        if (array_key_exists("StartTimeFrom",$param) and $param["StartTimeFrom"] !== null) {
            $this->StartTimeFrom = $param["StartTimeFrom"];
        }

        if (array_key_exists("StartTimeTo",$param) and $param["StartTimeTo"] !== null) {
            $this->StartTimeTo = $param["StartTimeTo"];
        }

        if (array_key_exists("LastUpdateTimeFrom",$param) and $param["LastUpdateTimeFrom"] !== null) {
            $this->LastUpdateTimeFrom = $param["LastUpdateTimeFrom"];
        }

        if (array_key_exists("LastUpdateTimeTo",$param) and $param["LastUpdateTimeTo"] !== null) {
            $this->LastUpdateTimeTo = $param["LastUpdateTimeTo"];
        }

        if (array_key_exists("SortColumn",$param) and $param["SortColumn"] !== null) {
            $this->SortColumn = $param["SortColumn"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }
    }
}
