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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewDisks request structure.
 *
 * @method array getDiskIds() Obtain IDs of cloud disks. The value can be obtained from the `DiskId` parameter returned by the [DescribeDisks](https://intl.cloud.tencent.com/document/product/1207/66093?from_cn_redirect=1) API. Up to 50 disks can be requested at a time.
 * @method void setDiskIds(array $DiskIds) Set IDs of cloud disks. The value can be obtained from the `DiskId` parameter returned by the [DescribeDisks](https://intl.cloud.tencent.com/document/product/1207/66093?from_cn_redirect=1) API. Up to 50 disks can be requested at a time.
 * @method RenewDiskChargePrepaid getRenewDiskChargePrepaid() Obtain Parameter settings for renewing the monthly subscribed cloud disk.
 * @method void setRenewDiskChargePrepaid(RenewDiskChargePrepaid $RenewDiskChargePrepaid) Set Parameter settings for renewing the monthly subscribed cloud disk.
 * @method boolean getAutoVoucher() Obtain Whether to use the vouchers automatically. It defaults to No.
 * @method void setAutoVoucher(boolean $AutoVoucher) Set Whether to use the vouchers automatically. It defaults to No.
 */
class RenewDisksRequest extends AbstractModel
{
    /**
     * @var array IDs of cloud disks. The value can be obtained from the `DiskId` parameter returned by the [DescribeDisks](https://intl.cloud.tencent.com/document/product/1207/66093?from_cn_redirect=1) API. Up to 50 disks can be requested at a time.
     */
    public $DiskIds;

    /**
     * @var RenewDiskChargePrepaid Parameter settings for renewing the monthly subscribed cloud disk.
     */
    public $RenewDiskChargePrepaid;

    /**
     * @var boolean Whether to use the vouchers automatically. It defaults to No.
     */
    public $AutoVoucher;

    /**
     * @param array $DiskIds IDs of cloud disks. The value can be obtained from the `DiskId` parameter returned by the [DescribeDisks](https://intl.cloud.tencent.com/document/product/1207/66093?from_cn_redirect=1) API. Up to 50 disks can be requested at a time.
     * @param RenewDiskChargePrepaid $RenewDiskChargePrepaid Parameter settings for renewing the monthly subscribed cloud disk.
     * @param boolean $AutoVoucher Whether to use the vouchers automatically. It defaults to No.
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

        if (array_key_exists("RenewDiskChargePrepaid",$param) and $param["RenewDiskChargePrepaid"] !== null) {
            $this->RenewDiskChargePrepaid = new RenewDiskChargePrepaid();
            $this->RenewDiskChargePrepaid->deserialize($param["RenewDiskChargePrepaid"]);
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }
    }
}
