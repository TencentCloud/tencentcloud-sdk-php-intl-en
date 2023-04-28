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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Slow log details
 *
 * @method string getTimestamp() Obtain Slow log start time
 * @method void setTimestamp(string $Timestamp) Set Slow log start time
 * @method string getSqlText() Obtain SQL statement
 * @method void setSqlText(string $SqlText) Set SQL statement
 * @method string getDatabase() Obtain Database
 * @method void setDatabase(string $Database) Set Database
 * @method string getUserName() Obtain User source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set User source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserHost() Obtain IP source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserHost(string $UserHost) Set IP source
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getQueryTime() Obtain Execution time in seconds
 * @method void setQueryTime(integer $QueryTime) Set Execution time in seconds
 * @method integer getLockTime() Obtain Lock time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLockTime(integer $LockTime) Set Lock time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRowsExamined() Obtain Number of scanned rows
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRowsExamined(integer $RowsExamined) Set Number of scanned rows
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRowsSent() Obtain Number of returned rows
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRowsSent(integer $RowsSent) Set Number of returned rows
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SlowLogInfoItem extends AbstractModel
{
    /**
     * @var string Slow log start time
     */
    public $Timestamp;

    /**
     * @var string SQL statement
     */
    public $SqlText;

    /**
     * @var string Database
     */
    public $Database;

    /**
     * @var string User source
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string IP source
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserHost;

    /**
     * @var integer Execution time in seconds
     */
    public $QueryTime;

    /**
     * @var integer Lock time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LockTime;

    /**
     * @var integer Number of scanned rows
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RowsExamined;

    /**
     * @var integer Number of returned rows
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RowsSent;

    /**
     * @param string $Timestamp Slow log start time
     * @param string $SqlText SQL statement
     * @param string $Database Database
     * @param string $UserName User source
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserHost IP source
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $QueryTime Execution time in seconds
     * @param integer $LockTime Lock time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RowsExamined Number of scanned rows
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RowsSent Number of returned rows
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserHost",$param) and $param["UserHost"] !== null) {
            $this->UserHost = $param["UserHost"];
        }

        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
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
    }
}
