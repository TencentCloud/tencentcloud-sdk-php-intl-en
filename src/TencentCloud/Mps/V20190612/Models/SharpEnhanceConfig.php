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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detail enhancement configuration.
 *
 * @method string getSwitch() Obtain Whether to enable the feature. Valid values:
<li>ON</li>
<li>OFF</li>
Default value: ON.
 * @method void setSwitch(string $Switch) Set Whether to enable the feature. Valid values:
<li>ON</li>
<li>OFF</li>
Default value: ON.
 * @method float getIntensity() Obtain The strength. Value range: 0.0-1.0
Default value: 0.0
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntensity(float $Intensity) Set The strength. Value range: 0.0-1.0
Default value: 0.0
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SharpEnhanceConfig extends AbstractModel
{
    /**
     * @var string Whether to enable the feature. Valid values:
<li>ON</li>
<li>OFF</li>
Default value: ON.
     */
    public $Switch;

    /**
     * @var float The strength. Value range: 0.0-1.0
Default value: 0.0
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Intensity;

    /**
     * @param string $Switch Whether to enable the feature. Valid values:
<li>ON</li>
<li>OFF</li>
Default value: ON.
     * @param float $Intensity The strength. Value range: 0.0-1.0
Default value: 0.0
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Intensity",$param) and $param["Intensity"] !== null) {
            $this->Intensity = $param["Intensity"];
        }
    }
}
