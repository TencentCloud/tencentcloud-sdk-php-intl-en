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
 * @method string getSnapshotId() 获取Snapshot ID, which can be queried via [DescribeSnapshots](/document/product/362/15647).
 * @method void setSnapshotId(string $SnapshotId) 设置Snapshot ID, which can be queried via [DescribeSnapshots](/document/product/362/15647).
 * @method string getDiskId() 获取ID of the original cloud disk corresponding to the snapshot, which can be queried via the API [DescribeDisks](/document/product/362/16315).
 * @method void setDiskId(string $DiskId) 设置ID of the original cloud disk corresponding to the snapshot, which can be queried via the API [DescribeDisks](/document/product/362/16315).
 */

/**
 *ApplySnapshot request structure.
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
     * 内部实现，用户禁止调用
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
