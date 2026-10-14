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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node dimension view data
 *
 * @method string getNodeId() Obtain Node ID.
 * @method void setNodeId(string $NodeId) Set Node ID.
 * @method string getNodeIp() Obtain Node IP
 * @method void setNodeIp(string $NodeIp) Set Node IP
 * @method float getVisible() Obtain Whether the node is visible
 * @method void setVisible(float $Visible) Set Whether the node is visible
 * @method float getBreak() Obtain Whether to fuse
 * @method void setBreak(float $Break) Set Whether to fuse
 * @method integer getDiskSize() Obtain Total node disk size
 * @method void setDiskSize(integer $DiskSize) Set Total node disk size
 * @method float getDiskUsage() Obtain Disk utilization rate
 * @method void setDiskUsage(float $DiskUsage) Set Disk utilization rate
 * @method integer getMemSize() Obtain Node memory size (unit: GB)
 * @method void setMemSize(integer $MemSize) Set Node memory size (unit: GB)
 * @method float getMemUsage() Obtain Memory usage rate
 * @method void setMemUsage(float $MemUsage) Set Memory usage rate
 * @method integer getCpuNum() Obtain Number of CPUs on the node
 * @method void setCpuNum(integer $CpuNum) Set Number of CPUs on the node
 * @method float getCpuUsage() Obtain CPU utilization
 * @method void setCpuUsage(float $CpuUsage) Set CPU utilization
 * @method string getZone() Obtain AZ.
 * @method void setZone(string $Zone) Set AZ.
 * @method string getNodeRole() Obtain Node role
 * @method void setNodeRole(string $NodeRole) Set Node role
 * @method string getNodeHttpIp() Obtain Node HTTP IP
 * @method void setNodeHttpIp(string $NodeHttpIp) Set Node HTTP IP
 * @method float getJvmMemUsage() Obtain JVM memory usage rate
 * @method void setJvmMemUsage(float $JvmMemUsage) Set JVM memory usage rate
 * @method integer getShardNum() Obtain Number of shards per node
 * @method void setShardNum(integer $ShardNum) Set Number of shards per node
 * @method array getDiskIds() Obtain Disk ID list on node
 * @method void setDiskIds(array $DiskIds) Set Disk ID list on node
 * @method boolean getHidden() Obtain Whether it is a hidden AZ
 * @method void setHidden(boolean $Hidden) Set Whether it is a hidden AZ
 * @method boolean getIsCoordinationNode() Obtain Whether to act as the coordination node role
 * @method void setIsCoordinationNode(boolean $IsCoordinationNode) Set Whether to act as the coordination node role
 * @method string getCVMStatus() Obtain CVM running state
 * @method void setCVMStatus(string $CVMStatus) Set CVM running state
 * @method string getCVMDisasterRecoverGroupId() Obtain id of the placement group bound to the cvm
 * @method void setCVMDisasterRecoverGroupId(string $CVMDisasterRecoverGroupId) Set id of the placement group bound to the cvm
 * @method integer getCVMDisasterRecoverGroupStatus() Obtain Status of the placement group bound to the cvm. 2: Bound; 1: Binding; 0: Not enabled
 * @method void setCVMDisasterRecoverGroupStatus(integer $CVMDisasterRecoverGroupStatus) Set Status of the placement group bound to the cvm. 2: Bound; 1: Binding; 0: Not enabled
 */
class NodeView extends AbstractModel
{
    /**
     * @var string Node ID.
     */
    public $NodeId;

    /**
     * @var string Node IP
     */
    public $NodeIp;

    /**
     * @var float Whether the node is visible
     */
    public $Visible;

    /**
     * @var float Whether to fuse
     */
    public $Break;

    /**
     * @var integer Total node disk size
     */
    public $DiskSize;

    /**
     * @var float Disk utilization rate
     */
    public $DiskUsage;

    /**
     * @var integer Node memory size (unit: GB)
     */
    public $MemSize;

    /**
     * @var float Memory usage rate
     */
    public $MemUsage;

    /**
     * @var integer Number of CPUs on the node
     */
    public $CpuNum;

    /**
     * @var float CPU utilization
     */
    public $CpuUsage;

    /**
     * @var string AZ.
     */
    public $Zone;

    /**
     * @var string Node role
     */
    public $NodeRole;

    /**
     * @var string Node HTTP IP
     */
    public $NodeHttpIp;

    /**
     * @var float JVM memory usage rate
     */
    public $JvmMemUsage;

    /**
     * @var integer Number of shards per node
     */
    public $ShardNum;

    /**
     * @var array Disk ID list on node
     */
    public $DiskIds;

    /**
     * @var boolean Whether it is a hidden AZ
     */
    public $Hidden;

    /**
     * @var boolean Whether to act as the coordination node role
     */
    public $IsCoordinationNode;

    /**
     * @var string CVM running state
     */
    public $CVMStatus;

    /**
     * @var string id of the placement group bound to the cvm
     */
    public $CVMDisasterRecoverGroupId;

    /**
     * @var integer Status of the placement group bound to the cvm. 2: Bound; 1: Binding; 0: Not enabled
     */
    public $CVMDisasterRecoverGroupStatus;

    /**
     * @param string $NodeId Node ID.
     * @param string $NodeIp Node IP
     * @param float $Visible Whether the node is visible
     * @param float $Break Whether to fuse
     * @param integer $DiskSize Total node disk size
     * @param float $DiskUsage Disk utilization rate
     * @param integer $MemSize Node memory size (unit: GB)
     * @param float $MemUsage Memory usage rate
     * @param integer $CpuNum Number of CPUs on the node
     * @param float $CpuUsage CPU utilization
     * @param string $Zone AZ.
     * @param string $NodeRole Node role
     * @param string $NodeHttpIp Node HTTP IP
     * @param float $JvmMemUsage JVM memory usage rate
     * @param integer $ShardNum Number of shards per node
     * @param array $DiskIds Disk ID list on node
     * @param boolean $Hidden Whether it is a hidden AZ
     * @param boolean $IsCoordinationNode Whether to act as the coordination node role
     * @param string $CVMStatus CVM running state
     * @param string $CVMDisasterRecoverGroupId id of the placement group bound to the cvm
     * @param integer $CVMDisasterRecoverGroupStatus Status of the placement group bound to the cvm. 2: Bound; 1: Binding; 0: Not enabled
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }

        if (array_key_exists("Visible",$param) and $param["Visible"] !== null) {
            $this->Visible = $param["Visible"];
        }

        if (array_key_exists("Break",$param) and $param["Break"] !== null) {
            $this->Break = $param["Break"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("MemUsage",$param) and $param["MemUsage"] !== null) {
            $this->MemUsage = $param["MemUsage"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("CpuUsage",$param) and $param["CpuUsage"] !== null) {
            $this->CpuUsage = $param["CpuUsage"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("NodeHttpIp",$param) and $param["NodeHttpIp"] !== null) {
            $this->NodeHttpIp = $param["NodeHttpIp"];
        }

        if (array_key_exists("JvmMemUsage",$param) and $param["JvmMemUsage"] !== null) {
            $this->JvmMemUsage = $param["JvmMemUsage"];
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("Hidden",$param) and $param["Hidden"] !== null) {
            $this->Hidden = $param["Hidden"];
        }

        if (array_key_exists("IsCoordinationNode",$param) and $param["IsCoordinationNode"] !== null) {
            $this->IsCoordinationNode = $param["IsCoordinationNode"];
        }

        if (array_key_exists("CVMStatus",$param) and $param["CVMStatus"] !== null) {
            $this->CVMStatus = $param["CVMStatus"];
        }

        if (array_key_exists("CVMDisasterRecoverGroupId",$param) and $param["CVMDisasterRecoverGroupId"] !== null) {
            $this->CVMDisasterRecoverGroupId = $param["CVMDisasterRecoverGroupId"];
        }

        if (array_key_exists("CVMDisasterRecoverGroupStatus",$param) and $param["CVMDisasterRecoverGroupStatus"] !== null) {
            $this->CVMDisasterRecoverGroupStatus = $param["CVMDisasterRecoverGroupStatus"];
        }
    }
}
