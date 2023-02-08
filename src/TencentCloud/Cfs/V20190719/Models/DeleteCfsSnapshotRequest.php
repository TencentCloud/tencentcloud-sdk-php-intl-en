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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCfsSnapshot request structure.
 *
 * @method string getSnapshotId() Obtain File system snapshot ID
 * @method void setSnapshotId(string $SnapshotId) Set File system snapshot ID
 * @method array getSnapshotIds() Obtain The list of the IDs of the file system snapshots to be deleted. At least one of `SnapshotId` and `SnapshotIds` must be specified.
 * @method void setSnapshotIds(array $SnapshotIds) Set The list of the IDs of the file system snapshots to be deleted. At least one of `SnapshotId` and `SnapshotIds` must be specified.
 */
class DeleteCfsSnapshotRequest extends AbstractModel
{
    /**
     * @var string File system snapshot ID
     */
    public $SnapshotId;

    /**
     * @var array The list of the IDs of the file system snapshots to be deleted. At least one of `SnapshotId` and `SnapshotIds` must be specified.
     */
    public $SnapshotIds;

    /**
     * @param string $SnapshotId File system snapshot ID
     * @param array $SnapshotIds The list of the IDs of the file system snapshots to be deleted. At least one of `SnapshotId` and `SnapshotIds` must be specified.
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("SnapshotIds",$param) and $param["SnapshotIds"] !== null) {
            $this->SnapshotIds = $param["SnapshotIds"];
        }
    }
}
