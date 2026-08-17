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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Array of instance backups
 *
 * @method string getStartTime() Obtain <p>Backup start time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Backup start time.</p>
 * @method string getBackupId() Obtain <p>Backup task ID.</p>
 * @method void setBackupId(string $BackupId) Set <p>Backup task ID.</p>
 * @method string getBackupType() Obtain <p>Backup type.</p><ul><li>1: Automatic backup initiated by the system in the wee hours.</li><li>0: Manual backup initiated by the user.</li></ul>
 * @method void setBackupType(string $BackupType) Set <p>Backup type.</p><ul><li>1: Automatic backup initiated by the system in the wee hours.</li><li>0: Manual backup initiated by the user.</li></ul>
 * @method integer getStatus() Obtain <p>Backup status.</p><ul><li>1: Backup is locked by other processes.</li><li>2: Backup is normal, not locked by any processes.</li><li>-1: Backup has expired.</li><li>3: Backup is being exported.</li><li>4: Backup export successful.</li></ul>
 * @method void setStatus(integer $Status) Set <p>Backup status.</p><ul><li>1: Backup is locked by other processes.</li><li>2: Backup is normal, not locked by any processes.</li><li>-1: Backup has expired.</li><li>3: Backup is being exported.</li><li>4: Backup export successful.</li></ul>
 * @method string getRemark() Obtain <p>Backup remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Backup remarks.</p>
 * @method integer getLocked() Obtain <p>Backup lock status.</p><ul><li>0: Unlocked.</li><li>1: Has been locked.</li></ul>
 * @method void setLocked(integer $Locked) Set <p>Backup lock status.</p><ul><li>0: Unlocked.</li><li>1: Has been locked.</li></ul>
 * @method integer getBackupSize() Obtain <p>Internal field, which can be ignored.</p>
 * @method void setBackupSize(integer $BackupSize) Set <p>Internal field, which can be ignored.</p>
 * @method integer getFullBackup() Obtain <p>Internal field, which can be ignored.</p>
 * @method void setFullBackup(integer $FullBackup) Set <p>Internal field, which can be ignored.</p>
 * @method integer getInstanceType() Obtain <p>Internal field, which can be ignored.</p>
 * @method void setInstanceType(integer $InstanceType) Set <p>Internal field, which can be ignored.</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method string getRegion() Obtain <p>Local backup region.</p>
 * @method void setRegion(string $Region) Set <p>Local backup region.</p>
 * @method string getEndTime() Obtain <p>Backup end time.</p>
 * @method void setEndTime(string $EndTime) Set <p>Backup end time.</p>
 * @method string getFileType() Obtain <p>Backup file type.</p>
 * @method void setFileType(string $FileType) Set <p>Backup file type.</p>
 * @method string getExpireTime() Obtain <p>Backup file expiration time.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>Backup file expiration time.</p>
 * @method boolean getEncrypted() Obtain <p>Whether the backup file is encrypted</p>
 * @method void setEncrypted(boolean $Encrypted) Set <p>Whether the backup file is encrypted</p>
 */
class RedisBackupSet extends AbstractModel
{
    /**
     * @var string <p>Backup start time.</p>
     */
    public $StartTime;

    /**
     * @var string <p>Backup task ID.</p>
     */
    public $BackupId;

    /**
     * @var string <p>Backup type.</p><ul><li>1: Automatic backup initiated by the system in the wee hours.</li><li>0: Manual backup initiated by the user.</li></ul>
     */
    public $BackupType;

    /**
     * @var integer <p>Backup status.</p><ul><li>1: Backup is locked by other processes.</li><li>2: Backup is normal, not locked by any processes.</li><li>-1: Backup has expired.</li><li>3: Backup is being exported.</li><li>4: Backup export successful.</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Backup remarks.</p>
     */
    public $Remark;

    /**
     * @var integer <p>Backup lock status.</p><ul><li>0: Unlocked.</li><li>1: Has been locked.</li></ul>
     */
    public $Locked;

    /**
     * @var integer <p>Internal field, which can be ignored.</p>
     */
    public $BackupSize;

    /**
     * @var integer <p>Internal field, which can be ignored.</p>
     */
    public $FullBackup;

    /**
     * @var integer <p>Internal field, which can be ignored.</p>
     */
    public $InstanceType;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Local backup region.</p>
     */
    public $Region;

    /**
     * @var string <p>Backup end time.</p>
     */
    public $EndTime;

    /**
     * @var string <p>Backup file type.</p>
     */
    public $FileType;

    /**
     * @var string <p>Backup file expiration time.</p>
     */
    public $ExpireTime;

    /**
     * @var boolean <p>Whether the backup file is encrypted</p>
     */
    public $Encrypted;

    /**
     * @param string $StartTime <p>Backup start time.</p>
     * @param string $BackupId <p>Backup task ID.</p>
     * @param string $BackupType <p>Backup type.</p><ul><li>1: Automatic backup initiated by the system in the wee hours.</li><li>0: Manual backup initiated by the user.</li></ul>
     * @param integer $Status <p>Backup status.</p><ul><li>1: Backup is locked by other processes.</li><li>2: Backup is normal, not locked by any processes.</li><li>-1: Backup has expired.</li><li>3: Backup is being exported.</li><li>4: Backup export successful.</li></ul>
     * @param string $Remark <p>Backup remarks.</p>
     * @param integer $Locked <p>Backup lock status.</p><ul><li>0: Unlocked.</li><li>1: Has been locked.</li></ul>
     * @param integer $BackupSize <p>Internal field, which can be ignored.</p>
     * @param integer $FullBackup <p>Internal field, which can be ignored.</p>
     * @param integer $InstanceType <p>Internal field, which can be ignored.</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param string $Region <p>Local backup region.</p>
     * @param string $EndTime <p>Backup end time.</p>
     * @param string $FileType <p>Backup file type.</p>
     * @param string $ExpireTime <p>Backup file expiration time.</p>
     * @param boolean $Encrypted <p>Whether the backup file is encrypted</p>
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

        if (array_key_exists("Encrypted",$param) and $param["Encrypted"] !== null) {
            $this->Encrypted = $param["Encrypted"];
        }
    }
}
