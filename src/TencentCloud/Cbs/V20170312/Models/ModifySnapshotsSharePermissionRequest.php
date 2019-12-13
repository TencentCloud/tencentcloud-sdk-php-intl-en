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
 * @method array getAccountIds() 获取List of account IDs with which a snapshot is shared. For the format of array-type parameters, see [API Introduction](https://cloud.tencent.com/document/api/213/568). You can find the account ID in [Account Information](https://console.cloud.tencent.com/developer).
 * @method void setAccountIds(array $AccountIds) 设置List of account IDs with which a snapshot is shared. For the format of array-type parameters, see [API Introduction](https://cloud.tencent.com/document/api/213/568). You can find the account ID in [Account Information](https://console.cloud.tencent.com/developer).
 * @method string getPermission() 获取Operations. Valid values: `SHARE`, sharing an image; `CANCEL`, cancelling the sharing of an image.
 * @method void setPermission(string $Permission) 设置Operations. Valid values: `SHARE`, sharing an image; `CANCEL`, cancelling the sharing of an image.
 * @method array getSnapshotIds() 获取The ID of the snapshot. You can obtain this by using [DescribeSnapshots](https://cloud.tencent.com/document/api/362/15647).
 * @method void setSnapshotIds(array $SnapshotIds) 设置The ID of the snapshot. You can obtain this by using [DescribeSnapshots](https://cloud.tencent.com/document/api/362/15647).
 */

/**
 *ModifySnapshotsSharePermission request structure.
 */
class ModifySnapshotsSharePermissionRequest extends AbstractModel
{
    /**
     * @var array List of account IDs with which a snapshot is shared. For the format of array-type parameters, see [API Introduction](https://cloud.tencent.com/document/api/213/568). You can find the account ID in [Account Information](https://console.cloud.tencent.com/developer).
     */
    public $AccountIds;

    /**
     * @var string Operations. Valid values: `SHARE`, sharing an image; `CANCEL`, cancelling the sharing of an image.
     */
    public $Permission;

    /**
     * @var array The ID of the snapshot. You can obtain this by using [DescribeSnapshots](https://cloud.tencent.com/document/api/362/15647).
     */
    public $SnapshotIds;
    /**
     * @param array $AccountIds List of account IDs with which a snapshot is shared. For the format of array-type parameters, see [API Introduction](https://cloud.tencent.com/document/api/213/568). You can find the account ID in [Account Information](https://console.cloud.tencent.com/developer).
     * @param string $Permission Operations. Valid values: `SHARE`, sharing an image; `CANCEL`, cancelling the sharing of an image.
     * @param array $SnapshotIds The ID of the snapshot. You can obtain this by using [DescribeSnapshots](https://cloud.tencent.com/document/api/362/15647).
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
        if (array_key_exists("AccountIds",$param) and $param["AccountIds"] !== null) {
            $this->AccountIds = $param["AccountIds"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("SnapshotIds",$param) and $param["SnapshotIds"] !== null) {
            $this->SnapshotIds = $param["SnapshotIds"];
        }
    }
}
