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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResizeDisks request structure.
 *
 * @method array getDiskIds() Obtain Cloud disk ID list, which can be queried via the [DescribeDisks](https://www.tencentcloud.comom/document/api/1207/66093?from_cn_redirect=1) API. The maximum length of the list is 15.
 * @method void setDiskIds(array $DiskIds) Set Cloud disk ID list, which can be queried via the [DescribeDisks](https://www.tencentcloud.comom/document/api/1207/66093?from_cn_redirect=1) API. The maximum length of the list is 15.
 * @method integer getDiskSize() Obtain Size of the cloud disk after scale-out, in GB. The value range of the Premium Disk size is [10, 4000], and that of the Cloud SSD size is [20, 4000]. The cloud disk size after scale-out must be greater than the current disk size.
 * @method void setDiskSize(integer $DiskSize) Set Size of the cloud disk after scale-out, in GB. The value range of the Premium Disk size is [10, 4000], and that of the Cloud SSD size is [20, 4000]. The cloud disk size after scale-out must be greater than the current disk size.
 */
class ResizeDisksRequest extends AbstractModel
{
    /**
     * @var array Cloud disk ID list, which can be queried via the [DescribeDisks](https://www.tencentcloud.comom/document/api/1207/66093?from_cn_redirect=1) API. The maximum length of the list is 15.
     */
    public $DiskIds;

    /**
     * @var integer Size of the cloud disk after scale-out, in GB. The value range of the Premium Disk size is [10, 4000], and that of the Cloud SSD size is [20, 4000]. The cloud disk size after scale-out must be greater than the current disk size.
     */
    public $DiskSize;

    /**
     * @param array $DiskIds Cloud disk ID list, which can be queried via the [DescribeDisks](https://www.tencentcloud.comom/document/api/1207/66093?from_cn_redirect=1) API. The maximum length of the list is 15.
     * @param integer $DiskSize Size of the cloud disk after scale-out, in GB. The value range of the Premium Disk size is [10, 4000], and that of the Cloud SSD size is [20, 4000]. The cloud disk size after scale-out must be greater than the current disk size.
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
