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
 * @method string getDBInstanceId() Obtain Instance ID	
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID	
 * @method string getStartTime() Obtain u200cu200cu200cQuery start time in the format of 2018-01-01 00:00:00. The log is retained for seven days by default, so the start time must fall within the retention period.	
 * @method void setStartTime(string $StartTime) Set u200cu200cu200cQuery start time in the format of 2018-01-01 00:00:00. The log is retained for seven days by default, so the start time must fall within the retention period.	
 * @method string getEndTime() Obtain u200cu200cu200cu200cQuery end time in the format of 2018-01-01 00:00:00	
 * @method void setEndTime(string $EndTime) Set u200cu200cu200cu200cQuery end time in the format of 2018-01-01 00:00:00	
 * @method string getDatabaseName() Obtain Database name
 * @method void setDatabaseName(string $DatabaseName) Set Database name
 * @method array getSearchKeys() Obtain Keywords used for search
 * @method void setSearchKeys(array $SearchKeys) Set Keywords used for search
 * @method integer getLimit() Obtain Number of results returned per page. Value range: 1-100. Default value: `50`.	
 * @method void setLimit(integer $Limit) Set Number of results returned per page. Value range: 1-100. Default value: `50`.	
 * @method integer getOffset() Obtain Data offset, which starts from 0. Default value: `0`.	
 * @method void setOffset(integer $Offset) Set Data offset, which starts from 0. Default value: `0`.	
 */
class DescribeDBErrlogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID	
     */
    public $DBInstanceId;

    /**
     * @var string u200cu200cu200cQuery start time in the format of 2018-01-01 00:00:00. The log is retained for seven days by default, so the start time must fall within the retention period.	
     */
    public $StartTime;

    /**
     * @var string u200cu200cu200cu200cQuery end time in the format of 2018-01-01 00:00:00	
     */
    public $EndTime;

    /**
     * @var string Database name
     */
    public $DatabaseName;

    /**
     * @var array Keywords used for search
     */
    public $SearchKeys;

    /**
     * @var integer Number of results returned per page. Value range: 1-100. Default value: `50`.	
     */
    public $Limit;

    /**
     * @var integer Data offset, which starts from 0. Default value: `0`.	
     */
    public $Offset;

    /**
     * @param string $DBInstanceId Instance ID	
     * @param string $StartTime u200cu200cu200cQuery start time in the format of 2018-01-01 00:00:00. The log is retained for seven days by default, so the start time must fall within the retention period.	
     * @param string $EndTime u200cu200cu200cu200cQuery end time in the format of 2018-01-01 00:00:00	
     * @param string $DatabaseName Database name
     * @param array $SearchKeys Keywords used for search
     * @param integer $Limit Number of results returned per page. Value range: 1-100. Default value: `50`.	
     * @param integer $Offset Data offset, which starts from 0. Default value: `0`.	
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
