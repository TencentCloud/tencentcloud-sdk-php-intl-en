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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Slow query information of the instance
 *
 * @method integer getTimestamp() Obtain Execution timestamp
 * @method void setTimestamp(integer $Timestamp) Set Execution timestamp
 * @method float getQueryTime() Obtain Execution duration in seconds
 * @method void setQueryTime(float $QueryTime) Set Execution duration in seconds
 * @method string getSqlText() Obtain SQL statement
 * @method void setSqlText(string $SqlText) Set SQL statement
 * @method string getUserHost() Obtain Client host
 * @method void setUserHost(string $UserHost) Set Client host
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method string getDatabase() Obtain Database name
 * @method void setDatabase(string $Database) Set Database name
 * @method float getLockTime() Obtain Lock duration in seconds
 * @method void setLockTime(float $LockTime) Set Lock duration in seconds
 * @method integer getRowsExamined() Obtain Number of scanned rows
 * @method void setRowsExamined(integer $RowsExamined) Set Number of scanned rows
 * @method integer getRowsSent() Obtain Number of returned rows
 * @method void setRowsSent(integer $RowsSent) Set Number of returned rows
 * @method string getSqlTemplate() Obtain SQL template
 * @method void setSqlTemplate(string $SqlTemplate) Set SQL template
 * @method string getSqlMd5() Obtain MD5 value of the SQL statement
 * @method void setSqlMd5(string $SqlMd5) Set MD5 value of the SQL statement
 * @method integer getSyncReadCountRemote() Obtain Remote reading count.
Specifies that the database kernel version is larger than 3.1.12.
 * @method void setSyncReadCountRemote(integer $SyncReadCountRemote) Set Remote reading count.
Specifies that the database kernel version is larger than 3.1.12.
 * @method integer getSyncReadBytesRemote() Obtain Number of remote read bytes.
Specifies that the database kernel version is larger than 3.1.12.
 * @method void setSyncReadBytesRemote(integer $SyncReadBytesRemote) Set Number of remote read bytes.
Specifies that the database kernel version is larger than 3.1.12.
 * @method integer getSyncReadTimeRemote() Obtain Time spent on remote reads (µs).
Specifies that the database kernel version is larger than 3.1.12.
 * @method void setSyncReadTimeRemote(integer $SyncReadTimeRemote) Set Time spent on remote reads (µs).
Specifies that the database kernel version is larger than 3.1.12.
 * @method integer getSyncWriteCountRemote() Obtain Remote write count.
Specifies that the database kernel version is larger than 3.1.12.
 * @method void setSyncWriteCountRemote(integer $SyncWriteCountRemote) Set Remote write count.
Specifies that the database kernel version is larger than 3.1.12.
 * @method integer getSyncWriteBytesRemote() Obtain Specifies the number of remote written bytes.
Specifies that the database kernel version is larger than 3.1.12.
 * @method void setSyncWriteBytesRemote(integer $SyncWriteBytesRemote) Set Specifies the number of remote written bytes.
Specifies that the database kernel version is larger than 3.1.12.
 * @method integer getSyncWriteTimeRemote() Obtain Time spent on remote writing (µs).
Specifies that the database kernel version is larger than 3.1.12.
 * @method void setSyncWriteTimeRemote(integer $SyncWriteTimeRemote) Set Time spent on remote writing (µs).
Specifies that the database kernel version is larger than 3.1.12.
 * @method integer getTrxCommitDelay() Obtain Transaction submission delay (µs).
Specifies that the database kernel version is larger than 3.1.12.
 * @method void setTrxCommitDelay(integer $TrxCommitDelay) Set Transaction submission delay (µs).
Specifies that the database kernel version is larger than 3.1.12.
 */
class SlowQueriesItem extends AbstractModel
{
    /**
     * @var integer Execution timestamp
     */
    public $Timestamp;

    /**
     * @var float Execution duration in seconds
     */
    public $QueryTime;

    /**
     * @var string SQL statement
     */
    public $SqlText;

    /**
     * @var string Client host
     */
    public $UserHost;

    /**
     * @var string Username
     */
    public $UserName;

    /**
     * @var string Database name
     */
    public $Database;

    /**
     * @var float Lock duration in seconds
     */
    public $LockTime;

    /**
     * @var integer Number of scanned rows
     */
    public $RowsExamined;

    /**
     * @var integer Number of returned rows
     */
    public $RowsSent;

    /**
     * @var string SQL template
     */
    public $SqlTemplate;

    /**
     * @var string MD5 value of the SQL statement
     */
    public $SqlMd5;

    /**
     * @var integer Remote reading count.
Specifies that the database kernel version is larger than 3.1.12.
     */
    public $SyncReadCountRemote;

    /**
     * @var integer Number of remote read bytes.
Specifies that the database kernel version is larger than 3.1.12.
     */
    public $SyncReadBytesRemote;

    /**
     * @var integer Time spent on remote reads (µs).
Specifies that the database kernel version is larger than 3.1.12.
     */
    public $SyncReadTimeRemote;

    /**
     * @var integer Remote write count.
Specifies that the database kernel version is larger than 3.1.12.
     */
    public $SyncWriteCountRemote;

    /**
     * @var integer Specifies the number of remote written bytes.
Specifies that the database kernel version is larger than 3.1.12.
     */
    public $SyncWriteBytesRemote;

    /**
     * @var integer Time spent on remote writing (µs).
Specifies that the database kernel version is larger than 3.1.12.
     */
    public $SyncWriteTimeRemote;

    /**
     * @var integer Transaction submission delay (µs).
Specifies that the database kernel version is larger than 3.1.12.
     */
    public $TrxCommitDelay;

    /**
     * @param integer $Timestamp Execution timestamp
     * @param float $QueryTime Execution duration in seconds
     * @param string $SqlText SQL statement
     * @param string $UserHost Client host
     * @param string $UserName Username
     * @param string $Database Database name
     * @param float $LockTime Lock duration in seconds
     * @param integer $RowsExamined Number of scanned rows
     * @param integer $RowsSent Number of returned rows
     * @param string $SqlTemplate SQL template
     * @param string $SqlMd5 MD5 value of the SQL statement
     * @param integer $SyncReadCountRemote Remote reading count.
Specifies that the database kernel version is larger than 3.1.12.
     * @param integer $SyncReadBytesRemote Number of remote read bytes.
Specifies that the database kernel version is larger than 3.1.12.
     * @param integer $SyncReadTimeRemote Time spent on remote reads (µs).
Specifies that the database kernel version is larger than 3.1.12.
     * @param integer $SyncWriteCountRemote Remote write count.
Specifies that the database kernel version is larger than 3.1.12.
     * @param integer $SyncWriteBytesRemote Specifies the number of remote written bytes.
Specifies that the database kernel version is larger than 3.1.12.
     * @param integer $SyncWriteTimeRemote Time spent on remote writing (µs).
Specifies that the database kernel version is larger than 3.1.12.
     * @param integer $TrxCommitDelay Transaction submission delay (µs).
Specifies that the database kernel version is larger than 3.1.12.
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("UserHost",$param) and $param["UserHost"] !== null) {
            $this->UserHost = $param["UserHost"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("LockTime",$param) and $param["LockTime"] !== null) {
            $this->LockTime = $param["LockTime"];
        }

        if (array_key_exists("RowsExamined",$param) and $param["RowsExamined"] !== null) {
            $this->RowsExamined = $param["RowsExamined"];
        }

        if (array_key_exists("RowsSent",$param) and $param["RowsSent"] !== null) {
            $this->RowsSent = $param["RowsSent"];
        }

        if (array_key_exists("SqlTemplate",$param) and $param["SqlTemplate"] !== null) {
            $this->SqlTemplate = $param["SqlTemplate"];
        }

        if (array_key_exists("SqlMd5",$param) and $param["SqlMd5"] !== null) {
            $this->SqlMd5 = $param["SqlMd5"];
        }

        if (array_key_exists("SyncReadCountRemote",$param) and $param["SyncReadCountRemote"] !== null) {
            $this->SyncReadCountRemote = $param["SyncReadCountRemote"];
        }

        if (array_key_exists("SyncReadBytesRemote",$param) and $param["SyncReadBytesRemote"] !== null) {
            $this->SyncReadBytesRemote = $param["SyncReadBytesRemote"];
        }

        if (array_key_exists("SyncReadTimeRemote",$param) and $param["SyncReadTimeRemote"] !== null) {
            $this->SyncReadTimeRemote = $param["SyncReadTimeRemote"];
        }

        if (array_key_exists("SyncWriteCountRemote",$param) and $param["SyncWriteCountRemote"] !== null) {
            $this->SyncWriteCountRemote = $param["SyncWriteCountRemote"];
        }

        if (array_key_exists("SyncWriteBytesRemote",$param) and $param["SyncWriteBytesRemote"] !== null) {
            $this->SyncWriteBytesRemote = $param["SyncWriteBytesRemote"];
        }

        if (array_key_exists("SyncWriteTimeRemote",$param) and $param["SyncWriteTimeRemote"] !== null) {
            $this->SyncWriteTimeRemote = $param["SyncWriteTimeRemote"];
        }

        if (array_key_exists("TrxCommitDelay",$param) and $param["TrxCommitDelay"] !== null) {
            $this->TrxCommitDelay = $param["TrxCommitDelay"];
        }
    }
}
