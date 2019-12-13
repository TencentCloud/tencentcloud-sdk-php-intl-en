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
 * @method string getDiskId() 获取Cloud disk ID.
 * @method void setDiskId(string $DiskId) 设置Cloud disk ID.
 * @method string getDiskUsage() 获取Cloud disk type. Value range:<br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
 * @method void setDiskUsage(string $DiskUsage) 设置Cloud disk type. Value range:<br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
 * @method string getDiskChargeType() 获取Billing method. Value range: <br><li>PREPAID: Prepaid, that is, monthly subscription<br><li>POSTPAID_BY_HOUR: Postpaid, that is, pay as you go.
 * @method void setDiskChargeType(string $DiskChargeType) 设置Billing method. Value range: <br><li>PREPAID: Prepaid, that is, monthly subscription<br><li>POSTPAID_BY_HOUR: Postpaid, that is, pay as you go.
 * @method boolean getPortable() 获取Whether it is an elastic cloud disk. false: Non-elastic cloud disk; true: Elastic cloud disk.
 * @method void setPortable(boolean $Portable) 设置Whether it is an elastic cloud disk. false: Non-elastic cloud disk; true: Elastic cloud disk.
 * @method Placement getPlacement() 获取Location of the cloud disk.
 * @method void setPlacement(Placement $Placement) 设置Location of the cloud disk.
 * @method boolean getSnapshotAbility() 获取Whether the cloud disk has the capability to create snapshots. Value range: <br><li>false: Cannot create snapshots. true: Can create snapshots.
 * @method void setSnapshotAbility(boolean $SnapshotAbility) 设置Whether the cloud disk has the capability to create snapshots. Value range: <br><li>false: Cannot create snapshots. true: Can create snapshots.
 * @method string getDiskName() 获取Cloud disk name.
 * @method void setDiskName(string $DiskName) 设置Cloud disk name.
 * @method integer getDiskSize() 获取Cloud disk size (in GB).
 * @method void setDiskSize(integer $DiskSize) 设置Cloud disk size (in GB).
 * @method string getDiskState() 获取The state of the cloud disk. Value range: <br><li>UNATTACHED: Not mounted <br><li>ATTACHING: Mounting <br><li>ATTACHED: Mounted <br><li>DETACHING: Un-mounting <br><li>EXPANDING: Expanding <br><li>ROLLBACKING: Rolling back <br><li>TORECYCE: Pending recycling. <br><li>DUMPING: Copying the hard drive.
 * @method void setDiskState(string $DiskState) 设置The state of the cloud disk. Value range: <br><li>UNATTACHED: Not mounted <br><li>ATTACHING: Mounting <br><li>ATTACHED: Mounted <br><li>DETACHING: Un-mounting <br><li>EXPANDING: Expanding <br><li>ROLLBACKING: Rolling back <br><li>TORECYCE: Pending recycling. <br><li>DUMPING: Copying the hard drive.
 * @method string getDiskType() 获取Type of cloud disk medium. Value range: <br><li>CLOUD_BASIC: Ordinary cloud disk <br><li>CLOUD_PREMIUM: Premium cloud storage <br><li>CLOUD_SSD: SSD cloud disk.
 * @method void setDiskType(string $DiskType) 设置Type of cloud disk medium. Value range: <br><li>CLOUD_BASIC: Ordinary cloud disk <br><li>CLOUD_PREMIUM: Premium cloud storage <br><li>CLOUD_SSD: SSD cloud disk.
 * @method boolean getAttached() 获取Whether the cloud disk is mounted to the CVM. Value range: <br><li>false: Unmounted <br><li>true: Mounted.
 * @method void setAttached(boolean $Attached) 设置Whether the cloud disk is mounted to the CVM. Value range: <br><li>false: Unmounted <br><li>true: Mounted.
 * @method string getInstanceId() 获取ID of the CVM to which the cloud disk is mounted.
 * @method void setInstanceId(string $InstanceId) 设置ID of the CVM to which the cloud disk is mounted.
 * @method string getCreateTime() 获取Creation time of the cloud disk.
 * @method void setCreateTime(string $CreateTime) 设置Creation time of the cloud disk.
 * @method string getDeadlineTime() 获取Expiration time of the cloud disk.
 * @method void setDeadlineTime(string $DeadlineTime) 设置Expiration time of the cloud disk.
 * @method boolean getRollbacking() 获取Whether the cloud disk is in the status of snapshot rollback. Value range: <br><li>false: No <br><li>true: Yes
 * @method void setRollbacking(boolean $Rollbacking) 设置Whether the cloud disk is in the status of snapshot rollback. Value range: <br><li>false: No <br><li>true: Yes
 * @method integer getRollbackPercent() 获取Rollback progress of a cloud disk snapshot.
 * @method void setRollbackPercent(integer $RollbackPercent) 设置Rollback progress of a cloud disk snapshot.
 * @method boolean getEncrypt() 获取Whether the cloud disk is encrypted. Value range: <br><li>false: Not encrypted <br><li>true: Encrypted.
 * @method void setEncrypt(boolean $Encrypt) 设置Whether the cloud disk is encrypted. Value range: <br><li>false: Not encrypted <br><li>true: Encrypted.
 * @method boolean getAutoRenewFlagError() 获取Cloud disk already mounted to CVM, and both CVM and cloud disk use monthly subscription.<br><li>true: CVM has auto-renewal flag set up, but cloud disk does not.<br><li>false: Cloud disk auto-renewal flag set up normally.
Note: This field may return null, indicating that no valid value was found.
 * @method void setAutoRenewFlagError(boolean $AutoRenewFlagError) 设置Cloud disk already mounted to CVM, and both CVM and cloud disk use monthly subscription.<br><li>true: CVM has auto-renewal flag set up, but cloud disk does not.<br><li>false: Cloud disk auto-renewal flag set up normally.
Note: This field may return null, indicating that no valid value was found.
 * @method string getRenewFlag() 获取Auto renewal flag. Supported values:<br><li>NOTIFY_AND_AUTO_RENEW: Notify expiry and renew automatically<br><li>NOTIFY_AND_MANUAL_RENEW: Notify expiry but not renew automatically<br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify expiry nor renew automatically.
Note: This field may return null, indicating that no valid value was found.
 * @method void setRenewFlag(string $RenewFlag) 设置Auto renewal flag. Supported values:<br><li>NOTIFY_AND_AUTO_RENEW: Notify expiry and renew automatically<br><li>NOTIFY_AND_MANUAL_RENEW: Notify expiry but not renew automatically<br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify expiry nor renew automatically.
Note: This field may return null, indicating that no valid value was found.
 * @method boolean getDeadlineError() 获取This field is only applicable when the instance is already mounted to the cloud disk, and both the instance and the cloud disk use monthly subscription. <br><li>true: Expiration time of cloud disk is earlier than that of the instance.<br><li>false： Expiration time of cloud disk is later than that of the instance.
Note: This field may return null, indicating that no valid value was found.
 * @method void setDeadlineError(boolean $DeadlineError) 设置This field is only applicable when the instance is already mounted to the cloud disk, and both the instance and the cloud disk use monthly subscription. <br><li>true: Expiration time of cloud disk is earlier than that of the instance.<br><li>false： Expiration time of cloud disk is later than that of the instance.
Note: This field may return null, indicating that no valid value was found.
 * @method boolean getIsReturnable() 获取Determines whether or not prepaid cloud disk supports active return. <br><li>true: Active return supported.<br><li>false: Active return not supported.
Note: This field may return null, indicating that no valid value was found.
 * @method void setIsReturnable(boolean $IsReturnable) 设置Determines whether or not prepaid cloud disk supports active return. <br><li>true: Active return supported.<br><li>false: Active return not supported.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getReturnFailCode() 获取In circumstances where the prepaid cloud disk does not support active return, this parameter indicates the reason that return is not supported. Value range: <br><li>1: The cloud disk has already been returned. <br><li>2: The cloud disk has already expired. <br><li>3: The cloud disk does not support return. <br><li> 8: The limit on the number of returns is exceeded.
Note: This field may return null, indicating that no valid value was found.
 * @method void setReturnFailCode(integer $ReturnFailCode) 设置In circumstances where the prepaid cloud disk does not support active return, this parameter indicates the reason that return is not supported. Value range: <br><li>1: The cloud disk has already been returned. <br><li>2: The cloud disk has already expired. <br><li>3: The cloud disk does not support return. <br><li> 8: The limit on the number of returns is exceeded.
Note: This field may return null, indicating that no valid value was found.
 * @method array getAutoSnapshotPolicyIds() 获取ID of the periodic snapshot associated to the cloud disk. This parameter is returned only if the value of parameter ReturnBindAutoSnapshotPolicy is TRUE when the API DescribeDisks is called.
Note: This field may return null, indicating that no valid value was found.
 * @method void setAutoSnapshotPolicyIds(array $AutoSnapshotPolicyIds) 设置ID of the periodic snapshot associated to the cloud disk. This parameter is returned only if the value of parameter ReturnBindAutoSnapshotPolicy is TRUE when the API DescribeDisks is called.
Note: This field may return null, indicating that no valid value was found.
 * @method array getTags() 获取The tag bound to the cloud disk. The value Null is used when no tag is bound to the cloud disk.
Note: This field may return null, indicating that no valid value was found.
 * @method void setTags(array $Tags) 设置The tag bound to the cloud disk. The value Null is used when no tag is bound to the cloud disk.
Note: This field may return null, indicating that no valid value was found.
 * @method boolean getDeleteWithInstance() 获取Whether the cloud disk terminates along with the instance mounted to it. <br><li>true: Cloud disk will also be terminated when instance terminates, so only hourly postpaid cloud disk are supported.<br><li>false: Cloud disk does not terminate when instance terminates.
Note: This field may return null, indicating that no valid value was found.
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) 设置Whether the cloud disk terminates along with the instance mounted to it. <br><li>true: Cloud disk will also be terminated when instance terminates, so only hourly postpaid cloud disk are supported.<br><li>false: Cloud disk does not terminate when instance terminates.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getDifferDaysOfDeadline() 获取Number of days from current time until disk expiration (only applicable for prepaid disks).
Note: This field may return null, indicating that no valid value was found.
 * @method void setDifferDaysOfDeadline(integer $DifferDaysOfDeadline) 设置Number of days from current time until disk expiration (only applicable for prepaid disks).
Note: This field may return null, indicating that no valid value was found.
 * @method boolean getMigrating() 获取Whether cloud disk is in process of type change. Value range: <br><li>false: Cloud disk not in process of type change. <br><li>true: Cloud disk type change has been launched, and migration is in process.
Note: This field may return null, indicating that no valid value was found.
 * @method void setMigrating(boolean $Migrating) 设置Whether cloud disk is in process of type change. Value range: <br><li>false: Cloud disk not in process of type change. <br><li>true: Cloud disk type change has been launched, and migration is in process.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getMigratePercent() 获取Migration progress of cloud disk type change, from 0 to 100.
Note: This field may return null, indicating that no valid value was found.
 * @method void setMigratePercent(integer $MigratePercent) 设置Migration progress of cloud disk type change, from 0 to 100.
Note: This field may return null, indicating that no valid value was found.
 * @method boolean getShareable() 获取Whether or not cloud disk is shareable cloud disk.
 * @method void setShareable(boolean $Shareable) 设置Whether or not cloud disk is shareable cloud disk.
 * @method array getInstanceIdList() 获取For non-shareable cloud disks, this parameter is null. For shareable cloud disks, this parameters indicates this cloud disk’s Instance IDs currently mounted to the CVM.
 * @method void setInstanceIdList(array $InstanceIdList) 设置For non-shareable cloud disks, this parameter is null. For shareable cloud disks, this parameters indicates this cloud disk’s Instance IDs currently mounted to the CVM.
 * @method integer getSnapshotCount() 获取The total number of snapshots of the cloud disk.
 * @method void setSnapshotCount(integer $SnapshotCount) 设置The total number of snapshots of the cloud disk.
 * @method integer getSnapshotSize() 获取The total capacity of the snapshots of the cloud disk. Unit: MB.
 * @method void setSnapshotSize(integer $SnapshotSize) 设置The total capacity of the snapshots of the cloud disk. Unit: MB.
 */

/**
 *The details of a cloud disk
 */
class Disk extends AbstractModel
{
    /**
     * @var string Cloud disk ID.
     */
    public $DiskId;

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
     * @var Placement Location of the cloud disk.
     */
    public $Placement;

    /**
     * @var boolean Whether the cloud disk has the capability to create snapshots. Value range: <br><li>false: Cannot create snapshots. true: Can create snapshots.
     */
    public $SnapshotAbility;

    /**
     * @var string Cloud disk name.
     */
    public $DiskName;

    /**
     * @var integer Cloud disk size (in GB).
     */
    public $DiskSize;

    /**
     * @var string The state of the cloud disk. Value range: <br><li>UNATTACHED: Not mounted <br><li>ATTACHING: Mounting <br><li>ATTACHED: Mounted <br><li>DETACHING: Un-mounting <br><li>EXPANDING: Expanding <br><li>ROLLBACKING: Rolling back <br><li>TORECYCE: Pending recycling. <br><li>DUMPING: Copying the hard drive.
     */
    public $DiskState;

    /**
     * @var string Type of cloud disk medium. Value range: <br><li>CLOUD_BASIC: Ordinary cloud disk <br><li>CLOUD_PREMIUM: Premium cloud storage <br><li>CLOUD_SSD: SSD cloud disk.
     */
    public $DiskType;

    /**
     * @var boolean Whether the cloud disk is mounted to the CVM. Value range: <br><li>false: Unmounted <br><li>true: Mounted.
     */
    public $Attached;

    /**
     * @var string ID of the CVM to which the cloud disk is mounted.
     */
    public $InstanceId;

    /**
     * @var string Creation time of the cloud disk.
     */
    public $CreateTime;

    /**
     * @var string Expiration time of the cloud disk.
     */
    public $DeadlineTime;

    /**
     * @var boolean Whether the cloud disk is in the status of snapshot rollback. Value range: <br><li>false: No <br><li>true: Yes
     */
    public $Rollbacking;

    /**
     * @var integer Rollback progress of a cloud disk snapshot.
     */
    public $RollbackPercent;

    /**
     * @var boolean Whether the cloud disk is encrypted. Value range: <br><li>false: Not encrypted <br><li>true: Encrypted.
     */
    public $Encrypt;

    /**
     * @var boolean Cloud disk already mounted to CVM, and both CVM and cloud disk use monthly subscription.<br><li>true: CVM has auto-renewal flag set up, but cloud disk does not.<br><li>false: Cloud disk auto-renewal flag set up normally.
Note: This field may return null, indicating that no valid value was found.
     */
    public $AutoRenewFlagError;

    /**
     * @var string Auto renewal flag. Supported values:<br><li>NOTIFY_AND_AUTO_RENEW: Notify expiry and renew automatically<br><li>NOTIFY_AND_MANUAL_RENEW: Notify expiry but not renew automatically<br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify expiry nor renew automatically.
Note: This field may return null, indicating that no valid value was found.
     */
    public $RenewFlag;

    /**
     * @var boolean This field is only applicable when the instance is already mounted to the cloud disk, and both the instance and the cloud disk use monthly subscription. <br><li>true: Expiration time of cloud disk is earlier than that of the instance.<br><li>false： Expiration time of cloud disk is later than that of the instance.
Note: This field may return null, indicating that no valid value was found.
     */
    public $DeadlineError;

    /**
     * @var boolean Determines whether or not prepaid cloud disk supports active return. <br><li>true: Active return supported.<br><li>false: Active return not supported.
Note: This field may return null, indicating that no valid value was found.
     */
    public $IsReturnable;

    /**
     * @var integer In circumstances where the prepaid cloud disk does not support active return, this parameter indicates the reason that return is not supported. Value range: <br><li>1: The cloud disk has already been returned. <br><li>2: The cloud disk has already expired. <br><li>3: The cloud disk does not support return. <br><li> 8: The limit on the number of returns is exceeded.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ReturnFailCode;

    /**
     * @var array ID of the periodic snapshot associated to the cloud disk. This parameter is returned only if the value of parameter ReturnBindAutoSnapshotPolicy is TRUE when the API DescribeDisks is called.
Note: This field may return null, indicating that no valid value was found.
     */
    public $AutoSnapshotPolicyIds;

    /**
     * @var array The tag bound to the cloud disk. The value Null is used when no tag is bound to the cloud disk.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Tags;

    /**
     * @var boolean Whether the cloud disk terminates along with the instance mounted to it. <br><li>true: Cloud disk will also be terminated when instance terminates, so only hourly postpaid cloud disk are supported.<br><li>false: Cloud disk does not terminate when instance terminates.
Note: This field may return null, indicating that no valid value was found.
     */
    public $DeleteWithInstance;

    /**
     * @var integer Number of days from current time until disk expiration (only applicable for prepaid disks).
Note: This field may return null, indicating that no valid value was found.
     */
    public $DifferDaysOfDeadline;

    /**
     * @var boolean Whether cloud disk is in process of type change. Value range: <br><li>false: Cloud disk not in process of type change. <br><li>true: Cloud disk type change has been launched, and migration is in process.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Migrating;

    /**
     * @var integer Migration progress of cloud disk type change, from 0 to 100.
Note: This field may return null, indicating that no valid value was found.
     */
    public $MigratePercent;

    /**
     * @var boolean Whether or not cloud disk is shareable cloud disk.
     */
    public $Shareable;

    /**
     * @var array For non-shareable cloud disks, this parameter is null. For shareable cloud disks, this parameters indicates this cloud disk’s Instance IDs currently mounted to the CVM.
     */
    public $InstanceIdList;

    /**
     * @var integer The total number of snapshots of the cloud disk.
     */
    public $SnapshotCount;

    /**
     * @var integer The total capacity of the snapshots of the cloud disk. Unit: MB.
     */
    public $SnapshotSize;
    /**
     * @param string $DiskId Cloud disk ID.
     * @param string $DiskUsage Cloud disk type. Value range:<br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
     * @param string $DiskChargeType Billing method. Value range: <br><li>PREPAID: Prepaid, that is, monthly subscription<br><li>POSTPAID_BY_HOUR: Postpaid, that is, pay as you go.
     * @param boolean $Portable Whether it is an elastic cloud disk. false: Non-elastic cloud disk; true: Elastic cloud disk.
     * @param Placement $Placement Location of the cloud disk.
     * @param boolean $SnapshotAbility Whether the cloud disk has the capability to create snapshots. Value range: <br><li>false: Cannot create snapshots. true: Can create snapshots.
     * @param string $DiskName Cloud disk name.
     * @param integer $DiskSize Cloud disk size (in GB).
     * @param string $DiskState The state of the cloud disk. Value range: <br><li>UNATTACHED: Not mounted <br><li>ATTACHING: Mounting <br><li>ATTACHED: Mounted <br><li>DETACHING: Un-mounting <br><li>EXPANDING: Expanding <br><li>ROLLBACKING: Rolling back <br><li>TORECYCE: Pending recycling. <br><li>DUMPING: Copying the hard drive.
     * @param string $DiskType Type of cloud disk medium. Value range: <br><li>CLOUD_BASIC: Ordinary cloud disk <br><li>CLOUD_PREMIUM: Premium cloud storage <br><li>CLOUD_SSD: SSD cloud disk.
     * @param boolean $Attached Whether the cloud disk is mounted to the CVM. Value range: <br><li>false: Unmounted <br><li>true: Mounted.
     * @param string $InstanceId ID of the CVM to which the cloud disk is mounted.
     * @param string $CreateTime Creation time of the cloud disk.
     * @param string $DeadlineTime Expiration time of the cloud disk.
     * @param boolean $Rollbacking Whether the cloud disk is in the status of snapshot rollback. Value range: <br><li>false: No <br><li>true: Yes
     * @param integer $RollbackPercent Rollback progress of a cloud disk snapshot.
     * @param boolean $Encrypt Whether the cloud disk is encrypted. Value range: <br><li>false: Not encrypted <br><li>true: Encrypted.
     * @param boolean $AutoRenewFlagError Cloud disk already mounted to CVM, and both CVM and cloud disk use monthly subscription.<br><li>true: CVM has auto-renewal flag set up, but cloud disk does not.<br><li>false: Cloud disk auto-renewal flag set up normally.
Note: This field may return null, indicating that no valid value was found.
     * @param string $RenewFlag Auto renewal flag. Supported values:<br><li>NOTIFY_AND_AUTO_RENEW: Notify expiry and renew automatically<br><li>NOTIFY_AND_MANUAL_RENEW: Notify expiry but not renew automatically<br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify expiry nor renew automatically.
Note: This field may return null, indicating that no valid value was found.
     * @param boolean $DeadlineError This field is only applicable when the instance is already mounted to the cloud disk, and both the instance and the cloud disk use monthly subscription. <br><li>true: Expiration time of cloud disk is earlier than that of the instance.<br><li>false： Expiration time of cloud disk is later than that of the instance.
Note: This field may return null, indicating that no valid value was found.
     * @param boolean $IsReturnable Determines whether or not prepaid cloud disk supports active return. <br><li>true: Active return supported.<br><li>false: Active return not supported.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $ReturnFailCode In circumstances where the prepaid cloud disk does not support active return, this parameter indicates the reason that return is not supported. Value range: <br><li>1: The cloud disk has already been returned. <br><li>2: The cloud disk has already expired. <br><li>3: The cloud disk does not support return. <br><li> 8: The limit on the number of returns is exceeded.
Note: This field may return null, indicating that no valid value was found.
     * @param array $AutoSnapshotPolicyIds ID of the periodic snapshot associated to the cloud disk. This parameter is returned only if the value of parameter ReturnBindAutoSnapshotPolicy is TRUE when the API DescribeDisks is called.
Note: This field may return null, indicating that no valid value was found.
     * @param array $Tags The tag bound to the cloud disk. The value Null is used when no tag is bound to the cloud disk.
Note: This field may return null, indicating that no valid value was found.
     * @param boolean $DeleteWithInstance Whether the cloud disk terminates along with the instance mounted to it. <br><li>true: Cloud disk will also be terminated when instance terminates, so only hourly postpaid cloud disk are supported.<br><li>false: Cloud disk does not terminate when instance terminates.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $DifferDaysOfDeadline Number of days from current time until disk expiration (only applicable for prepaid disks).
Note: This field may return null, indicating that no valid value was found.
     * @param boolean $Migrating Whether cloud disk is in process of type change. Value range: <br><li>false: Cloud disk not in process of type change. <br><li>true: Cloud disk type change has been launched, and migration is in process.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $MigratePercent Migration progress of cloud disk type change, from 0 to 100.
Note: This field may return null, indicating that no valid value was found.
     * @param boolean $Shareable Whether or not cloud disk is shareable cloud disk.
     * @param array $InstanceIdList For non-shareable cloud disks, this parameter is null. For shareable cloud disks, this parameters indicates this cloud disk’s Instance IDs currently mounted to the CVM.
     * @param integer $SnapshotCount The total number of snapshots of the cloud disk.
     * @param integer $SnapshotSize The total capacity of the snapshots of the cloud disk. Unit: MB.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
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

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("SnapshotAbility",$param) and $param["SnapshotAbility"] !== null) {
            $this->SnapshotAbility = $param["SnapshotAbility"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskState",$param) and $param["DiskState"] !== null) {
            $this->DiskState = $param["DiskState"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("Attached",$param) and $param["Attached"] !== null) {
            $this->Attached = $param["Attached"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("Rollbacking",$param) and $param["Rollbacking"] !== null) {
            $this->Rollbacking = $param["Rollbacking"];
        }

        if (array_key_exists("RollbackPercent",$param) and $param["RollbackPercent"] !== null) {
            $this->RollbackPercent = $param["RollbackPercent"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("AutoRenewFlagError",$param) and $param["AutoRenewFlagError"] !== null) {
            $this->AutoRenewFlagError = $param["AutoRenewFlagError"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("DeadlineError",$param) and $param["DeadlineError"] !== null) {
            $this->DeadlineError = $param["DeadlineError"];
        }

        if (array_key_exists("IsReturnable",$param) and $param["IsReturnable"] !== null) {
            $this->IsReturnable = $param["IsReturnable"];
        }

        if (array_key_exists("ReturnFailCode",$param) and $param["ReturnFailCode"] !== null) {
            $this->ReturnFailCode = $param["ReturnFailCode"];
        }

        if (array_key_exists("AutoSnapshotPolicyIds",$param) and $param["AutoSnapshotPolicyIds"] !== null) {
            $this->AutoSnapshotPolicyIds = $param["AutoSnapshotPolicyIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("DifferDaysOfDeadline",$param) and $param["DifferDaysOfDeadline"] !== null) {
            $this->DifferDaysOfDeadline = $param["DifferDaysOfDeadline"];
        }

        if (array_key_exists("Migrating",$param) and $param["Migrating"] !== null) {
            $this->Migrating = $param["Migrating"];
        }

        if (array_key_exists("MigratePercent",$param) and $param["MigratePercent"] !== null) {
            $this->MigratePercent = $param["MigratePercent"];
        }

        if (array_key_exists("Shareable",$param) and $param["Shareable"] !== null) {
            $this->Shareable = $param["Shareable"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("SnapshotCount",$param) and $param["SnapshotCount"] !== null) {
            $this->SnapshotCount = $param["SnapshotCount"];
        }

        if (array_key_exists("SnapshotSize",$param) and $param["SnapshotSize"] !== null) {
            $this->SnapshotSize = $param["SnapshotSize"];
        }
    }
}
