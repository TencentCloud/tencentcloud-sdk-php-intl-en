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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloneInstance request structure.
 *
 * @method string getZone() Obtain <p>Creating an Instance Region</p>
 * @method void setZone(string $Zone) Set <p>Creating an Instance Region</p>
 * @method string getVpcId() Obtain <p>Character type vpcid</p>
 * @method void setVpcId(string $VpcId) Set <p>Character type vpcid</p>
 * @method string getSubnetId() Obtain <p>Character type subnetid</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Character type subnetid</p>
 * @method string getSpecCode() Obtain <p>Purchase specification</p>
 * @method void setSpecCode(string $SpecCode) Set <p>Purchase specification</p>
 * @method integer getDisk() Obtain <p>Node disk capacity (unit: GB)</p>
 * @method void setDisk(integer $Disk) Set <p>Node disk capacity (unit: GB)</p>
 * @method integer getStorageNodeNum() Obtain <p>Number of storage nodes</p>
 * @method void setStorageNodeNum(integer $StorageNodeNum) Set <p>Number of storage nodes</p>
 * @method string getInstanceId() Obtain <p>Source instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Source instance id</p>
 * @method string getInstanceName() Obtain <p>Instance name. The required length is 1-60. It can contain Chinese characters, English case, digits, hyphens (-), and underscores (_).</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name. The required length is 1-60. It can contain Chinese characters, English case, digits, hyphens (-), and underscores (_).</p>
 * @method array getResourceTags() Obtain <p>Tag key-value pair array</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>Tag key-value pair array</p>
 * @method string getBackupName() Obtain <p>Backup and rollback name</p>
 * @method void setBackupName(string $BackupName) Set <p>Backup and rollback name</p>
 * @method integer getStorageNodeCpu() Obtain <p>CPU cores of the storage node</p>
 * @method void setStorageNodeCpu(integer $StorageNodeCpu) Set <p>CPU cores of the storage node</p>
 * @method integer getStorageNodeMem() Obtain <p>Storage node memory size</p>
 * @method void setStorageNodeMem(integer $StorageNodeMem) Set <p>Storage node memory size</p>
 * @method string getCreateVersion() Obtain <p>Create version</p>
 * @method void setCreateVersion(string $CreateVersion) Set <p>Create version</p>
 * @method integer getVport() Obtain <p>Create port number</p>
 * @method void setVport(integer $Vport) Set <p>Create port number</p>
 * @method string getRecoverTime() Obtain <p>Recovery time point</p>
 * @method void setRecoverTime(string $RecoverTime) Set <p>Recovery time point</p>
 * @method string getInstanceType() Obtain <p>Instance Architecture Type, separate: decoupled architecture; hybrid: peer-to-peer architecture</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Instance Architecture Type, separate: decoupled architecture; hybrid: peer-to-peer architecture</p>
 * @method string getStorageType() Obtain <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
 * @method void setStorageType(string $StorageType) Set <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
 * @method array getZones() Obtain <p>Multi-AZ list, Zones[0] refers to the primary AZ</p>
 * @method void setZones(array $Zones) Set <p>Multi-AZ list, Zones[0] refers to the primary AZ</p>
 * @method integer getFullReplications() Obtain <p>Number of replicas</p>
 * @method void setFullReplications(integer $FullReplications) Set <p>Number of replicas</p>
 * @method string getInstanceMode() Obtain <p>Instance mode, normal: standard type; enhanced: enhanced</p>
 * @method void setInstanceMode(string $InstanceMode) Set <p>Instance mode, normal: standard type; enhanced: enhanced</p>
 * @method array getSecurityGroupIds() Obtain <p>Security group id list</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>Security group id list</p>
 */
class CreateCloneInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Creating an Instance Region</p>
     */
    public $Zone;

    /**
     * @var string <p>Character type vpcid</p>
     */
    public $VpcId;

    /**
     * @var string <p>Character type subnetid</p>
     */
    public $SubnetId;

    /**
     * @var string <p>Purchase specification</p>
     */
    public $SpecCode;

    /**
     * @var integer <p>Node disk capacity (unit: GB)</p>
     */
    public $Disk;

    /**
     * @var integer <p>Number of storage nodes</p>
     */
    public $StorageNodeNum;

    /**
     * @var string <p>Source instance id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name. The required length is 1-60. It can contain Chinese characters, English case, digits, hyphens (-), and underscores (_).</p>
     */
    public $InstanceName;

    /**
     * @var array <p>Tag key-value pair array</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>Backup and rollback name</p>
     */
    public $BackupName;

    /**
     * @var integer <p>CPU cores of the storage node</p>
     */
    public $StorageNodeCpu;

    /**
     * @var integer <p>Storage node memory size</p>
     */
    public $StorageNodeMem;

    /**
     * @var string <p>Create version</p>
     */
    public $CreateVersion;

    /**
     * @var integer <p>Create port number</p>
     */
    public $Vport;

    /**
     * @var string <p>Recovery time point</p>
     */
    public $RecoverTime;

    /**
     * @var string <p>Instance Architecture Type, separate: decoupled architecture; hybrid: peer-to-peer architecture</p>
     */
    public $InstanceType;

    /**
     * @var string <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
     */
    public $StorageType;

    /**
     * @var array <p>Multi-AZ list, Zones[0] refers to the primary AZ</p>
     */
    public $Zones;

    /**
     * @var integer <p>Number of replicas</p>
     */
    public $FullReplications;

    /**
     * @var string <p>Instance mode, normal: standard type; enhanced: enhanced</p>
     */
    public $InstanceMode;

    /**
     * @var array <p>Security group id list</p>
     */
    public $SecurityGroupIds;

    /**
     * @param string $Zone <p>Creating an Instance Region</p>
     * @param string $VpcId <p>Character type vpcid</p>
     * @param string $SubnetId <p>Character type subnetid</p>
     * @param string $SpecCode <p>Purchase specification</p>
     * @param integer $Disk <p>Node disk capacity (unit: GB)</p>
     * @param integer $StorageNodeNum <p>Number of storage nodes</p>
     * @param string $InstanceId <p>Source instance id</p>
     * @param string $InstanceName <p>Instance name. The required length is 1-60. It can contain Chinese characters, English case, digits, hyphens (-), and underscores (_).</p>
     * @param array $ResourceTags <p>Tag key-value pair array</p>
     * @param string $BackupName <p>Backup and rollback name</p>
     * @param integer $StorageNodeCpu <p>CPU cores of the storage node</p>
     * @param integer $StorageNodeMem <p>Storage node memory size</p>
     * @param string $CreateVersion <p>Create version</p>
     * @param integer $Vport <p>Create port number</p>
     * @param string $RecoverTime <p>Recovery time point</p>
     * @param string $InstanceType <p>Instance Architecture Type, separate: decoupled architecture; hybrid: peer-to-peer architecture</p>
     * @param string $StorageType <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
     * @param array $Zones <p>Multi-AZ list, Zones[0] refers to the primary AZ</p>
     * @param integer $FullReplications <p>Number of replicas</p>
     * @param string $InstanceMode <p>Instance mode, normal: standard type; enhanced: enhanced</p>
     * @param array $SecurityGroupIds <p>Security group id list</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("StorageNodeNum",$param) and $param["StorageNodeNum"] !== null) {
            $this->StorageNodeNum = $param["StorageNodeNum"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("StorageNodeCpu",$param) and $param["StorageNodeCpu"] !== null) {
            $this->StorageNodeCpu = $param["StorageNodeCpu"];
        }

        if (array_key_exists("StorageNodeMem",$param) and $param["StorageNodeMem"] !== null) {
            $this->StorageNodeMem = $param["StorageNodeMem"];
        }

        if (array_key_exists("CreateVersion",$param) and $param["CreateVersion"] !== null) {
            $this->CreateVersion = $param["CreateVersion"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("RecoverTime",$param) and $param["RecoverTime"] !== null) {
            $this->RecoverTime = $param["RecoverTime"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("FullReplications",$param) and $param["FullReplications"] !== null) {
            $this->FullReplications = $param["FullReplications"];
        }

        if (array_key_exists("InstanceMode",$param) and $param["InstanceMode"] !== null) {
            $this->InstanceMode = $param["InstanceMode"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
