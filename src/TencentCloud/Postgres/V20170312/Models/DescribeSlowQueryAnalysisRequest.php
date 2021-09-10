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
 * DescribeSlowQueryAnalysis request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID.
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID.
 * @method string getStartTime() Obtain Start timestamp of the query range in the format of "YYYY-MM-DD HH:mm:ss". The log is retained for seven days by default, so the start timestamp must fall within the retention period.
 * @method void setStartTime(string $StartTime) Set Start timestamp of the query range in the format of "YYYY-MM-DD HH:mm:ss". The log is retained for seven days by default, so the start timestamp must fall within the retention period.
 * @method string getEndTime() Obtain End timestamp of the query range in the format of "YYYY-MM-DD HH:mm:ss".
 * @method void setEndTime(string $EndTime) Set End timestamp of the query range in the format of "YYYY-MM-DD HH:mm:ss".
 * @method string getDatabaseName() Obtain Filter by database name. This parameter is optional.
 * @method void setDatabaseName(string $DatabaseName) Set Filter by database name. This parameter is optional.
 * @method string getOrderBy() Obtain Sort by field. Valid values: `CallNum`, `CostTime`, `AvgCostTime`.
 * @method void setOrderBy(string $OrderBy) Set Sort by field. Valid values: `CallNum`, `CostTime`, `AvgCostTime`.
 * @method string getOrderByType() Obtain Sorting order. Valid values: `asc` (ascending), `desc` (descending).
 * @method void setOrderByType(string $OrderByType) Set Sorting order. Valid values: `asc` (ascending), `desc` (descending).
 * @method integer getLimit() Obtain Number of entries per page. Value range: [1,100].
 * @method void setLimit(integer $Limit) Set Number of entries per page. Value range: [1,100].
 * @method integer getOffset() Obtain Pagination offset. Value range: [0,INF).
 * @method void setOffset(integer $Offset) Set Pagination offset. Value range: [0,INF).
 */
class DescribeSlowQueryAnalysisRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $DBInstanceId;

    /**
     * @var string Start timestamp of the query range in the format of "YYYY-MM-DD HH:mm:ss". The log is retained for seven days by default, so the start timestamp must fall within the retention period.
     */
    public $StartTime;

    /**
     * @var string End timestamp of the query range in the format of "YYYY-MM-DD HH:mm:ss".
     */
    public $EndTime;

    /**
     * @var string Filter by database name. This parameter is optional.
     */
    public $DatabaseName;

    /**
     * @var string Sort by field. Valid values: `CallNum`, `CostTime`, `AvgCostTime`.
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Valid values: `asc` (ascending), `desc` (descending).
     */
    public $OrderByType;

    /**
     * @var integer Number of entries per page. Value range: [1,100].
     */
    public $Limit;

    /**
     * @var integer Pagination offset. Value range: [0,INF).
     */
    public $Offset;

    /**
     * @param string $DBInstanceId Instance ID.
     * @param string $StartTime Start timestamp of the query range in the format of "YYYY-MM-DD HH:mm:ss". The log is retained for seven days by default, so the start timestamp must fall within the retention period.
     * @param string $EndTime End timestamp of the query range in the format of "YYYY-MM-DD HH:mm:ss".
     * @param string $DatabaseName Filter by database name. This parameter is optional.
     * @param string $OrderBy Sort by field. Valid values: `CallNum`, `CostTime`, `AvgCostTime`.
     * @param string $OrderByType Sorting order. Valid values: `asc` (ascending), `desc` (descending).
     * @param integer $Limit Number of entries per page. Value range: [1,100].
     * @param integer $Offset Pagination offset. Value range: [0,INF).
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
