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
 * Control parameters for detecting video noise.
 *
 * @method string getSwitch() Obtain Video noise inspection switch, optional values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>
 * @method void setSwitch(string $Switch) Set Video noise inspection switch, optional values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>
 */
class NoiseConfigureInfo extends AbstractModel
{
    /**
     * @var string Video noise inspection switch, optional values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>
     */
    public $Switch;

    /**
     * @param string $Switch Video noise inspection switch, optional values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>
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
    }
}
