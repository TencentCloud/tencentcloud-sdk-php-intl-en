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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCfsSnapshot request structure.
 *
 * @method string getSnapshotId() Obtain Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.comom/document/api/582/80206?from_cn_redirect=1) api.
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.comom/document/api/582/80206?from_cn_redirect=1) api.
 * @method array getSnapshotIds() Obtain Snapshot ID of the file system snapshot that needs to be deleted. specify either the snapshot ID or the ID list, at least one is required.
Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.comom/document/api/582/80206?from_cn_redirect=1) api.
 * @method void setSnapshotIds(array $SnapshotIds) Set Snapshot ID of the file system snapshot that needs to be deleted. specify either the snapshot ID or the ID list, at least one is required.
Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.comom/document/api/582/80206?from_cn_redirect=1) api.
 */
class DeleteCfsSnapshotRequest extends AbstractModel
{
    /**
     * @var string Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.comom/document/api/582/80206?from_cn_redirect=1) api.
     */
    public $SnapshotId;

    /**
     * @var array Snapshot ID of the file system snapshot that needs to be deleted. specify either the snapshot ID or the ID list, at least one is required.
Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.comom/document/api/582/80206?from_cn_redirect=1) api.
     */
    public $SnapshotIds;

    /**
     * @param string $SnapshotId Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.comom/document/api/582/80206?from_cn_redirect=1) api.
     * @param array $SnapshotIds Snapshot ID of the file system snapshot that needs to be deleted. specify either the snapshot ID or the ID list, at least one is required.
Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.comom/document/api/582/80206?from_cn_redirect=1) api.
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
