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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node view data
 *
 * @method string getNodeId() Obtain Node ID
 * @method void setNodeId(string $NodeId) Set Node ID
 * @method string getNodeIp() Obtain Node IP
 * @method void setNodeIp(string $NodeIp) Set Node IP
 * @method float getVisible() Obtain Whether the node is visible
 * @method void setVisible(float $Visible) Set Whether the node is visible
 * @method float getBreak() Obtain Whether the node encounters circuit breaking
 * @method void setBreak(float $Break) Set Whether the node encounters circuit breaking
 * @method integer getDiskSize() Obtain Node disk size
 * @method void setDiskSize(integer $DiskSize) Set Node disk size
 * @method float getDiskUsage() Obtain Disk usage
 * @method void setDiskUsage(float $DiskUsage) Set Disk usage
 * @method integer getMemSize() Obtain Node memory size (in GB)
 * @method void setMemSize(integer $MemSize) Set Node memory size (in GB)
 * @method float getMemUsage() Obtain Memory usage
 * @method void setMemUsage(float $MemUsage) Set Memory usage
 * @method integer getCpuNum() Obtain Number of node CPUs
 * @method void setCpuNum(integer $CpuNum) Set Number of node CPUs
 * @method float getCpuUsage() Obtain CPU usage
 * @method void setCpuUsage(float $CpuUsage) Set CPU usage
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 * @method string getNodeRole() Obtain Node role
 * @method void setNodeRole(string $NodeRole) Set Node role
 * @method string getNodeHttpIp() Obtain Node HTTP IP
 * @method void setNodeHttpIp(string $NodeHttpIp) Set Node HTTP IP
 * @method float getJvmMemUsage() Obtain JVM memory usage
 * @method void setJvmMemUsage(float $JvmMemUsage) Set JVM memory usage
 * @method integer getShardNum() Obtain Number of node shards
 * @method void setShardNum(integer $ShardNum) Set Number of node shards
 * @method array getDiskIds() Obtain ID list of node disks
 * @method void setDiskIds(array $DiskIds) Set ID list of node disks
 * @method boolean getHidden() Obtain Whether a hidden availability zone
 * @method void setHidden(boolean $Hidden) Set Whether a hidden availability zone
 */
class NodeView extends AbstractModel
{
    /**
     * @var string Node ID
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
     * @var float Whether the node encounters circuit breaking
     */
    public $Break;

    /**
     * @var integer Node disk size
     */
    public $DiskSize;

    /**
     * @var float Disk usage
     */
    public $DiskUsage;

    /**
     * @var integer Node memory size (in GB)
     */
    public $MemSize;

    /**
     * @var float Memory usage
     */
    public $MemUsage;

    /**
     * @var integer Number of node CPUs
     */
    public $CpuNum;

    /**
     * @var float CPU usage
     */
    public $CpuUsage;

    /**
     * @var string Availability zone
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
     * @var float JVM memory usage
     */
    public $JvmMemUsage;

    /**
     * @var integer Number of node shards
     */
    public $ShardNum;

    /**
     * @var array ID list of node disks
     */
    public $DiskIds;

    /**
     * @var boolean Whether a hidden availability zone
     */
    public $Hidden;

    /**
     * @param string $NodeId Node ID
     * @param string $NodeIp Node IP
     * @param float $Visible Whether the node is visible
     * @param float $Break Whether the node encounters circuit breaking
     * @param integer $DiskSize Node disk size
     * @param float $DiskUsage Disk usage
     * @param integer $MemSize Node memory size (in GB)
     * @param float $MemUsage Memory usage
     * @param integer $CpuNum Number of node CPUs
     * @param float $CpuUsage CPU usage
     * @param string $Zone Availability zone
     * @param string $NodeRole Node role
     * @param string $NodeHttpIp Node HTTP IP
     * @param float $JvmMemUsage JVM memory usage
     * @param integer $ShardNum Number of node shards
     * @param array $DiskIds ID list of node disks
     * @param boolean $Hidden Whether a hidden availability zone
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
    }
}
