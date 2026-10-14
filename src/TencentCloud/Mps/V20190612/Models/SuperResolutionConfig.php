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
 * @method string getSwitch() Obtain Capability configuration switch. Valid values:
<li>ON: enabled</li>
<li>OFF: disabled</li>
Default value: ON.
 * @method void setSwitch(string $Switch) Set Capability configuration switch. Valid values:
<li>ON: enabled</li>
<li>OFF: disabled</li>
Default value: ON.
 * @method string getType() Obtain Type. Valid values:
<li>lq: super resolution for low resolution videos with considerable noise;</li>
<li>hq: For high resolution video super-resolution.</li>
Default value: lq.
 * @method void setType(string $Type) Set Type. Valid values:
<li>lq: super resolution for low resolution videos with considerable noise;</li>
<li>hq: For high resolution video super-resolution.</li>
Default value: lq.
 * @method integer getSize() Obtain Upscaling multiple. Available values:
<li>2: currently only support 2x super resolution.</li>
Default value: 2.
 * @method void setSize(integer $Size) Set Upscaling multiple. Available values:
<li>2: currently only support 2x super resolution.</li>
Default value: 2.
 */
class SuperResolutionConfig extends AbstractModel
{
    /**
     * @var string Capability configuration switch. Valid values:
<li>ON: enabled</li>
<li>OFF: disabled</li>
Default value: ON.
     */
    public $Switch;

    /**
     * @var string Type. Valid values:
<li>lq: super resolution for low resolution videos with considerable noise;</li>
<li>hq: For high resolution video super-resolution.</li>
Default value: lq.
     */
    public $Type;

    /**
     * @var integer Upscaling multiple. Available values:
<li>2: currently only support 2x super resolution.</li>
Default value: 2.
     */
    public $Size;

    /**
     * @param string $Switch Capability configuration switch. Valid values:
<li>ON: enabled</li>
<li>OFF: disabled</li>
Default value: ON.
     * @param string $Type Type. Valid values:
<li>lq: super resolution for low resolution videos with considerable noise;</li>
<li>hq: For high resolution video super-resolution.</li>
Default value: lq.
     * @param integer $Size Upscaling multiple. Available values:
<li>2: currently only support 2x super resolution.</li>
Default value: 2.
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
