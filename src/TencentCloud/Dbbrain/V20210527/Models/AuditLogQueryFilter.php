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
 * Collection of query filter criteria for audit logs. All fields are selectable. Note: MultiSql and ExcludeMultiSql carry a two-dimensional array as a JSON string (the cloud API platform does not support two-dimensional arrays). For example, [[a,b]] means (a OR b).
 *
 * @method array getSqlType() Obtain <p>SQL type list, with values such as SELECT, INSERT, UPDATE, and DELETE.</p>
 * @method void setSqlType(array $SqlType) Set <p>SQL type list, with values such as SELECT, INSERT, UPDATE, and DELETE.</p>
 * @method array getExecTime() Obtain <p>Execution duration range (ms), an array of length 2: [minimum value, maximum value].</p>
 * @method void setExecTime(array $ExecTime) Set <p>Execution duration range (ms), an array of length 2: [minimum value, maximum value].</p>
 * @method array getIoWaitTime() Obtain <p>IO waiting duration range (ms), an array with a length of 2.</p>
 * @method void setIoWaitTime(array $IoWaitTime) Set <p>IO waiting duration range (ms), an array with a length of 2.</p>
 * @method array getCpuTime() Obtain <p>CPU duration range (ms), an array of length 2.</p>
 * @method void setCpuTime(array $CpuTime) Set <p>CPU duration range (ms), an array of length 2.</p>
 * @method array getLockWaitTime() Obtain <p>Lock wait time range (ms), an array with a length of 2.</p>
 * @method void setLockWaitTime(array $LockWaitTime) Set <p>Lock wait time range (ms), an array with a length of 2.</p>
 * @method string getErrCode() Obtain <p>SQL execution error code. For example, 0 indicates success.</p>
 * @method void setErrCode(string $ErrCode) Set <p>SQL execution error code. For example, 0 indicates success.</p>
 * @method string getErrInfo() Obtain <p>Error message.</p>
 * @method void setErrInfo(string $ErrInfo) Set <p>Error message.</p>
 * @method array getDBName() Obtain <p>Database name list.</p>
 * @method void setDBName(array $DBName) Set <p>Database name list.</p>
 * @method array getUser() Obtain <p>Username list.</p>
 * @method void setUser(array $User) Set <p>Username list.</p>
 * @method array getHost() Obtain <p>Source IP list.</p>
 * @method void setHost(array $Host) Set <p>Source IP list.</p>
 * @method array getThreadId() Obtain <p>List of thread IDs.</p>
 * @method void setThreadId(array $ThreadId) Set <p>List of thread IDs.</p>
 * @method array getProxyHostList() Obtain <p>List of proxy node hosts.</p>
 * @method void setProxyHostList(array $ProxyHostList) Set <p>List of proxy node hosts.</p>
 * @method array getSetHostList() Obtain <p>Backend Set Host list.</p>
 * @method void setSetHostList(array $SetHostList) Set <p>Backend Set Host list.</p>
 * @method array getSetIdList() Obtain <p>Backend Set ID list.</p>
 * @method void setSetIdList(array $SetIdList) Set <p>Backend Set ID list.</p>
 * @method string getMultiSql() Obtain <p>Multiple SQL keyword conditions, JSON string, internally a two-dimensional array: level 1 is AND, the second level is OR. Note that the cloud API platform does not support two-dimensional arrays. Here, a string is used to carry it, and the server automatically parses it.</p>
 * @method void setMultiSql(string $MultiSql) Set <p>Multiple SQL keyword conditions, JSON string, internally a two-dimensional array: level 1 is AND, the second level is OR. Note that the cloud API platform does not support two-dimensional arrays. Here, a string is used to carry it, and the server automatically parses it.</p>
 * @method string getExcludeMultiSql() Obtain <p>Excluded multiple SQL keyword conditions, JSON string, with the same structure as MultiSql.</p>
 * @method void setExcludeMultiSql(string $ExcludeMultiSql) Set <p>Excluded multiple SQL keyword conditions, JSON string, with the same structure as MultiSql.</p>
 * @method string getSqlTemplateId() Obtain <p>SQL Template ID.</p>
 * @method void setSqlTemplateId(string $SqlTemplateId) Set <p>SQL Template ID.</p>
 * @method string getSqlStartTime() Obtain <p>SQL start time, for example: 2026-10-10 11:05:06.002211</p><p>Parameter format: YYYY-MM-DD hh:mm:ss.SSSSSS</p>
 * @method void setSqlStartTime(string $SqlStartTime) Set <p>SQL start time, for example: 2026-10-10 11:05:06.002211</p><p>Parameter format: YYYY-MM-DD hh:mm:ss.SSSSSS</p>
 * @method string getQueryId() Obtain <p>Query ID, used for join queries (required when LogType=All).</p>
 * @method void setQueryId(string $QueryId) Set <p>Query ID, used for join queries (required when LogType=All).</p>
 */
class AuditLogQueryFilter extends AbstractModel
{
    /**
     * @var array <p>SQL type list, with values such as SELECT, INSERT, UPDATE, and DELETE.</p>
     */
    public $SqlType;

    /**
     * @var array <p>Execution duration range (ms), an array of length 2: [minimum value, maximum value].</p>
     */
    public $ExecTime;

    /**
     * @var array <p>IO waiting duration range (ms), an array with a length of 2.</p>
     */
    public $IoWaitTime;

    /**
     * @var array <p>CPU duration range (ms), an array of length 2.</p>
     */
    public $CpuTime;

    /**
     * @var array <p>Lock wait time range (ms), an array with a length of 2.</p>
     */
    public $LockWaitTime;

    /**
     * @var string <p>SQL execution error code. For example, 0 indicates success.</p>
     */
    public $ErrCode;

    /**
     * @var string <p>Error message.</p>
     */
    public $ErrInfo;

    /**
     * @var array <p>Database name list.</p>
     */
    public $DBName;

    /**
     * @var array <p>Username list.</p>
     */
    public $User;

    /**
     * @var array <p>Source IP list.</p>
     */
    public $Host;

    /**
     * @var array <p>List of thread IDs.</p>
     */
    public $ThreadId;

    /**
     * @var array <p>List of proxy node hosts.</p>
     */
    public $ProxyHostList;

    /**
     * @var array <p>Backend Set Host list.</p>
     */
    public $SetHostList;

    /**
     * @var array <p>Backend Set ID list.</p>
     */
    public $SetIdList;

    /**
     * @var string <p>Multiple SQL keyword conditions, JSON string, internally a two-dimensional array: level 1 is AND, the second level is OR. Note that the cloud API platform does not support two-dimensional arrays. Here, a string is used to carry it, and the server automatically parses it.</p>
     */
    public $MultiSql;

    /**
     * @var string <p>Excluded multiple SQL keyword conditions, JSON string, with the same structure as MultiSql.</p>
     */
    public $ExcludeMultiSql;

    /**
     * @var string <p>SQL Template ID.</p>
     */
    public $SqlTemplateId;

    /**
     * @var string <p>SQL start time, for example: 2026-10-10 11:05:06.002211</p><p>Parameter format: YYYY-MM-DD hh:mm:ss.SSSSSS</p>
     */
    public $SqlStartTime;

    /**
     * @var string <p>Query ID, used for join queries (required when LogType=All).</p>
     */
    public $QueryId;

    /**
     * @param array $SqlType <p>SQL type list, with values such as SELECT, INSERT, UPDATE, and DELETE.</p>
     * @param array $ExecTime <p>Execution duration range (ms), an array of length 2: [minimum value, maximum value].</p>
     * @param array $IoWaitTime <p>IO waiting duration range (ms), an array with a length of 2.</p>
     * @param array $CpuTime <p>CPU duration range (ms), an array of length 2.</p>
     * @param array $LockWaitTime <p>Lock wait time range (ms), an array with a length of 2.</p>
     * @param string $ErrCode <p>SQL execution error code. For example, 0 indicates success.</p>
     * @param string $ErrInfo <p>Error message.</p>
     * @param array $DBName <p>Database name list.</p>
     * @param array $User <p>Username list.</p>
     * @param array $Host <p>Source IP list.</p>
     * @param array $ThreadId <p>List of thread IDs.</p>
     * @param array $ProxyHostList <p>List of proxy node hosts.</p>
     * @param array $SetHostList <p>Backend Set Host list.</p>
     * @param array $SetIdList <p>Backend Set ID list.</p>
     * @param string $MultiSql <p>Multiple SQL keyword conditions, JSON string, internally a two-dimensional array: level 1 is AND, the second level is OR. Note that the cloud API platform does not support two-dimensional arrays. Here, a string is used to carry it, and the server automatically parses it.</p>
     * @param string $ExcludeMultiSql <p>Excluded multiple SQL keyword conditions, JSON string, with the same structure as MultiSql.</p>
     * @param string $SqlTemplateId <p>SQL Template ID.</p>
     * @param string $SqlStartTime <p>SQL start time, for example: 2026-10-10 11:05:06.002211</p><p>Parameter format: YYYY-MM-DD hh:mm:ss.SSSSSS</p>
     * @param string $QueryId <p>Query ID, used for join queries (required when LogType=All).</p>
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
        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("IoWaitTime",$param) and $param["IoWaitTime"] !== null) {
            $this->IoWaitTime = $param["IoWaitTime"];
        }

        if (array_key_exists("CpuTime",$param) and $param["CpuTime"] !== null) {
            $this->CpuTime = $param["CpuTime"];
        }

        if (array_key_exists("LockWaitTime",$param) and $param["LockWaitTime"] !== null) {
            $this->LockWaitTime = $param["LockWaitTime"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrInfo",$param) and $param["ErrInfo"] !== null) {
            $this->ErrInfo = $param["ErrInfo"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("ThreadId",$param) and $param["ThreadId"] !== null) {
            $this->ThreadId = $param["ThreadId"];
        }

        if (array_key_exists("ProxyHostList",$param) and $param["ProxyHostList"] !== null) {
            $this->ProxyHostList = $param["ProxyHostList"];
        }

        if (array_key_exists("SetHostList",$param) and $param["SetHostList"] !== null) {
            $this->SetHostList = $param["SetHostList"];
        }

        if (array_key_exists("SetIdList",$param) and $param["SetIdList"] !== null) {
            $this->SetIdList = $param["SetIdList"];
        }

        if (array_key_exists("MultiSql",$param) and $param["MultiSql"] !== null) {
            $this->MultiSql = $param["MultiSql"];
        }

        if (array_key_exists("ExcludeMultiSql",$param) and $param["ExcludeMultiSql"] !== null) {
            $this->ExcludeMultiSql = $param["ExcludeMultiSql"];
        }

        if (array_key_exists("SqlTemplateId",$param) and $param["SqlTemplateId"] !== null) {
            $this->SqlTemplateId = $param["SqlTemplateId"];
        }

        if (array_key_exists("SqlStartTime",$param) and $param["SqlStartTime"] !== null) {
            $this->SqlStartTime = $param["SqlStartTime"];
        }

        if (array_key_exists("QueryId",$param) and $param["QueryId"] !== null) {
            $this->QueryId = $param["QueryId"];
        }
    }
}
