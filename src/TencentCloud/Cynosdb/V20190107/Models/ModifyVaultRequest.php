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
 * @method string getVaultName() Obtain Safe name. Maximum length: 255 characters.
 * @method void setVaultName(string $VaultName) Set Safe name. Maximum length: 255 characters.
 * @method string getVaultDescribe() Obtain Safe description. Maximum length: 1024 characters.
 * @method void setVaultDescribe(string $VaultDescribe) Set Safe description. Maximum length: 1024 characters.
 * @method integer getBackupSaveSeconds() Obtain Backup retention period in seconds. Value range: (0, 632448000]
 * @method void setBackupSaveSeconds(integer $BackupSaveSeconds) Set Backup retention period in seconds. Value range: (0, 632448000]
 * @method string getKeyId() Obtain Encryption key ID. Maximum length: 36 characters.
 * @method void setKeyId(string $KeyId) Set Encryption key ID. Maximum length: 36 characters.
 * @method string getKeyType() Obtain Key type. Available values: cloud, custom
 * @method void setKeyType(string $KeyType) Set Key type. Available values: cloud, custom
 * @method string getKeyRegion() Obtain Region of the key. Maximum length: 32 characters.
 * @method void setKeyRegion(string $KeyRegion) Set Region of the key. Maximum length: 32 characters.
 * @method boolean getIsLock() Obtain Whether the safe is locked
 * @method void setIsLock(boolean $IsLock) Set Whether the safe is locked
 * @method string getLockedTime() Obtain Lock expiration time. Format: 2006-01-02 15:04:05. The lock time can be up to 15 days from now.
 * @method void setLockedTime(string $LockedTime) Set Lock expiration time. Format: 2006-01-02 15:04:05. The lock time can be up to 15 days from now.
 * @method boolean getIsEncryption() Obtain Encrypted or not
 * @method void setIsEncryption(boolean $IsEncryption) Set Encrypted or not
 */
class ModifyVaultRequest extends AbstractModel
{
    /**
     * @var string Safe ID
     */
    public $VaultId;

    /**
     * @var string Safe name. Maximum length: 255 characters.
     */
    public $VaultName;

    /**
     * @var string Safe description. Maximum length: 1024 characters.
     */
    public $VaultDescribe;

    /**
     * @var integer Backup retention period in seconds. Value range: (0, 632448000]
     */
    public $BackupSaveSeconds;

    /**
     * @var string Encryption key ID. Maximum length: 36 characters.
     */
    public $KeyId;

    /**
     * @var string Key type. Available values: cloud, custom
     */
    public $KeyType;

    /**
     * @var string Region of the key. Maximum length: 32 characters.
     */
    public $KeyRegion;

    /**
     * @var boolean Whether the safe is locked
     */
    public $IsLock;

    /**
     * @var string Lock expiration time. Format: 2006-01-02 15:04:05. The lock time can be up to 15 days from now.
     */
    public $LockedTime;

    /**
     * @var boolean Encrypted or not
     */
    public $IsEncryption;

    /**
     * @param string $VaultId Safe ID
     * @param string $VaultName Safe name. Maximum length: 255 characters.
     * @param string $VaultDescribe Safe description. Maximum length: 1024 characters.
     * @param integer $BackupSaveSeconds Backup retention period in seconds. Value range: (0, 632448000]
     * @param string $KeyId Encryption key ID. Maximum length: 36 characters.
     * @param string $KeyType Key type. Available values: cloud, custom
     * @param string $KeyRegion Region of the key. Maximum length: 32 characters.
     * @param boolean $IsLock Whether the safe is locked
     * @param string $LockedTime Lock expiration time. Format: 2006-01-02 15:04:05. The lock time can be up to 15 days from now.
     * @param boolean $IsEncryption Encrypted or not
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
