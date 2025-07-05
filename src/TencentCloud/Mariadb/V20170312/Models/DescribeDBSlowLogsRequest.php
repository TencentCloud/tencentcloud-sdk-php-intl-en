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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBSlowLogs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of `tdsql-ow728lmc`.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of `tdsql-ow728lmc`.
 * @method integer getOffset() Obtain Data entry number starting from which to return results
 * @method void setOffset(integer $Offset) Set Data entry number starting from which to return results
 * @method integer getLimit() Obtain Number of results to be returned
 * @method void setLimit(integer $Limit) Set Number of results to be returned
 * @method string getStartTime() Obtain Query start time in the format of 2016-07-23 14:55:20
 * @method void setStartTime(string $StartTime) Set Query start time in the format of 2016-07-23 14:55:20
 * @method string getEndTime() Obtain Query end time in the format of 2016-08-22 14:55:20
 * @method void setEndTime(string $EndTime) Set Query end time in the format of 2016-08-22 14:55:20
 * @method string getDb() Obtain Specific name of the database to be queried
 * @method void setDb(string $Db) Set Specific name of the database to be queried
 * @method string getOrderBy() Obtain Sorting metric. Valid values: query_time_sum, query_count
 * @method void setOrderBy(string $OrderBy) Set Sorting metric. Valid values: query_time_sum, query_count
 * @method string getOrderByType() Obtain Sorting order. Valid values: desc, asc
 * @method void setOrderByType(string $OrderByType) Set Sorting order. Valid values: desc, asc
 * @method integer getSlave() Obtain Query slow queries from either the primary or the replica. Valid values: 0 (primary), 1 (replica)
 * @method void setSlave(integer $Slave) Set Query slow queries from either the primary or the replica. Valid values: 0 (primary), 1 (replica)
 */
class DescribeDBSlowLogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of `tdsql-ow728lmc`.
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
     * @var string Query end time in the format of 2016-08-22 14:55:20
     */
    public $EndTime;

    /**
     * @var string Specific name of the database to be queried
     */
    public $Db;

    /**
     * @var string Sorting metric. Valid values: query_time_sum, query_count
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Valid values: desc, asc
     */
    public $OrderByType;

    /**
     * @var integer Query slow queries from either the primary or the replica. Valid values: 0 (primary), 1 (replica)
     */
    public $Slave;

    /**
     * @param string $InstanceId Instance ID in the format of `tdsql-ow728lmc`.
     * @param integer $Offset Data entry number starting from which to return results
     * @param integer $Limit Number of results to be returned
     * @param string $StartTime Query start time in the format of 2016-07-23 14:55:20
     * @param string $EndTime Query end time in the format of 2016-08-22 14:55:20
     * @param string $Db Specific name of the database to be queried
     * @param string $OrderBy Sorting metric. Valid values: query_time_sum, query_count
     * @param string $OrderByType Sorting order. Valid values: desc, asc
     * @param integer $Slave Query slow queries from either the primary or the replica. Valid values: 0 (primary), 1 (replica)
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
