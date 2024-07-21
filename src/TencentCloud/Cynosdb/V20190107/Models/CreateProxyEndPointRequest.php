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
 * CreateProxyEndPoint request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getUniqueVpcId() Obtain VPC ID, which is the same as that of the cluster by default.
 * @method void setUniqueVpcId(string $UniqueVpcId) Set VPC ID, which is the same as that of the cluster by default.
 * @method string getUniqueSubnetId() Obtain VPCe subnet ID, which is the same as that of the cluster by default.
 * @method void setUniqueSubnetId(string $UniqueSubnetId) Set VPCe subnet ID, which is the same as that of the cluster by default.
 * @method string getConnectionPoolType() Obtain Connection pool type. Valid value: `SessionConnectionPool` (session-level connection pool)
 * @method void setConnectionPoolType(string $ConnectionPoolType) Set Connection pool type. Valid value: `SessionConnectionPool` (session-level connection pool)
 * @method string getOpenConnectionPool() Obtain Whether to enable connection pool. Valid value: `yes` (enable), `no` (disable).
 * @method void setOpenConnectionPool(string $OpenConnectionPool) Set Whether to enable connection pool. Valid value: `yes` (enable), `no` (disable).
 * @method integer getConnectionPoolTimeOut() Obtain Connection pool threshold in seconds
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) Set Connection pool threshold in seconds
 * @method array getSecurityGroupIds() Obtain Array of security group IDs
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Array of security group IDs
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getVip() Obtain VIP information
 * @method void setVip(string $Vip) Set VIP information
 * @method string getWeightMode() Obtain Weight mode. 
Valid values: `system` (system-assigned), `custom` (custom).
 * @method void setWeightMode(string $WeightMode) Set Weight mode. 
Valid values: `system` (system-assigned), `custom` (custom).
 * @method string getAutoAddRo() Obtain Whether to automatically add read-only instance. Valid value: `yes`, `no`.
 * @method void setAutoAddRo(string $AutoAddRo) Set Whether to automatically add read-only instance. Valid value: `yes`, `no`.
 * @method string getFailOver() Obtain Whether to enable failover
 * @method void setFailOver(string $FailOver) Set Whether to enable failover
 * @method string getConsistencyType() Obtain Consistency type. Valid values: 
`eventual`, `global`, `session`.
 * @method void setConsistencyType(string $ConsistencyType) Set Consistency type. Valid values: 
`eventual`, `global`, `session`.
 * @method string getRwType() Obtain Read-write attribute. Valid values: 
`READWRITE`, `READONLY`.
 * @method void setRwType(string $RwType) Set Read-write attribute. Valid values: 
`READWRITE`, `READONLY`.
 * @method integer getConsistencyTimeOut() Obtain Consistency timeout period
 * @method void setConsistencyTimeOut(integer $ConsistencyTimeOut) Set Consistency timeout period
 * @method boolean getTransSplit() Obtain Transaction split
 * @method void setTransSplit(boolean $TransSplit) Set Transaction split
 * @method string getAccessMode() Obtain Connection mode. Valid values:
`nearby`, `balance`.
 * @method void setAccessMode(string $AccessMode) Set Connection mode. Valid values:
`nearby`, `balance`.
 * @method array getInstanceWeights() Obtain Instance weight
 * @method void setInstanceWeights(array $InstanceWeights) Set Instance weight
 */
class CreateProxyEndPointRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string VPC ID, which is the same as that of the cluster by default.
     */
    public $UniqueVpcId;

    /**
     * @var string VPCe subnet ID, which is the same as that of the cluster by default.
     */
    public $UniqueSubnetId;

    /**
     * @var string Connection pool type. Valid value: `SessionConnectionPool` (session-level connection pool)
     */
    public $ConnectionPoolType;

    /**
     * @var string Whether to enable connection pool. Valid value: `yes` (enable), `no` (disable).
     */
    public $OpenConnectionPool;

    /**
     * @var integer Connection pool threshold in seconds
     */
    public $ConnectionPoolTimeOut;

    /**
     * @var array Array of security group IDs
     */
    public $SecurityGroupIds;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string VIP information
     */
    public $Vip;

    /**
     * @var string Weight mode. 
Valid values: `system` (system-assigned), `custom` (custom).
     */
    public $WeightMode;

    /**
     * @var string Whether to automatically add read-only instance. Valid value: `yes`, `no`.
     */
    public $AutoAddRo;

    /**
     * @var string Whether to enable failover
     */
    public $FailOver;

    /**
     * @var string Consistency type. Valid values: 
`eventual`, `global`, `session`.
     */
    public $ConsistencyType;

    /**
     * @var string Read-write attribute. Valid values: 
`READWRITE`, `READONLY`.
     */
    public $RwType;

    /**
     * @var integer Consistency timeout period
     */
    public $ConsistencyTimeOut;

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
     * @var array Instance weight
     */
    public $InstanceWeights;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $UniqueVpcId VPC ID, which is the same as that of the cluster by default.
     * @param string $UniqueSubnetId VPCe subnet ID, which is the same as that of the cluster by default.
     * @param string $ConnectionPoolType Connection pool type. Valid value: `SessionConnectionPool` (session-level connection pool)
     * @param string $OpenConnectionPool Whether to enable connection pool. Valid value: `yes` (enable), `no` (disable).
     * @param integer $ConnectionPoolTimeOut Connection pool threshold in seconds
     * @param array $SecurityGroupIds Array of security group IDs
     * @param string $Description Description
     * @param string $Vip VIP information
     * @param string $WeightMode Weight mode. 
Valid values: `system` (system-assigned), `custom` (custom).
     * @param string $AutoAddRo Whether to automatically add read-only instance. Valid value: `yes`, `no`.
     * @param string $FailOver Whether to enable failover
     * @param string $ConsistencyType Consistency type. Valid values: 
`eventual`, `global`, `session`.
     * @param string $RwType Read-write attribute. Valid values: 
`READWRITE`, `READONLY`.
     * @param integer $ConsistencyTimeOut Consistency timeout period
     * @param boolean $TransSplit Transaction split
     * @param string $AccessMode Connection mode. Valid values:
`nearby`, `balance`.
     * @param array $InstanceWeights Instance weight
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
