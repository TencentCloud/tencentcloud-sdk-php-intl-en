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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Safe info
 *
 * @method string getVaultId() Obtain Safe ID
 * @method void setVaultId(string $VaultId) Set Safe ID
 * @method string getVaultName() Obtain Safe name
 * @method void setVaultName(string $VaultName) Set Safe name
 * @method string getVaultDescribe() Obtain Safe description
 * @method void setVaultDescribe(string $VaultDescribe) Set Safe description
 * @method string getKeyId() Obtain Encryption key ID.
 * @method void setKeyId(string $KeyId) Set Encryption key ID.
 * @method string getKeyRegion() Obtain Key region
 * @method void setKeyRegion(string $KeyRegion) Set Key region
 * @method string getKeyType() Obtain Key type
 * @method void setKeyType(string $KeyType) Set Key type
 * @method integer getBackupFileCount() Obtain Number of backup files
 * @method void setBackupFileCount(integer $BackupFileCount) Set Number of backup files
 * @method integer getBackupFileSize() Obtain Total size of backup files (byte)
 * @method void setBackupFileSize(integer $BackupFileSize) Set Total size of backup files (byte)
 * @method integer getBinlogFileCount() Obtain Binlog file count
 * @method void setBinlogFileCount(integer $BinlogFileCount) Set Binlog file count
 * @method integer getBinlogFileSize() Obtain Total size of the Binlog file (byte)
 * @method void setBinlogFileSize(integer $BinlogFileSize) Set Total size of the Binlog file (byte)
 * @method integer getRedoLogFileCount() Obtain Number of RedoLog files
 * @method void setRedoLogFileCount(integer $RedoLogFileCount) Set Number of RedoLog files
 * @method integer getRedoLogFileSize() Obtain Total size of RedoLog files (byte)
 * @method void setRedoLogFileSize(integer $RedoLogFileSize) Set Total size of RedoLog files (byte)
 * @method string getStatus() Obtain Safe status
 * @method void setStatus(string $Status) Set Safe status
 * @method integer getBackupSaveSeconds() Obtain Backup retention period (seconds)
 * @method void setBackupSaveSeconds(integer $BackupSaveSeconds) Set Backup retention period (seconds)
 * @method string getLockedTime() Obtain lock time
 * @method void setLockedTime(string $LockedTime) Set lock time
 * @method array getTasks() Obtain Associated task list
 * @method void setTasks(array $Tasks) Set Associated task list
 * @method string getVaultRegion() Obtain Safe region
 * @method void setVaultRegion(string $VaultRegion) Set Safe region
 * @method array getAutoCopyConfigs() Obtain Automatically deliver relationship
 * @method void setAutoCopyConfigs(array $AutoCopyConfigs) Set Automatically deliver relationship
 */
class DescribeVaultsItem extends AbstractModel
{
    /**
     * @var string Safe ID
     */
    public $VaultId;

    /**
     * @var string Safe name
     */
    public $VaultName;

    /**
     * @var string Safe description
     */
    public $VaultDescribe;

    /**
     * @var string Encryption key ID.
     */
    public $KeyId;

    /**
     * @var string Key region
     */
    public $KeyRegion;

    /**
     * @var string Key type
     */
    public $KeyType;

    /**
     * @var integer Number of backup files
     */
    public $BackupFileCount;

    /**
     * @var integer Total size of backup files (byte)
     */
    public $BackupFileSize;

    /**
     * @var integer Binlog file count
     */
    public $BinlogFileCount;

    /**
     * @var integer Total size of the Binlog file (byte)
     */
    public $BinlogFileSize;

    /**
     * @var integer Number of RedoLog files
     */
    public $RedoLogFileCount;

    /**
     * @var integer Total size of RedoLog files (byte)
     */
    public $RedoLogFileSize;

    /**
     * @var string Safe status
     */
    public $Status;

    /**
     * @var integer Backup retention period (seconds)
     */
    public $BackupSaveSeconds;

    /**
     * @var string lock time
     */
    public $LockedTime;

    /**
     * @var array Associated task list
     */
    public $Tasks;

    /**
     * @var string Safe region
     */
    public $VaultRegion;

    /**
     * @var array Automatically deliver relationship
     */
    public $AutoCopyConfigs;

    /**
     * @param string $VaultId Safe ID
     * @param string $VaultName Safe name
     * @param string $VaultDescribe Safe description
     * @param string $KeyId Encryption key ID.
     * @param string $KeyRegion Key region
     * @param string $KeyType Key type
     * @param integer $BackupFileCount Number of backup files
     * @param integer $BackupFileSize Total size of backup files (byte)
     * @param integer $BinlogFileCount Binlog file count
     * @param integer $BinlogFileSize Total size of the Binlog file (byte)
     * @param integer $RedoLogFileCount Number of RedoLog files
     * @param integer $RedoLogFileSize Total size of RedoLog files (byte)
     * @param string $Status Safe status
     * @param integer $BackupSaveSeconds Backup retention period (seconds)
     * @param string $LockedTime lock time
     * @param array $Tasks Associated task list
     * @param string $VaultRegion Safe region
     * @param array $AutoCopyConfigs Automatically deliver relationship
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
        if (array_key_exists("VaultId",$param) and $param["VaultId"] !== null) {
            $this->VaultId = $param["VaultId"];
        }

        if (array_key_exists("VaultName",$param) and $param["VaultName"] !== null) {
            $this->VaultName = $param["VaultName"];
        }

        if (array_key_exists("VaultDescribe",$param) and $param["VaultDescribe"] !== null) {
            $this->VaultDescribe = $param["VaultDescribe"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyRegion",$param) and $param["KeyRegion"] !== null) {
            $this->KeyRegion = $param["KeyRegion"];
        }

        if (array_key_exists("KeyType",$param) and $param["KeyType"] !== null) {
            $this->KeyType = $param["KeyType"];
        }

        if (array_key_exists("BackupFileCount",$param) and $param["BackupFileCount"] !== null) {
            $this->BackupFileCount = $param["BackupFileCount"];
        }

        if (array_key_exists("BackupFileSize",$param) and $param["BackupFileSize"] !== null) {
            $this->BackupFileSize = $param["BackupFileSize"];
        }

        if (array_key_exists("BinlogFileCount",$param) and $param["BinlogFileCount"] !== null) {
            $this->BinlogFileCount = $param["BinlogFileCount"];
        }

        if (array_key_exists("BinlogFileSize",$param) and $param["BinlogFileSize"] !== null) {
            $this->BinlogFileSize = $param["BinlogFileSize"];
        }

        if (array_key_exists("RedoLogFileCount",$param) and $param["RedoLogFileCount"] !== null) {
            $this->RedoLogFileCount = $param["RedoLogFileCount"];
        }

        if (array_key_exists("RedoLogFileSize",$param) and $param["RedoLogFileSize"] !== null) {
            $this->RedoLogFileSize = $param["RedoLogFileSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BackupSaveSeconds",$param) and $param["BackupSaveSeconds"] !== null) {
            $this->BackupSaveSeconds = $param["BackupSaveSeconds"];
        }

        if (array_key_exists("LockedTime",$param) and $param["LockedTime"] !== null) {
            $this->LockedTime = $param["LockedTime"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("VaultRegion",$param) and $param["VaultRegion"] !== null) {
            $this->VaultRegion = $param["VaultRegion"];
        }

        if (array_key_exists("AutoCopyConfigs",$param) and $param["AutoCopyConfigs"] !== null) {
            $this->AutoCopyConfigs = [];
            foreach ($param["AutoCopyConfigs"] as $key => $value){
                $obj = new AutoCopyConfig();
                $obj->deserialize($value);
                array_push($this->AutoCopyConfigs, $obj);
            }
        }
    }
}
