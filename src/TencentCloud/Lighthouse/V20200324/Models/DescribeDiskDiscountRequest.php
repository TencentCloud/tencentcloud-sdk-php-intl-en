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
 * DescribeDiskDiscount request structure.
 *
 * @method string getDiskType() Obtain CLOUD disk type. valid values: CLOUD_PREMIUM: high-performance CLOUD block storage, CLOUD_SSD: SSD CLOUD disk.
 * @method void setDiskType(string $DiskType) Set CLOUD disk type. valid values: CLOUD_PREMIUM: high-performance CLOUD block storage, CLOUD_SSD: SSD CLOUD disk.
 * @method integer getDiskSize() Obtain CBS disk capacity, unit: GB.
 * @method void setDiskSize(integer $DiskSize) Set CBS disk capacity, unit: GB.
 * @method integer getDiskBackupQuota() Obtain Specify the cloud disk backup point quota. by default, no backup point quota is set if not specified. currently only support setting no quota or a cloud disk backup point quota within [0 - 500].
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) Set Specify the cloud disk backup point quota. by default, no backup point quota is set if not specified. currently only support setting no quota or a cloud disk backup point quota within [0 - 500].
 */
class DescribeDiskDiscountRequest extends AbstractModel
{
    /**
     * @var string CLOUD disk type. valid values: CLOUD_PREMIUM: high-performance CLOUD block storage, CLOUD_SSD: SSD CLOUD disk.
     */
    public $DiskType;

    /**
     * @var integer CBS disk capacity, unit: GB.
     */
    public $DiskSize;

    /**
     * @var integer Specify the cloud disk backup point quota. by default, no backup point quota is set if not specified. currently only support setting no quota or a cloud disk backup point quota within [0 - 500].
     */
    public $DiskBackupQuota;

    /**
     * @param string $DiskType CLOUD disk type. valid values: CLOUD_PREMIUM: high-performance CLOUD block storage, CLOUD_SSD: SSD CLOUD disk.
     * @param integer $DiskSize CBS disk capacity, unit: GB.
     * @param integer $DiskBackupQuota Specify the cloud disk backup point quota. by default, no backup point quota is set if not specified. currently only support setting no quota or a cloud disk backup point quota within [0 - 500].
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }
    }
}
