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
 * Backup set object
 *
 * @method integer getBackupDuration() Obtain Backup set duration, unit sec
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupDuration(integer $BackupDuration) Set Backup set duration, unit sec
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBackupMethod() Obtain Backup method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupMethod(string $BackupMethod) Set Backup method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBackupName() Obtain Backup note name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupName(string $BackupName) Set Backup note name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getBackupProgress() Obtain Backup set progress percentage
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupProgress(float $BackupProgress) Set Backup set progress percentage
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBackupSetId() Obtain Backup set ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupSetId(integer $BackupSetId) Set Backup set ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBackupStatus() Obtain Backup status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupStatus(string $BackupStatus) Set Backup status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBackupType() Obtain Backup set type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupType(string $BackupType) Set Backup set type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDBVersion() Obtain Instance version number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDBVersion(string $DBVersion) Set Instance version number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Backup end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Backup end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTrxTime() Obtain Transaction commit end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTrxTime(string $EndTrxTime) Set Transaction commit end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorMessage() Obtain Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorMessage(string $ErrorMessage) Set Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpiredTime() Obtain Backup expiration time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpiredTime(string $ExpiredTime) Set Backup expiration time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileName() Obtain Backup file name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileName(string $FileName) Set Backup file name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFileSize() Obtain Backup set file size in Byte
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileSize(integer $FileSize) Set Backup set file size in Byte
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getManualBackup() Obtain Backup trigger. 0: autobackup; 1: manual.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setManualBackup(integer $ManualBackup) Set Backup trigger. 0: autobackup; 1: manual.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Backup start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Backup start time.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BackupSetModel extends AbstractModel
{
    /**
     * @var integer Backup set duration, unit sec
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupDuration;

    /**
     * @var string Backup method
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupMethod;

    /**
     * @var string Backup note name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupName;

    /**
     * @var float Backup set progress percentage
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupProgress;

    /**
     * @var integer Backup set ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupSetId;

    /**
     * @var string Backup status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupStatus;

    /**
     * @var string Backup set type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupType;

    /**
     * @var string Instance version number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DBVersion;

    /**
     * @var string Backup end time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Transaction commit end time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTrxTime;

    /**
     * @var string Error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMessage;

    /**
     * @var string Backup expiration time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpiredTime;

    /**
     * @var string Backup file name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileName;

    /**
     * @var integer Backup set file size in Byte
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileSize;

    /**
     * @var string Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var integer Backup trigger. 0: autobackup; 1: manual.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ManualBackup;

    /**
     * @var string Backup start time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @param integer $BackupDuration Backup set duration, unit sec
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BackupMethod Backup method
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BackupName Backup note name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $BackupProgress Backup set progress percentage
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BackupSetId Backup set ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BackupStatus Backup status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BackupType Backup set type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DBVersion Instance version number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Backup end time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTrxTime Transaction commit end time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMessage Error message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpiredTime Backup expiration time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileName Backup file name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FileSize Backup set file size in Byte
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ManualBackup Backup trigger. 0: autobackup; 1: manual.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Backup start time.
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
        if (array_key_exists("BackupDuration",$param) and $param["BackupDuration"] !== null) {
            $this->BackupDuration = $param["BackupDuration"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("BackupProgress",$param) and $param["BackupProgress"] !== null) {
            $this->BackupProgress = $param["BackupProgress"];
        }

        if (array_key_exists("BackupSetId",$param) and $param["BackupSetId"] !== null) {
            $this->BackupSetId = $param["BackupSetId"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EndTrxTime",$param) and $param["EndTrxTime"] !== null) {
            $this->EndTrxTime = $param["EndTrxTime"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ManualBackup",$param) and $param["ManualBackup"] !== null) {
            $this->ManualBackup = $param["ManualBackup"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
