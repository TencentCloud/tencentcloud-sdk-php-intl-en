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
 * DescribeVaults request structure.
 *
 * @method array getVaultIds() Obtain Safe ID list for precise filtering
 * @method void setVaultIds(array $VaultIds) Set Safe ID list for precise filtering
 * @method string getVaultName() Obtain Safe name, used for fuzzy filtering
 * @method void setVaultName(string $VaultName) Set Safe name, used for fuzzy filtering
 * @method array getStatus() Obtain Status list of safe for filtering
 * @method void setStatus(array $Status) Set Status list of safe for filtering
 * @method integer getLimit() Obtain Number of items per page, range (0,100], default 100
 * @method void setLimit(integer $Limit) Set Number of items per page, range (0,100], default 100
 * @method integer getOffset() Obtain Offset. Range: [0,+∞). Default is 0
 * @method void setOffset(integer $Offset) Set Offset. Range: [0,+∞). Default is 0
 * @method string getOrderBy() Obtain Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime
 * @method string getOrderByType() Obtain Sorting method, available values: desc, asc, DESC, ASC
 * @method void setOrderByType(string $OrderByType) Set Sorting method, available values: desc, asc, DESC, ASC
 */
class DescribeVaultsRequest extends AbstractModel
{
    /**
     * @var array Safe ID list for precise filtering
     */
    public $VaultIds;

    /**
     * @var string Safe name, used for fuzzy filtering
     */
    public $VaultName;

    /**
     * @var array Status list of safe for filtering
     */
    public $Status;

    /**
     * @var integer Number of items per page, range (0,100], default 100
     */
    public $Limit;

    /**
     * @var integer Offset. Range: [0,+∞). Default is 0
     */
    public $Offset;

    /**
     * @var string Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime
     */
    public $OrderBy;

    /**
     * @var string Sorting method, available values: desc, asc, DESC, ASC
     */
    public $OrderByType;

    /**
     * @param array $VaultIds Safe ID list for precise filtering
     * @param string $VaultName Safe name, used for fuzzy filtering
     * @param array $Status Status list of safe for filtering
     * @param integer $Limit Number of items per page, range (0,100], default 100
     * @param integer $Offset Offset. Range: [0,+∞). Default is 0
     * @param string $OrderBy Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime
     * @param string $OrderByType Sorting method, available values: desc, asc, DESC, ASC
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
        if (array_key_exists("VaultIds",$param) and $param["VaultIds"] !== null) {
            $this->VaultIds = $param["VaultIds"];
        }

        if (array_key_exists("VaultName",$param) and $param["VaultName"] !== null) {
            $this->VaultName = $param["VaultName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
