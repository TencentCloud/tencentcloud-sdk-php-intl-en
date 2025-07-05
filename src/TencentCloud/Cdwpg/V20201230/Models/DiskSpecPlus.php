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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Disk specifications.
 *
 * @method integer getDiskCount() Obtain Number of disks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskCount(integer $DiskCount) Set Number of disks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxDiskSize() Obtain Maximum disk capacity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxDiskSize(integer $MaxDiskSize) Set Maximum disk capacity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMinDiskSize() Obtain Minimum disk capacity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinDiskSize(integer $MinDiskSize) Set Minimum disk capacity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDiskType() Obtain Disk type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskType(string $DiskType) Set Disk type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDiskDesc() Obtain Disk type details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskDesc(string $DiskDesc) Set Disk type details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCvmClass() Obtain Model type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCvmClass(string $CvmClass) Set Model type.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DiskSpecPlus extends AbstractModel
{
    /**
     * @var integer Number of disks.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskCount;

    /**
     * @var integer Maximum disk capacity.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxDiskSize;

    /**
     * @var integer Minimum disk capacity.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinDiskSize;

    /**
     * @var string Disk type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskType;

    /**
     * @var string Disk type details.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskDesc;

    /**
     * @var string Model type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CvmClass;

    /**
     * @param integer $DiskCount Number of disks.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxDiskSize Maximum disk capacity.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MinDiskSize Minimum disk capacity.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DiskType Disk type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DiskDesc Disk type details.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CvmClass Model type.
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
        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("MaxDiskSize",$param) and $param["MaxDiskSize"] !== null) {
            $this->MaxDiskSize = $param["MaxDiskSize"];
        }

        if (array_key_exists("MinDiskSize",$param) and $param["MinDiskSize"] !== null) {
            $this->MinDiskSize = $param["MinDiskSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskDesc",$param) and $param["DiskDesc"] !== null) {
            $this->DiskDesc = $param["DiskDesc"];
        }

        if (array_key_exists("CvmClass",$param) and $param["CvmClass"] !== null) {
            $this->CvmClass = $param["CvmClass"];
        }
    }
}
