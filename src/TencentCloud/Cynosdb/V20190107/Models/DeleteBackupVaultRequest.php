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
 * DeleteBackupVault request structure.
 *
 * @method string getVaultId() Obtain Backup safe ID. The length must be greater than 0.
 * @method void setVaultId(string $VaultId) Set Backup safe ID. The length must be greater than 0.
 * @method array getBackupIds() Obtain List of backup file IDs to be deleted. Values cannot be empty.
 * @method void setBackupIds(array $BackupIds) Set List of backup file IDs to be deleted. Values cannot be empty.
 */
class DeleteBackupVaultRequest extends AbstractModel
{
    /**
     * @var string Backup safe ID. The length must be greater than 0.
     */
    public $VaultId;

    /**
     * @var array List of backup file IDs to be deleted. Values cannot be empty.
     */
    public $BackupIds;

    /**
     * @param string $VaultId Backup safe ID. The length must be greater than 0.
     * @param array $BackupIds List of backup file IDs to be deleted. Values cannot be empty.
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

        if (array_key_exists("BackupIds",$param) and $param["BackupIds"] !== null) {
            $this->BackupIds = $param["BackupIds"];
        }
    }
}
