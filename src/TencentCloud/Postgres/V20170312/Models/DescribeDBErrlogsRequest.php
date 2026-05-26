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
 * DescribeDBErrlogs request structure.
 *
 * @method string getDBInstanceId() Obtain <p>Instance ID. It can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
 * @method void setDBInstanceId(string $DBInstanceId) Set <p>Instance ID. It can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
 * @method string getStartTime() Obtain <p>Query start time, such as 2018-01-01 00:00:00. Log retention time defaults to 7 days. Start time cannot exceed the retention period.</p>
 * @method void setStartTime(string $StartTime) Set <p>Query start time, such as 2018-01-01 00:00:00. Log retention time defaults to 7 days. Start time cannot exceed the retention period.</p>
 * @method string getEndTime() Obtain <p>Query end time, in the format of 2018-01-01 00:00:00.</p>
 * @method void setEndTime(string $EndTime) Set <p>Query end time, in the format of 2018-01-01 00:00:00.</p>
 * @method string getDatabaseName() Obtain <p>Database name</p>
 * @method void setDatabaseName(string $DatabaseName) Set <p>Database name</p>
 * @method array getSearchKeys() Obtain <p>Search keywords.</p>
 * @method void setSearchKeys(array $SearchKeys) Set <p>Search keywords.</p>
 * @method integer getLimit() Obtain <p>Number of results returned per page, with a value range of 1-100. The default value is `50`.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of results returned per page, with a value range of 1-100. The default value is `50`.</p>
 * @method integer getOffset() Obtain <p>Data offset, which starts from 0. The default value is 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Data offset, which starts from 0. The default value is 0.</p>
 * @method array getLogFilters() Obtain <p>Log filter criteria. Format is [{Type: "ApplicationName", Compare: "INC", Value: ["123"]}].</p>
 * @method void setLogFilters(array $LogFilters) Set <p>Log filter criteria. Format is [{Type: "ApplicationName", Compare: "INC", Value: ["123"]}].</p>
 */
class DescribeDBErrlogsRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID. It can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>Query start time, such as 2018-01-01 00:00:00. Log retention time defaults to 7 days. Start time cannot exceed the retention period.</p>
     */
    public $StartTime;

    /**
     * @var string <p>Query end time, in the format of 2018-01-01 00:00:00.</p>
     */
    public $EndTime;

    /**
     * @var string <p>Database name</p>
     */
    public $DatabaseName;

    /**
     * @var array <p>Search keywords.</p>
     */
    public $SearchKeys;

    /**
     * @var integer <p>Number of results returned per page, with a value range of 1-100. The default value is `50`.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Data offset, which starts from 0. The default value is 0.</p>
     */
    public $Offset;

    /**
     * @var array <p>Log filter criteria. Format is [{Type: "ApplicationName", Compare: "INC", Value: ["123"]}].</p>
     */
    public $LogFilters;

    /**
     * @param string $DBInstanceId <p>Instance ID. It can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
     * @param string $StartTime <p>Query start time, such as 2018-01-01 00:00:00. Log retention time defaults to 7 days. Start time cannot exceed the retention period.</p>
     * @param string $EndTime <p>Query end time, in the format of 2018-01-01 00:00:00.</p>
     * @param string $DatabaseName <p>Database name</p>
     * @param array $SearchKeys <p>Search keywords.</p>
     * @param integer $Limit <p>Number of results returned per page, with a value range of 1-100. The default value is `50`.</p>
     * @param integer $Offset <p>Data offset, which starts from 0. The default value is 0.</p>
     * @param array $LogFilters <p>Log filter criteria. Format is [{Type: "ApplicationName", Compare: "INC", Value: ["123"]}].</p>
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

        if (array_key_exists("LogFilters",$param) and $param["LogFilters"] !== null) {
            $this->LogFilters = [];
            foreach ($param["LogFilters"] as $key => $value){
                $obj = new LogFilter();
                $obj->deserialize($value);
                array_push($this->LogFilters, $obj);
            }
        }
    }
}
