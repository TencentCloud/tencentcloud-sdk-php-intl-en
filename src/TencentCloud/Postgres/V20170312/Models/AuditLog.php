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
 * Audit log details
 *
 * @method string getTimestamp() Obtain <p>Log time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimestamp(string $Timestamp) Set <p>Log time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAffectRows() Obtain <p>Number of affected rows</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAffectRows(integer $AffectRows) Set <p>Number of affected rows</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDBName() Obtain <p>Database</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDBName(string $DBName) Set <p>Database</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrCode() Obtain <p>Error code</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrCode(string $ErrCode) Set <p>Error code</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorMessage() Obtain <p>Error message</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorMessage(string $ErrorMessage) Set <p>Error message</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getExecTime() Obtain <p>Execution time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecTime(integer $ExecTime) Set <p>Execution time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHost() Obtain <p>Origin</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHost(string $Host) Set <p>Origin</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain <p>Instance Id</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set <p>Instance Id</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getObjectName() Obtain <p>Object name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjectName(string $ObjectName) Set <p>Object name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getObjectType() Obtain <p>Object type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjectType(string $ObjectType) Set <p>Object type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSql() Obtain <p>sql</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSql(string $Sql) Set <p>sql</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSqlType() Obtain <p>sql type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSqlType(string $SqlType) Set <p>sql type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getThreadId() Obtain <p>thread ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setThreadId(string $ThreadId) Set <p>thread ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUser() Obtain <p>User</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUser(string $User) Set <p>User</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AuditLog extends AbstractModel
{
    /**
     * @var string <p>Log time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Timestamp;

    /**
     * @var integer <p>Number of affected rows</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AffectRows;

    /**
     * @var string <p>Database</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DBName;

    /**
     * @var string <p>Error code</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrCode;

    /**
     * @var string <p>Error message</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMessage;

    /**
     * @var integer <p>Execution time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecTime;

    /**
     * @var string <p>Origin</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Host;

    /**
     * @var string <p>Instance Id</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string <p>Object name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectName;

    /**
     * @var string <p>Object type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectType;

    /**
     * @var string <p>sql</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sql;

    /**
     * @var string <p>sql type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SqlType;

    /**
     * @var string <p>thread ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ThreadId;

    /**
     * @var string <p>User</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $User;

    /**
     * @param string $Timestamp <p>Log time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AffectRows <p>Number of affected rows</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DBName <p>Database</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrCode <p>Error code</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMessage <p>Error message</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ExecTime <p>Execution time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Host <p>Origin</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId <p>Instance Id</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ObjectName <p>Object name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ObjectType <p>Object type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sql <p>sql</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SqlType <p>sql type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ThreadId <p>thread ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $User <p>User</p>
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

        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ObjectName",$param) and $param["ObjectName"] !== null) {
            $this->ObjectName = $param["ObjectName"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("ThreadId",$param) and $param["ThreadId"] !== null) {
            $this->ThreadId = $param["ThreadId"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }
    }
}
