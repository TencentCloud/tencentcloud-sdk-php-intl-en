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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * slow log information
 *
 * @method string getTimestamp() Obtain <p>Sql execution time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimestamp(string $Timestamp) Set <p>Sql execution time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getQueryTime() Obtain <p>Sql execution duration (seconds)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQueryTime(float $QueryTime) Set <p>Sql execution duration (seconds)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSqlText() Obtain <p>Sql statement</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSqlText(string $SqlText) Set <p>Sql statement</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserHost() Obtain <p>Client IP address</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserHost(string $UserHost) Set <p>Client IP address</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain <p>Username.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set <p>Username.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatabase() Obtain <p>Database name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabase(string $Database) Set <p>Database name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getLockTime() Obtain <p>Lock duration (seconds)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLockTime(float $LockTime) Set <p>Lock duration (seconds)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRowsExamined() Obtain <p>Number of scanned rows</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRowsExamined(integer $RowsExamined) Set <p>Number of scanned rows</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRowsSent() Obtain <p>Result set row count</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRowsSent(integer $RowsSent) Set <p>Result set row count</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTransactionId() Obtain <p>Transaction ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransactionId(string $TransactionId) Set <p>Transaction ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getRpcTime() Obtain <p>rpc duration</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRpcTime(float $RpcTime) Set <p>rpc duration</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getStorageRpcTime() Obtain <p>rpc duration for node interaction with storage</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageRpcTime(float $StorageRpcTime) Set <p>rpc duration for node interaction with storage</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getRpcRetryDelayTime() Obtain <p>rpc retry latency</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRpcRetryDelayTime(float $RpcRetryDelayTime) Set <p>rpc retry latency</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNodeId() Obtain <p>node Name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeId(string $NodeId) Set <p>node Name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRpcTrace() Obtain <p>rpc link tracing</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRpcTrace(string $RpcTrace) Set <p>rpc link tracing</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getTDStoreLockTime() Obtain <p>TDStore lock duration</p><p>Unit: seconds</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTDStoreLockTime(float $TDStoreLockTime) Set <p>TDStore lock duration</p><p>Unit: seconds</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTraceId() Obtain <p>Global ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTraceId(string $TraceId) Set <p>Global ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getExplain() Obtain <p>Execution plan</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExplain(array $Explain) Set <p>Execution plan</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SlowLogData extends AbstractModel
{
    /**
     * @var string <p>Sql execution time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Timestamp;

    /**
     * @var float <p>Sql execution duration (seconds)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QueryTime;

    /**
     * @var string <p>Sql statement</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SqlText;

    /**
     * @var string <p>Client IP address</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserHost;

    /**
     * @var string <p>Username.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string <p>Database name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Database;

    /**
     * @var float <p>Lock duration (seconds)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LockTime;

    /**
     * @var integer <p>Number of scanned rows</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RowsExamined;

    /**
     * @var integer <p>Result set row count</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RowsSent;

    /**
     * @var string <p>Transaction ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransactionId;

    /**
     * @var float <p>rpc duration</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RpcTime;

    /**
     * @var float <p>rpc duration for node interaction with storage</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageRpcTime;

    /**
     * @var float <p>rpc retry latency</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RpcRetryDelayTime;

    /**
     * @var string <p>node Name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeId;

    /**
     * @var string <p>rpc link tracing</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RpcTrace;

    /**
     * @var float <p>TDStore lock duration</p><p>Unit: seconds</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TDStoreLockTime;

    /**
     * @var string <p>Global ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TraceId;

    /**
     * @var array <p>Execution plan</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Explain;

    /**
     * @param string $Timestamp <p>Sql execution time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $QueryTime <p>Sql execution duration (seconds)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SqlText <p>Sql statement</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserHost <p>Client IP address</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserName <p>Username.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Database <p>Database name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $LockTime <p>Lock duration (seconds)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RowsExamined <p>Number of scanned rows</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RowsSent <p>Result set row count</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TransactionId <p>Transaction ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $RpcTime <p>rpc duration</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $StorageRpcTime <p>rpc duration for node interaction with storage</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $RpcRetryDelayTime <p>rpc retry latency</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NodeId <p>node Name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RpcTrace <p>rpc link tracing</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $TDStoreLockTime <p>TDStore lock duration</p><p>Unit: seconds</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TraceId <p>Global ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Explain <p>Execution plan</p>
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

        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("UserHost",$param) and $param["UserHost"] !== null) {
            $this->UserHost = $param["UserHost"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("LockTime",$param) and $param["LockTime"] !== null) {
            $this->LockTime = $param["LockTime"];
        }

        if (array_key_exists("RowsExamined",$param) and $param["RowsExamined"] !== null) {
            $this->RowsExamined = $param["RowsExamined"];
        }

        if (array_key_exists("RowsSent",$param) and $param["RowsSent"] !== null) {
            $this->RowsSent = $param["RowsSent"];
        }

        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("RpcTime",$param) and $param["RpcTime"] !== null) {
            $this->RpcTime = $param["RpcTime"];
        }

        if (array_key_exists("StorageRpcTime",$param) and $param["StorageRpcTime"] !== null) {
            $this->StorageRpcTime = $param["StorageRpcTime"];
        }

        if (array_key_exists("RpcRetryDelayTime",$param) and $param["RpcRetryDelayTime"] !== null) {
            $this->RpcRetryDelayTime = $param["RpcRetryDelayTime"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("RpcTrace",$param) and $param["RpcTrace"] !== null) {
            $this->RpcTrace = $param["RpcTrace"];
        }

        if (array_key_exists("TDStoreLockTime",$param) and $param["TDStoreLockTime"] !== null) {
            $this->TDStoreLockTime = $param["TDStoreLockTime"];
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }

        if (array_key_exists("Explain",$param) and $param["Explain"] !== null) {
            $this->Explain = [];
            foreach ($param["Explain"] as $key => $value){
                $obj = new Explain();
                $obj->deserialize($value);
                array_push($this->Explain, $obj);
            }
        }
    }
}
