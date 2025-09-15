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
 * Node disk information
 *
 * @method integer getCount() Obtain Number of disks.
 * @method void setCount(integer $Count) Set Number of disks.
 * @method string getDiskType() Obtain Valid values of the system disk type:
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_BASIC: Cloud Disk.</li>
<li>LOCAL_BASIC: Local Disk.</li>
<li>LOCAL_SSD: Local SSD.</li>

Valid values of the data disk type.
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_BASIC: Cloud Disk.</li>
<li>LOCAL_BASIC: Local Disk.</li>
<li>LOCAL_SSD: Local SSD.</li>
<li>CLOUD_HSSD: Enhanced SSD.</li>
<li>CLOUD_THROUGHPUT: Throughput HDD.</li>
<li>CLOUD_TSSD: Tremendous SSD.</li>
<li>CLOUD_BIGDATA: Big Data Cloud Disk.</li>
<li>CLOUD_HIGHIO: High IO Cloud Disk.</li>
<li>CLOUD_BSSD: Balanced SSD.</li>
<li>REMOTE_SSD: Remote SSD.</li>

 * @method void setDiskType(string $DiskType) Set Valid values of the system disk type:
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_BASIC: Cloud Disk.</li>
<li>LOCAL_BASIC: Local Disk.</li>
<li>LOCAL_SSD: Local SSD.</li>

Valid values of the data disk type.
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_BASIC: Cloud Disk.</li>
<li>LOCAL_BASIC: Local Disk.</li>
<li>LOCAL_SSD: Local SSD.</li>
<li>CLOUD_HSSD: Enhanced SSD.</li>
<li>CLOUD_THROUGHPUT: Throughput HDD.</li>
<li>CLOUD_TSSD: Tremendous SSD.</li>
<li>CLOUD_BIGDATA: Big Data Cloud Disk.</li>
<li>CLOUD_HIGHIO: High IO Cloud Disk.</li>
<li>CLOUD_BSSD: Balanced SSD.</li>
<li>REMOTE_SSD: Remote SSD.</li>

 * @method integer getDiskSize() Obtain Data capacity in GB.
 * @method void setDiskSize(integer $DiskSize) Set Data capacity in GB.
 * @method integer getExtraPerformance() Obtain Additional performance.
 * @method void setExtraPerformance(integer $ExtraPerformance) Set Additional performance.
 */
class DiskSpecInfo extends AbstractModel
{
    /**
     * @var integer Number of disks.
     */
    public $Count;

    /**
     * @var string Valid values of the system disk type:
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_BASIC: Cloud Disk.</li>
<li>LOCAL_BASIC: Local Disk.</li>
<li>LOCAL_SSD: Local SSD.</li>

Valid values of the data disk type.
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_BASIC: Cloud Disk.</li>
<li>LOCAL_BASIC: Local Disk.</li>
<li>LOCAL_SSD: Local SSD.</li>
<li>CLOUD_HSSD: Enhanced SSD.</li>
<li>CLOUD_THROUGHPUT: Throughput HDD.</li>
<li>CLOUD_TSSD: Tremendous SSD.</li>
<li>CLOUD_BIGDATA: Big Data Cloud Disk.</li>
<li>CLOUD_HIGHIO: High IO Cloud Disk.</li>
<li>CLOUD_BSSD: Balanced SSD.</li>
<li>REMOTE_SSD: Remote SSD.</li>

     */
    public $DiskType;

    /**
     * @var integer Data capacity in GB.
     */
    public $DiskSize;

    /**
     * @var integer Additional performance.
     */
    public $ExtraPerformance;

    /**
     * @param integer $Count Number of disks.
     * @param string $DiskType Valid values of the system disk type:
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_BASIC: Cloud Disk.</li>
<li>LOCAL_BASIC: Local Disk.</li>
<li>LOCAL_SSD: Local SSD.</li>

Valid values of the data disk type.
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_BASIC: Cloud Disk.</li>
<li>LOCAL_BASIC: Local Disk.</li>
<li>LOCAL_SSD: Local SSD.</li>
<li>CLOUD_HSSD: Enhanced SSD.</li>
<li>CLOUD_THROUGHPUT: Throughput HDD.</li>
<li>CLOUD_TSSD: Tremendous SSD.</li>
<li>CLOUD_BIGDATA: Big Data Cloud Disk.</li>
<li>CLOUD_HIGHIO: High IO Cloud Disk.</li>
<li>CLOUD_BSSD: Balanced SSD.</li>
<li>REMOTE_SSD: Remote SSD.</li>

     * @param integer $DiskSize Data capacity in GB.
     * @param integer $ExtraPerformance Additional performance.
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("ExtraPerformance",$param) and $param["ExtraPerformance"] !== null) {
            $this->ExtraPerformance = $param["ExtraPerformance"];
        }
    }
}
