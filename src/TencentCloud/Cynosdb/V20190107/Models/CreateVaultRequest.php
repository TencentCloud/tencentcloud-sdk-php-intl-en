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
 * @method string getVaultName() Obtain Safe name. The length must be greater than 0.
 * @method void setVaultName(string $VaultName) Set Safe name. The length must be greater than 0.
 * @method integer getBackupSaveSeconds() Obtain Backup retention period in seconds. It must be greater than 0.
 * @method void setBackupSaveSeconds(integer $BackupSaveSeconds) Set Backup retention period in seconds. It must be greater than 0.
 * @method string getVaultDescribe() Obtain Description of the safe
 * @method void setVaultDescribe(string $VaultDescribe) Set Description of the safe
 * @method string getKeyId() Obtain KMS key ID, 0-36 characters in length
 * @method void setKeyId(string $KeyId) Set KMS key ID, 0-36 characters in length
 * @method string getKeyType() Obtain Key type. Available values: cloud (cloud-managed key), custom (custom key)
 * @method void setKeyType(string $KeyType) Set Key type. Available values: cloud (cloud-managed key), custom (custom key)
 * @method string getKeyRegion() Obtain Region of the key, 0–32 characters in length
 * @method void setKeyRegion(string $KeyRegion) Set Region of the key, 0–32 characters in length
 * @method string getLockedTime() Obtain Lock time. Format: YYYY-MM-DD HH:mm:ss
 * @method void setLockedTime(string $LockedTime) Set Lock time. Format: YYYY-MM-DD HH:mm:ss
 */
class CreateVaultRequest extends AbstractModel
{
    /**
     * @var string Safe name. The length must be greater than 0.
     */
    public $VaultName;

    /**
     * @var integer Backup retention period in seconds. It must be greater than 0.
     */
    public $BackupSaveSeconds;

    /**
     * @var string Description of the safe
     */
    public $VaultDescribe;

    /**
     * @var string KMS key ID, 0-36 characters in length
     */
    public $KeyId;

    /**
     * @var string Key type. Available values: cloud (cloud-managed key), custom (custom key)
     */
    public $KeyType;

    /**
     * @var string Region of the key, 0–32 characters in length
     */
    public $KeyRegion;

    /**
     * @var string Lock time. Format: YYYY-MM-DD HH:mm:ss
     */
    public $LockedTime;

    /**
     * @param string $VaultName Safe name. The length must be greater than 0.
     * @param integer $BackupSaveSeconds Backup retention period in seconds. It must be greater than 0.
     * @param string $VaultDescribe Description of the safe
     * @param string $KeyId KMS key ID, 0-36 characters in length
     * @param string $KeyType Key type. Available values: cloud (cloud-managed key), custom (custom key)
     * @param string $KeyRegion Region of the key, 0–32 characters in length
     * @param string $LockedTime Lock time. Format: YYYY-MM-DD HH:mm:ss
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
