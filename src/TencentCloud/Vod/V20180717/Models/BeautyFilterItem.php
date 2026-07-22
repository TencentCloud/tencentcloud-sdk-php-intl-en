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
 * Beauty filter item.
 *
 * @method string getSwitch() Obtain <p>Whether to enable filters.</p><p>Enumeration value:</p><ul><li>ON: On</li><li>OFF: Off</li></ul>
 * @method void setSwitch(string $Switch) Set <p>Whether to enable filters.</p><p>Enumeration value:</p><ul><li>ON: On</li><li>OFF: Off</li></ul>
 * @method string getType() Obtain <p>Filter item.</p>
 * @method void setType(string $Type) Set <p>Filter item.</p>
 * @method integer getValue() Obtain <p>Filter strength.</p>
 * @method void setValue(integer $Value) Set <p>Filter strength.</p>
 */
class BeautyFilterItem extends AbstractModel
{
    /**
     * @var string <p>Whether to enable filters.</p><p>Enumeration value:</p><ul><li>ON: On</li><li>OFF: Off</li></ul>
     */
    public $Switch;

    /**
     * @var string <p>Filter item.</p>
     */
    public $Type;

    /**
     * @var integer <p>Filter strength.</p>
     */
    public $Value;

    /**
     * @param string $Switch <p>Whether to enable filters.</p><p>Enumeration value:</p><ul><li>ON: On</li><li>OFF: Off</li></ul>
     * @param string $Type <p>Filter item.</p>
     * @param integer $Value <p>Filter strength.</p>
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
