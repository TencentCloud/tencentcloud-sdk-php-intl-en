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
 * DescribeDBErrlogs request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID in the format of postgres-5bq3wfjd
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID in the format of postgres-5bq3wfjd
 * @method string getStartTime() Obtain Query start time in the format of 2018-01-01 00:00:00, which cannot be more than 7 days ago
 * @method void setStartTime(string $StartTime) Set Query start time in the format of 2018-01-01 00:00:00, which cannot be more than 7 days ago
 * @method string getEndTime() Obtain Query end time in the format of 2018-01-01 00:00:00
 * @method void setEndTime(string $EndTime) Set Query end time in the format of 2018-01-01 00:00:00
 * @method string getDatabaseName() Obtain Database name
 * @method void setDatabaseName(string $DatabaseName) Set Database name
 * @method array getSearchKeys() Obtain Search keyword
 * @method void setSearchKeys(array $SearchKeys) Set Search keyword
 * @method integer getLimit() Obtain Number of entries returned per page. Value range: 1-100
 * @method void setLimit(integer $Limit) Set Number of entries returned per page. Value range: 1-100
 * @method integer getOffset() Obtain Page number for data return in paged query. Pagination starts from 0
 * @method void setOffset(integer $Offset) Set Page number for data return in paged query. Pagination starts from 0
 */
class DescribeDBErrlogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of postgres-5bq3wfjd
     */
    public $DBInstanceId;

    /**
     * @var string Query start time in the format of 2018-01-01 00:00:00, which cannot be more than 7 days ago
     */
    public $StartTime;

    /**
     * @var string Query end time in the format of 2018-01-01 00:00:00
     */
    public $EndTime;

    /**
     * @var string Database name
     */
    public $DatabaseName;

    /**
     * @var array Search keyword
     */
    public $SearchKeys;

    /**
     * @var integer Number of entries returned per page. Value range: 1-100
     */
    public $Limit;

    /**
     * @var integer Page number for data return in paged query. Pagination starts from 0
     */
    public $Offset;

    /**
     * @param string $DBInstanceId Instance ID in the format of postgres-5bq3wfjd
     * @param string $StartTime Query start time in the format of 2018-01-01 00:00:00, which cannot be more than 7 days ago
     * @param string $EndTime Query end time in the format of 2018-01-01 00:00:00
     * @param string $DatabaseName Database name
     * @param array $SearchKeys Search keyword
     * @param integer $Limit Number of entries returned per page. Value range: 1-100
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

        if (array_key_exists("SearchKeys",$param) and $param["SearchKeys"] !== null) {
            $this->SearchKeys = $param["SearchKeys"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
