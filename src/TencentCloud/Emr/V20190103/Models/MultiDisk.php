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
 * Multi-cloud disk parameters
 *
 * @method string getDiskType() Obtain Cloud disk type.
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_HSSD: Enhanced SSD.</li>
 * @method void setDiskType(string $DiskType) Set Cloud disk type.
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_HSSD: Enhanced SSD.</li>
 * @method integer getVolume() Obtain Cloud disk size.
 * @method void setVolume(integer $Volume) Set Cloud disk size.
 * @method integer getCount() Obtain Number of cloud disks of this type.
 * @method void setCount(integer $Count) Set Number of cloud disks of this type.
 */
class MultiDisk extends AbstractModel
{
    /**
     * @var string Cloud disk type.
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_HSSD: Enhanced SSD.</li>
     */
    public $DiskType;

    /**
     * @var integer Cloud disk size.
     */
    public $Volume;

    /**
     * @var integer Number of cloud disks of this type.
     */
    public $Count;

    /**
     * @param string $DiskType Cloud disk type.
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_HSSD: Enhanced SSD.</li>
     * @param integer $Volume Cloud disk size.
     * @param integer $Count Number of cloud disks of this type.
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

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
