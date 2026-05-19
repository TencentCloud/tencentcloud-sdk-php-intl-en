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
 * Volume equalization configuration.
 *
 * @method string getSwitch() Obtain Volume equalization control switch. Available values:
<li>ON: enable volume equalization;</li>
<li>OFF: Disable volume normalization.</li>
 * @method void setSwitch(string $Switch) Set Volume equalization control switch. Available values:
<li>ON: enable volume equalization;</li>
<li>OFF: Disable volume normalization.</li>
 * @method string getType() Obtain Type, available values:
<li>loudNorm: Loudness normalization</li>
<li>gainControl: Reduce abrupt change</li>
Default value: loudNorm.
 * @method void setType(string $Type) Set Type, available values:
<li>loudNorm: Loudness normalization</li>
<li>gainControl: Reduce abrupt change</li>
Default value: loudNorm.
 */
class AudioVolumeBalanceInfo extends AbstractModel
{
    /**
     * @var string Volume equalization control switch. Available values:
<li>ON: enable volume equalization;</li>
<li>OFF: Disable volume normalization.</li>
     */
    public $Switch;

    /**
     * @var string Type, available values:
<li>loudNorm: Loudness normalization</li>
<li>gainControl: Reduce abrupt change</li>
Default value: loudNorm.
     */
    public $Type;

    /**
     * @param string $Switch Volume equalization control switch. Available values:
<li>ON: enable volume equalization;</li>
<li>OFF: Disable volume normalization.</li>
     * @param string $Type Type, available values:
<li>loudNorm: Loudness normalization</li>
<li>gainControl: Reduce abrupt change</li>
Default value: loudNorm.
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
