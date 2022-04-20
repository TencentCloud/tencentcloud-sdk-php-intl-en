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
 * TDSQL shard information.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getShardSerialId() Obtain Shard SQL passthrough ID, which is used to pass through SQL statements to the specified shard for execution.
 * @method void setShardSerialId(string $ShardSerialId) Set Shard SQL passthrough ID, which is used to pass through SQL statements to the specified shard for execution.
 * @method string getShardInstanceId() Obtain Globally unique shard ID
 * @method void setShardInstanceId(string $ShardInstanceId) Set Globally unique shard ID
 * @method integer getStatus() Obtain Status. 0: creating; 1: processing; 2: running; 3: shard not initialized.
 * @method void setStatus(integer $Status) Set Status. 0: creating; 1: processing; 2: running; 3: shard not initialized.
 * @method string getStatusDesc() Obtain Status description
 * @method void setStatusDesc(string $StatusDesc) Set Status description
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getVpcId() Obtain VPC ID in string format
 * @method void setVpcId(string $VpcId) Set VPC ID in string format
 * @method string getSubnetId() Obtain VPC subnet ID in string format
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID in string format
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method integer getMemory() Obtain Memory size in GB
 * @method void setMemory(integer $Memory) Set Memory size in GB
 * @method integer getStorage() Obtain Storage capacity in GB
 * @method void setStorage(integer $Storage) Set Storage capacity in GB
 * @method string getPeriodEndTime() Obtain Expiration time
 * @method void setPeriodEndTime(string $PeriodEndTime) Set Expiration time
 * @method integer getNodeCount() Obtain Number of nodes. 2: one source and one replica; 3: one source and two replicas
 * @method void setNodeCount(integer $NodeCount) Set Number of nodes. 2: one source and one replica; 3: one source and two replicas
 * @method float getStorageUsage() Obtain Storage utilization in %
 * @method void setStorageUsage(float $StorageUsage) Set Storage utilization in %
 * @method float getMemoryUsage() Obtain Memory utilization in %
 * @method void setMemoryUsage(float $MemoryUsage) Set Memory utilization in %
 * @method integer getShardId() Obtain Numeric shard ID (this field is obsolete and should not be depended on)
 * @method void setShardId(integer $ShardId) Set Numeric shard ID (this field is obsolete and should not be depended on)
 * @method integer getPid() Obtain Product ID
 * @method void setPid(integer $Pid) Set Product ID
 * @method string getProxyVersion() Obtain Proxy version
 * @method void setProxyVersion(string $ProxyVersion) Set Proxy version
 * @method string getPaymode() Obtain Billing mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPaymode(string $Paymode) Set Billing mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getShardMasterZone() Obtain Source AZ of the shard
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShardMasterZone(string $ShardMasterZone) Set Source AZ of the shard
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getShardSlaveZones() Obtain List of replica AZs of the shard
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShardSlaveZones(array $ShardSlaveZones) Set List of replica AZs of the shard
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCpu() Obtain Number of CPU cores
 * @method void setCpu(integer $Cpu) Set Number of CPU cores
 * @method string getRange() Obtain The value range of shardkey, which includes 64 hash values, such as 0-31 or 32-63.
 * @method void setRange(string $Range) Set The value range of shardkey, which includes 64 hash values, such as 0-31 or 32-63.
 */
class DCDBShardInfo extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Shard SQL passthrough ID, which is used to pass through SQL statements to the specified shard for execution.
     */
    public $ShardSerialId;

    /**
     * @var string Globally unique shard ID
     */
    public $ShardInstanceId;

    /**
     * @var integer Status. 0: creating; 1: processing; 2: running; 3: shard not initialized.
     */
    public $Status;

    /**
     * @var string Status description
     */
    public $StatusDesc;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string VPC ID in string format
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID in string format
     */
    public $SubnetId;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var integer Memory size in GB
     */
    public $Memory;

    /**
     * @var integer Storage capacity in GB
     */
    public $Storage;

    /**
     * @var string Expiration time
     */
    public $PeriodEndTime;

    /**
     * @var integer Number of nodes. 2: one source and one replica; 3: one source and two replicas
     */
    public $NodeCount;

    /**
     * @var float Storage utilization in %
     */
    public $StorageUsage;

    /**
     * @var float Memory utilization in %
     */
    public $MemoryUsage;

    /**
     * @var integer Numeric shard ID (this field is obsolete and should not be depended on)
     */
    public $ShardId;

    /**
     * @var integer Product ID
     */
    public $Pid;

    /**
     * @var string Proxy version
     */
    public $ProxyVersion;

    /**
     * @var string Billing mode
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Paymode;

    /**
     * @var string Source AZ of the shard
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShardMasterZone;

    /**
     * @var array List of replica AZs of the shard
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShardSlaveZones;

    /**
     * @var integer Number of CPU cores
     */
    public $Cpu;

    /**
     * @var string The value range of shardkey, which includes 64 hash values, such as 0-31 or 32-63.
     */
    public $Range;

    /**
     * @param string $InstanceId Instance ID
     * @param string $ShardSerialId Shard SQL passthrough ID, which is used to pass through SQL statements to the specified shard for execution.
     * @param string $ShardInstanceId Globally unique shard ID
     * @param integer $Status Status. 0: creating; 1: processing; 2: running; 3: shard not initialized.
     * @param string $StatusDesc Status description
     * @param string $CreateTime Creation time
     * @param string $VpcId VPC ID in string format
     * @param string $SubnetId VPC subnet ID in string format
     * @param integer $ProjectId Project ID
     * @param string $Region Region
     * @param string $Zone AZ
     * @param integer $Memory Memory size in GB
     * @param integer $Storage Storage capacity in GB
     * @param string $PeriodEndTime Expiration time
     * @param integer $NodeCount Number of nodes. 2: one source and one replica; 3: one source and two replicas
     * @param float $StorageUsage Storage utilization in %
     * @param float $MemoryUsage Memory utilization in %
     * @param integer $ShardId Numeric shard ID (this field is obsolete and should not be depended on)
     * @param integer $Pid Product ID
     * @param string $ProxyVersion Proxy version
     * @param string $Paymode Billing mode
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ShardMasterZone Source AZ of the shard
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ShardSlaveZones List of replica AZs of the shard
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Cpu Number of CPU cores
     * @param string $Range The value range of shardkey, which includes 64 hash values, such as 0-31 or 32-63.
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("StorageUsage",$param) and $param["StorageUsage"] !== null) {
            $this->StorageUsage = $param["StorageUsage"];
        }

        if (array_key_exists("MemoryUsage",$param) and $param["MemoryUsage"] !== null) {
            $this->MemoryUsage = $param["MemoryUsage"];
        }

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("ProxyVersion",$param) and $param["ProxyVersion"] !== null) {
            $this->ProxyVersion = $param["ProxyVersion"];
        }

        if (array_key_exists("Paymode",$param) and $param["Paymode"] !== null) {
            $this->Paymode = $param["Paymode"];
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

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = $param["Range"];
        }
    }
}
