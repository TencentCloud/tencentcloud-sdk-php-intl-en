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
 * Frame interpolation configuration.
 *
 * @method string getSwitch() Obtain Whether to enable the feature. Valid values:
<li>ON</li>
<li>OFF</li>
Default value: ON.
 * @method void setSwitch(string $Switch) Set Whether to enable the feature. Valid values:
<li>ON</li>
<li>OFF</li>
Default value: ON.
 * @method integer getFps() Obtain The frame rate (Hz). Value range: [0, 100].
Default value: 0.
Note: For transcoding, this parameter will overwrite `Fps` of `VideoTemplate`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFps(integer $Fps) Set The frame rate (Hz). Value range: [0, 100].
Default value: 0.
Note: For transcoding, this parameter will overwrite `Fps` of `VideoTemplate`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class FrameRateConfig extends AbstractModel
{
    /**
     * @var string Whether to enable the feature. Valid values:
<li>ON</li>
<li>OFF</li>
Default value: ON.
     */
    public $Switch;

    /**
     * @var integer The frame rate (Hz). Value range: [0, 100].
Default value: 0.
Note: For transcoding, this parameter will overwrite `Fps` of `VideoTemplate`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Fps;

    /**
     * @param string $Switch Whether to enable the feature. Valid values:
<li>ON</li>
<li>OFF</li>
Default value: ON.
     * @param integer $Fps The frame rate (Hz). Value range: [0, 100].
Default value: 0.
Note: For transcoding, this parameter will overwrite `Fps` of `VideoTemplate`.
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

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }
    }
}
