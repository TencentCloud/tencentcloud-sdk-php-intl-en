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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audit log filter criteria. When querying audit logs, filter the returned audit logs by user.
 *
 * @method array getHost() Obtain Client address.
 * @method void setHost(array $Host) Set Client address.
 * @method array getUser() Obtain Username.
 * @method void setUser(array $User) Set Username.
 * @method array getDBName() Obtain Database name.
 * @method void setDBName(array $DBName) Set Database name.
 * @method array getTableName() Obtain Table name.
 * @method void setTableName(array $TableName) Set Table name.
 * @method array getPolicyName() Obtain Audit policy name.
 * @method void setPolicyName(array $PolicyName) Set Audit policy name.
 * @method string getSql() Obtain SQL statement. Fuzzy matching supported.
 * @method void setSql(string $Sql) Set SQL statement. Fuzzy matching supported.
 * @method string getSqlType() Obtain SQL type. Currently supports: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE".
 * @method void setSqlType(string $SqlType) Set SQL type. Currently supports: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE".
 * @method integer getExecTime() Obtain Execution time. Unit: ms. Filter audit logs with an execution time more than this value.
 * @method void setExecTime(integer $ExecTime) Set Execution time. Unit: ms. Filter audit logs with an execution time more than this value.
 * @method integer getAffectRows() Obtain Number of affected rows. Filter audit logs where the number of affected rows is more than this value.
 * @method void setAffectRows(integer $AffectRows) Set Number of affected rows. Filter audit logs where the number of affected rows is more than this value.
 * @method array getSqlTypes() Obtain SQL type. Supports simultaneous query of multiple types. Currently supports: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE".
 * @method void setSqlTypes(array $SqlTypes) Set SQL type. Supports simultaneous query of multiple types. Currently supports: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE".
 * @method array getSqls() Obtain SQL statement. Supports transmission of multiple sql statements.
 * @method void setSqls(array $Sqls) Set SQL statement. Supports transmission of multiple sql statements.
 * @method integer getSentRows() Obtain Number of rows returned.
 * @method void setSentRows(integer $SentRows) Set Number of rows returned.
 * @method array getThreadId() Obtain Thread ID.
 * @method void setThreadId(array $ThreadId) Set Thread ID.
 */
class AuditLogFilter extends AbstractModel
{
    /**
     * @var array Client address.
     */
    public $Host;

    /**
     * @var array Username.
     */
    public $User;

    /**
     * @var array Database name.
     */
    public $DBName;

    /**
     * @var array Table name.
     */
    public $TableName;

    /**
     * @var array Audit policy name.
     */
    public $PolicyName;

    /**
     * @var string SQL statement. Fuzzy matching supported.
     */
    public $Sql;

    /**
     * @var string SQL type. Currently supports: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE".
     */
    public $SqlType;

    /**
     * @var integer Execution time. Unit: ms. Filter audit logs with an execution time more than this value.
     */
    public $ExecTime;

    /**
     * @var integer Number of affected rows. Filter audit logs where the number of affected rows is more than this value.
     */
    public $AffectRows;

    /**
     * @var array SQL type. Supports simultaneous query of multiple types. Currently supports: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE".
     */
    public $SqlTypes;

    /**
     * @var array SQL statement. Supports transmission of multiple sql statements.
     */
    public $Sqls;

    /**
     * @var integer Number of rows returned.
     */
    public $SentRows;

    /**
     * @var array Thread ID.
     */
    public $ThreadId;

    /**
     * @param array $Host Client address.
     * @param array $User Username.
     * @param array $DBName Database name.
     * @param array $TableName Table name.
     * @param array $PolicyName Audit policy name.
     * @param string $Sql SQL statement. Fuzzy matching supported.
     * @param string $SqlType SQL type. Currently supports: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE".
     * @param integer $ExecTime Execution time. Unit: ms. Filter audit logs with an execution time more than this value.
     * @param integer $AffectRows Number of affected rows. Filter audit logs where the number of affected rows is more than this value.
     * @param array $SqlTypes SQL type. Supports simultaneous query of multiple types. Currently supports: "SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE".
     * @param array $Sqls SQL statement. Supports transmission of multiple sql statements.
     * @param integer $SentRows Number of rows returned.
     * @param array $ThreadId Thread ID.
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("SqlTypes",$param) and $param["SqlTypes"] !== null) {
            $this->SqlTypes = $param["SqlTypes"];
        }

        if (array_key_exists("Sqls",$param) and $param["Sqls"] !== null) {
            $this->Sqls = $param["Sqls"];
        }

        if (array_key_exists("SentRows",$param) and $param["SentRows"] !== null) {
            $this->SentRows = $param["SentRows"];
        }

        if (array_key_exists("ThreadId",$param) and $param["ThreadId"] !== null) {
            $this->ThreadId = $param["ThreadId"];
        }
    }
}
