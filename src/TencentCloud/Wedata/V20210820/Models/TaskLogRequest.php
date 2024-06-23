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
 * TaskLog request structure.
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method integer getStartTime() Obtain Start timestamp, unit: milliseconds
 * @method void setStartTime(integer $StartTime) Set Start timestamp, unit: milliseconds
 * @method integer getEndTime() Obtain End timestamp, unit: milliseconds
 * @method void setEndTime(integer $EndTime) Set End timestamp, unit: milliseconds
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getLimit() Obtain Number of log pulls, default 100
 * @method void setLimit(integer $Limit) Set Number of log pulls, default 100
 * @method string getOrderType() Obtain Log sorting, desc for descending, asc for ascending
 * @method void setOrderType(string $OrderType) Set Log sorting, desc for descending, asc for ascending
 * @method integer getTaskType() Obtain Real-time task 201 Offline task 202 Default is real-time task
 * @method void setTaskType(integer $TaskType) Set Real-time task 201 Offline task 202 Default is real-time task
 */
class TaskLogRequest extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var integer Start timestamp, unit: milliseconds
     */
    public $StartTime;

    /**
     * @var integer End timestamp, unit: milliseconds
     */
    public $EndTime;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Number of log pulls, default 100
     */
    public $Limit;

    /**
     * @var string Log sorting, desc for descending, asc for ascending
     */
    public $OrderType;

    /**
     * @var integer Real-time task 201 Offline task 202 Default is real-time task
     */
    public $TaskType;

    /**
     * @param string $TaskId Task ID
     * @param integer $StartTime Start timestamp, unit: milliseconds
     * @param integer $EndTime End timestamp, unit: milliseconds
     * @param string $ProjectId Project ID
     * @param integer $Limit Number of log pulls, default 100
     * @param string $OrderType Log sorting, desc for descending, asc for ascending
     * @param integer $TaskType Real-time task 201 Offline task 202 Default is real-time task
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
