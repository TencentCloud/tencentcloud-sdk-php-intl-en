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
 * ModifySnapshotsSharePermission request structure.
 *
 * @method array getSnapshotIds() Obtain The ID of the snapshot. You can obtain this by using [DescribeSnapshots](https://intl.cloud.tencent.com/document/api/362/15647?from_cn_redirect=1).
 * @method void setSnapshotIds(array $SnapshotIds) Set The ID of the snapshot. You can obtain this by using [DescribeSnapshots](https://intl.cloud.tencent.com/document/api/362/15647?from_cn_redirect=1).
 * @method array getAccountIds() Obtain Account Id list for receiving shared snapshots. the format of array-type parameters can be found in the API overview (https://www.tencentcloud.com/document/API/213/568?from_cn_redirect=1). the account Id is different from a QQ number. to query a user account Id, view the account Id column in the account information (https://console.cloud.tencent.com/developer).
 * @method void setAccountIds(array $AccountIds) Set Account Id list for receiving shared snapshots. the format of array-type parameters can be found in the API overview (https://www.tencentcloud.com/document/API/213/568?from_cn_redirect=1). the account Id is different from a QQ number. to query a user account Id, view the account Id column in the account information (https://console.cloud.tencent.com/developer).
 * @method string getPermission() Obtain Operations. Valid values: `SHARE`, sharing an image; `CANCEL`, cancelling the sharing of an image.
 * @method void setPermission(string $Permission) Set Operations. Valid values: `SHARE`, sharing an image; `CANCEL`, cancelling the sharing of an image.
 */
class ModifySnapshotsSharePermissionRequest extends AbstractModel
{
    /**
     * @var array The ID of the snapshot. You can obtain this by using [DescribeSnapshots](https://intl.cloud.tencent.com/document/api/362/15647?from_cn_redirect=1).
     */
    public $SnapshotIds;

    /**
     * @var array Account Id list for receiving shared snapshots. the format of array-type parameters can be found in the API overview (https://www.tencentcloud.com/document/API/213/568?from_cn_redirect=1). the account Id is different from a QQ number. to query a user account Id, view the account Id column in the account information (https://console.cloud.tencent.com/developer).
     */
    public $AccountIds;

    /**
     * @var string Operations. Valid values: `SHARE`, sharing an image; `CANCEL`, cancelling the sharing of an image.
     */
    public $Permission;

    /**
     * @param array $SnapshotIds The ID of the snapshot. You can obtain this by using [DescribeSnapshots](https://intl.cloud.tencent.com/document/api/362/15647?from_cn_redirect=1).
     * @param array $AccountIds Account Id list for receiving shared snapshots. the format of array-type parameters can be found in the API overview (https://www.tencentcloud.com/document/API/213/568?from_cn_redirect=1). the account Id is different from a QQ number. to query a user account Id, view the account Id column in the account information (https://console.cloud.tencent.com/developer).
     * @param string $Permission Operations. Valid values: `SHARE`, sharing an image; `CANCEL`, cancelling the sharing of an image.
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

        if (array_key_exists("AccountIds",$param) and $param["AccountIds"] !== null) {
            $this->AccountIds = $param["AccountIds"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }
    }
}
