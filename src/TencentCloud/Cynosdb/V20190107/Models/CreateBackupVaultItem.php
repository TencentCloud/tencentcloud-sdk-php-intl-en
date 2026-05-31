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
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVaultId(string $VaultId) Set Safe id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVaultRegion() Obtain Safe region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVaultRegion(string $VaultRegion) Set Safe region
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CreateBackupVaultItem extends AbstractModel
{
    /**
     * @var string Safe id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VaultId;

    /**
     * @var string Safe region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VaultRegion;

    /**
     * @param string $VaultId Safe id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VaultRegion Safe region
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
        if (array_key_exists("VaultId",$param) and $param["VaultId"] !== null) {
            $this->VaultId = $param["VaultId"];
        }

        if (array_key_exists("VaultRegion",$param) and $param["VaultRegion"] !== null) {
            $this->VaultRegion = $param["VaultRegion"];
        }
    }
}
