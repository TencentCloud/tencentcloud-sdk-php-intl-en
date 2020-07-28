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
 * DescribeDBXlogs request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID in the format of postgres-4wdeb0zv.
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID in the format of postgres-4wdeb0zv.
 * @method string getStartTime() Obtain Query start time in the format of 2018-06-10 17:06:38, which cannot be more than 7 days ago
 * @method void setStartTime(string $StartTime) Set Query start time in the format of 2018-06-10 17:06:38, which cannot be more than 7 days ago
 * @method string getEndTime() Obtain Query end time in the format of 2018-06-10 17:06:38
 * @method void setEndTime(string $EndTime) Set Query end time in the format of 2018-06-10 17:06:38
 * @method integer getOffset() Obtain Page number for data return in paged query. Pagination starts from 0
 * @method void setOffset(integer $Offset) Set Page number for data return in paged query. Pagination starts from 0
 * @method integer getLimit() Obtain Number of entries returned per page in paged query. Value range: 1-100.
 * @method void setLimit(integer $Limit) Set Number of entries returned per page in paged query. Value range: 1-100.
 */
class DescribeDBXlogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of postgres-4wdeb0zv.
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
     * @var integer Page number for data return in paged query. Pagination starts from 0
     */
    public $Offset;

    /**
     * @var integer Number of entries returned per page in paged query. Value range: 1-100.
     */
    public $Limit;

    /**
     * @param string $DBInstanceId Instance ID in the format of postgres-4wdeb0zv.
     * @param string $StartTime Query start time in the format of 2018-06-10 17:06:38, which cannot be more than 7 days ago
     * @param string $EndTime Query end time in the format of 2018-06-10 17:06:38
     * @param integer $Offset Page number for data return in paged query. Pagination starts from 0
     * @param integer $Limit Number of entries returned per page in paged query. Value range: 1-100.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
