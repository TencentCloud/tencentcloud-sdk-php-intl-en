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
 * Comprehensive enhancement control
 *
 * @method string getSwitch() Obtain Comprehensive enhancement control switch. Valid values:
<li>ON: enable comprehensive enhancement</li>
<li>OFF: disable comprehensive enhancement</li>
 * @method void setSwitch(string $Switch) Set Comprehensive enhancement control switch. Valid values:
<li>ON: enable comprehensive enhancement</li>
<li>OFF: disable comprehensive enhancement</li>
 * @method string getType() Obtain Comprehensive enhancement type. Valid only when the control switch is ON. Available values:
<li>weak: light comprehensive enhancement.</li>
<li>NORMAL: Comprehensive enhancement is normal.</li>
<li>strong: comprehensive enhancement.</li>
Default value: weak.
 * @method void setType(string $Type) Set Comprehensive enhancement type. Valid only when the control switch is ON. Available values:
<li>weak: light comprehensive enhancement.</li>
<li>NORMAL: Comprehensive enhancement is normal.</li>
<li>strong: comprehensive enhancement.</li>
Default value: weak.
 */
class ImageQualityEnhanceInfo extends AbstractModel
{
    /**
     * @var string Comprehensive enhancement control switch. Valid values:
<li>ON: enable comprehensive enhancement</li>
<li>OFF: disable comprehensive enhancement</li>
     */
    public $Switch;

    /**
     * @var string Comprehensive enhancement type. Valid only when the control switch is ON. Available values:
<li>weak: light comprehensive enhancement.</li>
<li>NORMAL: Comprehensive enhancement is normal.</li>
<li>strong: comprehensive enhancement.</li>
Default value: weak.
     */
    public $Type;

    /**
     * @param string $Switch Comprehensive enhancement control switch. Valid values:
<li>ON: enable comprehensive enhancement</li>
<li>OFF: disable comprehensive enhancement</li>
     * @param string $Type Comprehensive enhancement type. Valid only when the control switch is ON. Available values:
<li>weak: light comprehensive enhancement.</li>
<li>NORMAL: Comprehensive enhancement is normal.</li>
<li>strong: comprehensive enhancement.</li>
Default value: weak.
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
