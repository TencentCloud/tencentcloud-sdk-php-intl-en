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
 * Instance node information.
 *
 * @method string getSpecName() Obtain Model.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpecName(string $SpecName) Set Model.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method DiskSpecPlus getDataDisk() Obtain Disk information.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataDisk(DiskSpecPlus $DataDisk) Set Disk information.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCvmCount() Obtain Number of machines.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCvmCount(integer $CvmCount) Set Number of machines.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceNodeGroup extends AbstractModel
{
    /**
     * @var string Model.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpecName;

    /**
     * @var DiskSpecPlus Disk information.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataDisk;

    /**
     * @var integer Number of machines.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CvmCount;

    /**
     * @param string $SpecName Model.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param DiskSpecPlus $DataDisk Disk information.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CvmCount Number of machines.
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
        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = new DiskSpecPlus();
            $this->DataDisk->deserialize($param["DataDisk"]);
        }

        if (array_key_exists("CvmCount",$param) and $param["CvmCount"] !== null) {
            $this->CvmCount = $param["CvmCount"];
        }
    }
}
