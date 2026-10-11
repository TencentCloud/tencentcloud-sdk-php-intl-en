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
 * CBS storage volume.
 *
 * @method string getVolumeName() Obtain Storage volume name.
 * @method void setVolumeName(string $VolumeName) Set Storage volume name.
 * @method string getDiskType() Obtain CBS disk type.
 * @method void setDiskType(string $DiskType) Set CBS disk type.
 * @method integer getDiskSize() Obtain CBS disk size (GB).
 * @method void setDiskSize(integer $DiskSize) Set CBS disk size (GB).
 * @method integer getDiskCount() Obtain Number of CBS disks.
 * @method void setDiskCount(integer $DiskCount) Set Number of CBS disks.
 */
class CBSVolume extends AbstractModel
{
    /**
     * @var string Storage volume name.
     */
    public $VolumeName;

    /**
     * @var string CBS disk type.
     */
    public $DiskType;

    /**
     * @var integer CBS disk size (GB).
     */
    public $DiskSize;

    /**
     * @var integer Number of CBS disks.
     */
    public $DiskCount;

    /**
     * @param string $VolumeName Storage volume name.
     * @param string $DiskType CBS disk type.
     * @param integer $DiskSize CBS disk size (GB).
     * @param integer $DiskCount Number of CBS disks.
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
        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }
    }
}
