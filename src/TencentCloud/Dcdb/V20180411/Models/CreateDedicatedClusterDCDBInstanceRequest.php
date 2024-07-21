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
 * CreateDedicatedClusterDCDBInstance request structure.
 *
 * @method integer getGoodsNum() Obtain Number of created instances
 * @method void setGoodsNum(integer $GoodsNum) Set Number of created instances
 * @method integer getShardNum() Obtain Shard count
 * @method void setShardNum(integer $ShardNum) Set Shard count
 * @method integer getShardMemory() Obtain Shard memory size in GB
 * @method void setShardMemory(integer $ShardMemory) Set Shard memory size in GB
 * @method integer getShardStorage() Obtain Shard disk size in GB
 * @method void setShardStorage(integer $ShardStorage) Set Shard disk size in GB
 * @method string getClusterId() Obtain UUID of the dedicated cluster
 * @method void setClusterId(string $ClusterId) Set UUID of the dedicated cluster
 * @method string getZone() Obtain (Disused) AZ
 * @method void setZone(string $Zone) Set (Disused) AZ
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getCpu() Obtain (Disused) Number of CPU cores
 * @method void setCpu(integer $Cpu) Set (Disused) Number of CPU cores
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getShardMachine() Obtain (Disused) Shard model
 * @method void setShardMachine(string $ShardMachine) Set (Disused) Shard model
 * @method integer getShardNodeNum() Obtain Number of shard nodes
 * @method void setShardNodeNum(integer $ShardNodeNum) Set Number of shard nodes
 * @method integer getShardNodeCpu() Obtain (Disused) Number of node CPU cores. Value range: 1-100.
 * @method void setShardNodeCpu(integer $ShardNodeCpu) Set (Disused) Number of node CPU cores. Value range: 1-100.
 * @method integer getShardNodeMemory() Obtain (Disused) Node memory size in GB
 * @method void setShardNodeMemory(integer $ShardNodeMemory) Set (Disused) Node memory size in GB
 * @method integer getShardNodeStorage() Obtain (Disused) Node disk size in GB
 * @method void setShardNodeStorage(integer $ShardNodeStorage) Set (Disused) Node disk size in GB
 * @method string getDbVersionId() Obtain Database version
 * @method void setDbVersionId(string $DbVersionId) Set Database version
 * @method string getSecurityGroupId() Obtain Security group ID
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group ID
 * @method array getSecurityGroupIds() Obtain List of security group IDs
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set List of security group IDs
 * @method string getDcnInstanceId() Obtain DCN source instance ID
 * @method void setDcnInstanceId(string $DcnInstanceId) Set DCN source instance ID
 * @method string getDcnRegion() Obtain Region of DCN source instance
 * @method void setDcnRegion(string $DcnRegion) Set Region of DCN source instance
 * @method string getInstanceName() Obtain Custom instance name
 * @method void setInstanceName(string $InstanceName) Set Custom instance name
 * @method array getResourceTags() Obtain Tag
 * @method void setResourceTags(array $ResourceTags) Set Tag
 * @method integer getIpv6Flag() Obtain Whether IPv6 flag is supported. Valid values: `1` (yes), `0` (no).
 * @method void setIpv6Flag(integer $Ipv6Flag) Set Whether IPv6 flag is supported. Valid values: `1` (yes), `0` (no).
 * @method integer getPid() Obtain (Disused) Pid, which can be queried by the `DescribeSpecInfo` API.
 * @method void setPid(integer $Pid) Set (Disused) Pid, which can be queried by the `DescribeSpecInfo` API.
 * @method array getInitParams() Obtain List of parameters. Valid values: `character_set_server` (character set; required), `lower_case_table_names` (table name case sensitivity; required; `0`: case-sensitive; `1`: case-insensitive), `innodb_page_size` (InnoDB data page; default size: 16 KB), `sync_mode` (sync mode; `0`: async; `1`: strong sync; `2`: downgradable strong sync. Default value: `2`).
 * @method void setInitParams(array $InitParams) Set List of parameters. Valid values: `character_set_server` (character set; required), `lower_case_table_names` (table name case sensitivity; required; `0`: case-sensitive; `1`: case-insensitive), `innodb_page_size` (InnoDB data page; default size: 16 KB), `sync_mode` (sync mode; `0`: async; `1`: strong sync; `2`: downgradable strong sync. Default value: `2`).
 * @method string getMasterHostId() Obtain Specified UUID for the source node. If left empty, it will be assigned by the system randomly.
 * @method void setMasterHostId(string $MasterHostId) Set Specified UUID for the source node. If left empty, it will be assigned by the system randomly.
 * @method array getSlaveHostIds() Obtain Specified UUID for the replica node. If left empty, it will be assigned by the system randomly.
 * @method void setSlaveHostIds(array $SlaveHostIds) Set Specified UUID for the replica node. If left empty, it will be assigned by the system randomly.
 * @method string getRollbackInstanceId() Obtain ID of the source instance to be rolled back
 * @method void setRollbackInstanceId(string $RollbackInstanceId) Set ID of the source instance to be rolled back
 * @method string getRollbackTime() Obtain Rollback time
 * @method void setRollbackTime(string $RollbackTime) Set Rollback time
 * @method integer getDcnSyncMode() Obtain 
 * @method void setDcnSyncMode(integer $DcnSyncMode) Set 
 */
class CreateDedicatedClusterDCDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer Number of created instances
     */
    public $GoodsNum;

    /**
     * @var integer Shard count
     */
    public $ShardNum;

    /**
     * @var integer Shard memory size in GB
     */
    public $ShardMemory;

    /**
     * @var integer Shard disk size in GB
     */
    public $ShardStorage;

    /**
     * @var string UUID of the dedicated cluster
     */
    public $ClusterId;

    /**
     * @var string (Disused) AZ
     */
    public $Zone;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer (Disused) Number of CPU cores
     */
    public $Cpu;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string (Disused) Shard model
     */
    public $ShardMachine;

    /**
     * @var integer Number of shard nodes
     */
    public $ShardNodeNum;

    /**
     * @var integer (Disused) Number of node CPU cores. Value range: 1-100.
     */
    public $ShardNodeCpu;

    /**
     * @var integer (Disused) Node memory size in GB
     */
    public $ShardNodeMemory;

    /**
     * @var integer (Disused) Node disk size in GB
     */
    public $ShardNodeStorage;

    /**
     * @var string Database version
     */
    public $DbVersionId;

    /**
     * @var string Security group ID
     */
    public $SecurityGroupId;

    /**
     * @var array List of security group IDs
     */
    public $SecurityGroupIds;

    /**
     * @var string DCN source instance ID
     */
    public $DcnInstanceId;

    /**
     * @var string Region of DCN source instance
     */
    public $DcnRegion;

    /**
     * @var string Custom instance name
     */
    public $InstanceName;

    /**
     * @var array Tag
     */
    public $ResourceTags;

    /**
     * @var integer Whether IPv6 flag is supported. Valid values: `1` (yes), `0` (no).
     */
    public $Ipv6Flag;

    /**
     * @var integer (Disused) Pid, which can be queried by the `DescribeSpecInfo` API.
     */
    public $Pid;

    /**
     * @var array List of parameters. Valid values: `character_set_server` (character set; required), `lower_case_table_names` (table name case sensitivity; required; `0`: case-sensitive; `1`: case-insensitive), `innodb_page_size` (InnoDB data page; default size: 16 KB), `sync_mode` (sync mode; `0`: async; `1`: strong sync; `2`: downgradable strong sync. Default value: `2`).
     */
    public $InitParams;

    /**
     * @var string Specified UUID for the source node. If left empty, it will be assigned by the system randomly.
     */
    public $MasterHostId;

    /**
     * @var array Specified UUID for the replica node. If left empty, it will be assigned by the system randomly.
     */
    public $SlaveHostIds;

    /**
     * @var string ID of the source instance to be rolled back
     */
    public $RollbackInstanceId;

    /**
     * @var string Rollback time
     */
    public $RollbackTime;

    /**
     * @var integer 
     */
    public $DcnSyncMode;

    /**
     * @param integer $GoodsNum Number of created instances
     * @param integer $ShardNum Shard count
     * @param integer $ShardMemory Shard memory size in GB
     * @param integer $ShardStorage Shard disk size in GB
     * @param string $ClusterId UUID of the dedicated cluster
     * @param string $Zone (Disused) AZ
     * @param integer $ProjectId Project ID
     * @param integer $Cpu (Disused) Number of CPU cores
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
     * @param string $ShardMachine (Disused) Shard model
     * @param integer $ShardNodeNum Number of shard nodes
     * @param integer $ShardNodeCpu (Disused) Number of node CPU cores. Value range: 1-100.
     * @param integer $ShardNodeMemory (Disused) Node memory size in GB
     * @param integer $ShardNodeStorage (Disused) Node disk size in GB
     * @param string $DbVersionId Database version
     * @param string $SecurityGroupId Security group ID
     * @param array $SecurityGroupIds List of security group IDs
     * @param string $DcnInstanceId DCN source instance ID
     * @param string $DcnRegion Region of DCN source instance
     * @param string $InstanceName Custom instance name
     * @param array $ResourceTags Tag
     * @param integer $Ipv6Flag Whether IPv6 flag is supported. Valid values: `1` (yes), `0` (no).
     * @param integer $Pid (Disused) Pid, which can be queried by the `DescribeSpecInfo` API.
     * @param array $InitParams List of parameters. Valid values: `character_set_server` (character set; required), `lower_case_table_names` (table name case sensitivity; required; `0`: case-sensitive; `1`: case-insensitive), `innodb_page_size` (InnoDB data page; default size: 16 KB), `sync_mode` (sync mode; `0`: async; `1`: strong sync; `2`: downgradable strong sync. Default value: `2`).
     * @param string $MasterHostId Specified UUID for the source node. If left empty, it will be assigned by the system randomly.
     * @param array $SlaveHostIds Specified UUID for the replica node. If left empty, it will be assigned by the system randomly.
     * @param string $RollbackInstanceId ID of the source instance to be rolled back
     * @param string $RollbackTime Rollback time
     * @param integer $DcnSyncMode 
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
        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("ShardMemory",$param) and $param["ShardMemory"] !== null) {
            $this->ShardMemory = $param["ShardMemory"];
        }

        if (array_key_exists("ShardStorage",$param) and $param["ShardStorage"] !== null) {
            $this->ShardStorage = $param["ShardStorage"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ShardMachine",$param) and $param["ShardMachine"] !== null) {
            $this->ShardMachine = $param["ShardMachine"];
        }

        if (array_key_exists("ShardNodeNum",$param) and $param["ShardNodeNum"] !== null) {
            $this->ShardNodeNum = $param["ShardNodeNum"];
        }

        if (array_key_exists("ShardNodeCpu",$param) and $param["ShardNodeCpu"] !== null) {
            $this->ShardNodeCpu = $param["ShardNodeCpu"];
        }

        if (array_key_exists("ShardNodeMemory",$param) and $param["ShardNodeMemory"] !== null) {
            $this->ShardNodeMemory = $param["ShardNodeMemory"];
        }

        if (array_key_exists("ShardNodeStorage",$param) and $param["ShardNodeStorage"] !== null) {
            $this->ShardNodeStorage = $param["ShardNodeStorage"];
        }

        if (array_key_exists("DbVersionId",$param) and $param["DbVersionId"] !== null) {
            $this->DbVersionId = $param["DbVersionId"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("DcnInstanceId",$param) and $param["DcnInstanceId"] !== null) {
            $this->DcnInstanceId = $param["DcnInstanceId"];
        }

        if (array_key_exists("DcnRegion",$param) and $param["DcnRegion"] !== null) {
            $this->DcnRegion = $param["DcnRegion"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Ipv6Flag",$param) and $param["Ipv6Flag"] !== null) {
            $this->Ipv6Flag = $param["Ipv6Flag"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = [];
            foreach ($param["InitParams"] as $key => $value){
                $obj = new DBParamValue();
                $obj->deserialize($value);
                array_push($this->InitParams, $obj);
            }
        }

        if (array_key_exists("MasterHostId",$param) and $param["MasterHostId"] !== null) {
            $this->MasterHostId = $param["MasterHostId"];
        }

        if (array_key_exists("SlaveHostIds",$param) and $param["SlaveHostIds"] !== null) {
            $this->SlaveHostIds = $param["SlaveHostIds"];
        }

        if (array_key_exists("RollbackInstanceId",$param) and $param["RollbackInstanceId"] !== null) {
            $this->RollbackInstanceId = $param["RollbackInstanceId"];
        }

        if (array_key_exists("RollbackTime",$param) and $param["RollbackTime"] !== null) {
            $this->RollbackTime = $param["RollbackTime"];
        }

        if (array_key_exists("DcnSyncMode",$param) and $param["DcnSyncMode"] !== null) {
            $this->DcnSyncMode = $param["DcnSyncMode"];
        }
    }
}
