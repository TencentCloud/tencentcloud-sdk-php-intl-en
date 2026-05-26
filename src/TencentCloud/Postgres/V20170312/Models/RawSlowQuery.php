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
 * The list of slow query details returned by the `DescribeSlowQueryList` API
 *
 * @method string getRawQuery() Obtain <p>Slow SQL statement</p>
 * @method void setRawQuery(string $RawQuery) Set <p>Slow SQL statement</p>
 * @method string getDatabaseName() Obtain <p>Database for slow SQL queries</p>
 * @method void setDatabaseName(string $DatabaseName) Set <p>Database for slow SQL queries</p>
 * @method float getDuration() Obtain <p>Slow SQL execution duration</p>
 * @method void setDuration(float $Duration) Set <p>Slow SQL execution duration</p>
 * @method string getClientAddr() Obtain <p>Client that executes Slow SQL</p>
 * @method void setClientAddr(string $ClientAddr) Set <p>Client that executes Slow SQL</p>
 * @method string getUserName() Obtain <p>userName that executes slow SQL</p>
 * @method void setUserName(string $UserName) Set <p>userName that executes slow SQL</p>
 * @method string getSessionStartTime() Obtain <p>Start time of Slow SQL execution</p>
 * @method void setSessionStartTime(string $SessionStartTime) Set <p>Start time of Slow SQL execution</p>
 * @method integer getProcessId() Obtain <p>Process ID of the slow SQL being executed</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessId(integer $ProcessId) Set <p>Process ID of the slow SQL being executed</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSessionId() Obtain <p>Session ID that executes slow SQL.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSessionId(string $SessionId) Set <p>Session ID that executes slow SQL.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVirtualTransactionId() Obtain <p>Transaction ID of the executed slow SQL</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVirtualTransactionId(string $VirtualTransactionId) Set <p>Transaction ID of the executed slow SQL</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSqlStateCode() Obtain <p>Status code for executing slow SQL</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSqlStateCode(string $SqlStateCode) Set <p>Status code for executing slow SQL</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain <p>client name that executes slow SQL</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set <p>client name that executes slow SQL</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RawSlowQuery extends AbstractModel
{
    /**
     * @var string <p>Slow SQL statement</p>
     */
    public $RawQuery;

    /**
     * @var string <p>Database for slow SQL queries</p>
     */
    public $DatabaseName;

    /**
     * @var float <p>Slow SQL execution duration</p>
     */
    public $Duration;

    /**
     * @var string <p>Client that executes Slow SQL</p>
     */
    public $ClientAddr;

    /**
     * @var string <p>userName that executes slow SQL</p>
     */
    public $UserName;

    /**
     * @var string <p>Start time of Slow SQL execution</p>
     */
    public $SessionStartTime;

    /**
     * @var integer <p>Process ID of the slow SQL being executed</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessId;

    /**
     * @var string <p>Session ID that executes slow SQL.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SessionId;

    /**
     * @var string <p>Transaction ID of the executed slow SQL</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VirtualTransactionId;

    /**
     * @var string <p>Status code for executing slow SQL</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SqlStateCode;

    /**
     * @var string <p>client name that executes slow SQL</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @param string $RawQuery <p>Slow SQL statement</p>
     * @param string $DatabaseName <p>Database for slow SQL queries</p>
     * @param float $Duration <p>Slow SQL execution duration</p>
     * @param string $ClientAddr <p>Client that executes Slow SQL</p>
     * @param string $UserName <p>userName that executes slow SQL</p>
     * @param string $SessionStartTime <p>Start time of Slow SQL execution</p>
     * @param integer $ProcessId <p>Process ID of the slow SQL being executed</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SessionId <p>Session ID that executes slow SQL.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VirtualTransactionId <p>Transaction ID of the executed slow SQL</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SqlStateCode <p>Status code for executing slow SQL</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName <p>client name that executes slow SQL</p>
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
        if (array_key_exists("RawQuery",$param) and $param["RawQuery"] !== null) {
            $this->RawQuery = $param["RawQuery"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ClientAddr",$param) and $param["ClientAddr"] !== null) {
            $this->ClientAddr = $param["ClientAddr"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("SessionStartTime",$param) and $param["SessionStartTime"] !== null) {
            $this->SessionStartTime = $param["SessionStartTime"];
        }

        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("VirtualTransactionId",$param) and $param["VirtualTransactionId"] !== null) {
            $this->VirtualTransactionId = $param["VirtualTransactionId"];
        }

        if (array_key_exists("SqlStateCode",$param) and $param["SqlStateCode"] !== null) {
            $this->SqlStateCode = $param["SqlStateCode"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }
    }
}
