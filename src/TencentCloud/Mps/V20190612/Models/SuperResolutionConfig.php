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
 * Super-resolution configuration.
 *
 * @method string getSwitch() Obtain Capability configuration switch. Available values:
<li>ON: enabled;</li>
<li>OFF: disabled</li>
Default value: ON.
 * @method void setSwitch(string $Switch) Set Capability configuration switch. Available values:
<li>ON: enabled;</li>
<li>OFF: disabled</li>
Default value: ON.
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method integer getSize() Obtain 
 * @method void setSize(integer $Size) Set 
 */
class SuperResolutionConfig extends AbstractModel
{
    /**
     * @var string Capability configuration switch. Available values:
<li>ON: enabled;</li>
<li>OFF: disabled</li>
Default value: ON.
     */
    public $Switch;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var integer 
     */
    public $Size;

    /**
     * @param string $Switch Capability configuration switch. Available values:
<li>ON: enabled;</li>
<li>OFF: disabled</li>
Default value: ON.
     * @param string $Type 
     * @param integer $Size 
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
