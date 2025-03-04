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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Disk specifications.
 *
 * @method integer getDiskCount() Obtain Disk Count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskCount(integer $DiskCount) Set Disk Count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxDiskSize() Obtain Max Disk Size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxDiskSize(integer $MaxDiskSize) Set Max Disk Size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMinDiskSize() Obtain Min Disk Size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinDiskSize(integer $MinDiskSize) Set Min Disk Size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDiskType() Obtain Disk Type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskType(string $DiskType) Set Disk Type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDiskDesc() Obtain Disk Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskDesc(string $DiskDesc) Set Disk Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCvmClass() Obtain Cvm Class
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCvmClass(string $CvmClass) Set Cvm Class
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DiskSpecPlus extends AbstractModel
{
    /**
     * @var integer Disk Count
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskCount;

    /**
     * @var integer Max Disk Size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxDiskSize;

    /**
     * @var integer Min Disk Size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinDiskSize;

    /**
     * @var string Disk Type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskType;

    /**
     * @var string Disk Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskDesc;

    /**
     * @var string Cvm Class
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CvmClass;

    /**
     * @param integer $DiskCount Disk Count
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxDiskSize Max Disk Size
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MinDiskSize Min Disk Size
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DiskType Disk Type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DiskDesc Disk Description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CvmClass Cvm Class
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
