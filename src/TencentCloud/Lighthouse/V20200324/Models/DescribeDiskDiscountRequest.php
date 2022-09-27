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
 * DescribeDiskDiscount request structure.
 *
 * @method string getDiskType() Obtain Cloud disk type. Valid values: "CLOUD_PREMIUM".
 * @method void setDiskType(string $DiskType) Set Cloud disk type. Valid values: "CLOUD_PREMIUM".
 * @method integer getDiskSize() Obtain Cloud disk size.
 * @method void setDiskSize(integer $DiskSize) Set Cloud disk size.
 * @method integer getDiskBackupQuota() Obtain Specify the quota of disk backups. No quota if it’s left empty. Only one quota is allowed.
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) Set Specify the quota of disk backups. No quota if it’s left empty. Only one quota is allowed.
 */
class DescribeDiskDiscountRequest extends AbstractModel
{
    /**
     * @var string Cloud disk type. Valid values: "CLOUD_PREMIUM".
     */
    public $DiskType;

    /**
     * @var integer Cloud disk size.
     */
    public $DiskSize;

    /**
     * @var integer Specify the quota of disk backups. No quota if it’s left empty. Only one quota is allowed.
     */
    public $DiskBackupQuota;

    /**
     * @param string $DiskType Cloud disk type. Valid values: "CLOUD_PREMIUM".
     * @param integer $DiskSize Cloud disk size.
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
