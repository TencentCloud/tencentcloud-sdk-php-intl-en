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
 * ListTriggerTaskRuns request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method array getFilters() Obtain Filtering parameters: Keyword for task name or ID query, WorkflowId for workflow ID query, FolderId for folder query, InChargeUin for responsible person query, WorkflowExecutionId for workflow execution ID, ExecutionId for task execution ID, TaskId for task ID, ScheduleTimeGreaterEqual / ScheduleTimeLessEqual for planned scheduling time interval
 * @method void setFilters(array $Filters) Set Filtering parameters: Keyword for task name or ID query, WorkflowId for workflow ID query, FolderId for folder query, InChargeUin for responsible person query, WorkflowExecutionId for workflow execution ID, ExecutionId for task execution ID, TaskId for task ID, ScheduleTimeGreaterEqual / ScheduleTimeLessEqual for planned scheduling time interval
 * @method array getOrderFields() Obtain Sorting field, sorting field name as follows: start time: CreateTime, end time: EndTime, scheduled dispatch time: ScheduleTime
 * @method void setOrderFields(array $OrderFields) Set Sorting field, sorting field name as follows: start time: CreateTime, end time: EndTime, scheduled dispatch time: ScheduleTime
 * @method integer getPageNumber() Obtain Page number
 * @method void setPageNumber(integer $PageNumber) Set Page number
 * @method integer getPageSize() Obtain Page size.
 * @method void setPageSize(integer $PageSize) Set Page size.
 */
class ListTriggerTaskRunsRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var array Filtering parameters: Keyword for task name or ID query, WorkflowId for workflow ID query, FolderId for folder query, InChargeUin for responsible person query, WorkflowExecutionId for workflow execution ID, ExecutionId for task execution ID, TaskId for task ID, ScheduleTimeGreaterEqual / ScheduleTimeLessEqual for planned scheduling time interval
     */
    public $Filters;

    /**
     * @var array Sorting field, sorting field name as follows: start time: CreateTime, end time: EndTime, scheduled dispatch time: ScheduleTime
     */
    public $OrderFields;

    /**
     * @var integer Page number
     */
    public $PageNumber;

    /**
     * @var integer Page size.
     */
    public $PageSize;

    /**
     * @param string $ProjectId Project ID.
     * @param array $Filters Filtering parameters: Keyword for task name or ID query, WorkflowId for workflow ID query, FolderId for folder query, InChargeUin for responsible person query, WorkflowExecutionId for workflow execution ID, ExecutionId for task execution ID, TaskId for task ID, ScheduleTimeGreaterEqual / ScheduleTimeLessEqual for planned scheduling time interval
     * @param array $OrderFields Sorting field, sorting field name as follows: start time: CreateTime, end time: EndTime, scheduled dispatch time: ScheduleTime
     * @param integer $PageNumber Page number
     * @param integer $PageSize Page size.
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
