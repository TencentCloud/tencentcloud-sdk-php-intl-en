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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes information on the snapshot associated with an image.
 *
 * @method string getSnapshotId() Obtain Snapshot ID.
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID.
 * @method string getDiskUsage() Obtain Type of the cloud disk used to create the snapshot. Valid values:
SYSTEM_DISK: system disk
DATA_DISK: data disk
 * @method void setDiskUsage(string $DiskUsage) Set Type of the cloud disk used to create the snapshot. Valid values:
SYSTEM_DISK: system disk
DATA_DISK: data disk
 * @method integer getDiskSize() Obtain Size of the cloud disk used to create the snapshot; unit: GB.
 * @method void setDiskSize(integer $DiskSize) Set Size of the cloud disk used to create the snapshot; unit: GB.
 */
class Snapshot extends AbstractModel
{
    /**
     * @var string Snapshot ID.
     */
    public $SnapshotId;

    /**
     * @var string Type of the cloud disk used to create the snapshot. Valid values:
SYSTEM_DISK: system disk
DATA_DISK: data disk
     */
    public $DiskUsage;

    /**
     * @var integer Size of the cloud disk used to create the snapshot; unit: GB.
     */
    public $DiskSize;

    /**
     * @param string $SnapshotId Snapshot ID.
     * @param string $DiskUsage Type of the cloud disk used to create the snapshot. Valid values:
SYSTEM_DISK: system disk
DATA_DISK: data disk
     * @param integer $DiskSize Size of the cloud disk used to create the snapshot; unit: GB.
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

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
