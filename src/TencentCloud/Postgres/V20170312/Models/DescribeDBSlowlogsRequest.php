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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBSlowlogs request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID in the format of postgres-lnp6j617
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID in the format of postgres-lnp6j617
 * @method string getStartTime() Obtain Query start time in the format of 2018-06-10 17:06:38, which cannot be more than 7 days ago
 * @method void setStartTime(string $StartTime) Set Query start time in the format of 2018-06-10 17:06:38, which cannot be more than 7 days ago
 * @method string getEndTime() Obtain Query end time in the format of 2018-06-10 17:06:38
 * @method void setEndTime(string $EndTime) Set Query end time in the format of 2018-06-10 17:06:38
 * @method string getDatabaseName() Obtain Database name
 * @method void setDatabaseName(string $DatabaseName) Set Database name
 * @method string getOrderBy() Obtain Metric for sorting. Valid values: `sum_calls` (total number of calls), `sum_cost_time` (total time consumed)
 * @method void setOrderBy(string $OrderBy) Set Metric for sorting. Valid values: `sum_calls` (total number of calls), `sum_cost_time` (total time consumed)
 * @method string getOrderByType() Obtain Sorting order. desc: descending, asc: ascending
 * @method void setOrderByType(string $OrderByType) Set Sorting order. desc: descending, asc: ascending
 * @method integer getLimit() Obtain Number of entries returned per page. Value range: 1-100. Default value: 20.
 * @method void setLimit(integer $Limit) Set Number of entries returned per page. Value range: 1-100. Default value: 20.
 * @method integer getOffset() Obtain Page number for data return in paged query. Pagination starts from 0
 * @method void setOffset(integer $Offset) Set Page number for data return in paged query. Pagination starts from 0
 */
class DescribeDBSlowlogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of postgres-lnp6j617
     */
    public $DBInstanceId;

    /**
     * @var string Query start time in the format of 2018-06-10 17:06:38, which cannot be more than 7 days ago
     */
    public $StartTime;

    /**
     * @var string Query end time in the format of 2018-06-10 17:06:38
     */
    public $EndTime;

    /**
     * @var string Database name
     */
    public $DatabaseName;

    /**
     * @var string Metric for sorting. Valid values: `sum_calls` (total number of calls), `sum_cost_time` (total time consumed)
     */
    public $OrderBy;

    /**
     * @var string Sorting order. desc: descending, asc: ascending
     */
    public $OrderByType;

    /**
     * @var integer Number of entries returned per page. Value range: 1-100. Default value: 20.
     */
    public $Limit;

    /**
     * @var integer Page number for data return in paged query. Pagination starts from 0
     */
    public $Offset;

    /**
     * @param string $DBInstanceId Instance ID in the format of postgres-lnp6j617
     * @param string $StartTime Query start time in the format of 2018-06-10 17:06:38, which cannot be more than 7 days ago
     * @param string $EndTime Query end time in the format of 2018-06-10 17:06:38
     * @param string $DatabaseName Database name
     * @param string $OrderBy Metric for sorting. Valid values: `sum_calls` (total number of calls), `sum_cost_time` (total time consumed)
     * @param string $OrderByType Sorting order. desc: descending, asc: ascending
     * @param integer $Limit Number of entries returned per page. Value range: 1-100. Default value: 20.
     * @param integer $Offset Page number for data return in paged query. Pagination starts from 0
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
