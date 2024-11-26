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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance details
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getName() Obtain Instance name
 * @method void setName(string $Name) Set Instance name
 * @method integer getProjectId() Obtain Project ID of instance
 * @method void setProjectId(integer $ProjectId) Set Project ID of instance
 * @method integer getRegionId() Obtain Instance region ID
 * @method void setRegionId(integer $RegionId) Set Instance region ID
 * @method integer getZoneId() Obtain Instance AZ ID
 * @method void setZoneId(integer $ZoneId) Set Instance AZ ID
 * @method integer getVpcId() Obtain Instance VPC ID, which will be 0 if the basic network is used
 * @method void setVpcId(integer $VpcId) Set Instance VPC ID, which will be 0 if the basic network is used
 * @method integer getSubnetId() Obtain Instance VPC subnet ID, which will be 0 if the basic network is used
 * @method void setSubnetId(integer $SubnetId) Set Instance VPC subnet ID, which will be 0 if the basic network is used
 * @method integer getStatus() Obtain Instance status. Valid values: <li>1: creating</li> <li>2: running</li> <li>3: instance operations restricted (due to the ongoing primary-replica switch)</li> <li>4: isolated</li> <li>5: repossessing</li> <li>6: repossessed</li> <li>7: running tasks (such as backup and rollback tasks)</li> <li>8: eliminated</li> <li>9: expanding capacity</li> <li>10: migrating</li> <li>11: read-only</li> <li>12: restarting</li>  <li>13: modifying configuration and waiting for switch</li> <li>14: implementing pub/sub</li> <li>15: modifying pub/sub configuration</li> <li>16: modifying configuration and switching</li> <li>17: creating read-only instances</li>
 * @method void setStatus(integer $Status) Set Instance status. Valid values: <li>1: creating</li> <li>2: running</li> <li>3: instance operations restricted (due to the ongoing primary-replica switch)</li> <li>4: isolated</li> <li>5: repossessing</li> <li>6: repossessed</li> <li>7: running tasks (such as backup and rollback tasks)</li> <li>8: eliminated</li> <li>9: expanding capacity</li> <li>10: migrating</li> <li>11: read-only</li> <li>12: restarting</li>  <li>13: modifying configuration and waiting for switch</li> <li>14: implementing pub/sub</li> <li>15: modifying pub/sub configuration</li> <li>16: modifying configuration and switching</li> <li>17: creating read-only instances</li>
 * @method string getVip() Obtain Instance access IP
 * @method void setVip(string $Vip) Set Instance access IP
 * @method integer getVport() Obtain Instance access port
 * @method void setVport(integer $Vport) Set Instance access port
 * @method string getCreateTime() Obtain Instance creation time
 * @method void setCreateTime(string $CreateTime) Set Instance creation time
 * @method string getUpdateTime() Obtain Instance update time
 * @method void setUpdateTime(string $UpdateTime) Set Instance update time
 * @method string getStartTime() Obtain Instance billing start time
 * @method void setStartTime(string $StartTime) Set Instance billing start time
 * @method string getEndTime() Obtain Instance billing end time
 * @method void setEndTime(string $EndTime) Set Instance billing end time
 * @method string getIsolateTime() Obtain Instance isolation time
 * @method void setIsolateTime(string $IsolateTime) Set Instance isolation time
 * @method integer getMemory() Obtain Instance memory size in GB
 * @method void setMemory(integer $Memory) Set Instance memory size in GB
 * @method integer getUsedStorage() Obtain Used storage capacity of instance in GB
 * @method void setUsedStorage(integer $UsedStorage) Set Used storage capacity of instance in GB
 * @method integer getStorage() Obtain Instance storage capacity in GB
 * @method void setStorage(integer $Storage) Set Instance storage capacity in GB
 * @method string getVersionName() Obtain Instance version
 * @method void setVersionName(string $VersionName) Set Instance version
 * @method integer getRenewFlag() Obtain Instance renewal flag
 * @method void setRenewFlag(integer $RenewFlag) Set Instance renewal flag
 * @method integer getModel() Obtain High-availability instance type. Valid values: 1 (dual-server high-availability), 2 (standalone), 3 (multi-AZ), 4 (multi-AZ cluster), 5 (cluster), 9 (private consumption)
 * @method void setModel(integer $Model) Set High-availability instance type. Valid values: 1 (dual-server high-availability), 2 (standalone), 3 (multi-AZ), 4 (multi-AZ cluster), 5 (cluster), 9 (private consumption)
 * @method string getRegion() Obtain Instance region name, such as ap-guangzhou
 * @method void setRegion(string $Region) Set Instance region name, such as ap-guangzhou
 * @method string getZone() Obtain Instance AZ name, such as ap-guangzhou-1
 * @method void setZone(string $Zone) Set Instance AZ name, such as ap-guangzhou-1
 * @method string getBackupTime() Obtain Backup time point
 * @method void setBackupTime(string $BackupTime) Set Backup time point
 * @method integer getPayMode() Obtain Instance billing mode. 0: pay-as-you-go
 * @method void setPayMode(integer $PayMode) Set Instance billing mode. 0: pay-as-you-go
 * @method string getUid() Obtain Instance UID
 * @method void setUid(string $Uid) Set Instance UID
 * @method integer getCpu() Obtain Number of CPU cores of instance
 * @method void setCpu(integer $Cpu) Set Number of CPU cores of instance
 * @method string getVersion() Obtain Instance version code
 * @method void setVersion(string $Version) Set Instance version code
 * @method string getType() Obtain Instance type. Valid values: `TS85` (physical machine, local SSD), `Z3` (early version of physical machine, local SSD), `CLOUD_BASIC` (virtual machine, HDD cloud disk), `CLOUD_PREMIUM` (virtual machine, premium cloud disk), `CLOUD_SSD` (virtual machine, SSD), `CLOUD_HSSD` (virtual machine, enhanced SSD), `CLOUD_TSSD` (virtual machine, ulTra SSD), `CLOUD_BSSD` virtual machine, balanced SSD).
 * @method void setType(string $Type) Set Instance type. Valid values: `TS85` (physical machine, local SSD), `Z3` (early version of physical machine, local SSD), `CLOUD_BASIC` (virtual machine, HDD cloud disk), `CLOUD_PREMIUM` (virtual machine, premium cloud disk), `CLOUD_SSD` (virtual machine, SSD), `CLOUD_HSSD` (virtual machine, enhanced SSD), `CLOUD_TSSD` (virtual machine, ulTra SSD), `CLOUD_BSSD` virtual machine, balanced SSD).
 * @method integer getPid() Obtain Billing ID
 * @method void setPid(integer $Pid) Set Billing ID
 * @method string getUniqVpcId() Obtain Unique string-type ID of instance VPC in the format of `vpc-xxx`, which is an empty string if the basic network is used
 * @method void setUniqVpcId(string $UniqVpcId) Set Unique string-type ID of instance VPC in the format of `vpc-xxx`, which is an empty string if the basic network is used
 * @method string getUniqSubnetId() Obtain Unique string-type ID of instance subnet in the format of `subnet-xxx`, which is an empty string if the basic network is used
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Unique string-type ID of instance subnet in the format of `subnet-xxx`, which is an empty string if the basic network is used
 * @method string getIsolateOperator() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolateOperator(string $IsolateOperator) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubFlag() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubFlag(string $SubFlag) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getROFlag() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setROFlag(string $ROFlag) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHAFlag() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHAFlag(string $HAFlag) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getResourceTags() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceTags(array $ResourceTags) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBackupModel() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupModel(string $BackupModel) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceNote() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceNote(string $InstanceNote) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBackupCycle() Obtain Backup cycle
 * @method void setBackupCycle(array $BackupCycle) Set Backup cycle
 * @method string getBackupCycleType() Obtain Backup cycle type. Valid values: `daily`, `weekly`, `monthly`.
 * @method void setBackupCycleType(string $BackupCycleType) Set Backup cycle type. Valid values: `daily`, `weekly`, `monthly`.
 * @method integer getBackupSaveDays() Obtain Data (log) backup retention period
 * @method void setBackupSaveDays(integer $BackupSaveDays) Set Data (log) backup retention period
 * @method string getInstanceType() Obtain Instance type. Valid values: `HA` (high-availability), `RO` (read-only), `SI` (basic edition), `BI` (business intelligence service).
 * @method void setInstanceType(string $InstanceType) Set Instance type. Valid values: `HA` (high-availability), `RO` (read-only), `SI` (basic edition), `BI` (business intelligence service).
 * @method array getCrossRegions() Obtain The target region of cross-region backup. If this parameter left empty, it indicates that cross-region backup is disabled.
 * @method void setCrossRegions(array $CrossRegions) Set The target region of cross-region backup. If this parameter left empty, it indicates that cross-region backup is disabled.
 * @method string getCrossBackupEnabled() Obtain Cross-region backup status. Valid values: `enable` (enabled), `disable` (disabed)
 * @method void setCrossBackupEnabled(string $CrossBackupEnabled) Set Cross-region backup status. Valid values: `enable` (enabled), `disable` (disabed)
 * @method integer getCrossBackupSaveDays() Obtain The retention period of cross-region backup. Default value: 7 days
 * @method void setCrossBackupSaveDays(integer $CrossBackupSaveDays) Set The retention period of cross-region backup. Default value: 7 days
 * @method string getDnsPodDomain() Obtain Domain name of the public network address
 * @method void setDnsPodDomain(string $DnsPodDomain) Set Domain name of the public network address
 * @method integer getTgwWanVPort() Obtain Port number of the public network
 * @method void setTgwWanVPort(integer $TgwWanVPort) Set Port number of the public network
 * @method string getCollation() Obtain Collation of system character sets. Default value: `Chinese_PRC_CI_AS`.
 * @method void setCollation(string $Collation) Set Collation of system character sets. Default value: `Chinese_PRC_CI_AS`.
 * @method string getTimeZone() Obtain System time zone. Default value: `China Standard Time`.
 * @method void setTimeZone(string $TimeZone) Set System time zone. Default value: `China Standard Time`.
 * @method boolean getIsDrZone() Obtain Whether the instance is deployed across AZs
 * @method void setIsDrZone(boolean $IsDrZone) Set Whether the instance is deployed across AZs
 * @method SlaveZones getSlaveZones() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSlaveZones(SlaveZones $SlaveZones) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getArchitecture() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setArchitecture(string $Architecture) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStyle() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStyle(string $Style) Set Note: This field may return null, indicating that no valid values can be obtained.
 */
class DBInstance extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $Name;

    /**
     * @var integer Project ID of instance
     */
    public $ProjectId;

    /**
     * @var integer Instance region ID
     */
    public $RegionId;

    /**
     * @var integer Instance AZ ID
     */
    public $ZoneId;

    /**
     * @var integer Instance VPC ID, which will be 0 if the basic network is used
     */
    public $VpcId;

    /**
     * @var integer Instance VPC subnet ID, which will be 0 if the basic network is used
     */
    public $SubnetId;

    /**
     * @var integer Instance status. Valid values: <li>1: creating</li> <li>2: running</li> <li>3: instance operations restricted (due to the ongoing primary-replica switch)</li> <li>4: isolated</li> <li>5: repossessing</li> <li>6: repossessed</li> <li>7: running tasks (such as backup and rollback tasks)</li> <li>8: eliminated</li> <li>9: expanding capacity</li> <li>10: migrating</li> <li>11: read-only</li> <li>12: restarting</li>  <li>13: modifying configuration and waiting for switch</li> <li>14: implementing pub/sub</li> <li>15: modifying pub/sub configuration</li> <li>16: modifying configuration and switching</li> <li>17: creating read-only instances</li>
     */
    public $Status;

    /**
     * @var string Instance access IP
     */
    public $Vip;

    /**
     * @var integer Instance access port
     */
    public $Vport;

    /**
     * @var string Instance creation time
     */
    public $CreateTime;

    /**
     * @var string Instance update time
     */
    public $UpdateTime;

    /**
     * @var string Instance billing start time
     */
    public $StartTime;

    /**
     * @var string Instance billing end time
     */
    public $EndTime;

    /**
     * @var string Instance isolation time
     */
    public $IsolateTime;

    /**
     * @var integer Instance memory size in GB
     */
    public $Memory;

    /**
     * @var integer Used storage capacity of instance in GB
     */
    public $UsedStorage;

    /**
     * @var integer Instance storage capacity in GB
     */
    public $Storage;

    /**
     * @var string Instance version
     */
    public $VersionName;

    /**
     * @var integer Instance renewal flag
     */
    public $RenewFlag;

    /**
     * @var integer High-availability instance type. Valid values: 1 (dual-server high-availability), 2 (standalone), 3 (multi-AZ), 4 (multi-AZ cluster), 5 (cluster), 9 (private consumption)
     */
    public $Model;

    /**
     * @var string Instance region name, such as ap-guangzhou
     */
    public $Region;

    /**
     * @var string Instance AZ name, such as ap-guangzhou-1
     */
    public $Zone;

    /**
     * @var string Backup time point
     */
    public $BackupTime;

    /**
     * @var integer Instance billing mode. 0: pay-as-you-go
     */
    public $PayMode;

    /**
     * @var string Instance UID
     */
    public $Uid;

    /**
     * @var integer Number of CPU cores of instance
     */
    public $Cpu;

    /**
     * @var string Instance version code
     */
    public $Version;

    /**
     * @var string Instance type. Valid values: `TS85` (physical machine, local SSD), `Z3` (early version of physical machine, local SSD), `CLOUD_BASIC` (virtual machine, HDD cloud disk), `CLOUD_PREMIUM` (virtual machine, premium cloud disk), `CLOUD_SSD` (virtual machine, SSD), `CLOUD_HSSD` (virtual machine, enhanced SSD), `CLOUD_TSSD` (virtual machine, ulTra SSD), `CLOUD_BSSD` virtual machine, balanced SSD).
     */
    public $Type;

    /**
     * @var integer Billing ID
     */
    public $Pid;

    /**
     * @var string Unique string-type ID of instance VPC in the format of `vpc-xxx`, which is an empty string if the basic network is used
     */
    public $UniqVpcId;

    /**
     * @var string Unique string-type ID of instance subnet in the format of `subnet-xxx`, which is an empty string if the basic network is used
     */
    public $UniqSubnetId;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsolateOperator;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubFlag;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ROFlag;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HAFlag;

    /**
     * @var array Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceTags;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupModel;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceNote;

    /**
     * @var array Backup cycle
     */
    public $BackupCycle;

    /**
     * @var string Backup cycle type. Valid values: `daily`, `weekly`, `monthly`.
     */
    public $BackupCycleType;

    /**
     * @var integer Data (log) backup retention period
     */
    public $BackupSaveDays;

    /**
     * @var string Instance type. Valid values: `HA` (high-availability), `RO` (read-only), `SI` (basic edition), `BI` (business intelligence service).
     */
    public $InstanceType;

    /**
     * @var array The target region of cross-region backup. If this parameter left empty, it indicates that cross-region backup is disabled.
     */
    public $CrossRegions;

    /**
     * @var string Cross-region backup status. Valid values: `enable` (enabled), `disable` (disabed)
     */
    public $CrossBackupEnabled;

    /**
     * @var integer The retention period of cross-region backup. Default value: 7 days
     */
    public $CrossBackupSaveDays;

    /**
     * @var string Domain name of the public network address
     */
    public $DnsPodDomain;

    /**
     * @var integer Port number of the public network
     */
    public $TgwWanVPort;

    /**
     * @var string Collation of system character sets. Default value: `Chinese_PRC_CI_AS`.
     */
    public $Collation;

    /**
     * @var string System time zone. Default value: `China Standard Time`.
     */
    public $TimeZone;

    /**
     * @var boolean Whether the instance is deployed across AZs
     */
    public $IsDrZone;

    /**
     * @var SlaveZones Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SlaveZones;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Architecture;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Style;

    /**
     * @param string $InstanceId Instance ID
     * @param string $Name Instance name
     * @param integer $ProjectId Project ID of instance
     * @param integer $RegionId Instance region ID
     * @param integer $ZoneId Instance AZ ID
     * @param integer $VpcId Instance VPC ID, which will be 0 if the basic network is used
     * @param integer $SubnetId Instance VPC subnet ID, which will be 0 if the basic network is used
     * @param integer $Status Instance status. Valid values: <li>1: creating</li> <li>2: running</li> <li>3: instance operations restricted (due to the ongoing primary-replica switch)</li> <li>4: isolated</li> <li>5: repossessing</li> <li>6: repossessed</li> <li>7: running tasks (such as backup and rollback tasks)</li> <li>8: eliminated</li> <li>9: expanding capacity</li> <li>10: migrating</li> <li>11: read-only</li> <li>12: restarting</li>  <li>13: modifying configuration and waiting for switch</li> <li>14: implementing pub/sub</li> <li>15: modifying pub/sub configuration</li> <li>16: modifying configuration and switching</li> <li>17: creating read-only instances</li>
     * @param string $Vip Instance access IP
     * @param integer $Vport Instance access port
     * @param string $CreateTime Instance creation time
     * @param string $UpdateTime Instance update time
     * @param string $StartTime Instance billing start time
     * @param string $EndTime Instance billing end time
     * @param string $IsolateTime Instance isolation time
     * @param integer $Memory Instance memory size in GB
     * @param integer $UsedStorage Used storage capacity of instance in GB
     * @param integer $Storage Instance storage capacity in GB
     * @param string $VersionName Instance version
     * @param integer $RenewFlag Instance renewal flag
     * @param integer $Model High-availability instance type. Valid values: 1 (dual-server high-availability), 2 (standalone), 3 (multi-AZ), 4 (multi-AZ cluster), 5 (cluster), 9 (private consumption)
     * @param string $Region Instance region name, such as ap-guangzhou
     * @param string $Zone Instance AZ name, such as ap-guangzhou-1
     * @param string $BackupTime Backup time point
     * @param integer $PayMode Instance billing mode. 0: pay-as-you-go
     * @param string $Uid Instance UID
     * @param integer $Cpu Number of CPU cores of instance
     * @param string $Version Instance version code
     * @param string $Type Instance type. Valid values: `TS85` (physical machine, local SSD), `Z3` (early version of physical machine, local SSD), `CLOUD_BASIC` (virtual machine, HDD cloud disk), `CLOUD_PREMIUM` (virtual machine, premium cloud disk), `CLOUD_SSD` (virtual machine, SSD), `CLOUD_HSSD` (virtual machine, enhanced SSD), `CLOUD_TSSD` (virtual machine, ulTra SSD), `CLOUD_BSSD` virtual machine, balanced SSD).
     * @param integer $Pid Billing ID
     * @param string $UniqVpcId Unique string-type ID of instance VPC in the format of `vpc-xxx`, which is an empty string if the basic network is used
     * @param string $UniqSubnetId Unique string-type ID of instance subnet in the format of `subnet-xxx`, which is an empty string if the basic network is used
     * @param string $IsolateOperator Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubFlag Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ROFlag Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HAFlag Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ResourceTags Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BackupModel Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceNote Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BackupCycle Backup cycle
     * @param string $BackupCycleType Backup cycle type. Valid values: `daily`, `weekly`, `monthly`.
     * @param integer $BackupSaveDays Data (log) backup retention period
     * @param string $InstanceType Instance type. Valid values: `HA` (high-availability), `RO` (read-only), `SI` (basic edition), `BI` (business intelligence service).
     * @param array $CrossRegions The target region of cross-region backup. If this parameter left empty, it indicates that cross-region backup is disabled.
     * @param string $CrossBackupEnabled Cross-region backup status. Valid values: `enable` (enabled), `disable` (disabed)
     * @param integer $CrossBackupSaveDays The retention period of cross-region backup. Default value: 7 days
     * @param string $DnsPodDomain Domain name of the public network address
     * @param integer $TgwWanVPort Port number of the public network
     * @param string $Collation Collation of system character sets. Default value: `Chinese_PRC_CI_AS`.
     * @param string $TimeZone System time zone. Default value: `China Standard Time`.
     * @param boolean $IsDrZone Whether the instance is deployed across AZs
     * @param SlaveZones $SlaveZones Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Architecture Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Style Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("UsedStorage",$param) and $param["UsedStorage"] !== null) {
            $this->UsedStorage = $param["UsedStorage"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("IsolateOperator",$param) and $param["IsolateOperator"] !== null) {
            $this->IsolateOperator = $param["IsolateOperator"];
        }

        if (array_key_exists("SubFlag",$param) and $param["SubFlag"] !== null) {
            $this->SubFlag = $param["SubFlag"];
        }

        if (array_key_exists("ROFlag",$param) and $param["ROFlag"] !== null) {
            $this->ROFlag = $param["ROFlag"];
        }

        if (array_key_exists("HAFlag",$param) and $param["HAFlag"] !== null) {
            $this->HAFlag = $param["HAFlag"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("BackupModel",$param) and $param["BackupModel"] !== null) {
            $this->BackupModel = $param["BackupModel"];
        }

        if (array_key_exists("InstanceNote",$param) and $param["InstanceNote"] !== null) {
            $this->InstanceNote = $param["InstanceNote"];
        }

        if (array_key_exists("BackupCycle",$param) and $param["BackupCycle"] !== null) {
            $this->BackupCycle = $param["BackupCycle"];
        }

        if (array_key_exists("BackupCycleType",$param) and $param["BackupCycleType"] !== null) {
            $this->BackupCycleType = $param["BackupCycleType"];
        }

        if (array_key_exists("BackupSaveDays",$param) and $param["BackupSaveDays"] !== null) {
            $this->BackupSaveDays = $param["BackupSaveDays"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("CrossRegions",$param) and $param["CrossRegions"] !== null) {
            $this->CrossRegions = $param["CrossRegions"];
        }

        if (array_key_exists("CrossBackupEnabled",$param) and $param["CrossBackupEnabled"] !== null) {
            $this->CrossBackupEnabled = $param["CrossBackupEnabled"];
        }

        if (array_key_exists("CrossBackupSaveDays",$param) and $param["CrossBackupSaveDays"] !== null) {
            $this->CrossBackupSaveDays = $param["CrossBackupSaveDays"];
        }

        if (array_key_exists("DnsPodDomain",$param) and $param["DnsPodDomain"] !== null) {
            $this->DnsPodDomain = $param["DnsPodDomain"];
        }

        if (array_key_exists("TgwWanVPort",$param) and $param["TgwWanVPort"] !== null) {
            $this->TgwWanVPort = $param["TgwWanVPort"];
        }

        if (array_key_exists("Collation",$param) and $param["Collation"] !== null) {
            $this->Collation = $param["Collation"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("IsDrZone",$param) and $param["IsDrZone"] !== null) {
            $this->IsDrZone = $param["IsDrZone"];
        }

        if (array_key_exists("SlaveZones",$param) and $param["SlaveZones"] !== null) {
            $this->SlaveZones = new SlaveZones();
            $this->SlaveZones->deserialize($param["SlaveZones"]);
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }
    }
}
