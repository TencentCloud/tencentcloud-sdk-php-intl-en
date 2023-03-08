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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Array of instance backups
 *
 * @method string getStartTime() Obtain Backup start time
 * @method void setStartTime(string $StartTime) Set Backup start time
 * @method string getBackupId() Obtain Backup ID
 * @method void setBackupId(string $BackupId) Set Backup ID
 * @method string getBackupType() Obtain Backup type

- `1`: Manual backup initiated by the user.
- `0`: Automatic backup in the early morning initiated by the system.
 * @method void setBackupType(string $BackupType) Set Backup type

- `1`: Manual backup initiated by the user.
- `0`: Automatic backup in the early morning initiated by the system.
 * @method integer getStatus() Obtain Backup status 

- `1`: The backup is locked by another process.
- `2`: The backup is normal and not locked by any process.
- `-1`: The backup expired.
- `3`: The backup is being exported.
- `4`: The backup was exported successfully.
 * @method void setStatus(integer $Status) Set Backup status 

- `1`: The backup is locked by another process.
- `2`: The backup is normal and not locked by any process.
- `-1`: The backup expired.
- `3`: The backup is being exported.
- `4`: The backup was exported successfully.
 * @method string getRemark() Obtain Backup remarks
 * @method void setRemark(string $Remark) Set Backup remarks
 * @method integer getLocked() Obtain Whether the backup is locked

- `0`: Not locked.
- `1`: Locked.
 * @method void setLocked(integer $Locked) Set Whether the backup is locked

- `0`: Not locked.
- `1`: Locked.
 * @method integer getBackupSize() Obtain Internal field, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupSize(integer $BackupSize) Set Internal field, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFullBackup() Obtain Internal field, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullBackup(integer $FullBackup) Set Internal field, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceType() Obtain Internal field, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(integer $InstanceType) Set Internal field, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getRegion() Obtain The region where the local backup resides.
 * @method void setRegion(string $Region) Set The region where the local backup resides.
 * @method string getEndTime() Obtain Backup end time
 * @method void setEndTime(string $EndTime) Set Backup end time
 * @method string getFileType() Obtain Backup file type
 * @method void setFileType(string $FileType) Set Backup file type
 * @method string getExpireTime() Obtain Backup file expiration time
 * @method void setExpireTime(string $ExpireTime) Set Backup file expiration time
 */
class RedisBackupSet extends AbstractModel
{
    /**
     * @var string Backup start time
     */
    public $StartTime;

    /**
     * @var string Backup ID
     */
    public $BackupId;

    /**
     * @var string Backup type

- `1`: Manual backup initiated by the user.
- `0`: Automatic backup in the early morning initiated by the system.
     */
    public $BackupType;

    /**
     * @var integer Backup status 

- `1`: The backup is locked by another process.
- `2`: The backup is normal and not locked by any process.
- `-1`: The backup expired.
- `3`: The backup is being exported.
- `4`: The backup was exported successfully.
     */
    public $Status;

    /**
     * @var string Backup remarks
     */
    public $Remark;

    /**
     * @var integer Whether the backup is locked

- `0`: Not locked.
- `1`: Locked.
     */
    public $Locked;

    /**
     * @var integer Internal field, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupSize;

    /**
     * @var integer Internal field, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullBackup;

    /**
     * @var integer Internal field, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string The region where the local backup resides.
     */
    public $Region;

    /**
     * @var string Backup end time
     */
    public $EndTime;

    /**
     * @var string Backup file type
     */
    public $FileType;

    /**
     * @var string Backup file expiration time
     */
    public $ExpireTime;

    /**
     * @param string $StartTime Backup start time
     * @param string $BackupId Backup ID
     * @param string $BackupType Backup type

- `1`: Manual backup initiated by the user.
- `0`: Automatic backup in the early morning initiated by the system.
     * @param integer $Status Backup status 

- `1`: The backup is locked by another process.
- `2`: The backup is normal and not locked by any process.
- `-1`: The backup expired.
- `3`: The backup is being exported.
- `4`: The backup was exported successfully.
     * @param string $Remark Backup remarks
     * @param integer $Locked Whether the backup is locked

- `0`: Not locked.
- `1`: Locked.
     * @param integer $BackupSize Internal field, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FullBackup Internal field, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceType Internal field, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $Region The region where the local backup resides.
     * @param string $EndTime Backup end time
     * @param string $FileType Backup file type
     * @param string $ExpireTime Backup file expiration time
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("BackupSize",$param) and $param["BackupSize"] !== null) {
            $this->BackupSize = $param["BackupSize"];
        }

        if (array_key_exists("FullBackup",$param) and $param["FullBackup"] !== null) {
            $this->FullBackup = $param["FullBackup"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
