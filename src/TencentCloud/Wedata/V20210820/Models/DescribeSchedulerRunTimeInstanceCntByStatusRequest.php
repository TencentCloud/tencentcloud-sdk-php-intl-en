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
 * DescribeSchedulerRunTimeInstanceCntByStatus request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getCycleUnit() Obtain Cycle Type
 * @method void setCycleUnit(string $CycleUnit) Set Cycle Type
 * @method string getTimeUnit() Obtain Time Unit e.g.: 12h
 * @method void setTimeUnit(string $TimeUnit) Set Time Unit e.g.: 12h
 * @method string getStartTime() Obtain Start Date: 2023-03-02
 * @method void setStartTime(string $StartTime) Set Start Date: 2023-03-02
 * @method string getEndTime() Obtain Before End Date: 2023-03-20
 * @method void setEndTime(string $EndTime) Set Before End Date: 2023-03-20
 * @method integer getTaskType() Obtain Task Type
 * @method void setTaskType(integer $TaskType) Set Task Type
 * @method string getInCharge() Obtain Person in Charge
 * @method void setInCharge(string $InCharge) Set Person in Charge
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method string getSortItem() Obtain Sort Fields
 * @method void setSortItem(string $SortItem) Set Sort Fields
 * @method string getSortType() Obtain Ascending/Descending Order
 * @method void setSortType(string $SortType) Set Ascending/Descending Order
 */
class DescribeSchedulerRunTimeInstanceCntByStatusRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Cycle Type
     */
    public $CycleUnit;

    /**
     * @var string Time Unit e.g.: 12h
     */
    public $TimeUnit;

    /**
     * @var string Start Date: 2023-03-02
     */
    public $StartTime;

    /**
     * @var string Before End Date: 2023-03-20
     */
    public $EndTime;

    /**
     * @var integer Task Type
     */
    public $TaskType;

    /**
     * @var string Person in Charge
     */
    public $InCharge;

    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @var string Sort Fields
     */
    public $SortItem;

    /**
     * @var string Ascending/Descending Order
     */
    public $SortType;

    /**
     * @param string $ProjectId Project ID
     * @param string $CycleUnit Cycle Type
     * @param string $TimeUnit Time Unit e.g.: 12h
     * @param string $StartTime Start Date: 2023-03-02
     * @param string $EndTime Before End Date: 2023-03-20
     * @param integer $TaskType Task Type
     * @param string $InCharge Person in Charge
     * @param string $WorkflowId Workflow ID
     * @param string $SortItem Sort Fields
     * @param string $SortType Ascending/Descending Order
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

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("SortItem",$param) and $param["SortItem"] !== null) {
            $this->SortItem = $param["SortItem"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }
    }
}
