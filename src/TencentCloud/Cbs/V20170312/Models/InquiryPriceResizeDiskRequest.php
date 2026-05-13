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
 * InquiryPriceResizeDisk request structure.
 *
 * @method integer getDiskSize() Obtain Specifies the size after expanding the cloud disk in GiB, which should not be less than the current disk size. for the cloud disk size range, please refer to the product type of CBS (https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1).
 * @method void setDiskSize(integer $DiskSize) Set Specifies the size after expanding the cloud disk in GiB, which should not be less than the current disk size. for the cloud disk size range, please refer to the product type of CBS (https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1).
 * @method string getDiskId() Obtain Cloud disk ID. can be queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. mutually exclusive with the DiskIds parameter.
 * @method void setDiskId(string $DiskId) Set Cloud disk ID. can be queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. mutually exclusive with the DiskIds parameter.
 * @method integer getProjectId() Obtain cloud disk project ID. obtain this parameter by calling the projectId field in the return value of [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1). if input, it is only for authentication.
 * @method void setProjectId(integer $ProjectId) Set cloud disk project ID. obtain this parameter by calling the projectId field in the return value of [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1). if input, it is only for authentication.
 * @method array getDiskIds() Obtain Cloud disk ID list. queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. mutually exclusive with the DiskId parameter.
 * @method void setDiskIds(array $DiskIds) Set Cloud disk ID list. queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. mutually exclusive with the DiskId parameter.
 */
class InquiryPriceResizeDiskRequest extends AbstractModel
{
    /**
     * @var integer Specifies the size after expanding the cloud disk in GiB, which should not be less than the current disk size. for the cloud disk size range, please refer to the product type of CBS (https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1).
     */
    public $DiskSize;

    /**
     * @var string Cloud disk ID. can be queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. mutually exclusive with the DiskIds parameter.
     */
    public $DiskId;

    /**
     * @var integer cloud disk project ID. obtain this parameter by calling the projectId field in the return value of [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1). if input, it is only for authentication.
     */
    public $ProjectId;

    /**
     * @var array Cloud disk ID list. queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. mutually exclusive with the DiskId parameter.
     */
    public $DiskIds;

    /**
     * @param integer $DiskSize Specifies the size after expanding the cloud disk in GiB, which should not be less than the current disk size. for the cloud disk size range, please refer to the product type of CBS (https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1).
     * @param string $DiskId Cloud disk ID. can be queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. mutually exclusive with the DiskIds parameter.
     * @param integer $ProjectId cloud disk project ID. obtain this parameter by calling the projectId field in the return value of [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1). if input, it is only for authentication.
     * @param array $DiskIds Cloud disk ID list. queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. mutually exclusive with the DiskId parameter.
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }
    }
}
