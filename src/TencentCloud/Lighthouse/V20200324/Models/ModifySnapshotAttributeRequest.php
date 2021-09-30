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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySnapshotAttribute request structure.
 *
 * @method string getSnapshotId() Obtain Snapshot ID, which can be queried through `DescribeSnapshots`.
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID, which can be queried through `DescribeSnapshots`.
 * @method string getSnapshotName() Obtain New snapshot name, which can contain up to 60 characters.
 * @method void setSnapshotName(string $SnapshotName) Set New snapshot name, which can contain up to 60 characters.
 */
class ModifySnapshotAttributeRequest extends AbstractModel
{
    /**
     * @var string Snapshot ID, which can be queried through `DescribeSnapshots`.
     */
    public $SnapshotId;

    /**
     * @var string New snapshot name, which can contain up to 60 characters.
     */
    public $SnapshotName;

    /**
     * @param string $SnapshotId Snapshot ID, which can be queried through `DescribeSnapshots`.
     * @param string $SnapshotName New snapshot name, which can contain up to 60 characters.
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

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }
    }
}
