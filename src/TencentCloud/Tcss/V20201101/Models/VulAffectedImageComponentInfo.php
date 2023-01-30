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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the component affected by the vulnerability
 *
 * @method string getName() Obtain Component name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Component name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain Component version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Component version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFixedVersion() Obtain Fixed component version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFixedVersion(string $FixedVersion) Set Fixed component version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPath() Obtain Component path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set Component path
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VulAffectedImageComponentInfo extends AbstractModel
{
    /**
     * @var string Component name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Component version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var string Fixed component version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FixedVersion;

    /**
     * @var string Component path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @param string $Name Component name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Version Component version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FixedVersion Fixed component version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Path Component path
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
