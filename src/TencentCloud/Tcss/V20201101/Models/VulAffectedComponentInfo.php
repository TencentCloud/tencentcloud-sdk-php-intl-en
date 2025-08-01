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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the component affected by the vulnerability
 *
 * @method string getName() Obtain Component name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Component name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVersion() Obtain Component version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(array $Version) Set Component version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getFixedVersion() Obtain Fixed component version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFixedVersion(array $FixedVersion) Set Fixed component version
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VulAffectedComponentInfo extends AbstractModel
{
    /**
     * @var string Component name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var array Component version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var array Fixed component version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FixedVersion;

    /**
     * @param string $Name Component name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Version Component version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $FixedVersion Fixed component version
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("FixedVersion",$param) and $param["FixedVersion"] !== null) {
            $this->FixedVersion = $param["FixedVersion"];
        }
    }
}
