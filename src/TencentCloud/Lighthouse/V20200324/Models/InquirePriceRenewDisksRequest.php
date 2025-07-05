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
 * InquirePriceRenewDisks request structure.
 *
 * @method array getDiskIds() Obtain List of cloud disk IDs.
 * @method void setDiskIds(array $DiskIds) Set List of cloud disk IDs.
 * @method RenewDiskChargePrepaid getRenewDiskChargePrepaid() Obtain Parameter settings for renewing the monthly subscribed cloud disk.
 * @method void setRenewDiskChargePrepaid(RenewDiskChargePrepaid $RenewDiskChargePrepaid) Set Parameter settings for renewing the monthly subscribed cloud disk.
 */
class InquirePriceRenewDisksRequest extends AbstractModel
{
    /**
     * @var array List of cloud disk IDs.
     */
    public $DiskIds;

    /**
     * @var RenewDiskChargePrepaid Parameter settings for renewing the monthly subscribed cloud disk.
     */
    public $RenewDiskChargePrepaid;

    /**
     * @param array $DiskIds List of cloud disk IDs.
     * @param RenewDiskChargePrepaid $RenewDiskChargePrepaid Parameter settings for renewing the monthly subscribed cloud disk.
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
    }
}
