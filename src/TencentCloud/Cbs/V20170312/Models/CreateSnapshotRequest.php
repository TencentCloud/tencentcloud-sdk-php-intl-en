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
 * CreateSnapshot request structure.
 *
 * @method string getDiskId() Obtain ID of the cloud disk for which to create a snapshot, which can be queried through the [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1) API.
 * @method void setDiskId(string $DiskId) Set ID of the cloud disk for which to create a snapshot, which can be queried through the [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1) API.
 * @method string getSnapshotName() Obtain Snapshot name. If it is not specified, "Unnamed" will be used by default.
 * @method void setSnapshotName(string $SnapshotName) Set Snapshot name. If it is not specified, "Unnamed" will be used by default.
 * @method string getDeadline() Obtain Expiration time of the snapshot. It must be in UTC ISO-8601 format, eg. 2022-01-08T09:47:55+00:00. The snapshot will be automatically deleted when it expires.
 * @method void setDeadline(string $Deadline) Set Expiration time of the snapshot. It must be in UTC ISO-8601 format, eg. 2022-01-08T09:47:55+00:00. The snapshot will be automatically deleted when it expires.
 * @method string getDiskBackupId() Obtain ID of the cloud disk backup point. When this parameter is specified, the snapshot will be created from the backup point.
 * @method void setDiskBackupId(string $DiskBackupId) Set ID of the cloud disk backup point. When this parameter is specified, the snapshot will be created from the backup point.
 * @method array getTags() Obtain Tags bound to the snapshot.
 * @method void setTags(array $Tags) Set Tags bound to the snapshot.
 */
class CreateSnapshotRequest extends AbstractModel
{
    /**
     * @var string ID of the cloud disk for which to create a snapshot, which can be queried through the [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1) API.
     */
    public $DiskId;

    /**
     * @var string Snapshot name. If it is not specified, "Unnamed" will be used by default.
     */
    public $SnapshotName;

    /**
     * @var string Expiration time of the snapshot. It must be in UTC ISO-8601 format, eg. 2022-01-08T09:47:55+00:00. The snapshot will be automatically deleted when it expires.
     */
    public $Deadline;

    /**
     * @var string ID of the cloud disk backup point. When this parameter is specified, the snapshot will be created from the backup point.
     */
    public $DiskBackupId;

    /**
     * @var array Tags bound to the snapshot.
     */
    public $Tags;

    /**
     * @param string $DiskId ID of the cloud disk for which to create a snapshot, which can be queried through the [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1) API.
     * @param string $SnapshotName Snapshot name. If it is not specified, "Unnamed" will be used by default.
     * @param string $Deadline Expiration time of the snapshot. It must be in UTC ISO-8601 format, eg. 2022-01-08T09:47:55+00:00. The snapshot will be automatically deleted when it expires.
     * @param string $DiskBackupId ID of the cloud disk backup point. When this parameter is specified, the snapshot will be created from the backup point.
     * @param array $Tags Tags bound to the snapshot.
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("DiskBackupId",$param) and $param["DiskBackupId"] !== null) {
            $this->DiskBackupId = $param["DiskBackupId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
