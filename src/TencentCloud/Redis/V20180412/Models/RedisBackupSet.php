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
 * @method string getBackupType() Obtain Backup type. 1: manual backup initiated by the user; 0: automatic backup in the early morning initiated by the system
 * @method void setBackupType(string $BackupType) Set Backup type. 1: manual backup initiated by the user; 0: automatic backup in the early morning initiated by the system
 * @method integer getStatus() Obtain Backup status. 1: backup is locked by another process; 2: backup is normal and not locked by any process; -1: backup has expired; 3: backup is being exported; 4: backup is exported successfully
 * @method void setStatus(integer $Status) Set Backup status. 1: backup is locked by another process; 2: backup is normal and not locked by any process; -1: backup has expired; 3: backup is being exported; 4: backup is exported successfully
 * @method string getRemark() Obtain Backup remarks
 * @method void setRemark(string $Remark) Set Backup remarks
 * @method integer getLocked() Obtain Whether a backup is locked. 0: no; 1: yes.
 * @method void setLocked(integer $Locked) Set Whether a backup is locked. 0: no; 1: yes.
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
     * @var string Backup type. 1: manual backup initiated by the user; 0: automatic backup in the early morning initiated by the system
     */
    public $BackupType;

    /**
     * @var integer Backup status. 1: backup is locked by another process; 2: backup is normal and not locked by any process; -1: backup has expired; 3: backup is being exported; 4: backup is exported successfully
     */
    public $Status;

    /**
     * @var string Backup remarks
     */
    public $Remark;

    /**
     * @var integer Whether a backup is locked. 0: no; 1: yes.
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
     * @param string $StartTime Backup start time
     * @param string $BackupId Backup ID
     * @param string $BackupType Backup type. 1: manual backup initiated by the user; 0: automatic backup in the early morning initiated by the system
     * @param integer $Status Backup status. 1: backup is locked by another process; 2: backup is normal and not locked by any process; -1: backup has expired; 3: backup is being exported; 4: backup is exported successfully
     * @param string $Remark Backup remarks
     * @param integer $Locked Whether a backup is locked. 0: no; 1: yes.
     * @param integer $BackupSize Internal field, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FullBackup Internal field, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceType Internal field, which can be ignored.
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
    }
}
