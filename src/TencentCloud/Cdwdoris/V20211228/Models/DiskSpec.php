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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Disk specification description
 *
 * @method string getDiskType() Obtain Disk type, such as CLOUD_SSD and LOCAL_SSD
 * @method void setDiskType(string $DiskType) Set Disk type, such as CLOUD_SSD and LOCAL_SSD
 * @method string getDiskDesc() Obtain Disk type description, such as cloud SSD and local SSD
 * @method void setDiskDesc(string $DiskDesc) Set Disk type description, such as cloud SSD and local SSD
 * @method integer getMinDiskSize() Obtain Minimum disk size, in GB
 * @method void setMinDiskSize(integer $MinDiskSize) Set Minimum disk size, in GB
 * @method integer getMaxDiskSize() Obtain Maximum disk size, in GB
 * @method void setMaxDiskSize(integer $MaxDiskSize) Set Maximum disk size, in GB
 * @method integer getDiskCount() Obtain Number of disks
 * @method void setDiskCount(integer $DiskCount) Set Number of disks
 */
class DiskSpec extends AbstractModel
{
    /**
     * @var string Disk type, such as CLOUD_SSD and LOCAL_SSD
     */
    public $DiskType;

    /**
     * @var string Disk type description, such as cloud SSD and local SSD
     */
    public $DiskDesc;

    /**
     * @var integer Minimum disk size, in GB
     */
    public $MinDiskSize;

    /**
     * @var integer Maximum disk size, in GB
     */
    public $MaxDiskSize;

    /**
     * @var integer Number of disks
     */
    public $DiskCount;

    /**
     * @param string $DiskType Disk type, such as CLOUD_SSD and LOCAL_SSD
     * @param string $DiskDesc Disk type description, such as cloud SSD and local SSD
     * @param integer $MinDiskSize Minimum disk size, in GB
     * @param integer $MaxDiskSize Maximum disk size, in GB
     * @param integer $DiskCount Number of disks
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

        if (array_key_exists("DiskDesc",$param) and $param["DiskDesc"] !== null) {
            $this->DiskDesc = $param["DiskDesc"];
        }

        if (array_key_exists("MinDiskSize",$param) and $param["MinDiskSize"] !== null) {
            $this->MinDiskSize = $param["MinDiskSize"];
        }

        if (array_key_exists("MaxDiskSize",$param) and $param["MaxDiskSize"] !== null) {
            $this->MaxDiskSize = $param["MaxDiskSize"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }
    }
}
