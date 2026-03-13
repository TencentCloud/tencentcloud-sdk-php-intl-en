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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Recoverable time interval.
 *
 * @method string getEndTime() Obtain End time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set End time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMajorVersion() Obtain Major version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMajorVersion(string $MajorVersion) Set Major version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMinorVersion() Obtain Minor version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinorVersion(string $MinorVersion) Set Minor version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Start time.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ArchiveLogInterval extends AbstractModel
{
    /**
     * @var string End time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Major version.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MajorVersion;

    /**
     * @var string Minor version.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinorVersion;

    /**
     * @var string Start time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @param string $EndTime End time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MajorVersion Major version.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MinorVersion Minor version.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Start time.
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
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MajorVersion",$param) and $param["MajorVersion"] !== null) {
            $this->MajorVersion = $param["MajorVersion"];
        }

        if (array_key_exists("MinorVersion",$param) and $param["MinorVersion"] !== null) {
            $this->MinorVersion = $param["MinorVersion"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
