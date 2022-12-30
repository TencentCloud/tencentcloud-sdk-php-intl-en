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
 * Node disk information
 *
 * @method integer getCount() Obtain The number of disks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCount(integer $Count) Set The number of disks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDiskType() Obtain The system disk type. Valid values:
<li>`CLOUD_SSD`: Cloud SSD</li>
<li>`CLOUD_PREMIUM`: Premium cloud disk</li>
<li>`CLOUD_BASIC`: Cloud HDD</li>
<li>`LOCAL_BASIC`: Local disk</li>
<li>`LOCAL_SSD`: Local SSD</li>

The data disk type. Valid values:
<li>`CLOUD_SSD`: Cloud SSD</li>
<li>`CLOUD_PREMIUM`: Premium cloud disk</li>
<li>`CLOUD_BASIC`: Cloud HDD</li>
<li>`LOCAL_BASIC`: Local disk</li>
<li>`LOCAL_SSD`: Local SSD</li>
<li>`CLOUD_HSSD`: Enhanced SSD</li>
<li>`CLOUD_THROUGHPUT`: Throughput HDD</li>
<li>CLOUD_TSSD: ulTra SSD</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskType(string $DiskType) Set The system disk type. Valid values:
<li>`CLOUD_SSD`: Cloud SSD</li>
<li>`CLOUD_PREMIUM`: Premium cloud disk</li>
<li>`CLOUD_BASIC`: Cloud HDD</li>
<li>`LOCAL_BASIC`: Local disk</li>
<li>`LOCAL_SSD`: Local SSD</li>

The data disk type. Valid values:
<li>`CLOUD_SSD`: Cloud SSD</li>
<li>`CLOUD_PREMIUM`: Premium cloud disk</li>
<li>`CLOUD_BASIC`: Cloud HDD</li>
<li>`LOCAL_BASIC`: Local disk</li>
<li>`LOCAL_SSD`: Local SSD</li>
<li>`CLOUD_HSSD`: Enhanced SSD</li>
<li>`CLOUD_THROUGHPUT`: Throughput HDD</li>
<li>CLOUD_TSSD: ulTra SSD</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskSize() Obtain The disk capacity in GB.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskSize(integer $DiskSize) Set The disk capacity in GB.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DiskSpecInfo extends AbstractModel
{
    /**
     * @var integer The number of disks.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Count;

    /**
     * @var string The system disk type. Valid values:
<li>`CLOUD_SSD`: Cloud SSD</li>
<li>`CLOUD_PREMIUM`: Premium cloud disk</li>
<li>`CLOUD_BASIC`: Cloud HDD</li>
<li>`LOCAL_BASIC`: Local disk</li>
<li>`LOCAL_SSD`: Local SSD</li>

The data disk type. Valid values:
<li>`CLOUD_SSD`: Cloud SSD</li>
<li>`CLOUD_PREMIUM`: Premium cloud disk</li>
<li>`CLOUD_BASIC`: Cloud HDD</li>
<li>`LOCAL_BASIC`: Local disk</li>
<li>`LOCAL_SSD`: Local SSD</li>
<li>`CLOUD_HSSD`: Enhanced SSD</li>
<li>`CLOUD_THROUGHPUT`: Throughput HDD</li>
<li>CLOUD_TSSD: ulTra SSD</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskType;

    /**
     * @var integer The disk capacity in GB.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskSize;

    /**
     * @param integer $Count The number of disks.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DiskType The system disk type. Valid values:
<li>`CLOUD_SSD`: Cloud SSD</li>
<li>`CLOUD_PREMIUM`: Premium cloud disk</li>
<li>`CLOUD_BASIC`: Cloud HDD</li>
<li>`LOCAL_BASIC`: Local disk</li>
<li>`LOCAL_SSD`: Local SSD</li>

The data disk type. Valid values:
<li>`CLOUD_SSD`: Cloud SSD</li>
<li>`CLOUD_PREMIUM`: Premium cloud disk</li>
<li>`CLOUD_BASIC`: Cloud HDD</li>
<li>`LOCAL_BASIC`: Local disk</li>
<li>`LOCAL_SSD`: Local SSD</li>
<li>`CLOUD_HSSD`: Enhanced SSD</li>
<li>`CLOUD_THROUGHPUT`: Throughput HDD</li>
<li>CLOUD_TSSD: ulTra SSD</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskSize The disk capacity in GB.
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
