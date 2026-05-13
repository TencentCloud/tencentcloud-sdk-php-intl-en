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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The details of a cloud disk
 *
 * @method boolean getDeleteWithInstance() Obtain Specifies whether the cloud disk is destroyed along with the mounted instance.<br><li>true: destroy the cloud disk along with the instance. only hourly postpaid cloud disk is supported.</li><li>false: destroying instance without destroying cloud disk.</li>.
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) Set Specifies whether the cloud disk is destroyed along with the mounted instance.<br><li>true: destroy the cloud disk along with the instance. only hourly postpaid cloud disk is supported.</li><li>false: destroying instance without destroying cloud disk.</li>.
 * @method string getRenewFlag() Obtain AUTO renewal flag. supported values:<br><li>NOTIFY_AND_AUTO_RENEW: NOTIFY expiry AND RENEW automatically</li><li>NOTIFY_AND_MANUAL_RENEW: NOTIFY expiry but not RENEW automatically</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: neither NOTIFY expiry nor RENEW automatically.</li>.
 * @method void setRenewFlag(string $RenewFlag) Set AUTO renewal flag. supported values:<br><li>NOTIFY_AND_AUTO_RENEW: NOTIFY expiry AND RENEW automatically</li><li>NOTIFY_AND_MANUAL_RENEW: NOTIFY expiry but not RENEW automatically</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: neither NOTIFY expiry nor RENEW automatically.</li>.
 * @method string getDiskType() Obtain Hard disk media type. valid values:<br><li>CLOUD_BASIC: BASIC CLOUD disk</li><li>CLOUD_PREMIUM: high-performance CLOUD block storage</li><li>CLOUD_BSSD: universal type SSD CLOUD disk</li><li>CLOUD_SSD: SSD CLOUD disk</li><li>CLOUD_HSSD: enhanced SSD CLOUD disk</li><li>CLOUD_TSSD: ultra-fast SSD cbs.</li>.
 * @method void setDiskType(string $DiskType) Set Hard disk media type. valid values:<br><li>CLOUD_BASIC: BASIC CLOUD disk</li><li>CLOUD_PREMIUM: high-performance CLOUD block storage</li><li>CLOUD_BSSD: universal type SSD CLOUD disk</li><li>CLOUD_SSD: SSD CLOUD disk</li><li>CLOUD_HSSD: enhanced SSD CLOUD disk</li><li>CLOUD_TSSD: ultra-fast SSD cbs.</li>.
 * @method string getDiskState() Obtain Cloud disk state. valid values:<br><li>UNATTACHED: unmounted</li><li>ATTACHING: mounting</li><li>ATTACHED: mounted</li><li>DETACHING: unmounting</li><li>EXPANDING: EXPANDING</li><li>ROLLBACKING: rolling back</li><li>TORECYCLE: to be recycled</li><li>DUMPING: copying hard drive.</li>.
 * @method void setDiskState(string $DiskState) Set Cloud disk state. valid values:<br><li>UNATTACHED: unmounted</li><li>ATTACHING: mounting</li><li>ATTACHED: mounted</li><li>DETACHING: unmounting</li><li>EXPANDING: EXPANDING</li><li>ROLLBACKING: rolling back</li><li>TORECYCLE: to be recycled</li><li>DUMPING: copying hard drive.</li>.
 * @method integer getSnapshotCount() Obtain The total number of snapshots of the cloud disk.
 * @method void setSnapshotCount(integer $SnapshotCount) Set The total number of snapshots of the cloud disk.
 * @method boolean getAutoRenewFlagError() Obtain Cloud disk mounted to child machine, and both child machine and cloud disk are on a monthly subscription basis.<br><li>true: auto renewal flag is set for child machine, but cloud disk not set</li><li>false: cloud disk auto-renewal flag normal</li>.
 * @method void setAutoRenewFlagError(boolean $AutoRenewFlagError) Set Cloud disk mounted to child machine, and both child machine and cloud disk are on a monthly subscription basis.<br><li>true: auto renewal flag is set for child machine, but cloud disk not set</li><li>false: cloud disk auto-renewal flag normal</li>.
 * @method boolean getRollbacking() Obtain Indicates if the cloud disk is in snapshot rollback status. valid values: <br><li>false: means not in snapshot rollback status</li><li>true: means in snapshot rollback status.</li>.
 * @method void setRollbacking(boolean $Rollbacking) Set Indicates if the cloud disk is in snapshot rollback status. valid values: <br><li>false: means not in snapshot rollback status</li><li>true: means in snapshot rollback status.</li>.
 * @method array getInstanceIdList() Obtain For non-shareable cloud disks, this parameter is null. For shareable cloud disks, this parameters indicates this cloud disk's Instance IDs currently mounted to the CVM.
 * @method void setInstanceIdList(array $InstanceIdList) Set For non-shareable cloud disks, this parameter is null. For shareable cloud disks, this parameters indicates this cloud disk's Instance IDs currently mounted to the CVM.
 * @method boolean getEncrypt() Obtain Indicates whether the cloud disk is encrypted. valid values:<br><li>false: non-encrypted disk</li><li>true: encrypted disk</li>.
 * @method void setEncrypt(boolean $Encrypt) Set Indicates whether the cloud disk is encrypted. valid values:<br><li>false: non-encrypted disk</li><li>true: encrypted disk</li>.
 * @method string getDiskName() Obtain Cloud disk name.
 * @method void setDiskName(string $DiskName) Set Cloud disk name.
 * @method boolean getBackupDisk() Obtain Specifies whether to create a snapshot when the cloud disk is terminated due to overdue payment or expiration. `true`: create snapshot; `false`: do not create snapshot.
 * @method void setBackupDisk(boolean $BackupDisk) Set Specifies whether to create a snapshot when the cloud disk is terminated due to overdue payment or expiration. `true`: create snapshot; `false`: do not create snapshot.
 * @method array getTags() Obtain It indicates the tag bound to the cloud disk. If the cloud disk is not bound to any tag, the value is empty.
 * @method void setTags(array $Tags) Set It indicates the tag bound to the cloud disk. If the cloud disk is not bound to any tag, the value is empty.
 * @method string getInstanceId() Obtain ID of the CVM to which the cloud disk is mounted.
 * @method void setInstanceId(string $InstanceId) Set ID of the CVM to which the cloud disk is mounted.
 * @method string getAttachMode() Obtain The mount type of the cloud disk. valid values: <br><li>PF: PF mount</li><li>VF: VF mount</li>.
 * @method void setAttachMode(string $AttachMode) Set The mount type of the cloud disk. valid values: <br><li>PF: PF mount</li><li>VF: VF mount</li>.
 * @method array getAutoSnapshotPolicyIds() Obtain Regular snapshot ID associated with the cloud disk. return this parameter only when calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) API with ReturnBindAutoSnapshotPolicy set to TRUE.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoSnapshotPolicyIds(array $AutoSnapshotPolicyIds) Set Regular snapshot ID associated with the cloud disk. return this parameter only when calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) API with ReturnBindAutoSnapshotPolicy set to TRUE.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getThroughputPerformance() Obtain Specifies the additional performance value of the CBS in MiB/s.
 * @method void setThroughputPerformance(integer $ThroughputPerformance) Set Specifies the additional performance value of the CBS in MiB/s.
 * @method boolean getMigrating() Obtain Indicates if the cloud disk is in type change. valid values: <br><li>false: means the cloud disk is not in type change</li><li>true: means the cloud disk has initiated type change and is migrating.</li>.
 * @method void setMigrating(boolean $Migrating) Set Indicates if the cloud disk is in type change. valid values: <br><li>false: means the cloud disk is not in type change</li><li>true: means the cloud disk has initiated type change and is migrating.</li>.
 * @method string getDiskId() Obtain Cloud disk ID.
 * @method void setDiskId(string $DiskId) Set Cloud disk ID.
 * @method integer getSnapshotSize() Obtain Total snapshot capacity of the cloud disk. unit: MiB.
 * @method void setSnapshotSize(integer $SnapshotSize) Set Total snapshot capacity of the cloud disk. unit: MiB.
 * @method Placement getPlacement() Obtain Location of the cloud disk.
 * @method void setPlacement(Placement $Placement) Set Location of the cloud disk.
 * @method boolean getIsReturnable() Obtain Determines if a prepaid cloud disk supports proactive return.<br><li>true: supports proactive return</li><li>false: does not support proactive return.</li>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsReturnable(boolean $IsReturnable) Set Determines if a prepaid cloud disk supports proactive return.<br><li>true: supports proactive return</li><li>false: does not support proactive return.</li>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDeadlineTime() Obtain Expiration time of the cloud disk.
 * @method void setDeadlineTime(string $DeadlineTime) Set Expiration time of the cloud disk.
 * @method boolean getAttached() Obtain Indicates whether the cloud disk is mounted to the cvm. valid values: <br><li>false: means not mounted</li><li>true: means mounted.</li>.
 * @method void setAttached(boolean $Attached) Set Indicates whether the cloud disk is mounted to the cvm. valid values: <br><li>false: means not mounted</li><li>true: means mounted.</li>.
 * @method integer getDiskSize() Obtain Specifies the disk capacity in GiB.
 * @method void setDiskSize(integer $DiskSize) Set Specifies the disk capacity in GiB.
 * @method integer getMigratePercent() Obtain It indicates the migration progress of cloud disk type change. The value range is 0 to 100.
 * @method void setMigratePercent(integer $MigratePercent) Set It indicates the migration progress of cloud disk type change. The value range is 0 to 100.
 * @method string getDiskUsage() Obtain Cloud DISK type. valid values:<br><li>SYSTEM_DISK: SYSTEM DISK</li><li>DATA_DISK: DATA DISK.</li>.
 * @method void setDiskUsage(string $DiskUsage) Set Cloud DISK type. valid values:<br><li>SYSTEM_DISK: SYSTEM DISK</li><li>DATA_DISK: DATA DISK.</li>.
 * @method string getDiskChargeType() Obtain Payment mode. valid values: <br><li>PREPAID: PREPAID, i.e. monthly subscription</li><li>POSTPAID_BY_HOUR: POSTPAID, i.e. pay-as-you-go.</li>.
 * @method void setDiskChargeType(string $DiskChargeType) Set Payment mode. valid values: <br><li>PREPAID: PREPAID, i.e. monthly subscription</li><li>POSTPAID_BY_HOUR: POSTPAID, i.e. pay-as-you-go.</li>.
 * @method boolean getPortable() Obtain Whether it is an elastic cloud disk. false: Non-elastic cloud disk; true: Elastic cloud disk.
 * @method void setPortable(boolean $Portable) Set Whether it is an elastic cloud disk. false: Non-elastic cloud disk; true: Elastic cloud disk.
 * @method boolean getSnapshotAbility() Obtain Specifies whether the cloud disk has the capability to create snapshots. valid values:<br><li>false: cannot create snapshots</li><li>true: can create snapshots.</li>.
 * @method void setSnapshotAbility(boolean $SnapshotAbility) Set Specifies whether the cloud disk has the capability to create snapshots. valid values:<br><li>false: cannot create snapshots</li><li>true: can create snapshots.</li>.
 * @method boolean getDeadlineError() Obtain Indicates whether the cloud disk expiration time is earlier than that of the instance. this field is valid only when the cloud disk is mounted to the instance and both the instance and the cloud disk are on a monthly subscription basis.<br><li>true: the expiration time of the cloud disk is earlier than that of the instance.</li><li>false: cloud disk expiration time later than instance.</li>.
 * @method void setDeadlineError(boolean $DeadlineError) Set Indicates whether the cloud disk expiration time is earlier than that of the instance. this field is valid only when the cloud disk is mounted to the instance and both the instance and the cloud disk are on a monthly subscription basis.<br><li>true: the expiration time of the cloud disk is earlier than that of the instance.</li><li>false: cloud disk expiration time later than instance.</li>.
 * @method integer getRollbackPercent() Obtain Rollback progress of a cloud disk snapshot.
 * @method void setRollbackPercent(integer $RollbackPercent) Set Rollback progress of a cloud disk snapshot.
 * @method integer getDifferDaysOfDeadline() Obtain The number of days from the current time to disk expiration (only applicable to prepaid cbs).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDifferDaysOfDeadline(integer $DifferDaysOfDeadline) Set The number of days from the current time to disk expiration (only applicable to prepaid cbs).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReturnFailCode() Obtain For prepaid cloud disks that do not support proactive return, this parameter indicates the specific reason for not supporting refund. value range: <br><li>1: the cloud disk has already been returned.</li><li>2: the cloud disk has expired.</li><li>3: the cloud disk does not support return.</li><li>8: the maximum returnable quantity is exceeded.</li><li>10: non-elastic cloud disks, system disks, and pay-as-you-go cloud disks do not support return.</li>.
 * @method void setReturnFailCode(integer $ReturnFailCode) Set For prepaid cloud disks that do not support proactive return, this parameter indicates the specific reason for not supporting refund. value range: <br><li>1: the cloud disk has already been returned.</li><li>2: the cloud disk has expired.</li><li>3: the cloud disk does not support return.</li><li>8: the maximum returnable quantity is exceeded.</li><li>10: non-elastic cloud disks, system disks, and pay-as-you-go cloud disks do not support return.</li>.
 * @method boolean getShareable() Obtain Whether or not cloud disk is shareable cloud disk.
 * @method void setShareable(boolean $Shareable) Set Whether or not cloud disk is shareable cloud disk.
 * @method string getCreateTime() Obtain Creation time of the cloud disk.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the cloud disk.
 * @method integer getDeleteSnapshot() Obtain Specifies whether to delete associated non-permanently retained snapshots when destroying the cloud disk. 0 indicates non-permanent snapshots are not deleted with cloud disk destruction, 1 indicates non-permanent snapshots are deleted with cloud disk destruction. default value: 0. whether a snapshot is permanently retained can be determined through the IsPermanent field in the snapshot description returned by the DescribeSnapshots API (https://www.tencentcloud.com/document/product/362/15647?from_cn_redirect=1). true indicates permanent snapshot, false indicates non-permanent snapshot.
 * @method void setDeleteSnapshot(integer $DeleteSnapshot) Set Specifies whether to delete associated non-permanently retained snapshots when destroying the cloud disk. 0 indicates non-permanent snapshots are not deleted with cloud disk destruction, 1 indicates non-permanent snapshots are deleted with cloud disk destruction. default value: 0. whether a snapshot is permanently retained can be determined through the IsPermanent field in the snapshot description returned by the DescribeSnapshots API (https://www.tencentcloud.com/document/product/362/15647?from_cn_redirect=1). true indicates permanent snapshot, false indicates non-permanent snapshot.
 * @method integer getDiskBackupQuota() Obtain Quota of cloud disk backup points, i.e., the maximum number of backup points that a cloud disk can have.
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) Set Quota of cloud disk backup points, i.e., the maximum number of backup points that a cloud disk can have.
 * @method integer getDiskBackupCount() Obtain Number of used cloud disk backups.
 * @method void setDiskBackupCount(integer $DiskBackupCount) Set Number of used cloud disk backups.
 * @method string getInstanceType() Obtain The type of the CBS mounting instance. valid values: <br><li>CVM</li><li>EKS</li>.
 * @method void setInstanceType(string $InstanceType) Set The type of the CBS mounting instance. valid values: <br><li>CVM</li><li>EKS</li>.
 * @method string getLastAttachInsId() Obtain ID of the last instance to which the cloud disk is attached
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastAttachInsId(string $LastAttachInsId) Set ID of the last instance to which the cloud disk is attached
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorPrompt() Obtain Error prompt for the last operation on cbs.
 * @method void setErrorPrompt(string $ErrorPrompt) Set Error prompt for the last operation on cbs.
 * @method boolean getBurstPerformance() Obtain Whether performance burst is enabled for the cloud disk.
 * @method void setBurstPerformance(boolean $BurstPerformance) Set Whether performance burst is enabled for the cloud disk.
 * @method string getEncryptType() Obtain Encryption type of cbs. valid values: ENCRYPT_V1 and ENCRYPT_V2, which indicate first generation and second generation encryption technology respectively. the two kinds are incompatible.
 * @method void setEncryptType(string $EncryptType) Set Encryption type of cbs. valid values: ENCRYPT_V1 and ENCRYPT_V2, which indicate first generation and second generation encryption technology respectively. the two kinds are incompatible.
 * @method string getKmsKeyId() Obtain Key ID of the encrypted disk.
 * @method void setKmsKeyId(string $KmsKeyId) Set Key ID of the encrypted disk.
 */
class Disk extends AbstractModel
{
    /**
     * @var boolean Specifies whether the cloud disk is destroyed along with the mounted instance.<br><li>true: destroy the cloud disk along with the instance. only hourly postpaid cloud disk is supported.</li><li>false: destroying instance without destroying cloud disk.</li>.
     */
    public $DeleteWithInstance;

    /**
     * @var string AUTO renewal flag. supported values:<br><li>NOTIFY_AND_AUTO_RENEW: NOTIFY expiry AND RENEW automatically</li><li>NOTIFY_AND_MANUAL_RENEW: NOTIFY expiry but not RENEW automatically</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: neither NOTIFY expiry nor RENEW automatically.</li>.
     */
    public $RenewFlag;

    /**
     * @var string Hard disk media type. valid values:<br><li>CLOUD_BASIC: BASIC CLOUD disk</li><li>CLOUD_PREMIUM: high-performance CLOUD block storage</li><li>CLOUD_BSSD: universal type SSD CLOUD disk</li><li>CLOUD_SSD: SSD CLOUD disk</li><li>CLOUD_HSSD: enhanced SSD CLOUD disk</li><li>CLOUD_TSSD: ultra-fast SSD cbs.</li>.
     */
    public $DiskType;

    /**
     * @var string Cloud disk state. valid values:<br><li>UNATTACHED: unmounted</li><li>ATTACHING: mounting</li><li>ATTACHED: mounted</li><li>DETACHING: unmounting</li><li>EXPANDING: EXPANDING</li><li>ROLLBACKING: rolling back</li><li>TORECYCLE: to be recycled</li><li>DUMPING: copying hard drive.</li>.
     */
    public $DiskState;

    /**
     * @var integer The total number of snapshots of the cloud disk.
     */
    public $SnapshotCount;

    /**
     * @var boolean Cloud disk mounted to child machine, and both child machine and cloud disk are on a monthly subscription basis.<br><li>true: auto renewal flag is set for child machine, but cloud disk not set</li><li>false: cloud disk auto-renewal flag normal</li>.
     */
    public $AutoRenewFlagError;

    /**
     * @var boolean Indicates if the cloud disk is in snapshot rollback status. valid values: <br><li>false: means not in snapshot rollback status</li><li>true: means in snapshot rollback status.</li>.
     */
    public $Rollbacking;

    /**
     * @var array For non-shareable cloud disks, this parameter is null. For shareable cloud disks, this parameters indicates this cloud disk's Instance IDs currently mounted to the CVM.
     */
    public $InstanceIdList;

    /**
     * @var boolean Indicates whether the cloud disk is encrypted. valid values:<br><li>false: non-encrypted disk</li><li>true: encrypted disk</li>.
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
     * @var array It indicates the tag bound to the cloud disk. If the cloud disk is not bound to any tag, the value is empty.
     */
    public $Tags;

    /**
     * @var string ID of the CVM to which the cloud disk is mounted.
     */
    public $InstanceId;

    /**
     * @var string The mount type of the cloud disk. valid values: <br><li>PF: PF mount</li><li>VF: VF mount</li>.
     */
    public $AttachMode;

    /**
     * @var array Regular snapshot ID associated with the cloud disk. return this parameter only when calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) API with ReturnBindAutoSnapshotPolicy set to TRUE.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoSnapshotPolicyIds;

    /**
     * @var integer Specifies the additional performance value of the CBS in MiB/s.
     */
    public $ThroughputPerformance;

    /**
     * @var boolean Indicates if the cloud disk is in type change. valid values: <br><li>false: means the cloud disk is not in type change</li><li>true: means the cloud disk has initiated type change and is migrating.</li>.
     */
    public $Migrating;

    /**
     * @var string Cloud disk ID.
     */
    public $DiskId;

    /**
     * @var integer Total snapshot capacity of the cloud disk. unit: MiB.
     */
    public $SnapshotSize;

    /**
     * @var Placement Location of the cloud disk.
     */
    public $Placement;

    /**
     * @var boolean Determines if a prepaid cloud disk supports proactive return.<br><li>true: supports proactive return</li><li>false: does not support proactive return.</li>.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsReturnable;

    /**
     * @var string Expiration time of the cloud disk.
     */
    public $DeadlineTime;

    /**
     * @var boolean Indicates whether the cloud disk is mounted to the cvm. valid values: <br><li>false: means not mounted</li><li>true: means mounted.</li>.
     */
    public $Attached;

    /**
     * @var integer Specifies the disk capacity in GiB.
     */
    public $DiskSize;

    /**
     * @var integer It indicates the migration progress of cloud disk type change. The value range is 0 to 100.
     */
    public $MigratePercent;

    /**
     * @var string Cloud DISK type. valid values:<br><li>SYSTEM_DISK: SYSTEM DISK</li><li>DATA_DISK: DATA DISK.</li>.
     */
    public $DiskUsage;

    /**
     * @var string Payment mode. valid values: <br><li>PREPAID: PREPAID, i.e. monthly subscription</li><li>POSTPAID_BY_HOUR: POSTPAID, i.e. pay-as-you-go.</li>.
     */
    public $DiskChargeType;

    /**
     * @var boolean Whether it is an elastic cloud disk. false: Non-elastic cloud disk; true: Elastic cloud disk.
     */
    public $Portable;

    /**
     * @var boolean Specifies whether the cloud disk has the capability to create snapshots. valid values:<br><li>false: cannot create snapshots</li><li>true: can create snapshots.</li>.
     */
    public $SnapshotAbility;

    /**
     * @var boolean Indicates whether the cloud disk expiration time is earlier than that of the instance. this field is valid only when the cloud disk is mounted to the instance and both the instance and the cloud disk are on a monthly subscription basis.<br><li>true: the expiration time of the cloud disk is earlier than that of the instance.</li><li>false: cloud disk expiration time later than instance.</li>.
     */
    public $DeadlineError;

    /**
     * @var integer Rollback progress of a cloud disk snapshot.
     */
    public $RollbackPercent;

    /**
     * @var integer The number of days from the current time to disk expiration (only applicable to prepaid cbs).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DifferDaysOfDeadline;

    /**
     * @var integer For prepaid cloud disks that do not support proactive return, this parameter indicates the specific reason for not supporting refund. value range: <br><li>1: the cloud disk has already been returned.</li><li>2: the cloud disk has expired.</li><li>3: the cloud disk does not support return.</li><li>8: the maximum returnable quantity is exceeded.</li><li>10: non-elastic cloud disks, system disks, and pay-as-you-go cloud disks do not support return.</li>.
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
     * @var integer Specifies whether to delete associated non-permanently retained snapshots when destroying the cloud disk. 0 indicates non-permanent snapshots are not deleted with cloud disk destruction, 1 indicates non-permanent snapshots are deleted with cloud disk destruction. default value: 0. whether a snapshot is permanently retained can be determined through the IsPermanent field in the snapshot description returned by the DescribeSnapshots API (https://www.tencentcloud.com/document/product/362/15647?from_cn_redirect=1). true indicates permanent snapshot, false indicates non-permanent snapshot.
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
     * @var string The type of the CBS mounting instance. valid values: <br><li>CVM</li><li>EKS</li>.
     */
    public $InstanceType;

    /**
     * @var string ID of the last instance to which the cloud disk is attached
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastAttachInsId;

    /**
     * @var string Error prompt for the last operation on cbs.
     */
    public $ErrorPrompt;

    /**
     * @var boolean Whether performance burst is enabled for the cloud disk.
     */
    public $BurstPerformance;

    /**
     * @var string Encryption type of cbs. valid values: ENCRYPT_V1 and ENCRYPT_V2, which indicate first generation and second generation encryption technology respectively. the two kinds are incompatible.
     */
    public $EncryptType;

    /**
     * @var string Key ID of the encrypted disk.
     */
    public $KmsKeyId;

    /**
     * @param boolean $DeleteWithInstance Specifies whether the cloud disk is destroyed along with the mounted instance.<br><li>true: destroy the cloud disk along with the instance. only hourly postpaid cloud disk is supported.</li><li>false: destroying instance without destroying cloud disk.</li>.
     * @param string $RenewFlag AUTO renewal flag. supported values:<br><li>NOTIFY_AND_AUTO_RENEW: NOTIFY expiry AND RENEW automatically</li><li>NOTIFY_AND_MANUAL_RENEW: NOTIFY expiry but not RENEW automatically</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: neither NOTIFY expiry nor RENEW automatically.</li>.
     * @param string $DiskType Hard disk media type. valid values:<br><li>CLOUD_BASIC: BASIC CLOUD disk</li><li>CLOUD_PREMIUM: high-performance CLOUD block storage</li><li>CLOUD_BSSD: universal type SSD CLOUD disk</li><li>CLOUD_SSD: SSD CLOUD disk</li><li>CLOUD_HSSD: enhanced SSD CLOUD disk</li><li>CLOUD_TSSD: ultra-fast SSD cbs.</li>.
     * @param string $DiskState Cloud disk state. valid values:<br><li>UNATTACHED: unmounted</li><li>ATTACHING: mounting</li><li>ATTACHED: mounted</li><li>DETACHING: unmounting</li><li>EXPANDING: EXPANDING</li><li>ROLLBACKING: rolling back</li><li>TORECYCLE: to be recycled</li><li>DUMPING: copying hard drive.</li>.
     * @param integer $SnapshotCount The total number of snapshots of the cloud disk.
     * @param boolean $AutoRenewFlagError Cloud disk mounted to child machine, and both child machine and cloud disk are on a monthly subscription basis.<br><li>true: auto renewal flag is set for child machine, but cloud disk not set</li><li>false: cloud disk auto-renewal flag normal</li>.
     * @param boolean $Rollbacking Indicates if the cloud disk is in snapshot rollback status. valid values: <br><li>false: means not in snapshot rollback status</li><li>true: means in snapshot rollback status.</li>.
     * @param array $InstanceIdList For non-shareable cloud disks, this parameter is null. For shareable cloud disks, this parameters indicates this cloud disk's Instance IDs currently mounted to the CVM.
     * @param boolean $Encrypt Indicates whether the cloud disk is encrypted. valid values:<br><li>false: non-encrypted disk</li><li>true: encrypted disk</li>.
     * @param string $DiskName Cloud disk name.
     * @param boolean $BackupDisk Specifies whether to create a snapshot when the cloud disk is terminated due to overdue payment or expiration. `true`: create snapshot; `false`: do not create snapshot.
     * @param array $Tags It indicates the tag bound to the cloud disk. If the cloud disk is not bound to any tag, the value is empty.
     * @param string $InstanceId ID of the CVM to which the cloud disk is mounted.
     * @param string $AttachMode The mount type of the cloud disk. valid values: <br><li>PF: PF mount</li><li>VF: VF mount</li>.
     * @param array $AutoSnapshotPolicyIds Regular snapshot ID associated with the cloud disk. return this parameter only when calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) API with ReturnBindAutoSnapshotPolicy set to TRUE.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ThroughputPerformance Specifies the additional performance value of the CBS in MiB/s.
     * @param boolean $Migrating Indicates if the cloud disk is in type change. valid values: <br><li>false: means the cloud disk is not in type change</li><li>true: means the cloud disk has initiated type change and is migrating.</li>.
     * @param string $DiskId Cloud disk ID.
     * @param integer $SnapshotSize Total snapshot capacity of the cloud disk. unit: MiB.
     * @param Placement $Placement Location of the cloud disk.
     * @param boolean $IsReturnable Determines if a prepaid cloud disk supports proactive return.<br><li>true: supports proactive return</li><li>false: does not support proactive return.</li>.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DeadlineTime Expiration time of the cloud disk.
     * @param boolean $Attached Indicates whether the cloud disk is mounted to the cvm. valid values: <br><li>false: means not mounted</li><li>true: means mounted.</li>.
     * @param integer $DiskSize Specifies the disk capacity in GiB.
     * @param integer $MigratePercent It indicates the migration progress of cloud disk type change. The value range is 0 to 100.
     * @param string $DiskUsage Cloud DISK type. valid values:<br><li>SYSTEM_DISK: SYSTEM DISK</li><li>DATA_DISK: DATA DISK.</li>.
     * @param string $DiskChargeType Payment mode. valid values: <br><li>PREPAID: PREPAID, i.e. monthly subscription</li><li>POSTPAID_BY_HOUR: POSTPAID, i.e. pay-as-you-go.</li>.
     * @param boolean $Portable Whether it is an elastic cloud disk. false: Non-elastic cloud disk; true: Elastic cloud disk.
     * @param boolean $SnapshotAbility Specifies whether the cloud disk has the capability to create snapshots. valid values:<br><li>false: cannot create snapshots</li><li>true: can create snapshots.</li>.
     * @param boolean $DeadlineError Indicates whether the cloud disk expiration time is earlier than that of the instance. this field is valid only when the cloud disk is mounted to the instance and both the instance and the cloud disk are on a monthly subscription basis.<br><li>true: the expiration time of the cloud disk is earlier than that of the instance.</li><li>false: cloud disk expiration time later than instance.</li>.
     * @param integer $RollbackPercent Rollback progress of a cloud disk snapshot.
     * @param integer $DifferDaysOfDeadline The number of days from the current time to disk expiration (only applicable to prepaid cbs).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ReturnFailCode For prepaid cloud disks that do not support proactive return, this parameter indicates the specific reason for not supporting refund. value range: <br><li>1: the cloud disk has already been returned.</li><li>2: the cloud disk has expired.</li><li>3: the cloud disk does not support return.</li><li>8: the maximum returnable quantity is exceeded.</li><li>10: non-elastic cloud disks, system disks, and pay-as-you-go cloud disks do not support return.</li>.
     * @param boolean $Shareable Whether or not cloud disk is shareable cloud disk.
     * @param string $CreateTime Creation time of the cloud disk.
     * @param integer $DeleteSnapshot Specifies whether to delete associated non-permanently retained snapshots when destroying the cloud disk. 0 indicates non-permanent snapshots are not deleted with cloud disk destruction, 1 indicates non-permanent snapshots are deleted with cloud disk destruction. default value: 0. whether a snapshot is permanently retained can be determined through the IsPermanent field in the snapshot description returned by the DescribeSnapshots API (https://www.tencentcloud.com/document/product/362/15647?from_cn_redirect=1). true indicates permanent snapshot, false indicates non-permanent snapshot.
     * @param integer $DiskBackupQuota Quota of cloud disk backup points, i.e., the maximum number of backup points that a cloud disk can have.
     * @param integer $DiskBackupCount Number of used cloud disk backups.
     * @param string $InstanceType The type of the CBS mounting instance. valid values: <br><li>CVM</li><li>EKS</li>.
     * @param string $LastAttachInsId ID of the last instance to which the cloud disk is attached
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorPrompt Error prompt for the last operation on cbs.
     * @param boolean $BurstPerformance Whether performance burst is enabled for the cloud disk.
     * @param string $EncryptType Encryption type of cbs. valid values: ENCRYPT_V1 and ENCRYPT_V2, which indicate first generation and second generation encryption technology respectively. the two kinds are incompatible.
     * @param string $KmsKeyId Key ID of the encrypted disk.
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

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }
    }
}
