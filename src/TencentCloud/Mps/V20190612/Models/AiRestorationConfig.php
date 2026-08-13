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
 * LLM repair
 *
 * @method string getSwitch() Obtain <p>Capability configuration switch</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: OFF</p>
 * @method void setSwitch(string $Switch) Set <p>Capability configuration switch</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: OFF</p>
 * @method string getType() Obtain <p>Strength type</p><p>Enumeration values:</p><ul><li>weak: Weak</li><li>normal: Medium</li><li>strong: Strong</li></ul><p>Default value: normal</p>
 * @method void setType(string $Type) Set <p>Strength type</p><p>Enumeration values:</p><ul><li>weak: Weak</li><li>normal: Medium</li><li>strong: Strong</li></ul><p>Default value: normal</p>
 */
class AiRestorationConfig extends AbstractModel
{
    /**
     * @var string <p>Capability configuration switch</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: OFF</p>
     */
    public $Switch;

    /**
     * @var string <p>Strength type</p><p>Enumeration values:</p><ul><li>weak: Weak</li><li>normal: Medium</li><li>strong: Strong</li></ul><p>Default value: normal</p>
     */
    public $Type;

    /**
     * @param string $Switch <p>Capability configuration switch</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: OFF</p>
     * @param string $Type <p>Strength type</p><p>Enumeration values:</p><ul><li>weak: Weak</li><li>normal: Medium</li><li>strong: Strong</li></ul><p>Default value: normal</p>
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
