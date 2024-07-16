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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowQueryRecords request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getQueryDurationMs() Obtain Slow log time
 * @method void setQueryDurationMs(integer $QueryDurationMs) Set Slow log time
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method integer getPageSize() Obtain Paging
 * @method void setPageSize(integer $PageSize) Set Paging
 * @method integer getPageNum() Obtain Paging
 * @method void setPageNum(integer $PageNum) Set Paging
 * @method string getDurationMs() Obtain Sort parameters
 * @method void setDurationMs(string $DurationMs) Set Sort parameters
 * @method array getDbName() Obtain Database name
 * @method void setDbName(array $DbName) Set Database name
 * @method integer getIsQuery() Obtain Whether it is a query. 0 indicates no, and 1 indicates yes.
 * @method void setIsQuery(integer $IsQuery) Set Whether it is a query. 0 indicates no, and 1 indicates yes.
 * @method array getCatalogName() Obtain catalog name
 * @method void setCatalogName(array $CatalogName) Set catalog name
 * @method string getSql() Obtain SQL name
 * @method void setSql(string $Sql) Set SQL name
 * @method string getReadRows() Obtain ReadRows sort field
 * @method void setReadRows(string $ReadRows) Set ReadRows sort field
 * @method string getResultBytes() Obtain ResultBytes sort field
 * @method void setResultBytes(string $ResultBytes) Set ResultBytes sort field
 * @method string getMemoryUsage() Obtain MemoryUsage sort field
 * @method void setMemoryUsage(string $MemoryUsage) Set MemoryUsage sort field
 */
class DescribeSlowQueryRecordsRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Slow log time
     */
    public $QueryDurationMs;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var integer Paging
     */
    public $PageSize;

    /**
     * @var integer Paging
     */
    public $PageNum;

    /**
     * @var string Sort parameters
     */
    public $DurationMs;

    /**
     * @var array Database name
     */
    public $DbName;

    /**
     * @var integer Whether it is a query. 0 indicates no, and 1 indicates yes.
     */
    public $IsQuery;

    /**
     * @var array catalog name
     */
    public $CatalogName;

    /**
     * @var string SQL name
     */
    public $Sql;

    /**
     * @var string ReadRows sort field
     */
    public $ReadRows;

    /**
     * @var string ResultBytes sort field
     */
    public $ResultBytes;

    /**
     * @var string MemoryUsage sort field
     */
    public $MemoryUsage;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $QueryDurationMs Slow log time
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param integer $PageSize Paging
     * @param integer $PageNum Paging
     * @param string $DurationMs Sort parameters
     * @param array $DbName Database name
     * @param integer $IsQuery Whether it is a query. 0 indicates no, and 1 indicates yes.
     * @param array $CatalogName catalog name
     * @param string $Sql SQL name
     * @param string $ReadRows ReadRows sort field
     * @param string $ResultBytes ResultBytes sort field
     * @param string $MemoryUsage MemoryUsage sort field
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

        if (array_key_exists("QueryDurationMs",$param) and $param["QueryDurationMs"] !== null) {
            $this->QueryDurationMs = $param["QueryDurationMs"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("IsQuery",$param) and $param["IsQuery"] !== null) {
            $this->IsQuery = $param["IsQuery"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("ReadRows",$param) and $param["ReadRows"] !== null) {
            $this->ReadRows = $param["ReadRows"];
        }

        if (array_key_exists("ResultBytes",$param) and $param["ResultBytes"] !== null) {
            $this->ResultBytes = $param["ResultBytes"];
        }

        if (array_key_exists("MemoryUsage",$param) and $param["MemoryUsage"] !== null) {
            $this->MemoryUsage = $param["MemoryUsage"];
        }
    }
}
