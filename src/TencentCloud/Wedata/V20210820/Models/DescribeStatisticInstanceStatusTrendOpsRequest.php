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
 * DescribeStatisticInstanceStatusTrendOps request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getTaskTypeId() Obtain Task Type Id
 * @method void setTaskTypeId(string $TaskTypeId) Set Task Type Id
 * @method string getTimeType() Obtain Time Type
 * @method void setTimeType(string $TimeType) Set Time Type
 * @method string getTypeName() Obtain Task Type Name
 * @method void setTypeName(string $TypeName) Set Task Type Name
 * @method string getStartTime() Obtain Start Time
 * @method void setStartTime(string $StartTime) Set Start Time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getExecutionGroupId() Obtain Resource Group ID
 * @method void setExecutionGroupId(string $ExecutionGroupId) Set Resource Group ID
 * @method string getExecutionGroupName() Obtain Resource Group Name
 * @method void setExecutionGroupName(string $ExecutionGroupName) Set Resource Group Name
 * @method string getInCharge() Obtain 1
 * @method void setInCharge(string $InCharge) Set 1
 * @method integer getTaskType() Obtain 1
 * @method void setTaskType(integer $TaskType) Set 1
 * @method array getStateList() Obtain 1
 * @method void setStateList(array $StateList) Set 1
 * @method string getAggregationUnit() Obtain D represents days, H represents hours
 * @method void setAggregationUnit(string $AggregationUnit) Set D represents days, H represents hours
 * @method integer getAverageWindowSize() Obtain 1
 * @method void setAverageWindowSize(integer $AverageWindowSize) Set 1
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 */
class DescribeStatisticInstanceStatusTrendOpsRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Task Type Id
     */
    public $TaskTypeId;

    /**
     * @var string Time Type
     */
    public $TimeType;

    /**
     * @var string Task Type Name
     */
    public $TypeName;

    /**
     * @var string Start Time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string Resource Group ID
     */
    public $ExecutionGroupId;

    /**
     * @var string Resource Group Name
     */
    public $ExecutionGroupName;

    /**
     * @var string 1
     */
    public $InCharge;

    /**
     * @var integer 1
     */
    public $TaskType;

    /**
     * @var array 1
     */
    public $StateList;

    /**
     * @var string D represents days, H represents hours
     */
    public $AggregationUnit;

    /**
     * @var integer 1
     */
    public $AverageWindowSize;

    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @param string $ProjectId Project ID
     * @param string $TaskTypeId Task Type Id
     * @param string $TimeType Time Type
     * @param string $TypeName Task Type Name
     * @param string $StartTime Start Time
     * @param string $EndTime End time
     * @param string $ExecutionGroupId Resource Group ID
     * @param string $ExecutionGroupName Resource Group Name
     * @param string $InCharge 1
     * @param integer $TaskType 1
     * @param array $StateList 1
     * @param string $AggregationUnit D represents days, H represents hours
     * @param integer $AverageWindowSize 1
     * @param string $WorkflowId Workflow ID
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

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TimeType",$param) and $param["TimeType"] !== null) {
            $this->TimeType = $param["TimeType"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExecutionGroupId",$param) and $param["ExecutionGroupId"] !== null) {
            $this->ExecutionGroupId = $param["ExecutionGroupId"];
        }

        if (array_key_exists("ExecutionGroupName",$param) and $param["ExecutionGroupName"] !== null) {
            $this->ExecutionGroupName = $param["ExecutionGroupName"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("StateList",$param) and $param["StateList"] !== null) {
            $this->StateList = $param["StateList"];
        }

        if (array_key_exists("AggregationUnit",$param) and $param["AggregationUnit"] !== null) {
            $this->AggregationUnit = $param["AggregationUnit"];
        }

        if (array_key_exists("AverageWindowSize",$param) and $param["AverageWindowSize"] !== null) {
            $this->AverageWindowSize = $param["AverageWindowSize"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }
    }
}
