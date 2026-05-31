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
 * @method string getVaultId() Obtain Safe id
 * @method void setVaultId(string $VaultId) Set Safe id
 * @method string getVaultName() Obtain Safe name
 * @method void setVaultName(string $VaultName) Set Safe name
 * @method string getVaultRegion() Obtain Safe region
 * @method void setVaultRegion(string $VaultRegion) Set Safe region
 * @method string getVaultStatus() Obtain Safe status
 * @method void setVaultStatus(string $VaultStatus) Set Safe status
 * @method integer getBackupSaveSeconds() Obtain Backup retention period
 * @method void setBackupSaveSeconds(integer $BackupSaveSeconds) Set Backup retention period
 */
class VaultInfo extends AbstractModel
{
    /**
     * @var string Safe id
     */
    public $VaultId;

    /**
     * @var string Safe name
     */
    public $VaultName;

    /**
     * @var string Safe region
     */
    public $VaultRegion;

    /**
     * @var string Safe status
     */
    public $VaultStatus;

    /**
     * @var integer Backup retention period
     */
    public $BackupSaveSeconds;

    /**
     * @param string $VaultId Safe id
     * @param string $VaultName Safe name
     * @param string $VaultRegion Safe region
     * @param string $VaultStatus Safe status
     * @param integer $BackupSaveSeconds Backup retention period
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

        if (array_key_exists("VaultRegion",$param) and $param["VaultRegion"] !== null) {
            $this->VaultRegion = $param["VaultRegion"];
        }

        if (array_key_exists("VaultStatus",$param) and $param["VaultStatus"] !== null) {
            $this->VaultStatus = $param["VaultStatus"];
        }

        if (array_key_exists("BackupSaveSeconds",$param) and $param["BackupSaveSeconds"] !== null) {
            $this->BackupSaveSeconds = $param["BackupSaveSeconds"];
        }
    }
}
