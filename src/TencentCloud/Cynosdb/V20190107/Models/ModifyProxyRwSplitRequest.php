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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProxyRwSplit request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getProxyGroupId() Obtain Database proxy group ID
 * @method void setProxyGroupId(string $ProxyGroupId) Set Database proxy group ID
 * @method string getConsistencyType() Obtain Consistency type. Valid values: `eventual` (eventual consistency), `session` (session consistency), `global` (global consistency).
 * @method void setConsistencyType(string $ConsistencyType) Set Consistency type. Valid values: `eventual` (eventual consistency), `session` (session consistency), `global` (global consistency).
 * @method string getConsistencyTimeOut() Obtain Consistency timeout period
 * @method void setConsistencyTimeOut(string $ConsistencyTimeOut) Set Consistency timeout period
 * @method string getWeightMode() Obtain Assignment mode of read/write weights. Valid values: `system` (auto-assigned), `custom`
 * @method void setWeightMode(string $WeightMode) Set Assignment mode of read/write weights. Valid values: `system` (auto-assigned), `custom`
 * @method array getInstanceWeights() Obtain Read-Only weight of an instance
 * @method void setInstanceWeights(array $InstanceWeights) Set Read-Only weight of an instance
 * @method string getFailOver() Obtain Whether to enable failover. If it is enabled, the connection address will route requests to the source instance in case of proxy failure. Valid values: `true`, `false`.
 * @method void setFailOver(string $FailOver) Set Whether to enable failover. If it is enabled, the connection address will route requests to the source instance in case of proxy failure. Valid values: `true`, `false`.
 * @method string getAutoAddRo() Obtain Whether to automatically add read-only instances. Valid values: `true`, `false`
 * @method void setAutoAddRo(string $AutoAddRo) Set Whether to automatically add read-only instances. Valid values: `true`, `false`
 * @method string getOpenRw() Obtain Whether to enable read/write separation
 * @method void setOpenRw(string $OpenRw) Set Whether to enable read/write separation
 * @method string getRwType() Obtain Read/Write type. Valid values:
`READWRITE`, `READONLY`.
 * @method void setRwType(string $RwType) Set Read/Write type. Valid values:
`READWRITE`, `READONLY`.
 * @method boolean getTransSplit() Obtain Transaction split
 * @method void setTransSplit(boolean $TransSplit) Set Transaction split
 * @method string getAccessMode() Obtain Connection mode. Valid values:
`nearby`, `balance`.
 * @method void setAccessMode(string $AccessMode) Set Connection mode. Valid values:
`nearby`, `balance`.
 * @method string getOpenConnectionPool() Obtain Whether to enable the connection pool. Valid values: 
`yes`, `no`.
 * @method void setOpenConnectionPool(string $OpenConnectionPool) Set Whether to enable the connection pool. Valid values: 
`yes`, `no`.
 * @method string getConnectionPoolType() Obtain Connection pool type. Valid values:
`ConnectionPoolType`, `SessionConnectionPool`.
 * @method void setConnectionPoolType(string $ConnectionPoolType) Set Connection pool type. Valid values:
`ConnectionPoolType`, `SessionConnectionPool`.
 * @method integer getConnectionPoolTimeOut() Obtain Connection persistence timeout
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) Set Connection persistence timeout
 */
class ModifyProxyRwSplitRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Database proxy group ID
     */
    public $ProxyGroupId;

    /**
     * @var string Consistency type. Valid values: `eventual` (eventual consistency), `session` (session consistency), `global` (global consistency).
     */
    public $ConsistencyType;

    /**
     * @var string Consistency timeout period
     */
    public $ConsistencyTimeOut;

    /**
     * @var string Assignment mode of read/write weights. Valid values: `system` (auto-assigned), `custom`
     */
    public $WeightMode;

    /**
     * @var array Read-Only weight of an instance
     */
    public $InstanceWeights;

    /**
     * @var string Whether to enable failover. If it is enabled, the connection address will route requests to the source instance in case of proxy failure. Valid values: `true`, `false`.
     */
    public $FailOver;

    /**
     * @var string Whether to automatically add read-only instances. Valid values: `true`, `false`
     */
    public $AutoAddRo;

    /**
     * @var string Whether to enable read/write separation
     */
    public $OpenRw;

    /**
     * @var string Read/Write type. Valid values:
`READWRITE`, `READONLY`.
     */
    public $RwType;

    /**
     * @var boolean Transaction split
     */
    public $TransSplit;

    /**
     * @var string Connection mode. Valid values:
`nearby`, `balance`.
     */
    public $AccessMode;

    /**
     * @var string Whether to enable the connection pool. Valid values: 
`yes`, `no`.
     */
    public $OpenConnectionPool;

    /**
     * @var string Connection pool type. Valid values:
`ConnectionPoolType`, `SessionConnectionPool`.
     */
    public $ConnectionPoolType;

    /**
     * @var integer Connection persistence timeout
     */
    public $ConnectionPoolTimeOut;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ProxyGroupId Database proxy group ID
     * @param string $ConsistencyType Consistency type. Valid values: `eventual` (eventual consistency), `session` (session consistency), `global` (global consistency).
     * @param string $ConsistencyTimeOut Consistency timeout period
     * @param string $WeightMode Assignment mode of read/write weights. Valid values: `system` (auto-assigned), `custom`
     * @param array $InstanceWeights Read-Only weight of an instance
     * @param string $FailOver Whether to enable failover. If it is enabled, the connection address will route requests to the source instance in case of proxy failure. Valid values: `true`, `false`.
     * @param string $AutoAddRo Whether to automatically add read-only instances. Valid values: `true`, `false`
     * @param string $OpenRw Whether to enable read/write separation
     * @param string $RwType Read/Write type. Valid values:
`READWRITE`, `READONLY`.
     * @param boolean $TransSplit Transaction split
     * @param string $AccessMode Connection mode. Valid values:
`nearby`, `balance`.
     * @param string $OpenConnectionPool Whether to enable the connection pool. Valid values: 
`yes`, `no`.
     * @param string $ConnectionPoolType Connection pool type. Valid values:
`ConnectionPoolType`, `SessionConnectionPool`.
     * @param integer $ConnectionPoolTimeOut Connection persistence timeout
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
    }
}
