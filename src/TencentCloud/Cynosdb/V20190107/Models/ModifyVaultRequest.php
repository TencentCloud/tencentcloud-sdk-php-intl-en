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
 * ModifyVault request structure.
 *
 * @method string getVaultId() Obtain Safe ID
 * @method void setVaultId(string $VaultId) Set Safe ID
 * @method string getVaultName() Obtain Safe name, maximum 255 characters
 * @method void setVaultName(string $VaultName) Set Safe name, maximum 255 characters
 * @method string getVaultDescribe() Obtain Safe description, maximum 1024 characters
 * @method void setVaultDescribe(string $VaultDescribe) Set Safe description, maximum 1024 characters
 * @method integer getBackupSaveSeconds() Obtain Backup retention period (seconds). Range: (0, 632448000].
 * @method void setBackupSaveSeconds(integer $BackupSaveSeconds) Set Backup retention period (seconds). Range: (0, 632448000].
 * @method string getKeyId() Obtain Encryption key ID, maximum 36 characters
 * @method void setKeyId(string $KeyId) Set Encryption key ID, maximum 36 characters
 * @method string getKeyType() Obtain Key type, available values: cloud, custom
 * @method void setKeyType(string $KeyType) Set Key type, available values: cloud, custom
 * @method string getKeyRegion() Obtain Key region, maximum 32 characters
 * @method void setKeyRegion(string $KeyRegion) Set Key region, maximum 32 characters
 * @method boolean getIsLock() Obtain Is the safe locked
 * @method void setIsLock(boolean $IsLock) Set Is the safe locked
 * @method string getLockedTime() Obtain Lock expiry time, format: 2006-01-02 15:04:05, lock time current maximum 15 days
 * @method void setLockedTime(string $LockedTime) Set Lock expiry time, format: 2006-01-02 15:04:05, lock time current maximum 15 days
 * @method boolean getIsEncryption() Obtain Whether it is encrypted
 * @method void setIsEncryption(boolean $IsEncryption) Set Whether it is encrypted
 */
class ModifyVaultRequest extends AbstractModel
{
    /**
     * @var string Safe ID
     */
    public $VaultId;

    /**
     * @var string Safe name, maximum 255 characters
     */
    public $VaultName;

    /**
     * @var string Safe description, maximum 1024 characters
     */
    public $VaultDescribe;

    /**
     * @var integer Backup retention period (seconds). Range: (0, 632448000].
     */
    public $BackupSaveSeconds;

    /**
     * @var string Encryption key ID, maximum 36 characters
     */
    public $KeyId;

    /**
     * @var string Key type, available values: cloud, custom
     */
    public $KeyType;

    /**
     * @var string Key region, maximum 32 characters
     */
    public $KeyRegion;

    /**
     * @var boolean Is the safe locked
     */
    public $IsLock;

    /**
     * @var string Lock expiry time, format: 2006-01-02 15:04:05, lock time current maximum 15 days
     */
    public $LockedTime;

    /**
     * @var boolean Whether it is encrypted
     */
    public $IsEncryption;

    /**
     * @param string $VaultId Safe ID
     * @param string $VaultName Safe name, maximum 255 characters
     * @param string $VaultDescribe Safe description, maximum 1024 characters
     * @param integer $BackupSaveSeconds Backup retention period (seconds). Range: (0, 632448000].
     * @param string $KeyId Encryption key ID, maximum 36 characters
     * @param string $KeyType Key type, available values: cloud, custom
     * @param string $KeyRegion Key region, maximum 32 characters
     * @param boolean $IsLock Is the safe locked
     * @param string $LockedTime Lock expiry time, format: 2006-01-02 15:04:05, lock time current maximum 15 days
     * @param boolean $IsEncryption Whether it is encrypted
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

        if (array_key_exists("BackupSaveSeconds",$param) and $param["BackupSaveSeconds"] !== null) {
            $this->BackupSaveSeconds = $param["BackupSaveSeconds"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyType",$param) and $param["KeyType"] !== null) {
            $this->KeyType = $param["KeyType"];
        }

        if (array_key_exists("KeyRegion",$param) and $param["KeyRegion"] !== null) {
            $this->KeyRegion = $param["KeyRegion"];
        }

        if (array_key_exists("IsLock",$param) and $param["IsLock"] !== null) {
            $this->IsLock = $param["IsLock"];
        }

        if (array_key_exists("LockedTime",$param) and $param["LockedTime"] !== null) {
            $this->LockedTime = $param["LockedTime"];
        }

        if (array_key_exists("IsEncryption",$param) and $param["IsEncryption"] !== null) {
            $this->IsEncryption = $param["IsEncryption"];
        }
    }
}
