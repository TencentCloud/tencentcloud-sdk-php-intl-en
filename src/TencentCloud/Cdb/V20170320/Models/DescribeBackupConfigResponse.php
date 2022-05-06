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
 * DescribeBackupConfig response structure.
 *
 * @method integer getStartTimeMin() Obtain Earliest start time point of automatic backup, such as 2 (for 2:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
 * @method void setStartTimeMin(integer $StartTimeMin) Set Earliest start time point of automatic backup, such as 2 (for 2:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
 * @method integer getStartTimeMax() Obtain Latest start time point of automatic backup, such as 6 (for 6:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
 * @method void setStartTimeMax(integer $StartTimeMax) Set Latest start time point of automatic backup, such as 6 (for 6:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
 * @method integer getBackupExpireDays() Obtain Backup file retention period in days.
 * @method void setBackupExpireDays(integer $BackupExpireDays) Set Backup file retention period in days.
 * @method string getBackupMethod() Obtain Backup mode. Value range: physical, logical
 * @method void setBackupMethod(string $BackupMethod) Set Backup mode. Value range: physical, logical
 * @method integer getBinlogExpireDays() Obtain Binlog file retention period in days.
 * @method void setBinlogExpireDays(integer $BinlogExpireDays) Set Binlog file retention period in days.
 * @method CommonTimeWindow getBackupTimeWindow() Obtain Time window for automatic instance backup.
 * @method void setBackupTimeWindow(CommonTimeWindow $BackupTimeWindow) Set Time window for automatic instance backup.
 * @method string getEnableBackupPeriodSave() Obtain Switch for archive backup retention. Valid values: `off` (disable), `on` (enable). Default value:`off`.
 * @method void setEnableBackupPeriodSave(string $EnableBackupPeriodSave) Set Switch for archive backup retention. Valid values: `off` (disable), `on` (enable). Default value:`off`.
 * @method integer getBackupPeriodSaveDays() Obtain Maximum days of archive backup retention. Valid range: 90-3650. Default value: 1080.
 * @method void setBackupPeriodSaveDays(integer $BackupPeriodSaveDays) Set Maximum days of archive backup retention. Valid range: 90-3650. Default value: 1080.
 * @method string getBackupPeriodSaveInterval() Obtain Archive backup retention period. Valid values: `weekly` (a week), `monthly` (a month), `quarterly` (a quarter), `yearly` (a year). Default value: `monthly`.
 * @method void setBackupPeriodSaveInterval(string $BackupPeriodSaveInterval) Set Archive backup retention period. Valid values: `weekly` (a week), `monthly` (a month), `quarterly` (a quarter), `yearly` (a year). Default value: `monthly`.
 * @method integer getBackupPeriodSaveCount() Obtain Number of archive backups. Minimum value: `1`, Maximum value: Number of non-archive backups in archive backup retention period. Default value: `1`.
 * @method void setBackupPeriodSaveCount(integer $BackupPeriodSaveCount) Set Number of archive backups. Minimum value: `1`, Maximum value: Number of non-archive backups in archive backup retention period. Default value: `1`.
 * @method string getStartBackupPeriodSaveDate() Obtain The start time in the format: yyyy-mm-dd HH:MM:SS, which is used to enable archive backup retention policy.
 * @method void setStartBackupPeriodSaveDate(string $StartBackupPeriodSaveDate) Set The start time in the format: yyyy-mm-dd HH:MM:SS, which is used to enable archive backup retention policy.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBackupConfigResponse extends AbstractModel
{
    /**
     * @var integer Earliest start time point of automatic backup, such as 2 (for 2:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
     */
    public $StartTimeMin;

    /**
     * @var integer Latest start time point of automatic backup, such as 6 (for 6:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
     */
    public $StartTimeMax;

    /**
     * @var integer Backup file retention period in days.
     */
    public $BackupExpireDays;

    /**
     * @var string Backup mode. Value range: physical, logical
     */
    public $BackupMethod;

    /**
     * @var integer Binlog file retention period in days.
     */
    public $BinlogExpireDays;

    /**
     * @var CommonTimeWindow Time window for automatic instance backup.
     */
    public $BackupTimeWindow;

    /**
     * @var string Switch for archive backup retention. Valid values: `off` (disable), `on` (enable). Default value:`off`.
     */
    public $EnableBackupPeriodSave;

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
     * @var string The start time in the format: yyyy-mm-dd HH:MM:SS, which is used to enable archive backup retention policy.
     */
    public $StartBackupPeriodSaveDate;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $StartTimeMin Earliest start time point of automatic backup, such as 2 (for 2:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
     * @param integer $StartTimeMax Latest start time point of automatic backup, such as 6 (for 6:00 AM). (This field has been disused. You are recommended to use the `BackupTimeWindow` field)
     * @param integer $BackupExpireDays Backup file retention period in days.
     * @param string $BackupMethod Backup mode. Value range: physical, logical
     * @param integer $BinlogExpireDays Binlog file retention period in days.
     * @param CommonTimeWindow $BackupTimeWindow Time window for automatic instance backup.
     * @param string $EnableBackupPeriodSave Switch for archive backup retention. Valid values: `off` (disable), `on` (enable). Default value:`off`.
     * @param integer $BackupPeriodSaveDays Maximum days of archive backup retention. Valid range: 90-3650. Default value: 1080.
     * @param string $BackupPeriodSaveInterval Archive backup retention period. Valid values: `weekly` (a week), `monthly` (a month), `quarterly` (a quarter), `yearly` (a year). Default value: `monthly`.
     * @param integer $BackupPeriodSaveCount Number of archive backups. Minimum value: `1`, Maximum value: Number of non-archive backups in archive backup retention period. Default value: `1`.
     * @param string $StartBackupPeriodSaveDate The start time in the format: yyyy-mm-dd HH:MM:SS, which is used to enable archive backup retention policy.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("StartTimeMin",$param) and $param["StartTimeMin"] !== null) {
            $this->StartTimeMin = $param["StartTimeMin"];
        }

        if (array_key_exists("StartTimeMax",$param) and $param["StartTimeMax"] !== null) {
            $this->StartTimeMax = $param["StartTimeMax"];
        }

        if (array_key_exists("BackupExpireDays",$param) and $param["BackupExpireDays"] !== null) {
            $this->BackupExpireDays = $param["BackupExpireDays"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
