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
 * Instance information type
 *
 * @method integer getComputeNodeNum() Obtain <p>Number of compute nodes</p>
 * @method void setComputeNodeNum(integer $ComputeNodeNum) Set <p>Number of compute nodes</p>
 * @method string getZone() Obtain <p>Region</p>
 * @method void setZone(string $Zone) Set <p>Region</p>
 * @method string getCreateVersion() Obtain <p>Creating an Instance Version</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateVersion(string $CreateVersion) Set <p>Creating an Instance Version</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getInitParams() Obtain <p>Initialize instance parameter</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInitParams(array $InitParams) Set <p>Initialize instance parameter</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain <p>Instance status: creating, created, initializing, running, modifying, isolating, isolated, destroying, destroyed</p>
 * @method void setStatus(string $Status) Set <p>Instance status: creating, created, initializing, running, modifying, isolating, isolated, destroying, destroyed</p>
 * @method string getInstanceId() Obtain <p>Instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p>
 * @method integer getStorageNodeNum() Obtain <p>Number of storage nodes</p>
 * @method void setStorageNodeNum(integer $StorageNodeNum) Set <p>Number of storage nodes</p>
 * @method array getResourceTags() Obtain <p>Instance tag information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceTags(array $ResourceTags) Set <p>Instance tag information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain <p>Instance name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCpu() Obtain <p>cpu cores of the computing node</p>
 * @method void setCpu(integer $Cpu) Set <p>cpu cores of the computing node</p>
 * @method string getVpcId() Obtain <p>Character type vpcid</p>
 * @method void setVpcId(string $VpcId) Set <p>Character type vpcid</p>
 * @method integer getMem() Obtain <p>Computing node mem, in GB</p>
 * @method void setMem(integer $Mem) Set <p>Computing node mem, in GB</p>
 * @method string getVip() Obtain <p>Subnet IP</p>
 * @method void setVip(string $Vip) Set <p>Subnet IP</p>
 * @method string getSubnetId() Obtain <p>Character type subnetid</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Character type subnetid</p>
 * @method integer getVport() Obtain <p>Subnet port</p>
 * @method void setVport(integer $Vport) Set <p>Subnet port</p>
 * @method integer getDisk() Obtain <p>Node disk capacity (unit: GB)</p>
 * @method void setDisk(integer $Disk) Set <p>Node disk capacity (unit: GB)</p>
 * @method string getCreateTime() Obtain <p>Instance Creation Time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Instance Creation Time</p>
 * @method string getRegion() Obtain <p>Region of the instance</p>
 * @method void setRegion(string $Region) Set <p>Region of the instance</p>
 * @method string getStatusDesc() Obtain <p>Status description in Chinese of the instance</p>
 * @method void setStatusDesc(string $StatusDesc) Set <p>Status description in Chinese of the instance</p>
 * @method integer getMCCpu() Obtain <p>CPU cores of the control node</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMCCpu(integer $MCCpu) Set <p>CPU cores of the control node</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMCMem() Obtain <p>CPU size of the control node</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMCMem(integer $MCMem) Set <p>CPU size of the control node</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getComputerNodeCpu() Obtain <p>CPU cores of the computing node</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComputerNodeCpu(integer $ComputerNodeCpu) Set <p>CPU cores of the computing node</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getComputerNodeMem() Obtain <p>Compute node memory size</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComputerNodeMem(integer $ComputerNodeMem) Set <p>Compute node memory size</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStorageNodeCpu() Obtain <p>CPU cores of the storage node</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageNodeCpu(integer $StorageNodeCpu) Set <p>CPU cores of the storage node</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStorageNodeMem() Obtain <p>Storage node memory size</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageNodeMem(integer $StorageNodeMem) Set <p>Storage node memory size</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMCNum() Obtain <p>Number of control nodes</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMCNum(integer $MCNum) Set <p>Number of control nodes</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRenewFlag() Obtain <p>Renewal flag</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(integer $RenewFlag) Set <p>Renewal flag</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayMode() Obtain <p>Payment mode, 0 pay-as-you-go; 1 annual/monthly subscription</p>
 * @method void setPayMode(string $PayMode) Set <p>Payment mode, 0 pay-as-you-go; 1 annual/monthly subscription</p>
 * @method string getAccountTag() Obtain <p>User tag, inner: internal user; external: external user</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccountTag(string $AccountTag) Set <p>User tag, inner: internal user; external: external user</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain <p>Instance Architecture Type, separate: decoupled architecture; hyper: peer-to-peer architecture</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set <p>Instance Architecture Type, separate: decoupled architecture; hyper: peer-to-peer architecture</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStorageType() Obtain <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageType(string $StorageType) Set <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDestroyedAt() Obtain <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDestroyedAt(string $DestroyedAt) Set <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpireAt() Obtain <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireAt(string $ExpireAt) Set <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsolatedAt() Obtain <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolatedAt(string $IsolatedAt) Set <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsolatedFrom() Obtain <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolatedFrom(string $IsolatedFrom) Set <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReplications() Obtain <p>1</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReplications(integer $Replications) Set <p>1</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFullReplications() Obtain <p>Number of replicas</p>
 * @method void setFullReplications(integer $FullReplications) Set <p>Number of replicas</p>
 * @method integer getAppId() Obtain <p>Account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set <p>Account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubAccountUin() Obtain <p>Account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubAccountUin(string $SubAccountUin) Set <p>Account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain <p>Account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set <p>Account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getZones() Obtain <p>AZ information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZones(array $Zones) Set <p>AZ information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getNodes() Obtain <p>Instance node</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodes(array $Nodes) Set <p>Instance node</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBinlogStatus() Obtain <p>Whether binlog is on</p>
 * @method void setBinlogStatus(integer $BinlogStatus) Set <p>Whether binlog is on</p>
 * @method integer getCdcNodeCpu() Obtain <p>Number of cdc node cores</p>
 * @method void setCdcNodeCpu(integer $CdcNodeCpu) Set <p>Number of cdc node cores</p>
 * @method integer getCdcNodeMem() Obtain <p>cdc node memory size</p>
 * @method void setCdcNodeMem(integer $CdcNodeMem) Set <p>cdc node memory size</p>
 * @method integer getCdcNodeNum() Obtain <p>Number of cdc nodes</p>
 * @method void setCdcNodeNum(integer $CdcNodeNum) Set <p>Number of cdc nodes</p>
 * @method integer getAZMode() Obtain <p>az mode. 1: Single az, 2: Multi-az non-primary az mode, 3: Multi-az primary az mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAZMode(integer $AZMode) Set <p>az mode. 1: Single az, 2: Multi-az non-primary az mode, 3: Multi-az primary az mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStandbyFlag() Obtain <p>Disaster recovery flag. 1: No disaster recovery relationship; 2: Primary instance for disaster recovery; 3: Disaster Recovery Standby Instance</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStandbyFlag(integer $StandbyFlag) Set <p>Disaster recovery flag. 1: No disaster recovery relationship; 2: Primary instance for disaster recovery; 3: Disaster Recovery Standby Instance</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStandbySecondaryNum() Obtain <p>Number of connected standby instances (Valid only when StandbyFlag == 2)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStandbySecondaryNum(integer $StandbySecondaryNum) Set <p>Number of connected standby instances (Valid only when StandbyFlag == 2)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getColumnarNodeCpu() Obtain <p>cpu cores of the columnar node</p>
 * @method void setColumnarNodeCpu(integer $ColumnarNodeCpu) Set <p>cpu cores of the columnar node</p>
 * @method integer getColumnarNodeMem() Obtain <p>Columnar node memory size</p>
 * @method void setColumnarNodeMem(integer $ColumnarNodeMem) Set <p>Columnar node memory size</p>
 * @method integer getColumnarNodeNum() Obtain <p>Number of columnar nodes</p>
 * @method void setColumnarNodeNum(integer $ColumnarNodeNum) Set <p>Number of columnar nodes</p>
 * @method integer getColumnarNodeDisk() Obtain <p>Columnar node disk capacity (unit: GB)</p>
 * @method void setColumnarNodeDisk(integer $ColumnarNodeDisk) Set <p>Columnar node disk capacity (unit: GB)</p>
 * @method string getColumnarNodeStorageType() Obtain <p>Columnar node disk type</p>
 * @method void setColumnarNodeStorageType(string $ColumnarNodeStorageType) Set <p>Columnar node disk type</p>
 * @method integer getInstanceCategory() Obtain <p>Exclusive flags, 1: Primary instance (dedicated), 2: Primary instance, 3: Disaster recovery instance, 4: Disaster recovery instance (dedicated)</p>
 * @method void setInstanceCategory(integer $InstanceCategory) Set <p>Exclusive flags, 1: Primary instance (dedicated), 2: Primary instance, 3: Disaster recovery instance, 4: Disaster recovery instance (dedicated)</p>
 * @method string getExclusiveClusterId() Obtain <p>dbdc-xxxxx</p>
 * @method void setExclusiveClusterId(string $ExclusiveClusterId) Set <p>dbdc-xxxxx</p>
 * @method string getSQLMode() Obtain <p>Compatible mode</p>
 * @method void setSQLMode(string $SQLMode) Set <p>Compatible mode</p>
 * @method string getInstanceMode() Obtain <p>Instance mode</p>
 * @method void setInstanceMode(string $InstanceMode) Set <p>Instance mode</p>
 * @method string getClusterId() Obtain <p>Instance delivery platform</p>
 * @method void setClusterId(string $ClusterId) Set <p>Instance delivery platform</p>
 * @method AutoScalingConfig getAutoScaleConfig() Obtain <p>Auto-scaling configuration</p>
 * @method void setAutoScaleConfig(AutoScalingConfig $AutoScaleConfig) Set <p>Auto-scaling configuration</p>
 * @method string getAnalysisMode() Obtain <p>Analytical engine mode</p><p>Enumeration value:</p><ul><li>libra: LibraDB analytical engine mode</li></ul>
 * @method void setAnalysisMode(string $AnalysisMode) Set <p>Analytical engine mode</p><p>Enumeration value:</p><ul><li>libra: LibraDB analytical engine mode</li></ul>
 * @method array getAnalysisRelationInfos() Obtain <p>Analysis engine relationship information</p>
 * @method void setAnalysisRelationInfos(array $AnalysisRelationInfos) Set <p>Analysis engine relationship information</p>
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var integer <p>Number of compute nodes</p>
     * @deprecated
     */
    public $ComputeNodeNum;

    /**
     * @var string <p>Region</p>
     */
    public $Zone;

    /**
     * @var string <p>Creating an Instance Version</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateVersion;

    /**
     * @var array <p>Initialize instance parameter</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InitParams;

    /**
     * @var string <p>Instance status: creating, created, initializing, running, modifying, isolating, isolated, destroying, destroyed</p>
     */
    public $Status;

    /**
     * @var string <p>Instance id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Number of storage nodes</p>
     */
    public $StorageNodeNum;

    /**
     * @var array <p>Instance tag information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceTags;

    /**
     * @var string <p>Instance name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var integer <p>cpu cores of the computing node</p>
     * @deprecated
     */
    public $Cpu;

    /**
     * @var string <p>Character type vpcid</p>
     */
    public $VpcId;

    /**
     * @var integer <p>Computing node mem, in GB</p>
     * @deprecated
     */
    public $Mem;

    /**
     * @var string <p>Subnet IP</p>
     */
    public $Vip;

    /**
     * @var string <p>Character type subnetid</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>Subnet port</p>
     */
    public $Vport;

    /**
     * @var integer <p>Node disk capacity (unit: GB)</p>
     */
    public $Disk;

    /**
     * @var string <p>Instance Creation Time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Region of the instance</p>
     */
    public $Region;

    /**
     * @var string <p>Status description in Chinese of the instance</p>
     */
    public $StatusDesc;

    /**
     * @var integer <p>CPU cores of the control node</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $MCCpu;

    /**
     * @var integer <p>CPU size of the control node</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $MCMem;

    /**
     * @var integer <p>CPU cores of the computing node</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $ComputerNodeCpu;

    /**
     * @var integer <p>Compute node memory size</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $ComputerNodeMem;

    /**
     * @var integer <p>CPU cores of the storage node</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageNodeCpu;

    /**
     * @var integer <p>Storage node memory size</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageNodeMem;

    /**
     * @var integer <p>Number of control nodes</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $MCNum;

    /**
     * @var integer <p>Renewal flag</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @var string <p>Payment mode, 0 pay-as-you-go; 1 annual/monthly subscription</p>
     */
    public $PayMode;

    /**
     * @var string <p>User tag, inner: internal user; external: external user</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccountTag;

    /**
     * @var string <p>Instance Architecture Type, separate: decoupled architecture; hyper: peer-to-peer architecture</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var string <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageType;

    /**
     * @var string <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DestroyedAt;

    /**
     * @var string <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireAt;

    /**
     * @var string <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsolatedAt;

    /**
     * @var string <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsolatedFrom;

    /**
     * @var integer <p>1</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Replications;

    /**
     * @var integer <p>Number of replicas</p>
     */
    public $FullReplications;

    /**
     * @var integer <p>Account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string <p>Account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubAccountUin;

    /**
     * @var string <p>Account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var array <p>AZ information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zones;

    /**
     * @var array <p>Instance node</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nodes;

    /**
     * @var integer <p>Whether binlog is on</p>
     */
    public $BinlogStatus;

    /**
     * @var integer <p>Number of cdc node cores</p>
     * @deprecated
     */
    public $CdcNodeCpu;

    /**
     * @var integer <p>cdc node memory size</p>
     * @deprecated
     */
    public $CdcNodeMem;

    /**
     * @var integer <p>Number of cdc nodes</p>
     * @deprecated
     */
    public $CdcNodeNum;

    /**
     * @var integer <p>az mode. 1: Single az, 2: Multi-az non-primary az mode, 3: Multi-az primary az mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AZMode;

    /**
     * @var integer <p>Disaster recovery flag. 1: No disaster recovery relationship; 2: Primary instance for disaster recovery; 3: Disaster Recovery Standby Instance</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StandbyFlag;

    /**
     * @var integer <p>Number of connected standby instances (Valid only when StandbyFlag == 2)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StandbySecondaryNum;

    /**
     * @var integer <p>cpu cores of the columnar node</p>
     */
    public $ColumnarNodeCpu;

    /**
     * @var integer <p>Columnar node memory size</p>
     */
    public $ColumnarNodeMem;

    /**
     * @var integer <p>Number of columnar nodes</p>
     */
    public $ColumnarNodeNum;

    /**
     * @var integer <p>Columnar node disk capacity (unit: GB)</p>
     */
    public $ColumnarNodeDisk;

    /**
     * @var string <p>Columnar node disk type</p>
     */
    public $ColumnarNodeStorageType;

    /**
     * @var integer <p>Exclusive flags, 1: Primary instance (dedicated), 2: Primary instance, 3: Disaster recovery instance, 4: Disaster recovery instance (dedicated)</p>
     */
    public $InstanceCategory;

    /**
     * @var string <p>dbdc-xxxxx</p>
     */
    public $ExclusiveClusterId;

    /**
     * @var string <p>Compatible mode</p>
     */
    public $SQLMode;

    /**
     * @var string <p>Instance mode</p>
     */
    public $InstanceMode;

    /**
     * @var string <p>Instance delivery platform</p>
     * @deprecated
     */
    public $ClusterId;

    /**
     * @var AutoScalingConfig <p>Auto-scaling configuration</p>
     */
    public $AutoScaleConfig;

    /**
     * @var string <p>Analytical engine mode</p><p>Enumeration value:</p><ul><li>libra: LibraDB analytical engine mode</li></ul>
     */
    public $AnalysisMode;

    /**
     * @var array <p>Analysis engine relationship information</p>
     */
    public $AnalysisRelationInfos;

    /**
     * @param integer $ComputeNodeNum <p>Number of compute nodes</p>
     * @param string $Zone <p>Region</p>
     * @param string $CreateVersion <p>Creating an Instance Version</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $InitParams <p>Initialize instance parameter</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status <p>Instance status: creating, created, initializing, running, modifying, isolating, isolated, destroying, destroyed</p>
     * @param string $InstanceId <p>Instance id</p>
     * @param integer $StorageNodeNum <p>Number of storage nodes</p>
     * @param array $ResourceTags <p>Instance tag information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName <p>Instance name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Cpu <p>cpu cores of the computing node</p>
     * @param string $VpcId <p>Character type vpcid</p>
     * @param integer $Mem <p>Computing node mem, in GB</p>
     * @param string $Vip <p>Subnet IP</p>
     * @param string $SubnetId <p>Character type subnetid</p>
     * @param integer $Vport <p>Subnet port</p>
     * @param integer $Disk <p>Node disk capacity (unit: GB)</p>
     * @param string $CreateTime <p>Instance Creation Time</p>
     * @param string $Region <p>Region of the instance</p>
     * @param string $StatusDesc <p>Status description in Chinese of the instance</p>
     * @param integer $MCCpu <p>CPU cores of the control node</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MCMem <p>CPU size of the control node</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ComputerNodeCpu <p>CPU cores of the computing node</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ComputerNodeMem <p>Compute node memory size</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StorageNodeCpu <p>CPU cores of the storage node</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StorageNodeMem <p>Storage node memory size</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MCNum <p>Number of control nodes</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RenewFlag <p>Renewal flag</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayMode <p>Payment mode, 0 pay-as-you-go; 1 annual/monthly subscription</p>
     * @param string $AccountTag <p>User tag, inner: internal user; external: external user</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType <p>Instance Architecture Type, separate: decoupled architecture; hyper: peer-to-peer architecture</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StorageType <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DestroyedAt <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireAt <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsolatedAt <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsolatedFrom <p>&quot;0000-00-00 00:00:00&quot;</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Replications <p>1</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FullReplications <p>Number of replicas</p>
     * @param integer $AppId <p>Account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubAccountUin <p>Account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uin <p>Account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Zones <p>AZ information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Nodes <p>Instance node</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BinlogStatus <p>Whether binlog is on</p>
     * @param integer $CdcNodeCpu <p>Number of cdc node cores</p>
     * @param integer $CdcNodeMem <p>cdc node memory size</p>
     * @param integer $CdcNodeNum <p>Number of cdc nodes</p>
     * @param integer $AZMode <p>az mode. 1: Single az, 2: Multi-az non-primary az mode, 3: Multi-az primary az mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StandbyFlag <p>Disaster recovery flag. 1: No disaster recovery relationship; 2: Primary instance for disaster recovery; 3: Disaster Recovery Standby Instance</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StandbySecondaryNum <p>Number of connected standby instances (Valid only when StandbyFlag == 2)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ColumnarNodeCpu <p>cpu cores of the columnar node</p>
     * @param integer $ColumnarNodeMem <p>Columnar node memory size</p>
     * @param integer $ColumnarNodeNum <p>Number of columnar nodes</p>
     * @param integer $ColumnarNodeDisk <p>Columnar node disk capacity (unit: GB)</p>
     * @param string $ColumnarNodeStorageType <p>Columnar node disk type</p>
     * @param integer $InstanceCategory <p>Exclusive flags, 1: Primary instance (dedicated), 2: Primary instance, 3: Disaster recovery instance, 4: Disaster recovery instance (dedicated)</p>
     * @param string $ExclusiveClusterId <p>dbdc-xxxxx</p>
     * @param string $SQLMode <p>Compatible mode</p>
     * @param string $InstanceMode <p>Instance mode</p>
     * @param string $ClusterId <p>Instance delivery platform</p>
     * @param AutoScalingConfig $AutoScaleConfig <p>Auto-scaling configuration</p>
     * @param string $AnalysisMode <p>Analytical engine mode</p><p>Enumeration value:</p><ul><li>libra: LibraDB analytical engine mode</li></ul>
     * @param array $AnalysisRelationInfos <p>Analysis engine relationship information</p>
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
        if (array_key_exists("ComputeNodeNum",$param) and $param["ComputeNodeNum"] !== null) {
            $this->ComputeNodeNum = $param["ComputeNodeNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CreateVersion",$param) and $param["CreateVersion"] !== null) {
            $this->CreateVersion = $param["CreateVersion"];
        }

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = [];
            foreach ($param["InitParams"] as $key => $value){
                $obj = new InstanceParam();
                $obj->deserialize($value);
                array_push($this->InitParams, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StorageNodeNum",$param) and $param["StorageNodeNum"] !== null) {
            $this->StorageNodeNum = $param["StorageNodeNum"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("MCCpu",$param) and $param["MCCpu"] !== null) {
            $this->MCCpu = $param["MCCpu"];
        }

        if (array_key_exists("MCMem",$param) and $param["MCMem"] !== null) {
            $this->MCMem = $param["MCMem"];
        }

        if (array_key_exists("ComputerNodeCpu",$param) and $param["ComputerNodeCpu"] !== null) {
            $this->ComputerNodeCpu = $param["ComputerNodeCpu"];
        }

        if (array_key_exists("ComputerNodeMem",$param) and $param["ComputerNodeMem"] !== null) {
            $this->ComputerNodeMem = $param["ComputerNodeMem"];
        }

        if (array_key_exists("StorageNodeCpu",$param) and $param["StorageNodeCpu"] !== null) {
            $this->StorageNodeCpu = $param["StorageNodeCpu"];
        }

        if (array_key_exists("StorageNodeMem",$param) and $param["StorageNodeMem"] !== null) {
            $this->StorageNodeMem = $param["StorageNodeMem"];
        }

        if (array_key_exists("MCNum",$param) and $param["MCNum"] !== null) {
            $this->MCNum = $param["MCNum"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("AccountTag",$param) and $param["AccountTag"] !== null) {
            $this->AccountTag = $param["AccountTag"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("DestroyedAt",$param) and $param["DestroyedAt"] !== null) {
            $this->DestroyedAt = $param["DestroyedAt"];
        }

        if (array_key_exists("ExpireAt",$param) and $param["ExpireAt"] !== null) {
            $this->ExpireAt = $param["ExpireAt"];
        }

        if (array_key_exists("IsolatedAt",$param) and $param["IsolatedAt"] !== null) {
            $this->IsolatedAt = $param["IsolatedAt"];
        }

        if (array_key_exists("IsolatedFrom",$param) and $param["IsolatedFrom"] !== null) {
            $this->IsolatedFrom = $param["IsolatedFrom"];
        }

        if (array_key_exists("Replications",$param) and $param["Replications"] !== null) {
            $this->Replications = $param["Replications"];
        }

        if (array_key_exists("FullReplications",$param) and $param["FullReplications"] !== null) {
            $this->FullReplications = $param["FullReplications"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new InstanceNode();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("BinlogStatus",$param) and $param["BinlogStatus"] !== null) {
            $this->BinlogStatus = $param["BinlogStatus"];
        }

        if (array_key_exists("CdcNodeCpu",$param) and $param["CdcNodeCpu"] !== null) {
            $this->CdcNodeCpu = $param["CdcNodeCpu"];
        }

        if (array_key_exists("CdcNodeMem",$param) and $param["CdcNodeMem"] !== null) {
            $this->CdcNodeMem = $param["CdcNodeMem"];
        }

        if (array_key_exists("CdcNodeNum",$param) and $param["CdcNodeNum"] !== null) {
            $this->CdcNodeNum = $param["CdcNodeNum"];
        }

        if (array_key_exists("AZMode",$param) and $param["AZMode"] !== null) {
            $this->AZMode = $param["AZMode"];
        }

        if (array_key_exists("StandbyFlag",$param) and $param["StandbyFlag"] !== null) {
            $this->StandbyFlag = $param["StandbyFlag"];
        }

        if (array_key_exists("StandbySecondaryNum",$param) and $param["StandbySecondaryNum"] !== null) {
            $this->StandbySecondaryNum = $param["StandbySecondaryNum"];
        }

        if (array_key_exists("ColumnarNodeCpu",$param) and $param["ColumnarNodeCpu"] !== null) {
            $this->ColumnarNodeCpu = $param["ColumnarNodeCpu"];
        }

        if (array_key_exists("ColumnarNodeMem",$param) and $param["ColumnarNodeMem"] !== null) {
            $this->ColumnarNodeMem = $param["ColumnarNodeMem"];
        }

        if (array_key_exists("ColumnarNodeNum",$param) and $param["ColumnarNodeNum"] !== null) {
            $this->ColumnarNodeNum = $param["ColumnarNodeNum"];
        }

        if (array_key_exists("ColumnarNodeDisk",$param) and $param["ColumnarNodeDisk"] !== null) {
            $this->ColumnarNodeDisk = $param["ColumnarNodeDisk"];
        }

        if (array_key_exists("ColumnarNodeStorageType",$param) and $param["ColumnarNodeStorageType"] !== null) {
            $this->ColumnarNodeStorageType = $param["ColumnarNodeStorageType"];
        }

        if (array_key_exists("InstanceCategory",$param) and $param["InstanceCategory"] !== null) {
            $this->InstanceCategory = $param["InstanceCategory"];
        }

        if (array_key_exists("ExclusiveClusterId",$param) and $param["ExclusiveClusterId"] !== null) {
            $this->ExclusiveClusterId = $param["ExclusiveClusterId"];
        }

        if (array_key_exists("SQLMode",$param) and $param["SQLMode"] !== null) {
            $this->SQLMode = $param["SQLMode"];
        }

        if (array_key_exists("InstanceMode",$param) and $param["InstanceMode"] !== null) {
            $this->InstanceMode = $param["InstanceMode"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AutoScaleConfig",$param) and $param["AutoScaleConfig"] !== null) {
            $this->AutoScaleConfig = new AutoScalingConfig();
            $this->AutoScaleConfig->deserialize($param["AutoScaleConfig"]);
        }

        if (array_key_exists("AnalysisMode",$param) and $param["AnalysisMode"] !== null) {
            $this->AnalysisMode = $param["AnalysisMode"];
        }

        if (array_key_exists("AnalysisRelationInfos",$param) and $param["AnalysisRelationInfos"] !== null) {
            $this->AnalysisRelationInfos = [];
            foreach ($param["AnalysisRelationInfos"] as $key => $value){
                $obj = new AnalysisRelationInfo();
                $obj->deserialize($value);
                array_push($this->AnalysisRelationInfos, $obj);
            }
        }
    }
}
