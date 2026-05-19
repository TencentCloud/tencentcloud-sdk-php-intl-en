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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LLM enhancement configuration.
 *
 * @method string getSwitch() Obtain Large model enhancement switch. Available values:
<li>ON: enabled</li>
<li>OFF: disabled</li>
 * @method void setSwitch(string $Switch) Set Large model enhancement switch. Available values:
<li>ON: enabled</li>
<li>OFF: disabled</li>
 * @method string getType() Obtain Intensity type. Valid only when the large model enhancement control switch is ON. Value range:
<li>weak: weak;</li>
<li>NORMAL: The scaling group is normal.</li>
<li>strong: strong.</li>
Default value: normal.
 * @method void setType(string $Type) Set Intensity type. Valid only when the large model enhancement control switch is ON. Value range:
<li>weak: weak;</li>
<li>NORMAL: The scaling group is normal.</li>
<li>strong: strong.</li>
Default value: normal.
 */
class DiffusionEnhanceInfo extends AbstractModel
{
    /**
     * @var string Large model enhancement switch. Available values:
<li>ON: enabled</li>
<li>OFF: disabled</li>
     */
    public $Switch;

    /**
     * @var string Intensity type. Valid only when the large model enhancement control switch is ON. Value range:
<li>weak: weak;</li>
<li>NORMAL: The scaling group is normal.</li>
<li>strong: strong.</li>
Default value: normal.
     */
    public $Type;

    /**
     * @param string $Switch Large model enhancement switch. Available values:
<li>ON: enabled</li>
<li>OFF: disabled</li>
     * @param string $Type Intensity type. Valid only when the large model enhancement control switch is ON. Value range:
<li>weak: weak;</li>
<li>NORMAL: The scaling group is normal.</li>
<li>strong: strong.</li>
Default value: normal.
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
