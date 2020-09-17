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
 * ResizeDisk request structure.
 *
 * @method string getDiskId() Obtain ID of the cloud disk, which can be queried via the API [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1).
 * @method void setDiskId(string $DiskId) Set ID of the cloud disk, which can be queried via the API [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1).
 * @method integer getDiskSize() Obtain Cloud disk size after scale out (in GB). This must be larger than the current size of the cloud disk. For the value range of the cloud disk sizes, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
 * @method void setDiskSize(integer $DiskSize) Set Cloud disk size after scale out (in GB). This must be larger than the current size of the cloud disk. For the value range of the cloud disk sizes, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
 */
class ResizeDiskRequest extends AbstractModel
{
    /**
     * @var string ID of the cloud disk, which can be queried via the API [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1).
     */
    public $DiskId;

    /**
     * @var integer Cloud disk size after scale out (in GB). This must be larger than the current size of the cloud disk. For the value range of the cloud disk sizes, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
     */
    public $DiskSize;

    /**
     * @param string $DiskId ID of the cloud disk, which can be queried via the API [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1).
     * @param integer $DiskSize Cloud disk size after scale out (in GB). This must be larger than the current size of the cloud disk. For the value range of the cloud disk sizes, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
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

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
