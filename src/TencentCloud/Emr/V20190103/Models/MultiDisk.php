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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Multi-cloud disk parameters
 *
 * @method string getDiskType() Obtain Disk type
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium cloud disk.</li>
<li>CLOUD_HSSD: Enhanced SSD.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskType(string $DiskType) Set Disk type
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium cloud disk.</li>
<li>CLOUD_HSSD: Enhanced SSD.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVolume() Obtain Cloud disk sizeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setVolume(integer $Volume) Set Cloud disk sizeNote: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCount() Obtain Number of cloud disks of this typeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setCount(integer $Count) Set Number of cloud disks of this typeNote: This field may return null, indicating that no valid values can be obtained.
 */
class MultiDisk extends AbstractModel
{
    /**
     * @var string Disk type
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium cloud disk.</li>
<li>CLOUD_HSSD: Enhanced SSD.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskType;

    /**
     * @var integer Cloud disk sizeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Volume;

    /**
     * @var integer Number of cloud disks of this typeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Count;

    /**
     * @param string $DiskType Disk type
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium cloud disk.</li>
<li>CLOUD_HSSD: Enhanced SSD.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Volume Cloud disk sizeNote: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Count Number of cloud disks of this typeNote: This field may return null, indicating that no valid values can be obtained.
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
