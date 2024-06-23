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
 * DescribeTaskByStatusReport request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getType() Obtain Time Type
 * @method void setType(string $Type) Set Time Type
 * @method string getTaskType() Obtain Type
 * @method void setTaskType(string $TaskType) Set Type
 * @method string getTypeName() Obtain Type Name
 * @method void setTypeName(string $TypeName) Set Type Name
 * @method string getStartTime() Obtain Start Time
 * @method void setStartTime(string $StartTime) Set Start Time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getAggregationUnit() Obtain Aggregation Unit, H Hours
 * @method void setAggregationUnit(string $AggregationUnit) Set Aggregation Unit, H Hours
 * @method string getCycleUnit() Obtain Cycle
 * @method void setCycleUnit(string $CycleUnit) Set Cycle
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method string getInCharge() Obtain Person in Charge
 * @method void setInCharge(string $InCharge) Set Person in Charge
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 */
class DescribeTaskByStatusReportRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Time Type
     */
    public $Type;

    /**
     * @var string Type
     */
    public $TaskType;

    /**
     * @var string Type Name
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
     * @var string Aggregation Unit, H Hours
     */
    public $AggregationUnit;

    /**
     * @var string Cycle
     */
    public $CycleUnit;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var string Person in Charge
     */
    public $InCharge;

    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @param string $ProjectId Project ID
     * @param string $Type Time Type
     * @param string $TaskType Type
     * @param string $TypeName Type Name
     * @param string $StartTime Start Time
     * @param string $EndTime End time
     * @param string $AggregationUnit Aggregation Unit, H Hours
     * @param string $CycleUnit Cycle
     * @param string $Status Status
     * @param string $InCharge Person in Charge
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
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

        if (array_key_exists("AggregationUnit",$param) and $param["AggregationUnit"] !== null) {
            $this->AggregationUnit = $param["AggregationUnit"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }
    }
}
