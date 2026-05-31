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
 * CopyBackupToVault request structure.
 *
 * @method string getVaultId() Obtain <p>Target safe ID. The backup file will be copied to this safe.</p>
 * @method void setVaultId(string $VaultId) Set <p>Target safe ID. The backup file will be copied to this safe.</p>
 * @method array getBackupIds() Obtain <p>List of backup file IDs. Supports batch operations to copy multiple backup files.</p>
 * @method void setBackupIds(array $BackupIds) Set <p>List of backup file IDs. Supports batch operations to copy multiple backup files.</p>
 */
class CopyBackupToVaultRequest extends AbstractModel
{
    /**
     * @var string <p>Target safe ID. The backup file will be copied to this safe.</p>
     */
    public $VaultId;

    /**
     * @var array <p>List of backup file IDs. Supports batch operations to copy multiple backup files.</p>
     */
    public $BackupIds;

    /**
     * @param string $VaultId <p>Target safe ID. The backup file will be copied to this safe.</p>
     * @param array $BackupIds <p>List of backup file IDs. Supports batch operations to copy multiple backup files.</p>
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
