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
 * Face enhancement control
 *
 * @method string getSwitch() Obtain Face enhancement control switch. Available values:
<li>ON: enable face enhancement;</li>
<li>OFF: disables face enhancement.</li>
 * @method void setSwitch(string $Switch) Set Face enhancement control switch. Available values:
<li>ON: enable face enhancement;</li>
<li>OFF: disables face enhancement.</li>
 * @method float getIntensity() Obtain Face enhancement strength. Valid only when the face enhancement control switch is ON. Value range: 0.0-1.0.
Default value: 0.0.
 * @method void setIntensity(float $Intensity) Set Face enhancement strength. Valid only when the face enhancement control switch is ON. Value range: 0.0-1.0.
Default value: 0.0.
 */
class FaceEnhanceInfo extends AbstractModel
{
    /**
     * @var string Face enhancement control switch. Available values:
<li>ON: enable face enhancement;</li>
<li>OFF: disables face enhancement.</li>
     */
    public $Switch;

    /**
     * @var float Face enhancement strength. Valid only when the face enhancement control switch is ON. Value range: 0.0-1.0.
Default value: 0.0.
     */
    public $Intensity;

    /**
     * @param string $Switch Face enhancement control switch. Available values:
<li>ON: enable face enhancement;</li>
<li>OFF: disables face enhancement.</li>
     * @param float $Intensity Face enhancement strength. Valid only when the face enhancement control switch is ON. Value range: 0.0-1.0.
Default value: 0.0.
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
