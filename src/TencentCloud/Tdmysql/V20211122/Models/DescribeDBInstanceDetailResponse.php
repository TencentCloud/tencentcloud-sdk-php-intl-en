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
 * DescribeDBInstanceDetail response structure.
 *
 * @method string getInstanceName() Obtain <p>Instance name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name</p>
 * @method string getZone() Obtain <p>Region</p>
 * @method void setZone(string $Zone) Set <p>Region</p>
 * @method string getVpcId() Obtain <p>Character type vpcid</p>
 * @method void setVpcId(string $VpcId) Set <p>Character type vpcid</p>
 * @method string getSubnetId() Obtain <p>Character type subnetid</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Character type subnetid</p>
 * @method string getCreateVersion() Obtain <p>Create an instance version</p>
 * @method void setCreateVersion(string $CreateVersion) Set <p>Create an instance version</p>
 * @method string getVip() Obtain <p>Subnet IP</p>
 * @method void setVip(string $Vip) Set <p>Subnet IP</p>
 * @method integer getVport() Obtain <p>Subnet port</p>
 * @method void setVport(integer $Vport) Set <p>Subnet port</p>
 * @method string getStatus() Obtain <p>Instance status</p>
 * @method void setStatus(string $Status) Set <p>Instance status</p>
 * @method integer getDisk() Obtain <p>Node disk capacity (unit: GB)</p>
 * @method void setDisk(integer $Disk) Set <p>Node disk capacity (unit: GB)</p>
 * @method integer getStorageNodeNum() Obtain <p>Number of storage nodes</p>
 * @method void setStorageNodeNum(integer $StorageNodeNum) Set <p>Number of storage nodes</p>
 * @method array getInitParams() Obtain <p>Initialize instance parameters</p>
 * @method void setInitParams(array $InitParams) Set <p>Initialize instance parameters</p>
 * @method array getResourceTags() Obtain <p>Instance tag information.</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>Instance tag information.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method integer getReplications() Obtain <p>Number of storage node replicas</p>
 * @method void setReplications(integer $Replications) Set <p>Number of storage node replicas</p>
 * @method integer getFullReplications() Obtain <p>Number of replicas</p>
 * @method void setFullReplications(integer $FullReplications) Set <p>Number of replicas</p>
 * @method string getCharSet() Obtain <p>Character set</p>
 * @method void setCharSet(string $CharSet) Set <p>Character set</p>
 * @method array getNode() Obtain <p>Node information</p>
 * @method void setNode(array $Node) Set <p>Node information</p>
 * @method string getRegion() Obtain <p>Region of the instance</p>
 * @method void setRegion(string $Region) Set <p>Region of the instance</p>
 * @method string getSpecCode() Obtain <p>Instance specification</p>
 * @method void setSpecCode(string $SpecCode) Set <p>Instance specification</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getStatusDesc() Obtain <p>Status description in Chinese of the instance</p>
 * @method void setStatusDesc(string $StatusDesc) Set <p>Status description in Chinese of the instance</p>
 * @method integer getStorageNodeCpu() Obtain <p>CPU cores of the storage node</p>
 * @method void setStorageNodeCpu(integer $StorageNodeCpu) Set <p>CPU cores of the storage node</p>
 * @method integer getStorageNodeMem() Obtain <p>Storage node memory size</p>
 * @method void setStorageNodeMem(integer $StorageNodeMem) Set <p>Storage node memory size</p>
 * @method integer getRenewFlag() Obtain <p>Renewal flag</p>
 * @method void setRenewFlag(integer $RenewFlag) Set <p>Renewal flag</p>
 * @method string getPayMode() Obtain <p>Payment mode, 0 pay-as-you-go, 1 prepaid</p>
 * @method void setPayMode(string $PayMode) Set <p>Payment mode, 0 pay-as-you-go, 1 prepaid</p>
 * @method string getExpireAt() Obtain <p>Expiration time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireAt(string $ExpireAt) Set <p>Expiration time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsolatedAt() Obtain <p>Isolation time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolatedAt(string $IsolatedAt) Set <p>Isolation time</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain <p>Instance Architecture Type, separate: decoupled architecture; hybrid: peer-to-peer architecture</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set <p>Instance Architecture Type, separate: decoupled architecture; hybrid: peer-to-peer architecture</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStorageType() Obtain <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageType(string $StorageType) Set <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getZones() Obtain <p>List of instance node availability zones. Zones[0] refers to the primary AZ</p>
 * @method void setZones(array $Zones) Set <p>List of instance node availability zones. Zones[0] refers to the primary AZ</p>
 * @method integer getDiskUsage() Obtain <p>Disk usage of the largest node</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskUsage(integer $DiskUsage) Set <p>Disk usage of the largest node</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBinlogStatus() Obtain <p>Whether binlog is enabled</p>
 * @method void setBinlogStatus(integer $BinlogStatus) Set <p>Whether binlog is enabled</p>
 * @method integer getAZMode() Obtain <p>az mode. 1: Single az 2: Multi-az non-primary az mode 3: Multi-az primary az mode</p>
 * @method void setAZMode(integer $AZMode) Set <p>az mode. 1: Single az 2: Multi-az non-primary az mode 3: Multi-az primary az mode</p>
 * @method integer getStandbyFlag() Obtain <p>Disaster recovery flag. 1: No disaster recovery relationship; 2: Primary instance for disaster recovery; 3: Disaster Recovery Standby Instance</p>
 * @method void setStandbyFlag(integer $StandbyFlag) Set <p>Disaster recovery flag. 1: No disaster recovery relationship; 2: Primary instance for disaster recovery; 3: Disaster Recovery Standby Instance</p>
 * @method string getBinlogType() Obtain <p>cdc node type</p>
 * @method void setBinlogType(string $BinlogType) Set <p>cdc node type</p>
 * @method integer getTimingModifyInstanceFlag() Obtain <p>1 means supported, 0 means unsupported</p>
 * @method void setTimingModifyInstanceFlag(integer $TimingModifyInstanceFlag) Set <p>1 means supported, 0 means unsupported</p>
 * @method integer getColumnarNodeCpu() Obtain <p>cpu cores of the columnar node</p>
 * @method void setColumnarNodeCpu(integer $ColumnarNodeCpu) Set <p>cpu cores of the columnar node</p>
 * @method integer getColumnarNodeMem() Obtain <p>Columnar node memory size</p>
 * @method void setColumnarNodeMem(integer $ColumnarNodeMem) Set <p>Columnar node memory size</p>
 * @method integer getColumnarNodeNum() Obtain <p>Number of columnar nodes</p>
 * @method void setColumnarNodeNum(integer $ColumnarNodeNum) Set <p>Number of columnar nodes</p>
 * @method integer getColumnarNodeDisk() Obtain <p>Columnar node disk size</p>
 * @method void setColumnarNodeDisk(integer $ColumnarNodeDisk) Set <p>Columnar node disk size</p>
 * @method string getColumnarNodeStorageType() Obtain <p>Columnar node disk type</p>
 * @method void setColumnarNodeStorageType(string $ColumnarNodeStorageType) Set <p>Columnar node disk type</p>
 * @method string getColumnarNodeSpecCode() Obtain <p>Columnar node specification</p>
 * @method void setColumnarNodeSpecCode(string $ColumnarNodeSpecCode) Set <p>Columnar node specification</p>
 * @method string getColumnarVip() Obtain <p>Columnar storage vip</p>
 * @method void setColumnarVip(string $ColumnarVip) Set <p>Columnar storage vip</p>
 * @method integer getColumnarVport() Obtain <p>Columnar vport</p>
 * @method void setColumnarVport(integer $ColumnarVport) Set <p>Columnar vport</p>
 * @method boolean getIsSupportColumnar() Obtain <p>Whether the instance supports columnar storage</p>
 * @method void setIsSupportColumnar(boolean $IsSupportColumnar) Set <p>Whether the instance supports columnar storage</p>
 * @method integer getInstanceCategory() Obtain <p>Instance type</p>
 * @method void setInstanceCategory(integer $InstanceCategory) Set <p>Instance type</p>
 * @method string getSQLMode() Obtain <p>Compatible mode</p>
 * @method void setSQLMode(string $SQLMode) Set <p>Compatible mode</p>
 * @method boolean getIsSwitchFullReplicationsEnable() Obtain <p>Whether modification of the number of replicas is supported</p>
 * @method void setIsSwitchFullReplicationsEnable(boolean $IsSwitchFullReplicationsEnable) Set <p>Whether modification of the number of replicas is supported</p>
 * @method string getInstanceMode() Obtain <p>Instance type</p>
 * @method void setInstanceMode(string $InstanceMode) Set <p>Instance type</p>
 * @method string getDumperVip() Obtain <p>dumper vip</p>
 * @method void setDumperVip(string $DumperVip) Set <p>dumper vip</p>
 * @method integer getDumperVport() Obtain <p>dumper vport</p>
 * @method void setDumperVport(integer $DumperVport) Set <p>dumper vport</p>
 * @method AutoScalingConfig getAutoScaleConfig() Obtain <p>ccu adjustment range of the svls instance</p>
 * @method void setAutoScaleConfig(AutoScalingConfig $AutoScaleConfig) Set <p>ccu adjustment range of the svls instance</p>
 * @method string getTemplateId() Obtain <p>Parameter template id</p>
 * @method void setTemplateId(string $TemplateId) Set <p>Parameter template id</p>
 * @method string getTemplateName() Obtain <p>Parameter template name</p>
 * @method void setTemplateName(string $TemplateName) Set <p>Parameter template name</p>
 * @method string getAnalysisMode() Obtain <p>Instance analysis engine mode</p><p>Enumeration value:</p><ul><li>libra: LibraDB analysis engine instance</li></ul>
 * @method void setAnalysisMode(string $AnalysisMode) Set <p>Instance analysis engine mode</p><p>Enumeration value:</p><ul><li>libra: LibraDB analysis engine instance</li></ul>
 * @method array getAnalysisRelationInfos() Obtain <p>Analysis engine instance relationship</p>
 * @method void setAnalysisRelationInfos(array $AnalysisRelationInfos) Set <p>Analysis engine instance relationship</p>
 * @method AnalysisInstanceInfo getAnalysisInstanceInfo() Obtain <p>Analysis engine instance info</p><p>Cpu, Memory, and Disk reuse top-level fields</p>
 * @method void setAnalysisInstanceInfo(AnalysisInstanceInfo $AnalysisInstanceInfo) Set <p>Analysis engine instance info</p><p>Cpu, Memory, and Disk reuse top-level fields</p>
 * @method MaintenanceWindowInfo getMaintenanceWindow() Obtain <p>Maintenance window configuration</p>
 * @method void setMaintenanceWindow(MaintenanceWindowInfo $MaintenanceWindow) Set <p>Maintenance window configuration</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeDBInstanceDetailResponse extends AbstractModel
{
    /**
     * @var string <p>Instance name</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Region</p>
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
     * @var string <p>Create an instance version</p>
     */
    public $CreateVersion;

    /**
     * @var string <p>Subnet IP</p>
     */
    public $Vip;

    /**
     * @var integer <p>Subnet port</p>
     */
    public $Vport;

    /**
     * @var string <p>Instance status</p>
     */
    public $Status;

    /**
     * @var integer <p>Node disk capacity (unit: GB)</p>
     */
    public $Disk;

    /**
     * @var integer <p>Number of storage nodes</p>
     */
    public $StorageNodeNum;

    /**
     * @var array <p>Initialize instance parameters</p>
     */
    public $InitParams;

    /**
     * @var array <p>Instance tag information.</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>Number of storage node replicas</p>
     */
    public $Replications;

    /**
     * @var integer <p>Number of replicas</p>
     */
    public $FullReplications;

    /**
     * @var string <p>Character set</p>
     */
    public $CharSet;

    /**
     * @var array <p>Node information</p>
     */
    public $Node;

    /**
     * @var string <p>Region of the instance</p>
     */
    public $Region;

    /**
     * @var string <p>Instance specification</p>
     */
    public $SpecCode;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Status description in Chinese of the instance</p>
     */
    public $StatusDesc;

    /**
     * @var integer <p>CPU cores of the storage node</p>
     */
    public $StorageNodeCpu;

    /**
     * @var integer <p>Storage node memory size</p>
     */
    public $StorageNodeMem;

    /**
     * @var integer <p>Renewal flag</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>Payment mode, 0 pay-as-you-go, 1 prepaid</p>
     */
    public $PayMode;

    /**
     * @var string <p>Expiration time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireAt;

    /**
     * @var string <p>Isolation time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsolatedAt;

    /**
     * @var string <p>Instance Architecture Type, separate: decoupled architecture; hybrid: peer-to-peer architecture</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var string <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageType;

    /**
     * @var array <p>List of instance node availability zones. Zones[0] refers to the primary AZ</p>
     */
    public $Zones;

    /**
     * @var integer <p>Disk usage of the largest node</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskUsage;

    /**
     * @var integer <p>Whether binlog is enabled</p>
     */
    public $BinlogStatus;

    /**
     * @var integer <p>az mode. 1: Single az 2: Multi-az non-primary az mode 3: Multi-az primary az mode</p>
     */
    public $AZMode;

    /**
     * @var integer <p>Disaster recovery flag. 1: No disaster recovery relationship; 2: Primary instance for disaster recovery; 3: Disaster Recovery Standby Instance</p>
     */
    public $StandbyFlag;

    /**
     * @var string <p>cdc node type</p>
     */
    public $BinlogType;

    /**
     * @var integer <p>1 means supported, 0 means unsupported</p>
     */
    public $TimingModifyInstanceFlag;

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
     * @var integer <p>Columnar node disk size</p>
     */
    public $ColumnarNodeDisk;

    /**
     * @var string <p>Columnar node disk type</p>
     */
    public $ColumnarNodeStorageType;

    /**
     * @var string <p>Columnar node specification</p>
     */
    public $ColumnarNodeSpecCode;

    /**
     * @var string <p>Columnar storage vip</p>
     */
    public $ColumnarVip;

    /**
     * @var integer <p>Columnar vport</p>
     */
    public $ColumnarVport;

    /**
     * @var boolean <p>Whether the instance supports columnar storage</p>
     */
    public $IsSupportColumnar;

    /**
     * @var integer <p>Instance type</p>
     */
    public $InstanceCategory;

    /**
     * @var string <p>Compatible mode</p>
     */
    public $SQLMode;

    /**
     * @var boolean <p>Whether modification of the number of replicas is supported</p>
     */
    public $IsSwitchFullReplicationsEnable;

    /**
     * @var string <p>Instance type</p>
     */
    public $InstanceMode;

    /**
     * @var string <p>dumper vip</p>
     */
    public $DumperVip;

    /**
     * @var integer <p>dumper vport</p>
     */
    public $DumperVport;

    /**
     * @var AutoScalingConfig <p>ccu adjustment range of the svls instance</p>
     */
    public $AutoScaleConfig;

    /**
     * @var string <p>Parameter template id</p>
     */
    public $TemplateId;

    /**
     * @var string <p>Parameter template name</p>
     */
    public $TemplateName;

    /**
     * @var string <p>Instance analysis engine mode</p><p>Enumeration value:</p><ul><li>libra: LibraDB analysis engine instance</li></ul>
     */
    public $AnalysisMode;

    /**
     * @var array <p>Analysis engine instance relationship</p>
     */
    public $AnalysisRelationInfos;

    /**
     * @var AnalysisInstanceInfo <p>Analysis engine instance info</p><p>Cpu, Memory, and Disk reuse top-level fields</p>
     */
    public $AnalysisInstanceInfo;

    /**
     * @var MaintenanceWindowInfo <p>Maintenance window configuration</p>
     */
    public $MaintenanceWindow;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceName <p>Instance name</p>
     * @param string $Zone <p>Region</p>
     * @param string $VpcId <p>Character type vpcid</p>
     * @param string $SubnetId <p>Character type subnetid</p>
     * @param string $CreateVersion <p>Create an instance version</p>
     * @param string $Vip <p>Subnet IP</p>
     * @param integer $Vport <p>Subnet port</p>
     * @param string $Status <p>Instance status</p>
     * @param integer $Disk <p>Node disk capacity (unit: GB)</p>
     * @param integer $StorageNodeNum <p>Number of storage nodes</p>
     * @param array $InitParams <p>Initialize instance parameters</p>
     * @param array $ResourceTags <p>Instance tag information.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param integer $Replications <p>Number of storage node replicas</p>
     * @param integer $FullReplications <p>Number of replicas</p>
     * @param string $CharSet <p>Character set</p>
     * @param array $Node <p>Node information</p>
     * @param string $Region <p>Region of the instance</p>
     * @param string $SpecCode <p>Instance specification</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $StatusDesc <p>Status description in Chinese of the instance</p>
     * @param integer $StorageNodeCpu <p>CPU cores of the storage node</p>
     * @param integer $StorageNodeMem <p>Storage node memory size</p>
     * @param integer $RenewFlag <p>Renewal flag</p>
     * @param string $PayMode <p>Payment mode, 0 pay-as-you-go, 1 prepaid</p>
     * @param string $ExpireAt <p>Expiration time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsolatedAt <p>Isolation time</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType <p>Instance Architecture Type, separate: decoupled architecture; hybrid: peer-to-peer architecture</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StorageType <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Zones <p>List of instance node availability zones. Zones[0] refers to the primary AZ</p>
     * @param integer $DiskUsage <p>Disk usage of the largest node</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BinlogStatus <p>Whether binlog is enabled</p>
     * @param integer $AZMode <p>az mode. 1: Single az 2: Multi-az non-primary az mode 3: Multi-az primary az mode</p>
     * @param integer $StandbyFlag <p>Disaster recovery flag. 1: No disaster recovery relationship; 2: Primary instance for disaster recovery; 3: Disaster Recovery Standby Instance</p>
     * @param string $BinlogType <p>cdc node type</p>
     * @param integer $TimingModifyInstanceFlag <p>1 means supported, 0 means unsupported</p>
     * @param integer $ColumnarNodeCpu <p>cpu cores of the columnar node</p>
     * @param integer $ColumnarNodeMem <p>Columnar node memory size</p>
     * @param integer $ColumnarNodeNum <p>Number of columnar nodes</p>
     * @param integer $ColumnarNodeDisk <p>Columnar node disk size</p>
     * @param string $ColumnarNodeStorageType <p>Columnar node disk type</p>
     * @param string $ColumnarNodeSpecCode <p>Columnar node specification</p>
     * @param string $ColumnarVip <p>Columnar storage vip</p>
     * @param integer $ColumnarVport <p>Columnar vport</p>
     * @param boolean $IsSupportColumnar <p>Whether the instance supports columnar storage</p>
     * @param integer $InstanceCategory <p>Instance type</p>
     * @param string $SQLMode <p>Compatible mode</p>
     * @param boolean $IsSwitchFullReplicationsEnable <p>Whether modification of the number of replicas is supported</p>
     * @param string $InstanceMode <p>Instance type</p>
     * @param string $DumperVip <p>dumper vip</p>
     * @param integer $DumperVport <p>dumper vport</p>
     * @param AutoScalingConfig $AutoScaleConfig <p>ccu adjustment range of the svls instance</p>
     * @param string $TemplateId <p>Parameter template id</p>
     * @param string $TemplateName <p>Parameter template name</p>
     * @param string $AnalysisMode <p>Instance analysis engine mode</p><p>Enumeration value:</p><ul><li>libra: LibraDB analysis engine instance</li></ul>
     * @param array $AnalysisRelationInfos <p>Analysis engine instance relationship</p>
     * @param AnalysisInstanceInfo $AnalysisInstanceInfo <p>Analysis engine instance info</p><p>Cpu, Memory, and Disk reuse top-level fields</p>
     * @param MaintenanceWindowInfo $MaintenanceWindow <p>Maintenance window configuration</p>
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
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

        if (array_key_exists("CreateVersion",$param) and $param["CreateVersion"] !== null) {
            $this->CreateVersion = $param["CreateVersion"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("StorageNodeNum",$param) and $param["StorageNodeNum"] !== null) {
            $this->StorageNodeNum = $param["StorageNodeNum"];
        }

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = [];
            foreach ($param["InitParams"] as $key => $value){
                $obj = new InstanceParam();
                $obj->deserialize($value);
                array_push($this->InitParams, $obj);
            }
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Replications",$param) and $param["Replications"] !== null) {
            $this->Replications = $param["Replications"];
        }

        if (array_key_exists("FullReplications",$param) and $param["FullReplications"] !== null) {
            $this->FullReplications = $param["FullReplications"];
        }

        if (array_key_exists("CharSet",$param) and $param["CharSet"] !== null) {
            $this->CharSet = $param["CharSet"];
        }

        if (array_key_exists("Node",$param) and $param["Node"] !== null) {
            $this->Node = [];
            foreach ($param["Node"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->Node, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("StorageNodeCpu",$param) and $param["StorageNodeCpu"] !== null) {
            $this->StorageNodeCpu = $param["StorageNodeCpu"];
        }

        if (array_key_exists("StorageNodeMem",$param) and $param["StorageNodeMem"] !== null) {
            $this->StorageNodeMem = $param["StorageNodeMem"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ExpireAt",$param) and $param["ExpireAt"] !== null) {
            $this->ExpireAt = $param["ExpireAt"];
        }

        if (array_key_exists("IsolatedAt",$param) and $param["IsolatedAt"] !== null) {
            $this->IsolatedAt = $param["IsolatedAt"];
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

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("BinlogStatus",$param) and $param["BinlogStatus"] !== null) {
            $this->BinlogStatus = $param["BinlogStatus"];
        }

        if (array_key_exists("AZMode",$param) and $param["AZMode"] !== null) {
            $this->AZMode = $param["AZMode"];
        }

        if (array_key_exists("StandbyFlag",$param) and $param["StandbyFlag"] !== null) {
            $this->StandbyFlag = $param["StandbyFlag"];
        }

        if (array_key_exists("BinlogType",$param) and $param["BinlogType"] !== null) {
            $this->BinlogType = $param["BinlogType"];
        }

        if (array_key_exists("TimingModifyInstanceFlag",$param) and $param["TimingModifyInstanceFlag"] !== null) {
            $this->TimingModifyInstanceFlag = $param["TimingModifyInstanceFlag"];
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

        if (array_key_exists("ColumnarNodeSpecCode",$param) and $param["ColumnarNodeSpecCode"] !== null) {
            $this->ColumnarNodeSpecCode = $param["ColumnarNodeSpecCode"];
        }

        if (array_key_exists("ColumnarVip",$param) and $param["ColumnarVip"] !== null) {
            $this->ColumnarVip = $param["ColumnarVip"];
        }

        if (array_key_exists("ColumnarVport",$param) and $param["ColumnarVport"] !== null) {
            $this->ColumnarVport = $param["ColumnarVport"];
        }

        if (array_key_exists("IsSupportColumnar",$param) and $param["IsSupportColumnar"] !== null) {
            $this->IsSupportColumnar = $param["IsSupportColumnar"];
        }

        if (array_key_exists("InstanceCategory",$param) and $param["InstanceCategory"] !== null) {
            $this->InstanceCategory = $param["InstanceCategory"];
        }

        if (array_key_exists("SQLMode",$param) and $param["SQLMode"] !== null) {
            $this->SQLMode = $param["SQLMode"];
        }

        if (array_key_exists("IsSwitchFullReplicationsEnable",$param) and $param["IsSwitchFullReplicationsEnable"] !== null) {
            $this->IsSwitchFullReplicationsEnable = $param["IsSwitchFullReplicationsEnable"];
        }

        if (array_key_exists("InstanceMode",$param) and $param["InstanceMode"] !== null) {
            $this->InstanceMode = $param["InstanceMode"];
        }

        if (array_key_exists("DumperVip",$param) and $param["DumperVip"] !== null) {
            $this->DumperVip = $param["DumperVip"];
        }

        if (array_key_exists("DumperVport",$param) and $param["DumperVport"] !== null) {
            $this->DumperVport = $param["DumperVport"];
        }

        if (array_key_exists("AutoScaleConfig",$param) and $param["AutoScaleConfig"] !== null) {
            $this->AutoScaleConfig = new AutoScalingConfig();
            $this->AutoScaleConfig->deserialize($param["AutoScaleConfig"]);
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
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

        if (array_key_exists("AnalysisInstanceInfo",$param) and $param["AnalysisInstanceInfo"] !== null) {
            $this->AnalysisInstanceInfo = new AnalysisInstanceInfo();
            $this->AnalysisInstanceInfo->deserialize($param["AnalysisInstanceInfo"]);
        }

        if (array_key_exists("MaintenanceWindow",$param) and $param["MaintenanceWindow"] !== null) {
            $this->MaintenanceWindow = new MaintenanceWindowInfo();
            $this->MaintenanceWindow->deserialize($param["MaintenanceWindow"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
