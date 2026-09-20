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
 * Image super-resolution control parameters
 *
 * @method string getSwitch() Obtain Super resolution control switch. Optional values:
<li>ON: Turn on super resolution;</li>
<li>OFF: Disable super resolution.</li>
 * @method void setSwitch(string $Switch) Set Super resolution control switch. Optional values:
<li>ON: Turn on super resolution;</li>
<li>OFF: Disable super resolution.</li>
 * @method string getType() Obtain Super resolution type. Valid only when the super resolution control switch is ON. Available values:
<li>lq: super resolution for low-resolution videos with considerable noise;</li>
<li>hq: For high resolution video super-resolution.</li>
Default value: lq.
 * @method void setType(string $Type) Set Super resolution type. Valid only when the super resolution control switch is ON. Available values:
<li>lq: super resolution for low-resolution videos with considerable noise;</li>
<li>hq: For high resolution video super-resolution.</li>
Default value: lq.
 * @method integer getSize() Obtain Super resolution multiple. Available value: 2.
Default value: 2.
 * @method void setSize(integer $Size) Set Super resolution multiple. Available value: 2.
Default value: 2.
 */
class SuperResolutionInfo extends AbstractModel
{
    /**
     * @var string Super resolution control switch. Optional values:
<li>ON: Turn on super resolution;</li>
<li>OFF: Disable super resolution.</li>
     */
    public $Switch;

    /**
     * @var string Super resolution type. Valid only when the super resolution control switch is ON. Available values:
<li>lq: super resolution for low-resolution videos with considerable noise;</li>
<li>hq: For high resolution video super-resolution.</li>
Default value: lq.
     */
    public $Type;

    /**
     * @var integer Super resolution multiple. Available value: 2.
Default value: 2.
     */
    public $Size;

    /**
     * @param string $Switch Super resolution control switch. Optional values:
<li>ON: Turn on super resolution;</li>
<li>OFF: Disable super resolution.</li>
     * @param string $Type Super resolution type. Valid only when the super resolution control switch is ON. Available values:
<li>lq: super resolution for low-resolution videos with considerable noise;</li>
<li>hq: For high resolution video super-resolution.</li>
Default value: lq.
     * @param integer $Size Super resolution multiple. Available value: 2.
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
