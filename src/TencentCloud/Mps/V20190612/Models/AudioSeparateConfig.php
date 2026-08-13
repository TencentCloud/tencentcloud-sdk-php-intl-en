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
 * The audio separation configuration.
 *
 * @method string getSwitch() Obtain Whether to enable the feature. Valid values:
<li>`ON`</li>
<li>`OFF` </li>
Default value: `ON`.
 * @method void setSwitch(string $Switch) Set Whether to enable the feature. Valid values:
<li>`ON`</li>
<li>`OFF` </li>
Default value: `ON`.
 * @method string getType() Obtain Scenario type. Valid values:
<li>normal: Voice background audio scenario</li>
<li>music: Singing accompaniment scenario</li>
Default value: normal.
 * @method void setType(string $Type) Set Scenario type. Valid values:
<li>normal: Voice background audio scenario</li>
<li>music: Singing accompaniment scenario</li>
Default value: normal.
 * @method string getTrack() Obtain Output audio track. Available values:
<li>vocal: output voice.</li>
<li>Background: Output background audio when the application scenario is normal, and output accompaniment when the application scenario is music.</li>
Default value: vocal.
 * @method void setTrack(string $Track) Set Output audio track. Available values:
<li>vocal: output voice.</li>
<li>Background: Output background audio when the application scenario is normal, and output accompaniment when the application scenario is music.</li>
Default value: vocal.
 */
class AudioSeparateConfig extends AbstractModel
{
    /**
     * @var string Whether to enable the feature. Valid values:
<li>`ON`</li>
<li>`OFF` </li>
Default value: `ON`.
     */
    public $Switch;

    /**
     * @var string Scenario type. Valid values:
<li>normal: Voice background audio scenario</li>
<li>music: Singing accompaniment scenario</li>
Default value: normal.
     */
    public $Type;

    /**
     * @var string Output audio track. Available values:
<li>vocal: output voice.</li>
<li>Background: Output background audio when the application scenario is normal, and output accompaniment when the application scenario is music.</li>
Default value: vocal.
     */
    public $Track;

    /**
     * @param string $Switch Whether to enable the feature. Valid values:
<li>`ON`</li>
<li>`OFF` </li>
Default value: `ON`.
     * @param string $Type Scenario type. Valid values:
<li>normal: Voice background audio scenario</li>
<li>music: Singing accompaniment scenario</li>
Default value: normal.
     * @param string $Track Output audio track. Available values:
<li>vocal: output voice.</li>
<li>Background: Output background audio when the application scenario is normal, and output accompaniment when the application scenario is music.</li>
Default value: vocal.
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

        if (array_key_exists("Track",$param) and $param["Track"] !== null) {
            $this->Track = $param["Track"];
        }
    }
}
