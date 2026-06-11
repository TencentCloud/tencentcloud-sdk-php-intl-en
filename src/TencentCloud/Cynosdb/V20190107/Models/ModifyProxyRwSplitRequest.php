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
 * ModifyProxyRwSplit request structure.
 *
 * @method string getClusterId() Obtain <p>Cluster ID, for example, cynosdbmysql-asd123</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID, for example, cynosdbmysql-asd123</p>
 * @method string getProxyGroupId() Obtain <p>Database Proxy Group ID, such as cynosdbmysql-proxy-qwe123</p>
 * @method void setProxyGroupId(string $ProxyGroupId) Set <p>Database Proxy Group ID, such as cynosdbmysql-proxy-qwe123</p>
 * @method string getConsistencyType() Obtain <p>Consistency Type "eventual"-final consistency, "session"-session consistency, "global"-global consistency</p>
 * @method void setConsistencyType(string $ConsistencyType) Set <p>Consistency Type "eventual"-final consistency, "session"-session consistency, "global"-global consistency</p>
 * @method string getConsistencyTimeOut() Obtain <p>Consistency timeout.<br>Value ranges from 0 to 1000000 (microseconds). When set to 0, it means the request will wait if the read-only instance fails to satisfy the consistency policy due to delay.</p>
 * @method void setConsistencyTimeOut(string $ConsistencyTimeOut) Set <p>Consistency timeout.<br>Value ranges from 0 to 1000000 (microseconds). When set to 0, it means the request will wait if the read-only instance fails to satisfy the consistency policy due to delay.</p>
 * @method string getWeightMode() Obtain <p>Read-write weight allocation mode; system Auto-Assignment: "system", custom: "custom"</p>
 * @method void setWeightMode(string $WeightMode) Set <p>Read-write weight allocation mode; system Auto-Assignment: "system", custom: "custom"</p>
 * @method array getInstanceWeights() Obtain <p>Instance read-only weight.</p>
 * @method void setInstanceWeights(array $InstanceWeights) Set <p>Instance read-only weight.</p>
 * @method string getFailOver() Obtain <p>Whether fault migration is enabled. After a failure occurs, the connection address will be routed to primary instance. Value: "yes", "no"</p>
 * @method void setFailOver(string $FailOver) Set <p>Whether fault migration is enabled. After a failure occurs, the connection address will be routed to primary instance. Value: "yes", "no"</p>
 * @method string getAutoAddRo() Obtain <p>Automatically add read-only instance, value: "yes", "no"</p>
 * @method void setAutoAddRo(string $AutoAddRo) Set <p>Automatically add read-only instance, value: "yes", "no"</p>
 * @method string getOpenRw() Obtain <p>Whether to enable read-write separation.<br>This parameter is deprecated. Set the read-write attribute through RwType.</p>
 * @method void setOpenRw(string $OpenRw) Set <p>Whether to enable read-write separation.<br>This parameter is deprecated. Set the read-write attribute through RwType.</p>
 * @method string getRwType() Obtain <p>Read-write type:<br>READWRITE, READONLY</p>
 * @method void setRwType(string $RwType) Set <p>Read-write type:<br>READWRITE, READONLY</p>
 * @method boolean getTransSplit() Obtain <p>Transaction split.<br>Read and write operations in a transaction are split and executed on different instances.</p>
 * @method void setTransSplit(boolean $TransSplit) Set <p>Transaction split.<br>Read and write operations in a transaction are split and executed on different instances.</p>
 * @method string getAccessMode() Obtain <p>Connection mode:<br>nearby, balance</p>
 * @method void setAccessMode(string $AccessMode) Set <p>Connection mode:<br>nearby, balance</p>
 * @method string getOpenConnectionPool() Obtain <p>Whether to enable the connection pool:<br>yes, no</p>
 * @method void setOpenConnectionPool(string $OpenConnectionPool) Set <p>Whether to enable the connection pool:<br>yes, no</p>
 * @method string getConnectionPoolType() Obtain <p>Connection pool Type:<br>SessionConnectionPool</p>
 * @method void setConnectionPoolType(string $ConnectionPoolType) Set <p>Connection pool Type:<br>SessionConnectionPool</p>
 * @method integer getConnectionPoolTimeOut() Obtain <p>Connection pool time.<br>Optional range: 0-300 (seconds).</p>
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) Set <p>Connection pool time.<br>Optional range: 0-300 (seconds).</p>
 * @method boolean getApNodeAsRoNode() Obtain <p>Whether to treat the libra node as an ordinary RO node</p>
 * @method void setApNodeAsRoNode(boolean $ApNodeAsRoNode) Set <p>Whether to treat the libra node as an ordinary RO node</p>
 * @method boolean getApQueryToOtherNode() Obtain <p>Whether to forward to other nodes when a libra node fault occurs</p>
 * @method void setApQueryToOtherNode(boolean $ApQueryToOtherNode) Set <p>Whether to forward to other nodes when a libra node fault occurs</p>
 * @method string getLoadBalanceMode() Obtain 
 * @method void setLoadBalanceMode(string $LoadBalanceMode) Set 
 */
class ModifyProxyRwSplitRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster ID, for example, cynosdbmysql-asd123</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Database Proxy Group ID, such as cynosdbmysql-proxy-qwe123</p>
     */
    public $ProxyGroupId;

    /**
     * @var string <p>Consistency Type "eventual"-final consistency, "session"-session consistency, "global"-global consistency</p>
     */
    public $ConsistencyType;

    /**
     * @var string <p>Consistency timeout.<br>Value ranges from 0 to 1000000 (microseconds). When set to 0, it means the request will wait if the read-only instance fails to satisfy the consistency policy due to delay.</p>
     */
    public $ConsistencyTimeOut;

    /**
     * @var string <p>Read-write weight allocation mode; system Auto-Assignment: "system", custom: "custom"</p>
     */
    public $WeightMode;

    /**
     * @var array <p>Instance read-only weight.</p>
     */
    public $InstanceWeights;

    /**
     * @var string <p>Whether fault migration is enabled. After a failure occurs, the connection address will be routed to primary instance. Value: "yes", "no"</p>
     */
    public $FailOver;

    /**
     * @var string <p>Automatically add read-only instance, value: "yes", "no"</p>
     */
    public $AutoAddRo;

    /**
     * @var string <p>Whether to enable read-write separation.<br>This parameter is deprecated. Set the read-write attribute through RwType.</p>
     */
    public $OpenRw;

    /**
     * @var string <p>Read-write type:<br>READWRITE, READONLY</p>
     */
    public $RwType;

    /**
     * @var boolean <p>Transaction split.<br>Read and write operations in a transaction are split and executed on different instances.</p>
     */
    public $TransSplit;

    /**
     * @var string <p>Connection mode:<br>nearby, balance</p>
     */
    public $AccessMode;

    /**
     * @var string <p>Whether to enable the connection pool:<br>yes, no</p>
     */
    public $OpenConnectionPool;

    /**
     * @var string <p>Connection pool Type:<br>SessionConnectionPool</p>
     */
    public $ConnectionPoolType;

    /**
     * @var integer <p>Connection pool time.<br>Optional range: 0-300 (seconds).</p>
     */
    public $ConnectionPoolTimeOut;

    /**
     * @var boolean <p>Whether to treat the libra node as an ordinary RO node</p>
     */
    public $ApNodeAsRoNode;

    /**
     * @var boolean <p>Whether to forward to other nodes when a libra node fault occurs</p>
     */
    public $ApQueryToOtherNode;

    /**
     * @var string 
     */
    public $LoadBalanceMode;

    /**
     * @param string $ClusterId <p>Cluster ID, for example, cynosdbmysql-asd123</p>
     * @param string $ProxyGroupId <p>Database Proxy Group ID, such as cynosdbmysql-proxy-qwe123</p>
     * @param string $ConsistencyType <p>Consistency Type "eventual"-final consistency, "session"-session consistency, "global"-global consistency</p>
     * @param string $ConsistencyTimeOut <p>Consistency timeout.<br>Value ranges from 0 to 1000000 (microseconds). When set to 0, it means the request will wait if the read-only instance fails to satisfy the consistency policy due to delay.</p>
     * @param string $WeightMode <p>Read-write weight allocation mode; system Auto-Assignment: "system", custom: "custom"</p>
     * @param array $InstanceWeights <p>Instance read-only weight.</p>
     * @param string $FailOver <p>Whether fault migration is enabled. After a failure occurs, the connection address will be routed to primary instance. Value: "yes", "no"</p>
     * @param string $AutoAddRo <p>Automatically add read-only instance, value: "yes", "no"</p>
     * @param string $OpenRw <p>Whether to enable read-write separation.<br>This parameter is deprecated. Set the read-write attribute through RwType.</p>
     * @param string $RwType <p>Read-write type:<br>READWRITE, READONLY</p>
     * @param boolean $TransSplit <p>Transaction split.<br>Read and write operations in a transaction are split and executed on different instances.</p>
     * @param string $AccessMode <p>Connection mode:<br>nearby, balance</p>
     * @param string $OpenConnectionPool <p>Whether to enable the connection pool:<br>yes, no</p>
     * @param string $ConnectionPoolType <p>Connection pool Type:<br>SessionConnectionPool</p>
     * @param integer $ConnectionPoolTimeOut <p>Connection pool time.<br>Optional range: 0-300 (seconds).</p>
     * @param boolean $ApNodeAsRoNode <p>Whether to treat the libra node as an ordinary RO node</p>
     * @param boolean $ApQueryToOtherNode <p>Whether to forward to other nodes when a libra node fault occurs</p>
     * @param string $LoadBalanceMode 
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("ConsistencyType",$param) and $param["ConsistencyType"] !== null) {
            $this->ConsistencyType = $param["ConsistencyType"];
        }

        if (array_key_exists("ConsistencyTimeOut",$param) and $param["ConsistencyTimeOut"] !== null) {
            $this->ConsistencyTimeOut = $param["ConsistencyTimeOut"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("InstanceWeights",$param) and $param["InstanceWeights"] !== null) {
            $this->InstanceWeights = [];
            foreach ($param["InstanceWeights"] as $key => $value){
                $obj = new ProxyInstanceWeight();
                $obj->deserialize($value);
                array_push($this->InstanceWeights, $obj);
            }
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("OpenRw",$param) and $param["OpenRw"] !== null) {
            $this->OpenRw = $param["OpenRw"];
        }

        if (array_key_exists("RwType",$param) and $param["RwType"] !== null) {
            $this->RwType = $param["RwType"];
        }

        if (array_key_exists("TransSplit",$param) and $param["TransSplit"] !== null) {
            $this->TransSplit = $param["TransSplit"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("OpenConnectionPool",$param) and $param["OpenConnectionPool"] !== null) {
            $this->OpenConnectionPool = $param["OpenConnectionPool"];
        }

        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }

        if (array_key_exists("ConnectionPoolTimeOut",$param) and $param["ConnectionPoolTimeOut"] !== null) {
            $this->ConnectionPoolTimeOut = $param["ConnectionPoolTimeOut"];
        }

        if (array_key_exists("ApNodeAsRoNode",$param) and $param["ApNodeAsRoNode"] !== null) {
            $this->ApNodeAsRoNode = $param["ApNodeAsRoNode"];
        }

        if (array_key_exists("ApQueryToOtherNode",$param) and $param["ApQueryToOtherNode"] !== null) {
            $this->ApQueryToOtherNode = $param["ApQueryToOtherNode"];
        }

        if (array_key_exists("LoadBalanceMode",$param) and $param["LoadBalanceMode"] !== null) {
            $this->LoadBalanceMode = $param["LoadBalanceMode"];
        }
    }
}
