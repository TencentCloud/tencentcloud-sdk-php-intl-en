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
 * @method string getInstanceId() Obtain <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/mongodb">MongoDB console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/mongodb">MongoDB console</a> and copy the instance ID from the instance list.</p>
 * @method integer getMemory() Obtain <p>Memory size after instance configuration modification. Unit: GB. The current instance memory size is used by default if this parameter is left blank. For supported memory specifications, please refer to <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">product specifications</a>.<br><strong>Note</strong>: Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified at the same time.</p>
 * @method void setMemory(integer $Memory) Set <p>Memory size after instance configuration modification. Unit: GB. The current instance memory size is used by default if this parameter is left blank. For supported memory specifications, please refer to <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">product specifications</a>.<br><strong>Note</strong>: Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified at the same time.</p>
 * @method integer getVolume() Obtain <p>Hard disk size after instance configuration modification. Unit: GB. The current instance disk size is used by default if this parameter is left blank. For supported disk capacity, please refer to <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">product specification</a>.</p><ul><li>Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified simultaneously.</li><li>When downgrading, the disk capacity after modification must be greater than 1.2 times the used disk capacity.</li></ul>
 * @method void setVolume(integer $Volume) Set <p>Hard disk size after instance configuration modification. Unit: GB. The current instance disk size is used by default if this parameter is left blank. For supported disk capacity, please refer to <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">product specification</a>.</p><ul><li>Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified simultaneously.</li><li>When downgrading, the disk capacity after modification must be greater than 1.2 times the used disk capacity.</li></ul>
 * @method integer getOplogSize() Obtain <p>(Abandoned) Please use the standalone ResizeOplog API to complete.</p><p>Oplog size after instance configuration change.</p><ul><li>Unit: GB.</li><li>Default oplog capacity used is 10% of disk space. The system allows oplog capacity settings ranging from 10% to 90% of disk space.</li></ul>
 * @method void setOplogSize(integer $OplogSize) Set <p>(Abandoned) Please use the standalone ResizeOplog API to complete.</p><p>Oplog size after instance configuration change.</p><ul><li>Unit: GB.</li><li>Default oplog capacity used is 10% of disk space. The system allows oplog capacity settings ranging from 10% to 90% of disk space.</li></ul>
 * @method integer getNodeNum() Obtain <p>Number of mongod nodes after instance change (excluding read-only nodes).</p><ul><li>Replica set node count: Use the MinNodeNum and MaxNodeNum parameters in the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API response to obtain the node count range.</li><li>Number of shard nodes in a sharded cluster: Use the MinReplicateSetNodeNum and MaxReplicateSetNodeNum parameters in the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API response to obtain the node count range.<br><strong>Note</strong>: When modifying the CPU or memory specifications of mongod or mongos, you may not configure this parameter or enter the current number of mongod or mongos nodes (excluding read-only nodes).</li></ul>
 * @method void setNodeNum(integer $NodeNum) Set <p>Number of mongod nodes after instance change (excluding read-only nodes).</p><ul><li>Replica set node count: Use the MinNodeNum and MaxNodeNum parameters in the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API response to obtain the node count range.</li><li>Number of shard nodes in a sharded cluster: Use the MinReplicateSetNodeNum and MaxReplicateSetNodeNum parameters in the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API response to obtain the node count range.<br><strong>Note</strong>: When modifying the CPU or memory specifications of mongod or mongos, you may not configure this parameter or enter the current number of mongod or mongos nodes (excluding read-only nodes).</li></ul>
 * @method integer getReplicateSetNum() Obtain <p>Number of shards after instance change.</p><ul><li>The value range for the number of instance shards can be obtained through the response parameters <strong>MinReplicateSetNum</strong> and <strong>MaxReplicateSetNum</strong> of the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API.</li><li>Only allow adding shards, not reducing them.</li></ul>
 * @method void setReplicateSetNum(integer $ReplicateSetNum) Set <p>Number of shards after instance change.</p><ul><li>The value range for the number of instance shards can be obtained through the response parameters <strong>MinReplicateSetNum</strong> and <strong>MaxReplicateSetNum</strong> of the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API.</li><li>Only allow adding shards, not reducing them.</li></ul>
 * @method integer getInMaintenance() Obtain <p>Switch time for instance configuration change.</p><ul><li>0: Immediately execute the configuration modification task upon completion of adjustment. Default is 0.</li><li>1: Execute the configuration modification task within the maintenance window.<br><strong>Note</strong>: Adjusting the number of nodes and shard quantity is unsupported within the <b>maintenance window</b>.</li></ul>
 * @method void setInMaintenance(integer $InMaintenance) Set <p>Switch time for instance configuration change.</p><ul><li>0: Immediately execute the configuration modification task upon completion of adjustment. Default is 0.</li><li>1: Execute the configuration modification task within the maintenance window.<br><strong>Note</strong>: Adjusting the number of nodes and shard quantity is unsupported within the <b>maintenance window</b>.</li></ul>
 * @method string getMongosMemory() Obtain <p>Memory size of mongos after sharding instance configuration change. Unit: GB. For instance support specifications, see <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">product specification</a>.</p>
 * @method void setMongosMemory(string $MongosMemory) Set <p>Memory size of mongos after sharding instance configuration change. Unit: GB. For instance support specifications, see <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">product specification</a>.</p>
 * @method array getAddNodeList() Obtain <p>List of nodes to be added, containing the node type and AZ information.</p>
 * @method void setAddNodeList(array $AddNodeList) Set <p>List of nodes to be added, containing the node type and AZ information.</p>
 * @method array getRemoveNodeList() Obtain <p>Delete node list.<br><strong>Note</strong>: Based on the consistency principle of sharded instance nodes, when deleting shard instance nodes, only need to specify the node corresponding to shard 0, for example: cmgo-9nl1czif_0-node-readonly0 will delete the first read-only node of each shard.</p>
 * @method void setRemoveNodeList(array $RemoveNodeList) Set <p>Delete node list.<br><strong>Note</strong>: Based on the consistency principle of sharded instance nodes, when deleting shard instance nodes, only need to specify the node corresponding to shard 0, for example: cmgo-9nl1czif_0-node-readonly0 will delete the first read-only node of each shard.</p>
 * @method integer getCpu() Obtain <p>CPU size after instance configuration changes. Unit: C. If empty, the default value is the current CPU size of the instance. For currently supported CPU specifications, see <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">Product Specifications</a>.</p>
 * @method void setCpu(integer $Cpu) Set <p>CPU size after instance configuration changes. Unit: C. If empty, the default value is the current CPU size of the instance. For currently supported CPU specifications, see <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">Product Specifications</a>.</p>
 * @method string getMachineCode() Obtain <p>The product specification type after instance configuration change. If empty, the default value is the current instance product specification type.<br>Currently supported product specification types are as follows:<br>Recommended product specification types:</p><ul><li>GE.LD.T1: Local disk (Common I).</li><li>GE.CD.T1: Cloud disk (Common I).</li></ul><p>Product allowlist specification types:</p><ul><li>HIO10G: Local disk (High IO 10G).</li><li>HCD: Cloud disk (Cloud Disk Edition).</li></ul><p>Note:</p><ol><li>Allowlist specification types are controlled by allowlist. If needed, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</li><li>Common I cannot be changed to allowlist specification types.</li></ol>
 * @method void setMachineCode(string $MachineCode) Set <p>The product specification type after instance configuration change. If empty, the default value is the current instance product specification type.<br>Currently supported product specification types are as follows:<br>Recommended product specification types:</p><ul><li>GE.LD.T1: Local disk (Common I).</li><li>GE.CD.T1: Cloud disk (Common I).</li></ul><p>Product allowlist specification types:</p><ul><li>HIO10G: Local disk (High IO 10G).</li><li>HCD: Cloud disk (Cloud Disk Edition).</li></ul><p>Note:</p><ol><li>Allowlist specification types are controlled by allowlist. If needed, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</li><li>Common I cannot be changed to allowlist specification types.</li></ol>
 */
class ModifyDBInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/mongodb">MongoDB console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Memory size after instance configuration modification. Unit: GB. The current instance memory size is used by default if this parameter is left blank. For supported memory specifications, please refer to <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">product specifications</a>.<br><strong>Note</strong>: Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified at the same time.</p>
     */
    public $Memory;

    /**
     * @var integer <p>Hard disk size after instance configuration modification. Unit: GB. The current instance disk size is used by default if this parameter is left blank. For supported disk capacity, please refer to <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">product specification</a>.</p><ul><li>Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified simultaneously.</li><li>When downgrading, the disk capacity after modification must be greater than 1.2 times the used disk capacity.</li></ul>
     */
    public $Volume;

    /**
     * @var integer <p>(Abandoned) Please use the standalone ResizeOplog API to complete.</p><p>Oplog size after instance configuration change.</p><ul><li>Unit: GB.</li><li>Default oplog capacity used is 10% of disk space. The system allows oplog capacity settings ranging from 10% to 90% of disk space.</li></ul>
     * @deprecated
     */
    public $OplogSize;

    /**
     * @var integer <p>Number of mongod nodes after instance change (excluding read-only nodes).</p><ul><li>Replica set node count: Use the MinNodeNum and MaxNodeNum parameters in the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API response to obtain the node count range.</li><li>Number of shard nodes in a sharded cluster: Use the MinReplicateSetNodeNum and MaxReplicateSetNodeNum parameters in the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API response to obtain the node count range.<br><strong>Note</strong>: When modifying the CPU or memory specifications of mongod or mongos, you may not configure this parameter or enter the current number of mongod or mongos nodes (excluding read-only nodes).</li></ul>
     */
    public $NodeNum;

    /**
     * @var integer <p>Number of shards after instance change.</p><ul><li>The value range for the number of instance shards can be obtained through the response parameters <strong>MinReplicateSetNum</strong> and <strong>MaxReplicateSetNum</strong> of the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API.</li><li>Only allow adding shards, not reducing them.</li></ul>
     */
    public $ReplicateSetNum;

    /**
     * @var integer <p>Switch time for instance configuration change.</p><ul><li>0: Immediately execute the configuration modification task upon completion of adjustment. Default is 0.</li><li>1: Execute the configuration modification task within the maintenance window.<br><strong>Note</strong>: Adjusting the number of nodes and shard quantity is unsupported within the <b>maintenance window</b>.</li></ul>
     */
    public $InMaintenance;

    /**
     * @var string <p>Memory size of mongos after sharding instance configuration change. Unit: GB. For instance support specifications, see <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">product specification</a>.</p>
     */
    public $MongosMemory;

    /**
     * @var array <p>List of nodes to be added, containing the node type and AZ information.</p>
     */
    public $AddNodeList;

    /**
     * @var array <p>Delete node list.<br><strong>Note</strong>: Based on the consistency principle of sharded instance nodes, when deleting shard instance nodes, only need to specify the node corresponding to shard 0, for example: cmgo-9nl1czif_0-node-readonly0 will delete the first read-only node of each shard.</p>
     */
    public $RemoveNodeList;

    /**
     * @var integer <p>CPU size after instance configuration changes. Unit: C. If empty, the default value is the current CPU size of the instance. For currently supported CPU specifications, see <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">Product Specifications</a>.</p>
     */
    public $Cpu;

    /**
     * @var string <p>The product specification type after instance configuration change. If empty, the default value is the current instance product specification type.<br>Currently supported product specification types are as follows:<br>Recommended product specification types:</p><ul><li>GE.LD.T1: Local disk (Common I).</li><li>GE.CD.T1: Cloud disk (Common I).</li></ul><p>Product allowlist specification types:</p><ul><li>HIO10G: Local disk (High IO 10G).</li><li>HCD: Cloud disk (Cloud Disk Edition).</li></ul><p>Note:</p><ol><li>Allowlist specification types are controlled by allowlist. If needed, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</li><li>Common I cannot be changed to allowlist specification types.</li></ol>
     */
    public $MachineCode;

    /**
     * @param string $InstanceId <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/mongodb">MongoDB console</a> and copy the instance ID from the instance list.</p>
     * @param integer $Memory <p>Memory size after instance configuration modification. Unit: GB. The current instance memory size is used by default if this parameter is left blank. For supported memory specifications, please refer to <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">product specifications</a>.<br><strong>Note</strong>: Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified at the same time.</p>
     * @param integer $Volume <p>Hard disk size after instance configuration modification. Unit: GB. The current instance disk size is used by default if this parameter is left blank. For supported disk capacity, please refer to <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">product specification</a>.</p><ul><li>Memory and disk configurations should be upgraded or downgraded at the same time, meaning that Memory and Volume should be modified simultaneously.</li><li>When downgrading, the disk capacity after modification must be greater than 1.2 times the used disk capacity.</li></ul>
     * @param integer $OplogSize <p>(Abandoned) Please use the standalone ResizeOplog API to complete.</p><p>Oplog size after instance configuration change.</p><ul><li>Unit: GB.</li><li>Default oplog capacity used is 10% of disk space. The system allows oplog capacity settings ranging from 10% to 90% of disk space.</li></ul>
     * @param integer $NodeNum <p>Number of mongod nodes after instance change (excluding read-only nodes).</p><ul><li>Replica set node count: Use the MinNodeNum and MaxNodeNum parameters in the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API response to obtain the node count range.</li><li>Number of shard nodes in a sharded cluster: Use the MinReplicateSetNodeNum and MaxReplicateSetNodeNum parameters in the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API response to obtain the node count range.<br><strong>Note</strong>: When modifying the CPU or memory specifications of mongod or mongos, you may not configure this parameter or enter the current number of mongod or mongos nodes (excluding read-only nodes).</li></ul>
     * @param integer $ReplicateSetNum <p>Number of shards after instance change.</p><ul><li>The value range for the number of instance shards can be obtained through the response parameters <strong>MinReplicateSetNum</strong> and <strong>MaxReplicateSetNum</strong> of the <a href="https://www.tencentcloud.com/document/product/240/38567?from_cn_redirect=1">DescribeSpecInfo</a> API.</li><li>Only allow adding shards, not reducing them.</li></ul>
     * @param integer $InMaintenance <p>Switch time for instance configuration change.</p><ul><li>0: Immediately execute the configuration modification task upon completion of adjustment. Default is 0.</li><li>1: Execute the configuration modification task within the maintenance window.<br><strong>Note</strong>: Adjusting the number of nodes and shard quantity is unsupported within the <b>maintenance window</b>.</li></ul>
     * @param string $MongosMemory <p>Memory size of mongos after sharding instance configuration change. Unit: GB. For instance support specifications, see <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">product specification</a>.</p>
     * @param array $AddNodeList <p>List of nodes to be added, containing the node type and AZ information.</p>
     * @param array $RemoveNodeList <p>Delete node list.<br><strong>Note</strong>: Based on the consistency principle of sharded instance nodes, when deleting shard instance nodes, only need to specify the node corresponding to shard 0, for example: cmgo-9nl1czif_0-node-readonly0 will delete the first read-only node of each shard.</p>
     * @param integer $Cpu <p>CPU size after instance configuration changes. Unit: C. If empty, the default value is the current CPU size of the instance. For currently supported CPU specifications, see <a href="https://www.tencentcloud.com/document/product/240/64125?from_cn_redirect=1">Product Specifications</a>.</p>
     * @param string $MachineCode <p>The product specification type after instance configuration change. If empty, the default value is the current instance product specification type.<br>Currently supported product specification types are as follows:<br>Recommended product specification types:</p><ul><li>GE.LD.T1: Local disk (Common I).</li><li>GE.CD.T1: Cloud disk (Common I).</li></ul><p>Product allowlist specification types:</p><ul><li>HIO10G: Local disk (High IO 10G).</li><li>HCD: Cloud disk (Cloud Disk Edition).</li></ul><p>Note:</p><ol><li>Allowlist specification types are controlled by allowlist. If needed, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket</a> to apply.</li><li>Common I cannot be changed to allowlist specification types.</li></ol>
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

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("MachineCode",$param) and $param["MachineCode"] !== null) {
            $this->MachineCode = $param["MachineCode"];
        }
    }
}
