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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks request structure.
 *
 * @method integer getTaskId() Obtain Query by task ID. the FlowId and TaskId returned in other cloud apis are equivalent.
 * @method void setTaskId(integer $TaskId) Set Query by task ID. the FlowId and TaskId returned in other cloud apis are equivalent.
 * @method string getDBInstanceId() Obtain Query by database instance ID.
 * @method void setDBInstanceId(string $DBInstanceId) Set Query by database instance ID.
 * @method string getMinStartTime() Obtain Earliest start time of the task, such as 2024-08-23 00:00:00. default shows data within the last 180 days.
 * @method void setMinStartTime(string $MinStartTime) Set Earliest start time of the task, such as 2024-08-23 00:00:00. default shows data within the last 180 days.
 * @method string getMaxStartTime() Obtain Latest start time of the task, such as 2024-08-23 00:00:00, defaults to the current time.
 * @method void setMaxStartTime(string $MaxStartTime) Set Latest start time of the task, such as 2024-08-23 00:00:00, defaults to the current time.
 * @method integer getLimit() Obtain Number of results displayed per page. value range 1-100. default 20.
 * @method void setLimit(integer $Limit) Set Number of results displayed per page. value range 1-100. default 20.
 * @method integer getOffset() Obtain Data offset, starting from 0.
 * @method void setOffset(integer $Offset) Set Data offset, starting from 0.
 * @method string getOrderBy() Obtain Sorting field, supports StartTime and EndTime. defaults to StartTime.
 * @method void setOrderBy(string $OrderBy) Set Sorting field, supports StartTime and EndTime. defaults to StartTime.
 * @method string getOrderByType() Obtain Specifies the sorting method, including ascending: `asc` and descending: `desc`. defaults to `desc`.
 * @method void setOrderByType(string $OrderByType) Set Specifies the sorting method, including ascending: `asc` and descending: `desc`. defaults to `desc`.
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var integer Query by task ID. the FlowId and TaskId returned in other cloud apis are equivalent.
     */
    public $TaskId;

    /**
     * @var string Query by database instance ID.
     */
    public $DBInstanceId;

    /**
     * @var string Earliest start time of the task, such as 2024-08-23 00:00:00. default shows data within the last 180 days.
     */
    public $MinStartTime;

    /**
     * @var string Latest start time of the task, such as 2024-08-23 00:00:00, defaults to the current time.
     */
    public $MaxStartTime;

    /**
     * @var integer Number of results displayed per page. value range 1-100. default 20.
     */
    public $Limit;

    /**
     * @var integer Data offset, starting from 0.
     */
    public $Offset;

    /**
     * @var string Sorting field, supports StartTime and EndTime. defaults to StartTime.
     */
    public $OrderBy;

    /**
     * @var string Specifies the sorting method, including ascending: `asc` and descending: `desc`. defaults to `desc`.
     */
    public $OrderByType;

    /**
     * @param integer $TaskId Query by task ID. the FlowId and TaskId returned in other cloud apis are equivalent.
     * @param string $DBInstanceId Query by database instance ID.
     * @param string $MinStartTime Earliest start time of the task, such as 2024-08-23 00:00:00. default shows data within the last 180 days.
     * @param string $MaxStartTime Latest start time of the task, such as 2024-08-23 00:00:00, defaults to the current time.
     * @param integer $Limit Number of results displayed per page. value range 1-100. default 20.
     * @param integer $Offset Data offset, starting from 0.
     * @param string $OrderBy Sorting field, supports StartTime and EndTime. defaults to StartTime.
     * @param string $OrderByType Specifies the sorting method, including ascending: `asc` and descending: `desc`. defaults to `desc`.
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

        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("MinStartTime",$param) and $param["MinStartTime"] !== null) {
            $this->MinStartTime = $param["MinStartTime"];
        }

        if (array_key_exists("MaxStartTime",$param) and $param["MaxStartTime"] !== null) {
            $this->MaxStartTime = $param["MaxStartTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
