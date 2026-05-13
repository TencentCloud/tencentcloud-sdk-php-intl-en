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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * This parameter is used for the snapshot group rollback API input, representing the cloud disks and snapshot list to be rolled back.
 *
 * @method string getSnapshotId() Obtain Specifies the snapshot ID associated with the snapshot group.
 * @method void setSnapshotId(string $SnapshotId) Set Specifies the snapshot ID associated with the snapshot group.
 * @method string getDiskId() Obtain Specifies the original cloud disk ID of the snapshot associated with the snapshot group.
 * @method void setDiskId(string $DiskId) Set Specifies the original cloud disk ID of the snapshot associated with the snapshot group.
 */
class ApplyDisk extends AbstractModel
{
    /**
     * @var string Specifies the snapshot ID associated with the snapshot group.
     */
    public $SnapshotId;

    /**
     * @var string Specifies the original cloud disk ID of the snapshot associated with the snapshot group.
     */
    public $DiskId;

    /**
     * @param string $SnapshotId Specifies the snapshot ID associated with the snapshot group.
     * @param string $DiskId Specifies the original cloud disk ID of the snapshot associated with the snapshot group.
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
