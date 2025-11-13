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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LLM enhancement.
 *
 * @method string getSwitch() Obtain Capability configuration switch. Valid values:
ON: enabled.
OFF: disabled.
Default value: OFF.
 * @method void setSwitch(string $Switch) Set Capability configuration switch. Valid values:
ON: enabled.
OFF: disabled.
Default value: OFF.
 * @method string getType() Obtain Strength type. Valid values:
weak
normal
strong
Default value: normal.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Strength type. Valid values:
weak
normal
strong
Default value: normal.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DiffusionEnhanceConfig extends AbstractModel
{
    /**
     * @var string Capability configuration switch. Valid values:
ON: enabled.
OFF: disabled.
Default value: OFF.
     */
    public $Switch;

    /**
     * @var string Strength type. Valid values:
weak
normal
strong
Default value: normal.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @param string $Switch Capability configuration switch. Valid values:
ON: enabled.
OFF: disabled.
Default value: OFF.
     * @param string $Type Strength type. Valid values:
weak
normal
strong
Default value: normal.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
