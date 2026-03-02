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
 * RenewDisk request structure.
 *
 * @method DiskChargePrepaid getDiskChargePrepaid() Obtain Specifies the parameter CurInstanceDeadline in the scenario where the cloud disk and mounted instance renew together. at this point, the cloud disk renewal aligns with the instance renewal expiry date.
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) Set Specifies the parameter CurInstanceDeadline in the scenario where the cloud disk and mounted instance renew together. at this point, the cloud disk renewal aligns with the instance renewal expiry date.
 * @method string getDiskId() Obtain Cloud disk ID, which can be queried by calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) API.
 * @method void setDiskId(string $DiskId) Set Cloud disk ID, which can be queried by calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) API.
 */
class RenewDiskRequest extends AbstractModel
{
    /**
     * @var DiskChargePrepaid Specifies the parameter CurInstanceDeadline in the scenario where the cloud disk and mounted instance renew together. at this point, the cloud disk renewal aligns with the instance renewal expiry date.
     */
    public $DiskChargePrepaid;

    /**
     * @var string Cloud disk ID, which can be queried by calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) API.
     */
    public $DiskId;

    /**
     * @param DiskChargePrepaid $DiskChargePrepaid Specifies the parameter CurInstanceDeadline in the scenario where the cloud disk and mounted instance renew together. at this point, the cloud disk renewal aligns with the instance renewal expiry date.
     * @param string $DiskId Cloud disk ID, which can be queried by calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) API.
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
        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new DiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }
    }
}
