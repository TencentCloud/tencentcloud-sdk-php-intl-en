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
 * Super resolution configuration.
 *
 * @method string getSwitch() Obtain Whether to enable super resolution. Valid values:
<li>ON</li>
<li>`OFF`</li>
If super resolution is enabled, the output resolution will double.
 * @method void setSwitch(string $Switch) Set Whether to enable super resolution. Valid values:
<li>ON</li>
<li>`OFF`</li>
If super resolution is enabled, the output resolution will double.
 * @method string getType() Obtain The super resolution type. This parameter is valid only if `Switch` is `ON`. Valid values:
<li>`lq`: For low-resolution videos with obvious noise</li>
<li>`hq`: For high-resolution videos</li>
Default value: `lq`.
 * @method void setType(string $Type) Set The super resolution type. This parameter is valid only if `Switch` is `ON`. Valid values:
<li>`lq`: For low-resolution videos with obvious noise</li>
<li>`hq`: For high-resolution videos</li>
Default value: `lq`.
 * @method integer getSize() Obtain The ratio of the target resolution to the original resolution. Valid values: `2`.
Default value: `2`.
 * @method void setSize(integer $Size) Set The ratio of the target resolution to the original resolution. Valid values: `2`.
Default value: `2`.
 */
class SuperResolutionInfo extends AbstractModel
{
    /**
     * @var string Whether to enable super resolution. Valid values:
<li>ON</li>
<li>`OFF`</li>
If super resolution is enabled, the output resolution will double.
     */
    public $Switch;

    /**
     * @var string The super resolution type. This parameter is valid only if `Switch` is `ON`. Valid values:
<li>`lq`: For low-resolution videos with obvious noise</li>
<li>`hq`: For high-resolution videos</li>
Default value: `lq`.
     */
    public $Type;

    /**
     * @var integer The ratio of the target resolution to the original resolution. Valid values: `2`.
Default value: `2`.
     */
    public $Size;

    /**
     * @param string $Switch Whether to enable super resolution. Valid values:
<li>ON</li>
<li>`OFF`</li>
If super resolution is enabled, the output resolution will double.
     * @param string $Type The super resolution type. This parameter is valid only if `Switch` is `ON`. Valid values:
<li>`lq`: For low-resolution videos with obvious noise</li>
<li>`hq`: For high-resolution videos</li>
Default value: `lq`.
     * @param integer $Size The ratio of the target resolution to the original resolution. Valid values: `2`.
Default value: `2`.
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
