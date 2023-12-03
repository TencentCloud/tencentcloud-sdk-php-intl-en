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
 * Audit log details
 *
 * @method integer getAffectRows() Obtain Number of affected rows
 * @method void setAffectRows(integer $AffectRows) Set Number of affected rows
 * @method integer getErrCode() Obtain The error code
 * @method void setErrCode(integer $ErrCode) Set The error code
 * @method string getSqlType() Obtain 
 * @method void setSqlType(string $SqlType) Set 
 * @method string getPolicyName() Obtain Audit policy name, which will be unavailable soon.
 * @method void setPolicyName(string $PolicyName) Set Audit policy name, which will be unavailable soon.
 * @method string getDBName() Obtain 
 * @method void setDBName(string $DBName) Set 
 * @method string getSql() Obtain 
 * @method void setSql(string $Sql) Set 
 * @method string getHost() Obtain Client address
 * @method void setHost(string $Host) Set Client address
 * @method string getUser() Obtain Username
 * @method void setUser(string $User) Set Username
 * @method integer getExecTime() Obtain Execution time (μs)
 * @method void setExecTime(integer $ExecTime) Set Execution time (μs)
 * @method string getTimestamp() Obtain Time
 * @method void setTimestamp(string $Timestamp) Set Time
 * @method integer getSentRows() Obtain Number of returned rows
 * @method void setSentRows(integer $SentRows) Set Number of returned rows
 * @method integer getThreadId() Obtain Thread ID
 * @method void setThreadId(integer $ThreadId) Set Thread ID
 * @method integer getCheckRows() Obtain Number of scanned rows
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckRows(integer $CheckRows) Set Number of scanned rows
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getCpuTime() Obtain CPU execution time (μs)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpuTime(float $CpuTime) Set CPU execution time (μs)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIoWaitTime() Obtain IO wait time (μs)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIoWaitTime(integer $IoWaitTime) Set IO wait time (μs)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLockWaitTime() Obtain Lock wait time (μs)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLockWaitTime(integer $LockWaitTime) Set Lock wait time (μs)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNsTime() Obtain Start time, which forms a time accurate to nanoseconds with·`timestamp`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNsTime(integer $NsTime) Set Start time, which forms a time accurate to nanoseconds with·`timestamp`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTrxLivingTime() Obtain Transaction duration (μs)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTrxLivingTime(integer $TrxLivingTime) Set Transaction duration (μs)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTemplateInfo() Obtain Basic information on the rule template hit by the log.
Note: The return value may be null, indicating that no valid data can be obtained.
 * @method void setTemplateInfo(array $TemplateInfo) Set Basic information on the rule template hit by the log.
Note: The return value may be null, indicating that no valid data can be obtained.
 */
class AuditLog extends AbstractModel
{
    /**
     * @var integer Number of affected rows
     */
    public $AffectRows;

    /**
     * @var integer The error code
     */
    public $ErrCode;

    /**
     * @var string 
     */
    public $SqlType;

    /**
     * @var string Audit policy name, which will be unavailable soon.
     */
    public $PolicyName;

    /**
     * @var string 
     */
    public $DBName;

    /**
     * @var string 
     */
    public $Sql;

    /**
     * @var string Client address
     */
    public $Host;

    /**
     * @var string Username
     */
    public $User;

    /**
     * @var integer Execution time (μs)
     */
    public $ExecTime;

    /**
     * @var string Time
     */
    public $Timestamp;

    /**
     * @var integer Number of returned rows
     */
    public $SentRows;

    /**
     * @var integer Thread ID
     */
    public $ThreadId;

    /**
     * @var integer Number of scanned rows
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckRows;

    /**
     * @var float CPU execution time (μs)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CpuTime;

    /**
     * @var integer IO wait time (μs)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IoWaitTime;

    /**
     * @var integer Lock wait time (μs)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LockWaitTime;

    /**
     * @var integer Start time, which forms a time accurate to nanoseconds with·`timestamp`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NsTime;

    /**
     * @var integer Transaction duration (μs)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TrxLivingTime;

    /**
     * @var array Basic information on the rule template hit by the log.
Note: The return value may be null, indicating that no valid data can be obtained.
     */
    public $TemplateInfo;

    /**
     * @param integer $AffectRows Number of affected rows
     * @param integer $ErrCode The error code
     * @param string $SqlType 
     * @param string $PolicyName Audit policy name, which will be unavailable soon.
     * @param string $DBName 
     * @param string $Sql 
     * @param string $Host Client address
     * @param string $User Username
     * @param integer $ExecTime Execution time (μs)
     * @param string $Timestamp Time
     * @param integer $SentRows Number of returned rows
     * @param integer $ThreadId Thread ID
     * @param integer $CheckRows Number of scanned rows
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $CpuTime CPU execution time (μs)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IoWaitTime IO wait time (μs)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LockWaitTime Lock wait time (μs)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NsTime Start time, which forms a time accurate to nanoseconds with·`timestamp`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TrxLivingTime Transaction duration (μs)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TemplateInfo Basic information on the rule template hit by the log.
Note: The return value may be null, indicating that no valid data can be obtained.
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

        if (array_key_exists("NsTime",$param) and $param["NsTime"] !== null) {
            $this->NsTime = $param["NsTime"];
        }

        if (array_key_exists("TrxLivingTime",$param) and $param["TrxLivingTime"] !== null) {
            $this->TrxLivingTime = $param["TrxLivingTime"];
        }

        if (array_key_exists("TemplateInfo",$param) and $param["TemplateInfo"] !== null) {
            $this->TemplateInfo = [];
            foreach ($param["TemplateInfo"] as $key => $value){
                $obj = new LogRuleTemplateInfo();
                $obj->deserialize($value);
                array_push($this->TemplateInfo, $obj);
            }
        }
    }
}
