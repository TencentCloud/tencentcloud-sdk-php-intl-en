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
 * @method array getVaultIds() Obtain List of safe IDs for precise filtering
 * @method void setVaultIds(array $VaultIds) Set List of safe IDs for precise filtering
 * @method string getVaultName() Obtain Safe name, used for blurry filtering
 * @method void setVaultName(string $VaultName) Set Safe name, used for blurry filtering
 * @method array getStatus() Obtain Safe status list for filtering
 * @method void setStatus(array $Status) Set Safe status list for filtering
 * @method integer getLimit() Obtain Number of items per page. Value range: (0,100]. Default: 100
 * @method void setLimit(integer $Limit) Set Number of items per page. Value range: (0,100]. Default: 100
 * @method integer getOffset() Obtain Offset. Value range: [0, +∞). Default: 0
 * @method void setOffset(integer $Offset) Set Offset. Value range: [0, +∞). Default: 0
 * @method string getOrderBy() Obtain Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime
 * @method string getOrderByType() Obtain Sorting method. Available values: `desc`, `asc`, `DESC`, `ASC`.
 * @method void setOrderByType(string $OrderByType) Set Sorting method. Available values: `desc`, `asc`, `DESC`, `ASC`.
 */
class DescribeVaultsRequest extends AbstractModel
{
    /**
     * @var array List of safe IDs for precise filtering
     */
    public $VaultIds;

    /**
     * @var string Safe name, used for blurry filtering
     */
    public $VaultName;

    /**
     * @var array Safe status list for filtering
     */
    public $Status;

    /**
     * @var integer Number of items per page. Value range: (0,100]. Default: 100
     */
    public $Limit;

    /**
     * @var integer Offset. Value range: [0, +∞). Default: 0
     */
    public $Offset;

    /**
     * @var string Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime
     */
    public $OrderBy;

    /**
     * @var string Sorting method. Available values: `desc`, `asc`, `DESC`, `ASC`.
     */
    public $OrderByType;

    /**
     * @param array $VaultIds List of safe IDs for precise filtering
     * @param string $VaultName Safe name, used for blurry filtering
     * @param array $Status Safe status list for filtering
     * @param integer $Limit Number of items per page. Value range: (0,100]. Default: 100
     * @param integer $Offset Offset. Value range: [0, +∞). Default: 0
     * @param string $OrderBy Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime
     * @param string $OrderByType Sorting method. Available values: `desc`, `asc`, `DESC`, `ASC`.
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
