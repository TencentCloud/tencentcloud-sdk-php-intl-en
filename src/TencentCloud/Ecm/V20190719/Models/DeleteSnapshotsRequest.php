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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteSnapshots request structure.
 *
 * @method array getSnapshotIds() Obtain List of IDs of the snapshots to be deleted, which can be queried through [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1).
 * @method void setSnapshotIds(array $SnapshotIds) Set List of IDs of the snapshots to be deleted, which can be queried through [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1).
 * @method boolean getDeleteBindImages() Obtain Whether to force delete the images associated with the snapshot.
 * @method void setDeleteBindImages(boolean $DeleteBindImages) Set Whether to force delete the images associated with the snapshot.
 */
class DeleteSnapshotsRequest extends AbstractModel
{
    /**
     * @var array List of IDs of the snapshots to be deleted, which can be queried through [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1).
     */
    public $SnapshotIds;

    /**
     * @var boolean Whether to force delete the images associated with the snapshot.
     */
    public $DeleteBindImages;

    /**
     * @param array $SnapshotIds List of IDs of the snapshots to be deleted, which can be queried through [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1).
     * @param boolean $DeleteBindImages Whether to force delete the images associated with the snapshot.
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
        if (array_key_exists("SnapshotIds",$param) and $param["SnapshotIds"] !== null) {
            $this->SnapshotIds = $param["SnapshotIds"];
        }

        if (array_key_exists("DeleteBindImages",$param) and $param["DeleteBindImages"] !== null) {
            $this->DeleteBindImages = $param["DeleteBindImages"];
        }
    }
}
