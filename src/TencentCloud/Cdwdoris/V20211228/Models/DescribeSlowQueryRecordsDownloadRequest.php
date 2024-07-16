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
 * DescribeSlowQueryRecordsDownload request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getQueryDurationMs() Obtain Slow log time
 * @method void setQueryDurationMs(integer $QueryDurationMs) Set Slow log time
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getDurationMs() Obtain Sort parameters
 * @method void setDurationMs(string $DurationMs) Set Sort parameters
 * @method string getSql() Obtain Query SQL
 * @method void setSql(string $Sql) Set Query SQL
 * @method string getReadRows() Obtain Sort parameters
 * @method void setReadRows(string $ReadRows) Set Sort parameters
 * @method string getResultBytes() Obtain Sort parameters
 * @method void setResultBytes(string $ResultBytes) Set Sort parameters
 * @method string getMemoryUsage() Obtain Sort parameters
 * @method void setMemoryUsage(string $MemoryUsage) Set Sort parameters
 * @method integer getIsQuery() Obtain IsQuery condition
 * @method void setIsQuery(integer $IsQuery) Set IsQuery condition
 * @method array getDbName() Obtain Database name
 * @method void setDbName(array $DbName) Set Database name
 * @method array getCatalogName() Obtain catalog name
 * @method void setCatalogName(array $CatalogName) Set catalog name
 */
class DescribeSlowQueryRecordsDownloadRequest extends AbstractModel
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
     * @var string Sort parameters
     */
    public $DurationMs;

    /**
     * @var string Query SQL
     */
    public $Sql;

    /**
     * @var string Sort parameters
     */
    public $ReadRows;

    /**
     * @var string Sort parameters
     */
    public $ResultBytes;

    /**
     * @var string Sort parameters
     */
    public $MemoryUsage;

    /**
     * @var integer IsQuery condition
     */
    public $IsQuery;

    /**
     * @var array Database name
     */
    public $DbName;

    /**
     * @var array catalog name
     */
    public $CatalogName;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $QueryDurationMs Slow log time
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param string $DurationMs Sort parameters
     * @param string $Sql Query SQL
     * @param string $ReadRows Sort parameters
     * @param string $ResultBytes Sort parameters
     * @param string $MemoryUsage Sort parameters
     * @param integer $IsQuery IsQuery condition
     * @param array $DbName Database name
     * @param array $CatalogName catalog name
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

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
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

        if (array_key_exists("IsQuery",$param) and $param["IsQuery"] !== null) {
            $this->IsQuery = $param["IsQuery"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }
    }
}
