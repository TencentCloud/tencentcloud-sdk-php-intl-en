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
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getUniqueVpcId() Obtain VPC ID. By default, it remains consistent with the VPC ID of the cluster.
 * @method void setUniqueVpcId(string $UniqueVpcId) Set VPC ID. By default, it remains consistent with the VPC ID of the cluster.
 * @method string getUniqueSubnetId() Obtain Subnet ID of the VPC. By default, it remains consistent with the subnet ID of the cluster.
 * @method void setUniqueSubnetId(string $UniqueSubnetId) Set Subnet ID of the VPC. By default, it remains consistent with the subnet ID of the cluster.
 * @method string getConnectionPoolType() Obtain Type of connection pool: SessionConnectionPool (session-level connection pool).
 * @method void setConnectionPoolType(string $ConnectionPoolType) Set Type of connection pool: SessionConnectionPool (session-level connection pool).
 * @method string getOpenConnectionPool() Obtain Whether to enable the connection pool.
yes: indicates enabled.
no: indicates not enabled.
 * @method void setOpenConnectionPool(string $OpenConnectionPool) Set Whether to enable the connection pool.
yes: indicates enabled.
no: indicates not enabled.
 * @method integer getConnectionPoolTimeOut() Obtain Threshold of the connection pool: unit (seconds). Valid values: 0 - 300 seconds.
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) Set Threshold of the connection pool: unit (seconds). Valid values: 0 - 300 seconds.
 * @method array getSecurityGroupIds() Obtain Array of bound security group IDs.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Array of bound security group IDs.
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 * @method string getVip() Obtain The vip information to be bound must correspond to the UniqueVpcId.
 * @method void setVip(string $Vip) Set The vip information to be bound must correspond to the UniqueVpcId.
 * @method string getWeightMode() Obtain Weight mode:
system: system-assigned.
custom: custom.
 * @method void setWeightMode(string $WeightMode) Set Weight mode:
system: system-assigned.
custom: custom.
 * @method string getAutoAddRo() Obtain Whether to automatically add a read-only instance.
yes: indicates automatically adding a read-only instance.
no: indicates not to automatically add a read-only instance.
 * @method void setAutoAddRo(string $AutoAddRo) Set Whether to automatically add a read-only instance.
yes: indicates automatically adding a read-only instance.
no: indicates not to automatically add a read-only instance.
 * @method string getFailOver() Obtain Whether to enable failover.
yes: indicates enabled. After it is enabled, when the database proxy encounters faults, the connection address will be routed to the primary instance.
no: indicates not enabled.
Description:
Only when the value of the RwType parameter is READWRITE can this option be configured.
 * @method void setFailOver(string $FailOver) Set Whether to enable failover.
yes: indicates enabled. After it is enabled, when the database proxy encounters faults, the connection address will be routed to the primary instance.
no: indicates not enabled.
Description:
Only when the value of the RwType parameter is READWRITE can this option be configured.
 * @method string getConsistencyType() Obtain Consistency Type:
eventual: eventual consistency.
global: global consistency.
session: session consistency.
Description:
Only when the RwType parameter value is READWRITE can this option be configured.
 * @method void setConsistencyType(string $ConsistencyType) Set Consistency Type:
eventual: eventual consistency.
global: global consistency.
session: session consistency.
Description:
Only when the RwType parameter value is READWRITE can this option be configured.
 * @method string getRwType() Obtain Read-Write Attribute:
READWRITE: indicates read/write splitting. Only when this parameter value is READWRITE can the FailOver and ConsistencyType parameters be configured.
READONLY: indicates read-only.
 * @method void setRwType(string $RwType) Set Read-Write Attribute:
READWRITE: indicates read/write splitting. Only when this parameter value is READWRITE can the FailOver and ConsistencyType parameters be configured.
READONLY: indicates read-only.
 * @method integer getConsistencyTimeOut() Obtain The consistency timeout period. Value range: 0 - 1000000 (microseconds). When set to 0, if a read-only instance experiences latency causing the consistency policy to be unsatisfied, the request will wait indefinitely.
 * @method void setConsistencyTimeOut(integer $ConsistencyTimeOut) Set The consistency timeout period. Value range: 0 - 1000000 (microseconds). When set to 0, if a read-only instance experiences latency causing the consistency policy to be unsatisfied, the request will wait indefinitely.
 * @method boolean getTransSplit() Obtain Whether to enable transaction split. After it is enabled, read and write operations in a transaction are split to different instances for execution.
 * @method void setTransSplit(boolean $TransSplit) Set Whether to enable transaction split. After it is enabled, read and write operations in a transaction are split to different instances for execution.
 * @method string getAccessMode() Obtain Access mode:
nearby: nearby access.
balance: balanced allocation.
 * @method void setAccessMode(string $AccessMode) Set Access mode:
nearby: nearby access.
balance: balanced allocation.
 * @method array getInstanceWeights() Obtain Instance weight.
 * @method void setInstanceWeights(array $InstanceWeights) Set Instance weight.
 */
class CreateProxyEndPointRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string VPC ID. By default, it remains consistent with the VPC ID of the cluster.
     */
    public $UniqueVpcId;

    /**
     * @var string Subnet ID of the VPC. By default, it remains consistent with the subnet ID of the cluster.
     */
    public $UniqueSubnetId;

    /**
     * @var string Type of connection pool: SessionConnectionPool (session-level connection pool).
     */
    public $ConnectionPoolType;

    /**
     * @var string Whether to enable the connection pool.
yes: indicates enabled.
no: indicates not enabled.
     */
    public $OpenConnectionPool;

    /**
     * @var integer Threshold of the connection pool: unit (seconds). Valid values: 0 - 300 seconds.
     */
    public $ConnectionPoolTimeOut;

    /**
     * @var array Array of bound security group IDs.
     */
    public $SecurityGroupIds;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @var string The vip information to be bound must correspond to the UniqueVpcId.
     */
    public $Vip;

    /**
     * @var string Weight mode:
system: system-assigned.
custom: custom.
     */
    public $WeightMode;

    /**
     * @var string Whether to automatically add a read-only instance.
yes: indicates automatically adding a read-only instance.
no: indicates not to automatically add a read-only instance.
     */
    public $AutoAddRo;

    /**
     * @var string Whether to enable failover.
yes: indicates enabled. After it is enabled, when the database proxy encounters faults, the connection address will be routed to the primary instance.
no: indicates not enabled.
Description:
Only when the value of the RwType parameter is READWRITE can this option be configured.
     */
    public $FailOver;

    /**
     * @var string Consistency Type:
eventual: eventual consistency.
global: global consistency.
session: session consistency.
Description:
Only when the RwType parameter value is READWRITE can this option be configured.
     */
    public $ConsistencyType;

    /**
     * @var string Read-Write Attribute:
READWRITE: indicates read/write splitting. Only when this parameter value is READWRITE can the FailOver and ConsistencyType parameters be configured.
READONLY: indicates read-only.
     */
    public $RwType;

    /**
     * @var integer The consistency timeout period. Value range: 0 - 1000000 (microseconds). When set to 0, if a read-only instance experiences latency causing the consistency policy to be unsatisfied, the request will wait indefinitely.
     */
    public $ConsistencyTimeOut;

    /**
     * @var boolean Whether to enable transaction split. After it is enabled, read and write operations in a transaction are split to different instances for execution.
     */
    public $TransSplit;

    /**
     * @var string Access mode:
nearby: nearby access.
balance: balanced allocation.
     */
    public $AccessMode;

    /**
     * @var array Instance weight.
     */
    public $InstanceWeights;

    /**
     * @param string $ClusterId Cluster ID.
     * @param string $UniqueVpcId VPC ID. By default, it remains consistent with the VPC ID of the cluster.
     * @param string $UniqueSubnetId Subnet ID of the VPC. By default, it remains consistent with the subnet ID of the cluster.
     * @param string $ConnectionPoolType Type of connection pool: SessionConnectionPool (session-level connection pool).
     * @param string $OpenConnectionPool Whether to enable the connection pool.
yes: indicates enabled.
no: indicates not enabled.
     * @param integer $ConnectionPoolTimeOut Threshold of the connection pool: unit (seconds). Valid values: 0 - 300 seconds.
     * @param array $SecurityGroupIds Array of bound security group IDs.
     * @param string $Description Description.
     * @param string $Vip The vip information to be bound must correspond to the UniqueVpcId.
     * @param string $WeightMode Weight mode:
system: system-assigned.
custom: custom.
     * @param string $AutoAddRo Whether to automatically add a read-only instance.
yes: indicates automatically adding a read-only instance.
no: indicates not to automatically add a read-only instance.
     * @param string $FailOver Whether to enable failover.
yes: indicates enabled. After it is enabled, when the database proxy encounters faults, the connection address will be routed to the primary instance.
no: indicates not enabled.
Description:
Only when the value of the RwType parameter is READWRITE can this option be configured.
     * @param string $ConsistencyType Consistency Type:
eventual: eventual consistency.
global: global consistency.
session: session consistency.
Description:
Only when the RwType parameter value is READWRITE can this option be configured.
     * @param string $RwType Read-Write Attribute:
READWRITE: indicates read/write splitting. Only when this parameter value is READWRITE can the FailOver and ConsistencyType parameters be configured.
READONLY: indicates read-only.
     * @param integer $ConsistencyTimeOut The consistency timeout period. Value range: 0 - 1000000 (microseconds). When set to 0, if a read-only instance experiences latency causing the consistency policy to be unsatisfied, the request will wait indefinitely.
     * @param boolean $TransSplit Whether to enable transaction split. After it is enabled, read and write operations in a transaction are split to different instances for execution.
     * @param string $AccessMode Access mode:
nearby: nearby access.
balance: balanced allocation.
     * @param array $InstanceWeights Instance weight.
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
    }
}
