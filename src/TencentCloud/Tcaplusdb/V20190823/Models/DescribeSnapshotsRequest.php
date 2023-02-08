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
 * DescribeSnapshots request structure.
 *
 * @method string getClusterId() Obtain The ID of the cluster where the table resides
 * @method void setClusterId(string $ClusterId) Set The ID of the cluster where the table resides
 * @method string getTableGroupId() Obtain The ID of the table group where the table resides
 * @method void setTableGroupId(string $TableGroupId) Set The ID of the table group where the table resides
 * @method string getTableName() Obtain Table name
 * @method void setTableName(string $TableName) Set Table name
 * @method string getSnapshotName() Obtain Snapshot name
 * @method void setSnapshotName(string $SnapshotName) Set Snapshot name
 * @method array getSelectedTables() Obtain The list of snapshots pulled in batches
 * @method void setSelectedTables(array $SelectedTables) Set The list of snapshots pulled in batches
 */
class DescribeSnapshotsRequest extends AbstractModel
{
    /**
     * @var string The ID of the cluster where the table resides
     */
    public $ClusterId;

    /**
     * @var string The ID of the table group where the table resides
     */
    public $TableGroupId;

    /**
     * @var string Table name
     */
    public $TableName;

    /**
     * @var string Snapshot name
     */
    public $SnapshotName;

    /**
     * @var array The list of snapshots pulled in batches
     */
    public $SelectedTables;

    /**
     * @param string $ClusterId The ID of the cluster where the table resides
     * @param string $TableGroupId The ID of the table group where the table resides
     * @param string $TableName Table name
     * @param string $SnapshotName Snapshot name
     * @param array $SelectedTables The list of snapshots pulled in batches
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

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("SelectedTables",$param) and $param["SelectedTables"] !== null) {
            $this->SelectedTables = [];
            foreach ($param["SelectedTables"] as $key => $value){
                $obj = new SelectedTableInfoNew();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
        }
    }
}
