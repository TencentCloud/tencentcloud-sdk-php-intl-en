<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Color enhancement configuration.
 *
 * @method string getSwitch() Obtain Whether to enable color enhancement. Valid values:
<li>`ON`</li>
<li>`OFF`</li>
 * @method void setSwitch(string $Switch) Set Whether to enable color enhancement. Valid values:
<li>`ON`</li>
<li>`OFF`</li>
 * @method string getType() Obtain The color enhancement type. This parameter is valid only if `Switch` is `ON`.
<li>`weak`</li>
<li>`normal`</li>
<li>`strong`</li>
Default value: `weak`.
 * @method void setType(string $Type) Set The color enhancement type. This parameter is valid only if `Switch` is `ON`.
<li>`weak`</li>
<li>`normal`</li>
<li>`strong`</li>
Default value: `weak`.
 */
class ColorEnhanceInfo extends AbstractModel
{
    /**
     * @var string Whether to enable color enhancement. Valid values:
<li>`ON`</li>
<li>`OFF`</li>
     */
    public $Switch;

    /**
     * @var string The color enhancement type. This parameter is valid only if `Switch` is `ON`.
<li>`weak`</li>
<li>`normal`</li>
<li>`strong`</li>
Default value: `weak`.
     */
    public $Type;

    /**
     * @param string $Switch Whether to enable color enhancement. Valid values:
<li>`ON`</li>
<li>`OFF`</li>
     * @param string $Type The color enhancement type. This parameter is valid only if `Switch` is `ON`.
<li>`weak`</li>
<li>`normal`</li>
<li>`strong`</li>
Default value: `weak`.
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
