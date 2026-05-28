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
 * Archive log object
 *
 * @method integer getArchiveLogId() Obtain Archivelog ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setArchiveLogId(integer $ArchiveLogId) Set Archivelog ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBackupDuration() Obtain Backup duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupDuration(integer $BackupDuration) Set Backup duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBackupStatus() Obtain Backup status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupStatus(string $BackupStatus) Set Backup status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Backup end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Backup end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorMessage() Obtain Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorMessage(string $ErrorMessage) Set Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpiredTime() Obtain Expiration time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpiredTime(string $ExpiredTime) Set Expiration time
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
 * @method string getStartTime() Obtain Backup start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Backup start time.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ArchiveLogModel extends AbstractModel
{
    /**
     * @var integer Archivelog ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ArchiveLogId;

    /**
     * @var integer Backup duration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupDuration;

    /**
     * @var string Backup status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupStatus;

    /**
     * @var string Backup end time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMessage;

    /**
     * @var string Expiration time
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
     * @var string Backup start time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @param integer $ArchiveLogId Archivelog ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BackupDuration Backup duration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BackupStatus Backup status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Backup end time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMessage Error message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpiredTime Expiration time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileName Backup file name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FileSize Backup set file size in Byte
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID.
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
        if (array_key_exists("ArchiveLogId",$param) and $param["ArchiveLogId"] !== null) {
            $this->ArchiveLogId = $param["ArchiveLogId"];
        }

        if (array_key_exists("BackupDuration",$param) and $param["BackupDuration"] !== null) {
            $this->BackupDuration = $param["BackupDuration"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
