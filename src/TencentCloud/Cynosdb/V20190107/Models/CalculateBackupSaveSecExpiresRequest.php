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
 * CalculateBackupSaveSecExpires request structure.
 *
 * @method string getVaultId() Obtain Backup safe ID
 * @method void setVaultId(string $VaultId) Set Backup safe ID
 * @method integer getBackupSaveSeconds() Obtain Backup retention period (seconds). Must be greater than 0.
 * @method void setBackupSaveSeconds(integer $BackupSaveSeconds) Set Backup retention period (seconds). Must be greater than 0.
 * @method integer getLimit() Obtain Number of items per page, range (0,100], default 10
 * @method void setLimit(integer $Limit) Set Number of items per page, range (0,100], default 10
 * @method integer getOffset() Obtain Offset. Range: [0,INF). Default is 0
 * @method void setOffset(integer $Offset) Set Offset. Range: [0,INF). Default is 0
 * @method string getOrderBy() Obtain Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime. Default: endTime.
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime. Default: endTime.
 * @method string getOrderByType() Obtain Sorting method, available values: desc, asc, DESC, ASC, default desc
 * @method void setOrderByType(string $OrderByType) Set Sorting method, available values: desc, asc, DESC, ASC, default desc
 */
class CalculateBackupSaveSecExpiresRequest extends AbstractModel
{
    /**
     * @var string Backup safe ID
     */
    public $VaultId;

    /**
     * @var integer Backup retention period (seconds). Must be greater than 0.
     */
    public $BackupSaveSeconds;

    /**
     * @var integer Number of items per page, range (0,100], default 10
     */
    public $Limit;

    /**
     * @var integer Offset. Range: [0,INF). Default is 0
     */
    public $Offset;

    /**
     * @var string Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime. Default: endTime.
     */
    public $OrderBy;

    /**
     * @var string Sorting method, available values: desc, asc, DESC, ASC, default desc
     */
    public $OrderByType;

    /**
     * @param string $VaultId Backup safe ID
     * @param integer $BackupSaveSeconds Backup retention period (seconds). Must be greater than 0.
     * @param integer $Limit Number of items per page, range (0,100], default 10
     * @param integer $Offset Offset. Range: [0,INF). Default is 0
     * @param string $OrderBy Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime. Default: endTime.
     * @param string $OrderByType Sorting method, available values: desc, asc, DESC, ASC, default desc
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

        if (array_key_exists("BackupSaveSeconds",$param) and $param["BackupSaveSeconds"] !== null) {
            $this->BackupSaveSeconds = $param["BackupSaveSeconds"];
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
