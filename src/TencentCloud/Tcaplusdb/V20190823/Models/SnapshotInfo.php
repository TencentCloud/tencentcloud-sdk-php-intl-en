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
 * Snapshot list
 *
 * @method string getTableGroupId() Obtain The ID of the table group where the table resides
 * @method void setTableGroupId(string $TableGroupId) Set The ID of the table group where the table resides
 * @method string getTableName() Obtain Table name
 * @method void setTableName(string $TableName) Set Table name
 * @method string getSnapshotName() Obtain Snapshot name
 * @method void setSnapshotName(string $SnapshotName) Set Snapshot name
 * @method string getSnapshotTime() Obtain The time of the data from which the snapshot was created
 * @method void setSnapshotTime(string $SnapshotTime) Set The time of the data from which the snapshot was created
 * @method string getSnapshotDeadTime() Obtain Snapshot expiration time
 * @method void setSnapshotDeadTime(string $SnapshotDeadTime) Set Snapshot expiration time
 */
class SnapshotInfo extends AbstractModel
{
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
     * @var string The time of the data from which the snapshot was created
     */
    public $SnapshotTime;

    /**
     * @var string Snapshot expiration time
     */
    public $SnapshotDeadTime;

    /**
     * @param string $TableGroupId The ID of the table group where the table resides
     * @param string $TableName Table name
     * @param string $SnapshotName Snapshot name
     * @param string $SnapshotTime The time of the data from which the snapshot was created
     * @param string $SnapshotDeadTime Snapshot expiration time
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
        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("SnapshotTime",$param) and $param["SnapshotTime"] !== null) {
            $this->SnapshotTime = $param["SnapshotTime"];
        }

        if (array_key_exists("SnapshotDeadTime",$param) and $param["SnapshotDeadTime"] !== null) {
            $this->SnapshotDeadTime = $param["SnapshotDeadTime"];
        }
    }
}
