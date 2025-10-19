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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TencentDB for MongoDB instance sales specification.
 *
 * @method string getSpecCode() Obtain Specification information identifier. Format: mongo.HIO10G.128G. It consists of three parts: node type, specification type, and memory specification.
- Node type: **mongo** indicates a Mongod node; **mongos** indicates a Mongos node; **cfgstr** indicates a ConfigServer node.
- Specification type: **HIO10G** indicates the general HIO 10GE type; **HCD** indicates the Cloud Disk Edition type.
- Memory specification, in GB. Valid values: 4, 8, 16, 32, 64, 128, 240, and 512. 128g indicates 128 GB.
 * @method void setSpecCode(string $SpecCode) Set Specification information identifier. Format: mongo.HIO10G.128G. It consists of three parts: node type, specification type, and memory specification.
- Node type: **mongo** indicates a Mongod node; **mongos** indicates a Mongos node; **cfgstr** indicates a ConfigServer node.
- Specification type: **HIO10G** indicates the general HIO 10GE type; **HCD** indicates the Cloud Disk Edition type.
- Memory specification, in GB. Valid values: 4, 8, 16, 32, 64, 128, 240, and 512. 128g indicates 128 GB.
 * @method integer getStatus() Obtain Saleable specification status flag. Valid values are as follows:
 - 0: selling stopped.
 - 1: available for sale.
 * @method void setStatus(integer $Status) Set Saleable specification status flag. Valid values are as follows:
 - 0: selling stopped.
 - 1: available for sale.
 * @method integer getCpu() Obtain Computing resource specification, indicating the number of CPU cores.
 * @method void setCpu(integer $Cpu) Set Computing resource specification, indicating the number of CPU cores.
 * @method integer getMemory() Obtain Memory specification. Unit: MB.
 * @method void setMemory(integer $Memory) Set Memory specification. Unit: MB.
 * @method integer getDefaultStorage() Obtain Default disk specification. Unit: MB.
 * @method void setDefaultStorage(integer $DefaultStorage) Set Default disk specification. Unit: MB.
 * @method integer getMaxStorage() Obtain Maximum disk specification. Unit: MB.
 * @method void setMaxStorage(integer $MaxStorage) Set Maximum disk specification. Unit: MB.
 * @method integer getMinStorage() Obtain Minimum disk specification. Unit: MB.
 * @method void setMinStorage(integer $MinStorage) Set Minimum disk specification. Unit: MB.
 * @method integer getQps() Obtain Maximum number of requests per second. Unit: requests/second.
 * @method void setQps(integer $Qps) Set Maximum number of requests per second. Unit: requests/second.
 * @method integer getConns() Obtain Maximum number of connections supported for the specification.
 * @method void setConns(integer $Conns) Set Maximum number of connections supported for the specification.
 * @method string getMongoVersionCode() Obtain Storage engine version information on instances.
- MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
 * @method void setMongoVersionCode(string $MongoVersionCode) Set Storage engine version information on instances.
- MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
 * @method integer getMongoVersionValue() Obtain Digital version corresponding to the instance version.
 * @method void setMongoVersionValue(integer $MongoVersionValue) Set Digital version corresponding to the instance version.
 * @method string getVersion() Obtain Instance version information. Valid values: 4.2, 4.4, 5.0, 6.0, and 7.0.
 * @method void setVersion(string $Version) Set Instance version information. Valid values: 4.2, 4.4, 5.0, 6.0, and 7.0.
 * @method string getEngineName() Obtain Storage engine.
 * @method void setEngineName(string $EngineName) Set Storage engine.
 * @method integer getClusterType() Obtain Cluster type. Valid values are as follows:
 - 1: sharded cluster.
 - 0: replica set cluster.
 * @method void setClusterType(integer $ClusterType) Set Cluster type. Valid values are as follows:
 - 1: sharded cluster.
 - 0: replica set cluster.
 * @method integer getMinNodeNum() Obtain Minimum number of nodes for each replica set.
 * @method void setMinNodeNum(integer $MinNodeNum) Set Minimum number of nodes for each replica set.
 * @method integer getMaxNodeNum() Obtain Maximum number of nodes for each replica set.
 * @method void setMaxNodeNum(integer $MaxNodeNum) Set Maximum number of nodes for each replica set.
 * @method integer getMinReplicateSetNum() Obtain Minimum number of shards.
 * @method void setMinReplicateSetNum(integer $MinReplicateSetNum) Set Minimum number of shards.
 * @method integer getMaxReplicateSetNum() Obtain Maximum number of shards.
 * @method void setMaxReplicateSetNum(integer $MaxReplicateSetNum) Set Maximum number of shards.
 * @method integer getMinReplicateSetNodeNum() Obtain Minimum number of nodes for each shard.
 * @method void setMinReplicateSetNodeNum(integer $MinReplicateSetNodeNum) Set Minimum number of nodes for each shard.
 * @method integer getMaxReplicateSetNodeNum() Obtain Maximum number of nodes for each shard.
 * @method void setMaxReplicateSetNodeNum(integer $MaxReplicateSetNodeNum) Set Maximum number of nodes for each shard.
 * @method string getMachineType() Obtain Cluster specification type. Valid values are as follows:
 - HIO10G: general high-I/O 10GE type.
 - HCD: cloud disk type.
 * @method void setMachineType(string $MachineType) Set Cluster specification type. Valid values are as follows:
 - HIO10G: general high-I/O 10GE type.
 - HCD: cloud disk type.
 */
class SpecItem extends AbstractModel
{
    /**
     * @var string Specification information identifier. Format: mongo.HIO10G.128G. It consists of three parts: node type, specification type, and memory specification.
- Node type: **mongo** indicates a Mongod node; **mongos** indicates a Mongos node; **cfgstr** indicates a ConfigServer node.
- Specification type: **HIO10G** indicates the general HIO 10GE type; **HCD** indicates the Cloud Disk Edition type.
- Memory specification, in GB. Valid values: 4, 8, 16, 32, 64, 128, 240, and 512. 128g indicates 128 GB.
     */
    public $SpecCode;

    /**
     * @var integer Saleable specification status flag. Valid values are as follows:
 - 0: selling stopped.
 - 1: available for sale.
     */
    public $Status;

    /**
     * @var integer Computing resource specification, indicating the number of CPU cores.
     */
    public $Cpu;

    /**
     * @var integer Memory specification. Unit: MB.
     */
    public $Memory;

    /**
     * @var integer Default disk specification. Unit: MB.
     */
    public $DefaultStorage;

    /**
     * @var integer Maximum disk specification. Unit: MB.
     */
    public $MaxStorage;

    /**
     * @var integer Minimum disk specification. Unit: MB.
     */
    public $MinStorage;

    /**
     * @var integer Maximum number of requests per second. Unit: requests/second.
     */
    public $Qps;

    /**
     * @var integer Maximum number of connections supported for the specification.
     */
    public $Conns;

    /**
     * @var string Storage engine version information on instances.
- MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
     */
    public $MongoVersionCode;

    /**
     * @var integer Digital version corresponding to the instance version.
     */
    public $MongoVersionValue;

    /**
     * @var string Instance version information. Valid values: 4.2, 4.4, 5.0, 6.0, and 7.0.
     */
    public $Version;

    /**
     * @var string Storage engine.
     */
    public $EngineName;

    /**
     * @var integer Cluster type. Valid values are as follows:
 - 1: sharded cluster.
 - 0: replica set cluster.
     */
    public $ClusterType;

    /**
     * @var integer Minimum number of nodes for each replica set.
     */
    public $MinNodeNum;

    /**
     * @var integer Maximum number of nodes for each replica set.
     */
    public $MaxNodeNum;

    /**
     * @var integer Minimum number of shards.
     */
    public $MinReplicateSetNum;

    /**
     * @var integer Maximum number of shards.
     */
    public $MaxReplicateSetNum;

    /**
     * @var integer Minimum number of nodes for each shard.
     */
    public $MinReplicateSetNodeNum;

    /**
     * @var integer Maximum number of nodes for each shard.
     */
    public $MaxReplicateSetNodeNum;

    /**
     * @var string Cluster specification type. Valid values are as follows:
 - HIO10G: general high-I/O 10GE type.
 - HCD: cloud disk type.
     */
    public $MachineType;

    /**
     * @param string $SpecCode Specification information identifier. Format: mongo.HIO10G.128G. It consists of three parts: node type, specification type, and memory specification.
- Node type: **mongo** indicates a Mongod node; **mongos** indicates a Mongos node; **cfgstr** indicates a ConfigServer node.
- Specification type: **HIO10G** indicates the general HIO 10GE type; **HCD** indicates the Cloud Disk Edition type.
- Memory specification, in GB. Valid values: 4, 8, 16, 32, 64, 128, 240, and 512. 128g indicates 128 GB.
     * @param integer $Status Saleable specification status flag. Valid values are as follows:
 - 0: selling stopped.
 - 1: available for sale.
     * @param integer $Cpu Computing resource specification, indicating the number of CPU cores.
     * @param integer $Memory Memory specification. Unit: MB.
     * @param integer $DefaultStorage Default disk specification. Unit: MB.
     * @param integer $MaxStorage Maximum disk specification. Unit: MB.
     * @param integer $MinStorage Minimum disk specification. Unit: MB.
     * @param integer $Qps Maximum number of requests per second. Unit: requests/second.
     * @param integer $Conns Maximum number of connections supported for the specification.
     * @param string $MongoVersionCode Storage engine version information on instances.
- MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
     * @param integer $MongoVersionValue Digital version corresponding to the instance version.
     * @param string $Version Instance version information. Valid values: 4.2, 4.4, 5.0, 6.0, and 7.0.
     * @param string $EngineName Storage engine.
     * @param integer $ClusterType Cluster type. Valid values are as follows:
 - 1: sharded cluster.
 - 0: replica set cluster.
     * @param integer $MinNodeNum Minimum number of nodes for each replica set.
     * @param integer $MaxNodeNum Maximum number of nodes for each replica set.
     * @param integer $MinReplicateSetNum Minimum number of shards.
     * @param integer $MaxReplicateSetNum Maximum number of shards.
     * @param integer $MinReplicateSetNodeNum Minimum number of nodes for each shard.
     * @param integer $MaxReplicateSetNodeNum Maximum number of nodes for each shard.
     * @param string $MachineType Cluster specification type. Valid values are as follows:
 - HIO10G: general high-I/O 10GE type.
 - HCD: cloud disk type.
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
