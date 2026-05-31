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
 * DescribeBinlogListByVault request structure.
 *
 * @method string getVaultId() Obtain Safe ID
 * @method void setVaultId(string $VaultId) Set Safe ID
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getBackupIds() Obtain List of the backup IDs.
 * @method void setBackupIds(array $BackupIds) Set List of the backup IDs.
 * @method array getBackupNames() Obtain Backup name list
 * @method void setBackupNames(array $BackupNames) Set Backup name list
 * @method array getFileNames() Obtain Filename list
 * @method void setFileNames(array $FileNames) Set Filename list
 * @method integer getLimit() Obtain Number of returned results, range (0,100], default 100
 * @method void setLimit(integer $Limit) Set Number of returned results, range (0,100], default 100
 * @method integer getOffset() Obtain Offset. Range: [0, INF). Default is 0
 * @method void setOffset(integer $Offset) Set Offset. Range: [0, INF). Default is 0
 * @method string getOrderBy() Obtain Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime. Default: createTime.
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime. Default: createTime.
 * @method string getOrderByType() Obtain Sorting method, available values: desc, asc, DESC, ASC, default desc
 * @method void setOrderByType(string $OrderByType) Set Sorting method, available values: desc, asc, DESC, ASC, default desc
 * @method string getStatus() Obtain Status.
 * @method void setStatus(string $Status) Set Status.
 */
class DescribeBinlogListByVaultRequest extends AbstractModel
{
    /**
     * @var string Safe ID
     */
    public $VaultId;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array List of the backup IDs.
     */
    public $BackupIds;

    /**
     * @var array Backup name list
     */
    public $BackupNames;

    /**
     * @var array Filename list
     */
    public $FileNames;

    /**
     * @var integer Number of returned results, range (0,100], default 100
     */
    public $Limit;

    /**
     * @var integer Offset. Range: [0, INF). Default is 0
     */
    public $Offset;

    /**
     * @var string Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime. Default: createTime.
     */
    public $OrderBy;

    /**
     * @var string Sorting method, available values: desc, asc, DESC, ASC, default desc
     */
    public $OrderByType;

    /**
     * @var string Status.
     */
    public $Status;

    /**
     * @param string $VaultId Safe ID
     * @param string $ClusterId Cluster ID
     * @param array $BackupIds List of the backup IDs.
     * @param array $BackupNames Backup name list
     * @param array $FileNames Filename list
     * @param integer $Limit Number of returned results, range (0,100], default 100
     * @param integer $Offset Offset. Range: [0, INF). Default is 0
     * @param string $OrderBy Sorting field. Available values: VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime. Default: createTime.
     * @param string $OrderByType Sorting method, available values: desc, asc, DESC, ASC, default desc
     * @param string $Status Status.
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

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("BackupIds",$param) and $param["BackupIds"] !== null) {
            $this->BackupIds = $param["BackupIds"];
        }

        if (array_key_exists("BackupNames",$param) and $param["BackupNames"] !== null) {
            $this->BackupNames = $param["BackupNames"];
        }

        if (array_key_exists("FileNames",$param) and $param["FileNames"] !== null) {
            $this->FileNames = $param["FileNames"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
