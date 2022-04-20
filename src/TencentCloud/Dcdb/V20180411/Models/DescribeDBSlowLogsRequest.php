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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBSlowLogs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of dcdbt-hw0qj6m1
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of dcdbt-hw0qj6m1
 * @method integer getOffset() Obtain Data entry number starting from which to return results
 * @method void setOffset(integer $Offset) Set Data entry number starting from which to return results
 * @method integer getLimit() Obtain Number of results to be returned
 * @method void setLimit(integer $Limit) Set Number of results to be returned
 * @method string getStartTime() Obtain Query start time in the format of 2016-07-23 14:55:20
 * @method void setStartTime(string $StartTime) Set Query start time in the format of 2016-07-23 14:55:20
 * @method string getShardId() Obtain Shard ID of the instance in the format of shard-53ima8ln
 * @method void setShardId(string $ShardId) Set Shard ID of the instance in the format of shard-53ima8ln
 * @method string getEndTime() Obtain Query end time in the format of 2016-08-22 14:55:20. If this parameter is left empty, the current time will be used as the query end time.
 * @method void setEndTime(string $EndTime) Set Query end time in the format of 2016-08-22 14:55:20. If this parameter is left empty, the current time will be used as the query end time.
 * @method string getDb() Obtain Specific name of the database to be queried
 * @method void setDb(string $Db) Set Specific name of the database to be queried
 * @method string getOrderBy() Obtain Sorting metric. Valid values: `query_time_sum`, `query_count`. Default value: `query_time_sum`
 * @method void setOrderBy(string $OrderBy) Set Sorting metric. Valid values: `query_time_sum`, `query_count`. Default value: `query_time_sum`
 * @method string getOrderByType() Obtain Sorting order. Valid values: `desc` (descending), `asc` (ascending). Default value: `desc`
 * @method void setOrderByType(string $OrderByType) Set Sorting order. Valid values: `desc` (descending), `asc` (ascending). Default value: `desc`
 * @method integer getSlave() Obtain Query slow queries from either the source or the replica. Valid values: `0` (source), `1` (replica). Default value: `0`
 * @method void setSlave(integer $Slave) Set Query slow queries from either the source or the replica. Valid values: `0` (source), `1` (replica). Default value: `0`
 */
class DescribeDBSlowLogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of dcdbt-hw0qj6m1
     */
    public $InstanceId;

    /**
     * @var integer Data entry number starting from which to return results
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned
     */
    public $Limit;

    /**
     * @var string Query start time in the format of 2016-07-23 14:55:20
     */
    public $StartTime;

    /**
     * @var string Shard ID of the instance in the format of shard-53ima8ln
     */
    public $ShardId;

    /**
     * @var string Query end time in the format of 2016-08-22 14:55:20. If this parameter is left empty, the current time will be used as the query end time.
     */
    public $EndTime;

    /**
     * @var string Specific name of the database to be queried
     */
    public $Db;

    /**
     * @var string Sorting metric. Valid values: `query_time_sum`, `query_count`. Default value: `query_time_sum`
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Valid values: `desc` (descending), `asc` (ascending). Default value: `desc`
     */
    public $OrderByType;

    /**
     * @var integer Query slow queries from either the source or the replica. Valid values: `0` (source), `1` (replica). Default value: `0`
     */
    public $Slave;

    /**
     * @param string $InstanceId Instance ID in the format of dcdbt-hw0qj6m1
     * @param integer $Offset Data entry number starting from which to return results
     * @param integer $Limit Number of results to be returned
     * @param string $StartTime Query start time in the format of 2016-07-23 14:55:20
     * @param string $ShardId Shard ID of the instance in the format of shard-53ima8ln
     * @param string $EndTime Query end time in the format of 2016-08-22 14:55:20. If this parameter is left empty, the current time will be used as the query end time.
     * @param string $Db Specific name of the database to be queried
     * @param string $OrderBy Sorting metric. Valid values: `query_time_sum`, `query_count`. Default value: `query_time_sum`
     * @param string $OrderByType Sorting order. Valid values: `desc` (descending), `asc` (ascending). Default value: `desc`
     * @param integer $Slave Query slow queries from either the source or the replica. Valid values: `0` (source), `1` (replica). Default value: `0`
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Slave",$param) and $param["Slave"] !== null) {
            $this->Slave = $param["Slave"];
        }
    }
}
