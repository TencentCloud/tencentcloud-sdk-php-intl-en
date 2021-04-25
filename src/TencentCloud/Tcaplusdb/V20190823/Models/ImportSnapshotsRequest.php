<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportSnapshots request structure.
 *
 * @method string getClusterId() Obtain The ID of the cluster where the original table (from which the snapshot was created) resides
 * @method void setClusterId(string $ClusterId) Set The ID of the cluster where the original table (from which the snapshot was created) resides
 * @method SnapshotInfo getSnapshots() Obtain The information of the snapshot to import
 * @method void setSnapshots(SnapshotInfo $Snapshots) Set The information of the snapshot to import
 * @method string getImportSpecialKey() Obtain Whether to import partial data of the snapshot. Valid values: `TRUE` (import partial data), `FALSE` (import all data).
 * @method void setImportSpecialKey(string $ImportSpecialKey) Set Whether to import partial data of the snapshot. Valid values: `TRUE` (import partial data), `FALSE` (import all data).
 * @method string getImportOriginTable() Obtain Whether to import to the original table. Valid values: `TRUE` (import to the original table), `FALSE` (import to a new table).
 * @method void setImportOriginTable(string $ImportOriginTable) Set Whether to import to the original table. Valid values: `TRUE` (import to the original table), `FALSE` (import to a new table).
 * @method KeyFile getKeyFile() Obtain The file of the keys of the partial data
 * @method void setKeyFile(KeyFile $KeyFile) Set The file of the keys of the partial data
 * @method string getNewTableGroupId() Obtain The ID of the table group where the new table resides, which is valid only when `ImportOriginTable` is set to `FALSE`
 * @method void setNewTableGroupId(string $NewTableGroupId) Set The ID of the table group where the new table resides, which is valid only when `ImportOriginTable` is set to `FALSE`
 * @method string getNewTableName() Obtain The name of the new table, which is valid only when `ImportOriginTable` is set to `FALSE`. TcaplusDB will automatically create a table named `NewTableName` of the same structure as that of the original table.
 * @method void setNewTableName(string $NewTableName) Set The name of the new table, which is valid only when `ImportOriginTable` is set to `FALSE`. TcaplusDB will automatically create a table named `NewTableName` of the same structure as that of the original table.
 */
class ImportSnapshotsRequest extends AbstractModel
{
    /**
     * @var string The ID of the cluster where the original table (from which the snapshot was created) resides
     */
    public $ClusterId;

    /**
     * @var SnapshotInfo The information of the snapshot to import
     */
    public $Snapshots;

    /**
     * @var string Whether to import partial data of the snapshot. Valid values: `TRUE` (import partial data), `FALSE` (import all data).
     */
    public $ImportSpecialKey;

    /**
     * @var string Whether to import to the original table. Valid values: `TRUE` (import to the original table), `FALSE` (import to a new table).
     */
    public $ImportOriginTable;

    /**
     * @var KeyFile The file of the keys of the partial data
     */
    public $KeyFile;

    /**
     * @var string The ID of the table group where the new table resides, which is valid only when `ImportOriginTable` is set to `FALSE`
     */
    public $NewTableGroupId;

    /**
     * @var string The name of the new table, which is valid only when `ImportOriginTable` is set to `FALSE`. TcaplusDB will automatically create a table named `NewTableName` of the same structure as that of the original table.
     */
    public $NewTableName;

    /**
     * @param string $ClusterId The ID of the cluster where the original table (from which the snapshot was created) resides
     * @param SnapshotInfo $Snapshots The information of the snapshot to import
     * @param string $ImportSpecialKey Whether to import partial data of the snapshot. Valid values: `TRUE` (import partial data), `FALSE` (import all data).
     * @param string $ImportOriginTable Whether to import to the original table. Valid values: `TRUE` (import to the original table), `FALSE` (import to a new table).
     * @param KeyFile $KeyFile The file of the keys of the partial data
     * @param string $NewTableGroupId The ID of the table group where the new table resides, which is valid only when `ImportOriginTable` is set to `FALSE`
     * @param string $NewTableName The name of the new table, which is valid only when `ImportOriginTable` is set to `FALSE`. TcaplusDB will automatically create a table named `NewTableName` of the same structure as that of the original table.
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

        if (array_key_exists("Snapshots",$param) and $param["Snapshots"] !== null) {
            $this->Snapshots = new SnapshotInfo();
            $this->Snapshots->deserialize($param["Snapshots"]);
        }

        if (array_key_exists("ImportSpecialKey",$param) and $param["ImportSpecialKey"] !== null) {
            $this->ImportSpecialKey = $param["ImportSpecialKey"];
        }

        if (array_key_exists("ImportOriginTable",$param) and $param["ImportOriginTable"] !== null) {
            $this->ImportOriginTable = $param["ImportOriginTable"];
        }

        if (array_key_exists("KeyFile",$param) and $param["KeyFile"] !== null) {
            $this->KeyFile = new KeyFile();
            $this->KeyFile->deserialize($param["KeyFile"]);
        }

        if (array_key_exists("NewTableGroupId",$param) and $param["NewTableGroupId"] !== null) {
            $this->NewTableGroupId = $param["NewTableGroupId"];
        }

        if (array_key_exists("NewTableName",$param) and $param["NewTableName"] !== null) {
            $this->NewTableName = $param["NewTableName"];
        }
    }
}
