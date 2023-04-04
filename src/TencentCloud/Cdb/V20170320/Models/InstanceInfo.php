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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance details
 *
 * @method integer getWanStatus() Obtain Public network access status. Value range: 0 (not enabled), 1 (enabled), 2 (disabled)
 * @method void setWanStatus(integer $WanStatus) Set Public network access status. Value range: 0 (not enabled), 1 (enabled), 2 (disabled)
 * @method string getZone() Obtain AZ information
 * @method void setZone(string $Zone) Set AZ information
 * @method integer getInitFlag() Obtain Initialization flag. Value range: 0 (not initialized), 1 (initialized)
 * @method void setInitFlag(integer $InitFlag) Set Initialization flag. Value range: 0 (not initialized), 1 (initialized)
 * @method RoVipInfo getRoVipInfo() Obtain VIP information of a read-only instance. This field is exclusive to read-only instances where read-only access is enabled separately
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoVipInfo(RoVipInfo $RoVipInfo) Set VIP information of a read-only instance. This field is exclusive to read-only instances where read-only access is enabled separately
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemory() Obtain Memory capacity in MB
 * @method void setMemory(integer $Memory) Set Memory capacity in MB
 * @method integer getStatus() Obtain Instance status. Valid values: `0` (creating), `1` (running), `4` (isolating), `5` (isolated).
 * @method void setStatus(integer $Status) Set Instance status. Valid values: `0` (creating), `1` (running), `4` (isolating), `5` (isolated).
 * @method integer getVpcId() Obtain VPC ID, such as 51102
 * @method void setVpcId(integer $VpcId) Set VPC ID, such as 51102
 * @method SlaveInfo getSlaveInfo() Obtain Information of a secondary server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSlaveInfo(SlaveInfo $SlaveInfo) Set Information of a secondary server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getVolume() Obtain Disk capacity in GB
 * @method void setVolume(integer $Volume) Set Disk capacity in GB
 * @method integer getAutoRenew() Obtain Auto-renewal flag. Value range: 0 (auto-renewal not enabled), 1 (auto-renewal enabled), 2 (auto-renewal disabled)
 * @method void setAutoRenew(integer $AutoRenew) Set Auto-renewal flag. Value range: 0 (auto-renewal not enabled), 1 (auto-renewal enabled), 2 (auto-renewal disabled)
 * @method integer getProtectMode() Obtain Data replication mode. Valid values: 0 (async), 1 (semi-sync), 2 (strong sync)
 * @method void setProtectMode(integer $ProtectMode) Set Data replication mode. Valid values: 0 (async), 1 (semi-sync), 2 (strong sync)
 * @method array getRoGroups() Obtain Details of a read-only group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoGroups(array $RoGroups) Set Details of a read-only group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSubnetId() Obtain Subnet ID, such as 2333
 * @method void setSubnetId(integer $SubnetId) Set Subnet ID, such as 2333
 * @method integer getInstanceType() Obtain Instance type. Value range: 1 (primary), 2 (disaster recovery), 3 (read-only)
 * @method void setInstanceType(integer $InstanceType) Set Instance type. Value range: 1 (primary), 2 (disaster recovery), 3 (read-only)
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getRegion() Obtain Region information
 * @method void setRegion(string $Region) Set Region information
 * @method string getDeadlineTime() Obtain Instance expiration time
 * @method void setDeadlineTime(string $DeadlineTime) Set Instance expiration time
 * @method integer getDeployMode() Obtain AZ deployment mode. Valid values: 0 (single-AZ), 1 (multi-AZ)
 * @method void setDeployMode(integer $DeployMode) Set AZ deployment mode. Valid values: 0 (single-AZ), 1 (multi-AZ)
 * @method integer getTaskStatus() Obtain Instance task status. 0 - no task; 1 - upgrading; 2 - importing data; 3 - activating secondary; 4 - enabling public network access; 5 - batch operation in progress; 6 - rolling back; 7 - disabling public network access; 8 - changing password; 9 - renaming instance; 10 - restarting; 12 - migrating self-built instance; 13 - dropping table; 14 - creating and syncing disaster recovery instance; 15 - pending upgrade and switch; 16 - upgrade and switch in progress; 17 - upgrade and switch completed
 * @method void setTaskStatus(integer $TaskStatus) Set Instance task status. 0 - no task; 1 - upgrading; 2 - importing data; 3 - activating secondary; 4 - enabling public network access; 5 - batch operation in progress; 6 - rolling back; 7 - disabling public network access; 8 - changing password; 9 - renaming instance; 10 - restarting; 12 - migrating self-built instance; 13 - dropping table; 14 - creating and syncing disaster recovery instance; 15 - pending upgrade and switch; 16 - upgrade and switch in progress; 17 - upgrade and switch completed
 * @method MasterInfo getMasterInfo() Obtain Details of a primary instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMasterInfo(MasterInfo $MasterInfo) Set Details of a primary instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDeviceType() Obtain Instance type
 * @method void setDeviceType(string $DeviceType) Set Instance type
 * @method string getEngineVersion() Obtain Kernel version
 * @method void setEngineVersion(string $EngineVersion) Set Kernel version
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method array getDrInfo() Obtain Details of a disaster recovery instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDrInfo(array $DrInfo) Set Details of a disaster recovery instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWanDomain() Obtain Public domain name
 * @method void setWanDomain(string $WanDomain) Set Public domain name
 * @method integer getWanPort() Obtain Public network port number
 * @method void setWanPort(integer $WanPort) Set Public network port number
 * @method integer getPayType() Obtain Billing type
 * @method void setPayType(integer $PayType) Set Billing type
 * @method string getCreateTime() Obtain Instance creation time
 * @method void setCreateTime(string $CreateTime) Set Instance creation time
 * @method string getVip() Obtain Instance IP
 * @method void setVip(string $Vip) Set Instance IP
 * @method integer getVport() Obtain Port number
 * @method void setVport(integer $Vport) Set Port number
 * @method integer getCdbError() Obtain Whether the disk write is locked (It depends on whether the instance data in disk exceeds its quota). Valid values: `0` (unlocked), `1` (locked).
 * @method void setCdbError(integer $CdbError) Set Whether the disk write is locked (It depends on whether the instance data in disk exceeds its quota). Valid values: `0` (unlocked), `1` (locked).
 * @method string getUniqVpcId() Obtain VPC descriptor, such as "vpc-5v8wn9mg"
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC descriptor, such as "vpc-5v8wn9mg"
 * @method string getUniqSubnetId() Obtain Subnet descriptor, such as "subnet-1typ0s7d"
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Subnet descriptor, such as "subnet-1typ0s7d"
 * @method string getPhysicalId() Obtain Physical ID
 * @method void setPhysicalId(string $PhysicalId) Set Physical ID
 * @method integer getCpu() Obtain Number of cores
 * @method void setCpu(integer $Cpu) Set Number of cores
 * @method integer getQps() Obtain Queries per second
 * @method void setQps(integer $Qps) Set Queries per second
 * @method string getZoneName() Obtain AZ name
 * @method void setZoneName(string $ZoneName) Set AZ name
 * @method string getDeviceClass() Obtain Physical machine model
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeviceClass(string $DeviceClass) Set Physical machine model
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDeployGroupId() Obtain Placement group ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeployGroupId(string $DeployGroupId) Set Placement group ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getZoneId() Obtain AZ ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setZoneId(integer $ZoneId) Set AZ ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceNodes() Obtain Number of nodes
 * @method void setInstanceNodes(integer $InstanceNodes) Set Number of nodes
 * @method array getTagList() Obtain List of tags
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTagList(array $TagList) Set List of tags
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getEngineType() Obtain Engine type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineType(string $EngineType) Set Engine type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxDelayTime() Obtain Maximum delay threshold
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxDelayTime(integer $MaxDelayTime) Set Maximum delay threshold
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDiskType() Obtain Instance disk type, which is returned only for the instances of cloud disk edition. Valid values: `CLOUD_SSD` (SSD), `CLOUD_HSSD` (Enhanced SSD).
 * @method void setDiskType(string $DiskType) Set Instance disk type, which is returned only for the instances of cloud disk edition. Valid values: `CLOUD_SSD` (SSD), `CLOUD_HSSD` (Enhanced SSD).
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var integer Public network access status. Value range: 0 (not enabled), 1 (enabled), 2 (disabled)
     */
    public $WanStatus;

    /**
     * @var string AZ information
     */
    public $Zone;

    /**
     * @var integer Initialization flag. Value range: 0 (not initialized), 1 (initialized)
     */
    public $InitFlag;

    /**
     * @var RoVipInfo VIP information of a read-only instance. This field is exclusive to read-only instances where read-only access is enabled separately
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoVipInfo;

    /**
     * @var integer Memory capacity in MB
     */
    public $Memory;

    /**
     * @var integer Instance status. Valid values: `0` (creating), `1` (running), `4` (isolating), `5` (isolated).
     */
    public $Status;

    /**
     * @var integer VPC ID, such as 51102
     */
    public $VpcId;

    /**
     * @var SlaveInfo Information of a secondary server
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SlaveInfo;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Disk capacity in GB
     */
    public $Volume;

    /**
     * @var integer Auto-renewal flag. Value range: 0 (auto-renewal not enabled), 1 (auto-renewal enabled), 2 (auto-renewal disabled)
     */
    public $AutoRenew;

    /**
     * @var integer Data replication mode. Valid values: 0 (async), 1 (semi-sync), 2 (strong sync)
     */
    public $ProtectMode;

    /**
     * @var array Details of a read-only group
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoGroups;

    /**
     * @var integer Subnet ID, such as 2333
     */
    public $SubnetId;

    /**
     * @var integer Instance type. Value range: 1 (primary), 2 (disaster recovery), 3 (read-only)
     */
    public $InstanceType;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Region information
     */
    public $Region;

    /**
     * @var string Instance expiration time
     */
    public $DeadlineTime;

    /**
     * @var integer AZ deployment mode. Valid values: 0 (single-AZ), 1 (multi-AZ)
     */
    public $DeployMode;

    /**
     * @var integer Instance task status. 0 - no task; 1 - upgrading; 2 - importing data; 3 - activating secondary; 4 - enabling public network access; 5 - batch operation in progress; 6 - rolling back; 7 - disabling public network access; 8 - changing password; 9 - renaming instance; 10 - restarting; 12 - migrating self-built instance; 13 - dropping table; 14 - creating and syncing disaster recovery instance; 15 - pending upgrade and switch; 16 - upgrade and switch in progress; 17 - upgrade and switch completed
     */
    public $TaskStatus;

    /**
     * @var MasterInfo Details of a primary instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MasterInfo;

    /**
     * @var string Instance type
     */
    public $DeviceType;

    /**
     * @var string Kernel version
     */
    public $EngineVersion;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var array Details of a disaster recovery instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DrInfo;

    /**
     * @var string Public domain name
     */
    public $WanDomain;

    /**
     * @var integer Public network port number
     */
    public $WanPort;

    /**
     * @var integer Billing type
     */
    public $PayType;

    /**
     * @var string Instance creation time
     */
    public $CreateTime;

    /**
     * @var string Instance IP
     */
    public $Vip;

    /**
     * @var integer Port number
     */
    public $Vport;

    /**
     * @var integer Whether the disk write is locked (It depends on whether the instance data in disk exceeds its quota). Valid values: `0` (unlocked), `1` (locked).
     */
    public $CdbError;

    /**
     * @var string VPC descriptor, such as "vpc-5v8wn9mg"
     */
    public $UniqVpcId;

    /**
     * @var string Subnet descriptor, such as "subnet-1typ0s7d"
     */
    public $UniqSubnetId;

    /**
     * @var string Physical ID
     */
    public $PhysicalId;

    /**
     * @var integer Number of cores
     */
    public $Cpu;

    /**
     * @var integer Queries per second
     */
    public $Qps;

    /**
     * @var string AZ name
     */
    public $ZoneName;

    /**
     * @var string Physical machine model
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeviceClass;

    /**
     * @var string Placement group ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeployGroupId;

    /**
     * @var integer AZ ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @var integer Number of nodes
     */
    public $InstanceNodes;

    /**
     * @var array List of tags
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TagList;

    /**
     * @var string Engine type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineType;

    /**
     * @var integer Maximum delay threshold
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxDelayTime;

    /**
     * @var string Instance disk type, which is returned only for the instances of cloud disk edition. Valid values: `CLOUD_SSD` (SSD), `CLOUD_HSSD` (Enhanced SSD).
     */
    public $DiskType;

    /**
     * @param integer $WanStatus Public network access status. Value range: 0 (not enabled), 1 (enabled), 2 (disabled)
     * @param string $Zone AZ information
     * @param integer $InitFlag Initialization flag. Value range: 0 (not initialized), 1 (initialized)
     * @param RoVipInfo $RoVipInfo VIP information of a read-only instance. This field is exclusive to read-only instances where read-only access is enabled separately
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Memory Memory capacity in MB
     * @param integer $Status Instance status. Valid values: `0` (creating), `1` (running), `4` (isolating), `5` (isolated).
     * @param integer $VpcId VPC ID, such as 51102
     * @param SlaveInfo $SlaveInfo Information of a secondary server
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID
     * @param integer $Volume Disk capacity in GB
     * @param integer $AutoRenew Auto-renewal flag. Value range: 0 (auto-renewal not enabled), 1 (auto-renewal enabled), 2 (auto-renewal disabled)
     * @param integer $ProtectMode Data replication mode. Valid values: 0 (async), 1 (semi-sync), 2 (strong sync)
     * @param array $RoGroups Details of a read-only group
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SubnetId Subnet ID, such as 2333
     * @param integer $InstanceType Instance type. Value range: 1 (primary), 2 (disaster recovery), 3 (read-only)
     * @param integer $ProjectId Project ID
     * @param string $Region Region information
     * @param string $DeadlineTime Instance expiration time
     * @param integer $DeployMode AZ deployment mode. Valid values: 0 (single-AZ), 1 (multi-AZ)
     * @param integer $TaskStatus Instance task status. 0 - no task; 1 - upgrading; 2 - importing data; 3 - activating secondary; 4 - enabling public network access; 5 - batch operation in progress; 6 - rolling back; 7 - disabling public network access; 8 - changing password; 9 - renaming instance; 10 - restarting; 12 - migrating self-built instance; 13 - dropping table; 14 - creating and syncing disaster recovery instance; 15 - pending upgrade and switch; 16 - upgrade and switch in progress; 17 - upgrade and switch completed
     * @param MasterInfo $MasterInfo Details of a primary instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DeviceType Instance type
     * @param string $EngineVersion Kernel version
     * @param string $InstanceName Instance name
     * @param array $DrInfo Details of a disaster recovery instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WanDomain Public domain name
     * @param integer $WanPort Public network port number
     * @param integer $PayType Billing type
     * @param string $CreateTime Instance creation time
     * @param string $Vip Instance IP
     * @param integer $Vport Port number
     * @param integer $CdbError Whether the disk write is locked (It depends on whether the instance data in disk exceeds its quota). Valid values: `0` (unlocked), `1` (locked).
     * @param string $UniqVpcId VPC descriptor, such as "vpc-5v8wn9mg"
     * @param string $UniqSubnetId Subnet descriptor, such as "subnet-1typ0s7d"
     * @param string $PhysicalId Physical ID
     * @param integer $Cpu Number of cores
     * @param integer $Qps Queries per second
     * @param string $ZoneName AZ name
     * @param string $DeviceClass Physical machine model
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DeployGroupId Placement group ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ZoneId AZ ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceNodes Number of nodes
     * @param array $TagList List of tags
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $EngineType Engine type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxDelayTime Maximum delay threshold
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DiskType Instance disk type, which is returned only for the instances of cloud disk edition. Valid values: `CLOUD_SSD` (SSD), `CLOUD_HSSD` (Enhanced SSD).
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
        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InitFlag",$param) and $param["InitFlag"] !== null) {
            $this->InitFlag = $param["InitFlag"];
        }

        if (array_key_exists("RoVipInfo",$param) and $param["RoVipInfo"] !== null) {
            $this->RoVipInfo = new RoVipInfo();
            $this->RoVipInfo->deserialize($param["RoVipInfo"]);
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SlaveInfo",$param) and $param["SlaveInfo"] !== null) {
            $this->SlaveInfo = new SlaveInfo();
            $this->SlaveInfo->deserialize($param["SlaveInfo"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("RoGroups",$param) and $param["RoGroups"] !== null) {
            $this->RoGroups = [];
            foreach ($param["RoGroups"] as $key => $value){
                $obj = new RoGroup();
                $obj->deserialize($value);
                array_push($this->RoGroups, $obj);
            }
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("MasterInfo",$param) and $param["MasterInfo"] !== null) {
            $this->MasterInfo = new MasterInfo();
            $this->MasterInfo->deserialize($param["MasterInfo"]);
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("DrInfo",$param) and $param["DrInfo"] !== null) {
            $this->DrInfo = [];
            foreach ($param["DrInfo"] as $key => $value){
                $obj = new DrInfo();
                $obj->deserialize($value);
                array_push($this->DrInfo, $obj);
            }
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("CdbError",$param) and $param["CdbError"] !== null) {
            $this->CdbError = $param["CdbError"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("PhysicalId",$param) and $param["PhysicalId"] !== null) {
            $this->PhysicalId = $param["PhysicalId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("DeviceClass",$param) and $param["DeviceClass"] !== null) {
            $this->DeviceClass = $param["DeviceClass"];
        }

        if (array_key_exists("DeployGroupId",$param) and $param["DeployGroupId"] !== null) {
            $this->DeployGroupId = $param["DeployGroupId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("InstanceNodes",$param) and $param["InstanceNodes"] !== null) {
            $this->InstanceNodes = $param["InstanceNodes"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfoItem();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("MaxDelayTime",$param) and $param["MaxDelayTime"] !== null) {
            $this->MaxDelayTime = $param["MaxDelayTime"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }
    }
}
