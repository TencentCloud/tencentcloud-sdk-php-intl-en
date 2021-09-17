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
 * @method integer getCapacityUsed() Obtain Used capacity (in bytes), including STANDARD storage and ARCHIVE storage
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCapacityUsed(integer $CapacityUsed) Set Used capacity (in bytes), including STANDARD storage and ARCHIVE storage
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getArchiveCapacityUsed() Obtain Used ARCHIVE storage capacity (in bytes)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setArchiveCapacityUsed(integer $ArchiveCapacityUsed) Set Used ARCHIVE storage capacity (in bytes)
Note: this field may return `null`, indicating that no valid values can be obtained.
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
     * @var integer Used capacity (in bytes), including STANDARD storage and ARCHIVE storage
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CapacityUsed;

    /**
     * @var integer Used ARCHIVE storage capacity (in bytes)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ArchiveCapacityUsed;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param FileSystem $FileSystem File system
     * @param integer $CapacityUsed Used capacity (in bytes), including STANDARD storage and ARCHIVE storage
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ArchiveCapacityUsed Used ARCHIVE storage capacity (in bytes)
Note: this field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
