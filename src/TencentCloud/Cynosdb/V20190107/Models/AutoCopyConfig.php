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
 * Safe automatically deliver relationship
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getVaultId() Obtain Safe ID
 * @method void setVaultId(string $VaultId) Set Safe ID
 * @method string getVaultRegion() Obtain Safe region
 * @method void setVaultRegion(string $VaultRegion) Set Safe region
 * @method string getCopyType() Obtain Delivery Type: binlog, redolog, snapshot, logic
 * @method void setCopyType(string $CopyType) Set Delivery Type: binlog, redolog, snapshot, logic
 */
class AutoCopyConfig extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Safe ID
     */
    public $VaultId;

    /**
     * @var string Safe region
     */
    public $VaultRegion;

    /**
     * @var string Delivery Type: binlog, redolog, snapshot, logic
     */
    public $CopyType;

    /**
     * @param string $ClusterId Cluster ID.
     * @param string $VaultId Safe ID
     * @param string $VaultRegion Safe region
     * @param string $CopyType Delivery Type: binlog, redolog, snapshot, logic
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("VaultId",$param) and $param["VaultId"] !== null) {
            $this->VaultId = $param["VaultId"];
        }

        if (array_key_exists("VaultRegion",$param) and $param["VaultRegion"] !== null) {
            $this->VaultRegion = $param["VaultRegion"];
        }

        if (array_key_exists("CopyType",$param) and $param["CopyType"] !== null) {
            $this->CopyType = $param["CopyType"];
        }
    }
}
