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
 * Component information
 *
 * @method string getComponent() Obtain Component name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponent(string $Component) Set Component name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain Component version information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Component version information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ComponentsInfo extends AbstractModel
{
    /**
     * @var string Component name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Component;

    /**
     * @var string Component version information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @param string $Component Component name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Version Component version information
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
        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
