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
 * Error log details
 *
 * @method string getUserName() Obtain <p>userName</p>
 * @method void setUserName(string $UserName) Set <p>userName</p>
 * @method string getDatabase() Obtain <p>Database name</p>
 * @method void setDatabase(string $Database) Set <p>Database name</p>
 * @method string getErrTime() Obtain <p>Error occurrence time</p>
 * @method void setErrTime(string $ErrTime) Set <p>Error occurrence time</p>
 * @method string getErrMsg() Obtain <p>Error message</p>
 * @method void setErrMsg(string $ErrMsg) Set <p>Error message</p>
 * @method integer getProcessId() Obtain <p>Process ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessId(integer $ProcessId) Set <p>Process ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClientAddr() Obtain <p>client address</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientAddr(string $ClientAddr) Set <p>client address</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSessionId() Obtain <p>Session ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSessionId(string $SessionId) Set <p>Session ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSessionStartTime() Obtain <p>Session start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSessionStartTime(string $SessionStartTime) Set <p>Session start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVirtualTransactionId() Obtain <p>Virtual transaction ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVirtualTransactionId(string $VirtualTransactionId) Set <p>Virtual transaction ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSqlStateCode() Obtain <p>SQLSTATE error code</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSqlStateCode(string $SqlStateCode) Set <p>SQLSTATE error code</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain <p>client application name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set <p>client application name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ErrLogDetail extends AbstractModel
{
    /**
     * @var string <p>userName</p>
     */
    public $UserName;

    /**
     * @var string <p>Database name</p>
     */
    public $Database;

    /**
     * @var string <p>Error occurrence time</p>
     */
    public $ErrTime;

    /**
     * @var string <p>Error message</p>
     */
    public $ErrMsg;

    /**
     * @var integer <p>Process ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessId;

    /**
     * @var string <p>client address</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientAddr;

    /**
     * @var string <p>Session ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SessionId;

    /**
     * @var string <p>Session start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SessionStartTime;

    /**
     * @var string <p>Virtual transaction ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VirtualTransactionId;

    /**
     * @var string <p>SQLSTATE error code</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SqlStateCode;

    /**
     * @var string <p>client application name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @param string $UserName <p>userName</p>
     * @param string $Database <p>Database name</p>
     * @param string $ErrTime <p>Error occurrence time</p>
     * @param string $ErrMsg <p>Error message</p>
     * @param integer $ProcessId <p>Process ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClientAddr <p>client address</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SessionId <p>Session ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SessionStartTime <p>Session start time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VirtualTransactionId <p>Virtual transaction ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SqlStateCode <p>SQLSTATE error code</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName <p>client application name</p>
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("ErrTime",$param) and $param["ErrTime"] !== null) {
            $this->ErrTime = $param["ErrTime"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("ClientAddr",$param) and $param["ClientAddr"] !== null) {
            $this->ClientAddr = $param["ClientAddr"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionStartTime",$param) and $param["SessionStartTime"] !== null) {
            $this->SessionStartTime = $param["SessionStartTime"];
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
