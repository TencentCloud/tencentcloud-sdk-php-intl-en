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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Structured slow log details
 *
 * @method integer getTimestamp() Obtain SQL execution time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTimestamp(integer $Timestamp) Set SQL execution time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getQueryTime() Obtain SQL execution duration in seconds.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setQueryTime(float $QueryTime) Set SQL execution duration in seconds.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getSqlText() Obtain SQL statement.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSqlText(string $SqlText) Set SQL statement.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUserHost() Obtain Client address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserHost(string $UserHost) Set Client address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain Username.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDatabase() Obtain Database name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDatabase(string $Database) Set Database name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getLockTime() Obtain Lock duration in seconds.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setLockTime(float $LockTime) Set Lock duration in seconds.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getRowsExamined() Obtain Number of scanned rows.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRowsExamined(integer $RowsExamined) Set Number of scanned rows.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRowsSent() Obtain Number of rows in result set.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRowsSent(integer $RowsSent) Set Number of rows in result set.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSqlTemplate() Obtain SQL template.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSqlTemplate(string $SqlTemplate) Set SQL template.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMd5() Obtain SQL statement MD5.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMd5(string $Md5) Set SQL statement MD5.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class SlowLogItem extends AbstractModel
{
    /**
     * @var integer SQL execution time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Timestamp;

    /**
     * @var float SQL execution duration in seconds.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $QueryTime;

    /**
     * @var string SQL statement.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SqlText;

    /**
     * @var string Client address.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserHost;

    /**
     * @var string Username.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string Database name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Database;

    /**
     * @var float Lock duration in seconds.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $LockTime;

    /**
     * @var integer Number of scanned rows.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RowsExamined;

    /**
     * @var integer Number of rows in result set.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RowsSent;

    /**
     * @var string SQL template.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SqlTemplate;

    /**
     * @var string SQL statement MD5.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Md5;

    /**
     * @param integer $Timestamp SQL execution time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $QueryTime SQL execution duration in seconds.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $SqlText SQL statement.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UserHost Client address.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UserName Username.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Database Database name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $LockTime Lock duration in seconds.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $RowsExamined Number of scanned rows.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RowsSent Number of rows in result set.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SqlTemplate SQL template.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Md5 SQL statement MD5.
Note: this field may return null, indicating that no valid values can be obtained.
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
