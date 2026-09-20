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
 * Color enhancement control parameters
 *
 * @method string getSwitch() Obtain <p>Color enhancement control switch</p><p>Enumeration values: </p><ul><li>ON: Enable color enhancement</li><li>OFF: Disable color enhancement</li></ul>
 * @method void setSwitch(string $Switch) Set <p>Color enhancement control switch</p><p>Enumeration values: </p><ul><li>ON: Enable color enhancement</li><li>OFF: Disable color enhancement</li></ul>
 * @method string getType() Obtain <p>Color enhancement type. It is valid only when the color enhancement control switch is ON. Available values:</p><li>weak: light color enhancement;</li><li>normal: normal color enhancement;</li><li>strong: strong color enhancement.</li>Default value: weak.
 * @method void setType(string $Type) Set <p>Color enhancement type. It is valid only when the color enhancement control switch is ON. Available values:</p><li>weak: light color enhancement;</li><li>normal: normal color enhancement;</li><li>strong: strong color enhancement.</li>Default value: weak.
 */
class ColorEnhanceInfo extends AbstractModel
{
    /**
     * @var string <p>Color enhancement control switch</p><p>Enumeration values: </p><ul><li>ON: Enable color enhancement</li><li>OFF: Disable color enhancement</li></ul>
     */
    public $Switch;

    /**
     * @var string <p>Color enhancement type. It is valid only when the color enhancement control switch is ON. Available values:</p><li>weak: light color enhancement;</li><li>normal: normal color enhancement;</li><li>strong: strong color enhancement.</li>Default value: weak.
     */
    public $Type;

    /**
     * @param string $Switch <p>Color enhancement control switch</p><p>Enumeration values: </p><ul><li>ON: Enable color enhancement</li><li>OFF: Disable color enhancement</li></ul>
     * @param string $Type <p>Color enhancement type. It is valid only when the color enhancement control switch is ON. Available values:</p><li>weak: light color enhancement;</li><li>normal: normal color enhancement;</li><li>strong: strong color enhancement.</li>Default value: weak.
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
