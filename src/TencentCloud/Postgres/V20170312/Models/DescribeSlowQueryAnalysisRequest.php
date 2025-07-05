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
 * DescribeSlowQueryAnalysis request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID.
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID.
 * @method string getStartTime() Obtain Query start time, in the format of 2018-01-01 00:00:00. The log is retained for seven days by default, so the start time must fall within the retention period.
 * @method void setStartTime(string $StartTime) Set Query start time, in the format of 2018-01-01 00:00:00. The log is retained for seven days by default, so the start time must fall within the retention period.
 * @method string getEndTime() Obtain Query end time, in the format of 2018-01-01 00:00:00.
 * @method void setEndTime(string $EndTime) Set Query end time, in the format of 2018-01-01 00:00:00.
 * @method string getDatabaseName() Obtain Database name
 * @method void setDatabaseName(string $DatabaseName) Set Database name
 * @method string getOrderBy() Obtain Sorting field, with valid values `[CallNum, CostTime, AvgCostTime]`. The default value is `CallNum`.
 * @method void setOrderBy(string $OrderBy) Set Sorting field, with valid values `[CallNum, CostTime, AvgCostTime]`. The default value is `CallNum`.
 * @method string getOrderByType() Obtain Sorting method, including ascending: `asc` and descending: `desc`. The default value is `desc`.
 * @method void setOrderByType(string $OrderByType) Set Sorting method, including ascending: `asc` and descending: `desc`. The default value is `desc`.
 * @method integer getLimit() Obtain Number of results returned per page, with a value range of 1-100. The default value is `50`.
 * @method void setLimit(integer $Limit) Set Number of results returned per page, with a value range of 1-100. The default value is `50`.
 * @method integer getOffset() Obtain Data offset, which starts from 0. The default value is `0`.
 * @method void setOffset(integer $Offset) Set Data offset, which starts from 0. The default value is `0`.
 */
class DescribeSlowQueryAnalysisRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $DBInstanceId;

    /**
     * @var string Query start time, in the format of 2018-01-01 00:00:00. The log is retained for seven days by default, so the start time must fall within the retention period.
     */
    public $StartTime;

    /**
     * @var string Query end time, in the format of 2018-01-01 00:00:00.
     */
    public $EndTime;

    /**
     * @var string Database name
     */
    public $DatabaseName;

    /**
     * @var string Sorting field, with valid values `[CallNum, CostTime, AvgCostTime]`. The default value is `CallNum`.
     */
    public $OrderBy;

    /**
     * @var string Sorting method, including ascending: `asc` and descending: `desc`. The default value is `desc`.
     */
    public $OrderByType;

    /**
     * @var integer Number of results returned per page, with a value range of 1-100. The default value is `50`.
     */
    public $Limit;

    /**
     * @var integer Data offset, which starts from 0. The default value is `0`.
     */
    public $Offset;

    /**
     * @param string $DBInstanceId Instance ID.
     * @param string $StartTime Query start time, in the format of 2018-01-01 00:00:00. The log is retained for seven days by default, so the start time must fall within the retention period.
     * @param string $EndTime Query end time, in the format of 2018-01-01 00:00:00.
     * @param string $DatabaseName Database name
     * @param string $OrderBy Sorting field, with valid values `[CallNum, CostTime, AvgCostTime]`. The default value is `CallNum`.
     * @param string $OrderByType Sorting method, including ascending: `asc` and descending: `desc`. The default value is `desc`.
     * @param integer $Limit Number of results returned per page, with a value range of 1-100. The default value is `50`.
     * @param integer $Offset Data offset, which starts from 0. The default value is `0`.
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
