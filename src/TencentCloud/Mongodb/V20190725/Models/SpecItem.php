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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifications of purchasable MongoDB instances
 *
 * @method string getSpecCode() Obtain Specification information identifier
 * @method void setSpecCode(string $SpecCode) Set Specification information identifier
 * @method integer getStatus() Obtain Specification purchasable flag. Valid values: 0 (not purchasable), 1 (purchasable)
 * @method void setStatus(integer $Status) Set Specification purchasable flag. Valid values: 0 (not purchasable), 1 (purchasable)
 * @method integer getCpu() Obtain Computing resource specification in terms of CPU core
 * @method void setCpu(integer $Cpu) Set Computing resource specification in terms of CPU core
 * @method integer getMemory() Obtain Memory size in MB
 * @method void setMemory(integer $Memory) Set Memory size in MB
 * @method integer getDefaultStorage() Obtain Default disk size in MB
 * @method void setDefaultStorage(integer $DefaultStorage) Set Default disk size in MB
 * @method integer getMaxStorage() Obtain Maximum disk size in MB
 * @method void setMaxStorage(integer $MaxStorage) Set Maximum disk size in MB
 * @method integer getMinStorage() Obtain Minimum disk size in MB
 * @method void setMinStorage(integer $MinStorage) Set Minimum disk size in MB
 * @method integer getQps() Obtain Maximum QPS
 * @method void setQps(integer $Qps) Set Maximum QPS
 * @method integer getConns() Obtain Maximum number of connections
 * @method void setConns(integer $Conns) Set Maximum number of connections
 * @method string getMongoVersionCode() Obtain MongoDB version information of an instance
 * @method void setMongoVersionCode(string $MongoVersionCode) Set MongoDB version information of an instance
 * @method integer getMongoVersionValue() Obtain MongoDB version number of an instance
 * @method void setMongoVersionValue(integer $MongoVersionValue) Set MongoDB version number of an instance
 * @method string getVersion() Obtain MongoDB version number of an instance (short)
 * @method void setVersion(string $Version) Set MongoDB version number of an instance (short)
 * @method string getEngineName() Obtain Storage engine
 * @method void setEngineName(string $EngineName) Set Storage engine
 * @method integer getClusterType() Obtain Cluster type. Valid values: 1 (sharding cluster), 0 (replica set cluster)
 * @method void setClusterType(integer $ClusterType) Set Cluster type. Valid values: 1 (sharding cluster), 0 (replica set cluster)
 * @method integer getMinNodeNum() Obtain Minimum number of secondary nodes in a replica set
 * @method void setMinNodeNum(integer $MinNodeNum) Set Minimum number of secondary nodes in a replica set
 * @method integer getMaxNodeNum() Obtain Maximum number of secondary nodes in a replica set
 * @method void setMaxNodeNum(integer $MaxNodeNum) Set Maximum number of secondary nodes in a replica set
 * @method integer getMinReplicateSetNum() Obtain Minimum number of shards
 * @method void setMinReplicateSetNum(integer $MinReplicateSetNum) Set Minimum number of shards
 * @method integer getMaxReplicateSetNum() Obtain Maximum number of shards
 * @method void setMaxReplicateSetNum(integer $MaxReplicateSetNum) Set Maximum number of shards
 * @method integer getMinReplicateSetNodeNum() Obtain Minimum number of secondary nodes in a shard
 * @method void setMinReplicateSetNodeNum(integer $MinReplicateSetNodeNum) Set Minimum number of secondary nodes in a shard
 * @method integer getMaxReplicateSetNodeNum() Obtain Maximum number of secondary nodes in a shard
 * @method void setMaxReplicateSetNodeNum(integer $MaxReplicateSetNodeNum) Set Maximum number of secondary nodes in a shard
 * @method string getMachineType() Obtain Server type. Valid values: 0 (HIO), 4 (HIO10G)
 * @method void setMachineType(string $MachineType) Set Server type. Valid values: 0 (HIO), 4 (HIO10G)
 */
class SpecItem extends AbstractModel
{
    /**
     * @var string Specification information identifier
     */
    public $SpecCode;

    /**
     * @var integer Specification purchasable flag. Valid values: 0 (not purchasable), 1 (purchasable)
     */
    public $Status;

    /**
     * @var integer Computing resource specification in terms of CPU core
     */
    public $Cpu;

    /**
     * @var integer Memory size in MB
     */
    public $Memory;

    /**
     * @var integer Default disk size in MB
     */
    public $DefaultStorage;

    /**
     * @var integer Maximum disk size in MB
     */
    public $MaxStorage;

    /**
     * @var integer Minimum disk size in MB
     */
    public $MinStorage;

    /**
     * @var integer Maximum QPS
     */
    public $Qps;

    /**
     * @var integer Maximum number of connections
     */
    public $Conns;

    /**
     * @var string MongoDB version information of an instance
     */
    public $MongoVersionCode;

    /**
     * @var integer MongoDB version number of an instance
     */
    public $MongoVersionValue;

    /**
     * @var string MongoDB version number of an instance (short)
     */
    public $Version;

    /**
     * @var string Storage engine
     */
    public $EngineName;

    /**
     * @var integer Cluster type. Valid values: 1 (sharding cluster), 0 (replica set cluster)
     */
    public $ClusterType;

    /**
     * @var integer Minimum number of secondary nodes in a replica set
     */
    public $MinNodeNum;

    /**
     * @var integer Maximum number of secondary nodes in a replica set
     */
    public $MaxNodeNum;

    /**
     * @var integer Minimum number of shards
     */
    public $MinReplicateSetNum;

    /**
     * @var integer Maximum number of shards
     */
    public $MaxReplicateSetNum;

    /**
     * @var integer Minimum number of secondary nodes in a shard
     */
    public $MinReplicateSetNodeNum;

    /**
     * @var integer Maximum number of secondary nodes in a shard
     */
    public $MaxReplicateSetNodeNum;

    /**
     * @var string Server type. Valid values: 0 (HIO), 4 (HIO10G)
     */
    public $MachineType;

    /**
     * @param string $SpecCode Specification information identifier
     * @param integer $Status Specification purchasable flag. Valid values: 0 (not purchasable), 1 (purchasable)
     * @param integer $Cpu Computing resource specification in terms of CPU core
     * @param integer $Memory Memory size in MB
     * @param integer $DefaultStorage Default disk size in MB
     * @param integer $MaxStorage Maximum disk size in MB
     * @param integer $MinStorage Minimum disk size in MB
     * @param integer $Qps Maximum QPS
     * @param integer $Conns Maximum number of connections
     * @param string $MongoVersionCode MongoDB version information of an instance
     * @param integer $MongoVersionValue MongoDB version number of an instance
     * @param string $Version MongoDB version number of an instance (short)
     * @param string $EngineName Storage engine
     * @param integer $ClusterType Cluster type. Valid values: 1 (sharding cluster), 0 (replica set cluster)
     * @param integer $MinNodeNum Minimum number of secondary nodes in a replica set
     * @param integer $MaxNodeNum Maximum number of secondary nodes in a replica set
     * @param integer $MinReplicateSetNum Minimum number of shards
     * @param integer $MaxReplicateSetNum Maximum number of shards
     * @param integer $MinReplicateSetNodeNum Minimum number of secondary nodes in a shard
     * @param integer $MaxReplicateSetNodeNum Maximum number of secondary nodes in a shard
     * @param string $MachineType Server type. Valid values: 0 (HIO), 4 (HIO10G)
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
        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("DefaultStorage",$param) and $param["DefaultStorage"] !== null) {
            $this->DefaultStorage = $param["DefaultStorage"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("MinStorage",$param) and $param["MinStorage"] !== null) {
            $this->MinStorage = $param["MinStorage"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Conns",$param) and $param["Conns"] !== null) {
            $this->Conns = $param["Conns"];
        }

        if (array_key_exists("MongoVersionCode",$param) and $param["MongoVersionCode"] !== null) {
            $this->MongoVersionCode = $param["MongoVersionCode"];
        }

        if (array_key_exists("MongoVersionValue",$param) and $param["MongoVersionValue"] !== null) {
            $this->MongoVersionValue = $param["MongoVersionValue"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("EngineName",$param) and $param["EngineName"] !== null) {
            $this->EngineName = $param["EngineName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("MinNodeNum",$param) and $param["MinNodeNum"] !== null) {
            $this->MinNodeNum = $param["MinNodeNum"];
        }

        if (array_key_exists("MaxNodeNum",$param) and $param["MaxNodeNum"] !== null) {
            $this->MaxNodeNum = $param["MaxNodeNum"];
        }

        if (array_key_exists("MinReplicateSetNum",$param) and $param["MinReplicateSetNum"] !== null) {
            $this->MinReplicateSetNum = $param["MinReplicateSetNum"];
        }

        if (array_key_exists("MaxReplicateSetNum",$param) and $param["MaxReplicateSetNum"] !== null) {
            $this->MaxReplicateSetNum = $param["MaxReplicateSetNum"];
        }

        if (array_key_exists("MinReplicateSetNodeNum",$param) and $param["MinReplicateSetNodeNum"] !== null) {
            $this->MinReplicateSetNodeNum = $param["MinReplicateSetNodeNum"];
        }

        if (array_key_exists("MaxReplicateSetNodeNum",$param) and $param["MaxReplicateSetNodeNum"] !== null) {
            $this->MaxReplicateSetNodeNum = $param["MaxReplicateSetNodeNum"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }
    }
}
