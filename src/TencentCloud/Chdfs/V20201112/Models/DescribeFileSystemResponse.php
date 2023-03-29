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
 * DescribeFileSystem response structure.
 *
 * @method FileSystem getFileSystem() Obtain File system
 * @method void setFileSystem(FileSystem $FileSystem) Set File system
 * @method integer getCapacityUsed() Obtain Used capacity of the file system, in bytes
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setCapacityUsed(integer $CapacityUsed) Set Used capacity of the file system, in bytes
Note: this field may return `null`, indicating that no valid value was found.
 * @method integer getArchiveCapacityUsed() Obtain Used ARCHIVE capacity of COS, in bytes
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setArchiveCapacityUsed(integer $ArchiveCapacityUsed) Set Used ARCHIVE capacity of COS, in bytes
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getStandardCapacityUsed() Obtain Used STANDARD capacity of COS, in bytes
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setStandardCapacityUsed(integer $StandardCapacityUsed) Set Used STANDARD capacity of COS, in bytes
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getDegradeCapacityUsed() Obtain Used STANDARD_IA capacity of COS, in bytes
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setDegradeCapacityUsed(integer $DegradeCapacityUsed) Set Used STANDARD_IA capacity of COS, in bytes
Note: this field may return `null`, indicating that no valid value was found.
 * @method integer getDeepArchiveCapacityUsed() Obtain COS DEEP ARCHIVE storage usage, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeepArchiveCapacityUsed(integer $DeepArchiveCapacityUsed) Set COS DEEP ARCHIVE storage usage, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIntelligentCapacityUsed() Obtain COS INTELLIGENT TIERING storage usage, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntelligentCapacityUsed(integer $IntelligentCapacityUsed) Set COS INTELLIGENT TIERING storage usage, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeFileSystemResponse extends AbstractModel
{
    /**
     * @var FileSystem File system
     */
    public $FileSystem;

    /**
     * @var integer Used capacity of the file system, in bytes
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $CapacityUsed;

    /**
     * @var integer Used ARCHIVE capacity of COS, in bytes
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ArchiveCapacityUsed;

    /**
     * @var integer Used STANDARD capacity of COS, in bytes
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $StandardCapacityUsed;

    /**
     * @var integer Used STANDARD_IA capacity of COS, in bytes
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $DegradeCapacityUsed;

    /**
     * @var integer COS DEEP ARCHIVE storage usage, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeepArchiveCapacityUsed;

    /**
     * @var integer COS INTELLIGENT TIERING storage usage, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IntelligentCapacityUsed;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param FileSystem $FileSystem File system
     * @param integer $CapacityUsed Used capacity of the file system, in bytes
Note: this field may return `null`, indicating that no valid value was found.
     * @param integer $ArchiveCapacityUsed Used ARCHIVE capacity of COS, in bytes
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $StandardCapacityUsed Used STANDARD capacity of COS, in bytes
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $DegradeCapacityUsed Used STANDARD_IA capacity of COS, in bytes
Note: this field may return `null`, indicating that no valid value was found.
     * @param integer $DeepArchiveCapacityUsed COS DEEP ARCHIVE storage usage, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IntelligentCapacityUsed COS INTELLIGENT TIERING storage usage, in bytes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("FileSystem",$param) and $param["FileSystem"] !== null) {
            $this->FileSystem = new FileSystem();
            $this->FileSystem->deserialize($param["FileSystem"]);
        }

        if (array_key_exists("CapacityUsed",$param) and $param["CapacityUsed"] !== null) {
            $this->CapacityUsed = $param["CapacityUsed"];
        }

        if (array_key_exists("ArchiveCapacityUsed",$param) and $param["ArchiveCapacityUsed"] !== null) {
            $this->ArchiveCapacityUsed = $param["ArchiveCapacityUsed"];
        }

        if (array_key_exists("StandardCapacityUsed",$param) and $param["StandardCapacityUsed"] !== null) {
            $this->StandardCapacityUsed = $param["StandardCapacityUsed"];
        }

        if (array_key_exists("DegradeCapacityUsed",$param) and $param["DegradeCapacityUsed"] !== null) {
            $this->DegradeCapacityUsed = $param["DegradeCapacityUsed"];
        }

        if (array_key_exists("DeepArchiveCapacityUsed",$param) and $param["DeepArchiveCapacityUsed"] !== null) {
            $this->DeepArchiveCapacityUsed = $param["DeepArchiveCapacityUsed"];
        }

        if (array_key_exists("IntelligentCapacityUsed",$param) and $param["IntelligentCapacityUsed"] !== null) {
            $this->IntelligentCapacityUsed = $param["IntelligentCapacityUsed"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
