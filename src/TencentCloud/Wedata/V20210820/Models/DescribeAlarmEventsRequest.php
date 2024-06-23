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
 * DescribeAlarmEvents request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getPageNumber() Obtain Current Page
 * @method void setPageNumber(integer $PageNumber) Set Current Page
 * @method integer getPageSize() Obtain Number of records per page
 * @method void setPageSize(integer $PageSize) Set Number of records per page
 * @method array getFilters() Obtain Filter criteria (key can be: AlarmLevel, AlarmIndicator, KeyWord)
 * @method void setFilters(array $Filters) Set Filter criteria (key can be: AlarmLevel, AlarmIndicator, KeyWord)
 * @method array getOrderFields() Obtain Sort Fields (AlarmTime)
 * @method void setOrderFields(array $OrderFields) Set Sort Fields (AlarmTime)
 * @method integer getTaskType() Obtain Type (201 for real-time, 202 for offline)
 * @method void setTaskType(integer $TaskType) Set Type (201 for real-time, 202 for offline)
 * @method string getStartTime() Obtain Start Time
 * @method void setStartTime(string $StartTime) Set Start Time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method integer getMonitorType() Obtain Monitored Object Type (1: All Tasks, 2: Assigned Task, 3: Designated Responsible Person, 4: Specified Resource Group)
 * @method void setMonitorType(integer $MonitorType) Set Monitored Object Type (1: All Tasks, 2: Assigned Task, 3: Designated Responsible Person, 4: Specified Resource Group)
 */
class DescribeAlarmEventsRequest extends AbstractModel
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
     * @var array Filter criteria (key can be: AlarmLevel, AlarmIndicator, KeyWord)
     */
    public $Filters;

    /**
     * @var array Sort Fields (AlarmTime)
     */
    public $OrderFields;

    /**
     * @var integer Type (201 for real-time, 202 for offline)
     */
    public $TaskType;

    /**
     * @var string Start Time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var integer Monitored Object Type (1: All Tasks, 2: Assigned Task, 3: Designated Responsible Person, 4: Specified Resource Group)
     */
    public $MonitorType;

    /**
     * @param string $ProjectId Project ID
     * @param integer $PageNumber Current Page
     * @param integer $PageSize Number of records per page
     * @param array $Filters Filter criteria (key can be: AlarmLevel, AlarmIndicator, KeyWord)
     * @param array $OrderFields Sort Fields (AlarmTime)
     * @param integer $TaskType Type (201 for real-time, 202 for offline)
     * @param string $StartTime Start Time
     * @param string $EndTime End time
     * @param integer $MonitorType Monitored Object Type (1: All Tasks, 2: Assigned Task, 3: Designated Responsible Person, 4: Specified Resource Group)
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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }
    }
}
