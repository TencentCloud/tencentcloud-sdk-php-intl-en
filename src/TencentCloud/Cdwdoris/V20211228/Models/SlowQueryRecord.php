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
 * Slow log records
 *
 * @method string getOsUser() Obtain User query 
 * @method void setOsUser(string $OsUser) Set User query 
 * @method string getInitialQueryId() Obtain ID query
 * @method void setInitialQueryId(string $InitialQueryId) Set ID query
 * @method string getSql() Obtain SQL statement
 * @method void setSql(string $Sql) Set SQL statement
 * @method string getQueryStartTime() Obtain Start time
 * @method void setQueryStartTime(string $QueryStartTime) Set Start time
 * @method integer getDurationMs() Obtain Execution duration
 * @method void setDurationMs(integer $DurationMs) Set Execution duration
 * @method integer getReadRows() Obtain The number of read rows
 * @method void setReadRows(integer $ReadRows) Set The number of read rows
 * @method integer getResultRows() Obtain Total number of read bytes
 * @method void setResultRows(integer $ResultRows) Set Total number of read bytes
 * @method integer getResultBytes() Obtain Result bytes
 * @method void setResultBytes(integer $ResultBytes) Set Result bytes
 * @method integer getMemoryUsage() Obtain Memory
 * @method void setMemoryUsage(integer $MemoryUsage) Set Memory
 * @method string getInitialAddress() Obtain Initial query IP
 * @method void setInitialAddress(string $InitialAddress) Set Initial query IP
 * @method string getDbName() Obtain Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbName(string $DbName) Set Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsQuery() Obtain Whether it is a query. 0 indicates no, and 1 indicates query statement.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsQuery(integer $IsQuery) Set Whether it is a query. 0 indicates no, and 1 indicates query statement.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getResultBytesMB() Obtain MB format of ResultBytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResultBytesMB(float $ResultBytesMB) Set MB format of ResultBytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getMemoryUsageMB() Obtain MemoryUsage, in MB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemoryUsageMB(float $MemoryUsageMB) Set MemoryUsage, in MB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getDurationSec() Obtain DurationMs, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDurationSec(float $DurationSec) Set DurationMs, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SlowQueryRecord extends AbstractModel
{
    /**
     * @var string User query 
     */
    public $OsUser;

    /**
     * @var string ID query
     */
    public $InitialQueryId;

    /**
     * @var string SQL statement
     */
    public $Sql;

    /**
     * @var string Start time
     */
    public $QueryStartTime;

    /**
     * @var integer Execution duration
     */
    public $DurationMs;

    /**
     * @var integer The number of read rows
     */
    public $ReadRows;

    /**
     * @var integer Total number of read bytes
     */
    public $ResultRows;

    /**
     * @var integer Result bytes
     */
    public $ResultBytes;

    /**
     * @var integer Memory
     */
    public $MemoryUsage;

    /**
     * @var string Initial query IP
     */
    public $InitialAddress;

    /**
     * @var string Database name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbName;

    /**
     * @var integer Whether it is a query. 0 indicates no, and 1 indicates query statement.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsQuery;

    /**
     * @var float MB format of ResultBytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResultBytesMB;

    /**
     * @var float MemoryUsage, in MB
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemoryUsageMB;

    /**
     * @var float DurationMs, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DurationSec;

    /**
     * @param string $OsUser User query 
     * @param string $InitialQueryId ID query
     * @param string $Sql SQL statement
     * @param string $QueryStartTime Start time
     * @param integer $DurationMs Execution duration
     * @param integer $ReadRows The number of read rows
     * @param integer $ResultRows Total number of read bytes
     * @param integer $ResultBytes Result bytes
     * @param integer $MemoryUsage Memory
     * @param string $InitialAddress Initial query IP
     * @param string $DbName Database name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsQuery Whether it is a query. 0 indicates no, and 1 indicates query statement.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $ResultBytesMB MB format of ResultBytes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $MemoryUsageMB MemoryUsage, in MB
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $DurationSec DurationMs, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("OsUser",$param) and $param["OsUser"] !== null) {
            $this->OsUser = $param["OsUser"];
        }

        if (array_key_exists("InitialQueryId",$param) and $param["InitialQueryId"] !== null) {
            $this->InitialQueryId = $param["InitialQueryId"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("QueryStartTime",$param) and $param["QueryStartTime"] !== null) {
            $this->QueryStartTime = $param["QueryStartTime"];
        }

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
        }

        if (array_key_exists("ReadRows",$param) and $param["ReadRows"] !== null) {
            $this->ReadRows = $param["ReadRows"];
        }

        if (array_key_exists("ResultRows",$param) and $param["ResultRows"] !== null) {
            $this->ResultRows = $param["ResultRows"];
        }

        if (array_key_exists("ResultBytes",$param) and $param["ResultBytes"] !== null) {
            $this->ResultBytes = $param["ResultBytes"];
        }

        if (array_key_exists("MemoryUsage",$param) and $param["MemoryUsage"] !== null) {
            $this->MemoryUsage = $param["MemoryUsage"];
        }

        if (array_key_exists("InitialAddress",$param) and $param["InitialAddress"] !== null) {
            $this->InitialAddress = $param["InitialAddress"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("IsQuery",$param) and $param["IsQuery"] !== null) {
            $this->IsQuery = $param["IsQuery"];
        }

        if (array_key_exists("ResultBytesMB",$param) and $param["ResultBytesMB"] !== null) {
            $this->ResultBytesMB = $param["ResultBytesMB"];
        }

        if (array_key_exists("MemoryUsageMB",$param) and $param["MemoryUsageMB"] !== null) {
            $this->MemoryUsageMB = $param["MemoryUsageMB"];
        }

        if (array_key_exists("DurationSec",$param) and $param["DurationSec"] !== null) {
            $this->DurationSec = $param["DurationSec"];
        }
    }
}
