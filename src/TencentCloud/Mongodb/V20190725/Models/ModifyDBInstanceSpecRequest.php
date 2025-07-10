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
 * ModifyDBInstanceSpec request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.

 * @method void setInstanceId(string $InstanceId) Set Instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.

 * @method integer getMemory() Obtain Memory size after instance configuration modification. - Unit: GB. The current instance memory size is used by default if this parameter is left blank.<br>Note: Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified at the same time.
 * @method void setMemory(integer $Memory) Set Memory size after instance configuration modification. - Unit: GB. The current instance memory size is used by default if this parameter is left blank.<br>Note: Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified at the same time.
 * @method integer getVolume() Obtain Disk capacity after instance configuration modification. Unit: GB. The current instance disk capacity is used by default if this parameter is left blank.
 - Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified at the same time.
 - During configuration downgrading, the disk capacity after modification should be greater than 1.2 times the used disk capacity.
 * @method void setVolume(integer $Volume) Set Disk capacity after instance configuration modification. Unit: GB. The current instance disk capacity is used by default if this parameter is left blank.
 - Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified at the same time.
 - During configuration downgrading, the disk capacity after modification should be greater than 1.2 times the used disk capacity.
 * @method integer getOplogSize() Obtain (Deprecated) Use the independent API ResizeOplog.

Oplog size after instance configuration modification.
 - Unit: GB.
 - By default, the capacity occupied by Oplog is 10% of the disk capacity. The range of capacity occupied by Oplog supported by the system is [10%,90%] of the disk capacity.
 * @method void setOplogSize(integer $OplogSize) Set (Deprecated) Use the independent API ResizeOplog.

Oplog size after instance configuration modification.
 - Unit: GB.
 - By default, the capacity occupied by Oplog is 10% of the disk capacity. The range of capacity occupied by Oplog supported by the system is [10%,90%] of the disk capacity.
 * @method integer getNodeNum() Obtain Number of Mongod nodes after instance modification (excluding read-only nodes).
 - When the CPU and memory specifications of Mongod nodes are modified, this parameter can be left blank or set to the current number of Mongod nodes (excluding read-only nodes).
 - When the CPU and memory specifications of Mongos nodes are modified, this parameter can be left blank or set to the current number of Mongod nodes (excluding read-only nodes).
 - During node modification (all types), this parameter can be left blank or set to the number of Mongod nodes (excluding read-only nodes) after modification.
 - Number of replica set nodes: Confirm the range of the number of nodes based on the MinNodeNum and MaxNodeNum parameters returned by the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38565?from_cn_redirect=1) API for querying saleable TencenDB for MongoDB specifications.
 - Number of nodes for each shard in a sharded cluster: Confirm the range of the number of nodes based on the MinReplicateSetNodeNum and MaxReplicateSetNodeNum parameters returned by the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38565?from_cn_redirect=1) API for querying saleable TencenDB for MongoDB specifications.
 * @method void setNodeNum(integer $NodeNum) Set Number of Mongod nodes after instance modification (excluding read-only nodes).
 - When the CPU and memory specifications of Mongod nodes are modified, this parameter can be left blank or set to the current number of Mongod nodes (excluding read-only nodes).
 - When the CPU and memory specifications of Mongos nodes are modified, this parameter can be left blank or set to the current number of Mongod nodes (excluding read-only nodes).
 - During node modification (all types), this parameter can be left blank or set to the number of Mongod nodes (excluding read-only nodes) after modification.
 - Number of replica set nodes: Confirm the range of the number of nodes based on the MinNodeNum and MaxNodeNum parameters returned by the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38565?from_cn_redirect=1) API for querying saleable TencenDB for MongoDB specifications.
 - Number of nodes for each shard in a sharded cluster: Confirm the range of the number of nodes based on the MinReplicateSetNodeNum and MaxReplicateSetNodeNum parameters returned by the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38565?from_cn_redirect=1) API for querying saleable TencenDB for MongoDB specifications.
 * @method integer getReplicateSetNum() Obtain Number of shards after instance modification.
 - The value range can be obtained from the **MinReplicateSetNum** and **MaxReplicateSetNum** parameters returned by the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API for querying saleable TencentDB for MongoDB specifications. - The value of this parameter can only be increased but not decreased.
 * @method void setReplicateSetNum(integer $ReplicateSetNum) Set Number of shards after instance modification.
 - The value range can be obtained from the **MinReplicateSetNum** and **MaxReplicateSetNum** parameters returned by the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API for querying saleable TencentDB for MongoDB specifications. - The value of this parameter can only be increased but not decreased.
 * @method integer getInMaintenance() Obtain Switch time for instance configuration modification.
 - 0: Execute the configuration modification task immediately after the adjustment is completed. Default value: 0.
 - 1: Execute the configuration modification task within the maintenance window.
**Note**: Adjusting the number of nodes and shards is unsupported <b>within the maintenance window</b>.
 * @method void setInMaintenance(integer $InMaintenance) Set Switch time for instance configuration modification.
 - 0: Execute the configuration modification task immediately after the adjustment is completed. Default value: 0.
 - 1: Execute the configuration modification task within the maintenance window.
**Note**: Adjusting the number of nodes and shards is unsupported <b>within the maintenance window</b>.
 * @method string getMongosMemory() Obtain Mongos node memory size after the sharded cluster instance configuration is modified. Unit: GB.
 * @method void setMongosMemory(string $MongosMemory) Set Mongos node memory size after the sharded cluster instance configuration is modified. Unit: GB.
 * @method array getAddNodeList() Obtain List of nodes to be added, containing the node type and AZ information.
 * @method void setAddNodeList(array $AddNodeList) Set List of nodes to be added, containing the node type and AZ information.
 * @method array getRemoveNodeList() Obtain List of nodes to be deleted. Note: According to the consistency principle for nodes of each shard on a sharded cluster instance, specify the nodes on shard 0 for node deletion from the sharded cluster instance. For example, cmgo-9nl1czif_0-node-readonly0 will delete the first read-only node of each shard.
 * @method void setRemoveNodeList(array $RemoveNodeList) Set List of nodes to be deleted. Note: According to the consistency principle for nodes of each shard on a sharded cluster instance, specify the nodes on shard 0 for node deletion from the sharded cluster instance. For example, cmgo-9nl1czif_0-node-readonly0 will delete the first read-only node of each shard.
 */
class ModifyDBInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string Instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.

     */
    public $InstanceId;

    /**
     * @var integer Memory size after instance configuration modification. - Unit: GB. The current instance memory size is used by default if this parameter is left blank.<br>Note: Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified at the same time.
     */
    public $Memory;

    /**
     * @var integer Disk capacity after instance configuration modification. Unit: GB. The current instance disk capacity is used by default if this parameter is left blank.
 - Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified at the same time.
 - During configuration downgrading, the disk capacity after modification should be greater than 1.2 times the used disk capacity.
     */
    public $Volume;

    /**
     * @var integer (Deprecated) Use the independent API ResizeOplog.

Oplog size after instance configuration modification.
 - Unit: GB.
 - By default, the capacity occupied by Oplog is 10% of the disk capacity. The range of capacity occupied by Oplog supported by the system is [10%,90%] of the disk capacity.
     * @deprecated
     */
    public $OplogSize;

    /**
     * @var integer Number of Mongod nodes after instance modification (excluding read-only nodes).
 - When the CPU and memory specifications of Mongod nodes are modified, this parameter can be left blank or set to the current number of Mongod nodes (excluding read-only nodes).
 - When the CPU and memory specifications of Mongos nodes are modified, this parameter can be left blank or set to the current number of Mongod nodes (excluding read-only nodes).
 - During node modification (all types), this parameter can be left blank or set to the number of Mongod nodes (excluding read-only nodes) after modification.
 - Number of replica set nodes: Confirm the range of the number of nodes based on the MinNodeNum and MaxNodeNum parameters returned by the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38565?from_cn_redirect=1) API for querying saleable TencenDB for MongoDB specifications.
 - Number of nodes for each shard in a sharded cluster: Confirm the range of the number of nodes based on the MinReplicateSetNodeNum and MaxReplicateSetNodeNum parameters returned by the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38565?from_cn_redirect=1) API for querying saleable TencenDB for MongoDB specifications.
     */
    public $NodeNum;

    /**
     * @var integer Number of shards after instance modification.
 - The value range can be obtained from the **MinReplicateSetNum** and **MaxReplicateSetNum** parameters returned by the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API for querying saleable TencentDB for MongoDB specifications. - The value of this parameter can only be increased but not decreased.
     */
    public $ReplicateSetNum;

    /**
     * @var integer Switch time for instance configuration modification.
 - 0: Execute the configuration modification task immediately after the adjustment is completed. Default value: 0.
 - 1: Execute the configuration modification task within the maintenance window.
**Note**: Adjusting the number of nodes and shards is unsupported <b>within the maintenance window</b>.
     */
    public $InMaintenance;

    /**
     * @var string Mongos node memory size after the sharded cluster instance configuration is modified. Unit: GB.
     */
    public $MongosMemory;

    /**
     * @var array List of nodes to be added, containing the node type and AZ information.
     */
    public $AddNodeList;

    /**
     * @var array List of nodes to be deleted. Note: According to the consistency principle for nodes of each shard on a sharded cluster instance, specify the nodes on shard 0 for node deletion from the sharded cluster instance. For example, cmgo-9nl1czif_0-node-readonly0 will delete the first read-only node of each shard.
     */
    public $RemoveNodeList;

    /**
     * @param string $InstanceId Instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.

     * @param integer $Memory Memory size after instance configuration modification. - Unit: GB. The current instance memory size is used by default if this parameter is left blank.<br>Note: Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified at the same time.
     * @param integer $Volume Disk capacity after instance configuration modification. Unit: GB. The current instance disk capacity is used by default if this parameter is left blank.
 - Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified at the same time.
 - During configuration downgrading, the disk capacity after modification should be greater than 1.2 times the used disk capacity.
     * @param integer $OplogSize (Deprecated) Use the independent API ResizeOplog.

Oplog size after instance configuration modification.
 - Unit: GB.
 - By default, the capacity occupied by Oplog is 10% of the disk capacity. The range of capacity occupied by Oplog supported by the system is [10%,90%] of the disk capacity.
     * @param integer $NodeNum Number of Mongod nodes after instance modification (excluding read-only nodes).
 - When the CPU and memory specifications of Mongod nodes are modified, this parameter can be left blank or set to the current number of Mongod nodes (excluding read-only nodes).
 - When the CPU and memory specifications of Mongos nodes are modified, this parameter can be left blank or set to the current number of Mongod nodes (excluding read-only nodes).
 - During node modification (all types), this parameter can be left blank or set to the number of Mongod nodes (excluding read-only nodes) after modification.
 - Number of replica set nodes: Confirm the range of the number of nodes based on the MinNodeNum and MaxNodeNum parameters returned by the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38565?from_cn_redirect=1) API for querying saleable TencenDB for MongoDB specifications.
 - Number of nodes for each shard in a sharded cluster: Confirm the range of the number of nodes based on the MinReplicateSetNodeNum and MaxReplicateSetNodeNum parameters returned by the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38565?from_cn_redirect=1) API for querying saleable TencenDB for MongoDB specifications.
     * @param integer $ReplicateSetNum Number of shards after instance modification.
 - The value range can be obtained from the **MinReplicateSetNum** and **MaxReplicateSetNum** parameters returned by the [DescribeSpecInfo](https://intl.cloud.tencent.com/document/product/240/38567?from_cn_redirect=1) API for querying saleable TencentDB for MongoDB specifications. - The value of this parameter can only be increased but not decreased.
     * @param integer $InMaintenance Switch time for instance configuration modification.
 - 0: Execute the configuration modification task immediately after the adjustment is completed. Default value: 0.
 - 1: Execute the configuration modification task within the maintenance window.
**Note**: Adjusting the number of nodes and shards is unsupported <b>within the maintenance window</b>.
     * @param string $MongosMemory Mongos node memory size after the sharded cluster instance configuration is modified. Unit: GB.
     * @param array $AddNodeList List of nodes to be added, containing the node type and AZ information.
     * @param array $RemoveNodeList List of nodes to be deleted. Note: According to the consistency principle for nodes of each shard on a sharded cluster instance, specify the nodes on shard 0 for node deletion from the sharded cluster instance. For example, cmgo-9nl1czif_0-node-readonly0 will delete the first read-only node of each shard.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("OplogSize",$param) and $param["OplogSize"] !== null) {
            $this->OplogSize = $param["OplogSize"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("ReplicateSetNum",$param) and $param["ReplicateSetNum"] !== null) {
            $this->ReplicateSetNum = $param["ReplicateSetNum"];
        }

        if (array_key_exists("InMaintenance",$param) and $param["InMaintenance"] !== null) {
            $this->InMaintenance = $param["InMaintenance"];
        }

        if (array_key_exists("MongosMemory",$param) and $param["MongosMemory"] !== null) {
            $this->MongosMemory = $param["MongosMemory"];
        }

        if (array_key_exists("AddNodeList",$param) and $param["AddNodeList"] !== null) {
            $this->AddNodeList = [];
            foreach ($param["AddNodeList"] as $key => $value){
                $obj = new AddNodeList();
                $obj->deserialize($value);
                array_push($this->AddNodeList, $obj);
            }
        }

        if (array_key_exists("RemoveNodeList",$param) and $param["RemoveNodeList"] !== null) {
            $this->RemoveNodeList = [];
            foreach ($param["RemoveNodeList"] as $key => $value){
                $obj = new RemoveNodeList();
                $obj->deserialize($value);
                array_push($this->RemoveNodeList, $obj);
            }
        }
    }
}
