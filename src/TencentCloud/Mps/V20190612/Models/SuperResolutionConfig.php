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
 * Super resolution configuration.
 *
 * @method string getSwitch() Obtain Whether to enable the feature. Valid values:
<li>ON</li>
<li>OFF</li>
Default value: ON.
 * @method void setSwitch(string $Switch) Set Whether to enable the feature. Valid values:
<li>ON</li>
<li>OFF</li>
Default value: ON.
 * @method string getType() Obtain Type, available values:
<li>lq: Super-resolution for low-resolution videos with considerable noise;</li>
<li>hq: Targeting high-resolution video super-resolution.</li>
Default value: lq.
 * @method void setType(string $Type) Set Type, available values:
<li>lq: Super-resolution for low-resolution videos with considerable noise;</li>
<li>hq: Targeting high-resolution video super-resolution.</li>
Default value: lq.
 * @method integer getSize() Obtain Super-resolution multiple, optional value:
<li>2: Currently only support 2x super resolution.</li>
Default value: 2.
 * @method void setSize(integer $Size) Set Super-resolution multiple, optional value:
<li>2: Currently only support 2x super resolution.</li>
Default value: 2.
 */
class SuperResolutionConfig extends AbstractModel
{
    /**
     * @var string Whether to enable the feature. Valid values:
<li>ON</li>
<li>OFF</li>
Default value: ON.
     */
    public $Switch;

    /**
     * @var string Type, available values:
<li>lq: Super-resolution for low-resolution videos with considerable noise;</li>
<li>hq: Targeting high-resolution video super-resolution.</li>
Default value: lq.
     */
    public $Type;

    /**
     * @var integer Super-resolution multiple, optional value:
<li>2: Currently only support 2x super resolution.</li>
Default value: 2.
     */
    public $Size;

    /**
     * @param string $Switch Whether to enable the feature. Valid values:
<li>ON</li>
<li>OFF</li>
Default value: ON.
     * @param string $Type Type, available values:
<li>lq: Super-resolution for low-resolution videos with considerable noise;</li>
<li>hq: Targeting high-resolution video super-resolution.</li>
Default value: lq.
     * @param integer $Size Super-resolution multiple, optional value:
<li>2: Currently only support 2x super resolution.</li>
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
