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
 * Instance details.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getPayMode() Obtain Billing type. Valid value: 0 (pay-as-you-go)
 * @method void setPayMode(integer $PayMode) Set Billing type. Valid value: 0 (pay-as-you-go)
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method integer getClusterType() Obtain Cluster type.
- 0: replica set instance.
- 1: sharded cluster instance.
 * @method void setClusterType(integer $ClusterType) Set Cluster type.
- 0: replica set instance.
- 1: sharded cluster instance.
 * @method string getRegion() Obtain Region information
 * @method void setRegion(string $Region) Set Region information
 * @method string getZone() Obtain AZ information
 * @method void setZone(string $Zone) Set AZ information
 * @method integer getNetType() Obtain Network type.
- 0: basic network.
- 1: VPC.
 * @method void setNetType(integer $NetType) Set Network type.
- 0: basic network.
- 1: VPC.
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID of VPC
 * @method void setSubnetId(string $SubnetId) Set Subnet ID of VPC
 * @method integer getStatus() Obtain Instance status.
- 0: to be initialized.
- 1: processing, such as specification changes and parameter modifications.
- 2: running normally.
- -2: isolated (yearly/monthly subscription).
- -3: isolated (pay-as-you-go).
 * @method void setStatus(integer $Status) Set Instance status.
- 0: to be initialized.
- 1: processing, such as specification changes and parameter modifications.
- 2: running normally.
- -2: isolated (yearly/monthly subscription).
- -3: isolated (pay-as-you-go).
 * @method string getVip() Obtain Instance IP
 * @method void setVip(string $Vip) Set Instance IP
 * @method integer getVport() Obtain Port number
 * @method void setVport(integer $Vport) Set Port number
 * @method string getCreateTime() Obtain Instance creation time
 * @method void setCreateTime(string $CreateTime) Set Instance creation time
 * @method string getDeadLine() Obtain Instance expiration time
 * @method void setDeadLine(string $DeadLine) Set Instance expiration time
 * @method string getMongoVersion() Obtain Storage engine version information on instances.
- MONGO_36_WT: version of the MongoDB 3.6 WiredTiger storage engine.
- MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
 * @method void setMongoVersion(string $MongoVersion) Set Storage engine version information on instances.
- MONGO_36_WT: version of the MongoDB 3.6 WiredTiger storage engine.
- MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
 * @method integer getMemory() Obtain Instance memory specification, in MB.
 * @method void setMemory(integer $Memory) Set Instance memory specification, in MB.
 * @method integer getVolume() Obtain Instance disk specification, in MB.
 * @method void setVolume(integer $Volume) Set Instance disk specification, in MB.
 * @method integer getCpuNum() Obtain Number of the instance CPU cores.
 * @method void setCpuNum(integer $CpuNum) Set Number of the instance CPU cores.
 * @method string getMachineType() Obtain Instance machine type.
- HIO10G: general HIO 10GE type.
- HCD: Cloud Disk Edition type.
 * @method void setMachineType(string $MachineType) Set Instance machine type.
- HIO10G: general HIO 10GE type.
- HCD: Cloud Disk Edition type.
 * @method integer getSecondaryNum() Obtain Number of secondary nodes of an instance
 * @method void setSecondaryNum(integer $SecondaryNum) Set Number of secondary nodes of an instance
 * @method integer getReplicationSetNum() Obtain Number of instance shards
 * @method void setReplicationSetNum(integer $ReplicationSetNum) Set Number of instance shards
 * @method integer getAutoRenewFlag() Obtain Automatic renewal flag for the instance.
- 0: manual renewal.
- 1: automatic renewal.
- 2: no renewal after confirmation.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Automatic renewal flag for the instance.
- 0: manual renewal.
- 1: automatic renewal.
- 2: no renewal after confirmation.
 * @method integer getUsedVolume() Obtain Used capacity, in MB.
 * @method void setUsedVolume(integer $UsedVolume) Set Used capacity, in MB.
 * @method string getMaintenanceStart() Obtain Start time of the maintenance time
 * @method void setMaintenanceStart(string $MaintenanceStart) Set Start time of the maintenance time
 * @method string getMaintenanceEnd() Obtain End time of the maintenance time
 * @method void setMaintenanceEnd(string $MaintenanceEnd) Set End time of the maintenance time
 * @method array getReplicaSets() Obtain Shard information
 * @method void setReplicaSets(array $ReplicaSets) Set Shard information
 * @method array getReadonlyInstances() Obtain Information of read-only instances
 * @method void setReadonlyInstances(array $ReadonlyInstances) Set Information of read-only instances
 * @method array getStandbyInstances() Obtain Information of disaster recovery instances
 * @method void setStandbyInstances(array $StandbyInstances) Set Information of disaster recovery instances
 * @method array getCloneInstances() Obtain Information of temp instances
 * @method void setCloneInstances(array $CloneInstances) Set Information of temp instances
 * @method DBInstanceInfo getRelatedInstance() Obtain Information of associated instances. For a regular instance, this field represents the information of its temp instance; for a temp instance, this field represents the information of its regular instance; and for a read-only instance or a disaster recovery instance, this field represents the information of its primary instance.
 * @method void setRelatedInstance(DBInstanceInfo $RelatedInstance) Set Information of associated instances. For a regular instance, this field represents the information of its temp instance; for a temp instance, this field represents the information of its regular instance; and for a read-only instance or a disaster recovery instance, this field represents the information of its primary instance.
 * @method array getTags() Obtain Instance tag information set
 * @method void setTags(array $Tags) Set Instance tag information set
 * @method integer getInstanceVer() Obtain Instance version
 * @method void setInstanceVer(integer $InstanceVer) Set Instance version
 * @method integer getClusterVer() Obtain Instance version
 * @method void setClusterVer(integer $ClusterVer) Set Instance version
 * @method integer getProtocol() Obtain Protocol information: mongodb.
 * @method void setProtocol(integer $Protocol) Set Protocol information: mongodb.
 * @method integer getInstanceType() Obtain Instance type.
- 0: all instances.
- 1: formal instance.
- 2: temporary instance.
- 3: read-only instance.
- -1: include the formal, read-only, and disaster recovery instance simultaneously.
 * @method void setInstanceType(integer $InstanceType) Set Instance type.
- 0: all instances.
- 1: formal instance.
- 2: temporary instance.
- 3: read-only instance.
- -1: include the formal, read-only, and disaster recovery instance simultaneously.
 * @method string getInstanceStatusDesc() Obtain Instance status description.
 * @method void setInstanceStatusDesc(string $InstanceStatusDesc) Set Instance status description.
 * @method string getRealInstanceId() Obtain Physical instance ID corresponding to the instance. The instances that have been rolled back and replaced have different InstanceIds and RealInstanceIds, which need to be obtained through the physical ID in scenarios such as obtaining monitoring data from Barad.
 * @method void setRealInstanceId(string $RealInstanceId) Set Physical instance ID corresponding to the instance. The instances that have been rolled back and replaced have different InstanceIds and RealInstanceIds, which need to be obtained through the physical ID in scenarios such as obtaining monitoring data from Barad.
 * @method integer getMongosNodeNum() Obtain Number of Mongos nodes.
 * @method void setMongosNodeNum(integer $MongosNodeNum) Set Number of Mongos nodes.
 * @method integer getMongosMemory() Obtain Mongos node memory, in MB.
 * @method void setMongosMemory(integer $MongosMemory) Set Mongos node memory, in MB.
 * @method integer getMongosCpuNum() Obtain Number of Mongos node CPU cores.
 * @method void setMongosCpuNum(integer $MongosCpuNum) Set Number of Mongos node CPU cores.
 * @method integer getConfigServerNodeNum() Obtain Number of ConfigServer nodes.
 * @method void setConfigServerNodeNum(integer $ConfigServerNodeNum) Set Number of ConfigServer nodes.
 * @method integer getConfigServerMemory() Obtain Config Server node memory, in MB.
 * @method void setConfigServerMemory(integer $ConfigServerMemory) Set Config Server node memory, in MB.
 * @method integer getConfigServerVolume() Obtain Config Server node disk size, in MB.
 * @method void setConfigServerVolume(integer $ConfigServerVolume) Set Config Server node disk size, in MB.
 * @method integer getConfigServerCpuNum() Obtain Number of ConfigServer node CPU cores.
 * @method void setConfigServerCpuNum(integer $ConfigServerCpuNum) Set Number of ConfigServer node CPU cores.
 * @method integer getReadonlyNodeNum() Obtain Number of read-only nodes.
 * @method void setReadonlyNodeNum(integer $ReadonlyNodeNum) Set Number of read-only nodes.
 */
class InstanceDetail extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Billing type. Valid value: 0 (pay-as-you-go)
     */
    public $PayMode;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var integer Cluster type.
- 0: replica set instance.
- 1: sharded cluster instance.
     */
    public $ClusterType;

    /**
     * @var string Region information
     */
    public $Region;

    /**
     * @var string AZ information
     */
    public $Zone;

    /**
     * @var integer Network type.
- 0: basic network.
- 1: VPC.
     */
    public $NetType;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID of VPC
     */
    public $SubnetId;

    /**
     * @var integer Instance status.
- 0: to be initialized.
- 1: processing, such as specification changes and parameter modifications.
- 2: running normally.
- -2: isolated (yearly/monthly subscription).
- -3: isolated (pay-as-you-go).
     */
    public $Status;

    /**
     * @var string Instance IP
     */
    public $Vip;

    /**
     * @var integer Port number
     */
    public $Vport;

    /**
     * @var string Instance creation time
     */
    public $CreateTime;

    /**
     * @var string Instance expiration time
     */
    public $DeadLine;

    /**
     * @var string Storage engine version information on instances.
- MONGO_36_WT: version of the MongoDB 3.6 WiredTiger storage engine.
- MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
     */
    public $MongoVersion;

    /**
     * @var integer Instance memory specification, in MB.
     */
    public $Memory;

    /**
     * @var integer Instance disk specification, in MB.
     */
    public $Volume;

    /**
     * @var integer Number of the instance CPU cores.
     */
    public $CpuNum;

    /**
     * @var string Instance machine type.
- HIO10G: general HIO 10GE type.
- HCD: Cloud Disk Edition type.
     */
    public $MachineType;

    /**
     * @var integer Number of secondary nodes of an instance
     */
    public $SecondaryNum;

    /**
     * @var integer Number of instance shards
     */
    public $ReplicationSetNum;

    /**
     * @var integer Automatic renewal flag for the instance.
- 0: manual renewal.
- 1: automatic renewal.
- 2: no renewal after confirmation.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Used capacity, in MB.
     */
    public $UsedVolume;

    /**
     * @var string Start time of the maintenance time
     */
    public $MaintenanceStart;

    /**
     * @var string End time of the maintenance time
     */
    public $MaintenanceEnd;

    /**
     * @var array Shard information
     */
    public $ReplicaSets;

    /**
     * @var array Information of read-only instances
     */
    public $ReadonlyInstances;

    /**
     * @var array Information of disaster recovery instances
     */
    public $StandbyInstances;

    /**
     * @var array Information of temp instances
     */
    public $CloneInstances;

    /**
     * @var DBInstanceInfo Information of associated instances. For a regular instance, this field represents the information of its temp instance; for a temp instance, this field represents the information of its regular instance; and for a read-only instance or a disaster recovery instance, this field represents the information of its primary instance.
     */
    public $RelatedInstance;

    /**
     * @var array Instance tag information set
     */
    public $Tags;

    /**
     * @var integer Instance version
     */
    public $InstanceVer;

    /**
     * @var integer Instance version
     */
    public $ClusterVer;

    /**
     * @var integer Protocol information: mongodb.
     */
    public $Protocol;

    /**
     * @var integer Instance type.
- 0: all instances.
- 1: formal instance.
- 2: temporary instance.
- 3: read-only instance.
- -1: include the formal, read-only, and disaster recovery instance simultaneously.
     */
    public $InstanceType;

    /**
     * @var string Instance status description.
     */
    public $InstanceStatusDesc;

    /**
     * @var string Physical instance ID corresponding to the instance. The instances that have been rolled back and replaced have different InstanceIds and RealInstanceIds, which need to be obtained through the physical ID in scenarios such as obtaining monitoring data from Barad.
     */
    public $RealInstanceId;

    /**
     * @var integer Number of Mongos nodes.
     */
    public $MongosNodeNum;

    /**
     * @var integer Mongos node memory, in MB.
     */
    public $MongosMemory;

    /**
     * @var integer Number of Mongos node CPU cores.
     */
    public $MongosCpuNum;

    /**
     * @var integer Number of ConfigServer nodes.
     */
    public $ConfigServerNodeNum;

    /**
     * @var integer Config Server node memory, in MB.
     */
    public $ConfigServerMemory;

    /**
     * @var integer Config Server node disk size, in MB.
     */
    public $ConfigServerVolume;

    /**
     * @var integer Number of ConfigServer node CPU cores.
     */
    public $ConfigServerCpuNum;

    /**
     * @var integer Number of read-only nodes.
     */
    public $ReadonlyNodeNum;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name
     * @param integer $PayMode Billing type. Valid value: 0 (pay-as-you-go)
     * @param integer $ProjectId Project ID.
     * @param integer $ClusterType Cluster type.
- 0: replica set instance.
- 1: sharded cluster instance.
     * @param string $Region Region information
     * @param string $Zone AZ information
     * @param integer $NetType Network type.
- 0: basic network.
- 1: VPC.
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID of VPC
     * @param integer $Status Instance status.
- 0: to be initialized.
- 1: processing, such as specification changes and parameter modifications.
- 2: running normally.
- -2: isolated (yearly/monthly subscription).
- -3: isolated (pay-as-you-go).
     * @param string $Vip Instance IP
     * @param integer $Vport Port number
     * @param string $CreateTime Instance creation time
     * @param string $DeadLine Instance expiration time
     * @param string $MongoVersion Storage engine version information on instances.
- MONGO_36_WT: version of the MongoDB 3.6 WiredTiger storage engine.
- MONGO_40_WT: version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
     * @param integer $Memory Instance memory specification, in MB.
     * @param integer $Volume Instance disk specification, in MB.
     * @param integer $CpuNum Number of the instance CPU cores.
     * @param string $MachineType Instance machine type.
- HIO10G: general HIO 10GE type.
- HCD: Cloud Disk Edition type.
     * @param integer $SecondaryNum Number of secondary nodes of an instance
     * @param integer $ReplicationSetNum Number of instance shards
     * @param integer $AutoRenewFlag Automatic renewal flag for the instance.
- 0: manual renewal.
- 1: automatic renewal.
- 2: no renewal after confirmation.
     * @param integer $UsedVolume Used capacity, in MB.
     * @param string $MaintenanceStart Start time of the maintenance time
     * @param string $MaintenanceEnd End time of the maintenance time
     * @param array $ReplicaSets Shard information
     * @param array $ReadonlyInstances Information of read-only instances
     * @param array $StandbyInstances Information of disaster recovery instances
     * @param array $CloneInstances Information of temp instances
     * @param DBInstanceInfo $RelatedInstance Information of associated instances. For a regular instance, this field represents the information of its temp instance; for a temp instance, this field represents the information of its regular instance; and for a read-only instance or a disaster recovery instance, this field represents the information of its primary instance.
     * @param array $Tags Instance tag information set
     * @param integer $InstanceVer Instance version
     * @param integer $ClusterVer Instance version
     * @param integer $Protocol Protocol information: mongodb.
     * @param integer $InstanceType Instance type.
- 0: all instances.
- 1: formal instance.
- 2: temporary instance.
- 3: read-only instance.
- -1: include the formal, read-only, and disaster recovery instance simultaneously.
     * @param string $InstanceStatusDesc Instance status description.
     * @param string $RealInstanceId Physical instance ID corresponding to the instance. The instances that have been rolled back and replaced have different InstanceIds and RealInstanceIds, which need to be obtained through the physical ID in scenarios such as obtaining monitoring data from Barad.
     * @param integer $MongosNodeNum Number of Mongos nodes.
     * @param integer $MongosMemory Mongos node memory, in MB.
     * @param integer $MongosCpuNum Number of Mongos node CPU cores.
     * @param integer $ConfigServerNodeNum Number of ConfigServer nodes.
     * @param integer $ConfigServerMemory Config Server node memory, in MB.
     * @param integer $ConfigServerVolume Config Server node disk size, in MB.
     * @param integer $ConfigServerCpuNum Number of ConfigServer node CPU cores.
     * @param integer $ReadonlyNodeNum Number of read-only nodes.
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeadLine",$param) and $param["DeadLine"] !== null) {
            $this->DeadLine = $param["DeadLine"];
        }

        if (array_key_exists("MongoVersion",$param) and $param["MongoVersion"] !== null) {
            $this->MongoVersion = $param["MongoVersion"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("SecondaryNum",$param) and $param["SecondaryNum"] !== null) {
            $this->SecondaryNum = $param["SecondaryNum"];
        }

        if (array_key_exists("ReplicationSetNum",$param) and $param["ReplicationSetNum"] !== null) {
            $this->ReplicationSetNum = $param["ReplicationSetNum"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("UsedVolume",$param) and $param["UsedVolume"] !== null) {
            $this->UsedVolume = $param["UsedVolume"];
        }

        if (array_key_exists("MaintenanceStart",$param) and $param["MaintenanceStart"] !== null) {
            $this->MaintenanceStart = $param["MaintenanceStart"];
        }

        if (array_key_exists("MaintenanceEnd",$param) and $param["MaintenanceEnd"] !== null) {
            $this->MaintenanceEnd = $param["MaintenanceEnd"];
        }

        if (array_key_exists("ReplicaSets",$param) and $param["ReplicaSets"] !== null) {
            $this->ReplicaSets = [];
            foreach ($param["ReplicaSets"] as $key => $value){
                $obj = new ShardInfo();
                $obj->deserialize($value);
                array_push($this->ReplicaSets, $obj);
            }
        }

        if (array_key_exists("ReadonlyInstances",$param) and $param["ReadonlyInstances"] !== null) {
            $this->ReadonlyInstances = [];
            foreach ($param["ReadonlyInstances"] as $key => $value){
                $obj = new DBInstanceInfo();
                $obj->deserialize($value);
                array_push($this->ReadonlyInstances, $obj);
            }
        }

        if (array_key_exists("StandbyInstances",$param) and $param["StandbyInstances"] !== null) {
            $this->StandbyInstances = [];
            foreach ($param["StandbyInstances"] as $key => $value){
                $obj = new DBInstanceInfo();
                $obj->deserialize($value);
                array_push($this->StandbyInstances, $obj);
            }
        }

        if (array_key_exists("CloneInstances",$param) and $param["CloneInstances"] !== null) {
            $this->CloneInstances = [];
            foreach ($param["CloneInstances"] as $key => $value){
                $obj = new DBInstanceInfo();
                $obj->deserialize($value);
                array_push($this->CloneInstances, $obj);
            }
        }

        if (array_key_exists("RelatedInstance",$param) and $param["RelatedInstance"] !== null) {
            $this->RelatedInstance = new DBInstanceInfo();
            $this->RelatedInstance->deserialize($param["RelatedInstance"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceVer",$param) and $param["InstanceVer"] !== null) {
            $this->InstanceVer = $param["InstanceVer"];
        }

        if (array_key_exists("ClusterVer",$param) and $param["ClusterVer"] !== null) {
            $this->ClusterVer = $param["ClusterVer"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceStatusDesc",$param) and $param["InstanceStatusDesc"] !== null) {
            $this->InstanceStatusDesc = $param["InstanceStatusDesc"];
        }

        if (array_key_exists("RealInstanceId",$param) and $param["RealInstanceId"] !== null) {
            $this->RealInstanceId = $param["RealInstanceId"];
        }

        if (array_key_exists("MongosNodeNum",$param) and $param["MongosNodeNum"] !== null) {
            $this->MongosNodeNum = $param["MongosNodeNum"];
        }

        if (array_key_exists("MongosMemory",$param) and $param["MongosMemory"] !== null) {
            $this->MongosMemory = $param["MongosMemory"];
        }

        if (array_key_exists("MongosCpuNum",$param) and $param["MongosCpuNum"] !== null) {
            $this->MongosCpuNum = $param["MongosCpuNum"];
        }

        if (array_key_exists("ConfigServerNodeNum",$param) and $param["ConfigServerNodeNum"] !== null) {
            $this->ConfigServerNodeNum = $param["ConfigServerNodeNum"];
        }

        if (array_key_exists("ConfigServerMemory",$param) and $param["ConfigServerMemory"] !== null) {
            $this->ConfigServerMemory = $param["ConfigServerMemory"];
        }

        if (array_key_exists("ConfigServerVolume",$param) and $param["ConfigServerVolume"] !== null) {
            $this->ConfigServerVolume = $param["ConfigServerVolume"];
        }

        if (array_key_exists("ConfigServerCpuNum",$param) and $param["ConfigServerCpuNum"] !== null) {
            $this->ConfigServerCpuNum = $param["ConfigServerCpuNum"];
        }

        if (array_key_exists("ReadonlyNodeNum",$param) and $param["ReadonlyNodeNum"] !== null) {
            $this->ReadonlyNodeNum = $param["ReadonlyNodeNum"];
        }
    }
}
