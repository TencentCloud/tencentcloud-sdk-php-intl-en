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
 * DescribeTaskAlarmRegulations request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getPageNumber() Obtain Current Page
 * @method void setPageNumber(integer $PageNumber) Set Current Page
 * @method integer getPageSize() Obtain Number of records per page
 * @method void setPageSize(integer $PageSize) Set Number of records per page
 * @method array getFilters() Obtain Filter criteria (name includes RegularStatus, AlarmLevel, AlarmIndicator, RegularName)
 * @method void setFilters(array $Filters) Set Filter criteria (name includes RegularStatus, AlarmLevel, AlarmIndicator, RegularName)
 * @method array getOrderFields() Obtain Sorting criteria (RegularId)
 * @method void setOrderFields(array $OrderFields) Set Sorting criteria (RegularId)
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method integer getTaskType() Obtain Task Type (201 for real-time task, 202 for offline task)
 * @method void setTaskType(integer $TaskType) Set Task Type (201 for real-time task, 202 for offline task)
 */
class DescribeTaskAlarmRegulationsRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Current Page
     */
    public $PageNumber;

    /**
     * @var integer Number of records per page
     */
    public $PageSize;

    /**
     * @var array Filter criteria (name includes RegularStatus, AlarmLevel, AlarmIndicator, RegularName)
     */
    public $Filters;

    /**
     * @var array Sorting criteria (RegularId)
     */
    public $OrderFields;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var integer Task Type (201 for real-time task, 202 for offline task)
     */
    public $TaskType;

    /**
     * @param string $ProjectId Project ID
     * @param integer $PageNumber Current Page
     * @param integer $PageSize Number of records per page
     * @param array $Filters Filter criteria (name includes RegularStatus, AlarmLevel, AlarmIndicator, RegularName)
     * @param array $OrderFields Sorting criteria (RegularId)
     * @param string $TaskId Task ID
     * @param integer $TaskType Task Type (201 for real-time task, 202 for offline task)
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
