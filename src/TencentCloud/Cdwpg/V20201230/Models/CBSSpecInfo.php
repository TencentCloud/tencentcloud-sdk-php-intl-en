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
 * Disk information.
 *
 * @method string getDiskType() Obtain Disk type.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskType(string $DiskType) Set Disk type.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskSize() Obtain Size.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskSize(integer $DiskSize) Set Size.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskCount() Obtain Number.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskCount(integer $DiskCount) Set Number.Note: This field may return null, indicating that no valid values can be obtained.
 */
class CBSSpecInfo extends AbstractModel
{
    /**
     * @var string Disk type.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskType;

    /**
     * @var integer Size.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskSize;

    /**
     * @var integer Number.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskCount;

    /**
     * @param string $DiskType Disk type.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskSize Size.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskCount Number.Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }
    }
}
