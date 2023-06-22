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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The details of a cloud disk
 *
 * @method boolean getDeleteWithInstance() Obtain Whether the cloud disk terminates along with the instance mounted to it. <br><li>true: Cloud disk will also be terminated when instance terminates, so only hourly postpaid cloud disk are supported.<br><li>false: Cloud disk does not terminate when instance terminates.
Note: This field may return null, indicating that no valid value was found.
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) Set Whether the cloud disk terminates along with the instance mounted to it. <br><li>true: Cloud disk will also be terminated when instance terminates, so only hourly postpaid cloud disk are supported.<br><li>false: Cloud disk does not terminate when instance terminates.
Note: This field may return null, indicating that no valid value was found.
 * @method string getRenewFlag() Obtain Auto renewal flag. Supported values:<br><li>NOTIFY_AND_AUTO_RENEW: Notify expiry and renew automatically<br><li>NOTIFY_AND_MANUAL_RENEW: Notify expiry but not renew automatically<br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify expiry nor renew automatically.
Note: This field may return null, indicating that no valid value was found.
 * @method void setRenewFlag(string $RenewFlag) Set Auto renewal flag. Supported values:<br><li>NOTIFY_AND_AUTO_RENEW: Notify expiry and renew automatically<br><li>NOTIFY_AND_MANUAL_RENEW: Notify expiry but not renew automatically<br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify expiry nor renew automatically.
Note: This field may return null, indicating that no valid value was found.
 * @method string getDiskType() Obtain Cloud disk types. Valid values: <br><li>CLOUD_BASIC: HDD cloud disk <br><li>CLOUD_PREMIUM: Premium Cloud Disk <br><li>CLOUD_BSSD: General Purpose SSD <br><li>CLOUD_SSD: SSD <br><li>CLOUD_HSSD: Enhanced SSD <br><li>CLOUD_TSSD: Tremendous SSD
 * @method void setDiskType(string $DiskType) Set Cloud disk types. Valid values: <br><li>CLOUD_BASIC: HDD cloud disk <br><li>CLOUD_PREMIUM: Premium Cloud Disk <br><li>CLOUD_BSSD: General Purpose SSD <br><li>CLOUD_SSD: SSD <br><li>CLOUD_HSSD: Enhanced SSD <br><li>CLOUD_TSSD: Tremendous SSD
 * @method string getDiskState() Obtain The state of the cloud disk. Value range: <br><li>UNATTACHED: Not mounted <br><li>ATTACHING: Mounting <br><li>ATTACHED: Mounted <br><li>DETACHING: Un-mounting <br><li>EXPANDING: Expanding <br><li>ROLLBACKING: Rolling back <br><li>TORECYCE: Pending recycling. <br><li>DUMPING: Copying the hard drive.
 * @method void setDiskState(string $DiskState) Set The state of the cloud disk. Value range: <br><li>UNATTACHED: Not mounted <br><li>ATTACHING: Mounting <br><li>ATTACHED: Mounted <br><li>DETACHING: Un-mounting <br><li>EXPANDING: Expanding <br><li>ROLLBACKING: Rolling back <br><li>TORECYCE: Pending recycling. <br><li>DUMPING: Copying the hard drive.
 * @method integer getSnapshotCount() Obtain The total number of snapshots of the cloud disk.
 * @method void setSnapshotCount(integer $SnapshotCount) Set The total number of snapshots of the cloud disk.
 * @method boolean getAutoRenewFlagError() Obtain Cloud disk already mounted to CVM, and both CVM and cloud disk use monthly subscription.<br><li>true: CVM has auto-renewal flag set up, but cloud disk does not.<br><li>false: Cloud disk auto-renewal flag set up normally.
Note: This field may return null, indicating that no valid value was found.
 * @method void setAutoRenewFlagError(boolean $AutoRenewFlagError) Set Cloud disk already mounted to CVM, and both CVM and cloud disk use monthly subscription.<br><li>true: CVM has auto-renewal flag set up, but cloud disk does not.<br><li>false: Cloud disk auto-renewal flag set up normally.
Note: This field may return null, indicating that no valid value was found.
 * @method boolean getRollbacking() Obtain Whether the cloud disk is in the status of snapshot rollback. Value range: <br><li>false: No <br><li>true: Yes
 * @method void setRollbacking(boolean $Rollbacking) Set Whether the cloud disk is in the status of snapshot rollback. Value range: <br><li>false: No <br><li>true: Yes
 * @method array getInstanceIdList() Obtain For non-shareable cloud disks, this parameter is null. For shareable cloud disks, this parameters indicates this cloud disk's Instance IDs currently mounted to the CVM.
 * @method void setInstanceIdList(array $InstanceIdList) Set For non-shareable cloud disks, this parameter is null. For shareable cloud disks, this parameters indicates this cloud disk's Instance IDs currently mounted to the CVM.
 * @method boolean getEncrypt() Obtain Whether the cloud disk is encrypted. Value range: <br><li>false: Not encrypted <br><li>true: Encrypted.
 * @method void setEncrypt(boolean $Encrypt) Set Whether the cloud disk is encrypted. Value range: <br><li>false: Not encrypted <br><li>true: Encrypted.
 * @method string getDiskName() Obtain Cloud disk name.
 * @method void setDiskName(string $DiskName) Set Cloud disk name.
 * @method boolean getBackupDisk() Obtain Specifies whether to create a snapshot when the cloud disk is terminated due to overdue payment or expiration. `true`: create snapshot; `false`: do not create snapshot.
 * @method void setBackupDisk(boolean $BackupDisk) Set Specifies whether to create a snapshot when the cloud disk is terminated due to overdue payment or expiration. `true`: create snapshot; `false`: do not create snapshot.
 * @method array getTags() Obtain The tag bound to the cloud disk. The value Null is used when no tag is bound to the cloud disk.
Note: This field may return null, indicating that no valid value was found.
 * @method void setTags(array $Tags) Set The tag bound to the cloud disk. The value Null is used when no tag is bound to the cloud disk.
Note: This field may return null, indicating that no valid value was found.
 * @method string getInstanceId() Obtain ID of the CVM to which the cloud disk is mounted.
 * @method void setInstanceId(string $InstanceId) Set ID of the CVM to which the cloud disk is mounted.
 * @method string getAttachMode() Obtain Cloud disk mount method. Valid values: <br><li>PF: mount as a PF (Physical Function)<br><li>VF: mount as a VF (Virtual Function)
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setAttachMode(string $AttachMode) Set Cloud disk mount method. Valid values: <br><li>PF: mount as a PF (Physical Function)<br><li>VF: mount as a VF (Virtual Function)
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getAutoSnapshotPolicyIds() Obtain ID of the periodic snapshot associated to the cloud disk. This parameter is returned only if the value of parameter ReturnBindAutoSnapshotPolicy is TRUE when the API DescribeDisks is called.
Note: This field may return null, indicating that no valid value was found.
 * @method void setAutoSnapshotPolicyIds(array $AutoSnapshotPolicyIds) Set ID of the periodic snapshot associated to the cloud disk. This parameter is returned only if the value of parameter ReturnBindAutoSnapshotPolicy is TRUE when the API DescribeDisks is called.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getThroughputPerformance() Obtain Extra performance for a cloud disk, in MB/sec.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setThroughputPerformance(integer $ThroughputPerformance) Set Extra performance for a cloud disk, in MB/sec.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getMigrating() Obtain Whether cloud disk is in process of type change. Value range: <br><li>false: Cloud disk not in process of type change. <br><li>true: Cloud disk type change has been launched, and migration is in process.
Note: This field may return null, indicating that no valid value was found.
 * @method void setMigrating(boolean $Migrating) Set Whether cloud disk is in process of type change. Value range: <br><li>false: Cloud disk not in process of type change. <br><li>true: Cloud disk type change has been launched, and migration is in process.
Note: This field may return null, indicating that no valid value was found.
 * @method string getDiskId() Obtain Cloud disk ID.
 * @method void setDiskId(string $DiskId) Set Cloud disk ID.
 * @method integer getSnapshotSize() Obtain The total capacity of the snapshots of the cloud disk. Unit: MB.
 * @method void setSnapshotSize(integer $SnapshotSize) Set The total capacity of the snapshots of the cloud disk. Unit: MB.
 * @method Placement getPlacement() Obtain Location of the cloud disk.
 * @method void setPlacement(Placement $Placement) Set Location of the cloud disk.
 * @method boolean getIsReturnable() Obtain Determines whether or not prepaid cloud disk supports active return. <br><li>true: Active return supported.<br><li>false: Active return not supported.
Note: This field may return null, indicating that no valid value was found.
 * @method void setIsReturnable(boolean $IsReturnable) Set Determines whether or not prepaid cloud disk supports active return. <br><li>true: Active return supported.<br><li>false: Active return not supported.
Note: This field may return null, indicating that no valid value was found.
 * @method string getDeadlineTime() Obtain Expiration time of the cloud disk.
 * @method void setDeadlineTime(string $DeadlineTime) Set Expiration time of the cloud disk.
 * @method boolean getAttached() Obtain Whether the cloud disk is mounted to the CVM. Value range: <br><li>false: Unmounted <br><li>true: Mounted.
 * @method void setAttached(boolean $Attached) Set Whether the cloud disk is mounted to the CVM. Value range: <br><li>false: Unmounted <br><li>true: Mounted.
 * @method integer getDiskSize() Obtain Cloud disk size (in GB).
 * @method void setDiskSize(integer $DiskSize) Set Cloud disk size (in GB).
 * @method integer getMigratePercent() Obtain Migration progress of cloud disk type change, from 0 to 100.
Note: This field may return null, indicating that no valid value was found.
 * @method void setMigratePercent(integer $MigratePercent) Set Migration progress of cloud disk type change, from 0 to 100.
Note: This field may return null, indicating that no valid value was found.
 * @method string getDiskUsage() Obtain Cloud disk type. Value range:<br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
 * @method void setDiskUsage(string $DiskUsage) Set Cloud disk type. Value range:<br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
 * @method string getDiskChargeType() Obtain Billing method. Value range: <br><li>PREPAID: Prepaid, that is, monthly subscription<br><li>POSTPAID_BY_HOUR: Postpaid, that is, pay as you go.
 * @method void setDiskChargeType(string $DiskChargeType) Set Billing method. Value range: <br><li>PREPAID: Prepaid, that is, monthly subscription<br><li>POSTPAID_BY_HOUR: Postpaid, that is, pay as you go.
 * @method boolean getPortable() Obtain Whether it is an elastic cloud disk. false: Non-elastic cloud disk; true: Elastic cloud disk.
 * @method void setPortable(boolean $Portable) Set Whether it is an elastic cloud disk. false: Non-elastic cloud disk; true: Elastic cloud disk.
 * @method boolean getSnapshotAbility() Obtain Whether the cloud disk has the capability to create snapshots. Value range: <br><li>false: Cannot create snapshots. true: Can create snapshots.
 * @method void setSnapshotAbility(boolean $SnapshotAbility) Set Whether the cloud disk has the capability to create snapshots. Value range: <br><li>false: Cannot create snapshots. true: Can create snapshots.
 * @method boolean getDeadlineError() Obtain This field is only applicable when the instance is already mounted to the cloud disk, and both the instance and the cloud disk use monthly subscription. <br><li>true: Expiration time of cloud disk is earlier than that of the instance.<br><li>false:Expiration time of cloud disk is later than that of the instance.
Note: This field may return null, indicating that no valid value was found.
 * @method void setDeadlineError(boolean $DeadlineError) Set This field is only applicable when the instance is already mounted to the cloud disk, and both the instance and the cloud disk use monthly subscription. <br><li>true: Expiration time of cloud disk is earlier than that of the instance.<br><li>false:Expiration time of cloud disk is later than that of the instance.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getRollbackPercent() Obtain Rollback progress of a cloud disk snapshot.
 * @method void setRollbackPercent(integer $RollbackPercent) Set Rollback progress of a cloud disk snapshot.
 * @method integer getDifferDaysOfDeadline() Obtain Number of days from current time until disk expiration (only applicable for prepaid disks).
Note: This field may return null, indicating that no valid value was found.
 * @method void setDifferDaysOfDeadline(integer $DifferDaysOfDeadline) Set Number of days from current time until disk expiration (only applicable for prepaid disks).
Note: This field may return null, indicating that no valid value was found.
 * @method integer getReturnFailCode() Obtain In circumstances where the prepaid cloud disk does not support active return, this parameter indicates the reason that return is not supported. Value range: <br><li>1: The cloud disk has already been returned. <br><li>2: The cloud disk has already expired. <br><li>3: The cloud disk does not support return. <br><li> 8: The limit on the number of returns is exceeded.
Note: This field may return null, indicating that no valid value was found.
 * @method void setReturnFailCode(integer $ReturnFailCode) Set In circumstances where the prepaid cloud disk does not support active return, this parameter indicates the reason that return is not supported. Value range: <br><li>1: The cloud disk has already been returned. <br><li>2: The cloud disk has already expired. <br><li>3: The cloud disk does not support return. <br><li> 8: The limit on the number of returns is exceeded.
Note: This field may return null, indicating that no valid value was found.
 * @method boolean getShareable() Obtain Whether or not cloud disk is shareable cloud disk.
 * @method void setShareable(boolean $Shareable) Set Whether or not cloud disk is shareable cloud disk.
 * @method string getCreateTime() Obtain Creation time of the cloud disk.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the cloud disk.
 * @method integer getDeleteSnapshot() Obtain Delete the associated non-permanently reserved snapshots upon deletion of the source cloud disk. `0`: No (default). `1`: Yes. To check whether a snapshot is permanently reserved, refer to the `IsPermanent` field returned by the `DescribeSnapshots` API. 
 * @method void setDeleteSnapshot(integer $DeleteSnapshot) Set Delete the associated non-permanently reserved snapshots upon deletion of the source cloud disk. `0`: No (default). `1`: Yes. To check whether a snapshot is permanently reserved, refer to the `IsPermanent` field returned by the `DescribeSnapshots` API. 
 * @method integer getDiskBackupQuota() Obtain Quota of cloud disk backup points, i.e., the maximum number of backup points that a cloud disk can have.
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) Set Quota of cloud disk backup points, i.e., the maximum number of backup points that a cloud disk can have.
 * @method integer getDiskBackupCount() Obtain Number of used cloud disk backups.
 * @method void setDiskBackupCount(integer $DiskBackupCount) Set Number of used cloud disk backups.
 * @method string getInstanceType() Obtain Type of the instance mounted to the cloud disk. Valid values: <br><li>CVM<br><li>EKS
 * @method void setInstanceType(string $InstanceType) Set Type of the instance mounted to the cloud disk. Valid values: <br><li>CVM<br><li>EKS
 * @method string getLastAttachInsId() Obtain ID of the last instance to which the cloud disk is attached
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastAttachInsId(string $LastAttachInsId) Set ID of the last instance to which the cloud disk is attached
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorPrompt() Obtain Error message for the last operation of the cloud disk
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorPrompt(string $ErrorPrompt) Set Error message for the last operation of the cloud disk
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getBurstPerformance() Obtain Whether the cloud disk has enabled disk bursting. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBurstPerformance(boolean $BurstPerformance) Set Whether the cloud disk has enabled disk bursting. Note: This field may return null, indicating that no valid values can be obtained.
 */
class Disk extends AbstractModel
{
    /**
     * @var boolean Whether the cloud disk terminates along with the instance mounted to it. <br><li>true: Cloud disk will also be terminated when instance terminates, so only hourly postpaid cloud disk are supported.<br><li>false: Cloud disk does not terminate when instance terminates.
Note: This field may return null, indicating that no valid value was found.
     */
    public $DeleteWithInstance;

    /**
     * @var string Auto renewal flag. Supported values:<br><li>NOTIFY_AND_AUTO_RENEW: Notify expiry and renew automatically<br><li>NOTIFY_AND_MANUAL_RENEW: Notify expiry but not renew automatically<br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify expiry nor renew automatically.
Note: This field may return null, indicating that no valid value was found.
     */
    public $RenewFlag;

    /**
     * @var string Cloud disk types. Valid values: <br><li>CLOUD_BASIC: HDD cloud disk <br><li>CLOUD_PREMIUM: Premium Cloud Disk <br><li>CLOUD_BSSD: General Purpose SSD <br><li>CLOUD_SSD: SSD <br><li>CLOUD_HSSD: Enhanced SSD <br><li>CLOUD_TSSD: Tremendous SSD
     */
    public $DiskType;

    /**
     * @var string The state of the cloud disk. Value range: <br><li>UNATTACHED: Not mounted <br><li>ATTACHING: Mounting <br><li>ATTACHED: Mounted <br><li>DETACHING: Un-mounting <br><li>EXPANDING: Expanding <br><li>ROLLBACKING: Rolling back <br><li>TORECYCE: Pending recycling. <br><li>DUMPING: Copying the hard drive.
     */
    public $DiskState;

    /**
     * @var integer The total number of snapshots of the cloud disk.
     */
    public $SnapshotCount;

    /**
     * @var boolean Cloud disk already mounted to CVM, and both CVM and cloud disk use monthly subscription.<br><li>true: CVM has auto-renewal flag set up, but cloud disk does not.<br><li>false: Cloud disk auto-renewal flag set up normally.
Note: This field may return null, indicating that no valid value was found.
     */
    public $AutoRenewFlagError;

    /**
     * @var boolean Whether the cloud disk is in the status of snapshot rollback. Value range: <br><li>false: No <br><li>true: Yes
     */
    public $Rollbacking;

    /**
     * @var array For non-shareable cloud disks, this parameter is null. For shareable cloud disks, this parameters indicates this cloud disk's Instance IDs currently mounted to the CVM.
     */
    public $InstanceIdList;

    /**
     * @var boolean Whether the cloud disk is encrypted. Value range: <br><li>false: Not encrypted <br><li>true: Encrypted.
     */
    public $Encrypt;

    /**
     * @var string Cloud disk name.
     */
    public $DiskName;

    /**
     * @var boolean Specifies whether to create a snapshot when the cloud disk is terminated due to overdue payment or expiration. `true`: create snapshot; `false`: do not create snapshot.
     */
    public $BackupDisk;

    /**
     * @var array The tag bound to the cloud disk. The value Null is used when no tag is bound to the cloud disk.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Tags;

    /**
     * @var string ID of the CVM to which the cloud disk is mounted.
     */
    public $InstanceId;

    /**
     * @var string Cloud disk mount method. Valid values: <br><li>PF: mount as a PF (Physical Function)<br><li>VF: mount as a VF (Virtual Function)
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $AttachMode;

    /**
     * @var array ID of the periodic snapshot associated to the cloud disk. This parameter is returned only if the value of parameter ReturnBindAutoSnapshotPolicy is TRUE when the API DescribeDisks is called.
Note: This field may return null, indicating that no valid value was found.
     */
    public $AutoSnapshotPolicyIds;

    /**
     * @var integer Extra performance for a cloud disk, in MB/sec.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ThroughputPerformance;

    /**
     * @var boolean Whether cloud disk is in process of type change. Value range: <br><li>false: Cloud disk not in process of type change. <br><li>true: Cloud disk type change has been launched, and migration is in process.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Migrating;

    /**
     * @var string Cloud disk ID.
     */
    public $DiskId;

    /**
     * @var integer The total capacity of the snapshots of the cloud disk. Unit: MB.
     */
    public $SnapshotSize;

    /**
     * @var Placement Location of the cloud disk.
     */
    public $Placement;

    /**
     * @var boolean Determines whether or not prepaid cloud disk supports active return. <br><li>true: Active return supported.<br><li>false: Active return not supported.
Note: This field may return null, indicating that no valid value was found.
     */
    public $IsReturnable;

    /**
     * @var string Expiration time of the cloud disk.
     */
    public $DeadlineTime;

    /**
     * @var boolean Whether the cloud disk is mounted to the CVM. Value range: <br><li>false: Unmounted <br><li>true: Mounted.
     */
    public $Attached;

    /**
     * @var integer Cloud disk size (in GB).
     */
    public $DiskSize;

    /**
     * @var integer Migration progress of cloud disk type change, from 0 to 100.
Note: This field may return null, indicating that no valid value was found.
     */
    public $MigratePercent;

    /**
     * @var string Cloud disk type. Value range:<br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
     */
    public $DiskUsage;

    /**
     * @var string Billing method. Value range: <br><li>PREPAID: Prepaid, that is, monthly subscription<br><li>POSTPAID_BY_HOUR: Postpaid, that is, pay as you go.
     */
    public $DiskChargeType;

    /**
     * @var boolean Whether it is an elastic cloud disk. false: Non-elastic cloud disk; true: Elastic cloud disk.
     */
    public $Portable;

    /**
     * @var boolean Whether the cloud disk has the capability to create snapshots. Value range: <br><li>false: Cannot create snapshots. true: Can create snapshots.
     */
    public $SnapshotAbility;

    /**
     * @var boolean This field is only applicable when the instance is already mounted to the cloud disk, and both the instance and the cloud disk use monthly subscription. <br><li>true: Expiration time of cloud disk is earlier than that of the instance.<br><li>false:Expiration time of cloud disk is later than that of the instance.
Note: This field may return null, indicating that no valid value was found.
     */
    public $DeadlineError;

    /**
     * @var integer Rollback progress of a cloud disk snapshot.
     */
    public $RollbackPercent;

    /**
     * @var integer Number of days from current time until disk expiration (only applicable for prepaid disks).
Note: This field may return null, indicating that no valid value was found.
     */
    public $DifferDaysOfDeadline;

    /**
     * @var integer In circumstances where the prepaid cloud disk does not support active return, this parameter indicates the reason that return is not supported. Value range: <br><li>1: The cloud disk has already been returned. <br><li>2: The cloud disk has already expired. <br><li>3: The cloud disk does not support return. <br><li> 8: The limit on the number of returns is exceeded.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ReturnFailCode;

    /**
     * @var boolean Whether or not cloud disk is shareable cloud disk.
     */
    public $Shareable;

    /**
     * @var string Creation time of the cloud disk.
     */
    public $CreateTime;

    /**
     * @var integer Delete the associated non-permanently reserved snapshots upon deletion of the source cloud disk. `0`: No (default). `1`: Yes. To check whether a snapshot is permanently reserved, refer to the `IsPermanent` field returned by the `DescribeSnapshots` API. 
     */
    public $DeleteSnapshot;

    /**
     * @var integer Quota of cloud disk backup points, i.e., the maximum number of backup points that a cloud disk can have.
     */
    public $DiskBackupQuota;

    /**
     * @var integer Number of used cloud disk backups.
     */
    public $DiskBackupCount;

    /**
     * @var string Type of the instance mounted to the cloud disk. Valid values: <br><li>CVM<br><li>EKS
     */
    public $InstanceType;

    /**
     * @var string ID of the last instance to which the cloud disk is attached
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastAttachInsId;

    /**
     * @var string Error message for the last operation of the cloud disk
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorPrompt;

    /**
     * @var boolean Whether the cloud disk has enabled disk bursting. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BurstPerformance;

    /**
     * @param boolean $DeleteWithInstance Whether the cloud disk terminates along with the instance mounted to it. <br><li>true: Cloud disk will also be terminated when instance terminates, so only hourly postpaid cloud disk are supported.<br><li>false: Cloud disk does not terminate when instance terminates.
Note: This field may return null, indicating that no valid value was found.
     * @param string $RenewFlag Auto renewal flag. Supported values:<br><li>NOTIFY_AND_AUTO_RENEW: Notify expiry and renew automatically<br><li>NOTIFY_AND_MANUAL_RENEW: Notify expiry but not renew automatically<br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify expiry nor renew automatically.
Note: This field may return null, indicating that no valid value was found.
     * @param string $DiskType Cloud disk types. Valid values: <br><li>CLOUD_BASIC: HDD cloud disk <br><li>CLOUD_PREMIUM: Premium Cloud Disk <br><li>CLOUD_BSSD: General Purpose SSD <br><li>CLOUD_SSD: SSD <br><li>CLOUD_HSSD: Enhanced SSD <br><li>CLOUD_TSSD: Tremendous SSD
     * @param string $DiskState The state of the cloud disk. Value range: <br><li>UNATTACHED: Not mounted <br><li>ATTACHING: Mounting <br><li>ATTACHED: Mounted <br><li>DETACHING: Un-mounting <br><li>EXPANDING: Expanding <br><li>ROLLBACKING: Rolling back <br><li>TORECYCE: Pending recycling. <br><li>DUMPING: Copying the hard drive.
     * @param integer $SnapshotCount The total number of snapshots of the cloud disk.
     * @param boolean $AutoRenewFlagError Cloud disk already mounted to CVM, and both CVM and cloud disk use monthly subscription.<br><li>true: CVM has auto-renewal flag set up, but cloud disk does not.<br><li>false: Cloud disk auto-renewal flag set up normally.
Note: This field may return null, indicating that no valid value was found.
     * @param boolean $Rollbacking Whether the cloud disk is in the status of snapshot rollback. Value range: <br><li>false: No <br><li>true: Yes
     * @param array $InstanceIdList For non-shareable cloud disks, this parameter is null. For shareable cloud disks, this parameters indicates this cloud disk's Instance IDs currently mounted to the CVM.
     * @param boolean $Encrypt Whether the cloud disk is encrypted. Value range: <br><li>false: Not encrypted <br><li>true: Encrypted.
     * @param string $DiskName Cloud disk name.
     * @param boolean $BackupDisk Specifies whether to create a snapshot when the cloud disk is terminated due to overdue payment or expiration. `true`: create snapshot; `false`: do not create snapshot.
     * @param array $Tags The tag bound to the cloud disk. The value Null is used when no tag is bound to the cloud disk.
Note: This field may return null, indicating that no valid value was found.
     * @param string $InstanceId ID of the CVM to which the cloud disk is mounted.
     * @param string $AttachMode Cloud disk mount method. Valid values: <br><li>PF: mount as a PF (Physical Function)<br><li>VF: mount as a VF (Virtual Function)
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $AutoSnapshotPolicyIds ID of the periodic snapshot associated to the cloud disk. This parameter is returned only if the value of parameter ReturnBindAutoSnapshotPolicy is TRUE when the API DescribeDisks is called.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $ThroughputPerformance Extra performance for a cloud disk, in MB/sec.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $Migrating Whether cloud disk is in process of type change. Value range: <br><li>false: Cloud disk not in process of type change. <br><li>true: Cloud disk type change has been launched, and migration is in process.
Note: This field may return null, indicating that no valid value was found.
     * @param string $DiskId Cloud disk ID.
     * @param integer $SnapshotSize The total capacity of the snapshots of the cloud disk. Unit: MB.
     * @param Placement $Placement Location of the cloud disk.
     * @param boolean $IsReturnable Determines whether or not prepaid cloud disk supports active return. <br><li>true: Active return supported.<br><li>false: Active return not supported.
Note: This field may return null, indicating that no valid value was found.
     * @param string $DeadlineTime Expiration time of the cloud disk.
     * @param boolean $Attached Whether the cloud disk is mounted to the CVM. Value range: <br><li>false: Unmounted <br><li>true: Mounted.
     * @param integer $DiskSize Cloud disk size (in GB).
     * @param integer $MigratePercent Migration progress of cloud disk type change, from 0 to 100.
Note: This field may return null, indicating that no valid value was found.
     * @param string $DiskUsage Cloud disk type. Value range:<br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
     * @param string $DiskChargeType Billing method. Value range: <br><li>PREPAID: Prepaid, that is, monthly subscription<br><li>POSTPAID_BY_HOUR: Postpaid, that is, pay as you go.
     * @param boolean $Portable Whether it is an elastic cloud disk. false: Non-elastic cloud disk; true: Elastic cloud disk.
     * @param boolean $SnapshotAbility Whether the cloud disk has the capability to create snapshots. Value range: <br><li>false: Cannot create snapshots. true: Can create snapshots.
     * @param boolean $DeadlineError This field is only applicable when the instance is already mounted to the cloud disk, and both the instance and the cloud disk use monthly subscription. <br><li>true: Expiration time of cloud disk is earlier than that of the instance.<br><li>false:Expiration time of cloud disk is later than that of the instance.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $RollbackPercent Rollback progress of a cloud disk snapshot.
     * @param integer $DifferDaysOfDeadline Number of days from current time until disk expiration (only applicable for prepaid disks).
Note: This field may return null, indicating that no valid value was found.
     * @param integer $ReturnFailCode In circumstances where the prepaid cloud disk does not support active return, this parameter indicates the reason that return is not supported. Value range: <br><li>1: The cloud disk has already been returned. <br><li>2: The cloud disk has already expired. <br><li>3: The cloud disk does not support return. <br><li> 8: The limit on the number of returns is exceeded.
Note: This field may return null, indicating that no valid value was found.
     * @param boolean $Shareable Whether or not cloud disk is shareable cloud disk.
     * @param string $CreateTime Creation time of the cloud disk.
     * @param integer $DeleteSnapshot Delete the associated non-permanently reserved snapshots upon deletion of the source cloud disk. `0`: No (default). `1`: Yes. To check whether a snapshot is permanently reserved, refer to the `IsPermanent` field returned by the `DescribeSnapshots` API. 
     * @param integer $DiskBackupQuota Quota of cloud disk backup points, i.e., the maximum number of backup points that a cloud disk can have.
     * @param integer $DiskBackupCount Number of used cloud disk backups.
     * @param string $InstanceType Type of the instance mounted to the cloud disk. Valid values: <br><li>CVM<br><li>EKS
     * @param string $LastAttachInsId ID of the last instance to which the cloud disk is attached
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorPrompt Error message for the last operation of the cloud disk
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $BurstPerformance Whether the cloud disk has enabled disk bursting. Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskState",$param) and $param["DiskState"] !== null) {
            $this->DiskState = $param["DiskState"];
        }

        if (array_key_exists("SnapshotCount",$param) and $param["SnapshotCount"] !== null) {
            $this->SnapshotCount = $param["SnapshotCount"];
        }

        if (array_key_exists("AutoRenewFlagError",$param) and $param["AutoRenewFlagError"] !== null) {
            $this->AutoRenewFlagError = $param["AutoRenewFlagError"];
        }

        if (array_key_exists("Rollbacking",$param) and $param["Rollbacking"] !== null) {
            $this->Rollbacking = $param["Rollbacking"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("BackupDisk",$param) and $param["BackupDisk"] !== null) {
            $this->BackupDisk = $param["BackupDisk"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AttachMode",$param) and $param["AttachMode"] !== null) {
            $this->AttachMode = $param["AttachMode"];
        }

        if (array_key_exists("AutoSnapshotPolicyIds",$param) and $param["AutoSnapshotPolicyIds"] !== null) {
            $this->AutoSnapshotPolicyIds = $param["AutoSnapshotPolicyIds"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }

        if (array_key_exists("Migrating",$param) and $param["Migrating"] !== null) {
            $this->Migrating = $param["Migrating"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("SnapshotSize",$param) and $param["SnapshotSize"] !== null) {
            $this->SnapshotSize = $param["SnapshotSize"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("IsReturnable",$param) and $param["IsReturnable"] !== null) {
            $this->IsReturnable = $param["IsReturnable"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("Attached",$param) and $param["Attached"] !== null) {
            $this->Attached = $param["Attached"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("MigratePercent",$param) and $param["MigratePercent"] !== null) {
            $this->MigratePercent = $param["MigratePercent"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("Portable",$param) and $param["Portable"] !== null) {
            $this->Portable = $param["Portable"];
        }

        if (array_key_exists("SnapshotAbility",$param) and $param["SnapshotAbility"] !== null) {
            $this->SnapshotAbility = $param["SnapshotAbility"];
        }

        if (array_key_exists("DeadlineError",$param) and $param["DeadlineError"] !== null) {
            $this->DeadlineError = $param["DeadlineError"];
        }

        if (array_key_exists("RollbackPercent",$param) and $param["RollbackPercent"] !== null) {
            $this->RollbackPercent = $param["RollbackPercent"];
        }

        if (array_key_exists("DifferDaysOfDeadline",$param) and $param["DifferDaysOfDeadline"] !== null) {
            $this->DifferDaysOfDeadline = $param["DifferDaysOfDeadline"];
        }

        if (array_key_exists("ReturnFailCode",$param) and $param["ReturnFailCode"] !== null) {
            $this->ReturnFailCode = $param["ReturnFailCode"];
        }

        if (array_key_exists("Shareable",$param) and $param["Shareable"] !== null) {
            $this->Shareable = $param["Shareable"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeleteSnapshot",$param) and $param["DeleteSnapshot"] !== null) {
            $this->DeleteSnapshot = $param["DeleteSnapshot"];
        }

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }

        if (array_key_exists("DiskBackupCount",$param) and $param["DiskBackupCount"] !== null) {
            $this->DiskBackupCount = $param["DiskBackupCount"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("LastAttachInsId",$param) and $param["LastAttachInsId"] !== null) {
            $this->LastAttachInsId = $param["LastAttachInsId"];
        }

        if (array_key_exists("ErrorPrompt",$param) and $param["ErrorPrompt"] !== null) {
            $this->ErrorPrompt = $param["ErrorPrompt"];
        }

        if (array_key_exists("BurstPerformance",$param) and $param["BurstPerformance"] !== null) {
            $this->BurstPerformance = $param["BurstPerformance"];
        }
    }
}
