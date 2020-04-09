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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplySnapshot request structure.
 *
 * @method string getSnapshotId() Obtain Snapshot ID, which can be queried via [DescribeSnapshots](/document/product/362/15647).
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID, which can be queried via [DescribeSnapshots](/document/product/362/15647).
 * @method string getDiskId() Obtain ID of the original cloud disk corresponding to the snapshot, which can be queried via the API [DescribeDisks](/document/product/362/16315).
 * @method void setDiskId(string $DiskId) Set ID of the original cloud disk corresponding to the snapshot, which can be queried via the API [DescribeDisks](/document/product/362/16315).
 */
class ApplySnapshotRequest extends AbstractModel
{
    /**
     * @var string Snapshot ID, which can be queried via [DescribeSnapshots](/document/product/362/15647).
     */
    public $SnapshotId;

    /**
     * @var string ID of the original cloud disk corresponding to the snapshot, which can be queried via the API [DescribeDisks](/document/product/362/16315).
     */
    public $DiskId;

    /**
     * @param string $SnapshotId Snapshot ID, which can be queried via [DescribeSnapshots](/document/product/362/15647).
     * @param string $DiskId ID of the original cloud disk corresponding to the snapshot, which can be queried via the API [DescribeDisks](/document/product/362/16315).
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

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }
    }
}
