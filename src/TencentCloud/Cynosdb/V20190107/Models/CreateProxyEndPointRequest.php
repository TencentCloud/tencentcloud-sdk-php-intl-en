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
 * CreateProxyEndPoint request structure.
 *
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getUniqueVpcId() Obtain <p>VPC ID.</p>
 * @method void setUniqueVpcId(string $UniqueVpcId) Set <p>VPC ID.</p>
 * @method string getUniqueSubnetId() Obtain <p>VPC subnet ID.</p>
 * @method void setUniqueSubnetId(string $UniqueSubnetId) Set <p>VPC subnet ID.</p>
 * @method string getConnectionPoolType() Obtain <p>Connection pool Type: SessionConnectionPool (session-level connection pool).</p>
 * @method void setConnectionPoolType(string $ConnectionPoolType) Set <p>Connection pool Type: SessionConnectionPool (session-level connection pool).</p>
 * @method string getOpenConnectionPool() Obtain <p>Whether the connection pool is enabled.<br>yes: enabled.<br>no: disabled.</p>
 * @method void setOpenConnectionPool(string $OpenConnectionPool) Set <p>Whether the connection pool is enabled.<br>yes: enabled.<br>no: disabled.</p>
 * @method integer getConnectionPoolTimeOut() Obtain <p>Connection pool threshold: measurement unit (seconds), optional range: 0 - 300 seconds.</p>
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) Set <p>Connection pool threshold: measurement unit (seconds), optional range: 0 - 300 seconds.</p>
 * @method array getSecurityGroupIds() Obtain <p>Bound security group ID array.</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>Bound security group ID array.</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method string getVip() Obtain <p>vip information that should be bound must correspond to UniqueVpcId.</p>
 * @method void setVip(string $Vip) Set <p>vip information that should be bound must correspond to UniqueVpcId.</p>
 * @method string getWeightMode() Obtain <p>Weight mode:<br>system: system-assigned.<br>custom: custom.</p>
 * @method void setWeightMode(string $WeightMode) Set <p>Weight mode:<br>system: system-assigned.<br>custom: custom.</p>
 * @method string getAutoAddRo() Obtain <p>Automatically add read-only instance.<br>yes: means automatically add read-only instance.<br>no: means not automatic add read-only instance.</p>
 * @method void setAutoAddRo(string $AutoAddRo) Set <p>Automatically add read-only instance.<br>yes: means automatically add read-only instance.<br>no: means not automatic add read-only instance.</p>
 * @method string getFailOver() Obtain <p>Whether fault migration is enabled.<br>yes: Enable. Once enabled, when a database proxy failure occurs, the connection address will be routed to the primary instance.<br>no: Disabled.<br>Description:<br>This item can be set to only when the RwType parameter value is READWRITE.</p>
 * @method void setFailOver(string $FailOver) Set <p>Whether fault migration is enabled.<br>yes: Enable. Once enabled, when a database proxy failure occurs, the connection address will be routed to the primary instance.<br>no: Disabled.<br>Description:<br>This item can be set to only when the RwType parameter value is READWRITE.</p>
 * @method string getConsistencyType() Obtain <p>Consistency type:<br>eventual: Final consistency.<br>global: Global consistency.<br>session: Session consistency.<br>Description:<br>This item can be set to only when the RwType parameter value is READWRITE.</p>
 * @method void setConsistencyType(string $ConsistencyType) Set <p>Consistency type:<br>eventual: Final consistency.<br>global: Global consistency.<br>session: Session consistency.<br>Description:<br>This item can be set to only when the RwType parameter value is READWRITE.</p>
 * @method string getRwType() Obtain <p>Read-write attribute:<br>READWRITE: means read-write separation. When the parameter value is READWRITE, FailOver and ConsistencyType parameters can be set.<br>READONLY: means read-only.</p>
 * @method void setRwType(string $RwType) Set <p>Read-write attribute:<br>READWRITE: means read-write separation. When the parameter value is READWRITE, FailOver and ConsistencyType parameters can be set.<br>READONLY: means read-only.</p>
 * @method integer getConsistencyTimeOut() Obtain <p>Consistency timeout. Value ranges from 0 to 1000000 (microseconds). When set to 0, it means the request will wait if the read-only instance fails to satisfy the consistency policy due to latency.</p>
 * @method void setConsistencyTimeOut(integer $ConsistencyTimeOut) Set <p>Consistency timeout. Value ranges from 0 to 1000000 (microseconds). When set to 0, it means the request will wait if the read-only instance fails to satisfy the consistency policy due to latency.</p>
 * @method boolean getTransSplit() Obtain <p>Whether to enable transaction split. Once enabled, read and write operations in a transaction are split and executed on different instances.</p>
 * @method void setTransSplit(boolean $TransSplit) Set <p>Whether to enable transaction split. Once enabled, read and write operations in a transaction are split and executed on different instances.</p>
 * @method string getAccessMode() Obtain <p>Access mode:<br>nearby: proximity access.<br>balance: balanced allocation.</p>
 * @method void setAccessMode(string $AccessMode) Set <p>Access mode:<br>nearby: proximity access.<br>balance: balanced allocation.</p>
 * @method array getInstanceWeights() Obtain <p>Instance weight.</p>
 * @method void setInstanceWeights(array $InstanceWeights) Set <p>Instance weight.</p>
 * @method string getLoadBalanceMode() Obtain 
 * @method void setLoadBalanceMode(string $LoadBalanceMode) Set 
 */
class CreateProxyEndPointRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>VPC ID.</p>
     */
    public $UniqueVpcId;

    /**
     * @var string <p>VPC subnet ID.</p>
     */
    public $UniqueSubnetId;

    /**
     * @var string <p>Connection pool Type: SessionConnectionPool (session-level connection pool).</p>
     */
    public $ConnectionPoolType;

    /**
     * @var string <p>Whether the connection pool is enabled.<br>yes: enabled.<br>no: disabled.</p>
     */
    public $OpenConnectionPool;

    /**
     * @var integer <p>Connection pool threshold: measurement unit (seconds), optional range: 0 - 300 seconds.</p>
     */
    public $ConnectionPoolTimeOut;

    /**
     * @var array <p>Bound security group ID array.</p>
     */
    public $SecurityGroupIds;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var string <p>vip information that should be bound must correspond to UniqueVpcId.</p>
     */
    public $Vip;

    /**
     * @var string <p>Weight mode:<br>system: system-assigned.<br>custom: custom.</p>
     */
    public $WeightMode;

    /**
     * @var string <p>Automatically add read-only instance.<br>yes: means automatically add read-only instance.<br>no: means not automatic add read-only instance.</p>
     */
    public $AutoAddRo;

    /**
     * @var string <p>Whether fault migration is enabled.<br>yes: Enable. Once enabled, when a database proxy failure occurs, the connection address will be routed to the primary instance.<br>no: Disabled.<br>Description:<br>This item can be set to only when the RwType parameter value is READWRITE.</p>
     */
    public $FailOver;

    /**
     * @var string <p>Consistency type:<br>eventual: Final consistency.<br>global: Global consistency.<br>session: Session consistency.<br>Description:<br>This item can be set to only when the RwType parameter value is READWRITE.</p>
     */
    public $ConsistencyType;

    /**
     * @var string <p>Read-write attribute:<br>READWRITE: means read-write separation. When the parameter value is READWRITE, FailOver and ConsistencyType parameters can be set.<br>READONLY: means read-only.</p>
     */
    public $RwType;

    /**
     * @var integer <p>Consistency timeout. Value ranges from 0 to 1000000 (microseconds). When set to 0, it means the request will wait if the read-only instance fails to satisfy the consistency policy due to latency.</p>
     */
    public $ConsistencyTimeOut;

    /**
     * @var boolean <p>Whether to enable transaction split. Once enabled, read and write operations in a transaction are split and executed on different instances.</p>
     */
    public $TransSplit;

    /**
     * @var string <p>Access mode:<br>nearby: proximity access.<br>balance: balanced allocation.</p>
     */
    public $AccessMode;

    /**
     * @var array <p>Instance weight.</p>
     */
    public $InstanceWeights;

    /**
     * @var string 
     */
    public $LoadBalanceMode;

    /**
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $UniqueVpcId <p>VPC ID.</p>
     * @param string $UniqueSubnetId <p>VPC subnet ID.</p>
     * @param string $ConnectionPoolType <p>Connection pool Type: SessionConnectionPool (session-level connection pool).</p>
     * @param string $OpenConnectionPool <p>Whether the connection pool is enabled.<br>yes: enabled.<br>no: disabled.</p>
     * @param integer $ConnectionPoolTimeOut <p>Connection pool threshold: measurement unit (seconds), optional range: 0 - 300 seconds.</p>
     * @param array $SecurityGroupIds <p>Bound security group ID array.</p>
     * @param string $Description <p>Description.</p>
     * @param string $Vip <p>vip information that should be bound must correspond to UniqueVpcId.</p>
     * @param string $WeightMode <p>Weight mode:<br>system: system-assigned.<br>custom: custom.</p>
     * @param string $AutoAddRo <p>Automatically add read-only instance.<br>yes: means automatically add read-only instance.<br>no: means not automatic add read-only instance.</p>
     * @param string $FailOver <p>Whether fault migration is enabled.<br>yes: Enable. Once enabled, when a database proxy failure occurs, the connection address will be routed to the primary instance.<br>no: Disabled.<br>Description:<br>This item can be set to only when the RwType parameter value is READWRITE.</p>
     * @param string $ConsistencyType <p>Consistency type:<br>eventual: Final consistency.<br>global: Global consistency.<br>session: Session consistency.<br>Description:<br>This item can be set to only when the RwType parameter value is READWRITE.</p>
     * @param string $RwType <p>Read-write attribute:<br>READWRITE: means read-write separation. When the parameter value is READWRITE, FailOver and ConsistencyType parameters can be set.<br>READONLY: means read-only.</p>
     * @param integer $ConsistencyTimeOut <p>Consistency timeout. Value ranges from 0 to 1000000 (microseconds). When set to 0, it means the request will wait if the read-only instance fails to satisfy the consistency policy due to latency.</p>
     * @param boolean $TransSplit <p>Whether to enable transaction split. Once enabled, read and write operations in a transaction are split and executed on different instances.</p>
     * @param string $AccessMode <p>Access mode:<br>nearby: proximity access.<br>balance: balanced allocation.</p>
     * @param array $InstanceWeights <p>Instance weight.</p>
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

        if (array_key_exists("UniqueVpcId",$param) and $param["UniqueVpcId"] !== null) {
            $this->UniqueVpcId = $param["UniqueVpcId"];
        }

        if (array_key_exists("UniqueSubnetId",$param) and $param["UniqueSubnetId"] !== null) {
            $this->UniqueSubnetId = $param["UniqueSubnetId"];
        }

        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }

        if (array_key_exists("OpenConnectionPool",$param) and $param["OpenConnectionPool"] !== null) {
            $this->OpenConnectionPool = $param["OpenConnectionPool"];
        }

        if (array_key_exists("ConnectionPoolTimeOut",$param) and $param["ConnectionPoolTimeOut"] !== null) {
            $this->ConnectionPoolTimeOut = $param["ConnectionPoolTimeOut"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("ConsistencyType",$param) and $param["ConsistencyType"] !== null) {
            $this->ConsistencyType = $param["ConsistencyType"];
        }

        if (array_key_exists("RwType",$param) and $param["RwType"] !== null) {
            $this->RwType = $param["RwType"];
        }

        if (array_key_exists("ConsistencyTimeOut",$param) and $param["ConsistencyTimeOut"] !== null) {
            $this->ConsistencyTimeOut = $param["ConsistencyTimeOut"];
        }

        if (array_key_exists("TransSplit",$param) and $param["TransSplit"] !== null) {
            $this->TransSplit = $param["TransSplit"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("InstanceWeights",$param) and $param["InstanceWeights"] !== null) {
            $this->InstanceWeights = [];
            foreach ($param["InstanceWeights"] as $key => $value){
                $obj = new ProxyInstanceWeight();
                $obj->deserialize($value);
                array_push($this->InstanceWeights, $obj);
            }
        }

        if (array_key_exists("LoadBalanceMode",$param) and $param["LoadBalanceMode"] !== null) {
            $this->LoadBalanceMode = $param["LoadBalanceMode"];
        }
    }
}
