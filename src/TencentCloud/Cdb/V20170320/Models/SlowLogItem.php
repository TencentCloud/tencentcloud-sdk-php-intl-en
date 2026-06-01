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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Structured slow log details
 *
 * @method integer getTimestamp() Obtain Sql execution time. Unix second-level timestamp.
 * @method void setTimestamp(integer $Timestamp) Set Sql execution time. Unix second-level timestamp.
 * @method float getQueryTime() Obtain Execution duration of Sql (seconds).
 * @method void setQueryTime(float $QueryTime) Set Execution duration of Sql (seconds).
 * @method string getSqlText() Obtain Sql statement.
 * @method void setSqlText(string $SqlText) Set Sql statement.
 * @method string getUserHost() Obtain Client IP address.
 * @method void setUserHost(string $UserHost) Set Client IP address.
 * @method string getUserName() Obtain Username.
 * @method void setUserName(string $UserName) Set Username.
 * @method string getDatabase() Obtain Database name.
 * @method void setDatabase(string $Database) Set Database name.
 * @method float getLockTime() Obtain Lock duration (unit: second).
 * @method void setLockTime(float $LockTime) Set Lock duration (unit: second).
 * @method integer getRowsExamined() Obtain Number of scanned rows.
 * @method void setRowsExamined(integer $RowsExamined) Set Number of scanned rows.
 * @method integer getRowsSent() Obtain Result set row count.
 * @method void setRowsSent(integer $RowsSent) Set Result set row count.
 * @method string getSqlTemplate() Obtain Sql Template.
 * @method void setSqlTemplate(string $SqlTemplate) Set Sql Template.
 * @method string getMd5() Obtain md5 of the Sql statement.
 * @method void setMd5(string $Md5) Set md5 of the Sql statement.
 */
class SlowLogItem extends AbstractModel
{
    /**
     * @var integer Sql execution time. Unix second-level timestamp.
     */
    public $Timestamp;

    /**
     * @var float Execution duration of Sql (seconds).
     */
    public $QueryTime;

    /**
     * @var string Sql statement.
     */
    public $SqlText;

    /**
     * @var string Client IP address.
     */
    public $UserHost;

    /**
     * @var string Username.
     */
    public $UserName;

    /**
     * @var string Database name.
     */
    public $Database;

    /**
     * @var float Lock duration (unit: second).
     */
    public $LockTime;

    /**
     * @var integer Number of scanned rows.
     */
    public $RowsExamined;

    /**
     * @var integer Result set row count.
     */
    public $RowsSent;

    /**
     * @var string Sql Template.
     */
    public $SqlTemplate;

    /**
     * @var string md5 of the Sql statement.
     */
    public $Md5;

    /**
     * @param integer $Timestamp Sql execution time. Unix second-level timestamp.
     * @param float $QueryTime Execution duration of Sql (seconds).
     * @param string $SqlText Sql statement.
     * @param string $UserHost Client IP address.
     * @param string $UserName Username.
     * @param string $Database Database name.
     * @param float $LockTime Lock duration (unit: second).
     * @param integer $RowsExamined Number of scanned rows.
     * @param integer $RowsSent Result set row count.
     * @param string $SqlTemplate Sql Template.
     * @param string $Md5 md5 of the Sql statement.
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

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }
    }
}
