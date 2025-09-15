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
 * @method integer getCount() Obtain Number of cloud disks of this type.
 * @method void setCount(integer $Count) Set Number of cloud disks of this type.
 * @method integer getType() Obtain Disk type.
1: Local Disk.
2: Cloud Disk.
3: Local SSD.
4: Cloud SSD.
5: Premium Cloud Disk.
6: Enhanced SSD.
11: Throughput HDD.
12: Tremendous SSD.
13: Balanced SSD.
14: Big Data Cloud Disk.
15: High IO Cloud Disk.
16: Remote SSD.
 * @method void setType(integer $Type) Set Disk type.
1: Local Disk.
2: Cloud Disk.
3: Local SSD.
4: Cloud SSD.
5: Premium Cloud Disk.
6: Enhanced SSD.
11: Throughput HDD.
12: Tremendous SSD.
13: Balanced SSD.
14: Big Data Cloud Disk.
15: High IO Cloud Disk.
16: Remote SSD.
 * @method string getSize() Obtain Disk size.
 * @method void setSize(string $Size) Set Disk size.
 * @method integer getVolume() Obtain Cloud disk size (bytes).
 * @method void setVolume(integer $Volume) Set Cloud disk size (bytes).
 */
class MultiDiskMC extends AbstractModel
{
    /**
     * @var integer Number of cloud disks of this type.
     */
    public $Count;

    /**
     * @var integer Disk type.
1: Local Disk.
2: Cloud Disk.
3: Local SSD.
4: Cloud SSD.
5: Premium Cloud Disk.
6: Enhanced SSD.
11: Throughput HDD.
12: Tremendous SSD.
13: Balanced SSD.
14: Big Data Cloud Disk.
15: High IO Cloud Disk.
16: Remote SSD.
     */
    public $Type;

    /**
     * @var string Disk size.
     */
    public $Size;

    /**
     * @var integer Cloud disk size (bytes).
     */
    public $Volume;

    /**
     * @param integer $Count Number of cloud disks of this type.
     * @param integer $Type Disk type.
1: Local Disk.
2: Cloud Disk.
3: Local SSD.
4: Cloud SSD.
5: Premium Cloud Disk.
6: Enhanced SSD.
11: Throughput HDD.
12: Tremendous SSD.
13: Balanced SSD.
14: Big Data Cloud Disk.
15: High IO Cloud Disk.
16: Remote SSD.
     * @param string $Size Disk size.
     * @param integer $Volume Cloud disk size (bytes).
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }
    }
}
