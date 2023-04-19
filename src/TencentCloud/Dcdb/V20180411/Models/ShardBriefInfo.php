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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDSQL shard information
 *
 * @method string getShardSerialId() Obtain Shard serial ID
 * @method void setShardSerialId(string $ShardSerialId) Set Shard serial ID
 * @method string getShardInstanceId() Obtain Shard ID, such as shard-7vg1o339.
 * @method void setShardInstanceId(string $ShardInstanceId) Set Shard ID, such as shard-7vg1o339.
 * @method integer getStatus() Obtain Shard running status
 * @method void setStatus(integer $Status) Set Shard running status
 * @method string getStatusDesc() Obtain Description of shard running status
 * @method void setStatusDesc(string $StatusDesc) Set Description of shard running status
 * @method string getCreateTime() Obtain Shard creation time
 * @method void setCreateTime(string $CreateTime) Set Shard creation time
 * @method integer getMemory() Obtain Shard memory size in GB
 * @method void setMemory(integer $Memory) Set Shard memory size in GB
 * @method integer getStorage() Obtain Shard disk size in GB
 * @method void setStorage(integer $Storage) Set Shard disk size in GB
 * @method integer getLogDisk() Obtain Log disk space size of a shard in GB
 * @method void setLogDisk(integer $LogDisk) Set Log disk space size of a shard in GB
 * @method integer getNodeCount() Obtain Number of shard nodes
 * @method void setNodeCount(integer $NodeCount) Set Number of shard nodes
 * @method float getStorageUsage() Obtain Disk space utilization of a shard
 * @method void setStorageUsage(float $StorageUsage) Set Disk space utilization of a shard
 * @method string getProxyVersion() Obtain Version information of the shard proxy
 * @method void setProxyVersion(string $ProxyVersion) Set Version information of the shard proxy
 * @method string getShardMasterZone() Obtain Source AZ of a shard
 * @method void setShardMasterZone(string $ShardMasterZone) Set Source AZ of a shard
 * @method array getShardSlaveZones() Obtain Replica AZ of a shard
 * @method void setShardSlaveZones(array $ShardSlaveZones) Set Replica AZ of a shard
 * @method integer getCpu() Obtain Number of CPU cores
 * @method void setCpu(integer $Cpu) Set Number of CPU cores
 * @method array getNodesInfo() Obtain Node information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodesInfo(array $NodesInfo) Set Node information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ShardBriefInfo extends AbstractModel
{
    /**
     * @var string Shard serial ID
     */
    public $ShardSerialId;

    /**
     * @var string Shard ID, such as shard-7vg1o339.
     */
    public $ShardInstanceId;

    /**
     * @var integer Shard running status
     */
    public $Status;

    /**
     * @var string Description of shard running status
     */
    public $StatusDesc;

    /**
     * @var string Shard creation time
     */
    public $CreateTime;

    /**
     * @var integer Shard memory size in GB
     */
    public $Memory;

    /**
     * @var integer Shard disk size in GB
     */
    public $Storage;

    /**
     * @var integer Log disk space size of a shard in GB
     */
    public $LogDisk;

    /**
     * @var integer Number of shard nodes
     */
    public $NodeCount;

    /**
     * @var float Disk space utilization of a shard
     */
    public $StorageUsage;

    /**
     * @var string Version information of the shard proxy
     */
    public $ProxyVersion;

    /**
     * @var string Source AZ of a shard
     */
    public $ShardMasterZone;

    /**
     * @var array Replica AZ of a shard
     */
    public $ShardSlaveZones;

    /**
     * @var integer Number of CPU cores
     */
    public $Cpu;

    /**
     * @var array Node information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodesInfo;

    /**
     * @param string $ShardSerialId Shard serial ID
     * @param string $ShardInstanceId Shard ID, such as shard-7vg1o339.
     * @param integer $Status Shard running status
     * @param string $StatusDesc Description of shard running status
     * @param string $CreateTime Shard creation time
     * @param integer $Memory Shard memory size in GB
     * @param integer $Storage Shard disk size in GB
     * @param integer $LogDisk Log disk space size of a shard in GB
     * @param integer $NodeCount Number of shard nodes
     * @param float $StorageUsage Disk space utilization of a shard
     * @param string $ProxyVersion Version information of the shard proxy
     * @param string $ShardMasterZone Source AZ of a shard
     * @param array $ShardSlaveZones Replica AZ of a shard
     * @param integer $Cpu Number of CPU cores
     * @param array $NodesInfo Node information
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ShardSerialId",$param) and $param["ShardSerialId"] !== null) {
            $this->ShardSerialId = $param["ShardSerialId"];
        }

        if (array_key_exists("ShardInstanceId",$param) and $param["ShardInstanceId"] !== null) {
            $this->ShardInstanceId = $param["ShardInstanceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("LogDisk",$param) and $param["LogDisk"] !== null) {
            $this->LogDisk = $param["LogDisk"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("StorageUsage",$param) and $param["StorageUsage"] !== null) {
            $this->StorageUsage = $param["StorageUsage"];
        }

        if (array_key_exists("ProxyVersion",$param) and $param["ProxyVersion"] !== null) {
            $this->ProxyVersion = $param["ProxyVersion"];
        }

        if (array_key_exists("ShardMasterZone",$param) and $param["ShardMasterZone"] !== null) {
            $this->ShardMasterZone = $param["ShardMasterZone"];
        }

        if (array_key_exists("ShardSlaveZones",$param) and $param["ShardSlaveZones"] !== null) {
            $this->ShardSlaveZones = $param["ShardSlaveZones"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("NodesInfo",$param) and $param["NodesInfo"] !== null) {
            $this->NodesInfo = [];
            foreach ($param["NodesInfo"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodesInfo, $obj);
            }
        }
    }
}
