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
 * A single audit log detail at the proxy layer. The fields are output by DruidCommonUtil#changeLogsTdsqlProxy and BusinessCodeUtils.
 *
 * @method string getTimestamp() Obtain <p>Time point of SQL execution (format string, yyyy-MM-dd HH:mm:ss).</p>
 * @method void setTimestamp(string $Timestamp) Set <p>Time point of SQL execution (format string, yyyy-MM-dd HH:mm:ss).</p>
 * @method string getClusterId() Obtain <p>Cluster ID (dcdb/mariadb cluster identifier, same as InstanceId).</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID (dcdb/mariadb cluster identifier, same as InstanceId).</p>
 * @method integer getAffectRows() Obtain <p>Number of affected rows.</p>
 * @method void setAffectRows(integer $AffectRows) Set <p>Number of affected rows.</p>
 * @method string getAutocommit() Obtain <p>Whether to autocommit. 1 means enabling, and 0 means disabling.</p>
 * @method void setAutocommit(string $Autocommit) Set <p>Whether to autocommit. 1 means enabling, and 0 means disabling.</p>
 * @method string getComType() Obtain <p>MySQL network protocol command types (such as COM_QUERY and COM_CONNECT).</p>
 * @method void setComType(string $ComType) Set <p>MySQL network protocol command types (such as COM_QUERY and COM_CONNECT).</p>
 * @method integer getConnTc() Obtain <p>Duration of creating a connection.</p>
 * @method void setConnTc(integer $ConnTc) Set <p>Duration of creating a connection.</p>
 * @method string getDBHost() Obtain <p>Backend DB instance address (multiple entries are separated by commas).</p>
 * @method void setDBHost(string $DBHost) Set <p>Backend DB instance address (multiple entries are separated by commas).</p>
 * @method string getDBName() Obtain <p>Database name where the SQL is executed.</p>
 * @method void setDBName(string $DBName) Set <p>Database name where the SQL is executed.</p>
 * @method string getErrCode() Obtain <p>Error code returned by SQL execution. 0 indicates success.</p>
 * @method void setErrCode(string $ErrCode) Set <p>Error code returned by SQL execution. 0 indicates success.</p>
 * @method string getErrInfo() Obtain <p>Error message.</p>
 * @method void setErrInfo(string $ErrInfo) Set <p>Error message.</p>
 * @method integer getExecTime() Obtain <p>SQL execution time (µs).</p>
 * @method void setExecTime(integer $ExecTime) Set <p>SQL execution time (µs).</p>
 * @method string getHoldConns() Obtain <p>Number of connections still occupied after request ends (typically 0 for non-transaction requests).</p>
 * @method void setHoldConns(string $HoldConns) Set <p>Number of connections still occupied after request ends (typically 0 for non-transaction requests).</p>
 * @method string getHost() Obtain <p>Client source IP.</p>
 * @method void setHost(string $Host) Set <p>Client source IP.</p>
 * @method string getMc() Obtain <p>Whether to enable global consistency read (0: no, 1: yes).</p>
 * @method void setMc(string $Mc) Set <p>Whether to enable global consistency read (0: no, 1: yes).</p>
 * @method integer getSqlStartTimeUs() Obtain <p>SQL start time (microsecond portion in microsecond precision).</p>
 * @method void setSqlStartTimeUs(integer $SqlStartTimeUs) Set <p>SQL start time (microsecond portion in microsecond precision).</p>
 * @method integer getNewConnNum() Obtain <p>Number of connections created in the current request.</p>
 * @method void setNewConnNum(integer $NewConnNum) Set <p>Number of connections created in the current request.</p>
 * @method string getProxyHost() Obtain <p>Proxy node address.</p>
 * @method void setProxyHost(string $ProxyHost) Set <p>Proxy node address.</p>
 * @method string getProxyId() Obtain <p>Proxy ID.</p>
 * @method void setProxyId(string $ProxyId) Set <p>Proxy ID.</p>
 * @method string getQueryId() Obtain <p>Query ID (used for join queries).</p>
 * @method void setQueryId(string $QueryId) Set <p>Query ID (used for join queries).</p>
 * @method integer getSentRows() Obtain <p>Number of rows returned (rows in the scanning result set).</p>
 * @method void setSentRows(integer $SentRows) Set <p>Number of rows returned (rows in the scanning result set).</p>
 * @method integer getSplited() Obtain <p>Whether it is a query rewritten by Proxy: 0 original query, 1 rewritten query.</p>
 * @method void setSplited(integer $Splited) Set <p>Whether it is a query rewritten by Proxy: 0 original query, 1 rewritten query.</p>
 * @method string getSql() Obtain <p>Original executed SQL statement.</p>
 * @method void setSql(string $Sql) Set <p>Original executed SQL statement.</p>
 * @method string getSqlTemplate() Obtain <p>SQL template.</p>
 * @method void setSqlTemplate(string $SqlTemplate) Set <p>SQL template.</p>
 * @method string getSqlTemplateId() Obtain <p>SQL Template ID.</p>
 * @method void setSqlTemplateId(string $SqlTemplateId) Set <p>SQL Template ID.</p>
 * @method string getSqlType() Obtain <p>SQL type (for example, Select, Insert, Create, Login, Set).</p>
 * @method void setSqlType(string $SqlType) Set <p>SQL type (for example, Select, Insert, Create, Login, Set).</p>
 * @method string getTables() Obtain <p>Tables involved (separated by commas for multiple tables).</p>
 * @method void setTables(string $Tables) Set <p>Tables involved (separated by commas for multiple tables).</p>
 * @method string getThreadId() Obtain <p>Thread ID.</p>
 * @method void setThreadId(string $ThreadId) Set <p>Thread ID.</p>
 * @method integer getSqlStartTime() Obtain <p>SQL start time (millisecond-level timestamp).</p>
 * @method void setSqlStartTime(integer $SqlStartTime) Set <p>SQL start time (millisecond-level timestamp).</p>
 * @method string getUser() Obtain <p>Database username that executes the SQL.</p>
 * @method void setUser(string $User) Set <p>Database username that executes the SQL.</p>
 * @method string getHostPort() Obtain <p>HostPort of the client connection.</p>
 * @method void setHostPort(string $HostPort) Set <p>HostPort of the client connection.</p>
 * @method string getProxyThread() Obtain <p>Proxy Node processing thread ID.</p>
 * @method void setProxyThread(string $ProxyThread) Set <p>Proxy Node processing thread ID.</p>
 * @method string getDbHostNum() Obtain <p>Number of backend DB hosts.</p>
 * @method void setDbHostNum(string $DbHostNum) Set <p>Number of backend DB hosts.</p>
 * @method string getBusinessCode() Obtain <p>Business code (extracted from i/o/p and other KV in business-side SQL annotations).</p>
 * @method void setBusinessCode(string $BusinessCode) Set <p>Business code (extracted from i/o/p and other KV in business-side SQL annotations).</p>
 * @method string getBusinessTag() Obtain <p>Business tag (completed post based on the business code).</p>
 * @method void setBusinessTag(string $BusinessTag) Set <p>Business tag (completed post based on the business code).</p>
 */
class AuditProxyLogItem extends AbstractModel
{
    /**
     * @var string <p>Time point of SQL execution (format string, yyyy-MM-dd HH:mm:ss).</p>
     */
    public $Timestamp;

    /**
     * @var string <p>Cluster ID (dcdb/mariadb cluster identifier, same as InstanceId).</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>Number of affected rows.</p>
     */
    public $AffectRows;

    /**
     * @var string <p>Whether to autocommit. 1 means enabling, and 0 means disabling.</p>
     */
    public $Autocommit;

    /**
     * @var string <p>MySQL network protocol command types (such as COM_QUERY and COM_CONNECT).</p>
     */
    public $ComType;

    /**
     * @var integer <p>Duration of creating a connection.</p>
     */
    public $ConnTc;

    /**
     * @var string <p>Backend DB instance address (multiple entries are separated by commas).</p>
     */
    public $DBHost;

    /**
     * @var string <p>Database name where the SQL is executed.</p>
     */
    public $DBName;

    /**
     * @var string <p>Error code returned by SQL execution. 0 indicates success.</p>
     */
    public $ErrCode;

    /**
     * @var string <p>Error message.</p>
     */
    public $ErrInfo;

    /**
     * @var integer <p>SQL execution time (µs).</p>
     */
    public $ExecTime;

    /**
     * @var string <p>Number of connections still occupied after request ends (typically 0 for non-transaction requests).</p>
     */
    public $HoldConns;

    /**
     * @var string <p>Client source IP.</p>
     */
    public $Host;

    /**
     * @var string <p>Whether to enable global consistency read (0: no, 1: yes).</p>
     */
    public $Mc;

    /**
     * @var integer <p>SQL start time (microsecond portion in microsecond precision).</p>
     */
    public $SqlStartTimeUs;

    /**
     * @var integer <p>Number of connections created in the current request.</p>
     */
    public $NewConnNum;

    /**
     * @var string <p>Proxy node address.</p>
     */
    public $ProxyHost;

    /**
     * @var string <p>Proxy ID.</p>
     */
    public $ProxyId;

    /**
     * @var string <p>Query ID (used for join queries).</p>
     */
    public $QueryId;

    /**
     * @var integer <p>Number of rows returned (rows in the scanning result set).</p>
     */
    public $SentRows;

    /**
     * @var integer <p>Whether it is a query rewritten by Proxy: 0 original query, 1 rewritten query.</p>
     */
    public $Splited;

    /**
     * @var string <p>Original executed SQL statement.</p>
     */
    public $Sql;

    /**
     * @var string <p>SQL template.</p>
     */
    public $SqlTemplate;

    /**
     * @var string <p>SQL Template ID.</p>
     */
    public $SqlTemplateId;

    /**
     * @var string <p>SQL type (for example, Select, Insert, Create, Login, Set).</p>
     */
    public $SqlType;

    /**
     * @var string <p>Tables involved (separated by commas for multiple tables).</p>
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
     * @var string <p>Database username that executes the SQL.</p>
     */
    public $User;

    /**
     * @var string <p>HostPort of the client connection.</p>
     */
    public $HostPort;

    /**
     * @var string <p>Proxy Node processing thread ID.</p>
     */
    public $ProxyThread;

    /**
     * @var string <p>Number of backend DB hosts.</p>
     */
    public $DbHostNum;

    /**
     * @var string <p>Business code (extracted from i/o/p and other KV in business-side SQL annotations).</p>
     */
    public $BusinessCode;

    /**
     * @var string <p>Business tag (completed post based on the business code).</p>
     */
    public $BusinessTag;

    /**
     * @param string $Timestamp <p>Time point of SQL execution (format string, yyyy-MM-dd HH:mm:ss).</p>
     * @param string $ClusterId <p>Cluster ID (dcdb/mariadb cluster identifier, same as InstanceId).</p>
     * @param integer $AffectRows <p>Number of affected rows.</p>
     * @param string $Autocommit <p>Whether to autocommit. 1 means enabling, and 0 means disabling.</p>
     * @param string $ComType <p>MySQL network protocol command types (such as COM_QUERY and COM_CONNECT).</p>
     * @param integer $ConnTc <p>Duration of creating a connection.</p>
     * @param string $DBHost <p>Backend DB instance address (multiple entries are separated by commas).</p>
     * @param string $DBName <p>Database name where the SQL is executed.</p>
     * @param string $ErrCode <p>Error code returned by SQL execution. 0 indicates success.</p>
     * @param string $ErrInfo <p>Error message.</p>
     * @param integer $ExecTime <p>SQL execution time (µs).</p>
     * @param string $HoldConns <p>Number of connections still occupied after request ends (typically 0 for non-transaction requests).</p>
     * @param string $Host <p>Client source IP.</p>
     * @param string $Mc <p>Whether to enable global consistency read (0: no, 1: yes).</p>
     * @param integer $SqlStartTimeUs <p>SQL start time (microsecond portion in microsecond precision).</p>
     * @param integer $NewConnNum <p>Number of connections created in the current request.</p>
     * @param string $ProxyHost <p>Proxy node address.</p>
     * @param string $ProxyId <p>Proxy ID.</p>
     * @param string $QueryId <p>Query ID (used for join queries).</p>
     * @param integer $SentRows <p>Number of rows returned (rows in the scanning result set).</p>
     * @param integer $Splited <p>Whether it is a query rewritten by Proxy: 0 original query, 1 rewritten query.</p>
     * @param string $Sql <p>Original executed SQL statement.</p>
     * @param string $SqlTemplate <p>SQL template.</p>
     * @param string $SqlTemplateId <p>SQL Template ID.</p>
     * @param string $SqlType <p>SQL type (for example, Select, Insert, Create, Login, Set).</p>
     * @param string $Tables <p>Tables involved (separated by commas for multiple tables).</p>
     * @param string $ThreadId <p>Thread ID.</p>
     * @param integer $SqlStartTime <p>SQL start time (millisecond-level timestamp).</p>
     * @param string $User <p>Database username that executes the SQL.</p>
     * @param string $HostPort <p>HostPort of the client connection.</p>
     * @param string $ProxyThread <p>Proxy Node processing thread ID.</p>
     * @param string $DbHostNum <p>Number of backend DB hosts.</p>
     * @param string $BusinessCode <p>Business code (extracted from i/o/p and other KV in business-side SQL annotations).</p>
     * @param string $BusinessTag <p>Business tag (completed post based on the business code).</p>
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

        if (array_key_exists("Autocommit",$param) and $param["Autocommit"] !== null) {
            $this->Autocommit = $param["Autocommit"];
        }

        if (array_key_exists("ComType",$param) and $param["ComType"] !== null) {
            $this->ComType = $param["ComType"];
        }

        if (array_key_exists("ConnTc",$param) and $param["ConnTc"] !== null) {
            $this->ConnTc = $param["ConnTc"];
        }

        if (array_key_exists("DBHost",$param) and $param["DBHost"] !== null) {
            $this->DBHost = $param["DBHost"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrInfo",$param) and $param["ErrInfo"] !== null) {
            $this->ErrInfo = $param["ErrInfo"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("HoldConns",$param) and $param["HoldConns"] !== null) {
            $this->HoldConns = $param["HoldConns"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Mc",$param) and $param["Mc"] !== null) {
            $this->Mc = $param["Mc"];
        }

        if (array_key_exists("SqlStartTimeUs",$param) and $param["SqlStartTimeUs"] !== null) {
            $this->SqlStartTimeUs = $param["SqlStartTimeUs"];
        }

        if (array_key_exists("NewConnNum",$param) and $param["NewConnNum"] !== null) {
            $this->NewConnNum = $param["NewConnNum"];
        }

        if (array_key_exists("ProxyHost",$param) and $param["ProxyHost"] !== null) {
            $this->ProxyHost = $param["ProxyHost"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("QueryId",$param) and $param["QueryId"] !== null) {
            $this->QueryId = $param["QueryId"];
        }

        if (array_key_exists("SentRows",$param) and $param["SentRows"] !== null) {
            $this->SentRows = $param["SentRows"];
        }

        if (array_key_exists("Splited",$param) and $param["Splited"] !== null) {
            $this->Splited = $param["Splited"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("SqlTemplate",$param) and $param["SqlTemplate"] !== null) {
            $this->SqlTemplate = $param["SqlTemplate"];
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

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("HostPort",$param) and $param["HostPort"] !== null) {
            $this->HostPort = $param["HostPort"];
        }

        if (array_key_exists("ProxyThread",$param) and $param["ProxyThread"] !== null) {
            $this->ProxyThread = $param["ProxyThread"];
        }

        if (array_key_exists("DbHostNum",$param) and $param["DbHostNum"] !== null) {
            $this->DbHostNum = $param["DbHostNum"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessTag",$param) and $param["BusinessTag"] !== null) {
            $this->BusinessTag = $param["BusinessTag"];
        }
    }
}
