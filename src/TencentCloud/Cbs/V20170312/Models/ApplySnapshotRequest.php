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
 * @method string getSnapshotId() Obtain Snapshot ID, which can be queried via [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1).
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID, which can be queried via [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1).
 * @method string getDiskId() Obtain ID of the original cloud disk corresponding to the snapshot, which can be queried via the API [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1).
 * @method void setDiskId(string $DiskId) Set ID of the original cloud disk corresponding to the snapshot, which can be queried via the API [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1).
 * @method boolean getAutoStopInstance() Obtain Specifies whether to shut down a CVM automatically before a rollback
 * @method void setAutoStopInstance(boolean $AutoStopInstance) Set Specifies whether to shut down a CVM automatically before a rollback
 * @method boolean getAutoStartInstance() Obtain Specifies whether to start up a CVM automatically after a rollback
 * @method void setAutoStartInstance(boolean $AutoStartInstance) Set Specifies whether to start up a CVM automatically after a rollback
 */
class ApplySnapshotRequest extends AbstractModel
{
    /**
     * @var string Snapshot ID, which can be queried via [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1).
     */
    public $SnapshotId;

    /**
     * @var string ID of the original cloud disk corresponding to the snapshot, which can be queried via the API [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1).
     */
    public $DiskId;

    /**
     * @var boolean Specifies whether to shut down a CVM automatically before a rollback
     */
    public $AutoStopInstance;

    /**
     * @var boolean Specifies whether to start up a CVM automatically after a rollback
     */
    public $AutoStartInstance;

    /**
     * @param string $SnapshotId Snapshot ID, which can be queried via [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1).
     * @param string $DiskId ID of the original cloud disk corresponding to the snapshot, which can be queried via the API [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1).
     * @param boolean $AutoStopInstance Specifies whether to shut down a CVM automatically before a rollback
     * @param boolean $AutoStartInstance Specifies whether to start up a CVM automatically after a rollback
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

        if (array_key_exists("AutoStopInstance",$param) and $param["AutoStopInstance"] !== null) {
            $this->AutoStopInstance = $param["AutoStopInstance"];
        }

        if (array_key_exists("AutoStartInstance",$param) and $param["AutoStartInstance"] !== null) {
            $this->AutoStartInstance = $param["AutoStartInstance"];
        }
    }
}
