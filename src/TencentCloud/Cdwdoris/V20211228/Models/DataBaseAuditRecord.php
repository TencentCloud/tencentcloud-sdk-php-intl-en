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
 * Database audit
 *
 * @method string getOsUser() Obtain Query user
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOsUser(string $OsUser) Set Query user
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInitialQueryId() Obtain Query ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInitialQueryId(string $InitialQueryId) Set Query ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSql() Obtain SQL statement
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSql(string $Sql) Set SQL statement
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQueryStartTime() Obtain Start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQueryStartTime(string $QueryStartTime) Set Start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDurationMs() Obtain Execution duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDurationMs(integer $DurationMs) Set Execution duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReadRows() Obtain The number of read rows
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReadRows(integer $ReadRows) Set The number of read rows
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getResultRows() Obtain Total number of read bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResultRows(integer $ResultRows) Set Total number of read bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getResultBytes() Obtain Result bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResultBytes(integer $ResultBytes) Set Result bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemoryUsage() Obtain Memory
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemoryUsage(integer $MemoryUsage) Set Memory
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInitialAddress() Obtain Initial query IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInitialAddress(string $InitialAddress) Set Initial query IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDbName() Obtain Database
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbName(string $DbName) Set Database
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSqlType() Obtain SQL type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSqlType(string $SqlType) Set SQL type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCatalog() Obtain Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCatalog(string $Catalog) Set Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DataBaseAuditRecord extends AbstractModel
{
    /**
     * @var string Query user
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OsUser;

    /**
     * @var string Query ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InitialQueryId;

    /**
     * @var string SQL statement
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sql;

    /**
     * @var string Start time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QueryStartTime;

    /**
     * @var integer Execution duration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DurationMs;

    /**
     * @var integer The number of read rows
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReadRows;

    /**
     * @var integer Total number of read bytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResultRows;

    /**
     * @var integer Result bytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResultBytes;

    /**
     * @var integer Memory
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemoryUsage;

    /**
     * @var string Initial query IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InitialAddress;

    /**
     * @var string Database
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbName;

    /**
     * @var string SQL type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SqlType;

    /**
     * @var string Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Catalog;

    /**
     * @param string $OsUser Query user
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InitialQueryId Query ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sql SQL statement
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $QueryStartTime Start time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DurationMs Execution duration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ReadRows The number of read rows
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ResultRows Total number of read bytes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ResultBytes Result bytes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MemoryUsage Memory
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InitialAddress Initial query IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbName Database
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SqlType SQL type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Catalog Catalog name
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

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }
    }
}
