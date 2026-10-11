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
 * Disk information.
 *
 * @method string getDiskType() Obtain Data disk type, which is available when an EMR container cluster is created. Valid values:
<li>CLOUD_SSD: SSD Cloud Disk</li>
<li>CLOUD_PREMIUM: Premium Disk</li>
 * @method void setDiskType(string $DiskType) Set Data disk type, which is available when an EMR container cluster is created. Valid values:
<li>CLOUD_SSD: SSD Cloud Disk</li>
<li>CLOUD_PREMIUM: Premium Disk</li>
 * @method integer getDiskCapacity() Obtain Single block size (GB).
 * @method void setDiskCapacity(integer $DiskCapacity) Set Single block size (GB).
 * @method integer getDiskNumber() Obtain Number of data disks.
 * @method void setDiskNumber(integer $DiskNumber) Set Number of data disks.
 */
class Disk extends AbstractModel
{
    /**
     * @var string Data disk type, which is available when an EMR container cluster is created. Valid values:
<li>CLOUD_SSD: SSD Cloud Disk</li>
<li>CLOUD_PREMIUM: Premium Disk</li>
     */
    public $DiskType;

    /**
     * @var integer Single block size (GB).
     */
    public $DiskCapacity;

    /**
     * @var integer Number of data disks.
     */
    public $DiskNumber;

    /**
     * @param string $DiskType Data disk type, which is available when an EMR container cluster is created. Valid values:
<li>CLOUD_SSD: SSD Cloud Disk</li>
<li>CLOUD_PREMIUM: Premium Disk</li>
     * @param integer $DiskCapacity Single block size (GB).
     * @param integer $DiskNumber Number of data disks.
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

        if (array_key_exists("DiskCapacity",$param) and $param["DiskCapacity"] !== null) {
            $this->DiskCapacity = $param["DiskCapacity"];
        }

        if (array_key_exists("DiskNumber",$param) and $param["DiskNumber"] !== null) {
            $this->DiskNumber = $param["DiskNumber"];
        }
    }
}
