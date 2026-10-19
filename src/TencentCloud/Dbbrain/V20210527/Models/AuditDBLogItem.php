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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * A single audit log detail at the DB layer. The fields are output by DruidCommonUtil#changeLogsTdsqlDB and BusinessCodeUtils. When LogType=All, FlowTime is added.
 *
 * @method string getTimestamp() Obtain <p>Time point of SQL execution (format string, yyyy-MM-dd HH:mm:ss).</p>
 * @method void setTimestamp(string $Timestamp) Set <p>Time point of SQL execution (format string, yyyy-MM-dd HH:mm:ss).</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method integer getAffectRows() Obtain <p>Number of affected rows.</p>
 * @method void setAffectRows(integer $AffectRows) Set <p>Number of affected rows.</p>
 * @method integer getCheckRows() Obtain <p>Number of scanned rows.</p>
 * @method void setCheckRows(integer $CheckRows) Set <p>Number of scanned rows.</p>
 * @method integer getCpuTime() Obtain <p>CPU time (µs).</p>
 * @method void setCpuTime(integer $CpuTime) Set <p>CPU time (µs).</p>
 * @method string getSetHost() Obtain <p>Backend Set Host (source field dbHost).</p>
 * @method void setSetHost(string $SetHost) Set <p>Backend Set Host (source field dbHost).</p>
 * @method string getDBName() Obtain <p>Database name where the SQL is executed.</p>
 * @method void setDBName(string $DBName) Set <p>Database name where the SQL is executed.</p>
 * @method string getErrCode() Obtain <p>Error code returned by SQL execution. 0 indicates success.</p>
 * @method void setErrCode(string $ErrCode) Set <p>Error code returned by SQL execution. 0 indicates success.</p>
 * @method integer getExecTime() Obtain <p>SQL execution time (µs).</p>
 * @method void setExecTime(integer $ExecTime) Set <p>SQL execution time (µs).</p>
 * @method string getHost() Obtain <p>Client source IP.</p>
 * @method void setHost(string $Host) Set <p>Client source IP.</p>
 * @method string getSetName() Obtain <p>Set Name (source field instanceId).</p>
 * @method void setSetName(string $SetName) Set <p>Set Name (source field instanceId).</p>
 * @method integer getIoWaitTime() Obtain <p>IO wait time (µs).</p>
 * @method void setIoWaitTime(integer $IoWaitTime) Set <p>IO wait time (µs).</p>
 * @method integer getLockWaitTime() Obtain <p>Lock waiting time (µs).</p>
 * @method void setLockWaitTime(integer $LockWaitTime) Set <p>Lock waiting time (µs).</p>
 * @method integer getSqlStartTimeNs() Obtain <p>SQL start time (nanosecond timestamp).</p>
 * @method void setSqlStartTimeNs(integer $SqlStartTimeNs) Set <p>SQL start time (nanosecond timestamp).</p>
 * @method string getQueryId() Obtain <p>Query ID (used for join queries).</p>
 * @method void setQueryId(string $QueryId) Set <p>Query ID (used for join queries).</p>
 * @method integer getQueryNo() Obtain <p>Serial number for queries (serial number of SQL in the same transaction).</p>
 * @method void setQueryNo(integer $QueryNo) Set <p>Serial number for queries (serial number of SQL in the same transaction).</p>
 * @method integer getSentRows() Obtain <p>Number of rows returned (rows in the scanning result set).</p>
 * @method void setSentRows(integer $SentRows) Set <p>Number of rows returned (rows in the scanning result set).</p>
 * @method string getSql() Obtain <p>Original executed SQL statement.</p>
 * @method void setSql(string $Sql) Set <p>Original executed SQL statement.</p>
 * @method string getSqlTemplateId() Obtain <p>SQL Template ID.</p>
 * @method void setSqlTemplateId(string $SqlTemplateId) Set <p>SQL Template ID.</p>
 * @method string getSqlType() Obtain <p>SQL type (for example, Select, Insert, Update, Delete).</p>
 * @method void setSqlType(string $SqlType) Set <p>SQL type (for example, Select, Insert, Update, Delete).</p>
 * @method string getTables() Obtain <p>Tables involved.</p>
 * @method void setTables(string $Tables) Set <p>Tables involved.</p>
 * @method string getThreadId() Obtain <p>Thread ID.</p>
 * @method void setThreadId(string $ThreadId) Set <p>Thread ID.</p>
 * @method integer getSqlStartTime() Obtain <p>SQL start time (millisecond-level timestamp).</p>
 * @method void setSqlStartTime(integer $SqlStartTime) Set <p>SQL start time (millisecond-level timestamp).</p>
 * @method integer getTrxLivingTime() Obtain <p>Transaction time to live (µs).</p>
 * @method void setTrxLivingTime(integer $TrxLivingTime) Set <p>Transaction time to live (µs).</p>
 * @method string getUser() Obtain <p>Database username that executes the SQL.</p>
 * @method void setUser(string $User) Set <p>Database username that executes the SQL.</p>
 * @method string getTrxId() Obtain <p>Transaction ID.</p>
 * @method void setTrxId(string $TrxId) Set <p>Transaction ID.</p>
 * @method string getInternalXId() Obtain <p>Internal XID.</p>
 * @method void setInternalXId(string $InternalXId) Set <p>Internal XID.</p>
 * @method string getBusinessCode() Obtain <p>Business code (extracted from i/o/p and other KV in business-side SQL annotations).</p>
 * @method void setBusinessCode(string $BusinessCode) Set <p>Business code (extracted from i/o/p and other KV in business-side SQL annotations).</p>
 * @method integer getFlowTime() Obtain <p>Gateway circulation duration (ms). It is returned only when LogType=All after gateway log association. When LogType=DB, this field is not delivered.</p>
 * @method void setFlowTime(integer $FlowTime) Set <p>Gateway circulation duration (ms). It is returned only when LogType=All after gateway log association. When LogType=DB, this field is not delivered.</p>
 */
class AuditDBLogItem extends AbstractModel
{
    /**
     * @var string <p>Time point of SQL execution (format string, yyyy-MM-dd HH:mm:ss).</p>
     */
    public $Timestamp;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>Number of affected rows.</p>
     */
    public $AffectRows;

    /**
     * @var integer <p>Number of scanned rows.</p>
     */
    public $CheckRows;

    /**
     * @var integer <p>CPU time (µs).</p>
     */
    public $CpuTime;

    /**
     * @var string <p>Backend Set Host (source field dbHost).</p>
     */
    public $SetHost;

    /**
     * @var string <p>Database name where the SQL is executed.</p>
     */
    public $DBName;

    /**
     * @var string <p>Error code returned by SQL execution. 0 indicates success.</p>
     */
    public $ErrCode;

    /**
     * @var integer <p>SQL execution time (µs).</p>
     */
    public $ExecTime;

    /**
     * @var string <p>Client source IP.</p>
     */
    public $Host;

    /**
     * @var string <p>Set Name (source field instanceId).</p>
     */
    public $SetName;

    /**
     * @var integer <p>IO wait time (µs).</p>
     */
    public $IoWaitTime;

    /**
     * @var integer <p>Lock waiting time (µs).</p>
     */
    public $LockWaitTime;

    /**
     * @var integer <p>SQL start time (nanosecond timestamp).</p>
     */
    public $SqlStartTimeNs;

    /**
     * @var string <p>Query ID (used for join queries).</p>
     */
    public $QueryId;

    /**
     * @var integer <p>Serial number for queries (serial number of SQL in the same transaction).</p>
     */
    public $QueryNo;

    /**
     * @var integer <p>Number of rows returned (rows in the scanning result set).</p>
     */
    public $SentRows;

    /**
     * @var string <p>Original executed SQL statement.</p>
     */
    public $Sql;

    /**
     * @var string <p>SQL Template ID.</p>
     */
    public $SqlTemplateId;

    /**
     * @var string <p>SQL type (for example, Select, Insert, Update, Delete).</p>
     */
    public $SqlType;

    /**
     * @var string <p>Tables involved.</p>
     */
    public $Tables;

    /**
     * @var string <p>Thread ID.</p>
     */
    public $ThreadId;

    /**
     * @var integer <p>SQL start time (millisecond-level timestamp).</p>
     */
    public $SqlStartTime;

    /**
     * @var integer <p>Transaction time to live (µs).</p>
     */
    public $TrxLivingTime;

    /**
     * @var string <p>Database username that executes the SQL.</p>
     */
    public $User;

    /**
     * @var string <p>Transaction ID.</p>
     */
    public $TrxId;

    /**
     * @var string <p>Internal XID.</p>
     */
    public $InternalXId;

    /**
     * @var string <p>Business code (extracted from i/o/p and other KV in business-side SQL annotations).</p>
     */
    public $BusinessCode;

    /**
     * @var integer <p>Gateway circulation duration (ms). It is returned only when LogType=All after gateway log association. When LogType=DB, this field is not delivered.</p>
     */
    public $FlowTime;

    /**
     * @param string $Timestamp <p>Time point of SQL execution (format string, yyyy-MM-dd HH:mm:ss).</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param integer $AffectRows <p>Number of affected rows.</p>
     * @param integer $CheckRows <p>Number of scanned rows.</p>
     * @param integer $CpuTime <p>CPU time (µs).</p>
     * @param string $SetHost <p>Backend Set Host (source field dbHost).</p>
     * @param string $DBName <p>Database name where the SQL is executed.</p>
     * @param string $ErrCode <p>Error code returned by SQL execution. 0 indicates success.</p>
     * @param integer $ExecTime <p>SQL execution time (µs).</p>
     * @param string $Host <p>Client source IP.</p>
     * @param string $SetName <p>Set Name (source field instanceId).</p>
     * @param integer $IoWaitTime <p>IO wait time (µs).</p>
     * @param integer $LockWaitTime <p>Lock waiting time (µs).</p>
     * @param integer $SqlStartTimeNs <p>SQL start time (nanosecond timestamp).</p>
     * @param string $QueryId <p>Query ID (used for join queries).</p>
     * @param integer $QueryNo <p>Serial number for queries (serial number of SQL in the same transaction).</p>
     * @param integer $SentRows <p>Number of rows returned (rows in the scanning result set).</p>
     * @param string $Sql <p>Original executed SQL statement.</p>
     * @param string $SqlTemplateId <p>SQL Template ID.</p>
     * @param string $SqlType <p>SQL type (for example, Select, Insert, Update, Delete).</p>
     * @param string $Tables <p>Tables involved.</p>
     * @param string $ThreadId <p>Thread ID.</p>
     * @param integer $SqlStartTime <p>SQL start time (millisecond-level timestamp).</p>
     * @param integer $TrxLivingTime <p>Transaction time to live (µs).</p>
     * @param string $User <p>Database username that executes the SQL.</p>
     * @param string $TrxId <p>Transaction ID.</p>
     * @param string $InternalXId <p>Internal XID.</p>
     * @param string $BusinessCode <p>Business code (extracted from i/o/p and other KV in business-side SQL annotations).</p>
     * @param integer $FlowTime <p>Gateway circulation duration (ms). It is returned only when LogType=All after gateway log association. When LogType=DB, this field is not delivered.</p>
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

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("CheckRows",$param) and $param["CheckRows"] !== null) {
            $this->CheckRows = $param["CheckRows"];
        }

        if (array_key_exists("CpuTime",$param) and $param["CpuTime"] !== null) {
            $this->CpuTime = $param["CpuTime"];
        }

        if (array_key_exists("SetHost",$param) and $param["SetHost"] !== null) {
            $this->SetHost = $param["SetHost"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("SetName",$param) and $param["SetName"] !== null) {
            $this->SetName = $param["SetName"];
        }

        if (array_key_exists("IoWaitTime",$param) and $param["IoWaitTime"] !== null) {
            $this->IoWaitTime = $param["IoWaitTime"];
        }

        if (array_key_exists("LockWaitTime",$param) and $param["LockWaitTime"] !== null) {
            $this->LockWaitTime = $param["LockWaitTime"];
        }

        if (array_key_exists("SqlStartTimeNs",$param) and $param["SqlStartTimeNs"] !== null) {
            $this->SqlStartTimeNs = $param["SqlStartTimeNs"];
        }

        if (array_key_exists("QueryId",$param) and $param["QueryId"] !== null) {
            $this->QueryId = $param["QueryId"];
        }

        if (array_key_exists("QueryNo",$param) and $param["QueryNo"] !== null) {
            $this->QueryNo = $param["QueryNo"];
        }

        if (array_key_exists("SentRows",$param) and $param["SentRows"] !== null) {
            $this->SentRows = $param["SentRows"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("SqlTemplateId",$param) and $param["SqlTemplateId"] !== null) {
            $this->SqlTemplateId = $param["SqlTemplateId"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = $param["Tables"];
        }

        if (array_key_exists("ThreadId",$param) and $param["ThreadId"] !== null) {
            $this->ThreadId = $param["ThreadId"];
        }

        if (array_key_exists("SqlStartTime",$param) and $param["SqlStartTime"] !== null) {
            $this->SqlStartTime = $param["SqlStartTime"];
        }

        if (array_key_exists("TrxLivingTime",$param) and $param["TrxLivingTime"] !== null) {
            $this->TrxLivingTime = $param["TrxLivingTime"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("TrxId",$param) and $param["TrxId"] !== null) {
            $this->TrxId = $param["TrxId"];
        }

        if (array_key_exists("InternalXId",$param) and $param["InternalXId"] !== null) {
            $this->InternalXId = $param["InternalXId"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("FlowTime",$param) and $param["FlowTime"] !== null) {
            $this->FlowTime = $param["FlowTime"];
        }
    }
}
