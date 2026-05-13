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
 * ResizeDisk request structure.
 *
 * @method integer getDiskSize() Obtain Cloud disk size after scale out (in GB). This must be larger than the current size of the cloud disk. For the value range of the cloud disk sizes, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
 * @method void setDiskSize(integer $DiskSize) Set Cloud disk size after scale out (in GB). This must be larger than the current size of the cloud disk. For the value range of the cloud disk sizes, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
 * @method string getDiskId() Obtain Cloud disk ID, which can be queried by calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. this field is only required when expanding a single cloud disk.
 * @method void setDiskId(string $DiskId) Set Cloud disk ID, which can be queried by calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. this field is only required when expanding a single cloud disk.
 */
class ResizeDiskRequest extends AbstractModel
{
    /**
     * @var integer Cloud disk size after scale out (in GB). This must be larger than the current size of the cloud disk. For the value range of the cloud disk sizes, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
     */
    public $DiskSize;

    /**
     * @var string Cloud disk ID, which can be queried by calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. this field is only required when expanding a single cloud disk.
     */
    public $DiskId;

    /**
     * @param integer $DiskSize Cloud disk size after scale out (in GB). This must be larger than the current size of the cloud disk. For the value range of the cloud disk sizes, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
     * @param string $DiskId Cloud disk ID, which can be queried by calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. this field is only required when expanding a single cloud disk.
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
        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }
    }
}
