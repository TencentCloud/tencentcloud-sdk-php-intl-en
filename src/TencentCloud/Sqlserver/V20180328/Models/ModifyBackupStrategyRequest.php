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
 * ModifyBackupStrategy request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getBackupType() Obtain Backup type. Valid values: `weekly` (when length(BackupDay) <=7 && length(BackupDay) >=2), `daily` (when length(BackupDay)=1). Default value: `daily`.
 * @method void setBackupType(string $BackupType) Set Backup type. Valid values: `weekly` (when length(BackupDay) <=7 && length(BackupDay) >=2), `daily` (when length(BackupDay)=1). Default value: `daily`.
 * @method integer getBackupTime() Obtain Backup time. Value range: an integer from 0 to 23.
 * @method void setBackupTime(integer $BackupTime) Set Backup time. Value range: an integer from 0 to 23.
 * @method integer getBackupDay() Obtain Backup interval in days when the `BackupType` is `daily`. Valid value: 1.
 * @method void setBackupDay(integer $BackupDay) Set Backup interval in days when the `BackupType` is `daily`. Valid value: 1.
 * @method string getBackupModel() Obtain Backup mode. Valid values: `master_pkg` (archive the backup files of the primary node), `master_no_pkg` (do not archive the backup files of the primary node), `slave_pkg` (archive the backup files of the replica node), `slave_no_pkg` (do not archive the backup files of the replica node). Backup files of the replica node are supported only when Always On disaster recovery is enabled.
 * @method void setBackupModel(string $BackupModel) Set Backup mode. Valid values: `master_pkg` (archive the backup files of the primary node), `master_no_pkg` (do not archive the backup files of the primary node), `slave_pkg` (archive the backup files of the replica node), `slave_no_pkg` (do not archive the backup files of the replica node). Backup files of the replica node are supported only when Always On disaster recovery is enabled.
 * @method array getBackupCycle() Obtain The days of the week on which backup will be performed when “BackupType” is `weekly`. If data backup retention period is less than 7 days, the values will be 1-7, indicating that backup will be performed everyday by default; if data backup retention period is greater than or equal to 7 days, the values will be at least any two days, indicating that backup will be performed at least twice in a week by default.
 * @method void setBackupCycle(array $BackupCycle) Set The days of the week on which backup will be performed when “BackupType” is `weekly`. If data backup retention period is less than 7 days, the values will be 1-7, indicating that backup will be performed everyday by default; if data backup retention period is greater than or equal to 7 days, the values will be at least any two days, indicating that backup will be performed at least twice in a week by default.
 * @method integer getBackupSaveDays() Obtain Data (log) backup retention period. Value range: 3-1830 days, default value: 7 days.
 * @method void setBackupSaveDays(integer $BackupSaveDays) Set Data (log) backup retention period. Value range: 3-1830 days, default value: 7 days.
 * @method string getRegularBackupEnable() Obtain Archive backup status. Valid values: `enable` (enabled); `disable` (disabled). Default value: `disable`.
 * @method void setRegularBackupEnable(string $RegularBackupEnable) Set Archive backup status. Valid values: `enable` (enabled); `disable` (disabled). Default value: `disable`.
 * @method integer getRegularBackupSaveDays() Obtain Archive backup retention days. Value range: 90–3650 days. Default value: 365 days.
 * @method void setRegularBackupSaveDays(integer $RegularBackupSaveDays) Set Archive backup retention days. Value range: 90–3650 days. Default value: 365 days.
 * @method string getRegularBackupStrategy() Obtain Archive backup policy. Valid values: `years` (yearly); `quarters (quarterly); `months` (monthly); Default value: `months`.
 * @method void setRegularBackupStrategy(string $RegularBackupStrategy) Set Archive backup policy. Valid values: `years` (yearly); `quarters (quarterly); `months` (monthly); Default value: `months`.
 * @method integer getRegularBackupCounts() Obtain The number of retained archive backups. Default value: `1`.
 * @method void setRegularBackupCounts(integer $RegularBackupCounts) Set The number of retained archive backups. Default value: `1`.
 * @method string getRegularBackupStartTime() Obtain Archive backup start date in YYYY-MM-DD format, which is the current time by default.
 * @method void setRegularBackupStartTime(string $RegularBackupStartTime) Set Archive backup start date in YYYY-MM-DD format, which is the current time by default.
 */
class ModifyBackupStrategyRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Backup type. Valid values: `weekly` (when length(BackupDay) <=7 && length(BackupDay) >=2), `daily` (when length(BackupDay)=1). Default value: `daily`.
     */
    public $BackupType;

    /**
     * @var integer Backup time. Value range: an integer from 0 to 23.
     */
    public $BackupTime;

    /**
     * @var integer Backup interval in days when the `BackupType` is `daily`. Valid value: 1.
     */
    public $BackupDay;

    /**
     * @var string Backup mode. Valid values: `master_pkg` (archive the backup files of the primary node), `master_no_pkg` (do not archive the backup files of the primary node), `slave_pkg` (archive the backup files of the replica node), `slave_no_pkg` (do not archive the backup files of the replica node). Backup files of the replica node are supported only when Always On disaster recovery is enabled.
     */
    public $BackupModel;

    /**
     * @var array The days of the week on which backup will be performed when “BackupType” is `weekly`. If data backup retention period is less than 7 days, the values will be 1-7, indicating that backup will be performed everyday by default; if data backup retention period is greater than or equal to 7 days, the values will be at least any two days, indicating that backup will be performed at least twice in a week by default.
     */
    public $BackupCycle;

    /**
     * @var integer Data (log) backup retention period. Value range: 3-1830 days, default value: 7 days.
     */
    public $BackupSaveDays;

    /**
     * @var string Archive backup status. Valid values: `enable` (enabled); `disable` (disabled). Default value: `disable`.
     */
    public $RegularBackupEnable;

    /**
     * @var integer Archive backup retention days. Value range: 90–3650 days. Default value: 365 days.
     */
    public $RegularBackupSaveDays;

    /**
     * @var string Archive backup policy. Valid values: `years` (yearly); `quarters (quarterly); `months` (monthly); Default value: `months`.
     */
    public $RegularBackupStrategy;

    /**
     * @var integer The number of retained archive backups. Default value: `1`.
     */
    public $RegularBackupCounts;

    /**
     * @var string Archive backup start date in YYYY-MM-DD format, which is the current time by default.
     */
    public $RegularBackupStartTime;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $BackupType Backup type. Valid values: `weekly` (when length(BackupDay) <=7 && length(BackupDay) >=2), `daily` (when length(BackupDay)=1). Default value: `daily`.
     * @param integer $BackupTime Backup time. Value range: an integer from 0 to 23.
     * @param integer $BackupDay Backup interval in days when the `BackupType` is `daily`. Valid value: 1.
     * @param string $BackupModel Backup mode. Valid values: `master_pkg` (archive the backup files of the primary node), `master_no_pkg` (do not archive the backup files of the primary node), `slave_pkg` (archive the backup files of the replica node), `slave_no_pkg` (do not archive the backup files of the replica node). Backup files of the replica node are supported only when Always On disaster recovery is enabled.
     * @param array $BackupCycle The days of the week on which backup will be performed when “BackupType” is `weekly`. If data backup retention period is less than 7 days, the values will be 1-7, indicating that backup will be performed everyday by default; if data backup retention period is greater than or equal to 7 days, the values will be at least any two days, indicating that backup will be performed at least twice in a week by default.
     * @param integer $BackupSaveDays Data (log) backup retention period. Value range: 3-1830 days, default value: 7 days.
     * @param string $RegularBackupEnable Archive backup status. Valid values: `enable` (enabled); `disable` (disabled). Default value: `disable`.
     * @param integer $RegularBackupSaveDays Archive backup retention days. Value range: 90–3650 days. Default value: 365 days.
     * @param string $RegularBackupStrategy Archive backup policy. Valid values: `years` (yearly); `quarters (quarterly); `months` (monthly); Default value: `months`.
     * @param integer $RegularBackupCounts The number of retained archive backups. Default value: `1`.
     * @param string $RegularBackupStartTime Archive backup start date in YYYY-MM-DD format, which is the current time by default.
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

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("BackupDay",$param) and $param["BackupDay"] !== null) {
            $this->BackupDay = $param["BackupDay"];
        }

        if (array_key_exists("BackupModel",$param) and $param["BackupModel"] !== null) {
            $this->BackupModel = $param["BackupModel"];
        }

        if (array_key_exists("BackupCycle",$param) and $param["BackupCycle"] !== null) {
            $this->BackupCycle = $param["BackupCycle"];
        }

        if (array_key_exists("BackupSaveDays",$param) and $param["BackupSaveDays"] !== null) {
            $this->BackupSaveDays = $param["BackupSaveDays"];
        }

        if (array_key_exists("RegularBackupEnable",$param) and $param["RegularBackupEnable"] !== null) {
            $this->RegularBackupEnable = $param["RegularBackupEnable"];
        }

        if (array_key_exists("RegularBackupSaveDays",$param) and $param["RegularBackupSaveDays"] !== null) {
            $this->RegularBackupSaveDays = $param["RegularBackupSaveDays"];
        }

        if (array_key_exists("RegularBackupStrategy",$param) and $param["RegularBackupStrategy"] !== null) {
            $this->RegularBackupStrategy = $param["RegularBackupStrategy"];
        }

        if (array_key_exists("RegularBackupCounts",$param) and $param["RegularBackupCounts"] !== null) {
            $this->RegularBackupCounts = $param["RegularBackupCounts"];
        }

        if (array_key_exists("RegularBackupStartTime",$param) and $param["RegularBackupStartTime"] !== null) {
            $this->RegularBackupStartTime = $param["RegularBackupStartTime"];
        }
    }
}
