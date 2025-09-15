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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description of Pod `PVC` storage method
 *
 * @method integer getDiskSize() Obtain Disk size in GB.
 * @method void setDiskSize(integer $DiskSize) Set Disk size in GB.
 * @method string getDiskType() Obtain Disk type, CLOUD_PREMIUM or CLOUD_SSD.
 * @method void setDiskType(string $DiskType) Set Disk type, CLOUD_PREMIUM or CLOUD_SSD.
 * @method integer getDiskNum() Obtain Number of disks.
 * @method void setDiskNum(integer $DiskNum) Set Number of disks.
 * @method integer getExtraPerformance() Obtain Additional performance of cloud disks.
 * @method void setExtraPerformance(integer $ExtraPerformance) Set Additional performance of cloud disks.
 */
class PersistentVolumeContext extends AbstractModel
{
    /**
     * @var integer Disk size in GB.
     */
    public $DiskSize;

    /**
     * @var string Disk type, CLOUD_PREMIUM or CLOUD_SSD.
     */
    public $DiskType;

    /**
     * @var integer Number of disks.
     */
    public $DiskNum;

    /**
     * @var integer Additional performance of cloud disks.
     */
    public $ExtraPerformance;

    /**
     * @param integer $DiskSize Disk size in GB.
     * @param string $DiskType Disk type, CLOUD_PREMIUM or CLOUD_SSD.
     * @param integer $DiskNum Number of disks.
     * @param integer $ExtraPerformance Additional performance of cloud disks.
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

        if (array_key_exists("DiskNum",$param) and $param["DiskNum"] !== null) {
            $this->DiskNum = $param["DiskNum"];
        }

        if (array_key_exists("ExtraPerformance",$param) and $param["ExtraPerformance"] !== null) {
            $this->ExtraPerformance = $param["ExtraPerformance"];
        }
    }
}
