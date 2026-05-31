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
 * CreateVault request structure.
 *
 * @method string getVaultName() Obtain Safe name, length must be greater than 0
 * @method void setVaultName(string $VaultName) Set Safe name, length must be greater than 0
 * @method integer getBackupSaveSeconds() Obtain Backup retention period (seconds). Must be greater than 0.
 * @method void setBackupSaveSeconds(integer $BackupSaveSeconds) Set Backup retention period (seconds). Must be greater than 0.
 * @method string getVaultDescribe() Obtain Safe description
 * @method void setVaultDescribe(string $VaultDescribe) Set Safe description
 * @method string getKeyId() Obtain KMS key ID, length 0-36 characters
 * @method void setKeyId(string $KeyId) Set KMS key ID, length 0-36 characters
 * @method string getKeyType() Obtain Key type, available values: cloud (KMS managed keys), custom (custom key)
 * @method void setKeyType(string $KeyType) Set Key type, available values: cloud (KMS managed keys), custom (custom key)
 * @method string getKeyRegion() Obtain Key region, length 0-32 characters
 * @method void setKeyRegion(string $KeyRegion) Set Key region, length 0-32 characters
 * @method string getLockedTime() Obtain Lock time, format: YYYY-MM-DD HH:mm:ss
 * @method void setLockedTime(string $LockedTime) Set Lock time, format: YYYY-MM-DD HH:mm:ss
 */
class CreateVaultRequest extends AbstractModel
{
    /**
     * @var string Safe name, length must be greater than 0
     */
    public $VaultName;

    /**
     * @var integer Backup retention period (seconds). Must be greater than 0.
     */
    public $BackupSaveSeconds;

    /**
     * @var string Safe description
     */
    public $VaultDescribe;

    /**
     * @var string KMS key ID, length 0-36 characters
     */
    public $KeyId;

    /**
     * @var string Key type, available values: cloud (KMS managed keys), custom (custom key)
     */
    public $KeyType;

    /**
     * @var string Key region, length 0-32 characters
     */
    public $KeyRegion;

    /**
     * @var string Lock time, format: YYYY-MM-DD HH:mm:ss
     */
    public $LockedTime;

    /**
     * @param string $VaultName Safe name, length must be greater than 0
     * @param integer $BackupSaveSeconds Backup retention period (seconds). Must be greater than 0.
     * @param string $VaultDescribe Safe description
     * @param string $KeyId KMS key ID, length 0-36 characters
     * @param string $KeyType Key type, available values: cloud (KMS managed keys), custom (custom key)
     * @param string $KeyRegion Key region, length 0-32 characters
     * @param string $LockedTime Lock time, format: YYYY-MM-DD HH:mm:ss
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
        if (array_key_exists("VaultName",$param) and $param["VaultName"] !== null) {
            $this->VaultName = $param["VaultName"];
        }

        if (array_key_exists("BackupSaveSeconds",$param) and $param["BackupSaveSeconds"] !== null) {
            $this->BackupSaveSeconds = $param["BackupSaveSeconds"];
        }

        if (array_key_exists("VaultDescribe",$param) and $param["VaultDescribe"] !== null) {
            $this->VaultDescribe = $param["VaultDescribe"];
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

        if (array_key_exists("LockedTime",$param) and $param["LockedTime"] !== null) {
            $this->LockedTime = $param["LockedTime"];
        }
    }
}
