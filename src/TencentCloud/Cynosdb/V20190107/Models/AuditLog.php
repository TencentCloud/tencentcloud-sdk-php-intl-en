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
 * Audit log details
 *
 * @method integer getAffectRows() Obtain Number of affected rows.
 * @method void setAffectRows(integer $AffectRows) Set Number of affected rows.
 * @method integer getErrCode() Obtain Error code.
 * @method void setErrCode(integer $ErrCode) Set Error code.
 * @method string getSqlType() Obtain SQL type.
 * @method void setSqlType(string $SqlType) Set SQL type.
 * @method string getTableName() Obtain Table name.
 * @method void setTableName(string $TableName) Set Table name.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getPolicyName() Obtain Audit policy name.
 * @method void setPolicyName(string $PolicyName) Set Audit policy name.
 * @method string getDBName() Obtain Database name.
 * @method void setDBName(string $DBName) Set Database name.
 * @method string getSql() Obtain SQL statement.
 * @method void setSql(string $Sql) Set SQL statement.
 * @method string getHost() Obtain Client address.
 * @method void setHost(string $Host) Set Client address.
 * @method string getUser() Obtain Username.
 * @method void setUser(string $User) Set Username.
 * @method integer getExecTime() Obtain Execution time, in microseconds.
 * @method void setExecTime(integer $ExecTime) Set Execution time, in microseconds.
 * @method string getTimestamp() Obtain Time.
 * @method void setTimestamp(string $Timestamp) Set Time.
 * @method integer getSentRows() Obtain Number of rows returned.
 * @method void setSentRows(integer $SentRows) Set Number of rows returned.
 * @method integer getThreadId() Obtain Execution thread ID.
 * @method void setThreadId(integer $ThreadId) Set Execution thread ID.
 * @method integer getCheckRows() Obtain Number of scanned rows.
 * @method void setCheckRows(integer $CheckRows) Set Number of scanned rows.
 * @method float getCpuTime() Obtain cpu execution time, in microseconds.
 * @method void setCpuTime(float $CpuTime) Set cpu execution time, in microseconds.
 * @method integer getIoWaitTime() Obtain IO wait time, in microseconds.
 * @method void setIoWaitTime(integer $IoWaitTime) Set IO wait time, in microseconds.
 * @method integer getLockWaitTime() Obtain Lock waiting time in microseconds.
 * @method void setLockWaitTime(integer $LockWaitTime) Set Lock waiting time in microseconds.
 * @method integer getTrxLivingTime() Obtain Transaction continuous waiting time, in µs.
 * @method void setTrxLivingTime(integer $TrxLivingTime) Set Transaction continuous waiting time, in µs.
 * @method integer getNsTime() Obtain Start time. Together with timestamp, it forms a nanosecond-precision time.
 * @method void setNsTime(integer $NsTime) Set Start time. Together with timestamp, it forms a nanosecond-precision time.
 * @method array getTemplateInfo() Obtain Basic information of the log hit rule template
 * @method void setTemplateInfo(array $TemplateInfo) Set Basic information of the log hit rule template
 * @method integer getTrxId() Obtain Transaction ID
 * @method void setTrxId(integer $TrxId) Set Transaction ID
 * @method integer getClientPort() Obtain Client port.
 * @method void setClientPort(integer $ClientPort) Set Client port.
 */
class AuditLog extends AbstractModel
{
    /**
     * @var integer Number of affected rows.
     */
    public $AffectRows;

    /**
     * @var integer Error code.
     */
    public $ErrCode;

    /**
     * @var string SQL type.
     */
    public $SqlType;

    /**
     * @var string Table name.
     */
    public $TableName;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Audit policy name.
     */
    public $PolicyName;

    /**
     * @var string Database name.
     */
    public $DBName;

    /**
     * @var string SQL statement.
     */
    public $Sql;

    /**
     * @var string Client address.
     */
    public $Host;

    /**
     * @var string Username.
     */
    public $User;

    /**
     * @var integer Execution time, in microseconds.
     */
    public $ExecTime;

    /**
     * @var string Time.
     */
    public $Timestamp;

    /**
     * @var integer Number of rows returned.
     */
    public $SentRows;

    /**
     * @var integer Execution thread ID.
     */
    public $ThreadId;

    /**
     * @var integer Number of scanned rows.
     */
    public $CheckRows;

    /**
     * @var float cpu execution time, in microseconds.
     */
    public $CpuTime;

    /**
     * @var integer IO wait time, in microseconds.
     */
    public $IoWaitTime;

    /**
     * @var integer Lock waiting time in microseconds.
     */
    public $LockWaitTime;

    /**
     * @var integer Transaction continuous waiting time, in µs.
     */
    public $TrxLivingTime;

    /**
     * @var integer Start time. Together with timestamp, it forms a nanosecond-precision time.
     */
    public $NsTime;

    /**
     * @var array Basic information of the log hit rule template
     */
    public $TemplateInfo;

    /**
     * @var integer Transaction ID
     */
    public $TrxId;

    /**
     * @var integer Client port.
     */
    public $ClientPort;

    /**
     * @param integer $AffectRows Number of affected rows.
     * @param integer $ErrCode Error code.
     * @param string $SqlType SQL type.
     * @param string $TableName Table name.
     * @param string $InstanceName Instance name.
     * @param string $PolicyName Audit policy name.
     * @param string $DBName Database name.
     * @param string $Sql SQL statement.
     * @param string $Host Client address.
     * @param string $User Username.
     * @param integer $ExecTime Execution time, in microseconds.
     * @param string $Timestamp Time.
     * @param integer $SentRows Number of rows returned.
     * @param integer $ThreadId Execution thread ID.
     * @param integer $CheckRows Number of scanned rows.
     * @param float $CpuTime cpu execution time, in microseconds.
     * @param integer $IoWaitTime IO wait time, in microseconds.
     * @param integer $LockWaitTime Lock waiting time in microseconds.
     * @param integer $TrxLivingTime Transaction continuous waiting time, in µs.
     * @param integer $NsTime Start time. Together with timestamp, it forms a nanosecond-precision time.
     * @param array $TemplateInfo Basic information of the log hit rule template
     * @param integer $TrxId Transaction ID
     * @param integer $ClientPort Client port.
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
        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("SentRows",$param) and $param["SentRows"] !== null) {
            $this->SentRows = $param["SentRows"];
        }

        if (array_key_exists("ThreadId",$param) and $param["ThreadId"] !== null) {
            $this->ThreadId = $param["ThreadId"];
        }

        if (array_key_exists("CheckRows",$param) and $param["CheckRows"] !== null) {
            $this->CheckRows = $param["CheckRows"];
        }

        if (array_key_exists("CpuTime",$param) and $param["CpuTime"] !== null) {
            $this->CpuTime = $param["CpuTime"];
        }

        if (array_key_exists("IoWaitTime",$param) and $param["IoWaitTime"] !== null) {
            $this->IoWaitTime = $param["IoWaitTime"];
        }

        if (array_key_exists("LockWaitTime",$param) and $param["LockWaitTime"] !== null) {
            $this->LockWaitTime = $param["LockWaitTime"];
        }

        if (array_key_exists("TrxLivingTime",$param) and $param["TrxLivingTime"] !== null) {
            $this->TrxLivingTime = $param["TrxLivingTime"];
        }

        if (array_key_exists("NsTime",$param) and $param["NsTime"] !== null) {
            $this->NsTime = $param["NsTime"];
        }

        if (array_key_exists("TemplateInfo",$param) and $param["TemplateInfo"] !== null) {
            $this->TemplateInfo = [];
            foreach ($param["TemplateInfo"] as $key => $value){
                $obj = new LogRuleTemplateInfo();
                $obj->deserialize($value);
                array_push($this->TemplateInfo, $obj);
            }
        }

        if (array_key_exists("TrxId",$param) and $param["TrxId"] !== null) {
            $this->TrxId = $param["TrxId"];
        }

        if (array_key_exists("ClientPort",$param) and $param["ClientPort"] !== null) {
            $this->ClientPort = $param["ClientPort"];
        }
    }
}
