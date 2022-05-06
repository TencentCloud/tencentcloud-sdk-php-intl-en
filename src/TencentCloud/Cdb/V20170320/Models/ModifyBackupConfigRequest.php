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
 * ModifyBackupConfig request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method integer getExpireDays() Obtain Backup file retention period in days. Value range: 7-1830.
 * @method void setExpireDays(integer $ExpireDays) Set Backup file retention period in days. Value range: 7-1830.
 * @method string getStartTime() Obtain (This parameter will be disused. The `BackupTimeWindow` parameter is recommended.) Backup time range in the format of 02:00-06:00, with the start time and end time on the hour. Valid values: 00:00-12:00, 02:00-06:00, 06:00-10:00, 10:00-14:00, 14:00-18:00, 18:00-22:00, 22:00-02:00.
 * @method void setStartTime(string $StartTime) Set (This parameter will be disused. The `BackupTimeWindow` parameter is recommended.) Backup time range in the format of 02:00-06:00, with the start time and end time on the hour. Valid values: 00:00-12:00, 02:00-06:00, 06:00-10:00, 10:00-14:00, 14:00-18:00, 18:00-22:00, 22:00-02:00.
 * @method string getBackupMethod() Obtain Automatic backup mode. Only `physical` (physical cold backup) is supported
 * @method void setBackupMethod(string $BackupMethod) Set Automatic backup mode. Only `physical` (physical cold backup) is supported
 * @method integer getBinlogExpireDays() Obtain Binlog retention period in days. Value range: 7-1830. It can’t be greater than the retention period of backup files.
 * @method void setBinlogExpireDays(integer $BinlogExpireDays) Set Binlog retention period in days. Value range: 7-1830. It can’t be greater than the retention period of backup files.
 * @method CommonTimeWindow getBackupTimeWindow() Obtain Backup time window; for example, to set up backup between 10:00 and 14:00 on every Tuesday and Sunday, you should set this parameter as follows: {"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"} (Note: You can set up backup on different days, but the backup time windows need to be the same. If this field is set, the `StartTime` field will be ignored)
 * @method void setBackupTimeWindow(CommonTimeWindow $BackupTimeWindow) Set Backup time window; for example, to set up backup between 10:00 and 14:00 on every Tuesday and Sunday, you should set this parameter as follows: {"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"} (Note: You can set up backup on different days, but the backup time windows need to be the same. If this field is set, the `StartTime` field will be ignored)
 * @method string getEnableBackupPeriodSave() Obtain Switch for archive backup retention. Valid values: `off` (disable), `on` (enable). Default value:`off`.
 * @method void setEnableBackupPeriodSave(string $EnableBackupPeriodSave) Set Switch for archive backup retention. Valid values: `off` (disable), `on` (enable). Default value:`off`.
 * @method string getEnableBackupPeriodLongTermSave() Obtain Switch for long-term backup retention (This field can be ignored, for its feature hasn’t been launched). Valid values: `off` (disable), `on` (enable). Default value: `off`. Once enabled, the parameters (BackupPeriodSaveDays, BackupPeriodSaveInterval, and BackupPeriodSaveCount) will be invalid.
 * @method void setEnableBackupPeriodLongTermSave(string $EnableBackupPeriodLongTermSave) Set Switch for long-term backup retention (This field can be ignored, for its feature hasn’t been launched). Valid values: `off` (disable), `on` (enable). Default value: `off`. Once enabled, the parameters (BackupPeriodSaveDays, BackupPeriodSaveInterval, and BackupPeriodSaveCount) will be invalid.
 * @method integer getBackupPeriodSaveDays() Obtain Maximum days of archive backup retention. Valid range: 90-3650. Default value: 1080.
 * @method void setBackupPeriodSaveDays(integer $BackupPeriodSaveDays) Set Maximum days of archive backup retention. Valid range: 90-3650. Default value: 1080.
 * @method string getBackupPeriodSaveInterval() Obtain Archive backup retention period. Valid values: `weekly` (a week), `monthly` (a month), `quarterly` (a quarter), `yearly` (a year). Default value: `monthly`.
 * @method void setBackupPeriodSaveInterval(string $BackupPeriodSaveInterval) Set Archive backup retention period. Valid values: `weekly` (a week), `monthly` (a month), `quarterly` (a quarter), `yearly` (a year). Default value: `monthly`.
 * @method integer getBackupPeriodSaveCount() Obtain Number of archive backups. Minimum value: `1`, Maximum value: Number of non-archive backups in archive backup retention period. Default value: `1`.
 * @method void setBackupPeriodSaveCount(integer $BackupPeriodSaveCount) Set Number of archive backups. Minimum value: `1`, Maximum value: Number of non-archive backups in archive backup retention period. Default value: `1`.
 * @method string getStartBackupPeriodSaveDate() Obtain The start time in the format of yyyy-mm-dd HH:MM:SS, which is used to enable archive backup retention policy.
 * @method void setStartBackupPeriodSaveDate(string $StartBackupPeriodSaveDate) Set The start time in the format of yyyy-mm-dd HH:MM:SS, which is used to enable archive backup retention policy.
 */
class ModifyBackupConfigRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var integer Backup file retention period in days. Value range: 7-1830.
     */
    public $ExpireDays;

    /**
     * @var string (This parameter will be disused. The `BackupTimeWindow` parameter is recommended.) Backup time range in the format of 02:00-06:00, with the start time and end time on the hour. Valid values: 00:00-12:00, 02:00-06:00, 06:00-10:00, 10:00-14:00, 14:00-18:00, 18:00-22:00, 22:00-02:00.
     */
    public $StartTime;

    /**
     * @var string Automatic backup mode. Only `physical` (physical cold backup) is supported
     */
    public $BackupMethod;

    /**
     * @var integer Binlog retention period in days. Value range: 7-1830. It can’t be greater than the retention period of backup files.
     */
    public $BinlogExpireDays;

    /**
     * @var CommonTimeWindow Backup time window; for example, to set up backup between 10:00 and 14:00 on every Tuesday and Sunday, you should set this parameter as follows: {"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"} (Note: You can set up backup on different days, but the backup time windows need to be the same. If this field is set, the `StartTime` field will be ignored)
     */
    public $BackupTimeWindow;

    /**
     * @var string Switch for archive backup retention. Valid values: `off` (disable), `on` (enable). Default value:`off`.
     */
    public $EnableBackupPeriodSave;

    /**
     * @var string Switch for long-term backup retention (This field can be ignored, for its feature hasn’t been launched). Valid values: `off` (disable), `on` (enable). Default value: `off`. Once enabled, the parameters (BackupPeriodSaveDays, BackupPeriodSaveInterval, and BackupPeriodSaveCount) will be invalid.
     */
    public $EnableBackupPeriodLongTermSave;

    /**
     * @var integer Maximum days of archive backup retention. Valid range: 90-3650. Default value: 1080.
     */
    public $BackupPeriodSaveDays;

    /**
     * @var string Archive backup retention period. Valid values: `weekly` (a week), `monthly` (a month), `quarterly` (a quarter), `yearly` (a year). Default value: `monthly`.
     */
    public $BackupPeriodSaveInterval;

    /**
     * @var integer Number of archive backups. Minimum value: `1`, Maximum value: Number of non-archive backups in archive backup retention period. Default value: `1`.
     */
    public $BackupPeriodSaveCount;

    /**
     * @var string The start time in the format of yyyy-mm-dd HH:MM:SS, which is used to enable archive backup retention policy.
     */
    public $StartBackupPeriodSaveDate;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param integer $ExpireDays Backup file retention period in days. Value range: 7-1830.
     * @param string $StartTime (This parameter will be disused. The `BackupTimeWindow` parameter is recommended.) Backup time range in the format of 02:00-06:00, with the start time and end time on the hour. Valid values: 00:00-12:00, 02:00-06:00, 06:00-10:00, 10:00-14:00, 14:00-18:00, 18:00-22:00, 22:00-02:00.
     * @param string $BackupMethod Automatic backup mode. Only `physical` (physical cold backup) is supported
     * @param integer $BinlogExpireDays Binlog retention period in days. Value range: 7-1830. It can’t be greater than the retention period of backup files.
     * @param CommonTimeWindow $BackupTimeWindow Backup time window; for example, to set up backup between 10:00 and 14:00 on every Tuesday and Sunday, you should set this parameter as follows: {"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"} (Note: You can set up backup on different days, but the backup time windows need to be the same. If this field is set, the `StartTime` field will be ignored)
     * @param string $EnableBackupPeriodSave Switch for archive backup retention. Valid values: `off` (disable), `on` (enable). Default value:`off`.
     * @param string $EnableBackupPeriodLongTermSave Switch for long-term backup retention (This field can be ignored, for its feature hasn’t been launched). Valid values: `off` (disable), `on` (enable). Default value: `off`. Once enabled, the parameters (BackupPeriodSaveDays, BackupPeriodSaveInterval, and BackupPeriodSaveCount) will be invalid.
     * @param integer $BackupPeriodSaveDays Maximum days of archive backup retention. Valid range: 90-3650. Default value: 1080.
     * @param string $BackupPeriodSaveInterval Archive backup retention period. Valid values: `weekly` (a week), `monthly` (a month), `quarterly` (a quarter), `yearly` (a year). Default value: `monthly`.
     * @param integer $BackupPeriodSaveCount Number of archive backups. Minimum value: `1`, Maximum value: Number of non-archive backups in archive backup retention period. Default value: `1`.
     * @param string $StartBackupPeriodSaveDate The start time in the format of yyyy-mm-dd HH:MM:SS, which is used to enable archive backup retention policy.
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

        if (array_key_exists("ExpireDays",$param) and $param["ExpireDays"] !== null) {
            $this->ExpireDays = $param["ExpireDays"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BinlogExpireDays",$param) and $param["BinlogExpireDays"] !== null) {
            $this->BinlogExpireDays = $param["BinlogExpireDays"];
        }

        if (array_key_exists("BackupTimeWindow",$param) and $param["BackupTimeWindow"] !== null) {
            $this->BackupTimeWindow = new CommonTimeWindow();
            $this->BackupTimeWindow->deserialize($param["BackupTimeWindow"]);
        }

        if (array_key_exists("EnableBackupPeriodSave",$param) and $param["EnableBackupPeriodSave"] !== null) {
            $this->EnableBackupPeriodSave = $param["EnableBackupPeriodSave"];
        }

        if (array_key_exists("EnableBackupPeriodLongTermSave",$param) and $param["EnableBackupPeriodLongTermSave"] !== null) {
            $this->EnableBackupPeriodLongTermSave = $param["EnableBackupPeriodLongTermSave"];
        }

        if (array_key_exists("BackupPeriodSaveDays",$param) and $param["BackupPeriodSaveDays"] !== null) {
            $this->BackupPeriodSaveDays = $param["BackupPeriodSaveDays"];
        }

        if (array_key_exists("BackupPeriodSaveInterval",$param) and $param["BackupPeriodSaveInterval"] !== null) {
            $this->BackupPeriodSaveInterval = $param["BackupPeriodSaveInterval"];
        }

        if (array_key_exists("BackupPeriodSaveCount",$param) and $param["BackupPeriodSaveCount"] !== null) {
            $this->BackupPeriodSaveCount = $param["BackupPeriodSaveCount"];
        }

        if (array_key_exists("StartBackupPeriodSaveDate",$param) and $param["StartBackupPeriodSaveDate"] !== null) {
            $this->StartBackupPeriodSaveDate = $param["StartBackupPeriodSaveDate"];
        }
    }
}
