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
 * Filter condition for an audit log, which is used by users to filter the returned audit logs when querying them.
 *
 * @method array getHost() Obtain Client address
 * @method void setHost(array $Host) Set Client address
 * @method array getUser() Obtain Username
 * @method void setUser(array $User) Set Username
 * @method array getDBName() Obtain 
 * @method void setDBName(array $DBName) Set 
 * @method array getTableName() Obtain Table name
 * @method void setTableName(array $TableName) Set Table name
 * @method array getPolicyName() Obtain Audit policy name
 * @method void setPolicyName(array $PolicyName) Set Audit policy name
 * @method string getSql() Obtain 
 * @method void setSql(string $Sql) Set 
 * @method string getSqlType() Obtain 
 * @method void setSqlType(string $SqlType) Set 
 * @method integer getExecTime() Obtain Execution time in ms, which is used to filter the audit log with execution time greater than this value.
 * @method void setExecTime(integer $ExecTime) Set Execution time in ms, which is used to filter the audit log with execution time greater than this value.
 * @method integer getAffectRows() Obtain Number of affected rows, which is used to filter the audit log with affected rows greater than this value.
 * @method void setAffectRows(integer $AffectRows) Set Number of affected rows, which is used to filter the audit log with affected rows greater than this value.
 * @method array getSqlTypes() Obtain SQL type (Multiple types can be queried at same time). Valid values: `SELECT`, `INSERT`, `UPDATE`, `DELETE`, `CREATE`, `DROP`, `ALTER`, `SET`, `REPLACE`, `EXECUTE`.
 * @method void setSqlTypes(array $SqlTypes) Set SQL type (Multiple types can be queried at same time). Valid values: `SELECT`, `INSERT`, `UPDATE`, `DELETE`, `CREATE`, `DROP`, `ALTER`, `SET`, `REPLACE`, `EXECUTE`.
 * @method array getSqls() Obtain SQL statement. Multiple SQL statements can be passed in.
 * @method void setSqls(array $Sqls) Set SQL statement. Multiple SQL statements can be passed in.
 * @method string getAffectRowsSection() Obtain Number of rows affected in the format of M-N, such as 10-200.
 * @method void setAffectRowsSection(string $AffectRowsSection) Set Number of rows affected in the format of M-N, such as 10-200.
 * @method string getSentRowsSection() Obtain Number of rows returned in the format of M-N, such as 10-200.
 * @method void setSentRowsSection(string $SentRowsSection) Set Number of rows returned in the format of M-N, such as 10-200.
 * @method string getExecTimeSection() Obtain Execution time in the format of M-N, such as 10-200.
 * @method void setExecTimeSection(string $ExecTimeSection) Set Execution time in the format of M-N, such as 10-200.
 * @method string getLockWaitTimeSection() Obtain Lock wait time in the format of M-N, such as 10-200.
 * @method void setLockWaitTimeSection(string $LockWaitTimeSection) Set Lock wait time in the format of M-N, such as 10-200.
 * @method string getIoWaitTimeSection() Obtain IO wait time in the format of M-N, such as 10-200.
 * @method void setIoWaitTimeSection(string $IoWaitTimeSection) Set IO wait time in the format of M-N, such as 10-200.
 * @method string getTransactionLivingTimeSection() Obtain Transaction duration in the format of M-N, such as 10-200.
 * @method void setTransactionLivingTimeSection(string $TransactionLivingTimeSection) Set Transaction duration in the format of M-N, such as 10-200.
 * @method array getThreadId() Obtain Thread ID
 * @method void setThreadId(array $ThreadId) Set Thread ID
 * @method integer getSentRows() Obtain Number of returned rows,  which is used to filter the audit log with affected rows greater than this value.
 * @method void setSentRows(integer $SentRows) Set Number of returned rows,  which is used to filter the audit log with affected rows greater than this value.
 * @method array getErrCode() Obtain MySQL error codes
 * @method void setErrCode(array $ErrCode) Set MySQL error codes
 */
class AuditLogFilter extends AbstractModel
{
    /**
     * @var array Client address
     */
    public $Host;

    /**
     * @var array Username
     */
    public $User;

    /**
     * @var array 
     */
    public $DBName;

    /**
     * @var array Table name
     */
    public $TableName;

    /**
     * @var array Audit policy name
     */
    public $PolicyName;

    /**
     * @var string 
     */
    public $Sql;

    /**
     * @var string 
     */
    public $SqlType;

    /**
     * @var integer Execution time in ms, which is used to filter the audit log with execution time greater than this value.
     */
    public $ExecTime;

    /**
     * @var integer Number of affected rows, which is used to filter the audit log with affected rows greater than this value.
     */
    public $AffectRows;

    /**
     * @var array SQL type (Multiple types can be queried at same time). Valid values: `SELECT`, `INSERT`, `UPDATE`, `DELETE`, `CREATE`, `DROP`, `ALTER`, `SET`, `REPLACE`, `EXECUTE`.
     */
    public $SqlTypes;

    /**
     * @var array SQL statement. Multiple SQL statements can be passed in.
     */
    public $Sqls;

    /**
     * @var string Number of rows affected in the format of M-N, such as 10-200.
     */
    public $AffectRowsSection;

    /**
     * @var string Number of rows returned in the format of M-N, such as 10-200.
     */
    public $SentRowsSection;

    /**
     * @var string Execution time in the format of M-N, such as 10-200.
     */
    public $ExecTimeSection;

    /**
     * @var string Lock wait time in the format of M-N, such as 10-200.
     */
    public $LockWaitTimeSection;

    /**
     * @var string IO wait time in the format of M-N, such as 10-200.
     */
    public $IoWaitTimeSection;

    /**
     * @var string Transaction duration in the format of M-N, such as 10-200.
     */
    public $TransactionLivingTimeSection;

    /**
     * @var array Thread ID
     */
    public $ThreadId;

    /**
     * @var integer Number of returned rows,  which is used to filter the audit log with affected rows greater than this value.
     */
    public $SentRows;

    /**
     * @var array MySQL error codes
     */
    public $ErrCode;

    /**
     * @param array $Host Client address
     * @param array $User Username
     * @param array $DBName 
     * @param array $TableName Table name
     * @param array $PolicyName Audit policy name
     * @param string $Sql 
     * @param string $SqlType 
     * @param integer $ExecTime Execution time in ms, which is used to filter the audit log with execution time greater than this value.
     * @param integer $AffectRows Number of affected rows, which is used to filter the audit log with affected rows greater than this value.
     * @param array $SqlTypes SQL type (Multiple types can be queried at same time). Valid values: `SELECT`, `INSERT`, `UPDATE`, `DELETE`, `CREATE`, `DROP`, `ALTER`, `SET`, `REPLACE`, `EXECUTE`.
     * @param array $Sqls SQL statement. Multiple SQL statements can be passed in.
     * @param string $AffectRowsSection Number of rows affected in the format of M-N, such as 10-200.
     * @param string $SentRowsSection Number of rows returned in the format of M-N, such as 10-200.
     * @param string $ExecTimeSection Execution time in the format of M-N, such as 10-200.
     * @param string $LockWaitTimeSection Lock wait time in the format of M-N, such as 10-200.
     * @param string $IoWaitTimeSection IO wait time in the format of M-N, such as 10-200.
     * @param string $TransactionLivingTimeSection Transaction duration in the format of M-N, such as 10-200.
     * @param array $ThreadId Thread ID
     * @param integer $SentRows Number of returned rows,  which is used to filter the audit log with affected rows greater than this value.
     * @param array $ErrCode MySQL error codes
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

        if (array_key_exists("AffectRowsSection",$param) and $param["AffectRowsSection"] !== null) {
            $this->AffectRowsSection = $param["AffectRowsSection"];
        }

        if (array_key_exists("SentRowsSection",$param) and $param["SentRowsSection"] !== null) {
            $this->SentRowsSection = $param["SentRowsSection"];
        }

        if (array_key_exists("ExecTimeSection",$param) and $param["ExecTimeSection"] !== null) {
            $this->ExecTimeSection = $param["ExecTimeSection"];
        }

        if (array_key_exists("LockWaitTimeSection",$param) and $param["LockWaitTimeSection"] !== null) {
            $this->LockWaitTimeSection = $param["LockWaitTimeSection"];
        }

        if (array_key_exists("IoWaitTimeSection",$param) and $param["IoWaitTimeSection"] !== null) {
            $this->IoWaitTimeSection = $param["IoWaitTimeSection"];
        }

        if (array_key_exists("TransactionLivingTimeSection",$param) and $param["TransactionLivingTimeSection"] !== null) {
            $this->TransactionLivingTimeSection = $param["TransactionLivingTimeSection"];
        }

        if (array_key_exists("ThreadId",$param) and $param["ThreadId"] !== null) {
            $this->ThreadId = $param["ThreadId"];
        }

        if (array_key_exists("SentRows",$param) and $param["SentRows"] !== null) {
            $this->SentRows = $param["SentRows"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }
    }
}
