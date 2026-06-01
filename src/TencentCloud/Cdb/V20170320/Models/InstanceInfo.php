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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance details
 *
 * @method integer getWanStatus() Obtain <p>Public network status. Possible returned values: 0 - External network not enabled; 1 - Public network enabled; 2 - Public network disabled</p>
 * @method void setWanStatus(integer $WanStatus) Set <p>Public network status. Possible returned values: 0 - External network not enabled; 1 - Public network enabled; 2 - Public network disabled</p>
 * @method string getZone() Obtain <p>AZ information</p>
 * @method void setZone(string $Zone) Set <p>AZ information</p>
 * @method integer getInitFlag() Obtain <p>Initialization flag. Possible returned values: 0 - uninitialized; 1 - initialized.</p>
 * @method void setInitFlag(integer $InitFlag) Set <p>Initialization flag. Possible returned values: 0 - uninitialized; 1 - initialized.</p>
 * @method RoVipInfo getRoVipInfo() Obtain <p>Read-only vip information. This field is available only for read-only instances with separate instance access enabled.</p>
 * @method void setRoVipInfo(RoVipInfo $RoVipInfo) Set <p>Read-only vip information. This field is available only for read-only instances with separate instance access enabled.</p>
 * @method integer getMemory() Obtain <p>Memory capacity, in MB.</p>
 * @method void setMemory(integer $Memory) Set <p>Memory capacity, in MB.</p>
 * @method integer getStatus() Obtain <p>Instance status. Valid values: 0: creating; 1: running; 4: isolation operation in progress; 5: isolated.</p>
 * @method void setStatus(integer $Status) Set <p>Instance status. Valid values: 0: creating; 1: running; 4: isolation operation in progress; 5: isolated.</p>
 * @method integer getVpcId() Obtain <p>VPC ID, for example: 51102</p>
 * @method void setVpcId(integer $VpcId) Set <p>VPC ID, for example: 51102</p>
 * @method SlaveInfo getSlaveInfo() Obtain <p>Secondary server information</p>
 * @method void setSlaveInfo(SlaveInfo $SlaveInfo) Set <p>Secondary server information</p>
 * @method string getInstanceId() Obtain <p>Instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID</p>
 * @method integer getVolume() Obtain <p>Disk capacity, in GB.</p>
 * @method void setVolume(integer $Volume) Set <p>Disk capacity, in GB.</p>
 * @method integer getAutoRenew() Obtain <p>Auto-renewal flag. Possible returned values: 0 - auto-renewal is not enabled; 1 - auto-renewal is enabled; 2 - automatic renewal is disabled.</p>
 * @method void setAutoRenew(integer $AutoRenew) Set <p>Auto-renewal flag. Possible returned values: 0 - auto-renewal is not enabled; 1 - auto-renewal is enabled; 2 - automatic renewal is disabled.</p>
 * @method integer getProtectMode() Obtain <p>Data replication mode. 0 - async replication; 1 - semi-sync replication; 2 - strong sync replication</p>
 * @method void setProtectMode(integer $ProtectMode) Set <p>Data replication mode. 0 - async replication; 1 - semi-sync replication; 2 - strong sync replication</p>
 * @method array getRoGroups() Obtain <p>Read-only group detailed information</p>
 * @method void setRoGroups(array $RoGroups) Set <p>Read-only group detailed information</p>
 * @method integer getSubnetId() Obtain <p>Subnet ID, for example: 2333</p>
 * @method void setSubnetId(integer $SubnetId) Set <p>Subnet ID, for example: 2333</p>
 * @method integer getInstanceType() Obtain <p>Instance type. Possible returned values: 1 - Primary instance; 2 - Disaster recovery instance; 3 - Read-only instance.</p>
 * @method void setInstanceType(integer $InstanceType) Set <p>Instance type. Possible returned values: 1 - Primary instance; 2 - Disaster recovery instance; 3 - Read-only instance.</p>
 * @method integer getProjectId() Obtain <p>Project ID</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID</p>
 * @method string getRegion() Obtain <p>Regional information</p>
 * @method void setRegion(string $Region) Set <p>Regional information</p>
 * @method string getDeadlineTime() Obtain <p>Instance expiration time</p>
 * @method void setDeadlineTime(string $DeadlineTime) Set <p>Instance expiration time</p>
 * @method integer getDeployMode() Obtain <p>Availability Zone Deployment method. Valid values: 0 - single availability zone; 1 - multi-availability zone.</p>
 * @method void setDeployMode(integer $DeployMode) Set <p>Availability Zone Deployment method. Valid values: 0 - single availability zone; 1 - multi-availability zone.</p>
 * @method integer getTaskStatus() Obtain <p>Instance task status. 0 - No tasks, 1 - Upgrading, 2 - Data import, 3 - Opening Slave, 4 - Public network access enabling, 5 - Batch operation executing, 6 - Rolling back, 7 - Public network access disabling, 8 - Password modification, 9 - Renaming instance, 10 - Restarting, 12 - Self-built migration, 13 - Database deletion, 14 - Disaster recovery instance creation sync, 15 - Upgrade pending switch, 16 - Upgrade and switch, 17 - Upgrade and switch completed</p>
 * @method void setTaskStatus(integer $TaskStatus) Set <p>Instance task status. 0 - No tasks, 1 - Upgrading, 2 - Data import, 3 - Opening Slave, 4 - Public network access enabling, 5 - Batch operation executing, 6 - Rolling back, 7 - Public network access disabling, 8 - Password modification, 9 - Renaming instance, 10 - Restarting, 12 - Self-built migration, 13 - Database deletion, 14 - Disaster recovery instance creation sync, 15 - Upgrade pending switch, 16 - Upgrade and switch, 17 - Upgrade and switch completed</p>
 * @method MasterInfo getMasterInfo() Obtain <p>Detailed information about the primary instance.</p>
 * @method void setMasterInfo(MasterInfo $MasterInfo) Set <p>Detailed information about the primary instance.</p>
 * @method string getDeviceType() Obtain <p>Instance type</p>
 * @method void setDeviceType(string $DeviceType) Set <p>Instance type</p>
 * @method string getEngineVersion() Obtain <p>Kernel version</p>
 * @method void setEngineVersion(string $EngineVersion) Set <p>Kernel version</p>
 * @method string getInstanceName() Obtain <p>Instance name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name</p>
 * @method array getDrInfo() Obtain <p>Disaster recovery instance details</p>
 * @method void setDrInfo(array $DrInfo) Set <p>Disaster recovery instance details</p>
 * @method string getWanDomain() Obtain <p>public network domain name</p>
 * @method void setWanDomain(string $WanDomain) Set <p>public network domain name</p>
 * @method integer getWanPort() Obtain <p>Public network port number</p>
 * @method void setWanPort(integer $WanPort) Set <p>Public network port number</p>
 * @method integer getPayType() Obtain Billing type
 * @method void setPayType(integer $PayType) Set Billing type
 * @method string getCreateTime() Obtain <p>Instance creation time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Instance creation time</p>
 * @method string getVip() Obtain <p>Instance IP</p>
 * @method void setVip(string $Vip) Set <p>Instance IP</p>
 * @method integer getVport() Obtain <p>Port number</p>
 * @method void setVport(integer $Vport) Set <p>Port number</p>
 * @method integer getCdbError() Obtain <p>Whether disk write is locked (data write volume of the instance exceeds disk quota). 0 - Unlocked 1 - Locked</p>
 * @method void setCdbError(integer $CdbError) Set <p>Whether disk write is locked (data write volume of the instance exceeds disk quota). 0 - Unlocked 1 - Locked</p>
 * @method string getUniqVpcId() Obtain <p>Private network descriptor, for example: "vpc-5v8wn9mg"</p>
 * @method void setUniqVpcId(string $UniqVpcId) Set <p>Private network descriptor, for example: "vpc-5v8wn9mg"</p>
 * @method string getUniqSubnetId() Obtain <p>Subnet descriptor, such as "subnet-1typ0s7d"</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) Set <p>Subnet descriptor, such as "subnet-1typ0s7d"</p>
 * @method string getPhysicalId() Obtain <p>Physical ID</p>
 * @method void setPhysicalId(string $PhysicalId) Set <p>Physical ID</p>
 * @method integer getCpu() Obtain <p>Core count</p>
 * @method void setCpu(integer $Cpu) Set <p>Core count</p>
 * @method integer getQps() Obtain <p>Queries per second.</p>
 * @method void setQps(integer $Qps) Set <p>Queries per second.</p>
 * @method string getZoneName() Obtain <p>Chinese Name of Availability Zone</p>
 * @method void setZoneName(string $ZoneName) Set <p>Chinese Name of Availability Zone</p>
 * @method string getDeviceClass() Obtain <p>Physical machine model</p>
 * @method void setDeviceClass(string $DeviceClass) Set <p>Physical machine model</p>
 * @method string getDeployGroupId() Obtain <p>Placement group ID</p>
 * @method void setDeployGroupId(string $DeployGroupId) Set <p>Placement group ID</p>
 * @method integer getZoneId() Obtain <p>Availability zone ID</p>
 * @method void setZoneId(integer $ZoneId) Set <p>Availability zone ID</p>
 * @method integer getInstanceNodes() Obtain <p>Number of nodes</p>
 * @method void setInstanceNodes(integer $InstanceNodes) Set <p>Number of nodes</p>
 * @method array getTagList() Obtain <p>Tag list</p>
 * @method void setTagList(array $TagList) Set <p>Tag list</p>
 * @method string getEngineType() Obtain <p>Engine type</p>
 * @method void setEngineType(string $EngineType) Set <p>Engine type</p>
 * @method integer getMaxDelayTime() Obtain <p>Maximum delay threshold</p>
 * @method void setMaxDelayTime(integer $MaxDelayTime) Set <p>Maximum delay threshold</p>
 * @method string getDiskType() Obtain <p>Instance disk type. Only CLOUD disk edition and single-node (CLOUD disk) instances will return a valid value.<br>Description:</p><ol><li>If "DiskType": "CLOUD_HSSD" is returned, it indicates that the instance disk type is enhanced SSD CLOUD disk.</li><li>If "DiskType": "CLOUD_SSD" is returned, it indicates that the instance disk type is SSD CLOUD Block Storage.</li><li>If "DiskType": "" is returned and the DeviceType parameter value is UNIVERSAL or EXCLUSIVE, it means that the instance uses local SSD.</li></ol>
 * @method void setDiskType(string $DiskType) Set <p>Instance disk type. Only CLOUD disk edition and single-node (CLOUD disk) instances will return a valid value.<br>Description:</p><ol><li>If "DiskType": "CLOUD_HSSD" is returned, it indicates that the instance disk type is enhanced SSD CLOUD disk.</li><li>If "DiskType": "CLOUD_SSD" is returned, it indicates that the instance disk type is SSD CLOUD Block Storage.</li><li>If "DiskType": "" is returned and the DeviceType parameter value is UNIVERSAL or EXCLUSIVE, it means that the instance uses local SSD.</li></ol>
 * @method integer getExpandCpu() Obtain <p>Current number of CPU cores for scale-out.</p>
 * @method void setExpandCpu(integer $ExpandCpu) Set <p>Current number of CPU cores for scale-out.</p>
 * @method array getClusterInfo() Obtain <p>Cloud Disk Edition instance node information</p>
 * @method void setClusterInfo(array $ClusterInfo) Set <p>Cloud Disk Edition instance node information</p>
 * @method array getAnalysisNodeInfos() Obtain <p>Analysis engine node list</p>
 * @method void setAnalysisNodeInfos(array $AnalysisNodeInfos) Set <p>Analysis engine node list</p>
 * @method integer getDeviceBandwidth() Obtain <p>Device bandwidth, in G. This parameter is valid only when DeviceClass is not empty. For example, 25 means the current device bandwidth is 25G; 10 means the current device bandwidth is 10G.</p>
 * @method void setDeviceBandwidth(integer $DeviceBandwidth) Set <p>Device bandwidth, in G. This parameter is valid only when DeviceClass is not empty. For example, 25 means the current device bandwidth is 25G; 10 means the current device bandwidth is 10G.</p>
 * @method string getDestroyProtect() Obtain <p>Instance termination protection status. on indicates enabled; otherwise, the protection is disabled.</p>
 * @method void setDestroyProtect(string $DestroyProtect) Set <p>Instance termination protection status. on indicates enabled; otherwise, the protection is disabled.</p>
 * @method string getCpuModel() Obtain <p>TDSQL engine parameters</p>
 * @method void setCpuModel(string $CpuModel) Set <p>TDSQL engine parameters</p>
 * @method UpgradeAnalysisInstanceVersionInfo getAnalysisUpgradeVersionInfo() Obtain <p>Analysis engine instance version upgrade information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAnalysisUpgradeVersionInfo(UpgradeAnalysisInstanceVersionInfo $AnalysisUpgradeVersionInfo) Set <p>Analysis engine instance version upgrade information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var integer <p>Public network status. Possible returned values: 0 - External network not enabled; 1 - Public network enabled; 2 - Public network disabled</p>
     */
    public $WanStatus;

    /**
     * @var string <p>AZ information</p>
     */
    public $Zone;

    /**
     * @var integer <p>Initialization flag. Possible returned values: 0 - uninitialized; 1 - initialized.</p>
     */
    public $InitFlag;

    /**
     * @var RoVipInfo <p>Read-only vip information. This field is available only for read-only instances with separate instance access enabled.</p>
     */
    public $RoVipInfo;

    /**
     * @var integer <p>Memory capacity, in MB.</p>
     */
    public $Memory;

    /**
     * @var integer <p>Instance status. Valid values: 0: creating; 1: running; 4: isolation operation in progress; 5: isolated.</p>
     */
    public $Status;

    /**
     * @var integer <p>VPC ID, for example: 51102</p>
     */
    public $VpcId;

    /**
     * @var SlaveInfo <p>Secondary server information</p>
     */
    public $SlaveInfo;

    /**
     * @var string <p>Instance ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Disk capacity, in GB.</p>
     */
    public $Volume;

    /**
     * @var integer <p>Auto-renewal flag. Possible returned values: 0 - auto-renewal is not enabled; 1 - auto-renewal is enabled; 2 - automatic renewal is disabled.</p>
     */
    public $AutoRenew;

    /**
     * @var integer <p>Data replication mode. 0 - async replication; 1 - semi-sync replication; 2 - strong sync replication</p>
     */
    public $ProtectMode;

    /**
     * @var array <p>Read-only group detailed information</p>
     */
    public $RoGroups;

    /**
     * @var integer <p>Subnet ID, for example: 2333</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>Instance type. Possible returned values: 1 - Primary instance; 2 - Disaster recovery instance; 3 - Read-only instance.</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>Project ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Regional information</p>
     */
    public $Region;

    /**
     * @var string <p>Instance expiration time</p>
     */
    public $DeadlineTime;

    /**
     * @var integer <p>Availability Zone Deployment method. Valid values: 0 - single availability zone; 1 - multi-availability zone.</p>
     */
    public $DeployMode;

    /**
     * @var integer <p>Instance task status. 0 - No tasks, 1 - Upgrading, 2 - Data import, 3 - Opening Slave, 4 - Public network access enabling, 5 - Batch operation executing, 6 - Rolling back, 7 - Public network access disabling, 8 - Password modification, 9 - Renaming instance, 10 - Restarting, 12 - Self-built migration, 13 - Database deletion, 14 - Disaster recovery instance creation sync, 15 - Upgrade pending switch, 16 - Upgrade and switch, 17 - Upgrade and switch completed</p>
     */
    public $TaskStatus;

    /**
     * @var MasterInfo <p>Detailed information about the primary instance.</p>
     */
    public $MasterInfo;

    /**
     * @var string <p>Instance type</p>
     */
    public $DeviceType;

    /**
     * @var string <p>Kernel version</p>
     */
    public $EngineVersion;

    /**
     * @var string <p>Instance name</p>
     */
    public $InstanceName;

    /**
     * @var array <p>Disaster recovery instance details</p>
     */
    public $DrInfo;

    /**
     * @var string <p>public network domain name</p>
     */
    public $WanDomain;

    /**
     * @var integer <p>Public network port number</p>
     */
    public $WanPort;

    /**
     * @var integer Billing type
     */
    public $PayType;

    /**
     * @var string <p>Instance creation time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Instance IP</p>
     */
    public $Vip;

    /**
     * @var integer <p>Port number</p>
     */
    public $Vport;

    /**
     * @var integer <p>Whether disk write is locked (data write volume of the instance exceeds disk quota). 0 - Unlocked 1 - Locked</p>
     */
    public $CdbError;

    /**
     * @var string <p>Private network descriptor, for example: "vpc-5v8wn9mg"</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>Subnet descriptor, such as "subnet-1typ0s7d"</p>
     */
    public $UniqSubnetId;

    /**
     * @var string <p>Physical ID</p>
     */
    public $PhysicalId;

    /**
     * @var integer <p>Core count</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Queries per second.</p>
     */
    public $Qps;

    /**
     * @var string <p>Chinese Name of Availability Zone</p>
     */
    public $ZoneName;

    /**
     * @var string <p>Physical machine model</p>
     */
    public $DeviceClass;

    /**
     * @var string <p>Placement group ID</p>
     */
    public $DeployGroupId;

    /**
     * @var integer <p>Availability zone ID</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>Number of nodes</p>
     */
    public $InstanceNodes;

    /**
     * @var array <p>Tag list</p>
     */
    public $TagList;

    /**
     * @var string <p>Engine type</p>
     */
    public $EngineType;

    /**
     * @var integer <p>Maximum delay threshold</p>
     */
    public $MaxDelayTime;

    /**
     * @var string <p>Instance disk type. Only CLOUD disk edition and single-node (CLOUD disk) instances will return a valid value.<br>Description:</p><ol><li>If "DiskType": "CLOUD_HSSD" is returned, it indicates that the instance disk type is enhanced SSD CLOUD disk.</li><li>If "DiskType": "CLOUD_SSD" is returned, it indicates that the instance disk type is SSD CLOUD Block Storage.</li><li>If "DiskType": "" is returned and the DeviceType parameter value is UNIVERSAL or EXCLUSIVE, it means that the instance uses local SSD.</li></ol>
     */
    public $DiskType;

    /**
     * @var integer <p>Current number of CPU cores for scale-out.</p>
     */
    public $ExpandCpu;

    /**
     * @var array <p>Cloud Disk Edition instance node information</p>
     */
    public $ClusterInfo;

    /**
     * @var array <p>Analysis engine node list</p>
     */
    public $AnalysisNodeInfos;

    /**
     * @var integer <p>Device bandwidth, in G. This parameter is valid only when DeviceClass is not empty. For example, 25 means the current device bandwidth is 25G; 10 means the current device bandwidth is 10G.</p>
     */
    public $DeviceBandwidth;

    /**
     * @var string <p>Instance termination protection status. on indicates enabled; otherwise, the protection is disabled.</p>
     */
    public $DestroyProtect;

    /**
     * @var string <p>TDSQL engine parameters</p>
     */
    public $CpuModel;

    /**
     * @var UpgradeAnalysisInstanceVersionInfo <p>Analysis engine instance version upgrade information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AnalysisUpgradeVersionInfo;

    /**
     * @param integer $WanStatus <p>Public network status. Possible returned values: 0 - External network not enabled; 1 - Public network enabled; 2 - Public network disabled</p>
     * @param string $Zone <p>AZ information</p>
     * @param integer $InitFlag <p>Initialization flag. Possible returned values: 0 - uninitialized; 1 - initialized.</p>
     * @param RoVipInfo $RoVipInfo <p>Read-only vip information. This field is available only for read-only instances with separate instance access enabled.</p>
     * @param integer $Memory <p>Memory capacity, in MB.</p>
     * @param integer $Status <p>Instance status. Valid values: 0: creating; 1: running; 4: isolation operation in progress; 5: isolated.</p>
     * @param integer $VpcId <p>VPC ID, for example: 51102</p>
     * @param SlaveInfo $SlaveInfo <p>Secondary server information</p>
     * @param string $InstanceId <p>Instance ID</p>
     * @param integer $Volume <p>Disk capacity, in GB.</p>
     * @param integer $AutoRenew <p>Auto-renewal flag. Possible returned values: 0 - auto-renewal is not enabled; 1 - auto-renewal is enabled; 2 - automatic renewal is disabled.</p>
     * @param integer $ProtectMode <p>Data replication mode. 0 - async replication; 1 - semi-sync replication; 2 - strong sync replication</p>
     * @param array $RoGroups <p>Read-only group detailed information</p>
     * @param integer $SubnetId <p>Subnet ID, for example: 2333</p>
     * @param integer $InstanceType <p>Instance type. Possible returned values: 1 - Primary instance; 2 - Disaster recovery instance; 3 - Read-only instance.</p>
     * @param integer $ProjectId <p>Project ID</p>
     * @param string $Region <p>Regional information</p>
     * @param string $DeadlineTime <p>Instance expiration time</p>
     * @param integer $DeployMode <p>Availability Zone Deployment method. Valid values: 0 - single availability zone; 1 - multi-availability zone.</p>
     * @param integer $TaskStatus <p>Instance task status. 0 - No tasks, 1 - Upgrading, 2 - Data import, 3 - Opening Slave, 4 - Public network access enabling, 5 - Batch operation executing, 6 - Rolling back, 7 - Public network access disabling, 8 - Password modification, 9 - Renaming instance, 10 - Restarting, 12 - Self-built migration, 13 - Database deletion, 14 - Disaster recovery instance creation sync, 15 - Upgrade pending switch, 16 - Upgrade and switch, 17 - Upgrade and switch completed</p>
     * @param MasterInfo $MasterInfo <p>Detailed information about the primary instance.</p>
     * @param string $DeviceType <p>Instance type</p>
     * @param string $EngineVersion <p>Kernel version</p>
     * @param string $InstanceName <p>Instance name</p>
     * @param array $DrInfo <p>Disaster recovery instance details</p>
     * @param string $WanDomain <p>public network domain name</p>
     * @param integer $WanPort <p>Public network port number</p>
     * @param integer $PayType Billing type
     * @param string $CreateTime <p>Instance creation time</p>
     * @param string $Vip <p>Instance IP</p>
     * @param integer $Vport <p>Port number</p>
     * @param integer $CdbError <p>Whether disk write is locked (data write volume of the instance exceeds disk quota). 0 - Unlocked 1 - Locked</p>
     * @param string $UniqVpcId <p>Private network descriptor, for example: "vpc-5v8wn9mg"</p>
     * @param string $UniqSubnetId <p>Subnet descriptor, such as "subnet-1typ0s7d"</p>
     * @param string $PhysicalId <p>Physical ID</p>
     * @param integer $Cpu <p>Core count</p>
     * @param integer $Qps <p>Queries per second.</p>
     * @param string $ZoneName <p>Chinese Name of Availability Zone</p>
     * @param string $DeviceClass <p>Physical machine model</p>
     * @param string $DeployGroupId <p>Placement group ID</p>
     * @param integer $ZoneId <p>Availability zone ID</p>
     * @param integer $InstanceNodes <p>Number of nodes</p>
     * @param array $TagList <p>Tag list</p>
     * @param string $EngineType <p>Engine type</p>
     * @param integer $MaxDelayTime <p>Maximum delay threshold</p>
     * @param string $DiskType <p>Instance disk type. Only CLOUD disk edition and single-node (CLOUD disk) instances will return a valid value.<br>Description:</p><ol><li>If "DiskType": "CLOUD_HSSD" is returned, it indicates that the instance disk type is enhanced SSD CLOUD disk.</li><li>If "DiskType": "CLOUD_SSD" is returned, it indicates that the instance disk type is SSD CLOUD Block Storage.</li><li>If "DiskType": "" is returned and the DeviceType parameter value is UNIVERSAL or EXCLUSIVE, it means that the instance uses local SSD.</li></ol>
     * @param integer $ExpandCpu <p>Current number of CPU cores for scale-out.</p>
     * @param array $ClusterInfo <p>Cloud Disk Edition instance node information</p>
     * @param array $AnalysisNodeInfos <p>Analysis engine node list</p>
     * @param integer $DeviceBandwidth <p>Device bandwidth, in G. This parameter is valid only when DeviceClass is not empty. For example, 25 means the current device bandwidth is 25G; 10 means the current device bandwidth is 10G.</p>
     * @param string $DestroyProtect <p>Instance termination protection status. on indicates enabled; otherwise, the protection is disabled.</p>
     * @param string $CpuModel <p>TDSQL engine parameters</p>
     * @param UpgradeAnalysisInstanceVersionInfo $AnalysisUpgradeVersionInfo <p>Analysis engine instance version upgrade information</p>
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

        if (array_key_exists("ExpandCpu",$param) and $param["ExpandCpu"] !== null) {
            $this->ExpandCpu = $param["ExpandCpu"];
        }

        if (array_key_exists("ClusterInfo",$param) and $param["ClusterInfo"] !== null) {
            $this->ClusterInfo = [];
            foreach ($param["ClusterInfo"] as $key => $value){
                $obj = new ClusterInfo();
                $obj->deserialize($value);
                array_push($this->ClusterInfo, $obj);
            }
        }

        if (array_key_exists("AnalysisNodeInfos",$param) and $param["AnalysisNodeInfos"] !== null) {
            $this->AnalysisNodeInfos = [];
            foreach ($param["AnalysisNodeInfos"] as $key => $value){
                $obj = new AnalysisNodeInfo();
                $obj->deserialize($value);
                array_push($this->AnalysisNodeInfos, $obj);
            }
        }

        if (array_key_exists("DeviceBandwidth",$param) and $param["DeviceBandwidth"] !== null) {
            $this->DeviceBandwidth = $param["DeviceBandwidth"];
        }

        if (array_key_exists("DestroyProtect",$param) and $param["DestroyProtect"] !== null) {
            $this->DestroyProtect = $param["DestroyProtect"];
        }

        if (array_key_exists("CpuModel",$param) and $param["CpuModel"] !== null) {
            $this->CpuModel = $param["CpuModel"];
        }

        if (array_key_exists("AnalysisUpgradeVersionInfo",$param) and $param["AnalysisUpgradeVersionInfo"] !== null) {
            $this->AnalysisUpgradeVersionInfo = new UpgradeAnalysisInstanceVersionInfo();
            $this->AnalysisUpgradeVersionInfo->deserialize($param["AnalysisUpgradeVersionInfo"]);
        }
    }
}
