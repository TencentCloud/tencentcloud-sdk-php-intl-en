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
 * Query and analyze details
 *
 * @method string getInitiator() Obtain Initiating User
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInitiator(string $Initiator) Set Initiating User
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourceAddress() Obtain Access source address

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceAddress(string $SourceAddress) Set Access source address

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInitialRequestId() Obtain Initial request ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInitialRequestId(string $InitialRequestId) Set Initial request ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCatalog() Obtain catalog name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCatalog(string $Catalog) Set catalog name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatabase() Obtain Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabase(string $Database) Set Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSQLType() Obtain SQL Type: 0 is non-query, 1 is query, -1 is unrestricted.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSQLType(string $SQLType) Set SQL Type: 0 is non-query, 1 is query, -1 is unrestricted.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSQLStatement() Obtain SQL statement
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSQLStatement(string $SQLStatement) Set SQL statement
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Execution start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Execution start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDuration() Obtain Runtime (s)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDuration(integer $Duration) Set Runtime (s)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRowsRead() Obtain The number of read rows
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRowsRead(integer $RowsRead) Set The number of read rows
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getDataRead() Obtain Read data volume (MB)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataRead(float $DataRead) Set Read data volume (MB)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getMemoryUsage() Obtain Memory usage (MB)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemoryUsage(float $MemoryUsage) Set Memory usage (MB)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class QueryDetails extends AbstractModel
{
    /**
     * @var string Initiating User
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Initiator;

    /**
     * @var string Access source address

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceAddress;

    /**
     * @var string Initial request ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InitialRequestId;

    /**
     * @var string catalog name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Catalog;

    /**
     * @var string Database name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Database;

    /**
     * @var string SQL Type: 0 is non-query, 1 is query, -1 is unrestricted.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SQLType;

    /**
     * @var string SQL statement
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SQLStatement;

    /**
     * @var string Execution start time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var integer Runtime (s)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Duration;

    /**
     * @var integer The number of read rows
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RowsRead;

    /**
     * @var float Read data volume (MB)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataRead;

    /**
     * @var float Memory usage (MB)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemoryUsage;

    /**
     * @param string $Initiator Initiating User
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourceAddress Access source address

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InitialRequestId Initial request ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Catalog catalog name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Database Database name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SQLType SQL Type: 0 is non-query, 1 is query, -1 is unrestricted.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SQLStatement SQL statement
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Execution start time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Duration Runtime (s)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RowsRead The number of read rows
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $DataRead Read data volume (MB)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $MemoryUsage Memory usage (MB)
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
        if (array_key_exists("Initiator",$param) and $param["Initiator"] !== null) {
            $this->Initiator = $param["Initiator"];
        }

        if (array_key_exists("SourceAddress",$param) and $param["SourceAddress"] !== null) {
            $this->SourceAddress = $param["SourceAddress"];
        }

        if (array_key_exists("InitialRequestId",$param) and $param["InitialRequestId"] !== null) {
            $this->InitialRequestId = $param["InitialRequestId"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("SQLType",$param) and $param["SQLType"] !== null) {
            $this->SQLType = $param["SQLType"];
        }

        if (array_key_exists("SQLStatement",$param) and $param["SQLStatement"] !== null) {
            $this->SQLStatement = $param["SQLStatement"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("RowsRead",$param) and $param["RowsRead"] !== null) {
            $this->RowsRead = $param["RowsRead"];
        }

        if (array_key_exists("DataRead",$param) and $param["DataRead"] !== null) {
            $this->DataRead = $param["DataRead"];
        }

        if (array_key_exists("MemoryUsage",$param) and $param["MemoryUsage"] !== null) {
            $this->MemoryUsage = $param["MemoryUsage"];
        }
    }
}
