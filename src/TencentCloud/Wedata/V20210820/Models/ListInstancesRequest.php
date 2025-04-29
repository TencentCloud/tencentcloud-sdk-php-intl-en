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
 * ListInstances request structure.
 *
 * @method string getProjectId() Obtain **Project ID**.
 * @method void setProjectId(string $ProjectId) Set **Project ID**.
 * @method string getScheduleTimeFrom() Obtain Filter criteria for instance planned scheduling time.
Specifies the start time for filtering. the time format is yyyy-MM-dd HH:MM:ss.
 * @method void setScheduleTimeFrom(string $ScheduleTimeFrom) Set Filter criteria for instance planned scheduling time.
Specifies the start time for filtering. the time format is yyyy-MM-dd HH:MM:ss.
 * @method string getScheduleTimeTo() Obtain Filter criteria for instance planned scheduling time.
Filter expiration time. the time format is yyyy-MM-dd HH:MM:ss.
 * @method void setScheduleTimeTo(string $ScheduleTimeTo) Set Filter criteria for instance planned scheduling time.
Filter expiration time. the time format is yyyy-MM-dd HH:MM:ss.
 * @method integer getPageNumber() Obtain Page number, integer.
Use in conjunction with pageSize and cannot be less than 1. the default value is 1.
 * @method void setPageNumber(integer $PageNumber) Set Page number, integer.
Use in conjunction with pageSize and cannot be less than 1. the default value is 1.
 * @method integer getPageSize() Obtain Number of items per page, integer.
Use in conjunction with pageNumber and should not exceed 200. default value: 10.
 * @method void setPageSize(integer $PageSize) Set Number of items per page, integer.
Use in conjunction with pageNumber and should not exceed 200. default value: 10.
 * @method string getSortColumn() Obtain Sorting field for query results.

-SCHEDULE_DATE indicates sorting based on the planned scheduling time.
-START_TIME indicates sorting by the instance's start execution time.
-END_TIME indicates sorting based on the instance execution end time.
-COST_TIME indicates sorting based on instance execution duration.
 * @method void setSortColumn(string $SortColumn) Set Sorting field for query results.

-SCHEDULE_DATE indicates sorting based on the planned scheduling time.
-START_TIME indicates sorting by the instance's start execution time.
-END_TIME indicates sorting based on the instance execution end time.
-COST_TIME indicates sorting based on instance execution duration.
 * @method string getSortType() Obtain Instance sorting order.

- ASC 
- DESC
 * @method void setSortType(string $SortType) Set Instance sorting order.

- ASC 
- DESC
 * @method integer getInstanceType() Obtain Instance type.

-0 indicates Replenished Instance.
-1 indicates Periodic Instance.
-2 indicates Non-Periodic instance.
 * @method void setInstanceType(integer $InstanceType) Set Instance type.

-0 indicates Replenished Instance.
-1 indicates Periodic Instance.
-2 indicates Non-Periodic instance.
 * @method array getInstanceStateList() Obtain Instance execution status.
Support filtering multiple items with an "or" relationship between conditions.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21] indicates skipping running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
 * @method void setInstanceStateList(array $InstanceStateList) Set Instance execution status.
Support filtering multiple items with an "or" relationship between conditions.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21] indicates skipping running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
 * @method array getTaskTypeIdList() Obtain **Task type Id** specifies the identifier for the task type.

-Supports filtering multiple items with an or relationship between conditions.
-You can use the DescribeAllTaskType API to obtain all task types supported by the project.
 * @method void setTaskTypeIdList(array $TaskTypeIdList) Set **Task type Id** specifies the identifier for the task type.

-Supports filtering multiple items with an or relationship between conditions.
-You can use the DescribeAllTaskType API to obtain all task types supported by the project.
 * @method array getTaskCycleList() Obtain Task cycle type.
Supports filtering multiple conditions with an or relationship between them.
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
 * @method void setTaskCycleList(array $TaskCycleList) Set Task cycle type.
Supports filtering multiple conditions with an or relationship between them.
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
 * @method string getKeyword() Obtain Task name or task ID.
Supports fuzzy search filtering. multiple items are separated by english commas.
 * @method void setKeyword(string $Keyword) Set Task name or task ID.
Supports fuzzy search filtering. multiple items are separated by english commas.
 * @method array getInChargeList() Obtain Task owner.
Support filtering multiple items with an or relationship between conditions.
 * @method void setInChargeList(array $InChargeList) Set Task owner.
Support filtering multiple items with an or relationship between conditions.
 * @method array getTaskFolderIdList() Obtain File to which the task belongs.
Supports filtering multiple conditions with an or relationship between them.
The FindAllFolder API can be used to obtain the folder list under a project.
 * @method void setTaskFolderIdList(array $TaskFolderIdList) Set File to which the task belongs.
Supports filtering multiple conditions with an or relationship between them.
The FindAllFolder API can be used to obtain the folder list under a project.
 * @method array getWorkflowIdList() Obtain **Associated workflow of the task**.
Supports filtering multiple conditions with an or relationship between them.
The workflow list under a project can be obtained through the DescribeOpsWorkflows api.
 * @method void setWorkflowIdList(array $WorkflowIdList) Set **Associated workflow of the task**.
Supports filtering multiple conditions with an or relationship between them.
The workflow list under a project can be obtained through the DescribeOpsWorkflows api.
 * @method array getExecutorGroupIdList() Obtain Execution resource group Id.
Supports filtering multiple conditions with an or relationship between them.
The scheduling resource group list under the project can be obtained through the DescribeNormalSchedulerExecutorGroups api.
The DescribeNormalIntegrationExecutorGroups API can be used to obtain the list of all integration resource groups under a project.
 * @method void setExecutorGroupIdList(array $ExecutorGroupIdList) Set Execution resource group Id.
Supports filtering multiple conditions with an or relationship between them.
The scheduling resource group list under the project can be obtained through the DescribeNormalSchedulerExecutorGroups api.
The DescribeNormalIntegrationExecutorGroups API can be used to obtain the list of all integration resource groups under a project.
 * @method string getStartTimeFrom() Obtain Instance execution start time filter criteria.
Specifies the start time for filtering. the time format is yyyy-MM-dd HH:MM:ss.
 * @method void setStartTimeFrom(string $StartTimeFrom) Set Instance execution start time filter criteria.
Specifies the start time for filtering. the time format is yyyy-MM-dd HH:MM:ss.
 * @method string getStartTimeTo() Obtain Instance execution start time filter criteria.
Filter expiration time. the time format is yyyy-MM-dd HH:MM:ss.
 * @method void setStartTimeTo(string $StartTimeTo) Set Instance execution start time filter criteria.
Filter expiration time. the time format is yyyy-MM-dd HH:MM:ss.
 * @method string getScheduleTimeZone() Obtain Time zone.
Time zone. specifies the time zone. the default value is UTC+8.
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) Set Time zone.
Time zone. specifies the time zone. the default value is UTC+8.
 */
class ListInstancesRequest extends AbstractModel
{
    /**
     * @var string **Project ID**.
     */
    public $ProjectId;

    /**
     * @var string Filter criteria for instance planned scheduling time.
Specifies the start time for filtering. the time format is yyyy-MM-dd HH:MM:ss.
     */
    public $ScheduleTimeFrom;

    /**
     * @var string Filter criteria for instance planned scheduling time.
Filter expiration time. the time format is yyyy-MM-dd HH:MM:ss.
     */
    public $ScheduleTimeTo;

    /**
     * @var integer Page number, integer.
Use in conjunction with pageSize and cannot be less than 1. the default value is 1.
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page, integer.
Use in conjunction with pageNumber and should not exceed 200. default value: 10.
     */
    public $PageSize;

    /**
     * @var string Sorting field for query results.

-SCHEDULE_DATE indicates sorting based on the planned scheduling time.
-START_TIME indicates sorting by the instance's start execution time.
-END_TIME indicates sorting based on the instance execution end time.
-COST_TIME indicates sorting based on instance execution duration.
     */
    public $SortColumn;

    /**
     * @var string Instance sorting order.

- ASC 
- DESC
     */
    public $SortType;

    /**
     * @var integer Instance type.

-0 indicates Replenished Instance.
-1 indicates Periodic Instance.
-2 indicates Non-Periodic instance.
     */
    public $InstanceType;

    /**
     * @var array Instance execution status.
Support filtering multiple items with an "or" relationship between conditions.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21] indicates skipping running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
     */
    public $InstanceStateList;

    /**
     * @var array **Task type Id** specifies the identifier for the task type.

-Supports filtering multiple items with an or relationship between conditions.
-You can use the DescribeAllTaskType API to obtain all task types supported by the project.
     */
    public $TaskTypeIdList;

    /**
     * @var array Task cycle type.
Supports filtering multiple conditions with an or relationship between them.
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
     */
    public $TaskCycleList;

    /**
     * @var string Task name or task ID.
Supports fuzzy search filtering. multiple items are separated by english commas.
     */
    public $Keyword;

    /**
     * @var array Task owner.
Support filtering multiple items with an or relationship between conditions.
     */
    public $InChargeList;

    /**
     * @var array File to which the task belongs.
Supports filtering multiple conditions with an or relationship between them.
The FindAllFolder API can be used to obtain the folder list under a project.
     */
    public $TaskFolderIdList;

    /**
     * @var array **Associated workflow of the task**.
Supports filtering multiple conditions with an or relationship between them.
The workflow list under a project can be obtained through the DescribeOpsWorkflows api.
     */
    public $WorkflowIdList;

    /**
     * @var array Execution resource group Id.
Supports filtering multiple conditions with an or relationship between them.
The scheduling resource group list under the project can be obtained through the DescribeNormalSchedulerExecutorGroups api.
The DescribeNormalIntegrationExecutorGroups API can be used to obtain the list of all integration resource groups under a project.
     */
    public $ExecutorGroupIdList;

    /**
     * @var string Instance execution start time filter criteria.
Specifies the start time for filtering. the time format is yyyy-MM-dd HH:MM:ss.
     */
    public $StartTimeFrom;

    /**
     * @var string Instance execution start time filter criteria.
Filter expiration time. the time format is yyyy-MM-dd HH:MM:ss.
     */
    public $StartTimeTo;

    /**
     * @var string Time zone.
Time zone. specifies the time zone. the default value is UTC+8.
     */
    public $ScheduleTimeZone;

    /**
     * @param string $ProjectId **Project ID**.
     * @param string $ScheduleTimeFrom Filter criteria for instance planned scheduling time.
Specifies the start time for filtering. the time format is yyyy-MM-dd HH:MM:ss.
     * @param string $ScheduleTimeTo Filter criteria for instance planned scheduling time.
Filter expiration time. the time format is yyyy-MM-dd HH:MM:ss.
     * @param integer $PageNumber Page number, integer.
Use in conjunction with pageSize and cannot be less than 1. the default value is 1.
     * @param integer $PageSize Number of items per page, integer.
Use in conjunction with pageNumber and should not exceed 200. default value: 10.
     * @param string $SortColumn Sorting field for query results.

-SCHEDULE_DATE indicates sorting based on the planned scheduling time.
-START_TIME indicates sorting by the instance's start execution time.
-END_TIME indicates sorting based on the instance execution end time.
-COST_TIME indicates sorting based on instance execution duration.
     * @param string $SortType Instance sorting order.

- ASC 
- DESC
     * @param integer $InstanceType Instance type.

-0 indicates Replenished Instance.
-1 indicates Periodic Instance.
-2 indicates Non-Periodic instance.
     * @param array $InstanceStateList Instance execution status.
Support filtering multiple items with an "or" relationship between conditions.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21] indicates skipping running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
     * @param array $TaskTypeIdList **Task type Id** specifies the identifier for the task type.

-Supports filtering multiple items with an or relationship between conditions.
-You can use the DescribeAllTaskType API to obtain all task types supported by the project.
     * @param array $TaskCycleList Task cycle type.
Supports filtering multiple conditions with an or relationship between them.
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
     * @param string $Keyword Task name or task ID.
Supports fuzzy search filtering. multiple items are separated by english commas.
     * @param array $InChargeList Task owner.
Support filtering multiple items with an or relationship between conditions.
     * @param array $TaskFolderIdList File to which the task belongs.
Supports filtering multiple conditions with an or relationship between them.
The FindAllFolder API can be used to obtain the folder list under a project.
     * @param array $WorkflowIdList **Associated workflow of the task**.
Supports filtering multiple conditions with an or relationship between them.
The workflow list under a project can be obtained through the DescribeOpsWorkflows api.
     * @param array $ExecutorGroupIdList Execution resource group Id.
Supports filtering multiple conditions with an or relationship between them.
The scheduling resource group list under the project can be obtained through the DescribeNormalSchedulerExecutorGroups api.
The DescribeNormalIntegrationExecutorGroups API can be used to obtain the list of all integration resource groups under a project.
     * @param string $StartTimeFrom Instance execution start time filter criteria.
Specifies the start time for filtering. the time format is yyyy-MM-dd HH:MM:ss.
     * @param string $StartTimeTo Instance execution start time filter criteria.
Filter expiration time. the time format is yyyy-MM-dd HH:MM:ss.
     * @param string $ScheduleTimeZone Time zone.
Time zone. specifies the time zone. the default value is UTC+8.
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

        if (array_key_exists("ScheduleTimeFrom",$param) and $param["ScheduleTimeFrom"] !== null) {
            $this->ScheduleTimeFrom = $param["ScheduleTimeFrom"];
        }

        if (array_key_exists("ScheduleTimeTo",$param) and $param["ScheduleTimeTo"] !== null) {
            $this->ScheduleTimeTo = $param["ScheduleTimeTo"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SortColumn",$param) and $param["SortColumn"] !== null) {
            $this->SortColumn = $param["SortColumn"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceStateList",$param) and $param["InstanceStateList"] !== null) {
            $this->InstanceStateList = $param["InstanceStateList"];
        }

        if (array_key_exists("TaskTypeIdList",$param) and $param["TaskTypeIdList"] !== null) {
            $this->TaskTypeIdList = $param["TaskTypeIdList"];
        }

        if (array_key_exists("TaskCycleList",$param) and $param["TaskCycleList"] !== null) {
            $this->TaskCycleList = $param["TaskCycleList"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("InChargeList",$param) and $param["InChargeList"] !== null) {
            $this->InChargeList = $param["InChargeList"];
        }

        if (array_key_exists("TaskFolderIdList",$param) and $param["TaskFolderIdList"] !== null) {
            $this->TaskFolderIdList = $param["TaskFolderIdList"];
        }

        if (array_key_exists("WorkflowIdList",$param) and $param["WorkflowIdList"] !== null) {
            $this->WorkflowIdList = $param["WorkflowIdList"];
        }

        if (array_key_exists("ExecutorGroupIdList",$param) and $param["ExecutorGroupIdList"] !== null) {
            $this->ExecutorGroupIdList = $param["ExecutorGroupIdList"];
        }

        if (array_key_exists("StartTimeFrom",$param) and $param["StartTimeFrom"] !== null) {
            $this->StartTimeFrom = $param["StartTimeFrom"];
        }

        if (array_key_exists("StartTimeTo",$param) and $param["StartTimeTo"] !== null) {
            $this->StartTimeTo = $param["StartTimeTo"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }
    }
}
