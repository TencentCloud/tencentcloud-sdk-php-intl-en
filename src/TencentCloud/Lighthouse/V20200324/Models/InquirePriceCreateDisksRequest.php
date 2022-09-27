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
 * InquirePriceCreateDisks request structure.
 *
 * @method integer getDiskSize() Obtain Cloud disk size in GB.
 * @method void setDiskSize(integer $DiskSize) Set Cloud disk size in GB.
 * @method string getDiskType() Obtain Cloud disk media type. Valid values: "CLOUD_PREMIUM" (premium cloud storage), "CLOUD_SSD" (SSD cloud disk).
 * @method void setDiskType(string $DiskType) Set Cloud disk media type. Valid values: "CLOUD_PREMIUM" (premium cloud storage), "CLOUD_SSD" (SSD cloud disk).
 * @method DiskChargePrepaid getDiskChargePrepaid() Obtain Parameter settings for purchasing the monthly subscribed cloud disk.
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) Set Parameter settings for purchasing the monthly subscribed cloud disk.
 * @method integer getDiskCount() Obtain Number of cloud disks. Default value: 1.
 * @method void setDiskCount(integer $DiskCount) Set Number of cloud disks. Default value: 1.
 * @method integer getDiskBackupQuota() Obtain Specify the quota of disk backups. No quota if it’s left empty. Only one quota is allowed.
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) Set Specify the quota of disk backups. No quota if it’s left empty. Only one quota is allowed.
 */
class InquirePriceCreateDisksRequest extends AbstractModel
{
    /**
     * @var integer Cloud disk size in GB.
     */
    public $DiskSize;

    /**
     * @var string Cloud disk media type. Valid values: "CLOUD_PREMIUM" (premium cloud storage), "CLOUD_SSD" (SSD cloud disk).
     */
    public $DiskType;

    /**
     * @var DiskChargePrepaid Parameter settings for purchasing the monthly subscribed cloud disk.
     */
    public $DiskChargePrepaid;

    /**
     * @var integer Number of cloud disks. Default value: 1.
     */
    public $DiskCount;

    /**
     * @var integer Specify the quota of disk backups. No quota if it’s left empty. Only one quota is allowed.
     */
    public $DiskBackupQuota;

    /**
     * @param integer $DiskSize Cloud disk size in GB.
     * @param string $DiskType Cloud disk media type. Valid values: "CLOUD_PREMIUM" (premium cloud storage), "CLOUD_SSD" (SSD cloud disk).
     * @param DiskChargePrepaid $DiskChargePrepaid Parameter settings for purchasing the monthly subscribed cloud disk.
     * @param integer $DiskCount Number of cloud disks. Default value: 1.
     * @param integer $DiskBackupQuota Specify the quota of disk backups. No quota if it’s left empty. Only one quota is allowed.
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

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new DiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }
    }
}
