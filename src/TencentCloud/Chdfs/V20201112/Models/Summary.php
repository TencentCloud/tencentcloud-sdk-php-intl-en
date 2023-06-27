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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details about the storage usage of the current lifecycle rule path
 *
 * @method integer getCapacityUsed() Obtain Capacity usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCapacityUsed(integer $CapacityUsed) Set Capacity usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStandardCapacityUsed() Obtain COS STANDARD storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStandardCapacityUsed(integer $StandardCapacityUsed) Set COS STANDARD storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDegradeCapacityUsed() Obtain COS STANDARD_IA storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDegradeCapacityUsed(integer $DegradeCapacityUsed) Set COS STANDARD_IA storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getArchiveCapacityUsed() Obtain COS ARCHIVE storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setArchiveCapacityUsed(integer $ArchiveCapacityUsed) Set COS ARCHIVE storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDeepArchiveCapacityUsed() Obtain COS DEEP ARCHIVE storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeepArchiveCapacityUsed(integer $DeepArchiveCapacityUsed) Set COS DEEP ARCHIVE storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIntelligentCapacityUsed() Obtain COS INTELLIGENT TIERING storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntelligentCapacityUsed(integer $IntelligentCapacityUsed) Set COS INTELLIGENT TIERING storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Summary extends AbstractModel
{
    /**
     * @var integer Capacity usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CapacityUsed;

    /**
     * @var integer COS STANDARD storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StandardCapacityUsed;

    /**
     * @var integer COS STANDARD_IA storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DegradeCapacityUsed;

    /**
     * @var integer COS ARCHIVE storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ArchiveCapacityUsed;

    /**
     * @var integer COS DEEP ARCHIVE storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeepArchiveCapacityUsed;

    /**
     * @var integer COS INTELLIGENT TIERING storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IntelligentCapacityUsed;

    /**
     * @param integer $CapacityUsed Capacity usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StandardCapacityUsed COS STANDARD storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DegradeCapacityUsed COS STANDARD_IA storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ArchiveCapacityUsed COS ARCHIVE storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DeepArchiveCapacityUsed COS DEEP ARCHIVE storage usage in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IntelligentCapacityUsed COS INTELLIGENT TIERING storage usage in bytes
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
        if (array_key_exists("CapacityUsed",$param) and $param["CapacityUsed"] !== null) {
            $this->CapacityUsed = $param["CapacityUsed"];
        }

        if (array_key_exists("StandardCapacityUsed",$param) and $param["StandardCapacityUsed"] !== null) {
            $this->StandardCapacityUsed = $param["StandardCapacityUsed"];
        }

        if (array_key_exists("DegradeCapacityUsed",$param) and $param["DegradeCapacityUsed"] !== null) {
            $this->DegradeCapacityUsed = $param["DegradeCapacityUsed"];
        }

        if (array_key_exists("ArchiveCapacityUsed",$param) and $param["ArchiveCapacityUsed"] !== null) {
            $this->ArchiveCapacityUsed = $param["ArchiveCapacityUsed"];
        }

        if (array_key_exists("DeepArchiveCapacityUsed",$param) and $param["DeepArchiveCapacityUsed"] !== null) {
            $this->DeepArchiveCapacityUsed = $param["DeepArchiveCapacityUsed"];
        }

        if (array_key_exists("IntelligentCapacityUsed",$param) and $param["IntelligentCapacityUsed"] !== null) {
            $this->IntelligentCapacityUsed = $param["IntelligentCapacityUsed"];
        }
    }
}
