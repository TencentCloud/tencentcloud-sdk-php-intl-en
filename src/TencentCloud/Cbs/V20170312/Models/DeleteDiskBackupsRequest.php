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
 * DeleteDiskBackups request structure.
 *
 * @method array getDiskBackupIds() Obtain Cloud disk backup point ID to be deleted. can be queried through the [DescribeDiskBackups](https://www.tencentcloud.com/document/product/362/80278?from_cn_redirect=1) api.
 * @method void setDiskBackupIds(array $DiskBackupIds) Set Cloud disk backup point ID to be deleted. can be queried through the [DescribeDiskBackups](https://www.tencentcloud.com/document/product/362/80278?from_cn_redirect=1) api.
 */
class DeleteDiskBackupsRequest extends AbstractModel
{
    /**
     * @var array Cloud disk backup point ID to be deleted. can be queried through the [DescribeDiskBackups](https://www.tencentcloud.com/document/product/362/80278?from_cn_redirect=1) api.
     */
    public $DiskBackupIds;

    /**
     * @param array $DiskBackupIds Cloud disk backup point ID to be deleted. can be queried through the [DescribeDiskBackups](https://www.tencentcloud.com/document/product/362/80278?from_cn_redirect=1) api.
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
        if (array_key_exists("DiskBackupIds",$param) and $param["DiskBackupIds"] !== null) {
            $this->DiskBackupIds = $param["DiskBackupIds"];
        }
    }
}
